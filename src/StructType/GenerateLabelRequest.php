<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateLabelRequest StructType
 * @subpackage Structs
 */
class GenerateLabelRequest extends AbstractStructBase
{
    /**
     * The contractNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $contractNumber;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $password;
    /**
     * The outputFormat
     * @var \Colissimo\StructType\TypeOutputFormat
     */
    public $outputFormat;
    /**
     * The letter
     * @var \Colissimo\StructType\TypeLetter
     */
    public $letter;
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\TypeFields
     */
    public $fields;
    /**
     * Constructor method for generateLabelRequest
     * @uses GenerateLabelRequest::setContractNumber()
     * @uses GenerateLabelRequest::setPassword()
     * @uses GenerateLabelRequest::setOutputFormat()
     * @uses GenerateLabelRequest::setLetter()
     * @uses GenerateLabelRequest::setFields()
     * @param string $contractNumber
     * @param string $password
     * @param \Colissimo\StructType\TypeOutputFormat $outputFormat
     * @param \Colissimo\StructType\TypeLetter $letter
     * @param \Colissimo\StructType\TypeFields $fields
     */
    public function __construct($contractNumber = null, $password = null, \Colissimo\StructType\TypeOutputFormat $outputFormat = null, \Colissimo\StructType\TypeLetter $letter = null, \Colissimo\StructType\TypeFields $fields = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
            ->setOutputFormat($outputFormat)
            ->setLetter($letter)
            ->setFields($fields);
    }
    /**
     * Get contractNumber value
     * @return string|null
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }
    /**
     * Set contractNumber value
     * @param string $contractNumber
     * @return \Colissimo\StructType\GenerateLabelRequest
     */
    public function setContractNumber($contractNumber = null)
    {
        // validation for constraint: string
        if (!is_null($contractNumber) && !is_string($contractNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractNumber, true), gettype($contractNumber)), __LINE__);
        }
        $this->contractNumber = $contractNumber;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Colissimo\StructType\GenerateLabelRequest
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get outputFormat value
     * @return \Colissimo\StructType\TypeOutputFormat|null
     */
    public function getOutputFormat()
    {
        return $this->outputFormat;
    }
    /**
     * Set outputFormat value
     * @param \Colissimo\StructType\TypeOutputFormat $outputFormat
     * @return \Colissimo\StructType\GenerateLabelRequest
     */
    public function setOutputFormat(\Colissimo\StructType\TypeOutputFormat $outputFormat = null)
    {
        $this->outputFormat = $outputFormat;
        return $this;
    }
    /**
     * Get letter value
     * @return \Colissimo\StructType\TypeLetter|null
     */
    public function getLetter()
    {
        return $this->letter;
    }
    /**
     * Set letter value
     * @param \Colissimo\StructType\TypeLetter $letter
     * @return \Colissimo\StructType\GenerateLabelRequest
     */
    public function setLetter(\Colissimo\StructType\TypeLetter $letter = null)
    {
        $this->letter = $letter;
        return $this;
    }
    /**
     * Get fields value
     * @return \Colissimo\StructType\TypeFields|null
     */
    public function getFields()
    {
        return $this->fields;
    }
    /**
     * Set fields value
     * @param \Colissimo\StructType\TypeFields $fields
     * @return \Colissimo\StructType\GenerateLabelRequest
     */
    public function setFields(\Colissimo\StructType\TypeFields $fields = null)
    {
        $this->fields = $fields;
        return $this;
    }
}
