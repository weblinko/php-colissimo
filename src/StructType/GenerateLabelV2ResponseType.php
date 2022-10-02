<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateLabelV2ResponseType StructType
 * @subpackage Structs
 */
class GenerateLabelV2ResponseType extends BaseResponse
{
    /**
     * The labelXmlV2Reponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\XmlV2Response
     */
    public $labelXmlV2Reponse;
    /**
     * The labelV2Response
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\LabelV2Response
     */
    public $labelV2Response;
    /**
     * Constructor method for GenerateLabelV2ResponseType
     * @uses GenerateLabelV2ResponseType::setLabelXmlV2Reponse()
     * @uses GenerateLabelV2ResponseType::setLabelV2Response()
     * @param \Colissimo\StructType\XmlV2Response $labelXmlV2Reponse
     * @param \Colissimo\StructType\LabelV2Response $labelV2Response
     */
    public function __construct(\Colissimo\StructType\XmlV2Response $labelXmlV2Reponse = null, \Colissimo\StructType\LabelV2Response $labelV2Response = null)
    {
        $this
            ->setLabelXmlV2Reponse($labelXmlV2Reponse)
            ->setLabelV2Response($labelV2Response);
    }
    /**
     * Get labelXmlV2Reponse value
     * @return \Colissimo\StructType\XmlV2Response|null
     */
    public function getLabelXmlV2Reponse()
    {
        return $this->labelXmlV2Reponse;
    }
    /**
     * Set labelXmlV2Reponse value
     * @param \Colissimo\StructType\XmlV2Response $labelXmlV2Reponse
     * @return \Colissimo\StructType\GenerateLabelV2ResponseType
     */
    public function setLabelXmlV2Reponse(\Colissimo\StructType\XmlV2Response $labelXmlV2Reponse = null)
    {
        $this->labelXmlV2Reponse = $labelXmlV2Reponse;
        return $this;
    }
    /**
     * Get labelV2Response value
     * @return \Colissimo\StructType\LabelV2Response|null
     */
    public function getLabelV2Response()
    {
        return $this->labelV2Response;
    }
    /**
     * Set labelV2Response value
     * @param \Colissimo\StructType\LabelV2Response $labelV2Response
     * @return \Colissimo\StructType\GenerateLabelV2ResponseType
     */
    public function setLabelV2Response(\Colissimo\StructType\LabelV2Response $labelV2Response = null)
    {
        $this->labelV2Response = $labelV2Response;
        return $this;
    }
}
