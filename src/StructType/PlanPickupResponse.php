<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for planPickupResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:planPickupResponse
 * @subpackage Structs
 */
class PlanPickupResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\PlanPickupResponseType
     */
    public $return;
    /**
     * Constructor method for planPickupResponse
     * @uses PlanPickupResponse::setReturn()
     * @param \Colissimo\StructType\PlanPickupResponseType $return
     */
    public function __construct(\Colissimo\StructType\PlanPickupResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Colissimo\StructType\PlanPickupResponseType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Colissimo\StructType\PlanPickupResponseType $return
     * @return \Colissimo\StructType\PlanPickupResponse
     */
    public function setReturn(\Colissimo\StructType\PlanPickupResponseType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
