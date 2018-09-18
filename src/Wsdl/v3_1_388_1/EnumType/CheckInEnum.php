<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for CheckInEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CheckInEnum
 * @subpackage Enumerations
 */
class CheckInEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'OnlineCheckIn'
     * @return string 'OnlineCheckIn'
     */
    const VALUE_ONLINE_CHECK_IN = 'OnlineCheckIn';
    /**
     * Constant for value 'AirportCheckIn'
     * @return string 'AirportCheckIn'
     */
    const VALUE_AIRPORT_CHECK_IN = 'AirportCheckIn';
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
     * @uses self::VALUE_ONLINE_CHECK_IN
     * @uses self::VALUE_AIRPORT_CHECK_IN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ONLINE_CHECK_IN,
            self::VALUE_AIRPORT_CHECK_IN,
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
