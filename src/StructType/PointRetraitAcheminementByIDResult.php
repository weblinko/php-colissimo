<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pointRetraitAcheminementByIDResult StructType
 * @subpackage Structs
 */
class PointRetraitAcheminementByIDResult extends AbstractStructBase
{
    /**
     * The errorCode
     * @var int
     */
    public $errorCode;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $errorMessage;
    /**
     * The pointRetraitAcheminement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\PointRetraitAcheminement
     */
    public $pointRetraitAcheminement;
    /**
     * Constructor method for pointRetraitAcheminementByIDResult
     * @uses PointRetraitAcheminementByIDResult::setErrorCode()
     * @uses PointRetraitAcheminementByIDResult::setErrorMessage()
     * @uses PointRetraitAcheminementByIDResult::setPointRetraitAcheminement()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \Colissimo\StructType\PointRetraitAcheminement $pointRetraitAcheminement
     */
    public function __construct($errorCode = null, $errorMessage = null, \Colissimo\StructType\PointRetraitAcheminement $pointRetraitAcheminement = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setPointRetraitAcheminement($pointRetraitAcheminement);
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \Colissimo\StructType\PointRetraitAcheminementByIDResult
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \Colissimo\StructType\PointRetraitAcheminementByIDResult
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        return $this;
    }
    /**
     * Get pointRetraitAcheminement value
     * @return \Colissimo\StructType\PointRetraitAcheminement|null
     */
    public function getPointRetraitAcheminement()
    {
        return $this->pointRetraitAcheminement;
    }
    /**
     * Set pointRetraitAcheminement value
     * @param \Colissimo\StructType\PointRetraitAcheminement $pointRetraitAcheminement
     * @return \Colissimo\StructType\PointRetraitAcheminementByIDResult
     */
    public function setPointRetraitAcheminement(\Colissimo\StructType\PointRetraitAcheminement $pointRetraitAcheminement = null)
    {
        $this->pointRetraitAcheminement = $pointRetraitAcheminement;
        return $this;
    }
}
