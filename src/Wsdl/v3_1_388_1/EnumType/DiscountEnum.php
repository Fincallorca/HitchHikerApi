<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for DiscountEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscountEnum
 * @subpackage Enumerations
 */
class DiscountEnum
{
    /**
     * Constant for value 'NoDiscountedFares'
     * @return string 'NoDiscountedFares'
     */
    const VALUE_NO_DISCOUNTED_FARES = 'NoDiscountedFares';
    /**
     * Constant for value 'SpainIslandsResidentialDiscount'
     * @return string 'SpainIslandsResidentialDiscount'
     */
    const VALUE_SPAIN_ISLANDS_RESIDENTIAL_DISCOUNT = 'SpainIslandsResidentialDiscount';
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
     * @uses self::VALUE_NO_DISCOUNTED_FARES
     * @uses self::VALUE_SPAIN_ISLANDS_RESIDENTIAL_DISCOUNT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_DISCOUNTED_FARES,
            self::VALUE_SPAIN_ISLANDS_RESIDENTIAL_DISCOUNT,
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
