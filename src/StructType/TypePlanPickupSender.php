<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typePlanPickupSender StructType
 * @subpackage Structs
 */
class TypePlanPickupSender extends AbstractStructBase
{
    /**
     * The companyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $companyName;
    /**
     * The lastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $lastName;
    /**
     * The firstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $firstName;
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
     * The countryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $countryCode;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $email;
    /**
     * The phoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $phoneNumber;
    /**
     * Constructor method for typePlanPickupSender
     * @uses TypePlanPickupSender::setCompanyName()
     * @uses TypePlanPickupSender::setLastName()
     * @uses TypePlanPickupSender::setFirstName()
     * @uses TypePlanPickupSender::setLine0()
     * @uses TypePlanPickupSender::setLine1()
     * @uses TypePlanPickupSender::setLine2()
     * @uses TypePlanPickupSender::setLine3()
     * @uses TypePlanPickupSender::setZipCode()
     * @uses TypePlanPickupSender::setCity()
     * @uses TypePlanPickupSender::setCountryCode()
     * @uses TypePlanPickupSender::setEmail()
     * @uses TypePlanPickupSender::setPhoneNumber()
     * @param string $companyName
     * @param string $lastName
     * @param string $firstName
     * @param string $line0
     * @param string $line1
     * @param string $line2
     * @param string $line3
     * @param string $zipCode
     * @param string $city
     * @param string $countryCode
     * @param string $email
     * @param string $phoneNumber
     */
    public function __construct($companyName = null, $lastName = null, $firstName = null, $line0 = null, $line1 = null, $line2 = null, $line3 = null, $zipCode = null, $city = null, $countryCode = null, $email = null, $phoneNumber = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setLastName($lastName)
            ->setFirstName($firstName)
            ->setLine0($line0)
            ->setLine1($line1)
            ->setLine2($line2)
            ->setLine3($line3)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setCountryCode($countryCode)
            ->setEmail($email)
            ->setPhoneNumber($phoneNumber);
    }
    /**
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $companyName
     * @return \Colissimo\StructType\TypePlanPickupSender
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName, true), gettype($companyName)), __LINE__);
        }
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \Colissimo\StructType\TypePlanPickupSender
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \Colissimo\StructType\TypePlanPickupSender
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        return $this;
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
     * @return \Colissimo\StructType\TypePlanPickupSender
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
     * @return \Colissimo\StructType\TypePlanPickupSender
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
     * @return \Colissimo\StructType\TypePlanPickupSender
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
     * @return \Colissimo\StructType\TypePlanPickupSender
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
     * @return \Colissimo\StructType\TypePlanPickupSender
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
     * @return \Colissimo\StructType\TypePlanPickupSender
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
     * @return \Colissimo\StructType\TypePlanPickupSender
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
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Colissimo\StructType\TypePlanPickupSender
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get phoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    /**
     * Set phoneNumber value
     * @param string $phoneNumber
     * @return \Colissimo\StructType\TypePlanPickupSender
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), gettype($phoneNumber)), __LINE__);
        }
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
}
