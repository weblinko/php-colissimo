<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressee StructType
 * @subpackage Structs
 */
class Addressee extends AbstractStructBase
{
    /**
     * The addresseeParcelRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $addresseeParcelRef;
    /**
     * The codeBarForReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $codeBarForReference;
    /**
     * The serviceInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $serviceInfo;
    /**
     * The promotionCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $promotionCode;
    /**
     * The address
     * @var \Colissimo\StructType\TypeAdresse
     */
    public $address;
    /**
     * Constructor method for addressee
     * @uses Addressee::setAddresseeParcelRef()
     * @uses Addressee::setCodeBarForReference()
     * @uses Addressee::setServiceInfo()
     * @uses Addressee::setPromotionCode()
     * @uses Addressee::setAddress()
     * @param string $addresseeParcelRef
     * @param bool $codeBarForReference
     * @param string $serviceInfo
     * @param string $promotionCode
     * @param \Colissimo\StructType\TypeAdresse $address
     */
    public function __construct($addresseeParcelRef = null, $codeBarForReference = null, $serviceInfo = null, $promotionCode = null, \Colissimo\StructType\TypeAdresse $address = null)
    {
        $this
            ->setAddresseeParcelRef($addresseeParcelRef)
            ->setCodeBarForReference($codeBarForReference)
            ->setServiceInfo($serviceInfo)
            ->setPromotionCode($promotionCode)
            ->setAddress($address);
    }
    /**
     * Get addresseeParcelRef value
     * @return string|null
     */
    public function getAddresseeParcelRef()
    {
        return $this->addresseeParcelRef;
    }
    /**
     * Set addresseeParcelRef value
     * @param string $addresseeParcelRef
     * @return \Colissimo\StructType\Addressee
     */
    public function setAddresseeParcelRef($addresseeParcelRef = null)
    {
        // validation for constraint: string
        if (!is_null($addresseeParcelRef) && !is_string($addresseeParcelRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addresseeParcelRef, true), gettype($addresseeParcelRef)), __LINE__);
        }
        $this->addresseeParcelRef = $addresseeParcelRef;
        return $this;
    }
    /**
     * Get codeBarForReference value
     * @return bool|null
     */
    public function getCodeBarForReference()
    {
        return $this->codeBarForReference;
    }
    /**
     * Set codeBarForReference value
     * @param bool $codeBarForReference
     * @return \Colissimo\StructType\Addressee
     */
    public function setCodeBarForReference($codeBarForReference = null)
    {
        // validation for constraint: boolean
        if (!is_null($codeBarForReference) && !is_bool($codeBarForReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($codeBarForReference, true), gettype($codeBarForReference)), __LINE__);
        }
        $this->codeBarForReference = $codeBarForReference;
        return $this;
    }
    /**
     * Get serviceInfo value
     * @return string|null
     */
    public function getServiceInfo()
    {
        return $this->serviceInfo;
    }
    /**
     * Set serviceInfo value
     * @param string $serviceInfo
     * @return \Colissimo\StructType\Addressee
     */
    public function setServiceInfo($serviceInfo = null)
    {
        // validation for constraint: string
        if (!is_null($serviceInfo) && !is_string($serviceInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceInfo, true), gettype($serviceInfo)), __LINE__);
        }
        $this->serviceInfo = $serviceInfo;
        return $this;
    }
    /**
     * Get promotionCode value
     * @return string|null
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }
    /**
     * Set promotionCode value
     * @param string $promotionCode
     * @return \Colissimo\StructType\Addressee
     */
    public function setPromotionCode($promotionCode = null)
    {
        // validation for constraint: string
        if (!is_null($promotionCode) && !is_string($promotionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionCode, true), gettype($promotionCode)), __LINE__);
        }
        $this->promotionCode = $promotionCode;
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
     * @return \Colissimo\StructType\Addressee
     */
    public function setAddress(\Colissimo\StructType\TypeAdresse $address = null)
    {
        $this->address = $address;
        return $this;
    }
}
