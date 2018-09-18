<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for FlightTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FlightTypeEnum
 * @subpackage Enumerations
 */
class FlightTypeEnum
{
    /**
     * Constant for value 'OneWay'
     * @return string 'OneWay'
     */
    const VALUE_ONE_WAY = 'OneWay';
    /**
     * Constant for value 'Roundtrip'
     * @return string 'Roundtrip'
     */
    const VALUE_ROUNDTRIP = 'Roundtrip';
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
     * @uses self::VALUE_ONE_WAY
     * @uses self::VALUE_ROUNDTRIP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ONE_WAY,
            self::VALUE_ROUNDTRIP,
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
