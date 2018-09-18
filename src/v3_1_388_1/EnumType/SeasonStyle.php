<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for SeasonStyle EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SeasonStyle
 * @subpackage Enumerations
 */
class SeasonStyle
{
    /**
     * Constant for value 'Season'
     * @return string 'Season'
     */
    const VALUE_SEASON = 'Season';
    /**
     * Constant for value 'Pair'
     * @return string 'Pair'
     */
    const VALUE_PAIR = 'Pair';
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
     * @uses self::VALUE_SEASON
     * @uses self::VALUE_PAIR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SEASON,
            self::VALUE_PAIR,
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
