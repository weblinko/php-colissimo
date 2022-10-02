<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getBordereauByNumberResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getBordereauByNumberResponse
 * @subpackage Structs
 */
class GetBordereauByNumberResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\BordereauResponse
     */
    public $return;
    /**
     * Constructor method for getBordereauByNumberResponse
     * @uses GetBordereauByNumberResponse::setReturn()
     * @param \Colissimo\StructType\BordereauResponse $return
     */
    public function __construct(\Colissimo\StructType\BordereauResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Colissimo\StructType\BordereauResponse|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Colissimo\StructType\BordereauResponse $return
     * @return \Colissimo\StructType\GetBordereauByNumberResponse
     */
    public function setReturn(\Colissimo\StructType\BordereauResponse $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
