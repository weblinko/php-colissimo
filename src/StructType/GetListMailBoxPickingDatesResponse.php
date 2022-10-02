<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListMailBoxPickingDatesResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getListMailBoxPickingDatesResponse
 * @subpackage Structs
 */
class GetListMailBoxPickingDatesResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\GetListMailBoxPickingDatesResponseType
     */
    public $return;
    /**
     * Constructor method for getListMailBoxPickingDatesResponse
     * @uses GetListMailBoxPickingDatesResponse::setReturn()
     * @param \Colissimo\StructType\GetListMailBoxPickingDatesResponseType $return
     */
    public function __construct(\Colissimo\StructType\GetListMailBoxPickingDatesResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Colissimo\StructType\GetListMailBoxPickingDatesResponseType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Colissimo\StructType\GetListMailBoxPickingDatesResponseType $return
     * @return \Colissimo\StructType\GetListMailBoxPickingDatesResponse
     */
    public function setReturn(\Colissimo\StructType\GetListMailBoxPickingDatesResponseType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
