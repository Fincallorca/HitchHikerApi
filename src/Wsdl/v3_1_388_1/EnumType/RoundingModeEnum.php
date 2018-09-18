<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for RoundingModeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RoundingModeEnum
 * @subpackage Enumerations
 */
class RoundingModeEnum
{
    /**
     * Constant for value 'Up'
     * @return string 'Up'
     */
    const VALUE_UP = 'Up';
    /**
     * Constant for value 'Common'
     * @return string 'Common'
     */
    const VALUE_COMMON = 'Common';
    /**
     * Constant for value 'Down'
     * @return string 'Down'
     */
    const VALUE_DOWN = 'Down';
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
     * @uses self::VALUE_UP
     * @uses self::VALUE_COMMON
     * @uses self::VALUE_DOWN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UP,
            self::VALUE_COMMON,
            self::VALUE_DOWN,
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
