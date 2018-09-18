<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestWebData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RequestWebData
 * @subpackage Structs
 */
class RequestWebData extends AbstractStructBase
{
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CountryCode;
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LanguageCode;
    /**
     * The NumberOfFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfFares;
    /**
     * The WebAgents
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAgent
     */
    public $WebAgents;
    /**
     * Constructor method for RequestWebData
     * @uses RequestWebData::setCountryCode()
     * @uses RequestWebData::setLanguageCode()
     * @uses RequestWebData::setNumberOfFares()
     * @uses RequestWebData::setWebAgents()
     * @param string $countryCode
     * @param string $languageCode
     * @param int $numberOfFares
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAgent $webAgents
     */
    public function __construct($countryCode = null, $languageCode = null, $numberOfFares = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAgent $webAgents = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setLanguageCode($languageCode)
            ->setNumberOfFares($numberOfFares)
            ->setWebAgents($webAgents);
    }
    /**
     * Get CountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountryCode()
    {
        return isset($this->CountryCode) ? $this->CountryCode : null;
    }
    /**
     * Set CountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $countryCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestWebData
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        if (is_null($countryCode) || (is_array($countryCode) && empty($countryCode))) {
            unset($this->CountryCode);
        } else {
            $this->CountryCode = $countryCode;
        }
        return $this;
    }
    /**
     * Get LanguageCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLanguageCode()
    {
        return isset($this->LanguageCode) ? $this->LanguageCode : null;
    }
    /**
     * Set LanguageCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $languageCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestWebData
     */
    public function setLanguageCode($languageCode = null)
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($languageCode)), __LINE__);
        }
        if (is_null($languageCode) || (is_array($languageCode) && empty($languageCode))) {
            unset($this->LanguageCode);
        } else {
            $this->LanguageCode = $languageCode;
        }
        return $this;
    }
    /**
     * Get NumberOfFares value
     * @return int|null
     */
    public function getNumberOfFares()
    {
        return $this->NumberOfFares;
    }
    /**
     * Set NumberOfFares value
     * @param int $numberOfFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestWebData
     */
    public function setNumberOfFares($numberOfFares = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfFares) && !is_numeric($numberOfFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfFares)), __LINE__);
        }
        $this->NumberOfFares = $numberOfFares;
        return $this;
    }
    /**
     * Get WebAgents value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAgent|null
     */
    public function getWebAgents()
    {
        return isset($this->WebAgents) ? $this->WebAgents : null;
    }
    /**
     * Set WebAgents value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAgent $webAgents
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestWebData
     */
    public function setWebAgents(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAgent $webAgents = null)
    {
        if (is_null($webAgents) || (is_array($webAgents) && empty($webAgents))) {
            unset($this->WebAgents);
        } else {
            $this->WebAgents = $webAgents;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestWebData
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
