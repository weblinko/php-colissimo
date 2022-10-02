<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for swissLabel StructType
 * @subpackage Structs
 */
class SwissLabel extends AbstractStructBase
{
    /**
     * The injectionSite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $injectionSite;
    /**
     * The signatureOption
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $signatureOption;
    /**
     * The codeSwissPost
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codeSwissPost;
    /**
     * The swissParcelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $swissParcelNumber;
    /**
     * Constructor method for swissLabel
     * @uses SwissLabel::setInjectionSite()
     * @uses SwissLabel::setSignatureOption()
     * @uses SwissLabel::setCodeSwissPost()
     * @uses SwissLabel::setSwissParcelNumber()
     * @param string $injectionSite
     * @param bool $signatureOption
     * @param string $codeSwissPost
     * @param string $swissParcelNumber
     */
    public function __construct($injectionSite = null, $signatureOption = null, $codeSwissPost = null, $swissParcelNumber = null)
    {
        $this
            ->setInjectionSite($injectionSite)
            ->setSignatureOption($signatureOption)
            ->setCodeSwissPost($codeSwissPost)
            ->setSwissParcelNumber($swissParcelNumber);
    }
    /**
     * Get injectionSite value
     * @return string|null
     */
    public function getInjectionSite()
    {
        return $this->injectionSite;
    }
    /**
     * Set injectionSite value
     * @param string $injectionSite
     * @return \Colissimo\StructType\SwissLabel
     */
    public function setInjectionSite($injectionSite = null)
    {
        // validation for constraint: string
        if (!is_null($injectionSite) && !is_string($injectionSite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($injectionSite, true), gettype($injectionSite)), __LINE__);
        }
        $this->injectionSite = $injectionSite;
        return $this;
    }
    /**
     * Get signatureOption value
     * @return bool|null
     */
    public function getSignatureOption()
    {
        return $this->signatureOption;
    }
    /**
     * Set signatureOption value
     * @param bool $signatureOption
     * @return \Colissimo\StructType\SwissLabel
     */
    public function setSignatureOption($signatureOption = null)
    {
        // validation for constraint: boolean
        if (!is_null($signatureOption) && !is_bool($signatureOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($signatureOption, true), gettype($signatureOption)), __LINE__);
        }
        $this->signatureOption = $signatureOption;
        return $this;
    }
    /**
     * Get codeSwissPost value
     * @return string|null
     */
    public function getCodeSwissPost()
    {
        return $this->codeSwissPost;
    }
    /**
     * Set codeSwissPost value
     * @param string $codeSwissPost
     * @return \Colissimo\StructType\SwissLabel
     */
    public function setCodeSwissPost($codeSwissPost = null)
    {
        // validation for constraint: string
        if (!is_null($codeSwissPost) && !is_string($codeSwissPost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeSwissPost, true), gettype($codeSwissPost)), __LINE__);
        }
        $this->codeSwissPost = $codeSwissPost;
        return $this;
    }
    /**
     * Get swissParcelNumber value
     * @return string|null
     */
    public function getSwissParcelNumber()
    {
        return $this->swissParcelNumber;
    }
    /**
     * Set swissParcelNumber value
     * @param string $swissParcelNumber
     * @return \Colissimo\StructType\SwissLabel
     */
    public function setSwissParcelNumber($swissParcelNumber = null)
    {
        // validation for constraint: string
        if (!is_null($swissParcelNumber) && !is_string($swissParcelNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($swissParcelNumber, true), gettype($swissParcelNumber)), __LINE__);
        }
        $this->swissParcelNumber = $swissParcelNumber;
        return $this;
    }
}
