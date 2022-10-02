<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for article StructType
 * @subpackage Structs
 */
class Article extends AbstractStructBase
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * The quantity
     * @var int
     */
    public $quantity;
    /**
     * The weight
     * @var float
     */
    public $weight;
    /**
     * The value
     * @var float
     */
    public $value;
    /**
     * The hsCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $hsCode;
    /**
     * The originCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $originCountry;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $currency;
    /**
     * The artref
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $artref;
    /**
     * The originalIdent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $originalIdent;
    /**
     * The vatAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $vatAmount;
    /**
     * The customsFees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $customsFees;
    /**
     * Constructor method for article
     * @uses Article::setDescription()
     * @uses Article::setQuantity()
     * @uses Article::setWeight()
     * @uses Article::setValue()
     * @uses Article::setHsCode()
     * @uses Article::setOriginCountry()
     * @uses Article::setCurrency()
     * @uses Article::setArtref()
     * @uses Article::setOriginalIdent()
     * @uses Article::setVatAmount()
     * @uses Article::setCustomsFees()
     * @param string $description
     * @param int $quantity
     * @param float $weight
     * @param float $value
     * @param string $hsCode
     * @param string $originCountry
     * @param string $currency
     * @param string $artref
     * @param string $originalIdent
     * @param float $vatAmount
     * @param float $customsFees
     */
    public function __construct($description = null, $quantity = null, $weight = null, $value = null, $hsCode = null, $originCountry = null, $currency = null, $artref = null, $originalIdent = null, $vatAmount = null, $customsFees = null)
    {
        $this
            ->setDescription($description)
            ->setQuantity($quantity)
            ->setWeight($weight)
            ->setValue($value)
            ->setHsCode($hsCode)
            ->setOriginCountry($originCountry)
            ->setCurrency($currency)
            ->setArtref($artref)
            ->setOriginalIdent($originalIdent)
            ->setVatAmount($vatAmount)
            ->setCustomsFees($customsFees);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Colissimo\StructType\Article
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \Colissimo\StructType\Article
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
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
     * @return \Colissimo\StructType\Article
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
     * Get value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \Colissimo\StructType\Article
     */
    public function setValue($value = null)
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Get hsCode value
     * @return string|null
     */
    public function getHsCode()
    {
        return $this->hsCode;
    }
    /**
     * Set hsCode value
     * @param string $hsCode
     * @return \Colissimo\StructType\Article
     */
    public function setHsCode($hsCode = null)
    {
        // validation for constraint: string
        if (!is_null($hsCode) && !is_string($hsCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hsCode, true), gettype($hsCode)), __LINE__);
        }
        $this->hsCode = $hsCode;
        return $this;
    }
    /**
     * Get originCountry value
     * @return string|null
     */
    public function getOriginCountry()
    {
        return $this->originCountry;
    }
    /**
     * Set originCountry value
     * @param string $originCountry
     * @return \Colissimo\StructType\Article
     */
    public function setOriginCountry($originCountry = null)
    {
        // validation for constraint: string
        if (!is_null($originCountry) && !is_string($originCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originCountry, true), gettype($originCountry)), __LINE__);
        }
        $this->originCountry = $originCountry;
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Colissimo\StructType\Article
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        return $this;
    }
    /**
     * Get artref value
     * @return string|null
     */
    public function getArtref()
    {
        return $this->artref;
    }
    /**
     * Set artref value
     * @param string $artref
     * @return \Colissimo\StructType\Article
     */
    public function setArtref($artref = null)
    {
        // validation for constraint: string
        if (!is_null($artref) && !is_string($artref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($artref, true), gettype($artref)), __LINE__);
        }
        $this->artref = $artref;
        return $this;
    }
    /**
     * Get originalIdent value
     * @return string|null
     */
    public function getOriginalIdent()
    {
        return $this->originalIdent;
    }
    /**
     * Set originalIdent value
     * @param string $originalIdent
     * @return \Colissimo\StructType\Article
     */
    public function setOriginalIdent($originalIdent = null)
    {
        // validation for constraint: string
        if (!is_null($originalIdent) && !is_string($originalIdent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalIdent, true), gettype($originalIdent)), __LINE__);
        }
        $this->originalIdent = $originalIdent;
        return $this;
    }
    /**
     * Get vatAmount value
     * @return float|null
     */
    public function getVatAmount()
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param float $vatAmount
     * @return \Colissimo\StructType\Article
     */
    public function setVatAmount($vatAmount = null)
    {
        // validation for constraint: float
        if (!is_null($vatAmount) && !(is_float($vatAmount) || is_numeric($vatAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        return $this;
    }
    /**
     * Get customsFees value
     * @return float|null
     */
    public function getCustomsFees()
    {
        return $this->customsFees;
    }
    /**
     * Set customsFees value
     * @param float $customsFees
     * @return \Colissimo\StructType\Article
     */
    public function setCustomsFees($customsFees = null)
    {
        // validation for constraint: float
        if (!is_null($customsFees) && !(is_float($customsFees) || is_numeric($customsFees))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($customsFees, true), gettype($customsFees)), __LINE__);
        }
        $this->customsFees = $customsFees;
        return $this;
    }
}
