<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateCN23 StructType
 * Meta information extracted from the WSDL
 * - type: tns:generateCN23
 * @subpackage Structs
 */
class GenerateCN23 extends AbstractStructBase
{
    /**
     * The generateCN23Request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\GenerateCN23Request
     */
    public $generateCN23Request;
    /**
     * Constructor method for generateCN23
     * @uses GenerateCN23::setGenerateCN23Request()
     * @param \Colissimo\StructType\GenerateCN23Request $generateCN23Request
     */
    public function __construct(\Colissimo\StructType\GenerateCN23Request $generateCN23Request = null)
    {
        $this
            ->setGenerateCN23Request($generateCN23Request);
    }
    /**
     * Get generateCN23Request value
     * @return \Colissimo\StructType\GenerateCN23Request|null
     */
    public function getGenerateCN23Request()
    {
        return $this->generateCN23Request;
    }
    /**
     * Set generateCN23Request value
     * @param \Colissimo\StructType\GenerateCN23Request $generateCN23Request
     * @return \Colissimo\StructType\GenerateCN23
     */
    public function setGenerateCN23Request(\Colissimo\StructType\GenerateCN23Request $generateCN23Request = null)
    {
        $this->generateCN23Request = $generateCN23Request;
        return $this;
    }
}
