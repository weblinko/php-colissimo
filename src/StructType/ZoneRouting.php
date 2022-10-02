<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zoneRouting StructType
 * @subpackage Structs
 */
class ZoneRouting extends AbstractStructBase
{
    /**
     * The zoneCABRoutage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\ZoneCABRoutage
     */
    public $zoneCABRoutage;
    /**
     * The zoneInfosRoutage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\ZoneInfosRoutage
     */
    public $zoneInfosRoutage;
    /**
     * Constructor method for zoneRouting
     * @uses ZoneRouting::setZoneCABRoutage()
     * @uses ZoneRouting::setZoneInfosRoutage()
     * @param \Colissimo\StructType\ZoneCABRoutage $zoneCABRoutage
     * @param \Colissimo\StructType\ZoneInfosRoutage $zoneInfosRoutage
     */
    public function __construct(\Colissimo\StructType\ZoneCABRoutage $zoneCABRoutage = null, \Colissimo\StructType\ZoneInfosRoutage $zoneInfosRoutage = null)
    {
        $this
            ->setZoneCABRoutage($zoneCABRoutage)
            ->setZoneInfosRoutage($zoneInfosRoutage);
    }
    /**
     * Get zoneCABRoutage value
     * @return \Colissimo\StructType\ZoneCABRoutage|null
     */
    public function getZoneCABRoutage()
    {
        return $this->zoneCABRoutage;
    }
    /**
     * Set zoneCABRoutage value
     * @param \Colissimo\StructType\ZoneCABRoutage $zoneCABRoutage
     * @return \Colissimo\StructType\ZoneRouting
     */
    public function setZoneCABRoutage(\Colissimo\StructType\ZoneCABRoutage $zoneCABRoutage = null)
    {
        $this->zoneCABRoutage = $zoneCABRoutage;
        return $this;
    }
    /**
     * Get zoneInfosRoutage value
     * @return \Colissimo\StructType\ZoneInfosRoutage|null
     */
    public function getZoneInfosRoutage()
    {
        return $this->zoneInfosRoutage;
    }
    /**
     * Set zoneInfosRoutage value
     * @param \Colissimo\StructType\ZoneInfosRoutage $zoneInfosRoutage
     * @return \Colissimo\StructType\ZoneRouting
     */
    public function setZoneInfosRoutage(\Colissimo\StructType\ZoneInfosRoutage $zoneInfosRoutage = null)
    {
        $this->zoneInfosRoutage = $zoneInfosRoutage;
        return $this;
    }
}
