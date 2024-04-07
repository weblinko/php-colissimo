<?php

namespace Colissimo\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named findRDVPointRetraitAcheminement
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Colissimo\StructType\FindRDVPointRetraitAcheminement $parameters
     * @return \Colissimo\StructType\FindRDVPointRetraitAcheminementResponse|bool
     */
    public function findRDVPointRetraitAcheminement(\Colissimo\StructType\FindRDVPointRetraitAcheminement $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->findRDVPointRetraitAcheminement($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * findRDVPointRetraitAcheminementByToken
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Colissimo\StructType\FindRDVPointRetraitAcheminementByToken $parameters
     * @return \Colissimo\StructType\FindRDVPointRetraitAcheminementByTokenResponse|bool
     */
    public function findRDVPointRetraitAcheminementByToken(\Colissimo\StructType\FindRDVPointRetraitAcheminementByToken $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->findRDVPointRetraitAcheminementByToken($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named findPointRetraitAcheminementByID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Colissimo\StructType\FindPointRetraitAcheminementByID $parameters
     * @return \Colissimo\StructType\FindPointRetraitAcheminementByIDResponse|bool
     */
    public function findPointRetraitAcheminementByID(\Colissimo\StructType\FindPointRetraitAcheminementByID $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->findPointRetraitAcheminementByID($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Colissimo\StructType\FindPointRetraitAcheminementByIDResponse|\Colissimo\StructType\FindRDVPointRetraitAcheminementByTokenResponse|\Colissimo\StructType\FindRDVPointRetraitAcheminementResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
