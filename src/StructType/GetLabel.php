<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLabel StructType
 * Meta information extracted from the WSDL
 * - type: tns:getLabel
 * @subpackage Structs
 */
class GetLabel extends AbstractStructBase
{
    /**
     * The getLabelRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\GetLabelRequest
     */
    public $getLabelRequest;
    /**
     * Constructor method for getLabel
     * @uses GetLabel::setGetLabelRequest()
     * @param \Colissimo\StructType\GetLabelRequest $getLabelRequest
     */
    public function __construct(\Colissimo\StructType\GetLabelRequest $getLabelRequest = null)
    {
        $this
            ->setGetLabelRequest($getLabelRequest);
    }
    /**
     * Get getLabelRequest value
     * @return \Colissimo\StructType\GetLabelRequest|null
     */
    public function getGetLabelRequest()
    {
        return $this->getLabelRequest;
    }
    /**
     * Set getLabelRequest value
     * @param \Colissimo\StructType\GetLabelRequest $getLabelRequest
     * @return \Colissimo\StructType\GetLabel
     */
    public function setGetLabelRequest(\Colissimo\StructType\GetLabelRequest $getLabelRequest = null)
    {
        $this->getLabelRequest = $getLabelRequest;
        return $this;
    }
}
