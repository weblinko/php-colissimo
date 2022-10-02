<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getBordereauByNumber StructType
 * Meta information extracted from the WSDL
 * - type: tns:getBordereauByNumber
 * @subpackage Structs
 */
class GetBordereauByNumber extends AbstractStructBase
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
     * The bordereauNumber
     * @var string
     */
    public $bordereauNumber;
    /**
     * Constructor method for getBordereauByNumber
     * @uses GetBordereauByNumber::setContractNumber()
     * @uses GetBordereauByNumber::setPassword()
     * @uses GetBordereauByNumber::setBordereauNumber()
     * @param string $contractNumber
     * @param string $password
     * @param string $bordereauNumber
     */
    public function __construct($contractNumber = null, $password = null, $bordereauNumber = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
            ->setBordereauNumber($bordereauNumber);
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
     * @return \Colissimo\StructType\GetBordereauByNumber
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
     * @return \Colissimo\StructType\GetBordereauByNumber
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
     * Get bordereauNumber value
     * @return string|null
     */
    public function getBordereauNumber()
    {
        return $this->bordereauNumber;
    }
    /**
     * Set bordereauNumber value
     * @param string $bordereauNumber
     * @return \Colissimo\StructType\GetBordereauByNumber
     */
    public function setBordereauNumber($bordereauNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bordereauNumber) && !is_string($bordereauNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bordereauNumber, true), gettype($bordereauNumber)), __LINE__);
        }
        $this->bordereauNumber = $bordereauNumber;
        return $this;
    }
}
