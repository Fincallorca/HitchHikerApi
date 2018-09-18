<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for AllotmentPriorityEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AllotmentPriorityEnum
 * @subpackage Enumerations
 */
class AllotmentPriorityEnum
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'High'
     * @return string 'High'
     */
    const VALUE_HIGH = 'High';
    /**
     * Constant for value 'Low'
     * @return string 'Low'
     */
    const VALUE_LOW = 'Low';
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
     * @uses self::VALUE_ALL
     * @uses self::VALUE_HIGH
     * @uses self::VALUE_LOW
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_HIGH,
            self::VALUE_LOW,
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
