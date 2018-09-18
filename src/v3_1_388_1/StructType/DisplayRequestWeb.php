<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayRequestWeb StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayRequestWeb
 * @subpackage Structs
 */
class DisplayRequestWeb extends AbstractStructBase
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
     * - nillable: true
     * @var string
     */
    public $WebLanguageCode;
    /**
     * Constructor method for DisplayRequestWeb
     * @uses DisplayRequestWeb::setCountry()
     * @uses DisplayRequestWeb::setNumberOfWebFares()
     * @uses DisplayRequestWeb::setWebAgents()
     * @uses DisplayRequestWeb::setWebLanguageCode()
     * @param string $country
     * @param int $numberOfWebFares
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAgent $webAgents
     * @param string $webLanguageCode
     */
    public function __construct($country = null, $numberOfWebFares = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAgent $webAgents = null, $webLanguageCode = null)
    {
        $this
            ->setCountry($country)
            ->setNumberOfWebFares($numberOfWebFares)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestWeb
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestWeb
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestWeb
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
     * @return string|null
     */
    public function getWebLanguageCode()
    {
        return $this->WebLanguageCode;
    }
    /**
     * Set WebLanguageCode value
     * @param string $webLanguageCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestWeb
     */
    public function setWebLanguageCode($webLanguageCode = null)
    {
        // validation for constraint: string
        if (!is_null($webLanguageCode) && !is_string($webLanguageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($webLanguageCode)), __LINE__);
        }
        $this->WebLanguageCode = $webLanguageCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestWeb
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
