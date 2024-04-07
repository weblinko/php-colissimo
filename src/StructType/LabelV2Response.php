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
     * @var \Colissimo\StructType\TypeFields
     */
    public $fields;
    /**
     * Constructor method for labelV2Response
     * @uses LabelV2Response::setFields()
     * @param \Colissimo\StructType\TypeFields $fields
     */
    public function __construct(\Colissimo\StructType\TypeFields $fields = null)
    {
        $this
            ->setFields($fields);
    }
    /**
     * Get fields value
     * @return \Colissimo\StructType\TypeFields|null
     */
    public function getFields()
    {
        return $this->fields;
    }
    /**
     * Set fields value
     * @param \Colissimo\StructType\TypeFields $fields
     * @return \Colissimo\StructType\LabelV2Response
     */
    public function setFields(\Colissimo\StructType\TypeFields $fields = null)
    {
        $this->fields = $fields;
        return $this;
    }
}
