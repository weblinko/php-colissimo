<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateTokenV2ResponseType StructType
 * @subpackage Structs
 */
class GenerateTokenV2ResponseType extends BaseResponse
{
    /**
     * The tokenV2Response
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\TokenV2Response
     */
    public $tokenV2Response;
    /**
     * Constructor method for GenerateTokenV2ResponseType
     * @uses GenerateTokenV2ResponseType::setTokenV2Response()
     * @param \Colissimo\StructType\TokenV2Response $tokenV2Response
     */
    public function __construct(\Colissimo\StructType\TokenV2Response $tokenV2Response = null)
    {
        $this
            ->setTokenV2Response($tokenV2Response);
    }
    /**
     * Get tokenV2Response value
     * @return \Colissimo\StructType\TokenV2Response|null
     */
    public function getTokenV2Response()
    {
        return $this->tokenV2Response;
    }
    /**
     * Set tokenV2Response value
     * @param \Colissimo\StructType\TokenV2Response $tokenV2Response
     * @return \Colissimo\StructType\GenerateTokenV2ResponseType
     */
    public function setTokenV2Response(\Colissimo\StructType\TokenV2Response $tokenV2Response = null)
    {
        $this->tokenV2Response = $tokenV2Response;
        return $this;
    }
}
