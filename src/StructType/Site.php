<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for site StructType
 * @subpackage Structs
 */
class Site extends AbstractStructBase
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\AddressPCH
     */
    public $address;
    /**
     * The code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $code;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * Constructor method for site
     * @uses Site::setAddress()
     * @uses Site::setCode()
     * @uses Site::setName()
     * @param \Colissimo\StructType\AddressPCH $address
     * @param string $code
     * @param string $name
     */
    public function __construct(\Colissimo\StructType\AddressPCH $address = null, $code = null, $name = null)
    {
        $this
            ->setAddress($address)
            ->setCode($code)
            ->setName($name);
    }
    /**
     * Get address value
     * @return \Colissimo\StructType\AddressPCH|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Colissimo\StructType\AddressPCH $address
     * @return \Colissimo\StructType\Site
     */
    public function setAddress(\Colissimo\StructType\AddressPCH $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Colissimo\StructType\Site
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Colissimo\StructType\Site
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
}
