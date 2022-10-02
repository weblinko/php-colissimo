<?php

namespace Colissimo\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getListMailBoxPickingDates
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Colissimo\StructType\GetListMailBoxPickingDates $parameters
     * @return \Colissimo\StructType\GetListMailBoxPickingDatesResponse|bool
     */
    public function getListMailBoxPickingDates(\Colissimo\StructType\GetListMailBoxPickingDates $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getListMailBoxPickingDates($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProductInter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Colissimo\StructType\GetProductInter $parameters
     * @return \Colissimo\StructType\GetProductInterResponse|bool
     */
    public function getProductInter(\Colissimo\StructType\GetProductInter $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getProductInter($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBordereauByNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Colissimo\StructType\GetBordereauByNumber $parameters
     * @return \Colissimo\StructType\GetBordereauByNumberResponse|bool
     */
    public function getBordereauByNumber(\Colissimo\StructType\GetBordereauByNumber $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getBordereauByNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Colissimo\StructType\GetBordereauByNumberResponse|\Colissimo\StructType\GetListMailBoxPickingDatesResponse|\Colissimo\StructType\GetProductInterResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
