<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for baseResponse StructType
 * @subpackage Structs
 */
abstract class BaseResponse extends AbstractStructBase
{
    /**
     * The messages
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Colissimo\StructType\Message[]
     */
    public $messages;
    /**
     * Constructor method for baseResponse
     * @uses BaseResponse::setMessages()
     * @param \Colissimo\StructType\Message[] $messages
     */
    public function __construct(array $messages = array())
    {
        $this
            ->setMessages($messages);
    }
    /**
     * Get messages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Colissimo\StructType\Message[]|null
     */
    public function getMessages()
    {
        return isset($this->messages) ? $this->messages : null;
    }
    /**
     * This method is responsible for validating the values passed to the setMessages method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessages method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessagesForArrayConstraintsFromSetMessages(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseResponseMessagesItem) {
            // validation for constraint: itemType
            if (!$baseResponseMessagesItem instanceof \Colissimo\StructType\Message) {
                $invalidValues[] = is_object($baseResponseMessagesItem) ? get_class($baseResponseMessagesItem) : sprintf('%s(%s)', gettype($baseResponseMessagesItem), var_export($baseResponseMessagesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The messages property can only contain items of type \Colissimo\StructType\Message, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set messages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Colissimo\StructType\Message[] $messages
     * @return \Colissimo\StructType\BaseResponse
     */
    public function setMessages(array $messages = array())
    {
        // validation for constraint: array
        if ('' !== ($messagesArrayErrorMessage = self::validateMessagesForArrayConstraintsFromSetMessages($messages))) {
            throw new \InvalidArgumentException($messagesArrayErrorMessage, __LINE__);
        }
        if (is_null($messages) || (is_array($messages) && empty($messages))) {
            unset($this->messages);
        } else {
            $this->messages = $messages;
        }
        return $this;
    }
    /**
     * Add item to messages value
     * @throws \InvalidArgumentException
     * @param \Colissimo\StructType\Message $item
     * @return \Colissimo\StructType\BaseResponse
     */
    public function addToMessages(\Colissimo\StructType\Message $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Colissimo\StructType\Message) {
            throw new \InvalidArgumentException(sprintf('The messages property can only contain items of type \Colissimo\StructType\Message, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->messages[] = $item;
        return $this;
    }
}
