<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for LocationTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LocationTypeEnum
 * @subpackage Enumerations
 */
class LocationTypeEnum
{
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Constant for value 'R'
     * @return string 'R'
     */
    const VALUE_R = 'R';
    /**
     * Constant for value 'C'
     * @return string 'C'
     */
    const VALUE_C = 'C';
    /**
     * Constant for value 'E'
     * @return string 'E'
     */
    const VALUE_E = 'E';
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
     * @uses self::VALUE_A
     * @uses self::VALUE_R
     * @uses self::VALUE_C
     * @uses self::VALUE_E
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_A,
            self::VALUE_R,
            self::VALUE_C,
            self::VALUE_E,
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
