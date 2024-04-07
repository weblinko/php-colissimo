<?php

namespace Colissimo;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'getListMailBoxPickingDates' => '\\Colissimo\\StructType\\GetListMailBoxPickingDates',
            'GetListMailBoxPickingDatesRetourRequest' => '\\Colissimo\\StructType\\GetListMailBoxPickingDatesRetourRequest',
            'sender' => '\\Colissimo\\StructType\\Sender',
            'getListMailBoxPickingDatesResponse' => '\\Colissimo\\StructType\\GetListMailBoxPickingDatesResponse',
            'GetListMailBoxPickingDatesResponseType' => '\\Colissimo\\StructType\\GetListMailBoxPickingDatesResponseType',
            'baseResponse' => '\\Colissimo\\StructType\\BaseResponse',
            'message' => '\\Colissimo\\StructType\\Message',
            'generateLabel' => '\\Colissimo\\StructType\\GenerateLabel',
            'generateLabelRequest' => '\\Colissimo\\StructType\\GenerateLabelRequest',
            'typeOutputFormat' => '\\Colissimo\\StructType\\TypeOutputFormat',
            'typeLetter' => '\\Colissimo\\StructType\\TypeLetter',
            'service' => '\\Colissimo\\StructType\\Service',
            'parcel' => '\\Colissimo\\StructType\\Parcel',
            'customsDeclarations' => '\\Colissimo\\StructType\\CustomsDeclarations',
            'contents' => '\\Colissimo\\StructType\\Contents',
            'article' => '\\Colissimo\\StructType\\Article',
            'category' => '\\Colissimo\\StructType\\Category',
            'original' => '\\Colissimo\\StructType\\Original',
            'address' => '\\Colissimo\\StructType\\Address',
            'addressee' => '\\Colissimo\\StructType\\Addressee',
            'uploadDocument' => '\\Colissimo\\StructType\\UploadDocument',
            'typeAdresse' => '\\Colissimo\\StructType\\TypeAdresse',
            'typeFields' => '\\Colissimo\\StructType\\TypeFields',
            'field' => '\\Colissimo\\StructType\\Field',
            'generateLabelResponse' => '\\Colissimo\\StructType\\GenerateLabelResponse',
            'GenerateLabelV2ResponseType' => '\\Colissimo\\StructType\\GenerateLabelV2ResponseType',
            'xmlV2Response' => '\\Colissimo\\StructType\\XmlV2Response',
            'xmlResponse' => '\\Colissimo\\StructType\\XmlResponse',
            'belgiumLabel' => '\\Colissimo\\StructType\\BelgiumLabel',
            'codeVAS' => '\\Colissimo\\StructType\\CodeVAS',
            'returnAddressBelgium' => '\\Colissimo\\StructType\\ReturnAddressBelgium',
            'elementVisual' => '\\Colissimo\\StructType\\ElementVisual',
            'pickupLocation' => '\\Colissimo\\StructType\\PickupLocation',
            'addressPickupLocation' => '\\Colissimo\\StructType\\AddressPickupLocation',
            'routing' => '\\Colissimo\\StructType\\Routing',
            'site' => '\\Colissimo\\StructType\\Site',
            'addressPCH' => '\\Colissimo\\StructType\\AddressPCH',
            'swissLabel' => '\\Colissimo\\StructType\\SwissLabel',
            'zoneRouting' => '\\Colissimo\\StructType\\ZoneRouting',
            'zoneCABRoutage' => '\\Colissimo\\StructType\\ZoneCABRoutage',
            'zoneInfosRoutage' => '\\Colissimo\\StructType\\ZoneInfosRoutage',
            'labelV2Response' => '\\Colissimo\\StructType\\LabelV2Response',
            'labelResponse' => '\\Colissimo\\StructType\\LabelResponse',
            'planPickup' => '\\Colissimo\\StructType\\PlanPickup',
            'planPickupRequest' => '\\Colissimo\\StructType\\PlanPickupRequest',
            'typePlanPickupSender' => '\\Colissimo\\StructType\\TypePlanPickupSender',
            'planPickupResponse' => '\\Colissimo\\StructType\\PlanPickupResponse',
            'planPickupResponseType' => '\\Colissimo\\StructType\\PlanPickupResponseType',
            'generateToken' => '\\Colissimo\\StructType\\GenerateToken',
            'generateTokenRequest' => '\\Colissimo\\StructType\\GenerateTokenRequest',
            'generateTokenResponse' => '\\Colissimo\\StructType\\GenerateTokenResponse',
            'GenerateTokenV2ResponseType' => '\\Colissimo\\StructType\\GenerateTokenV2ResponseType',
            'tokenV2Response' => '\\Colissimo\\StructType\\TokenV2Response',
            'tokenResponse' => '\\Colissimo\\StructType\\TokenResponse',
            'getLabel' => '\\Colissimo\\StructType\\GetLabel',
            'getLabelRequest' => '\\Colissimo\\StructType\\GetLabelRequest',
            'getLabelResponse' => '\\Colissimo\\StructType\\GetLabelResponse',
            'GetLabelResponseType' => '\\Colissimo\\StructType\\GetLabelResponseType',
            'checkGenerateLabel' => '\\Colissimo\\StructType\\CheckGenerateLabel',
            'checkGenerateLabelRequest' => '\\Colissimo\\StructType\\CheckGenerateLabelRequest',
            'checkGenerateLabelResponse' => '\\Colissimo\\StructType\\CheckGenerateLabelResponse',
            'CheckGenerateLabelResponseType' => '\\Colissimo\\StructType\\CheckGenerateLabelResponseType',
            'getProductInter' => '\\Colissimo\\StructType\\GetProductInter',
            'GetProductInterRequest' => '\\Colissimo\\StructType\\GetProductInterRequest',
            'getProductInterResponse' => '\\Colissimo\\StructType\\GetProductInterResponse',
            'GetProductInterResponseType' => '\\Colissimo\\StructType\\GetProductInterResponseType',
            'generateBordereauByParcelsNumbers' => '\\Colissimo\\StructType\\GenerateBordereauByParcelsNumbers',
            'generateBordereauParcelNumberList' => '\\Colissimo\\StructType\\GenerateBordereauParcelNumberList',
            'generateBordereauByParcelsNumbersResponse' => '\\Colissimo\\StructType\\GenerateBordereauByParcelsNumbersResponse',
            'bordereauResponse' => '\\Colissimo\\StructType\\BordereauResponse',
            'bordereau' => '\\Colissimo\\StructType\\Bordereau',
            'bordereauHeader' => '\\Colissimo\\StructType\\BordereauHeader',
            'generateCN23' => '\\Colissimo\\StructType\\GenerateCN23',
            'generateCN23Request' => '\\Colissimo\\StructType\\GenerateCN23Request',
            'generateCN23Response' => '\\Colissimo\\StructType\\GenerateCN23Response',
            'GenerateCN23V2ResponseType' => '\\Colissimo\\StructType\\GenerateCN23V2ResponseType',
            'getBordereauByNumber' => '\\Colissimo\\StructType\\GetBordereauByNumber',
            'getBordereauByNumberResponse' => '\\Colissimo\\StructType\\GetBordereauByNumberResponse',
            // Colissimo Pickup Point
            'PointRetrait' => '\\Colissimo\\StructType\\PointRetrait',
            'Conges' => '\\Colissimo\\StructType\\Conges',
            'findRDVPointRetraitAcheminement' => '\\Colissimo\\StructType\\FindRDVPointRetraitAcheminement',
            'findRDVPointRetraitAcheminementResponse' => '\\Colissimo\\StructType\\FindRDVPointRetraitAcheminementResponse',
            'rdvPointRetraitAcheminementResult' => '\\Colissimo\\StructType\\RdvPointRetraitAcheminementResult',
            'pointRetraitAcheminementResult' => '\\Colissimo\\StructType\\PointRetraitAcheminementResult',
            'pointRetraitAcheminement' => '\\Colissimo\\StructType\\PointRetraitAcheminement',
            'findRDVPointRetraitAcheminementByToken' => '\\Colissimo\\StructType\\FindRDVPointRetraitAcheminementByToken',
            'findRDVPointRetraitAcheminementByTokenResponse' => '\\Colissimo\\StructType\\FindRDVPointRetraitAcheminementByTokenResponse',
            'findPointRetraitAcheminementByID' => '\\Colissimo\\StructType\\FindPointRetraitAcheminementByID',
            'findPointRetraitAcheminementByIDResponse' => '\\Colissimo\\StructType\\FindPointRetraitAcheminementByIDResponse',
            'pointRetraitAcheminementByIDResult' => '\\Colissimo\\StructType\\PointRetraitAcheminementByIDResult',
            'Exception' => '\\Colissimo\\StructType\\Exception',
            // Colissimo Tracking
            'track' => '\\Colissimo\\StructType\\Track',
            'trackResponse' => '\\Colissimo\\StructType\\TrackResponse',
            'skybillInformationResult' => '\\Colissimo\\StructType\\SkybillInformationResult',
        );
    }
}
