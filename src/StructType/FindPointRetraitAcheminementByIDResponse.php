<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findPointRetraitAcheminementByIDResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:findPointRetraitAcheminementByIDResponse
 * @subpackage Structs
 */
class FindPointRetraitAcheminementByIDResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\PointRetraitAcheminementByIDResult
     */
    public $return;
    /**
     * Constructor method for findPointRetraitAcheminementByIDResponse
     * @uses FindPointRetraitAcheminementByIDResponse::setReturn()
     * @param \Colissimo\StructType\PointRetraitAcheminementByIDResult $return
     */
    public function __construct(\Colissimo\StructType\PointRetraitAcheminementByIDResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Colissimo\StructType\PointRetraitAcheminementByIDResult|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Colissimo\StructType\PointRetraitAcheminementByIDResult $return
     * @return \Colissimo\StructType\FindPointRetraitAcheminementByIDResponse
     */
    public function setReturn(\Colissimo\StructType\PointRetraitAcheminementByIDResult $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
