<?php
/**
 * Composer autoload
 */
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Used classes
 */
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use Colissimo\ClassMap;
use Colissimo\ServiceType\Generate;
use Colissimo\StructType\GenerateLabelRequest;
use Colissimo\StructType\TypeOutputFormat;
use Colissimo\StructType\TypeLetter;
use Colissimo\StructType\GenerateLabel;
use Colissimo\StructType\Service;
use Colissimo\StructType\Parcel;
use Colissimo\StructType\Sender;
use Colissimo\StructType\TypeAdresse;
use Colissimo\StructType\Addressee;
use Colissimo\ServiceType\MTOM_ResponseReader

/**
 * Your Colissimo contract number
 */
define('COLISSIMO_WS_CONTRACT_NUMBER', '******');

/**
 * Your Colissimo password
 */
define('COLISSIMO_WS_PASSWORD', '************');

/**
 * Minimal options
 */
$options = array(
    AbstractSoapClientBase::WSDL_URL => 'https://ws.colissimo.fr/sls-ws/SlsServiceWS/2.0?wsdl',
    AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get()
);

/**
 * Example for Shipping ServiceType
 */
$generate = new Generate($options);


/**
 * Service
 */
$service = new Service();
$service
    ->setProductCode('DOM') // Code produit Colissimo
    ->setDepositDate(date('Y-m-d'))
    ->setTransportationAmount(null)
    ->setTotalAmount(null)
    ->setOrderNumber('#0000001')
    ->setCommercialName('Weblinko')
    ->setReturnTypeChoice(null);

/**
 * Parcel
 */
$parcel = new Parcel();
$parcel->setWeight('1.4'); // Poids en kilo



/**
 * Address : sender
 * expéditeur
 */
$senderAddress = new TypeAdresse();
$senderAddress
    ->setCompanyName('Weblinko') // Facultatif
    ->setLastName('Dupont')
    ->setFirstName('Martin')
    ->setLine2("Adresse principal de l'expéditeur")
    ->setLine3("Complément d'adresse de l'expéditeur")
    ->setCountryCode('FR')
    ->setCity('Paris')
    ->setZipCode('75001')
    ->setPhoneNumber('0102030405')
    ->setMobileNumber('0600000000')
    ->setEmail('dupond.martin@exemple.fr');

/**
 * Sender
 */
$sender = new Sender();
$sender
    ->setSenderParcelRef('#0000001')
    ->setAddress($senderAddress);


/**
 * Address : recipient
 * destinataire
 */
$recipientAddress = new TypeAdresse();
$recipientAddress
    ->setCompanyName(null) // Facultatif
    ->setLastName('Dupont')
    ->setFirstName('Martin')
    ->setLine2("Adresse principal du destinataire")
    ->setLine3("Complément d'adresse du destinataire")
    ->setCountryCode('FR')
    ->setCity('Paris')
    ->setZipCode('75001')
    ->setPhoneNumber('0102030405')
    ->setMobileNumber('0600000000')
    ->setEmail('dupond.martin@exemple.fr'); // Utilisé pour les notifications de suivi aux destinataires.

/**
 * Addressee
 */
$addressee = new Addressee();
$addressee
    ->setAddresseeParcelRef('#0000001')
    ->setAddress($recipientAddress);

/**
 * Letter
 */
$letter = new TypeLetter();
$letter->setService($service)
    ->setParcel($parcel)
    ->setCustomsDeclarations(null)
    ->setSender($sender)
    ->setAddressee($addressee);


/**
 * Formats Bordereaux
 * ZPL_10x15_203dpi
 * ZPL_10x15_300dpi
 * DPL_10x15_203dpi
 * DPL_10x15_300dpi
 * PDF_10x15_300dpi
 * PDF_A4_300dpi
 */
$outputFormat = new TypeOutputFormat();
$outputFormat
    ->setX(0)
    ->setY(0)
    ->setOutputPrintingType('ZPL_10x15_203dpi'); // Format de sortie pour le bordereau


/**
 * GenerateLabelRequest
 */
$generateLabelRequest = new GenerateLabelRequest();
$generateLabelRequest
    ->setContractNumber(COLISSIMO_WS_CONTRACT_NUMBER)
    ->setPassword(COLISSIMO_WS_PASSWORD)
    ->setOutputFormat($outputFormat)
    ->setLetter($letter);


/**
 * GenerateLabel
 */
$generateLabel = new GenerateLabel();
$generateLabel->setGenerateLabelRequest($generateLabelRequest);

/**
 * Generate
 */
$generate->generateLabel($generateLabel);


try {
    //+ Parse Web Service Response
    $parseResponse = new MTOM_ResponseReader($generate->getSoapClient()->__getLastResponse());
    //- Parse Web Service Response
} catch (Exception $e) {
    /**
     * Has Error
     * Debug des informations fournies par les méthodes utilitaires
     */
    echo 'XML Request: ' . $generate->getSoapClient()->__getLastRequest() . "\r\n";
    echo 'XML Response: ' . $generate->getSoapClient()->__getLastResponse() . "\r\n";

    throw new Exception("Une erreur s'est produite lors de l'affranchissement Colissimo");
}

//+ XML Response
$xmlResponse = $parseResponse->xmlResponse;
//- XML Response

//+ Object Response
$generatedLabelResponse = $parseResponse->objectResponse->soap_Body->ns2_generateLabelResponse;
$code = $generatedLabelResponse->return->messages->id;
$messageContent = $generatedLabelResponse->return->messages->messageContent;
$labelV2Response = $generatedLabelResponse->return->labelV2Response;
//- Object Response


//+ Error handling and label saving
if ($code == "0") {
    // Attachments
    $attachments = $parseResponse->attachments;

    //Save the CN23 form if generated
    if (sizeof($attachments) > 1) {
        $CN23_content = $attachments[1];
        $CN23_pdf_data = $CN23_content["data"];
        // Mon chemin pour enregistrer le document CN_23 sur le serveur
        $my_file_path_and_name = 'private/colissimo/pdf/0000001_CN23.pdf';
        file_put_contents($my_file_path_and_name, $CN23_pdf_data);
    }

    // Label
    $label_content = !empty($attachments[0]) ? mb_convert_encoding($attachments[0], 'UTF-8', 'ISO-8859-2') : null;
    $zpl_data = !empty($label_content["data"]) ? $label_content["data"] : null;

    if (!empty($zpl_data)) {
        // Mon chemin pour enregistrer l'étiquette sur le serveur
        $my_file_path_and_name = 'private/colissimo/label/0000001.zpl';
        file_put_contents($my_file_path_and_name, $zpl_data);
    }

    // Parcel Number
    $parcelNumber = $labelV2Response->parcelNumber;
}

