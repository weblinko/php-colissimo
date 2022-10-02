<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getProductInterResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getProductInterResponse
 * @subpackage Structs
 */
class GetProductInterResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\GetProductInterResponseType
     */
    public $return;
    /**
     * Constructor method for getProductInterResponse
     * @uses GetProductInterResponse::setReturn()
     * @param \Colissimo\StructType\GetProductInterResponseType $return
     */
    public function __construct(\Colissimo\StructType\GetProductInterResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Colissimo\StructType\GetProductInterResponseType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Colissimo\StructType\GetProductInterResponseType $return
     * @return \Colissimo\StructType\GetProductInterResponse
     */
    public function setReturn(\Colissimo\StructType\GetProductInterResponseType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
