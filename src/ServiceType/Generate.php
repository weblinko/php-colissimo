<?php

namespace Colissimo\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Generate ServiceType
 * @subpackage Services
 */
class Generate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named generateLabel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Colissimo\StructType\GenerateLabel $parameters
     * @return \Colissimo\StructType\GenerateLabelResponse|bool
     */
    public function generateLabel(\Colissimo\StructType\GenerateLabel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->generateLabel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateBordereauByParcelsNumbers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Colissimo\StructType\GenerateBordereauByParcelsNumbers $parameters
     * @return \Colissimo\StructType\GenerateBordereauByParcelsNumbersResponse|bool
     */
    public function generateBordereauByParcelsNumbers(\Colissimo\StructType\GenerateBordereauByParcelsNumbers $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->generateBordereauByParcelsNumbers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateCN23
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Colissimo\StructType\GenerateCN23 $parameters
     * @return \Colissimo\StructType\GenerateCN23Response|bool
     */
    public function generateCN23(\Colissimo\StructType\GenerateCN23 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->generateCN23($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Colissimo\StructType\GenerateBordereauByParcelsNumbersResponse|\Colissimo\StructType\GenerateCN23Response|\Colissimo\StructType\GenerateLabelResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
