<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.colissimo.fr/sls-ws/SlsServiceWS/2.0?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Colissimo 
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.colissimo.fr/sls-ws/SlsServiceWS/2.0?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Colissimo\ClassMap::get(),
);
/**
 * Samples for Get ServiceType
 */
$get = new \Colissimo\ServiceType\Get($options);
/**
 * Sample call for getListMailBoxPickingDates operation/method
 */
if ($get->getListMailBoxPickingDates(new \Colissimo\StructType\GetListMailBoxPickingDates()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLabel operation/method
 */
if ($get->getLabel(new \Colissimo\StructType\GetLabel()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getProductInter operation/method
 */
if ($get->getProductInter(new \Colissimo\StructType\GetProductInter()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBordereauByNumber operation/method
 */
if ($get->getBordereauByNumber(new \Colissimo\StructType\GetBordereauByNumber()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Generate ServiceType
 */
$generate = new \Colissimo\ServiceType\Generate($options);
/**
 * Sample call for generateLabel operation/method
 */
if ($generate->generateLabel(new \Colissimo\StructType\GenerateLabel()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/**
 * Sample call for generateToken operation/method
 */
if ($generate->generateToken(new \Colissimo\StructType\GenerateToken()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/**
 * Sample call for generateBordereauByParcelsNumbers operation/method
 */
if ($generate->generateBordereauByParcelsNumbers(new \Colissimo\StructType\GenerateBordereauByParcelsNumbers()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/**
 * Sample call for generateCN23 operation/method
 */
if ($generate->generateCN23(new \Colissimo\StructType\GenerateCN23()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/**
 * Samples for Plan ServiceType
 */
$plan = new \Colissimo\ServiceType\Plan($options);
/**
 * Sample call for planPickup operation/method
 */
if ($plan->planPickup(new \Colissimo\StructType\PlanPickup()) !== false) {
    print_r($plan->getResult());
} else {
    print_r($plan->getLastError());
}
/**
 * Samples for Check ServiceType
 */
$check = new \Colissimo\ServiceType\Check($options);
/**
 * Sample call for checkGenerateLabel operation/method
 */
if ($check->checkGenerateLabel(new \Colissimo\StructType\CheckGenerateLabel()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}

/**
 * Colissimo Pickup Point
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.colissimo.fr/pointretrait-ws-cxf/PointRetraitServiceWS/2.0?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \ColissimoPickupPoint\ClassMap::get(),
);
/**
 * Samples for Find ServiceType
 */
$find = new \ColissimoPickupPoint\ServiceType\Find($options);
/**
 * Sample call for findRDVPointRetraitAcheminement operation/method
 */
if ($find->findRDVPointRetraitAcheminement(new \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for findRDVPointRetraitAcheminementByToken operation/method
 */
if ($find->findRDVPointRetraitAcheminementByToken(new \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByToken()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for findPointRetraitAcheminementByID operation/method
 */
if ($find->findPointRetraitAcheminementByID(new \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByID()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}

/**
 * Colissimo Tracking 
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www.coliposte.fr/tracking-chargeur-cxf/TrackingServiceWS?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Colissimo\ClassMap::get(),
);
/**
 * Samples for Track ServiceType
 */
$track = new \Colissimo\ServiceType\Track($options);
/**
 * Sample call for track operation/method
 */
if ($track->track(new \Colissimo\StructType\Track()) !== false) {
    print_r($track->getResult());
} else {
    print_r($track->getLastError());
}
