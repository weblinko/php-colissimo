<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getProductInter StructType
 * Meta information extracted from the WSDL
 * - type: tns:getProductInter
 * @subpackage Structs
 */
class GetProductInter extends AbstractStructBase
{
    /**
     * The getProductInterRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\GetProductInterRequest
     */
    public $getProductInterRequest;
    /**
     * Constructor method for getProductInter
     * @uses GetProductInter::setGetProductInterRequest()
     * @param \Colissimo\StructType\GetProductInterRequest $getProductInterRequest
     */
    public function __construct(\Colissimo\StructType\GetProductInterRequest $getProductInterRequest = null)
    {
        $this
            ->setGetProductInterRequest($getProductInterRequest);
    }
    /**
     * Get getProductInterRequest value
     * @return \Colissimo\StructType\GetProductInterRequest|null
     */
    public function getGetProductInterRequest()
    {
        return $this->getProductInterRequest;
    }
    /**
     * Set getProductInterRequest value
     * @param \Colissimo\StructType\GetProductInterRequest $getProductInterRequest
     * @return \Colissimo\StructType\GetProductInter
     */
    public function setGetProductInterRequest(\Colissimo\StructType\GetProductInterRequest $getProductInterRequest = null)
    {
        $this->getProductInterRequest = $getProductInterRequest;
        return $this;
    }
}
