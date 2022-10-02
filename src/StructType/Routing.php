<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for routing StructType
 * @subpackage Structs
 */
class Routing extends AbstractStructBase
{
    /**
     * The barcodeId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $barcodeId;
    /**
     * The depotDest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $depotDest;
    /**
     * The destinationCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $destinationCountry;
    /**
     * The destinationCountryText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $destinationCountryText;
    /**
     * The groupingPriorityLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $groupingPriorityLabel;
    /**
     * The partnerType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $partnerType;
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
     * The serviceText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $serviceText;
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
     * Constructor method for routing
     * @uses Routing::setBarcodeId()
     * @uses Routing::setDepotDest()
     * @uses Routing::setDestinationCountry()
     * @uses Routing::setDestinationCountryText()
     * @uses Routing::setGroupingPriorityLabel()
     * @uses Routing::setPartnerType()
     * @uses Routing::setRoutingVersion()
     * @uses Routing::setServiceMark()
     * @uses Routing::setServiceText()
     * @uses Routing::setSortDest()
     * @uses Routing::setSortOrigin()
     * @param string $barcodeId
     * @param string $depotDest
     * @param string $destinationCountry
     * @param string $destinationCountryText
     * @param string $groupingPriorityLabel
     * @param string $partnerType
     * @param string $routingVersion
     * @param string $serviceMark
     * @param string $serviceText
     * @param string $sortDest
     * @param string $sortOrigin
     */
    public function __construct($barcodeId = null, $depotDest = null, $destinationCountry = null, $destinationCountryText = null, $groupingPriorityLabel = null, $partnerType = null, $routingVersion = null, $serviceMark = null, $serviceText = null, $sortDest = null, $sortOrigin = null)
    {
        $this
            ->setBarcodeId($barcodeId)
            ->setDepotDest($depotDest)
            ->setDestinationCountry($destinationCountry)
            ->setDestinationCountryText($destinationCountryText)
            ->setGroupingPriorityLabel($groupingPriorityLabel)
            ->setPartnerType($partnerType)
            ->setRoutingVersion($routingVersion)
            ->setServiceMark($serviceMark)
            ->setServiceText($serviceText)
            ->setSortDest($sortDest)
            ->setSortOrigin($sortOrigin);
    }
    /**
     * Get barcodeId value
     * @return string|null
     */
    public function getBarcodeId()
    {
        return $this->barcodeId;
    }
    /**
     * Set barcodeId value
     * @param string $barcodeId
     * @return \Colissimo\StructType\Routing
     */
    public function setBarcodeId($barcodeId = null)
    {
        // validation for constraint: string
        if (!is_null($barcodeId) && !is_string($barcodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeId, true), gettype($barcodeId)), __LINE__);
        }
        $this->barcodeId = $barcodeId;
        return $this;
    }
    /**
     * Get depotDest value
     * @return string|null
     */
    public function getDepotDest()
    {
        return $this->depotDest;
    }
    /**
     * Set depotDest value
     * @param string $depotDest
     * @return \Colissimo\StructType\Routing
     */
    public function setDepotDest($depotDest = null)
    {
        // validation for constraint: string
        if (!is_null($depotDest) && !is_string($depotDest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depotDest, true), gettype($depotDest)), __LINE__);
        }
        $this->depotDest = $depotDest;
        return $this;
    }
    /**
     * Get destinationCountry value
     * @return string|null
     */
    public function getDestinationCountry()
    {
        return $this->destinationCountry;
    }
    /**
     * Set destinationCountry value
     * @param string $destinationCountry
     * @return \Colissimo\StructType\Routing
     */
    public function setDestinationCountry($destinationCountry = null)
    {
        // validation for constraint: string
        if (!is_null($destinationCountry) && !is_string($destinationCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCountry, true), gettype($destinationCountry)), __LINE__);
        }
        $this->destinationCountry = $destinationCountry;
        return $this;
    }
    /**
     * Get destinationCountryText value
     * @return string|null
     */
    public function getDestinationCountryText()
    {
        return $this->destinationCountryText;
    }
    /**
     * Set destinationCountryText value
     * @param string $destinationCountryText
     * @return \Colissimo\StructType\Routing
     */
    public function setDestinationCountryText($destinationCountryText = null)
    {
        // validation for constraint: string
        if (!is_null($destinationCountryText) && !is_string($destinationCountryText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCountryText, true), gettype($destinationCountryText)), __LINE__);
        }
        $this->destinationCountryText = $destinationCountryText;
        return $this;
    }
    /**
     * Get groupingPriorityLabel value
     * @return string|null
     */
    public function getGroupingPriorityLabel()
    {
        return $this->groupingPriorityLabel;
    }
    /**
     * Set groupingPriorityLabel value
     * @param string $groupingPriorityLabel
     * @return \Colissimo\StructType\Routing
     */
    public function setGroupingPriorityLabel($groupingPriorityLabel = null)
    {
        // validation for constraint: string
        if (!is_null($groupingPriorityLabel) && !is_string($groupingPriorityLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupingPriorityLabel, true), gettype($groupingPriorityLabel)), __LINE__);
        }
        $this->groupingPriorityLabel = $groupingPriorityLabel;
        return $this;
    }
    /**
     * Get partnerType value
     * @return string|null
     */
    public function getPartnerType()
    {
        return $this->partnerType;
    }
    /**
     * Set partnerType value
     * @param string $partnerType
     * @return \Colissimo\StructType\Routing
     */
    public function setPartnerType($partnerType = null)
    {
        // validation for constraint: string
        if (!is_null($partnerType) && !is_string($partnerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerType, true), gettype($partnerType)), __LINE__);
        }
        $this->partnerType = $partnerType;
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
     * @return \Colissimo\StructType\Routing
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
     * @return \Colissimo\StructType\Routing
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
     * Get serviceText value
     * @return string|null
     */
    public function getServiceText()
    {
        return $this->serviceText;
    }
    /**
     * Set serviceText value
     * @param string $serviceText
     * @return \Colissimo\StructType\Routing
     */
    public function setServiceText($serviceText = null)
    {
        // validation for constraint: string
        if (!is_null($serviceText) && !is_string($serviceText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceText, true), gettype($serviceText)), __LINE__);
        }
        $this->serviceText = $serviceText;
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
     * @return \Colissimo\StructType\Routing
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
     * @return \Colissimo\StructType\Routing
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
}
