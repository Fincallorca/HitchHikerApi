<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for AvailabilitySearchModeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AvailabilitySearchModeEnum
 * @subpackage Enumerations
 */
class AvailabilitySearchModeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'StandardNetFareSearch'
     * @return string 'StandardNetFareSearch'
     */
    const VALUE_STANDARD_NET_FARE_SEARCH = 'StandardNetFareSearch';
    /**
     * Constant for value 'XtremePricer'
     * @return string 'XtremePricer'
     */
    const VALUE_XTREME_PRICER = 'XtremePricer';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_STANDARD_NET_FARE_SEARCH
     * @uses self::VALUE_XTREME_PRICER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_STANDARD_NET_FARE_SEARCH,
            self::VALUE_XTREME_PRICER,
        );
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
