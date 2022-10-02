<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for letter StructType
 * @subpackage Structs
 */
class Letter extends AbstractStructBase
{
    /**
     * The service
     * @var \Colissimo\StructType\Service
     */
    public $service;
    /**
     * The parcel
     * @var \Colissimo\StructType\Parcel
     */
    public $parcel;
    /**
     * The customsDeclarations
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\CustomsDeclarations
     */
    public $customsDeclarations;
    /**
     * The sender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\Sender
     */
    public $sender;
    /**
     * The addressee
     * @var \Colissimo\StructType\Addressee
     */
    public $addressee;
    /**
     * The codSenderAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\CodSenderAddress
     */
    public $codSenderAddress;
    /**
     * The uploadDocument
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Colissimo\StructType\UploadDocument
     */
    public $uploadDocument;
    /**
     * Constructor method for letter
     * @uses Letter::setService()
     * @uses Letter::setParcel()
     * @uses Letter::setCustomsDeclarations()
     * @uses Letter::setSender()
     * @uses Letter::setAddressee()
     * @uses Letter::setCodSenderAddress()
     * @uses Letter::setUploadDocument()
     * @param \Colissimo\StructType\Service $service
     * @param \Colissimo\StructType\Parcel $parcel
     * @param \Colissimo\StructType\CustomsDeclarations $customsDeclarations
     * @param \Colissimo\StructType\Sender $sender
     * @param \Colissimo\StructType\Addressee $addressee
     * @param \Colissimo\StructType\CodSenderAddress $codSenderAddress
     * @param \Colissimo\StructType\UploadDocument $uploadDocument
     */
    public function __construct(\Colissimo\StructType\Service $service = null, \Colissimo\StructType\Parcel $parcel = null, \Colissimo\StructType\CustomsDeclarations $customsDeclarations = null, \Colissimo\StructType\Sender $sender = null, \Colissimo\StructType\Addressee $addressee = null, \Colissimo\StructType\CodSenderAddress $codSenderAddress = null, \Colissimo\StructType\UploadDocument $uploadDocument = null)
    {
        $this
            ->setService($service)
            ->setParcel($parcel)
            ->setCustomsDeclarations($customsDeclarations)
            ->setSender($sender)
            ->setAddressee($addressee)
            ->setCodSenderAddress($codSenderAddress)
            ->setUploadDocument($uploadDocument);
    }
    /**
     * Get service value
     * @return \Colissimo\StructType\Service|null
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param \Colissimo\StructType\Service $service
     * @return \Colissimo\StructType\Letter
     */
    public function setService(\Colissimo\StructType\Service $service = null)
    {
        $this->service = $service;
        return $this;
    }
    /**
     * Get parcel value
     * @return \Colissimo\StructType\Parcel|null
     */
    public function getParcel()
    {
        return $this->parcel;
    }
    /**
     * Set parcel value
     * @param \Colissimo\StructType\Parcel $parcel
     * @return \Colissimo\StructType\Letter
     */
    public function setParcel(\Colissimo\StructType\Parcel $parcel = null)
    {
        $this->parcel = $parcel;
        return $this;
    }
    /**
     * Get customsDeclarations value
     * @return \Colissimo\StructType\CustomsDeclarations|null
     */
    public function getCustomsDeclarations()
    {
        return $this->customsDeclarations;
    }
    /**
     * Set customsDeclarations value
     * @param \Colissimo\StructType\CustomsDeclarations $customsDeclarations
     * @return \Colissimo\StructType\Letter
     */
    public function setCustomsDeclarations(\Colissimo\StructType\CustomsDeclarations $customsDeclarations = null)
    {
        $this->customsDeclarations = $customsDeclarations;
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
     * @return \Colissimo\StructType\Letter
     */
    public function setSender(\Colissimo\StructType\Sender $sender = null)
    {
        $this->sender = $sender;
        return $this;
    }
    /**
     * Get addressee value
     * @return \Colissimo\StructType\Addressee|null
     */
    public function getAddressee()
    {
        return $this->addressee;
    }
    /**
     * Set addressee value
     * @param \Colissimo\StructType\Addressee $addressee
     * @return \Colissimo\StructType\Letter
     */
    public function setAddressee(\Colissimo\StructType\Addressee $addressee = null)
    {
        $this->addressee = $addressee;
        return $this;
    }
    /**
     * Get codSenderAddress value
     * @return \Colissimo\StructType\CodSenderAddress|null
     */
    public function getCodSenderAddress()
    {
        return $this->codSenderAddress;
    }
    /**
     * Set codSenderAddress value
     * @param \Colissimo\StructType\CodSenderAddress $codSenderAddress
     * @return \Colissimo\StructType\Letter
     */
    public function setCodSenderAddress(\Colissimo\StructType\CodSenderAddress $codSenderAddress = null)
    {
        $this->codSenderAddress = $codSenderAddress;
        return $this;
    }
    /**
     * Get uploadDocument value
     * @return \Colissimo\StructType\UploadDocument|null
     */
    public function getUploadDocument()
    {
        return $this->uploadDocument;
    }
    /**
     * Set uploadDocument value
     * @param \Colissimo\StructType\UploadDocument $uploadDocument
     * @return \Colissimo\StructType\Letter
     */
    public function setUploadDocument(\Colissimo\StructType\UploadDocument $uploadDocument = null)
    {
        $this->uploadDocument = $uploadDocument;
        return $this;
    }
}
