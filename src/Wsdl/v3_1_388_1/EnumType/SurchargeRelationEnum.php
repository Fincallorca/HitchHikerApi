<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for SurchargeRelationEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SurchargeRelationEnum
 * @subpackage Enumerations
 */
class SurchargeRelationEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'SegmentFare'
     * @return string 'SegmentFare'
     */
    const VALUE_SEGMENT_FARE = 'SegmentFare';
    /**
     * Constant for value 'BookingFare'
     * @return string 'BookingFare'
     */
    const VALUE_BOOKING_FARE = 'BookingFare';
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
     * @uses self::VALUE_SEGMENT_FARE
     * @uses self::VALUE_BOOKING_FARE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_SEGMENT_FARE,
            self::VALUE_BOOKING_FARE,
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
