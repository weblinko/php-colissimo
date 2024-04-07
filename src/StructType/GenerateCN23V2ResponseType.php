<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateCN23V2ResponseType StructType
 * @subpackage Structs
 */
class GenerateCN23V2ResponseType extends BaseResponse
{
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\TypeFields
     */
    public $fields;
    /**
     * The cn23
     * Meta information extracted from the WSDL
     * - expectedContentTypes: application/octet-stream
     * - minOccurs: 0
     * @var string
     */
    public $cn23;
    /**
     * Constructor method for GenerateCN23V2ResponseType
     * @uses GenerateCN23V2ResponseType::setFields()
     * @uses GenerateCN23V2ResponseType::setCn23()
     * @param \Colissimo\StructType\TypeFields $fields
     * @param string $cn23
     */
    public function __construct(\Colissimo\StructType\TypeFields $fields = null, $cn23 = null)
    {
        $this
            ->setFields($fields)
            ->setCn23($cn23);
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
     * @return \Colissimo\StructType\GenerateCN23V2ResponseType
     */
    public function setFields(\Colissimo\StructType\TypeFields $fields = null)
    {
        $this->fields = $fields;
        return $this;
    }
    /**
     * Get cn23 value
     * @return string|null
     */
    public function getCn23()
    {
        return $this->cn23;
    }
    /**
     * Set cn23 value
     * @param string $cn23
     * @return \Colissimo\StructType\GenerateCN23V2ResponseType
     */
    public function setCn23($cn23 = null)
    {
        // validation for constraint: string
        if (!is_null($cn23) && !is_string($cn23)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cn23, true), gettype($cn23)), __LINE__);
        }
        $this->cn23 = $cn23;
        return $this;
    }
}
