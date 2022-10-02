<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zoneInfosRoutage StructType
 * @subpackage Structs
 */
class ZoneInfosRoutage extends AbstractStructBase
{
    /**
     * The controlKeyTrackingNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $controlKeyTrackingNumber;
    /**
     * The datePrinting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $datePrinting;
    /**
     * The hourPrinting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $hourPrinting;
    /**
     * The identificationDestination1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identificationDestination1;
    /**
     * The identificationDestination2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identificationDestination2;
    /**
     * The MSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MSort;
    /**
     * The numberVersionWS
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $numberVersionWS;
    /**
     * The routingVersion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $routingVersion;
    /**
     * The serviceMark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $serviceMark;
    /**
     * The sortDest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $sortDest;
    /**
     * The sortOrigin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $sortOrigin;
    /**
     * The trackingNumberRouting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $trackingNumberRouting;
    /**
     * The typeServiceLivraison
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $typeServiceLivraison;
    /**
     * The rDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $rDepot;
    /**
     * Constructor method for zoneInfosRoutage
     * @uses ZoneInfosRoutage::setControlKeyTrackingNumber()
     * @uses ZoneInfosRoutage::setDatePrinting()
     * @uses ZoneInfosRoutage::setHourPrinting()
     * @uses ZoneInfosRoutage::setIdentificationDestination1()
     * @uses ZoneInfosRoutage::setIdentificationDestination2()
     * @uses ZoneInfosRoutage::setMSort()
     * @uses ZoneInfosRoutage::setNumberVersionWS()
     * @uses ZoneInfosRoutage::setRoutingVersion()
     * @uses ZoneInfosRoutage::setServiceMark()
     * @uses ZoneInfosRoutage::setSortDest()
     * @uses ZoneInfosRoutage::setSortOrigin()
     * @uses ZoneInfosRoutage::setTrackingNumberRouting()
     * @uses ZoneInfosRoutage::setTypeServiceLivraison()
     * @uses ZoneInfosRoutage::setRDepot()
     * @param string $controlKeyTrackingNumber
     * @param string $datePrinting
     * @param string $hourPrinting
     * @param string $identificationDestination1
     * @param string $identificationDestination2
     * @param string $mSort
     * @param string $numberVersionWS
     * @param string $routingVersion
     * @param string $serviceMark
     * @param string $sortDest
     * @param string $sortOrigin
     * @param string $trackingNumberRouting
     * @param string $typeServiceLivraison
     * @param string $rDepot
     */
    public function __construct($controlKeyTrackingNumber = null, $datePrinting = null, $hourPrinting = null, $identificationDestination1 = null, $identificationDestination2 = null, $mSort = null, $numberVersionWS = null, $routingVersion = null, $serviceMark = null, $sortDest = null, $sortOrigin = null, $trackingNumberRouting = null, $typeServiceLivraison = null, $rDepot = null)
    {
        $this
            ->setControlKeyTrackingNumber($controlKeyTrackingNumber)
            ->setDatePrinting($datePrinting)
            ->setHourPrinting($hourPrinting)
            ->setIdentificationDestination1($identificationDestination1)
            ->setIdentificationDestination2($identificationDestination2)
            ->setMSort($mSort)
            ->setNumberVersionWS($numberVersionWS)
            ->setRoutingVersion($routingVersion)
            ->setServiceMark($serviceMark)
            ->setSortDest($sortDest)
            ->setSortOrigin($sortOrigin)
            ->setTrackingNumberRouting($trackingNumberRouting)
            ->setTypeServiceLivraison($typeServiceLivraison)
            ->setRDepot($rDepot);
    }
    /**
     * Get controlKeyTrackingNumber value
     * @return string|null
     */
    public function getControlKeyTrackingNumber()
    {
        return $this->controlKeyTrackingNumber;
    }
    /**
     * Set controlKeyTrackingNumber value
     * @param string $controlKeyTrackingNumber
     * @return \Colissimo\StructType\ZoneInfosRoutage
     */
    public function setControlKeyTrackingNumber($controlKeyTrackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($controlKeyTrackingNumber) && !is_string($controlKeyTrackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($controlKeyTrackingNumber, true), gettype($controlKeyTrackingNumber)), __LINE__);
        }
        $this->controlKeyTrackingNumber = $controlKeyTrackingNumber;
        return $this;
    }
    /**
     * Get datePrinting value
     * @return string|null
     */
    public function getDatePrinting()
    {
        return $this->datePrinting;
    }
    /**
     * Set datePrinting value
     * @param string $datePrinting
     * @return \Colissimo\StructType\ZoneInfosRoutage
     */
    public function setDatePrinting($datePrinting = null)
    {
        // validation for constraint: string
        if (!is_null($datePrinting) && !is_string($datePrinting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datePrinting, true), gettype($datePrinting)), __LINE__);
        }
        $this->datePrinting = $datePrinting;
        return $this;
    }
    /**
     * Get hourPrinting value
     * @return string|null
     */
    public function getHourPrinting()
    {
        return $this->hourPrinting;
    }
    /**
     * Set hourPrinting value
     * @param string $hourPrinting
     * @return \Colissimo\StructType\ZoneInfosRoutage
     */
    public function setHourPrinting($hourPrinting = null)
    {
        // validation for constraint: string
        if (!is_null($hourPrinting) && !is_string($hourPrinting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hourPrinting, true), gettype($hourPrinting)), __LINE__);
        }
        $this->hourPrinting = $hourPrinting;
        return $this;
    }
    /**
     * Get identificationDestination1 value
     * @return string|null
     */
    public function getIdentificationDestination1()
    {
        return $this->identificationDestination1;
    }
    /**
     * Set identificationDestination1 value
     * @param string $identificationDestination1
     * @return \Colissimo\StructType\ZoneInfosRoutage
     */
    public function setIdentificationDestination1($identificationDestination1 = null)
    {
        // validation for constraint: string
        if (!is_null($identificationDestination1) && !is_string($identificationDestination1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificationDestination1, true), gettype($identificationDestination1)), __LINE__);
        }
        $this->identificationDestination1 = $identificationDestination1;
        return $this;
    }
    /**
     * Get identificationDestination2 value
     * @return string|null
     */
    public function getIdentificationDestination2()
    {
        return $this->identificationDestination2;
    }
    /**
     * Set identificationDestination2 value
     * @param string $identificationDestination2
     * @return \Colissimo\StructType\ZoneInfosRoutage
     */
    public function setIdentificationDestination2($identificationDestination2 = null)
    {
        // validation for constraint: string
        if (!is_null($identificationDestination2) && !is_string($identificationDestination2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificationDestination2, true), gettype($identificationDestination2)), __LINE__);
        }
        $this->identificationDestination2 = $identificationDestination2;
        return $this;
    }
    /**
     * Get MSort value
     * @return string|null
     */
    public function getMSort()
    {
        return $this->MSort;
    }
    /**
     * Set MSort value
     * @param string $mSort
     * @return \Colissimo\StructType\ZoneInfosRoutage
     */
    public function setMSort($mSort = null)
    {
        // validation for constraint: string
        if (!is_null($mSort) && !is_string($mSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mSort, true), gettype($mSort)), __LINE__);
        }
        $this->MSort = $mSort;
        return $this;
    }
    /**
     * Get numberVersionWS value
     * @return string|null
     */
    public function getNumberVersionWS()
    {
        return $this->numberVersionWS;
    }
    /**
     * Set numberVersionWS value
     * @param string $numberVersionWS
     * @return \Colissimo\StructType\ZoneInfosRoutage
     */
    public function setNumberVersionWS($numberVersionWS = null)
    {
        // validation for constraint: string
        if (!is_null($numberVersionWS) && !is_string($numberVersionWS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberVersionWS, true), gettype($numberVersionWS)), __LINE__);
        }
        $this->numberVersionWS = $numberVersionWS;
        return $this;
    }
    /**
     * Get routingVersion value
     * @return string|null
     */
    public function getRoutingVersion()
    {
        return $this->routingVersion;
    }
    /**
     * Set routingVersion value
     * @param string $routingVersion
     * @return \Colissimo\StructType\ZoneInfosRoutage
     */
    public function setRoutingVersion($routingVersion = null)
    {
        // validation for constraint: string
        if (!is_null($routingVersion) && !is_string($routingVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingVersion, true), gettype($routingVersion)), __LINE__);
        }
        $this->routingVersion = $routingVersion;
        return $this;
    }
    /**
     * Get serviceMark value
     * @return string|null
     */
    public function getServiceMark()
    {
        return $this->serviceMark;
    }
    /**
     * Set serviceMark value
     * @param string $serviceMark
     * @return \Colissimo\StructType\ZoneInfosRoutage
     */
    public function setServiceMark($serviceMark = null)
    {
        // validation for constraint: string
        if (!is_null($serviceMark) && !is_string($serviceMark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceMark, true), gettype($serviceMark)), __LINE__);
        }
        $this->serviceMark = $serviceMark;
        return $this;
    }
    /**
     * Get sortDest value
     * @return string|null
     */
    public function getSortDest()
    {
        return $this->sortDest;
    }
    /**
     * Set sortDest value
     * @param string $sortDest
     * @return \Colissimo\StructType\ZoneInfosRoutage
     */
    public function setSortDest($sortDest = null)
    {
        // validation for constraint: string
        if (!is_null($sortDest) && !is_string($sortDest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortDest, true), gettype($sortDest)), __LINE__);
        }
        $this->sortDest = $sortDest;
        return $this;
    }
    /**
     * Get sortOrigin value
     * @return string|null
     */
    public function getSortOrigin()
    {
        return $this->sortOrigin;
    }
    /**
     * Set sortOrigin value
     * @param string $sortOrigin
     * @return \Colissimo\StructType\ZoneInfosRoutage
     */
    public function setSortOrigin($sortOrigin = null)
    {
        // validation for constraint: string
        if (!is_null($sortOrigin) && !is_string($sortOrigin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortOrigin, true), gettype($sortOrigin)), __LINE__);
        }
        $this->sortOrigin = $sortOrigin;
        return $this;
    }
    /**
     * Get trackingNumberRouting value
     * @return string|null
     */
    public function getTrackingNumberRouting()
    {
        return $this->trackingNumberRouting;
    }
    /**
     * Set trackingNumberRouting value
     * @param string $trackingNumberRouting
     * @return \Colissimo\StructType\ZoneInfosRoutage
     */
    public function setTrackingNumberRouting($trackingNumberRouting = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumberRouting) && !is_string($trackingNumberRouting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trackingNumberRouting, true), gettype($trackingNumberRouting)), __LINE__);
        }
        $this->trackingNumberRouting = $trackingNumberRouting;
        return $this;
    }
    /**
     * Get typeServiceLivraison value
     * @return string|null
     */
    public function getTypeServiceLivraison()
    {
        return $this->typeServiceLivraison;
    }
    /**
     * Set typeServiceLivraison value
     * @param string $typeServiceLivraison
     * @return \Colissimo\StructType\ZoneInfosRoutage
     */
    public function setTypeServiceLivraison($typeServiceLivraison = null)
    {
        // validation for constraint: string
        if (!is_null($typeServiceLivraison) && !is_string($typeServiceLivraison)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeServiceLivraison, true), gettype($typeServiceLivraison)), __LINE__);
        }
        $this->typeServiceLivraison = $typeServiceLivraison;
        return $this;
    }
    /**
     * Get rDepot value
     * @return string|null
     */
    public function getRDepot()
    {
        return $this->rDepot;
    }
    /**
     * Set rDepot value
     * @param string $rDepot
     * @return \Colissimo\StructType\ZoneInfosRoutage
     */
    public function setRDepot($rDepot = null)
    {
        // validation for constraint: string
        if (!is_null($rDepot) && !is_string($rDepot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rDepot, true), gettype($rDepot)), __LINE__);
        }
        $this->rDepot = $rDepot;
        return $this;
    }
}
