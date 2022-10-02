<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for checkGenerateLabelResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:checkGenerateLabelResponse
 * @subpackage Structs
 */
class CheckGenerateLabelResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\CheckGenerateLabelResponseType
     */
    public $return;
    /**
     * Constructor method for checkGenerateLabelResponse
     * @uses CheckGenerateLabelResponse::setReturn()
     * @param \Colissimo\StructType\CheckGenerateLabelResponseType $return
     */
    public function __construct(\Colissimo\StructType\CheckGenerateLabelResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Colissimo\StructType\CheckGenerateLabelResponseType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Colissimo\StructType\CheckGenerateLabelResponseType $return
     * @return \Colissimo\StructType\CheckGenerateLabelResponse
     */
    public function setReturn(\Colissimo\StructType\CheckGenerateLabelResponseType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
