<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for UserDefinedFieldDetailLevelEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UserDefinedFieldDetailLevelEnum
 * @subpackage Enumerations
 */
class UserDefinedFieldDetailLevelEnum
{
    /**
     * Constant for value 'USER1'
     * @return string 'USER1'
     */
    const VALUE_USER_1 = 'USER1';
    /**
     * Constant for value 'USER2'
     * @return string 'USER2'
     */
    const VALUE_USER_2 = 'USER2';
    /**
     * Constant for value 'USER3'
     * @return string 'USER3'
     */
    const VALUE_USER_3 = 'USER3';
    /**
     * Constant for value 'USER4'
     * @return string 'USER4'
     */
    const VALUE_USER_4 = 'USER4';
    /**
     * Constant for value 'USER5'
     * @return string 'USER5'
     */
    const VALUE_USER_5 = 'USER5';
    /**
     * Constant for value 'USER6'
     * @return string 'USER6'
     */
    const VALUE_USER_6 = 'USER6';
    /**
     * Constant for value 'USER7'
     * @return string 'USER7'
     */
    const VALUE_USER_7 = 'USER7';
    /**
     * Constant for value 'USER8'
     * @return string 'USER8'
     */
    const VALUE_USER_8 = 'USER8';
    /**
     * Constant for value 'USER9'
     * @return string 'USER9'
     */
    const VALUE_USER_9 = 'USER9';
    /**
     * Constant for value 'USER10'
     * @return string 'USER10'
     */
    const VALUE_USER_10 = 'USER10';
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
     * @uses self::VALUE_USER_1
     * @uses self::VALUE_USER_2
     * @uses self::VALUE_USER_3
     * @uses self::VALUE_USER_4
     * @uses self::VALUE_USER_5
     * @uses self::VALUE_USER_6
     * @uses self::VALUE_USER_7
     * @uses self::VALUE_USER_8
     * @uses self::VALUE_USER_9
     * @uses self::VALUE_USER_10
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_USER_1,
            self::VALUE_USER_2,
            self::VALUE_USER_3,
            self::VALUE_USER_4,
            self::VALUE_USER_5,
            self::VALUE_USER_6,
            self::VALUE_USER_7,
            self::VALUE_USER_8,
            self::VALUE_USER_9,
            self::VALUE_USER_10,
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
