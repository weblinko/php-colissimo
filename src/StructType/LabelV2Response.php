<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for labelV2Response StructType
 * @subpackage Structs
 */
class LabelV2Response extends LabelResponse
{
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\Fields
     */
    public $fields;
    /**
     * Constructor method for labelV2Response
     * @uses LabelV2Response::setFields()
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
     * @return \Colissimo\StructType\LabelV2Response
     */
    public function setFields(\Colissimo\StructType\Fields $fields = null)
    {
        $this->fields = $fields;
        return $this;
    }
}
