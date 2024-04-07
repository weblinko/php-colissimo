<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sender StructType
 * @subpackage Structs
 */
class Sender extends AbstractStructBase
{
    /**
     * The line0
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $line0;
    /**
     * The line1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $line1;
    /**
     * The line2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $line2;
    /**
     * The line3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $line3;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $countryCode;
    /**
     * The zipCode
     * @var string
     */
    public $zipCode;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city;
    /**
     * The senderParcelRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $senderParcelRef;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\TypeAdresse
     */
    public $address;
    /**
     * Constructor method for sender
     * @uses Sender::setLine0()
     * @uses Sender::setLine1()
     * @uses Sender::setLine2()
     * @uses Sender::setLine3()
     * @uses Sender::setCountryCode()
     * @uses Sender::setZipCode()
     * @uses Sender::setCity()
     * @uses Sender::setSenderParcelRef()
     * @uses Sender::setAddress()
     * @param string $line0
     * @param string $line1
     * @param string $line2
     * @param string $line3
     * @param string $countryCode
     * @param string $zipCode
     * @param string $city
     * @param string $senderParcelRef
     * @param \Colissimo\StructType\TypeAdresse $address
     */
    public function __construct($line0 = null, $line1 = null, $line2 = null, $line3 = null, $countryCode = null, $zipCode = null, $city = null, $senderParcelRef = null, \Colissimo\StructType\TypeAdresse $address = null)
    {
        $this
            ->setLine0($line0)
            ->setLine1($line1)
            ->setLine2($line2)
            ->setLine3($line3)
            ->setCountryCode($countryCode)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setSenderParcelRef($senderParcelRef)
            ->setAddress($address);
    }
    /**
     * Get line0 value
     * @return string|null
     */
    public function getLine0()
    {
        return $this->line0;
    }
    /**
     * Set line0 value
     * @param string $line0
     * @return \Colissimo\StructType\Sender
     */
    public function setLine0($line0 = null)
    {
        // validation for constraint: string
        if (!is_null($line0) && !is_string($line0)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line0, true), gettype($line0)), __LINE__);
        }
        $this->line0 = $line0;
        return $this;
    }
    /**
     * Get line1 value
     * @return string|null
     */
    public function getLine1()
    {
        return $this->line1;
    }
    /**
     * Set line1 value
     * @param string $line1
     * @return \Colissimo\StructType\Sender
     */
    public function setLine1($line1 = null)
    {
        // validation for constraint: string
        if (!is_null($line1) && !is_string($line1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line1, true), gettype($line1)), __LINE__);
        }
        $this->line1 = $line1;
        return $this;
    }
    /**
     * Get line2 value
     * @return string|null
     */
    public function getLine2()
    {
        return $this->line2;
    }
    /**
     * Set line2 value
     * @param string $line2
     * @return \Colissimo\StructType\Sender
     */
    public function setLine2($line2 = null)
    {
        // validation for constraint: string
        if (!is_null($line2) && !is_string($line2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line2, true), gettype($line2)), __LINE__);
        }
        $this->line2 = $line2;
        return $this;
    }
    /**
     * Get line3 value
     * @return string|null
     */
    public function getLine3()
    {
        return $this->line3;
    }
    /**
     * Set line3 value
     * @param string $line3
     * @return \Colissimo\StructType\Sender
     */
    public function setLine3($line3 = null)
    {
        // validation for constraint: string
        if (!is_null($line3) && !is_string($line3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line3, true), gettype($line3)), __LINE__);
        }
        $this->line3 = $line3;
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Colissimo\StructType\Sender
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \Colissimo\StructType\Sender
     */
    public function setZipCode($zipCode = null)
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Colissimo\StructType\Sender
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get senderParcelRef value
     * @return string|null
     */
    public function getSenderParcelRef()
    {
        return $this->senderParcelRef;
    }
    /**
     * Set senderParcelRef value
     * @param string $senderParcelRef
     * @return \Colissimo\StructType\Sender
     */
    public function setSenderParcelRef($senderParcelRef = null)
    {
        // validation for constraint: string
        if (!is_null($senderParcelRef) && !is_string($senderParcelRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderParcelRef, true), gettype($senderParcelRef)), __LINE__);
        }
        $this->senderParcelRef = $senderParcelRef;
        return $this;
    }
    /**
     * Get address value
     * @return \Colissimo\StructType\TypeAdresse|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Colissimo\StructType\TypeAdresse $address
     * @return \Colissimo\StructType\Sender
     */
    public function setAddress(\Colissimo\StructType\TypeAdresse $address = null)
    {
        $this->address = $address;
        return $this;
    }
}
