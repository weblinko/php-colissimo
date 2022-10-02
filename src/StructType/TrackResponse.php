<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackResponse
 * @subpackage Structs
 */
class TrackResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\SkybillInformationResult
     */
    public $return;
    /**
     * Constructor method for trackResponse
     * @uses TrackResponse::setReturn()
     * @param \Colissimo\StructType\SkybillInformationResult $return
     */
    public function __construct(\Colissimo\StructType\SkybillInformationResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Colissimo\StructType\SkybillInformationResult|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Colissimo\StructType\SkybillInformationResult $return
     * @return \Colissimo\StructType\TrackResponse
     */
    public function setReturn(\Colissimo\StructType\SkybillInformationResult $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
