<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for EnhancedAllotmentEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EnhancedAllotmentEnum
 * @subpackage Enumerations
 */
class EnhancedAllotmentEnum
{
    /**
     * Constant for value 'Off'
     * @return string 'Off'
     */
    const VALUE_OFF = 'Off';
    /**
     * Constant for value 'On'
     * @return string 'On'
     */
    const VALUE_ON = 'On';
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
     * @uses self::VALUE_OFF
     * @uses self::VALUE_ON
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OFF,
            self::VALUE_ON,
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
