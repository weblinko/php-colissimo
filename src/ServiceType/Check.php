<?php

namespace Colissimo\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Check ServiceType
 * @subpackage Services
 */
class Check extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named checkGenerateLabel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Colissimo\StructType\CheckGenerateLabel $parameters
     * @return \Colissimo\StructType\CheckGenerateLabelResponse|bool
     */
    public function checkGenerateLabel(\Colissimo\StructType\CheckGenerateLabel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->checkGenerateLabel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Colissimo\StructType\CheckGenerateLabelResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
