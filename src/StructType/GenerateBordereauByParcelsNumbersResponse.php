<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateBordereauByParcelsNumbersResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:generateBordereauByParcelsNumbersResponse
 * @subpackage Structs
 */
class GenerateBordereauByParcelsNumbersResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\BordereauResponse
     */
    public $return;
    /**
     * Constructor method for generateBordereauByParcelsNumbersResponse
     * @uses GenerateBordereauByParcelsNumbersResponse::setReturn()
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
     * @return \Colissimo\StructType\GenerateBordereauByParcelsNumbersResponse
     */
    public function setReturn(\Colissimo\StructType\BordereauResponse $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
