<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for original StructType
 * @subpackage Structs
 */
class Original extends AbstractStructBase
{
    /**
     * The originalIdent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $originalIdent;
    /**
     * The originalInvoiceNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $originalInvoiceNumber;
    /**
     * The originalInvoiceDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $originalInvoiceDate;
    /**
     * The originalParcelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $originalParcelNumber;
    /**
     * Constructor method for original
     * @uses Original::setOriginalIdent()
     * @uses Original::setOriginalInvoiceNumber()
     * @uses Original::setOriginalInvoiceDate()
     * @uses Original::setOriginalParcelNumber()
     * @param string $originalIdent
     * @param string $originalInvoiceNumber
     * @param string $originalInvoiceDate
     * @param string $originalParcelNumber
     */
    public function __construct($originalIdent = null, $originalInvoiceNumber = null, $originalInvoiceDate = null, $originalParcelNumber = null)
    {
        $this
            ->setOriginalIdent($originalIdent)
            ->setOriginalInvoiceNumber($originalInvoiceNumber)
            ->setOriginalInvoiceDate($originalInvoiceDate)
            ->setOriginalParcelNumber($originalParcelNumber);
    }
    /**
     * Get originalIdent value
     * @return string|null
     */
    public function getOriginalIdent()
    {
        return $this->originalIdent;
    }
    /**
     * Set originalIdent value
     * @param string $originalIdent
     * @return \Colissimo\StructType\Original
     */
    public function setOriginalIdent($originalIdent = null)
    {
        // validation for constraint: string
        if (!is_null($originalIdent) && !is_string($originalIdent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalIdent, true), gettype($originalIdent)), __LINE__);
        }
        $this->originalIdent = $originalIdent;
        return $this;
    }
    /**
     * Get originalInvoiceNumber value
     * @return string|null
     */
    public function getOriginalInvoiceNumber()
    {
        return $this->originalInvoiceNumber;
    }
    /**
     * Set originalInvoiceNumber value
     * @param string $originalInvoiceNumber
     * @return \Colissimo\StructType\Original
     */
    public function setOriginalInvoiceNumber($originalInvoiceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($originalInvoiceNumber) && !is_string($originalInvoiceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalInvoiceNumber, true), gettype($originalInvoiceNumber)), __LINE__);
        }
        $this->originalInvoiceNumber = $originalInvoiceNumber;
        return $this;
    }
    /**
     * Get originalInvoiceDate value
     * @return string|null
     */
    public function getOriginalInvoiceDate()
    {
        return $this->originalInvoiceDate;
    }
    /**
     * Set originalInvoiceDate value
     * @param string $originalInvoiceDate
     * @return \Colissimo\StructType\Original
     */
    public function setOriginalInvoiceDate($originalInvoiceDate = null)
    {
        // validation for constraint: string
        if (!is_null($originalInvoiceDate) && !is_string($originalInvoiceDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalInvoiceDate, true), gettype($originalInvoiceDate)), __LINE__);
        }
        $this->originalInvoiceDate = $originalInvoiceDate;
        return $this;
    }
    /**
     * Get originalParcelNumber value
     * @return string|null
     */
    public function getOriginalParcelNumber()
    {
        return $this->originalParcelNumber;
    }
    /**
     * Set originalParcelNumber value
     * @param string $originalParcelNumber
     * @return \Colissimo\StructType\Original
     */
    public function setOriginalParcelNumber($originalParcelNumber = null)
    {
        // validation for constraint: string
        if (!is_null($originalParcelNumber) && !is_string($originalParcelNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalParcelNumber, true), gettype($originalParcelNumber)), __LINE__);
        }
        $this->originalParcelNumber = $originalParcelNumber;
        return $this;
    }
}
