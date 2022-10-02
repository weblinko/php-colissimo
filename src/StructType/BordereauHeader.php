<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bordereauHeader StructType
 * @subpackage Structs
 */
class BordereauHeader extends AbstractStructBase
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $address;
    /**
     * The bordereauNumber
     * @var int
     */
    public $bordereauNumber;
    /**
     * The clientNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $clientNumber;
    /**
     * The codeSitePCH
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $codeSitePCH;
    /**
     * The company
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $company;
    /**
     * The nameSitePCH
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $nameSitePCH;
    /**
     * The numberOfParcels
     * @var int
     */
    public $numberOfParcels;
    /**
     * The publishingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $publishingDate;
    /**
     * Constructor method for bordereauHeader
     * @uses BordereauHeader::setAddress()
     * @uses BordereauHeader::setBordereauNumber()
     * @uses BordereauHeader::setClientNumber()
     * @uses BordereauHeader::setCodeSitePCH()
     * @uses BordereauHeader::setCompany()
     * @uses BordereauHeader::setNameSitePCH()
     * @uses BordereauHeader::setNumberOfParcels()
     * @uses BordereauHeader::setPublishingDate()
     * @param string $address
     * @param int $bordereauNumber
     * @param string $clientNumber
     * @param int $codeSitePCH
     * @param string $company
     * @param string $nameSitePCH
     * @param int $numberOfParcels
     * @param string $publishingDate
     */
    public function __construct($address = null, $bordereauNumber = null, $clientNumber = null, $codeSitePCH = null, $company = null, $nameSitePCH = null, $numberOfParcels = null, $publishingDate = null)
    {
        $this
            ->setAddress($address)
            ->setBordereauNumber($bordereauNumber)
            ->setClientNumber($clientNumber)
            ->setCodeSitePCH($codeSitePCH)
            ->setCompany($company)
            ->setNameSitePCH($nameSitePCH)
            ->setNumberOfParcels($numberOfParcels)
            ->setPublishingDate($publishingDate);
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \Colissimo\StructType\BordereauHeader
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Get bordereauNumber value
     * @return int|null
     */
    public function getBordereauNumber()
    {
        return $this->bordereauNumber;
    }
    /**
     * Set bordereauNumber value
     * @param int $bordereauNumber
     * @return \Colissimo\StructType\BordereauHeader
     */
    public function setBordereauNumber($bordereauNumber = null)
    {
        // validation for constraint: int
        if (!is_null($bordereauNumber) && !(is_int($bordereauNumber) || ctype_digit($bordereauNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bordereauNumber, true), gettype($bordereauNumber)), __LINE__);
        }
        $this->bordereauNumber = $bordereauNumber;
        return $this;
    }
    /**
     * Get clientNumber value
     * @return string|null
     */
    public function getClientNumber()
    {
        return $this->clientNumber;
    }
    /**
     * Set clientNumber value
     * @param string $clientNumber
     * @return \Colissimo\StructType\BordereauHeader
     */
    public function setClientNumber($clientNumber = null)
    {
        // validation for constraint: string
        if (!is_null($clientNumber) && !is_string($clientNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientNumber, true), gettype($clientNumber)), __LINE__);
        }
        $this->clientNumber = $clientNumber;
        return $this;
    }
    /**
     * Get codeSitePCH value
     * @return int|null
     */
    public function getCodeSitePCH()
    {
        return $this->codeSitePCH;
    }
    /**
     * Set codeSitePCH value
     * @param int $codeSitePCH
     * @return \Colissimo\StructType\BordereauHeader
     */
    public function setCodeSitePCH($codeSitePCH = null)
    {
        // validation for constraint: int
        if (!is_null($codeSitePCH) && !(is_int($codeSitePCH) || ctype_digit($codeSitePCH))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codeSitePCH, true), gettype($codeSitePCH)), __LINE__);
        }
        $this->codeSitePCH = $codeSitePCH;
        return $this;
    }
    /**
     * Get company value
     * @return string|null
     */
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * Set company value
     * @param string $company
     * @return \Colissimo\StructType\BordereauHeader
     */
    public function setCompany($company = null)
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company, true), gettype($company)), __LINE__);
        }
        $this->company = $company;
        return $this;
    }
    /**
     * Get nameSitePCH value
     * @return string|null
     */
    public function getNameSitePCH()
    {
        return $this->nameSitePCH;
    }
    /**
     * Set nameSitePCH value
     * @param string $nameSitePCH
     * @return \Colissimo\StructType\BordereauHeader
     */
    public function setNameSitePCH($nameSitePCH = null)
    {
        // validation for constraint: string
        if (!is_null($nameSitePCH) && !is_string($nameSitePCH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameSitePCH, true), gettype($nameSitePCH)), __LINE__);
        }
        $this->nameSitePCH = $nameSitePCH;
        return $this;
    }
    /**
     * Get numberOfParcels value
     * @return int|null
     */
    public function getNumberOfParcels()
    {
        return $this->numberOfParcels;
    }
    /**
     * Set numberOfParcels value
     * @param int $numberOfParcels
     * @return \Colissimo\StructType\BordereauHeader
     */
    public function setNumberOfParcels($numberOfParcels = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfParcels) && !(is_int($numberOfParcels) || ctype_digit($numberOfParcels))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfParcels, true), gettype($numberOfParcels)), __LINE__);
        }
        $this->numberOfParcels = $numberOfParcels;
        return $this;
    }
    /**
     * Get publishingDate value
     * @return string|null
     */
    public function getPublishingDate()
    {
        return $this->publishingDate;
    }
    /**
     * Set publishingDate value
     * @param string $publishingDate
     * @return \Colissimo\StructType\BordereauHeader
     */
    public function setPublishingDate($publishingDate = null)
    {
        // validation for constraint: string
        if (!is_null($publishingDate) && !is_string($publishingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($publishingDate, true), gettype($publishingDate)), __LINE__);
        }
        $this->publishingDate = $publishingDate;
        return $this;
    }
}
