<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for outputFormat StructType
 * @subpackage Structs
 */
class OutputFormat extends AbstractStructBase
{
    /**
     * The x
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $x;
    /**
     * The y
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $y;
    /**
     * The outputPrintingType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $outputPrintingType;
    /**
     * The dematerialized
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $dematerialized;
    /**
     * The returnType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $returnType;
    /**
     * The printCODDocument
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $printCODDocument;
    /**
     * Constructor method for outputFormat
     * @uses OutputFormat::setX()
     * @uses OutputFormat::setY()
     * @uses OutputFormat::setOutputPrintingType()
     * @uses OutputFormat::setDematerialized()
     * @uses OutputFormat::setReturnType()
     * @uses OutputFormat::setPrintCODDocument()
     * @param int $x
     * @param int $y
     * @param string $outputPrintingType
     * @param bool $dematerialized
     * @param string $returnType
     * @param bool $printCODDocument
     */
    public function __construct($x = null, $y = null, $outputPrintingType = null, $dematerialized = null, $returnType = null, $printCODDocument = null)
    {
        $this
            ->setX($x)
            ->setY($y)
            ->setOutputPrintingType($outputPrintingType)
            ->setDematerialized($dematerialized)
            ->setReturnType($returnType)
            ->setPrintCODDocument($printCODDocument);
    }
    /**
     * Get x value
     * @return int|null
     */
    public function getX()
    {
        return $this->x;
    }
    /**
     * Set x value
     * @param int $x
     * @return \Colissimo\StructType\OutputFormat
     */
    public function setX($x = null)
    {
        // validation for constraint: int
        if (!is_null($x) && !(is_int($x) || ctype_digit($x))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($x, true), gettype($x)), __LINE__);
        }
        $this->x = $x;
        return $this;
    }
    /**
     * Get y value
     * @return int|null
     */
    public function getY()
    {
        return $this->y;
    }
    /**
     * Set y value
     * @param int $y
     * @return \Colissimo\StructType\OutputFormat
     */
    public function setY($y = null)
    {
        // validation for constraint: int
        if (!is_null($y) && !(is_int($y) || ctype_digit($y))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($y, true), gettype($y)), __LINE__);
        }
        $this->y = $y;
        return $this;
    }
    /**
     * Get outputPrintingType value
     * @return string|null
     */
    public function getOutputPrintingType()
    {
        return $this->outputPrintingType;
    }
    /**
     * Set outputPrintingType value
     * @param string $outputPrintingType
     * @return \Colissimo\StructType\OutputFormat
     */
    public function setOutputPrintingType($outputPrintingType = null)
    {
        // validation for constraint: string
        if (!is_null($outputPrintingType) && !is_string($outputPrintingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputPrintingType, true), gettype($outputPrintingType)), __LINE__);
        }
        $this->outputPrintingType = $outputPrintingType;
        return $this;
    }
    /**
     * Get dematerialized value
     * @return bool|null
     */
    public function getDematerialized()
    {
        return $this->dematerialized;
    }
    /**
     * Set dematerialized value
     * @param bool $dematerialized
     * @return \Colissimo\StructType\OutputFormat
     */
    public function setDematerialized($dematerialized = null)
    {
        // validation for constraint: boolean
        if (!is_null($dematerialized) && !is_bool($dematerialized)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dematerialized, true), gettype($dematerialized)), __LINE__);
        }
        $this->dematerialized = $dematerialized;
        return $this;
    }
    /**
     * Get returnType value
     * @return string|null
     */
    public function getReturnType()
    {
        return $this->returnType;
    }
    /**
     * Set returnType value
     * @param string $returnType
     * @return \Colissimo\StructType\OutputFormat
     */
    public function setReturnType($returnType = null)
    {
        // validation for constraint: string
        if (!is_null($returnType) && !is_string($returnType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnType, true), gettype($returnType)), __LINE__);
        }
        $this->returnType = $returnType;
        return $this;
    }
    /**
     * Get printCODDocument value
     * @return bool|null
     */
    public function getPrintCODDocument()
    {
        return $this->printCODDocument;
    }
    /**
     * Set printCODDocument value
     * @param bool $printCODDocument
     * @return \Colissimo\StructType\OutputFormat
     */
    public function setPrintCODDocument($printCODDocument = null)
    {
        // validation for constraint: boolean
        if (!is_null($printCODDocument) && !is_bool($printCODDocument)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printCODDocument, true), gettype($printCODDocument)), __LINE__);
        }
        $this->printCODDocument = $printCODDocument;
        return $this;
    }
}
