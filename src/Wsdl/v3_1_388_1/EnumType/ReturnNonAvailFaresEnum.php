<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for ReturnNonAvailFaresEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ReturnNonAvailFaresEnum
 * @subpackage Enumerations
 */
class ReturnNonAvailFaresEnum
{
    /**
     * Constant for value 'Default'
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'UnavailableFares'
     * @return string 'UnavailableFares'
     */
    const VALUE_UNAVAILABLE_FARES = 'UnavailableFares';
    /**
     * Constant for value 'UnavailableNetFares'
     * @return string 'UnavailableNetFares'
     */
    const VALUE_UNAVAILABLE_NET_FARES = 'UnavailableNetFares';
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
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_UNAVAILABLE_FARES
     * @uses self::VALUE_UNAVAILABLE_NET_FARES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEFAULT,
            self::VALUE_UNAVAILABLE_FARES,
            self::VALUE_UNAVAILABLE_NET_FARES,
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
