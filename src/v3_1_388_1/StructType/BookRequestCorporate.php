<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookRequestCorporate StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BookRequestCorporate
 * @subpackage Structs
 */
class BookRequestCorporate extends AbstractStructBase
{
    /**
     * The CorpFareAccessCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CorpFareAccessCode;
    /**
     * Constructor method for BookRequestCorporate
     * @uses BookRequestCorporate::setCorpFareAccessCode()
     * @param string $corpFareAccessCode
     */
    public function __construct($corpFareAccessCode = null)
    {
        $this
            ->setCorpFareAccessCode($corpFareAccessCode);
    }
    /**
     * Get CorpFareAccessCode value
     * @return string|null
     */
    public function getCorpFareAccessCode()
    {
        return $this->CorpFareAccessCode;
    }
    /**
     * Set CorpFareAccessCode value
     * @param string $corpFareAccessCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCorporate
     */
    public function setCorpFareAccessCode($corpFareAccessCode = null)
    {
        // validation for constraint: string
        if (!is_null($corpFareAccessCode) && !is_string($corpFareAccessCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($corpFareAccessCode)), __LINE__);
        }
        $this->CorpFareAccessCode = $corpFareAccessCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCorporate
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
