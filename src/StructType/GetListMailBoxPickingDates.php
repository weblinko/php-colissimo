<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListMailBoxPickingDates StructType
 * Meta information extracted from the WSDL
 * - type: tns:getListMailBoxPickingDates
 * @subpackage Structs
 */
class GetListMailBoxPickingDates extends AbstractStructBase
{
    /**
     * The getListMailBoxPickingDatesRetourRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\GetListMailBoxPickingDatesRetourRequest
     */
    public $getListMailBoxPickingDatesRetourRequest;
    /**
     * Constructor method for getListMailBoxPickingDates
     * @uses GetListMailBoxPickingDates::setGetListMailBoxPickingDatesRetourRequest()
     * @param \Colissimo\StructType\GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest
     */
    public function __construct(\Colissimo\StructType\GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest = null)
    {
        $this
            ->setGetListMailBoxPickingDatesRetourRequest($getListMailBoxPickingDatesRetourRequest);
    }
    /**
     * Get getListMailBoxPickingDatesRetourRequest value
     * @return \Colissimo\StructType\GetListMailBoxPickingDatesRetourRequest|null
     */
    public function getGetListMailBoxPickingDatesRetourRequest()
    {
        return $this->getListMailBoxPickingDatesRetourRequest;
    }
    /**
     * Set getListMailBoxPickingDatesRetourRequest value
     * @param \Colissimo\StructType\GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest
     * @return \Colissimo\StructType\GetListMailBoxPickingDates
     */
    public function setGetListMailBoxPickingDatesRetourRequest(\Colissimo\StructType\GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest = null)
    {
        $this->getListMailBoxPickingDatesRetourRequest = $getListMailBoxPickingDatesRetourRequest;
        return $this;
    }
}
