<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for PrefSortEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PrefSortEnum
 * @subpackage Enumerations
 */
class PrefSortEnum
{
    /**
     * Constant for value 'Price'
     * @return string 'Price'
     */
    const VALUE_PRICE = 'Price';
    /**
     * Constant for value 'PercentageMatch'
     * @return string 'PercentageMatch'
     */
    const VALUE_PERCENTAGE_MATCH = 'PercentageMatch';
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
     * @uses self::VALUE_PRICE
     * @uses self::VALUE_PERCENTAGE_MATCH
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRICE,
            self::VALUE_PERCENTAGE_MATCH,
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
