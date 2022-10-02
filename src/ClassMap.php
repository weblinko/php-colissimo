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
            'CheckGenerateLabelRequestType' => '\\Colissimo\\StructType\\CheckGenerateLabelRequestType',
            'outputFormat' => '\\Colissimo\\StructType\\OutputFormat',
            'letter' => '\\Colissimo\\StructType\\Letter',
            'service' => '\\Colissimo\\StructType\\Service',
            'parcel' => '\\Colissimo\\StructType\\Parcel',
            'customsDeclarations' => '\\Colissimo\\StructType\\CustomsDeclarations',
            'contents' => '\\Colissimo\\StructType\\Contents',
            'article' => '\\Colissimo\\StructType\\Article',
            'category' => '\\Colissimo\\StructType\\Category',
            'original' => '\\Colissimo\\StructType\\Original',
            'importerAddress' => '\\Colissimo\\StructType\\ImporterAddress',
            'sender' => '\\Colissimo\\StructType\\Sender',
            'address' => '\\Colissimo\\StructType\\Address',
            'addressee' => '\\Colissimo\\StructType\\Addressee',
            'codSenderAddress' => '\\Colissimo\\StructType\\CodSenderAddress',
            'uploadDocument' => '\\Colissimo\\StructType\\UploadDocument',
            'fields' => '\\Colissimo\\StructType\\Fields',
            'field' => '\\Colissimo\\StructType\\Field',
            'GenerateCN23RequestType' => '\\Colissimo\\StructType\\GenerateCN23RequestType',
            'GenerateLabelRequestType' => '\\Colissimo\\StructType\\GenerateLabelRequestType',
            'GetListMailBoxPickingDatesRetourRequestType' => '\\Colissimo\\StructType\\GetListMailBoxPickingDatesRetourRequestType',
            'GetProductInterRequestType' => '\\Colissimo\\StructType\\GetProductInterRequestType',
            'planPickupRequestType' => '\\Colissimo\\StructType\\PlanPickupRequestType',
            'getListMailBoxPickingDates' => '\\Colissimo\\StructType\\GetListMailBoxPickingDates',
            'getListMailBoxPickingDatesRetourRequest' => '\\Colissimo\\StructType\\GetListMailBoxPickingDatesRetourRequest',
            'getListMailBoxPickingDatesResponse' => '\\Colissimo\\StructType\\GetListMailBoxPickingDatesResponse',
            'GetListMailBoxPickingDatesResponseType' => '\\Colissimo\\StructType\\GetListMailBoxPickingDatesResponseType',
            'baseResponse' => '\\Colissimo\\StructType\\BaseResponse',
            'Message' => '\\Colissimo\\StructType\\Message',
            'generateLabel' => '\\Colissimo\\StructType\\GenerateLabel',
            'generateLabelRequest' => '\\Colissimo\\StructType\\GenerateLabelRequest',
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
            'planPickupResponse' => '\\Colissimo\\StructType\\PlanPickupResponse',
            'planPickupResponseType' => '\\Colissimo\\StructType\\PlanPickupResponseType',
            'checkGenerateLabel' => '\\Colissimo\\StructType\\CheckGenerateLabel',
            'checkGenerateLabelRequest' => '\\Colissimo\\StructType\\CheckGenerateLabelRequest',
            'checkGenerateLabelResponse' => '\\Colissimo\\StructType\\CheckGenerateLabelResponse',
            'CheckGenerateLabelResponseType' => '\\Colissimo\\StructType\\CheckGenerateLabelResponseType',
            'getProductInter' => '\\Colissimo\\StructType\\GetProductInter',
            'getProductInterRequest' => '\\Colissimo\\StructType\\GetProductInterRequest',
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
            'track' => '\\Colissimo\\StructType\\Track',
            'trackResponse' => '\\Colissimo\\StructType\\TrackResponse',
            'skybillInformationResult' => '\\Colissimo\\StructType\\SkybillInformationResult',
        );
    }
}
