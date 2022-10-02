<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pickupLocation StructType
 * @subpackage Structs
 */
class PickupLocation extends AbstractStructBase
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\AddressPickupLocation
     */
    public $address;
    /**
     * The groupRouting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $groupRouting;
    /**
     * The idPartenaire
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $idPartenaire;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * The netWork
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $netWork;
    /**
     * The pointId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pointId;
    /**
     * The routingFileVersion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $routingFileVersion;
    /**
     * The routingZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $routingZipCode;
    /**
     * The serviceLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $serviceLabel;
    /**
     * The sortDistribution
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $sortDistribution;
    /**
     * Constructor method for pickupLocation
     * @uses PickupLocation::setAddress()
     * @uses PickupLocation::setGroupRouting()
     * @uses PickupLocation::setIdPartenaire()
     * @uses PickupLocation::setName()
     * @uses PickupLocation::setNetWork()
     * @uses PickupLocation::setPointId()
     * @uses PickupLocation::setRoutingFileVersion()
     * @uses PickupLocation::setRoutingZipCode()
     * @uses PickupLocation::setServiceLabel()
     * @uses PickupLocation::setSortDistribution()
     * @param \Colissimo\StructType\AddressPickupLocation $address
     * @param string $groupRouting
     * @param string $idPartenaire
     * @param string $name
     * @param string $netWork
     * @param string $pointId
     * @param string $routingFileVersion
     * @param string $routingZipCode
     * @param string $serviceLabel
     * @param string $sortDistribution
     */
    public function __construct(\Colissimo\StructType\AddressPickupLocation $address = null, $groupRouting = null, $idPartenaire = null, $name = null, $netWork = null, $pointId = null, $routingFileVersion = null, $routingZipCode = null, $serviceLabel = null, $sortDistribution = null)
    {
        $this
            ->setAddress($address)
            ->setGroupRouting($groupRouting)
            ->setIdPartenaire($idPartenaire)
            ->setName($name)
            ->setNetWork($netWork)
            ->setPointId($pointId)
            ->setRoutingFileVersion($routingFileVersion)
            ->setRoutingZipCode($routingZipCode)
            ->setServiceLabel($serviceLabel)
            ->setSortDistribution($sortDistribution);
    }
    /**
     * Get address value
     * @return \Colissimo\StructType\AddressPickupLocation|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Colissimo\StructType\AddressPickupLocation $address
     * @return \Colissimo\StructType\PickupLocation
     */
    public function setAddress(\Colissimo\StructType\AddressPickupLocation $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Get groupRouting value
     * @return string|null
     */
    public function getGroupRouting()
    {
        return $this->groupRouting;
    }
    /**
     * Set groupRouting value
     * @param string $groupRouting
     * @return \Colissimo\StructType\PickupLocation
     */
    public function setGroupRouting($groupRouting = null)
    {
        // validation for constraint: string
        if (!is_null($groupRouting) && !is_string($groupRouting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupRouting, true), gettype($groupRouting)), __LINE__);
        }
        $this->groupRouting = $groupRouting;
        return $this;
    }
    /**
     * Get idPartenaire value
     * @return string|null
     */
    public function getIdPartenaire()
    {
        return $this->idPartenaire;
    }
    /**
     * Set idPartenaire value
     * @param string $idPartenaire
     * @return \Colissimo\StructType\PickupLocation
     */
    public function setIdPartenaire($idPartenaire = null)
    {
        // validation for constraint: string
        if (!is_null($idPartenaire) && !is_string($idPartenaire)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idPartenaire, true), gettype($idPartenaire)), __LINE__);
        }
        $this->idPartenaire = $idPartenaire;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Colissimo\StructType\PickupLocation
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get netWork value
     * @return string|null
     */
    public function getNetWork()
    {
        return $this->netWork;
    }
    /**
     * Set netWork value
     * @param string $netWork
     * @return \Colissimo\StructType\PickupLocation
     */
    public function setNetWork($netWork = null)
    {
        // validation for constraint: string
        if (!is_null($netWork) && !is_string($netWork)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($netWork, true), gettype($netWork)), __LINE__);
        }
        $this->netWork = $netWork;
        return $this;
    }
    /**
     * Get pointId value
     * @return string|null
     */
    public function getPointId()
    {
        return $this->pointId;
    }
    /**
     * Set pointId value
     * @param string $pointId
     * @return \Colissimo\StructType\PickupLocation
     */
    public function setPointId($pointId = null)
    {
        // validation for constraint: string
        if (!is_null($pointId) && !is_string($pointId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pointId, true), gettype($pointId)), __LINE__);
        }
        $this->pointId = $pointId;
        return $this;
    }
    /**
     * Get routingFileVersion value
     * @return string|null
     */
    public function getRoutingFileVersion()
    {
        return $this->routingFileVersion;
    }
    /**
     * Set routingFileVersion value
     * @param string $routingFileVersion
     * @return \Colissimo\StructType\PickupLocation
     */
    public function setRoutingFileVersion($routingFileVersion = null)
    {
        // validation for constraint: string
        if (!is_null($routingFileVersion) && !is_string($routingFileVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingFileVersion, true), gettype($routingFileVersion)), __LINE__);
        }
        $this->routingFileVersion = $routingFileVersion;
        return $this;
    }
    /**
     * Get routingZipCode value
     * @return string|null
     */
    public function getRoutingZipCode()
    {
        return $this->routingZipCode;
    }
    /**
     * Set routingZipCode value
     * @param string $routingZipCode
     * @return \Colissimo\StructType\PickupLocation
     */
    public function setRoutingZipCode($routingZipCode = null)
    {
        // validation for constraint: string
        if (!is_null($routingZipCode) && !is_string($routingZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingZipCode, true), gettype($routingZipCode)), __LINE__);
        }
        $this->routingZipCode = $routingZipCode;
        return $this;
    }
    /**
     * Get serviceLabel value
     * @return string|null
     */
    public function getServiceLabel()
    {
        return $this->serviceLabel;
    }
    /**
     * Set serviceLabel value
     * @param string $serviceLabel
     * @return \Colissimo\StructType\PickupLocation
     */
    public function setServiceLabel($serviceLabel = null)
    {
        // validation for constraint: string
        if (!is_null($serviceLabel) && !is_string($serviceLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceLabel, true), gettype($serviceLabel)), __LINE__);
        }
        $this->serviceLabel = $serviceLabel;
        return $this;
    }
    /**
     * Get sortDistribution value
     * @return string|null
     */
    public function getSortDistribution()
    {
        return $this->sortDistribution;
    }
    /**
     * Set sortDistribution value
     * @param string $sortDistribution
     * @return \Colissimo\StructType\PickupLocation
     */
    public function setSortDistribution($sortDistribution = null)
    {
        // validation for constraint: string
        if (!is_null($sortDistribution) && !is_string($sortDistribution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortDistribution, true), gettype($sortDistribution)), __LINE__);
        }
        $this->sortDistribution = $sortDistribution;
        return $this;
    }
}
