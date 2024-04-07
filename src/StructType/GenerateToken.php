<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateToken StructType
 * Meta information extracted from the WSDL
 * - type: tns:generateToken
 * @subpackage Structs
 */
class GenerateToken extends AbstractStructBase
{
    /**
     * The generateTokenRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\GenerateTokenRequest
     */
    public $generateTokenRequest;
    /**
     * Constructor method for generateToken
     * @uses GenerateToken::setGenerateTokenRequest()
     * @param \Colissimo\StructType\GenerateTokenRequest $generateTokenRequest
     */
    public function __construct(\Colissimo\StructType\GenerateTokenRequest $generateTokenRequest = null)
    {
        $this
            ->setGenerateTokenRequest($generateTokenRequest);
    }
    /**
     * Get generateTokenRequest value
     * @return \Colissimo\StructType\GenerateTokenRequest|null
     */
    public function getGenerateTokenRequest()
    {
        return $this->generateTokenRequest;
    }
    /**
     * Set generateTokenRequest value
     * @param \Colissimo\StructType\GenerateTokenRequest $generateTokenRequest
     * @return \Colissimo\StructType\GenerateToken
     */
    public function setGenerateTokenRequest(\Colissimo\StructType\GenerateTokenRequest $generateTokenRequest = null)
    {
        $this->generateTokenRequest = $generateTokenRequest;
        return $this;
    }
}
