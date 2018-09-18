<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for StoreFareQuoteTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:StoreFareQuoteTypeEnum
 * @subpackage Enumerations
 */
class StoreFareQuoteTypeEnum
{
    /**
     * Constant for value 'BSSSettings'
     * @return string 'BSSSettings'
     */
    const VALUE_BSSSETTINGS = 'BSSSettings';
    /**
     * Constant for value 'StoreFareQuote'
     * @return string 'StoreFareQuote'
     */
    const VALUE_STORE_FARE_QUOTE = 'StoreFareQuote';
    /**
     * Constant for value 'NoStoreFareQuote'
     * @return string 'NoStoreFareQuote'
     */
    const VALUE_NO_STORE_FARE_QUOTE = 'NoStoreFareQuote';
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
     * @uses self::VALUE_BSSSETTINGS
     * @uses self::VALUE_STORE_FARE_QUOTE
     * @uses self::VALUE_NO_STORE_FARE_QUOTE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BSSSETTINGS,
            self::VALUE_STORE_FARE_QUOTE,
            self::VALUE_NO_STORE_FARE_QUOTE,
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
