<?php
/**
 * @package    
 * @file       ResponseReader.php
 * @version    
 * @copyright  Copyright 7/2/2022 Weblinko
 * @license    http://www.weblinko.fr/license/
 **/

class MTOM_ResponseReader
{

    const CONTENT_TYPE = 'Content-Type: application/xop+xml;';
    const UUID = '/--uuid:/'; //This is the separator of each part of the response
    const CONTENT = 'Content-';
    public $attachments = array();
    public $soapResponse = array();
    public $objectResponse = null;
    public $xmlResponse = null;
    public $uuid = null;

    public function __construct($response)
    {
        if (strpos($response, self::CONTENT_TYPE) !== FALSE) {
            $this->parseResponse($response);
        } else {
            throw new Exception('This response is not : ' . self::CONTENT_TYPE);
        }
    }

    private function parseResponse($response)
    {
        $content = array();
        $matches = array();
        preg_match_all(self::UUID, $response, $matches, PREG_OFFSET_CAPTURE);

        for ($i = 0; $i < count($matches[0]) - 1; $i++) {
            if ($i + 1 < count($matches[0])) {
                $content[$i] = substr($response,
                    $matches[0][$i][1],
                    $matches[0][$i + 1][1] - $matches[0][$i][1]);
            } else {
                $content[$i] = substr($response, $matches[0][$i][1], strlen($response));
            }
        }

        foreach ($content as $part) {
            if ($this->uuid == null) {
                $uuidStart = 0;
                $uuidEnd = 0;
                $uuidStart = strpos($part, self::UUID, 0) + strlen(self::UUID);
                $uuidEnd = strpos($part, "\r\n", $uuidStart);
                $this->uuid = substr($part, $uuidStart, $uuidEnd - $uuidStart);
            }
            $header = $this->extractHeader($part);

            if (count($header) > 0) {
                if (strpos($header['Content-Type'], 'type="text/xml"') !== FALSE) {
                    $this->soapResponse['header'] = $header;
                    $this->soapResponse['data'] = trim(substr($part, $header['offsetEnd']));
                    $this->objectResponse = $this->soapToObject($this->soapResponse['data']);
                    $this->xmlResponse = $this->soapToXml($this->soapResponse['data']);
                } else {
                    $attachment['header'] = $header;
                    $attachment['data'] = trim(substr($part, $header['offsetEnd']));
                    array_push($this->attachments, $attachment);
                }
            }
        }
    }

    /**
     * Exclude the header from the Web Service response
     * @param string $part
     * @return array $header
     */

    private function extractHeader($part)
    {
        $header = array();
        $headerLineStart = strpos($part, self::CONTENT, 0);
        $endLine = 0;
        while ($headerLineStart !== FALSE) {
            $header['offsetStart'] = $headerLineStart;
            $endLine = strpos($part, "\r\n", $headerLineStart);
            $headerLine = explode(': ', substr($part, $headerLineStart, $endLine - $headerLineStart));
            $header[$headerLine[0]] = $headerLine[1];
            $headerLineStart = strpos($part, self::CONTENT, $endLine);
        }
        $header['offsetEnd'] = $endLine;
        return $header;
    }


    /**
     * parse SOAP response to an XML
     *
     * @param $soap_result
     * @return false|string
     */
    private function soapToXml($soap_result)
    {
        $soap_xml_string = substr($soap_result, strpos($soap_result, '<soap:Envelope '), strrpos($soap_result, '</soap:Envelope>') - strpos($soap_result, '<soap:Envelope ') + strlen('</soap:Envelope>'));
        $soap_xml_string = '<?xml version="1.0" encoding="UTF-8"?>' . trim($soap_xml_string);
        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->formatOutput = true;
        $dom->preserveWhiteSpace = false;
        $dom->resolveExternals = false;
        $dom->substituteEntities = false;
        $dom->validateOnParse = false;
        $dom->loadXML($soap_xml_string);
        return $dom->saveXML();
    }

    /**
     * FUNCTION TO MUNG THE XML SO WE DO NOT HAVE TO DEAL WITH NAMESPACE
     * parse SOAP response to an Array
     * mungXML($xml)
     *
     * @param $xml
     * @return array|mixed|string|string[]|null
     */
    private function soapToObject($xml)
    {
        $obj = SimpleXML_Load_String($xml);
        if ($obj === FALSE) return $xml;

        // GET NAMESPACES, IF ANY
        $nss = $obj->getNamespaces(TRUE);
        if (empty($nss)) return $xml;

        // CHANGE ns: INTO ns_
        $nsm = array_keys($nss);
        foreach ($nsm as $key) {
            // A REGULAR EXPRESSION TO MUNG THE XML
            $rgx
                = '#'               // REGEX DELIMITER
                . '('               // GROUP PATTERN 1
                . '\<'              // LOCATE A LEFT WICKET
                . '/?'              // MAYBE FOLLOWED BY A SLASH
                . preg_quote($key)  // THE NAMESPACE
                . ')'               // END GROUP PATTERN
                . '('               // GROUP PATTERN 2
                . ':{1}'            // A COLON (EXACTLY ONE)
                . ')'               // END GROUP PATTERN
                . '#'               // REGEX DELIMITER
            ;
            // INSERT THE UNDERSCORE INTO THE TAG NAME
            $rep
                = '$1'          // BACKREFERENCE TO GROUP 1
                . '_'           // LITERAL UNDERSCORE IN PLACE OF GROUP 2
            ;
            // PERFORM THE REPLACEMENT
            $xml = preg_replace($rgx, $rep, $xml);
        }

        $xml_to_array = json_decode(json_encode(SimpleXML_Load_String($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        return (object) $this->array_to_object_recursive_data($xml_to_array);
    }

    /**
     * @param $arr
     * @return mixed|object
     */
    private function array_to_object_recursive_data($arr) {
        if (is_array($arr)){
            $generate_array = array();
            foreach($arr as $k => $v) {
                if (is_integer($k)) {
                    $generate_array['index'][$k] = $this->array_to_object_recursive_data($v);
                }
                else {
                    $generate_array[$k] = $this->array_to_object_recursive_data($v);
                }
            }

            return (object) $generate_array;
        }
        // else maintain the type of $arr
        //PHP: Recursively convert an object to an array
        return $arr;
    }

    /**
     * Convert array to Xml
     * @param unknown $soapRequest
     * @param unknown $soapRequestXml
     */
    private function array_to_xml($soapRequest, $soapRequestXml)
    {
        foreach ($soapRequest as $key => $value) {
            if (is_array($value)) {
                if (!is_numeric($key)) {
                    $subnode = $soapRequestXml->addChild("$key");
                    $this->array_to_xml($value, $subnode);
                } else {
                    $subnode = $soapRequestXml->addChild("item$key");
                    $this->array_to_xml($value, $subnode);
                }
            } else {
                $soapRequestXml->addChild("$key", htmlspecialchars("$value"));
            }
        }
    }
}
