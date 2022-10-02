<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for uploadDocument StructType
 * @subpackage Structs
 */
class UploadDocument extends AbstractStructBase
{
    /**
     * The documentContent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $documentContent;
    /**
     * Constructor method for uploadDocument
     * @uses UploadDocument::setDocumentContent()
     * @param string $documentContent
     */
    public function __construct($documentContent = null)
    {
        $this
            ->setDocumentContent($documentContent);
    }
    /**
     * Get documentContent value
     * @return string|null
     */
    public function getDocumentContent()
    {
        return $this->documentContent;
    }
    /**
     * Set documentContent value
     * @param string $documentContent
     * @return \Colissimo\StructType\UploadDocument
     */
    public function setDocumentContent($documentContent = null)
    {
        // validation for constraint: string
        if (!is_null($documentContent) && !is_string($documentContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentContent, true), gettype($documentContent)), __LINE__);
        }
        $this->documentContent = $documentContent;
        return $this;
    }
}
