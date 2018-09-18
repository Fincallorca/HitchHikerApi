<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for DetailLevelEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DetailLevelEnum
 * @subpackage Enumerations
 */
class DetailLevelEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Legtraveltime_Codeshare_NumberOfStops'
     * @return string 'Legtraveltime_Codeshare_NumberOfStops'
     */
    const VALUE_LEGTRAVELTIME_CODESHARE_NUMBER_OF_STOPS = 'Legtraveltime_Codeshare_NumberOfStops';
    /**
     * Constant for value 'NetFareLegBookingClassAndFareBase'
     * @return string 'NetFareLegBookingClassAndFareBase'
     */
    const VALUE_NET_FARE_LEG_BOOKING_CLASS_AND_FARE_BASE = 'NetFareLegBookingClassAndFareBase';
    /**
     * Constant for value 'SegmentMileage'
     * @return string 'SegmentMileage'
     */
    const VALUE_SEGMENT_MILEAGE = 'SegmentMileage';
    /**
     * Constant for value 'ETicketing'
     * @return string 'ETicketing'
     */
    const VALUE_ETICKETING = 'ETicketing';
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
     * @uses self::VALUE_LEGTRAVELTIME_CODESHARE_NUMBER_OF_STOPS
     * @uses self::VALUE_NET_FARE_LEG_BOOKING_CLASS_AND_FARE_BASE
     * @uses self::VALUE_SEGMENT_MILEAGE
     * @uses self::VALUE_ETICKETING
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_LEGTRAVELTIME_CODESHARE_NUMBER_OF_STOPS,
            self::VALUE_NET_FARE_LEG_BOOKING_CLASS_AND_FARE_BASE,
            self::VALUE_SEGMENT_MILEAGE,
            self::VALUE_ETICKETING,
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
