<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for AdditionalDetailEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AdditionalDetailEnum
 * @subpackage Enumerations
 */
class AdditionalDetailEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'BoardingDetails'
     * @return string 'BoardingDetails'
     */
    const VALUE_BOARDING_DETAILS = 'BoardingDetails';
    /**
     * Constant for value 'BookingCRSInfo'
     * @return string 'BookingCRSInfo'
     */
    const VALUE_BOOKING_CRSINFO = 'BookingCRSInfo';
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
     * @uses self::VALUE_BOARDING_DETAILS
     * @uses self::VALUE_BOOKING_CRSINFO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_BOARDING_DETAILS,
            self::VALUE_BOOKING_CRSINFO,
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
