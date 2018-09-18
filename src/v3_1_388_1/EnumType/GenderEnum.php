<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for GenderEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GenderEnum
 * @subpackage Enumerations
 */
class GenderEnum
{
    /**
     * Constant for value 'Male'
     * @return string 'Male'
     */
    const VALUE_MALE = 'Male';
    /**
     * Constant for value 'Female'
     * @return string 'Female'
     */
    const VALUE_FEMALE = 'Female';
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
     * @uses self::VALUE_MALE
     * @uses self::VALUE_FEMALE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MALE,
            self::VALUE_FEMALE,
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
