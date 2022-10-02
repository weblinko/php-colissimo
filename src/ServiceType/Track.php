<?php

namespace Colissimo\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Track ServiceType
 * @subpackage Services
 */
class Track extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named track
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Colissimo\StructType\Track $parameters
     * @return \Colissimo\StructType\TrackResponse|bool
     */
    public function track(\Colissimo\StructType\Track $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->track($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Colissimo\StructType\TrackResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
