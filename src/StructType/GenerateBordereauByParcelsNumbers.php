<?php

namespace Colissimo\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateBordereauByParcelsNumbers StructType
 * Meta information extracted from the WSDL
 * - type: tns:generateBordereauByParcelsNumbers
 * @subpackage Structs
 */
class GenerateBordereauByParcelsNumbers extends AbstractStructBase
{
    /**
     * The contractNumber
     * @var string
     */
    public $contractNumber;
    /**
     * The password
     * @var string
     */
    public $password;
    /**
     * The generateBordereauParcelNumberList
     * @var \Colissimo\StructType\GenerateBordereauParcelNumberList
     */
    public $generateBordereauParcelNumberList;
    /**
     * Constructor method for generateBordereauByParcelsNumbers
     * @uses GenerateBordereauByParcelsNumbers::setContractNumber()
     * @uses GenerateBordereauByParcelsNumbers::setPassword()
     * @uses GenerateBordereauByParcelsNumbers::setGenerateBordereauParcelNumberList()
     * @param string $contractNumber
     * @param string $password
     * @param \Colissimo\StructType\GenerateBordereauParcelNumberList $generateBordereauParcelNumberList
     */
    public function __construct($contractNumber = null, $password = null, \Colissimo\StructType\GenerateBordereauParcelNumberList $generateBordereauParcelNumberList = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
            ->setGenerateBordereauParcelNumberList($generateBordereauParcelNumberList);
    }
    /**
     * Get contractNumber value
     * @return string|null
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }
    /**
     * Set contractNumber value
     * @param string $contractNumber
     * @return \Colissimo\StructType\GenerateBordereauByParcelsNumbers
     */
    public function setContractNumber($contractNumber = null)
    {
        // validation for constraint: string
        if (!is_null($contractNumber) && !is_string($contractNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractNumber, true), gettype($contractNumber)), __LINE__);
        }
        $this->contractNumber = $contractNumber;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Colissimo\StructType\GenerateBordereauByParcelsNumbers
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get generateBordereauParcelNumberList value
     * @return \Colissimo\StructType\GenerateBordereauParcelNumberList|null
     */
    public function getGenerateBordereauParcelNumberList()
    {
        return $this->generateBordereauParcelNumberList;
    }
    /**
     * Set generateBordereauParcelNumberList value
     * @param \Colissimo\StructType\GenerateBordereauParcelNumberList $generateBordereauParcelNumberList
     * @return \Colissimo\StructType\GenerateBordereauByParcelsNumbers
     */
    public function setGenerateBordereauParcelNumberList(\Colissimo\StructType\GenerateBordereauParcelNumberList $generateBordereauParcelNumberList = null)
    {
        $this->generateBordereauParcelNumberList = $generateBordereauParcelNumberList;
        return $this;
    }
}
