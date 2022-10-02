<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateBordereauParcelNumberList StructType
 * @subpackage Structs
 */
class GenerateBordereauParcelNumberList extends AbstractStructBase
{
    /**
     * The parcelsNumbers
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $parcelsNumbers;
    /**
     * Constructor method for generateBordereauParcelNumberList
     * @uses GenerateBordereauParcelNumberList::setParcelsNumbers()
     * @param string[] $parcelsNumbers
     */
    public function __construct(array $parcelsNumbers = array())
    {
        $this
            ->setParcelsNumbers($parcelsNumbers);
    }
    /**
     * Get parcelsNumbers value
     * @return string[]|null
     */
    public function getParcelsNumbers()
    {
        return $this->parcelsNumbers;
    }
    /**
     * This method is responsible for validating the values passed to the setParcelsNumbers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcelsNumbers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelsNumbersForArrayConstraintsFromSetParcelsNumbers(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $generateBordereauParcelNumberListParcelsNumbersItem) {
            // validation for constraint: itemType
            if (!is_string($generateBordereauParcelNumberListParcelsNumbersItem)) {
                $invalidValues[] = is_object($generateBordereauParcelNumberListParcelsNumbersItem) ? get_class($generateBordereauParcelNumberListParcelsNumbersItem) : sprintf('%s(%s)', gettype($generateBordereauParcelNumberListParcelsNumbersItem), var_export($generateBordereauParcelNumberListParcelsNumbersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The parcelsNumbers property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set parcelsNumbers value
     * @throws \InvalidArgumentException
     * @param string[] $parcelsNumbers
     * @return \Colissimo\StructType\GenerateBordereauParcelNumberList
     */
    public function setParcelsNumbers(array $parcelsNumbers = array())
    {
        // validation for constraint: array
        if ('' !== ($parcelsNumbersArrayErrorMessage = self::validateParcelsNumbersForArrayConstraintsFromSetParcelsNumbers($parcelsNumbers))) {
            throw new \InvalidArgumentException($parcelsNumbersArrayErrorMessage, __LINE__);
        }
        $this->parcelsNumbers = $parcelsNumbers;
        return $this;
    }
    /**
     * Add item to parcelsNumbers value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Colissimo\StructType\GenerateBordereauParcelNumberList
     */
    public function addToParcelsNumbers($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The parcelsNumbers property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->parcelsNumbers[] = $item;
        return $this;
    }
}
