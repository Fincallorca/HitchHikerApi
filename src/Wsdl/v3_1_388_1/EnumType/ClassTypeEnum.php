<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for ClassTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClassTypeEnum
 * @subpackage Enumerations
 */
class ClassTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Economy'
     * @return string 'Economy'
     */
    const VALUE_ECONOMY = 'Economy';
    /**
     * Constant for value 'Business'
     * @return string 'Business'
     */
    const VALUE_BUSINESS = 'Business';
    /**
     * Constant for value 'First'
     * @return string 'First'
     */
    const VALUE_FIRST = 'First';
    /**
     * Constant for value 'PremiumEconomy'
     * @return string 'PremiumEconomy'
     */
    const VALUE_PREMIUM_ECONOMY = 'PremiumEconomy';
    /**
     * Constant for value 'PremiumBusiness'
     * @return string 'PremiumBusiness'
     */
    const VALUE_PREMIUM_BUSINESS = 'PremiumBusiness';
    /**
     * Constant for value 'PremiumFirst'
     * @return string 'PremiumFirst'
     */
    const VALUE_PREMIUM_FIRST = 'PremiumFirst';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ECONOMY
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_FIRST
     * @uses self::VALUE_PREMIUM_ECONOMY
     * @uses self::VALUE_PREMIUM_BUSINESS
     * @uses self::VALUE_PREMIUM_FIRST
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ECONOMY,
            self::VALUE_BUSINESS,
            self::VALUE_FIRST,
            self::VALUE_PREMIUM_ECONOMY,
            self::VALUE_PREMIUM_BUSINESS,
            self::VALUE_PREMIUM_FIRST,
            self::VALUE_ALL,
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
