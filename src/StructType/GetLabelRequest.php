<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLabelRequest StructType
 * @subpackage Structs
 */
class GetLabelRequest extends AbstractStructBase
{
    /**
     * The outputPrintingType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $outputPrintingType;
    /**
     * The parcelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $parcelNumber;
    /**
     * Constructor method for getLabelRequest
     * @uses GetLabelRequest::setOutputPrintingType()
     * @uses GetLabelRequest::setParcelNumber()
     * @param string $outputPrintingType
     * @param string $parcelNumber
     */
    public function __construct($outputPrintingType = null, $parcelNumber = null)
    {
        $this
            ->setOutputPrintingType($outputPrintingType)
            ->setParcelNumber($parcelNumber);
    }
    /**
     * Get outputPrintingType value
     * @return string|null
     */
    public function getOutputPrintingType()
    {
        return $this->outputPrintingType;
    }
    /**
     * Set outputPrintingType value
     * @param string $outputPrintingType
     * @return \Colissimo\StructType\GetLabelRequest
     */
    public function setOutputPrintingType($outputPrintingType = null)
    {
        // validation for constraint: string
        if (!is_null($outputPrintingType) && !is_string($outputPrintingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputPrintingType, true), gettype($outputPrintingType)), __LINE__);
        }
        $this->outputPrintingType = $outputPrintingType;
        return $this;
    }
    /**
     * Get parcelNumber value
     * @return string|null
     */
    public function getParcelNumber()
    {
        return $this->parcelNumber;
    }
    /**
     * Set parcelNumber value
     * @param string $parcelNumber
     * @return \Colissimo\StructType\GetLabelRequest
     */
    public function setParcelNumber($parcelNumber = null)
    {
        // validation for constraint: string
        if (!is_null($parcelNumber) && !is_string($parcelNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelNumber, true), gettype($parcelNumber)), __LINE__);
        }
        $this->parcelNumber = $parcelNumber;
        return $this;
    }
}
