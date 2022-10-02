<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductInterResponseType StructType
 * @subpackage Structs
 */
class GetProductInterResponseType extends BaseResponse
{
    /**
     * The product
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $product;
    /**
     * The partnerType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $partnerType;
    /**
     * The returnTypeChoice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $returnTypeChoice;
    /**
     * Constructor method for GetProductInterResponseType
     * @uses GetProductInterResponseType::setProduct()
     * @uses GetProductInterResponseType::setPartnerType()
     * @uses GetProductInterResponseType::setReturnTypeChoice()
     * @param string[] $product
     * @param string $partnerType
     * @param string[] $returnTypeChoice
     */
    public function __construct(array $product = array(), $partnerType = null, array $returnTypeChoice = array())
    {
        $this
            ->setProduct($product)
            ->setPartnerType($partnerType)
            ->setReturnTypeChoice($returnTypeChoice);
    }
    /**
     * Get product value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getProduct()
    {
        return isset($this->product) ? $this->product : null;
    }
    /**
     * This method is responsible for validating the values passed to the setProduct method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProduct method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductForArrayConstraintsFromSetProduct(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getProductInterResponseTypeProductItem) {
            // validation for constraint: itemType
            if (!is_string($getProductInterResponseTypeProductItem)) {
                $invalidValues[] = is_object($getProductInterResponseTypeProductItem) ? get_class($getProductInterResponseTypeProductItem) : sprintf('%s(%s)', gettype($getProductInterResponseTypeProductItem), var_export($getProductInterResponseTypeProductItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The product property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set product value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $product
     * @return \Colissimo\StructType\GetProductInterResponseType
     */
    public function setProduct(array $product = array())
    {
        // validation for constraint: array
        if ('' !== ($productArrayErrorMessage = self::validateProductForArrayConstraintsFromSetProduct($product))) {
            throw new \InvalidArgumentException($productArrayErrorMessage, __LINE__);
        }
        if (is_null($product) || (is_array($product) && empty($product))) {
            unset($this->product);
        } else {
            $this->product = $product;
        }
        return $this;
    }
    /**
     * Add item to product value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Colissimo\StructType\GetProductInterResponseType
     */
    public function addToProduct($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The product property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->product[] = $item;
        return $this;
    }
    /**
     * Get partnerType value
     * @return string|null
     */
    public function getPartnerType()
    {
        return $this->partnerType;
    }
    /**
     * Set partnerType value
     * @param string $partnerType
     * @return \Colissimo\StructType\GetProductInterResponseType
     */
    public function setPartnerType($partnerType = null)
    {
        // validation for constraint: string
        if (!is_null($partnerType) && !is_string($partnerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerType, true), gettype($partnerType)), __LINE__);
        }
        $this->partnerType = $partnerType;
        return $this;
    }
    /**
     * Get returnTypeChoice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getReturnTypeChoice()
    {
        return isset($this->returnTypeChoice) ? $this->returnTypeChoice : null;
    }
    /**
     * This method is responsible for validating the values passed to the setReturnTypeChoice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReturnTypeChoice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReturnTypeChoiceForArrayConstraintsFromSetReturnTypeChoice(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getProductInterResponseTypeReturnTypeChoiceItem) {
            // validation for constraint: itemType
            if (!is_string($getProductInterResponseTypeReturnTypeChoiceItem)) {
                $invalidValues[] = is_object($getProductInterResponseTypeReturnTypeChoiceItem) ? get_class($getProductInterResponseTypeReturnTypeChoiceItem) : sprintf('%s(%s)', gettype($getProductInterResponseTypeReturnTypeChoiceItem), var_export($getProductInterResponseTypeReturnTypeChoiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The returnTypeChoice property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set returnTypeChoice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $returnTypeChoice
     * @return \Colissimo\StructType\GetProductInterResponseType
     */
    public function setReturnTypeChoice(array $returnTypeChoice = array())
    {
        // validation for constraint: array
        if ('' !== ($returnTypeChoiceArrayErrorMessage = self::validateReturnTypeChoiceForArrayConstraintsFromSetReturnTypeChoice($returnTypeChoice))) {
            throw new \InvalidArgumentException($returnTypeChoiceArrayErrorMessage, __LINE__);
        }
        if (is_null($returnTypeChoice) || (is_array($returnTypeChoice) && empty($returnTypeChoice))) {
            unset($this->returnTypeChoice);
        } else {
            $this->returnTypeChoice = $returnTypeChoice;
        }
        return $this;
    }
    /**
     * Add item to returnTypeChoice value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Colissimo\StructType\GetProductInterResponseType
     */
    public function addToReturnTypeChoice($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The returnTypeChoice property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->returnTypeChoice[] = $item;
        return $this;
    }
}
