<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for NonStopEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:NonStopEnum
 * @subpackage Enumerations
 */
class NonStopEnum
{
    /**
     * Constant for value 'AllFlight'
     * @return string 'AllFlight'
     */
    const VALUE_ALL_FLIGHT = 'AllFlight';
    /**
     * Constant for value 'Direct'
     * @return string 'Direct'
     */
    const VALUE_DIRECT = 'Direct';
    /**
     * Constant for value 'Nonstop'
     * @return string 'Nonstop'
     */
    const VALUE_NONSTOP = 'Nonstop';
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
     * @uses self::VALUE_ALL_FLIGHT
     * @uses self::VALUE_DIRECT
     * @uses self::VALUE_NONSTOP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL_FLIGHT,
            self::VALUE_DIRECT,
            self::VALUE_NONSTOP,
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
