<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findRDVPointRetraitAcheminementResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:findRDVPointRetraitAcheminementResponse
 * @subpackage Structs
 */
class FindRDVPointRetraitAcheminementResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\RdvPointRetraitAcheminementResult
     */
    public $return;
    /**
     * Constructor method for findRDVPointRetraitAcheminementResponse
     * @uses FindRDVPointRetraitAcheminementResponse::setReturn()
     * @param \Colissimo\StructType\RdvPointRetraitAcheminementResult $return
     */
    public function __construct(\Colissimo\StructType\RdvPointRetraitAcheminementResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Colissimo\StructType\RdvPointRetraitAcheminementResult|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Colissimo\StructType\RdvPointRetraitAcheminementResult $return
     * @return \Colissimo\StructType\FindRDVPointRetraitAcheminementResponse
     */
    public function setReturn(\Colissimo\StructType\RdvPointRetraitAcheminementResult $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
