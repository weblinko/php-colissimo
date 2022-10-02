<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListMailBoxPickingDatesRetourRequest StructType
 * @subpackage Structs
 */
class GetListMailBoxPickingDatesRetourRequest extends AbstractStructBase
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
     * The sender
     * @var \Colissimo\StructType\Sender
     */
    public $sender;
    /**
     * Constructor method for getListMailBoxPickingDatesRetourRequest
     * @uses GetListMailBoxPickingDatesRetourRequest::setContractNumber()
     * @uses GetListMailBoxPickingDatesRetourRequest::setPassword()
     * @uses GetListMailBoxPickingDatesRetourRequest::setSender()
     * @param string $contractNumber
     * @param string $password
     * @param \Colissimo\StructType\Sender $sender
     */
    public function __construct($contractNumber = null, $password = null, \Colissimo\StructType\Sender $sender = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
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
     * @return \Colissimo\StructType\GetListMailBoxPickingDatesRetourRequest
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
     * @return \Colissimo\StructType\GetListMailBoxPickingDatesRetourRequest
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
     * @return \Colissimo\StructType\GetListMailBoxPickingDatesRetourRequest
     */
    public function setSender(\Colissimo\StructType\Sender $sender = null)
    {
        $this->sender = $sender;
        return $this;
    }
}
