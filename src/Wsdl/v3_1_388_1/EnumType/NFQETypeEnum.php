<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for NFQETypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:NFQETypeEnum
 * @subpackage Enumerations
 */
class NFQETypeEnum
{
    /**
     * Constant for value 'Both'
     * @return string 'Both'
     */
    const VALUE_BOTH = 'Both';
    /**
     * Constant for value 'PercentageQuote'
     * @return string 'PercentageQuote'
     */
    const VALUE_PERCENTAGE_QUOTE = 'PercentageQuote';
    /**
     * Constant for value 'NetFareQuote'
     * @return string 'NetFareQuote'
     */
    const VALUE_NET_FARE_QUOTE = 'NetFareQuote';
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
     * @uses self::VALUE_BOTH
     * @uses self::VALUE_PERCENTAGE_QUOTE
     * @uses self::VALUE_NET_FARE_QUOTE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BOTH,
            self::VALUE_PERCENTAGE_QUOTE,
            self::VALUE_NET_FARE_QUOTE,
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
