<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Message StructType
 * @subpackage Structs
 */
class Message extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * The messageContent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $messageContent;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $type;
    /**
     * Constructor method for Message
     * @uses Message::setId()
     * @uses Message::setMessageContent()
     * @uses Message::setType()
     * @param string $id
     * @param string $messageContent
     * @param string $type
     */
    public function __construct($id = null, $messageContent = null, $type = null)
    {
        $this
            ->setId($id)
            ->setMessageContent($messageContent)
            ->setType($type);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Colissimo\StructType\Message
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get messageContent value
     * @return string|null
     */
    public function getMessageContent()
    {
        return $this->messageContent;
    }
    /**
     * Set messageContent value
     * @param string $messageContent
     * @return \Colissimo\StructType\Message
     */
    public function setMessageContent($messageContent = null)
    {
        // validation for constraint: string
        if (!is_null($messageContent) && !is_string($messageContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageContent, true), gettype($messageContent)), __LINE__);
        }
        $this->messageContent = $messageContent;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Colissimo\StructType\Message
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
