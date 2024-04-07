<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tokenV2Response StructType
 * @subpackage Structs
 */
class TokenV2Response extends TokenResponse
{
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\TypeFields
     */
    public $fields;
    /**
     * Constructor method for tokenV2Response
     * @uses TokenV2Response::setFields()
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
     * @return \Colissimo\StructType\TokenV2Response
     */
    public function setFields(\Colissimo\StructType\TypeFields $fields = null)
    {
        $this->fields = $fields;
        return $this;
    }
}
