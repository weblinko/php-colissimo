<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateLabelResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:generateLabelResponse
 * @subpackage Structs
 */
class GenerateLabelResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\GenerateLabelV2ResponseType
     */
    public $return;
    /**
     * Constructor method for generateLabelResponse
     * @uses GenerateLabelResponse::setReturn()
     * @param \Colissimo\StructType\GenerateLabelV2ResponseType $return
     */
    public function __construct(\Colissimo\StructType\GenerateLabelV2ResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Colissimo\StructType\GenerateLabelV2ResponseType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Colissimo\StructType\GenerateLabelV2ResponseType $return
     * @return \Colissimo\StructType\GenerateLabelResponse
     */
    public function setReturn(\Colissimo\StructType\GenerateLabelV2ResponseType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
