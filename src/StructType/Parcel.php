<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for parcel StructType
 * @subpackage Structs
 */
class Parcel extends AbstractStructBase
{
    /**
     * The parcelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $parcelNumber;
    /**
     * The insuranceAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $insuranceAmount;
    /**
     * The insuranceValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $insuranceValue;
    /**
     * The recommendationLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $recommendationLevel;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $weight;
    /**
     * The nonMachinable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $nonMachinable;
    /**
     * The COD
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $COD;
    /**
     * The CODAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CODAmount;
    /**
     * The CODCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CODCurrency;
    /**
     * The returnReceipt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $returnReceipt;
    /**
     * The instructions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $instructions;
    /**
     * The pickupLocationId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pickupLocationId;
    /**
     * The ftd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ftd;
    /**
     * The ddp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ddp;
    /**
     * Constructor method for parcel
     * @uses Parcel::setParcelNumber()
     * @uses Parcel::setInsuranceAmount()
     * @uses Parcel::setInsuranceValue()
     * @uses Parcel::setRecommendationLevel()
     * @uses Parcel::setWeight()
     * @uses Parcel::setNonMachinable()
     * @uses Parcel::setCOD()
     * @uses Parcel::setCODAmount()
     * @uses Parcel::setCODCurrency()
     * @uses Parcel::setReturnReceipt()
     * @uses Parcel::setInstructions()
     * @uses Parcel::setPickupLocationId()
     * @uses Parcel::setFtd()
     * @uses Parcel::setDdp()
     * @param string $parcelNumber
     * @param int $insuranceAmount
     * @param int $insuranceValue
     * @param string $recommendationLevel
     * @param float $weight
     * @param bool $nonMachinable
     * @param bool $cOD
     * @param int $cODAmount
     * @param string $cODCurrency
     * @param bool $returnReceipt
     * @param string $instructions
     * @param string $pickupLocationId
     * @param bool $ftd
     * @param bool $ddp
     */
    public function __construct($parcelNumber = null, $insuranceAmount = null, $insuranceValue = null, $recommendationLevel = null, $weight = null, $nonMachinable = null, $cOD = null, $cODAmount = null, $cODCurrency = null, $returnReceipt = null, $instructions = null, $pickupLocationId = null, $ftd = null, $ddp = null)
    {
        $this
            ->setParcelNumber($parcelNumber)
            ->setInsuranceAmount($insuranceAmount)
            ->setInsuranceValue($insuranceValue)
            ->setRecommendationLevel($recommendationLevel)
            ->setWeight($weight)
            ->setNonMachinable($nonMachinable)
            ->setCOD($cOD)
            ->setCODAmount($cODAmount)
            ->setCODCurrency($cODCurrency)
            ->setReturnReceipt($returnReceipt)
            ->setInstructions($instructions)
            ->setPickupLocationId($pickupLocationId)
            ->setFtd($ftd)
            ->setDdp($ddp);
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
     * @return \Colissimo\StructType\Parcel
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
    /**
     * Get insuranceAmount value
     * @return int|null
     */
    public function getInsuranceAmount()
    {
        return $this->insuranceAmount;
    }
    /**
     * Set insuranceAmount value
     * @param int $insuranceAmount
     * @return \Colissimo\StructType\Parcel
     */
    public function setInsuranceAmount($insuranceAmount = null)
    {
        // validation for constraint: int
        if (!is_null($insuranceAmount) && !(is_int($insuranceAmount) || ctype_digit($insuranceAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($insuranceAmount, true), gettype($insuranceAmount)), __LINE__);
        }
        $this->insuranceAmount = $insuranceAmount;
        return $this;
    }
    /**
     * Get insuranceValue value
     * @return int|null
     */
    public function getInsuranceValue()
    {
        return $this->insuranceValue;
    }
    /**
     * Set insuranceValue value
     * @param int $insuranceValue
     * @return \Colissimo\StructType\Parcel
     */
    public function setInsuranceValue($insuranceValue = null)
    {
        // validation for constraint: int
        if (!is_null($insuranceValue) && !(is_int($insuranceValue) || ctype_digit($insuranceValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($insuranceValue, true), gettype($insuranceValue)), __LINE__);
        }
        $this->insuranceValue = $insuranceValue;
        return $this;
    }
    /**
     * Get recommendationLevel value
     * @return string|null
     */
    public function getRecommendationLevel()
    {
        return $this->recommendationLevel;
    }
    /**
     * Set recommendationLevel value
     * @param string $recommendationLevel
     * @return \Colissimo\StructType\Parcel
     */
    public function setRecommendationLevel($recommendationLevel = null)
    {
        // validation for constraint: string
        if (!is_null($recommendationLevel) && !is_string($recommendationLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recommendationLevel, true), gettype($recommendationLevel)), __LINE__);
        }
        $this->recommendationLevel = $recommendationLevel;
        return $this;
    }
    /**
     * Get weight value
     * @return float|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param float $weight
     * @return \Colissimo\StructType\Parcel
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: float
        if (!is_null($weight) && !(is_float($weight) || is_numeric($weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        return $this;
    }
    /**
     * Get nonMachinable value
     * @return bool|null
     */
    public function getNonMachinable()
    {
        return $this->nonMachinable;
    }
    /**
     * Set nonMachinable value
     * @param bool $nonMachinable
     * @return \Colissimo\StructType\Parcel
     */
    public function setNonMachinable($nonMachinable = null)
    {
        // validation for constraint: boolean
        if (!is_null($nonMachinable) && !is_bool($nonMachinable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($nonMachinable, true), gettype($nonMachinable)), __LINE__);
        }
        $this->nonMachinable = $nonMachinable;
        return $this;
    }
    /**
     * Get COD value
     * @return bool|null
     */
    public function getCOD()
    {
        return $this->COD;
    }
    /**
     * Set COD value
     * @param bool $cOD
     * @return \Colissimo\StructType\Parcel
     */
    public function setCOD($cOD = null)
    {
        // validation for constraint: boolean
        if (!is_null($cOD) && !is_bool($cOD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cOD, true), gettype($cOD)), __LINE__);
        }
        $this->COD = $cOD;
        return $this;
    }
    /**
     * Get CODAmount value
     * @return int|null
     */
    public function getCODAmount()
    {
        return $this->CODAmount;
    }
    /**
     * Set CODAmount value
     * @param int $cODAmount
     * @return \Colissimo\StructType\Parcel
     */
    public function setCODAmount($cODAmount = null)
    {
        // validation for constraint: int
        if (!is_null($cODAmount) && !(is_int($cODAmount) || ctype_digit($cODAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cODAmount, true), gettype($cODAmount)), __LINE__);
        }
        $this->CODAmount = $cODAmount;
        return $this;
    }
    /**
     * Get CODCurrency value
     * @return string|null
     */
    public function getCODCurrency()
    {
        return $this->CODCurrency;
    }
    /**
     * Set CODCurrency value
     * @param string $cODCurrency
     * @return \Colissimo\StructType\Parcel
     */
    public function setCODCurrency($cODCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($cODCurrency) && !is_string($cODCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cODCurrency, true), gettype($cODCurrency)), __LINE__);
        }
        $this->CODCurrency = $cODCurrency;
        return $this;
    }
    /**
     * Get returnReceipt value
     * @return bool|null
     */
    public function getReturnReceipt()
    {
        return $this->returnReceipt;
    }
    /**
     * Set returnReceipt value
     * @param bool $returnReceipt
     * @return \Colissimo\StructType\Parcel
     */
    public function setReturnReceipt($returnReceipt = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnReceipt) && !is_bool($returnReceipt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnReceipt, true), gettype($returnReceipt)), __LINE__);
        }
        $this->returnReceipt = $returnReceipt;
        return $this;
    }
    /**
     * Get instructions value
     * @return string|null
     */
    public function getInstructions()
    {
        return $this->instructions;
    }
    /**
     * Set instructions value
     * @param string $instructions
     * @return \Colissimo\StructType\Parcel
     */
    public function setInstructions($instructions = null)
    {
        // validation for constraint: string
        if (!is_null($instructions) && !is_string($instructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instructions, true), gettype($instructions)), __LINE__);
        }
        $this->instructions = $instructions;
        return $this;
    }
    /**
     * Get pickupLocationId value
     * @return string|null
     */
    public function getPickupLocationId()
    {
        return $this->pickupLocationId;
    }
    /**
     * Set pickupLocationId value
     * @param string $pickupLocationId
     * @return \Colissimo\StructType\Parcel
     */
    public function setPickupLocationId($pickupLocationId = null)
    {
        // validation for constraint: string
        if (!is_null($pickupLocationId) && !is_string($pickupLocationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupLocationId, true), gettype($pickupLocationId)), __LINE__);
        }
        $this->pickupLocationId = $pickupLocationId;
        return $this;
    }
    /**
     * Get ftd value
     * @return bool|null
     */
    public function getFtd()
    {
        return $this->ftd;
    }
    /**
     * Set ftd value
     * @param bool $ftd
     * @return \Colissimo\StructType\Parcel
     */
    public function setFtd($ftd = null)
    {
        // validation for constraint: boolean
        if (!is_null($ftd) && !is_bool($ftd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ftd, true), gettype($ftd)), __LINE__);
        }
        $this->ftd = $ftd;
        return $this;
    }
    /**
     * Get ddp value
     * @return bool|null
     */
    public function getDdp()
    {
        return $this->ddp;
    }
    /**
     * Set ddp value
     * @param bool $ddp
     * @return \Colissimo\StructType\Parcel
     */
    public function setDdp($ddp = null)
    {
        // validation for constraint: boolean
        if (!is_null($ddp) && !is_bool($ddp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ddp, true), gettype($ddp)), __LINE__);
        }
        $this->ddp = $ddp;
        return $this;
    }
}
