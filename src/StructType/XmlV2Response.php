<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for xmlV2Response StructType
 * @subpackage Structs
 */
class XmlV2Response extends XmlResponse
{
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\Fields
     */
    public $fields;
    /**
     * Constructor method for xmlV2Response
     * @uses XmlV2Response::setFields()
     * @param \Colissimo\StructType\Fields $fields
     */
    public function __construct(\Colissimo\StructType\Fields $fields = null)
    {
        $this
            ->setFields($fields);
    }
    /**
     * Get fields value
     * @return \Colissimo\StructType\Fields|null
     */
    public function getFields()
    {
        return $this->fields;
    }
    /**
     * Set fields value
     * @param \Colissimo\StructType\Fields $fields
     * @return \Colissimo\StructType\XmlV2Response
     */
    public function setFields(\Colissimo\StructType\Fields $fields = null)
    {
        $this->fields = $fields;
        return $this;
    }
}
