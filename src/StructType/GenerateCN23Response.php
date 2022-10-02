<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateCN23Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:generateCN23Response
 * @subpackage Structs
 */
class GenerateCN23Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\GenerateCN23V2ResponseType
     */
    public $return;
    /**
     * Constructor method for generateCN23Response
     * @uses GenerateCN23Response::setReturn()
     * @param \Colissimo\StructType\GenerateCN23V2ResponseType $return
     */
    public function __construct(\Colissimo\StructType\GenerateCN23V2ResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Colissimo\StructType\GenerateCN23V2ResponseType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Colissimo\StructType\GenerateCN23V2ResponseType $return
     * @return \Colissimo\StructType\GenerateCN23Response
     */
    public function setReturn(\Colissimo\StructType\GenerateCN23V2ResponseType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
