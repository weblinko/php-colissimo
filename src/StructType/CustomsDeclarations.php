<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for customsDeclarations StructType
 * @subpackage Structs
 */
class CustomsDeclarations extends AbstractStructBase
{
    /**
     * The includeCustomsDeclarations
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $includeCustomsDeclarations;
    /**
     * The contents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\Contents
     */
    public $contents;
    /**
     * The importersReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $importersReference;
    /**
     * The importersContact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $importersContact;
    /**
     * The officeOrigin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $officeOrigin;
    /**
     * The comments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $comments;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * The invoiceNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $invoiceNumber;
    /**
     * The licenceNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $licenceNumber;
    /**
     * The certificatNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $certificatNumber;
    /**
     * The importerAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\ImporterAddress
     */
    public $importerAddress;
    /**
     * Constructor method for customsDeclarations
     * @uses CustomsDeclarations::setIncludeCustomsDeclarations()
     * @uses CustomsDeclarations::setContents()
     * @uses CustomsDeclarations::setImportersReference()
     * @uses CustomsDeclarations::setImportersContact()
     * @uses CustomsDeclarations::setOfficeOrigin()
     * @uses CustomsDeclarations::setComments()
     * @uses CustomsDeclarations::setDescription()
     * @uses CustomsDeclarations::setInvoiceNumber()
     * @uses CustomsDeclarations::setLicenceNumber()
     * @uses CustomsDeclarations::setCertificatNumber()
     * @uses CustomsDeclarations::setImporterAddress()
     * @param bool $includeCustomsDeclarations
     * @param \Colissimo\StructType\Contents $contents
     * @param string $importersReference
     * @param string $importersContact
     * @param string $officeOrigin
     * @param string $comments
     * @param string $description
     * @param string $invoiceNumber
     * @param string $licenceNumber
     * @param string $certificatNumber
     * @param \Colissimo\StructType\ImporterAddress $importerAddress
     */
    public function __construct($includeCustomsDeclarations = null, \Colissimo\StructType\Contents $contents = null, $importersReference = null, $importersContact = null, $officeOrigin = null, $comments = null, $description = null, $invoiceNumber = null, $licenceNumber = null, $certificatNumber = null, \Colissimo\StructType\ImporterAddress $importerAddress = null)
    {
        $this
            ->setIncludeCustomsDeclarations($includeCustomsDeclarations)
            ->setContents($contents)
            ->setImportersReference($importersReference)
            ->setImportersContact($importersContact)
            ->setOfficeOrigin($officeOrigin)
            ->setComments($comments)
            ->setDescription($description)
            ->setInvoiceNumber($invoiceNumber)
            ->setLicenceNumber($licenceNumber)
            ->setCertificatNumber($certificatNumber)
            ->setImporterAddress($importerAddress);
    }
    /**
     * Get includeCustomsDeclarations value
     * @return bool|null
     */
    public function getIncludeCustomsDeclarations()
    {
        return $this->includeCustomsDeclarations;
    }
    /**
     * Set includeCustomsDeclarations value
     * @param bool $includeCustomsDeclarations
     * @return \Colissimo\StructType\CustomsDeclarations
     */
    public function setIncludeCustomsDeclarations($includeCustomsDeclarations = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeCustomsDeclarations) && !is_bool($includeCustomsDeclarations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeCustomsDeclarations, true), gettype($includeCustomsDeclarations)), __LINE__);
        }
        $this->includeCustomsDeclarations = $includeCustomsDeclarations;
        return $this;
    }
    /**
     * Get contents value
     * @return \Colissimo\StructType\Contents|null
     */
    public function getContents()
    {
        return $this->contents;
    }
    /**
     * Set contents value
     * @param \Colissimo\StructType\Contents $contents
     * @return \Colissimo\StructType\CustomsDeclarations
     */
    public function setContents(\Colissimo\StructType\Contents $contents = null)
    {
        $this->contents = $contents;
        return $this;
    }
    /**
     * Get importersReference value
     * @return string|null
     */
    public function getImportersReference()
    {
        return $this->importersReference;
    }
    /**
     * Set importersReference value
     * @param string $importersReference
     * @return \Colissimo\StructType\CustomsDeclarations
     */
    public function setImportersReference($importersReference = null)
    {
        // validation for constraint: string
        if (!is_null($importersReference) && !is_string($importersReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importersReference, true), gettype($importersReference)), __LINE__);
        }
        $this->importersReference = $importersReference;
        return $this;
    }
    /**
     * Get importersContact value
     * @return string|null
     */
    public function getImportersContact()
    {
        return $this->importersContact;
    }
    /**
     * Set importersContact value
     * @param string $importersContact
     * @return \Colissimo\StructType\CustomsDeclarations
     */
    public function setImportersContact($importersContact = null)
    {
        // validation for constraint: string
        if (!is_null($importersContact) && !is_string($importersContact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importersContact, true), gettype($importersContact)), __LINE__);
        }
        $this->importersContact = $importersContact;
        return $this;
    }
    /**
     * Get officeOrigin value
     * @return string|null
     */
    public function getOfficeOrigin()
    {
        return $this->officeOrigin;
    }
    /**
     * Set officeOrigin value
     * @param string $officeOrigin
     * @return \Colissimo\StructType\CustomsDeclarations
     */
    public function setOfficeOrigin($officeOrigin = null)
    {
        // validation for constraint: string
        if (!is_null($officeOrigin) && !is_string($officeOrigin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($officeOrigin, true), gettype($officeOrigin)), __LINE__);
        }
        $this->officeOrigin = $officeOrigin;
        return $this;
    }
    /**
     * Get comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \Colissimo\StructType\CustomsDeclarations
     */
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comments, true), gettype($comments)), __LINE__);
        }
        $this->comments = $comments;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Colissimo\StructType\CustomsDeclarations
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get invoiceNumber value
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }
    /**
     * Set invoiceNumber value
     * @param string $invoiceNumber
     * @return \Colissimo\StructType\CustomsDeclarations
     */
    public function setInvoiceNumber($invoiceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceNumber) && !is_string($invoiceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNumber, true), gettype($invoiceNumber)), __LINE__);
        }
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     * Get licenceNumber value
     * @return string|null
     */
    public function getLicenceNumber()
    {
        return $this->licenceNumber;
    }
    /**
     * Set licenceNumber value
     * @param string $licenceNumber
     * @return \Colissimo\StructType\CustomsDeclarations
     */
    public function setLicenceNumber($licenceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($licenceNumber) && !is_string($licenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($licenceNumber, true), gettype($licenceNumber)), __LINE__);
        }
        $this->licenceNumber = $licenceNumber;
        return $this;
    }
    /**
     * Get certificatNumber value
     * @return string|null
     */
    public function getCertificatNumber()
    {
        return $this->certificatNumber;
    }
    /**
     * Set certificatNumber value
     * @param string $certificatNumber
     * @return \Colissimo\StructType\CustomsDeclarations
     */
    public function setCertificatNumber($certificatNumber = null)
    {
        // validation for constraint: string
        if (!is_null($certificatNumber) && !is_string($certificatNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($certificatNumber, true), gettype($certificatNumber)), __LINE__);
        }
        $this->certificatNumber = $certificatNumber;
        return $this;
    }
    /**
     * Get importerAddress value
     * @return \Colissimo\StructType\ImporterAddress|null
     */
    public function getImporterAddress()
    {
        return $this->importerAddress;
    }
    /**
     * Set importerAddress value
     * @param \Colissimo\StructType\ImporterAddress $importerAddress
     * @return \Colissimo\StructType\CustomsDeclarations
     */
    public function setImporterAddress(\Colissimo\StructType\ImporterAddress $importerAddress = null)
    {
        $this->importerAddress = $importerAddress;
        return $this;
    }
}
