<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zoneCABRoutage StructType
 * @subpackage Structs
 */
class ZoneCABRoutage extends AbstractStructBase
{
    /**
     * The barCodeRouting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $barCodeRouting;
    /**
     * The parcelNumberRouting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $parcelNumberRouting;
    /**
     * Constructor method for zoneCABRoutage
     * @uses ZoneCABRoutage::setBarCodeRouting()
     * @uses ZoneCABRoutage::setParcelNumberRouting()
     * @param string $barCodeRouting
     * @param string $parcelNumberRouting
     */
    public function __construct($barCodeRouting = null, $parcelNumberRouting = null)
    {
        $this
            ->setBarCodeRouting($barCodeRouting)
            ->setParcelNumberRouting($parcelNumberRouting);
    }
    /**
     * Get barCodeRouting value
     * @return string|null
     */
    public function getBarCodeRouting()
    {
        return $this->barCodeRouting;
    }
    /**
     * Set barCodeRouting value
     * @param string $barCodeRouting
     * @return \Colissimo\StructType\ZoneCABRoutage
     */
    public function setBarCodeRouting($barCodeRouting = null)
    {
        // validation for constraint: string
        if (!is_null($barCodeRouting) && !is_string($barCodeRouting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barCodeRouting, true), gettype($barCodeRouting)), __LINE__);
        }
        $this->barCodeRouting = $barCodeRouting;
        return $this;
    }
    /**
     * Get parcelNumberRouting value
     * @return string|null
     */
    public function getParcelNumberRouting()
    {
        return $this->parcelNumberRouting;
    }
    /**
     * Set parcelNumberRouting value
     * @param string $parcelNumberRouting
     * @return \Colissimo\StructType\ZoneCABRoutage
     */
    public function setParcelNumberRouting($parcelNumberRouting = null)
    {
        // validation for constraint: string
        if (!is_null($parcelNumberRouting) && !is_string($parcelNumberRouting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelNumberRouting, true), gettype($parcelNumberRouting)), __LINE__);
        }
        $this->parcelNumberRouting = $parcelNumberRouting;
        return $this;
    }
}
