<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getProductInterRequest StructType
 * @subpackage Structs
 */
class GetProductInterRequest extends AbstractStructBase
{
    /**
     * The contractNumber
     * @var string
     */
    public $contractNumber;
    /**
     * The password
     * @var string
     */
    public $password;
    /**
     * The productCode
     * @var string
     */
    public $productCode;
    /**
     * The insurance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $insurance;
    /**
     * The nonMachinable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $nonMachinable;
    /**
     * The returnReceipt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $returnReceipt;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $countryCode;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
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
     * Constructor method for getProductInterRequest
     * @uses GetProductInterRequest::setContractNumber()
     * @uses GetProductInterRequest::setPassword()
     * @uses GetProductInterRequest::setProductCode()
     * @uses GetProductInterRequest::setInsurance()
     * @uses GetProductInterRequest::setNonMachinable()
     * @uses GetProductInterRequest::setReturnReceipt()
     * @uses GetProductInterRequest::setCountryCode()
     * @uses GetProductInterRequest::setZipCode()
     * @uses GetProductInterRequest::setCity()
     * @param string $contractNumber
     * @param string $password
     * @param string $productCode
     * @param bool $insurance
     * @param bool $nonMachinable
     * @param bool $returnReceipt
     * @param string $countryCode
     * @param string $zipCode
     * @param string $city
     */
    public function __construct($contractNumber = null, $password = null, $productCode = null, $insurance = null, $nonMachinable = null, $returnReceipt = null, $countryCode = null, $zipCode = null, $city = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
            ->setProductCode($productCode)
            ->setInsurance($insurance)
            ->setNonMachinable($nonMachinable)
            ->setReturnReceipt($returnReceipt)
            ->setCountryCode($countryCode)
            ->setZipCode($zipCode)
            ->setCity($city);
    }
    /**
     * Get contractNumber value
     * @return string|null
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }
    /**
     * Set contractNumber value
     * @param string $contractNumber
     * @return \Colissimo\StructType\GetProductInterRequest
     */
    public function setContractNumber($contractNumber = null)
    {
        // validation for constraint: string
        if (!is_null($contractNumber) && !is_string($contractNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractNumber, true), gettype($contractNumber)), __LINE__);
        }
        $this->contractNumber = $contractNumber;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Colissimo\StructType\GetProductInterRequest
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get productCode value
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->productCode;
    }
    /**
     * Set productCode value
     * @param string $productCode
     * @return \Colissimo\StructType\GetProductInterRequest
     */
    public function setProductCode($productCode = null)
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        $this->productCode = $productCode;
        return $this;
    }
    /**
     * Get insurance value
     * @return bool|null
     */
    public function getInsurance()
    {
        return $this->insurance;
    }
    /**
     * Set insurance value
     * @param bool $insurance
     * @return \Colissimo\StructType\GetProductInterRequest
     */
    public function setInsurance($insurance = null)
    {
        // validation for constraint: boolean
        if (!is_null($insurance) && !is_bool($insurance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($insurance, true), gettype($insurance)), __LINE__);
        }
        $this->insurance = $insurance;
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
     * @return \Colissimo\StructType\GetProductInterRequest
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
     * @return \Colissimo\StructType\GetProductInterRequest
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
     * @return \Colissimo\StructType\GetProductInterRequest
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
     * @return \Colissimo\StructType\GetProductInterRequest
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
     * @return \Colissimo\StructType\GetProductInterRequest
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
}
