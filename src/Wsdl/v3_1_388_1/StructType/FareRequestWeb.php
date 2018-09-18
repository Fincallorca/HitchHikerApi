<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRequestWeb StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareRequestWeb
 * @subpackage Structs
 */
class FareRequestWeb extends AbstractStructBase
{
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Country;
    /**
     * The NumberOfWebFares
     * @var int
     */
    public $NumberOfWebFares;
    /**
     * The ReturnEstimatedResults
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnEstimatedResults;
    /**
     * The SpecialDiscounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SpecialDiscounts;
    /**
     * The WebAgents
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAgent
     */
    public $WebAgents;
    /**
     * The WebLanguageCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WebLanguageCode;
    /**
     * Constructor method for FareRequestWeb
     * @uses FareRequestWeb::setCountry()
     * @uses FareRequestWeb::setNumberOfWebFares()
     * @uses FareRequestWeb::setReturnEstimatedResults()
     * @uses FareRequestWeb::setSpecialDiscounts()
     * @uses FareRequestWeb::setWebAgents()
     * @uses FareRequestWeb::setWebLanguageCode()
     * @param string $country
     * @param int $numberOfWebFares
     * @param bool $returnEstimatedResults
     * @param string $specialDiscounts
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAgent $webAgents
     * @param string $webLanguageCode
     */
    public function __construct($country = null, $numberOfWebFares = null, $returnEstimatedResults = null, $specialDiscounts = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAgent $webAgents = null, $webLanguageCode = null)
    {
        $this
            ->setCountry($country)
            ->setNumberOfWebFares($numberOfWebFares)
            ->setReturnEstimatedResults($returnEstimatedResults)
            ->setSpecialDiscounts($specialDiscounts)
            ->setWebAgents($webAgents)
            ->setWebLanguageCode($webLanguageCode);
    }
    /**
     * Get Country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry()
    {
        return isset($this->Country) ? $this->Country : null;
    }
    /**
     * Set Country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestWeb
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->Country);
        } else {
            $this->Country = $country;
        }
        return $this;
    }
    /**
     * Get NumberOfWebFares value
     * @return int|null
     */
    public function getNumberOfWebFares()
    {
        return $this->NumberOfWebFares;
    }
    /**
     * Set NumberOfWebFares value
     * @param int $numberOfWebFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestWeb
     */
    public function setNumberOfWebFares($numberOfWebFares = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfWebFares) && !is_numeric($numberOfWebFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfWebFares)), __LINE__);
        }
        $this->NumberOfWebFares = $numberOfWebFares;
        return $this;
    }
    /**
     * Get ReturnEstimatedResults value
     * @return bool|null
     */
    public function getReturnEstimatedResults()
    {
        return $this->ReturnEstimatedResults;
    }
    /**
     * Set ReturnEstimatedResults value
     * @param bool $returnEstimatedResults
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestWeb
     */
    public function setReturnEstimatedResults($returnEstimatedResults = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnEstimatedResults) && !is_bool($returnEstimatedResults)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnEstimatedResults)), __LINE__);
        }
        $this->ReturnEstimatedResults = $returnEstimatedResults;
        return $this;
    }
    /**
     * Get SpecialDiscounts value
     * @return string|null
     */
    public function getSpecialDiscounts()
    {
        return $this->SpecialDiscounts;
    }
    /**
     * Set SpecialDiscounts value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DiscountEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DiscountEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $specialDiscounts
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestWeb
     */
    public function setSpecialDiscounts($specialDiscounts = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DiscountEnum::valueIsValid($specialDiscounts)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $specialDiscounts, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DiscountEnum::getValidValues())), __LINE__);
        }
        $this->SpecialDiscounts = $specialDiscounts;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestWeb
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
     * Get WebLanguageCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWebLanguageCode()
    {
        return isset($this->WebLanguageCode) ? $this->WebLanguageCode : null;
    }
    /**
     * Set WebLanguageCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $webLanguageCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestWeb
     */
    public function setWebLanguageCode($webLanguageCode = null)
    {
        // validation for constraint: string
        if (!is_null($webLanguageCode) && !is_string($webLanguageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($webLanguageCode)), __LINE__);
        }
        if (is_null($webLanguageCode) || (is_array($webLanguageCode) && empty($webLanguageCode))) {
            unset($this->WebLanguageCode);
        } else {
            $this->WebLanguageCode = $webLanguageCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestWeb
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
