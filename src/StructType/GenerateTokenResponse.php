<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateTokenResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:generateTokenResponse
 * @subpackage Structs
 */
class GenerateTokenResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\GenerateTokenV2ResponseType
     */
    public $return;
    /**
     * Constructor method for generateTokenResponse
     * @uses GenerateTokenResponse::setReturn()
     * @param \Colissimo\StructType\GenerateTokenV2ResponseType $return
     */
    public function __construct(\Colissimo\StructType\GenerateTokenV2ResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Colissimo\StructType\GenerateTokenV2ResponseType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Colissimo\StructType\GenerateTokenV2ResponseType $return
     * @return \Colissimo\StructType\GenerateTokenResponse
     */
    public function setReturn(\Colissimo\StructType\GenerateTokenV2ResponseType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
