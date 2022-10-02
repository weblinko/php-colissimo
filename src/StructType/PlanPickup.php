<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for planPickup StructType
 * Meta information extracted from the WSDL
 * - type: tns:planPickup
 * @subpackage Structs
 */
class PlanPickup extends AbstractStructBase
{
    /**
     * The planPickupRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\PlanPickupRequest
     */
    public $planPickupRequest;
    /**
     * Constructor method for planPickup
     * @uses PlanPickup::setPlanPickupRequest()
     * @param \Colissimo\StructType\PlanPickupRequest $planPickupRequest
     */
    public function __construct(\Colissimo\StructType\PlanPickupRequest $planPickupRequest = null)
    {
        $this
            ->setPlanPickupRequest($planPickupRequest);
    }
    /**
     * Get planPickupRequest value
     * @return \Colissimo\StructType\PlanPickupRequest|null
     */
    public function getPlanPickupRequest()
    {
        return $this->planPickupRequest;
    }
    /**
     * Set planPickupRequest value
     * @param \Colissimo\StructType\PlanPickupRequest $planPickupRequest
     * @return \Colissimo\StructType\PlanPickup
     */
    public function setPlanPickupRequest(\Colissimo\StructType\PlanPickupRequest $planPickupRequest = null)
    {
        $this->planPickupRequest = $planPickupRequest;
        return $this;
    }
}
