<?php

namespace Colissimo\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Plan ServiceType
 * @subpackage Services
 */
class Plan extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named planPickup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Colissimo\StructType\PlanPickup $parameters
     * @return \Colissimo\StructType\PlanPickupResponse|bool
     */
    public function planPickup(\Colissimo\StructType\PlanPickup $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->planPickup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Colissimo\StructType\PlanPickupResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
