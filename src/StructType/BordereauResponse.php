<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bordereauResponse StructType
 * @subpackage Structs
 */
class BordereauResponse extends BaseResponse
{
    /**
     * The bordereau
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\Bordereau
     */
    public $bordereau;
    /**
     * Constructor method for bordereauResponse
     * @uses BordereauResponse::setBordereau()
     * @param \Colissimo\StructType\Bordereau $bordereau
     */
    public function __construct(\Colissimo\StructType\Bordereau $bordereau = null)
    {
        $this
            ->setBordereau($bordereau);
    }
    /**
     * Get bordereau value
     * @return \Colissimo\StructType\Bordereau|null
     */
    public function getBordereau()
    {
        return $this->bordereau;
    }
    /**
     * Set bordereau value
     * @param \Colissimo\StructType\Bordereau $bordereau
     * @return \Colissimo\StructType\BordereauResponse
     */
    public function setBordereau(\Colissimo\StructType\Bordereau $bordereau = null)
    {
        $this->bordereau = $bordereau;
        return $this;
    }
}
