<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for BookingChannelEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BookingChannelEnum
 * @subpackage Enumerations
 */
class BookingChannelEnum
{
    /**
     * Constant for value 'Amadeus'
     * @return string 'Amadeus'
     */
    const VALUE_AMADEUS = 'Amadeus';
    /**
     * Constant for value 'Worldspan'
     * @return string 'Worldspan'
     */
    const VALUE_WORLDSPAN = 'Worldspan';
    /**
     * Constant for value 'Sabre'
     * @return string 'Sabre'
     */
    const VALUE_SABRE = 'Sabre';
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
     * @uses self::VALUE_AMADEUS
     * @uses self::VALUE_WORLDSPAN
     * @uses self::VALUE_SABRE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AMADEUS,
            self::VALUE_WORLDSPAN,
            self::VALUE_SABRE,
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
