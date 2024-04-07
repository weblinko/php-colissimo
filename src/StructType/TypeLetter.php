<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeLetter StructType
 * @subpackage Structs
 */
class TypeLetter extends AbstractStructBase
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
     * @var \Colissimo\StructType\TypeAdresse
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
     * Constructor method for typeLetter
     * @uses TypeLetter::setService()
     * @uses TypeLetter::setParcel()
     * @uses TypeLetter::setCustomsDeclarations()
     * @uses TypeLetter::setSender()
     * @uses TypeLetter::setAddressee()
     * @uses TypeLetter::setCodSenderAddress()
     * @uses TypeLetter::setUploadDocument()
     * @param \Colissimo\StructType\Service $service
     * @param \Colissimo\StructType\Parcel $parcel
     * @param \Colissimo\StructType\CustomsDeclarations $customsDeclarations
     * @param \Colissimo\StructType\Sender $sender
     * @param \Colissimo\StructType\Addressee $addressee
     * @param \Colissimo\StructType\TypeAdresse $codSenderAddress
     * @param \Colissimo\StructType\UploadDocument $uploadDocument
     */
    public function __construct(\Colissimo\StructType\Service $service = null, \Colissimo\StructType\Parcel $parcel = null, \Colissimo\StructType\CustomsDeclarations $customsDeclarations = null, \Colissimo\StructType\Sender $sender = null, \Colissimo\StructType\Addressee $addressee = null, \Colissimo\StructType\TypeAdresse $codSenderAddress = null, \Colissimo\StructType\UploadDocument $uploadDocument = null)
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
     * @return \Colissimo\StructType\TypeLetter
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
     * @return \Colissimo\StructType\TypeLetter
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
     * @return \Colissimo\StructType\TypeLetter
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
     * @return \Colissimo\StructType\TypeLetter
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
     * @return \Colissimo\StructType\TypeLetter
     */
    public function setAddressee(\Colissimo\StructType\Addressee $addressee = null)
    {
        $this->addressee = $addressee;
        return $this;
    }
    /**
     * Get codSenderAddress value
     * @return \Colissimo\StructType\TypeAdresse|null
     */
    public function getCodSenderAddress()
    {
        return $this->codSenderAddress;
    }
    /**
     * Set codSenderAddress value
     * @param \Colissimo\StructType\TypeAdresse $codSenderAddress
     * @return \Colissimo\StructType\TypeLetter
     */
    public function setCodSenderAddress(\Colissimo\StructType\TypeAdresse $codSenderAddress = null)
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
     * @return \Colissimo\StructType\TypeLetter
     */
    public function setUploadDocument(\Colissimo\StructType\UploadDocument $uploadDocument = null)
    {
        $this->uploadDocument = $uploadDocument;
        return $this;
    }
}
