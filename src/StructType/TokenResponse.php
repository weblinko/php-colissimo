<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tokenResponse StructType
 * @subpackage Structs
 */
class TokenResponse extends AbstractStructBase
{
    /**
     * The label
     * Meta information extracted from the WSDL
     * - expectedContentTypes: application/octet-stream
     * - minOccurs: 0
     * @var string
     */
    public $label;
    /**
     * The cn23
     * Meta information extracted from the WSDL
     * - expectedContentTypes: application/octet-stream
     * - minOccurs: 0
     * @var string
     */
    public $cn23;
    /**
     * The Cab2D
     * Meta information extracted from the WSDL
     * - expectedContentTypes: application/octet-stream
     * - minOccurs: 0
     * @var string
     */
    public $Cab2D;
    /**
     * The parcelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $parcelNumber;
    /**
     * The parcelNumberPartner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $parcelNumberPartner;
    /**
     * The token
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $token;
    /**
     * Constructor method for tokenResponse
     * @uses TokenResponse::setLabel()
     * @uses TokenResponse::setCn23()
     * @uses TokenResponse::setCab2D()
     * @uses TokenResponse::setParcelNumber()
     * @uses TokenResponse::setParcelNumberPartner()
     * @uses TokenResponse::setToken()
     * @param string $label
     * @param string $cn23
     * @param string $cab2D
     * @param string $parcelNumber
     * @param string $parcelNumberPartner
     * @param string $token
     */
    public function __construct($label = null, $cn23 = null, $cab2D = null, $parcelNumber = null, $parcelNumberPartner = null, $token = null)
    {
        $this
            ->setLabel($label)
            ->setCn23($cn23)
            ->setCab2D($cab2D)
            ->setParcelNumber($parcelNumber)
            ->setParcelNumberPartner($parcelNumberPartner)
            ->setToken($token);
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \Colissimo\StructType\TokenResponse
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Get cn23 value
     * @return string|null
     */
    public function getCn23()
    {
        return $this->cn23;
    }
    /**
     * Set cn23 value
     * @param string $cn23
     * @return \Colissimo\StructType\TokenResponse
     */
    public function setCn23($cn23 = null)
    {
        // validation for constraint: string
        if (!is_null($cn23) && !is_string($cn23)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cn23, true), gettype($cn23)), __LINE__);
        }
        $this->cn23 = $cn23;
        return $this;
    }
    /**
     * Get Cab2D value
     * @return string|null
     */
    public function getCab2D()
    {
        return $this->Cab2D;
    }
    /**
     * Set Cab2D value
     * @param string $cab2D
     * @return \Colissimo\StructType\TokenResponse
     */
    public function setCab2D($cab2D = null)
    {
        // validation for constraint: string
        if (!is_null($cab2D) && !is_string($cab2D)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cab2D, true), gettype($cab2D)), __LINE__);
        }
        $this->Cab2D = $cab2D;
        return $this;
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
     * @return \Colissimo\StructType\TokenResponse
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
     * Get parcelNumberPartner value
     * @return string|null
     */
    public function getParcelNumberPartner()
    {
        return $this->parcelNumberPartner;
    }
    /**
     * Set parcelNumberPartner value
     * @param string $parcelNumberPartner
     * @return \Colissimo\StructType\TokenResponse
     */
    public function setParcelNumberPartner($parcelNumberPartner = null)
    {
        // validation for constraint: string
        if (!is_null($parcelNumberPartner) && !is_string($parcelNumberPartner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelNumberPartner, true), gettype($parcelNumberPartner)), __LINE__);
        }
        $this->parcelNumberPartner = $parcelNumberPartner;
        return $this;
    }
    /**
     * Get token value
     * @return string|null
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \Colissimo\StructType\TokenResponse
     */
    public function setToken($token = null)
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->token = $token;
        return $this;
    }
}
