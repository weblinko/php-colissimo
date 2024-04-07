<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeFields StructType
 * @subpackage Structs
 */
class TypeFields extends AbstractStructBase
{
    /**
     * The field
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Colissimo\StructType\Field[]
     */
    public $field;
    /**
     * Constructor method for typeFields
     * @uses TypeFields::setField()
     * @param \Colissimo\StructType\Field[] $field
     */
    public function __construct(array $field = array())
    {
        $this
            ->setField($field);
    }
    /**
     * Get field value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Colissimo\StructType\Field[]|null
     */
    public function getField()
    {
        return isset($this->field) ? $this->field : null;
    }
    /**
     * This method is responsible for validating the values passed to the setField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFieldForArrayConstraintsFromSetField(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeFieldsFieldItem) {
            // validation for constraint: itemType
            if (!$typeFieldsFieldItem instanceof \Colissimo\StructType\Field) {
                $invalidValues[] = is_object($typeFieldsFieldItem) ? get_class($typeFieldsFieldItem) : sprintf('%s(%s)', gettype($typeFieldsFieldItem), var_export($typeFieldsFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The field property can only contain items of type \Colissimo\StructType\Field, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set field value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Colissimo\StructType\Field[] $field
     * @return \Colissimo\StructType\TypeFields
     */
    public function setField(array $field = array())
    {
        // validation for constraint: array
        if ('' !== ($fieldArrayErrorMessage = self::validateFieldForArrayConstraintsFromSetField($field))) {
            throw new \InvalidArgumentException($fieldArrayErrorMessage, __LINE__);
        }
        if (is_null($field) || (is_array($field) && empty($field))) {
            unset($this->field);
        } else {
            $this->field = $field;
        }
        return $this;
    }
    /**
     * Add item to field value
     * @throws \InvalidArgumentException
     * @param \Colissimo\StructType\Field $item
     * @return \Colissimo\StructType\TypeFields
     */
    public function addToField(\Colissimo\StructType\Field $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Colissimo\StructType\Field) {
            throw new \InvalidArgumentException(sprintf('The field property can only contain items of type \Colissimo\StructType\Field, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->field[] = $item;
        return $this;
    }
}
