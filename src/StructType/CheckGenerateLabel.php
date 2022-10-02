<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for checkGenerateLabel StructType
 * Meta information extracted from the WSDL
 * - type: tns:checkGenerateLabel
 * @subpackage Structs
 */
class CheckGenerateLabel extends AbstractStructBase
{
    /**
     * The checkGenerateLabelRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\CheckGenerateLabelRequest
     */
    public $checkGenerateLabelRequest;
    /**
     * Constructor method for checkGenerateLabel
     * @uses CheckGenerateLabel::setCheckGenerateLabelRequest()
     * @param \Colissimo\StructType\CheckGenerateLabelRequest $checkGenerateLabelRequest
     */
    public function __construct(\Colissimo\StructType\CheckGenerateLabelRequest $checkGenerateLabelRequest = null)
    {
        $this
            ->setCheckGenerateLabelRequest($checkGenerateLabelRequest);
    }
    /**
     * Get checkGenerateLabelRequest value
     * @return \Colissimo\StructType\CheckGenerateLabelRequest|null
     */
    public function getCheckGenerateLabelRequest()
    {
        return $this->checkGenerateLabelRequest;
    }
    /**
     * Set checkGenerateLabelRequest value
     * @param \Colissimo\StructType\CheckGenerateLabelRequest $checkGenerateLabelRequest
     * @return \Colissimo\StructType\CheckGenerateLabel
     */
    public function setCheckGenerateLabelRequest(\Colissimo\StructType\CheckGenerateLabelRequest $checkGenerateLabelRequest = null)
    {
        $this->checkGenerateLabelRequest = $checkGenerateLabelRequest;
        return $this;
    }
}
