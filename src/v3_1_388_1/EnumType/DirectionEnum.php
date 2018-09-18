<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for DirectionEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DirectionEnum
 * @subpackage Enumerations
 */
class DirectionEnum
{
    /**
     * Constant for value 'InAndOut'
     * @return string 'InAndOut'
     */
    const VALUE_IN_AND_OUT = 'InAndOut';
    /**
     * Constant for value 'Out'
     * @return string 'Out'
     */
    const VALUE_OUT = 'Out';
    /**
     * Constant for value 'In'
     * @return string 'In'
     */
    const VALUE_IN = 'In';
    /**
     * Constant for value 'InOrOut'
     * @return string 'InOrOut'
     */
    const VALUE_IN_OR_OUT = 'InOrOut';
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
     * @uses self::VALUE_IN_AND_OUT
     * @uses self::VALUE_OUT
     * @uses self::VALUE_IN
     * @uses self::VALUE_IN_OR_OUT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IN_AND_OUT,
            self::VALUE_OUT,
            self::VALUE_IN,
            self::VALUE_IN_OR_OUT,
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
