<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateLabel StructType
 * Meta information extracted from the WSDL
 * - type: tns:generateLabel
 * @subpackage Structs
 */
class GenerateLabel extends AbstractStructBase
{
    /**
     * The generateLabelRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\GenerateLabelRequest
     */
    public $generateLabelRequest;
    /**
     * Constructor method for generateLabel
     * @uses GenerateLabel::setGenerateLabelRequest()
     * @param \Colissimo\StructType\GenerateLabelRequest $generateLabelRequest
     */
    public function __construct(\Colissimo\StructType\GenerateLabelRequest $generateLabelRequest = null)
    {
        $this
            ->setGenerateLabelRequest($generateLabelRequest);
    }
    /**
     * Get generateLabelRequest value
     * @return \Colissimo\StructType\GenerateLabelRequest|null
     */
    public function getGenerateLabelRequest()
    {
        return $this->generateLabelRequest;
    }
    /**
     * Set generateLabelRequest value
     * @param \Colissimo\StructType\GenerateLabelRequest $generateLabelRequest
     * @return \Colissimo\StructType\GenerateLabel
     */
    public function setGenerateLabelRequest(\Colissimo\StructType\GenerateLabelRequest $generateLabelRequest = null)
    {
        $this->generateLabelRequest = $generateLabelRequest;
        return $this;
    }
}
