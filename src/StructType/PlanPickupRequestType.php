<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for planPickupRequestType StructType
 * @subpackage Structs
 */
class PlanPickupRequestType extends AbstractStructBase
{
    /**
     * The contractNumber
     * @var string
     */
    public $contractNumber;
    /**
     * The password
     * @var string
     */
    public $password;
    /**
     * The parcelNumber
     * @var string
     */
    public $parcelNumber;
    /**
     * The mailBoxPickingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mailBoxPickingDate;
    /**
     * The sender
     * @var \Colissimo\StructType\Sender
     */
    public $sender;
    /**
     * Constructor method for planPickupRequestType
     * @uses PlanPickupRequestType::setContractNumber()
     * @uses PlanPickupRequestType::setPassword()
     * @uses PlanPickupRequestType::setParcelNumber()
     * @uses PlanPickupRequestType::setMailBoxPickingDate()
     * @uses PlanPickupRequestType::setSender()
     * @param string $contractNumber
     * @param string $password
     * @param string $parcelNumber
     * @param string $mailBoxPickingDate
     * @param \Colissimo\StructType\Sender $sender
     */
    public function __construct($contractNumber = null, $password = null, $parcelNumber = null, $mailBoxPickingDate = null, \Colissimo\StructType\Sender $sender = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
            ->setParcelNumber($parcelNumber)
            ->setMailBoxPickingDate($mailBoxPickingDate)
            ->setSender($sender);
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
     * @return \Colissimo\StructType\PlanPickupRequestType
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
     * @return \Colissimo\StructType\PlanPickupRequestType
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
     * Get parcelNumber value
     * @return string|null
     */
    public function getParcelNumber()
    {
        return $this->parcelNumber;
    }
    /**
     * Set parcelNumber value
     * @param string $parcelNumber
     * @return \Colissimo\StructType\PlanPickupRequestType
     */
    public function setParcelNumber($parcelNumber = null)
    {
        // validation for constraint: string
        if (!is_null($parcelNumber) && !is_string($parcelNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelNumber, true), gettype($parcelNumber)), __LINE__);
        }
        $this->parcelNumber = $parcelNumber;
        return $this;
    }
    /**
     * Get mailBoxPickingDate value
     * @return string|null
     */
    public function getMailBoxPickingDate()
    {
        return $this->mailBoxPickingDate;
    }
    /**
     * Set mailBoxPickingDate value
     * @param string $mailBoxPickingDate
     * @return \Colissimo\StructType\PlanPickupRequestType
     */
    public function setMailBoxPickingDate($mailBoxPickingDate = null)
    {
        // validation for constraint: string
        if (!is_null($mailBoxPickingDate) && !is_string($mailBoxPickingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailBoxPickingDate, true), gettype($mailBoxPickingDate)), __LINE__);
        }
        $this->mailBoxPickingDate = $mailBoxPickingDate;
        return $this;
    }
    /**
     * Get sender value
     * @return \Colissimo\StructType\Sender|null
     */
    public function getSender()
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param \Colissimo\StructType\Sender $sender
     * @return \Colissimo\StructType\PlanPickupRequestType
     */
    public function setSender(\Colissimo\StructType\Sender $sender = null)
    {
        $this->sender = $sender;
        return $this;
    }
}
