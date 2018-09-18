<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleResponseLocation StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RuleResponseLocation
 * @subpackage Structs
 */
class RuleResponseLocation extends AbstractStructBase
{
    /**
     * The AirportCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AirportCode;
    /**
     * The AirportTitle
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AirportTitle;
    /**
     * Constructor method for RuleResponseLocation
     * @uses RuleResponseLocation::setAirportCode()
     * @uses RuleResponseLocation::setAirportTitle()
     * @param string $airportCode
     * @param string $airportTitle
     */
    public function __construct($airportCode = null, $airportTitle = null)
    {
        $this
            ->setAirportCode($airportCode)
            ->setAirportTitle($airportTitle);
    }
    /**
     * Get AirportCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAirportCode()
    {
        return isset($this->AirportCode) ? $this->AirportCode : null;
    }
    /**
     * Set AirportCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $airportCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation
     */
    public function setAirportCode($airportCode = null)
    {
        // validation for constraint: string
        if (!is_null($airportCode) && !is_string($airportCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airportCode)), __LINE__);
        }
        if (is_null($airportCode) || (is_array($airportCode) && empty($airportCode))) {
            unset($this->AirportCode);
        } else {
            $this->AirportCode = $airportCode;
        }
        return $this;
    }
    /**
     * Get AirportTitle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAirportTitle()
    {
        return isset($this->AirportTitle) ? $this->AirportTitle : null;
    }
    /**
     * Set AirportTitle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $airportTitle
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation
     */
    public function setAirportTitle($airportTitle = null)
    {
        // validation for constraint: string
        if (!is_null($airportTitle) && !is_string($airportTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airportTitle)), __LINE__);
        }
        if (is_null($airportTitle) || (is_array($airportTitle) && empty($airportTitle))) {
            unset($this->AirportTitle);
        } else {
            $this->AirportTitle = $airportTitle;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation
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
