<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLabelResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getLabelResponse
 * @subpackage Structs
 */
class GetLabelResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\GetLabelResponseType
     */
    public $return;
    /**
     * Constructor method for getLabelResponse
     * @uses GetLabelResponse::setReturn()
     * @param \Colissimo\StructType\GetLabelResponseType $return
     */
    public function __construct(\Colissimo\StructType\GetLabelResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Colissimo\StructType\GetLabelResponseType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Colissimo\StructType\GetLabelResponseType $return
     * @return \Colissimo\StructType\GetLabelResponse
     */
    public function setReturn(\Colissimo\StructType\GetLabelResponseType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
