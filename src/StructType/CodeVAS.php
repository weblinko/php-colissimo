<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for codeVAS StructType
 * @subpackage Structs
 */
class CodeVAS extends AbstractStructBase
{
    /**
     * The deliveryMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $deliveryMode;
    /**
     * The mention
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mention;
    /**
     * The reserve
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reserve;
    /**
     * The signature
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $signature;
    /**
     * Constructor method for codeVAS
     * @uses CodeVAS::setDeliveryMode()
     * @uses CodeVAS::setMention()
     * @uses CodeVAS::setReserve()
     * @uses CodeVAS::setSignature()
     * @param string $deliveryMode
     * @param string $mention
     * @param string $reserve
     * @param string $signature
     */
    public function __construct($deliveryMode = null, $mention = null, $reserve = null, $signature = null)
    {
        $this
            ->setDeliveryMode($deliveryMode)
            ->setMention($mention)
            ->setReserve($reserve)
            ->setSignature($signature);
    }
    /**
     * Get deliveryMode value
     * @return string|null
     */
    public function getDeliveryMode()
    {
        return $this->deliveryMode;
    }
    /**
     * Set deliveryMode value
     * @param string $deliveryMode
     * @return \Colissimo\StructType\CodeVAS
     */
    public function setDeliveryMode($deliveryMode = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryMode) && !is_string($deliveryMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryMode, true), gettype($deliveryMode)), __LINE__);
        }
        $this->deliveryMode = $deliveryMode;
        return $this;
    }
    /**
     * Get mention value
     * @return string|null
     */
    public function getMention()
    {
        return $this->mention;
    }
    /**
     * Set mention value
     * @param string $mention
     * @return \Colissimo\StructType\CodeVAS
     */
    public function setMention($mention = null)
    {
        // validation for constraint: string
        if (!is_null($mention) && !is_string($mention)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mention, true), gettype($mention)), __LINE__);
        }
        $this->mention = $mention;
        return $this;
    }
    /**
     * Get reserve value
     * @return string|null
     */
    public function getReserve()
    {
        return $this->reserve;
    }
    /**
     * Set reserve value
     * @param string $reserve
     * @return \Colissimo\StructType\CodeVAS
     */
    public function setReserve($reserve = null)
    {
        // validation for constraint: string
        if (!is_null($reserve) && !is_string($reserve)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reserve, true), gettype($reserve)), __LINE__);
        }
        $this->reserve = $reserve;
        return $this;
    }
    /**
     * Get signature value
     * @return string|null
     */
    public function getSignature()
    {
        return $this->signature;
    }
    /**
     * Set signature value
     * @param string $signature
     * @return \Colissimo\StructType\CodeVAS
     */
    public function setSignature($signature = null)
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->signature = $signature;
        return $this;
    }
}
