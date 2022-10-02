<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for belgiumLabel StructType
 * @subpackage Structs
 */
class BelgiumLabel extends AbstractStructBase
{
    /**
     * The codeBarre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codeBarre;
    /**
     * The codeVAS
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\CodeVAS
     */
    public $codeVAS;
    /**
     * The identification
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identification;
    /**
     * The returnAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\ReturnAddressBelgium
     */
    public $returnAddress;
    /**
     * Constructor method for belgiumLabel
     * @uses BelgiumLabel::setCodeBarre()
     * @uses BelgiumLabel::setCodeVAS()
     * @uses BelgiumLabel::setIdentification()
     * @uses BelgiumLabel::setReturnAddress()
     * @param string $codeBarre
     * @param \Colissimo\StructType\CodeVAS $codeVAS
     * @param string $identification
     * @param \Colissimo\StructType\ReturnAddressBelgium $returnAddress
     */
    public function __construct($codeBarre = null, \Colissimo\StructType\CodeVAS $codeVAS = null, $identification = null, \Colissimo\StructType\ReturnAddressBelgium $returnAddress = null)
    {
        $this
            ->setCodeBarre($codeBarre)
            ->setCodeVAS($codeVAS)
            ->setIdentification($identification)
            ->setReturnAddress($returnAddress);
    }
    /**
     * Get codeBarre value
     * @return string|null
     */
    public function getCodeBarre()
    {
        return $this->codeBarre;
    }
    /**
     * Set codeBarre value
     * @param string $codeBarre
     * @return \Colissimo\StructType\BelgiumLabel
     */
    public function setCodeBarre($codeBarre = null)
    {
        // validation for constraint: string
        if (!is_null($codeBarre) && !is_string($codeBarre)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeBarre, true), gettype($codeBarre)), __LINE__);
        }
        $this->codeBarre = $codeBarre;
        return $this;
    }
    /**
     * Get codeVAS value
     * @return \Colissimo\StructType\CodeVAS|null
     */
    public function getCodeVAS()
    {
        return $this->codeVAS;
    }
    /**
     * Set codeVAS value
     * @param \Colissimo\StructType\CodeVAS $codeVAS
     * @return \Colissimo\StructType\BelgiumLabel
     */
    public function setCodeVAS(\Colissimo\StructType\CodeVAS $codeVAS = null)
    {
        $this->codeVAS = $codeVAS;
        return $this;
    }
    /**
     * Get identification value
     * @return string|null
     */
    public function getIdentification()
    {
        return $this->identification;
    }
    /**
     * Set identification value
     * @param string $identification
     * @return \Colissimo\StructType\BelgiumLabel
     */
    public function setIdentification($identification = null)
    {
        // validation for constraint: string
        if (!is_null($identification) && !is_string($identification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identification, true), gettype($identification)), __LINE__);
        }
        $this->identification = $identification;
        return $this;
    }
    /**
     * Get returnAddress value
     * @return \Colissimo\StructType\ReturnAddressBelgium|null
     */
    public function getReturnAddress()
    {
        return $this->returnAddress;
    }
    /**
     * Set returnAddress value
     * @param \Colissimo\StructType\ReturnAddressBelgium $returnAddress
     * @return \Colissimo\StructType\BelgiumLabel
     */
    public function setReturnAddress(\Colissimo\StructType\ReturnAddressBelgium $returnAddress = null)
    {
        $this->returnAddress = $returnAddress;
        return $this;
    }
}
