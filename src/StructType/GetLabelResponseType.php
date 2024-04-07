<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelResponseType StructType
 * @subpackage Structs
 */
class GetLabelResponseType extends BaseResponse
{
    /**
     * The label
     * Meta information extracted from the WSDL
     * - expectedContentTypes: application/octet-stream
     * - minOccurs: 0
     * @var string
     */
    public $label;
    /**
     * Constructor method for GetLabelResponseType
     * @uses GetLabelResponseType::setLabel()
     * @param string $label
     */
    public function __construct($label = null)
    {
        $this
            ->setLabel($label);
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \Colissimo\StructType\GetLabelResponseType
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        return $this;
    }
}
