<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for SupportedFunctionsEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SupportedFunctionsEnum
 * @subpackage Enumerations
 */
class SupportedFunctionsEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CancelSegments'
     * @return string 'CancelSegments'
     */
    const VALUE_CANCEL_SEGMENTS = 'CancelSegments';
    /**
     * Constant for value 'CancelEntireBooking'
     * @return string 'CancelEntireBooking'
     */
    const VALUE_CANCEL_ENTIRE_BOOKING = 'CancelEntireBooking';
    /**
     * Constant for value 'GetPNRFunction'
     * @return string 'GetPNRFunction'
     */
    const VALUE_GET_PNRFUNCTION = 'GetPNRFunction';
    /**
     * Constant for value 'RebookingFunctionality'
     * @return string 'RebookingFunctionality'
     */
    const VALUE_REBOOKING_FUNCTIONALITY = 'RebookingFunctionality';
    /**
     * Constant for value 'NoEmailConfirmation'
     * @return string 'NoEmailConfirmation'
     */
    const VALUE_NO_EMAIL_CONFIRMATION = 'NoEmailConfirmation';
    /**
     * Constant for value 'CancelPassenger'
     * @return string 'CancelPassenger'
     */
    const VALUE_CANCEL_PASSENGER = 'CancelPassenger';
    /**
     * Constant for value 'FrequentFlyerProgram'
     * @return string 'FrequentFlyerProgram'
     */
    const VALUE_FREQUENT_FLYER_PROGRAM = 'FrequentFlyerProgram';
    /**
     * Constant for value 'SeatSelection'
     * @return string 'SeatSelection'
     */
    const VALUE_SEAT_SELECTION = 'SeatSelection';
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
     * @uses self::VALUE_CANCEL_SEGMENTS
     * @uses self::VALUE_CANCEL_ENTIRE_BOOKING
     * @uses self::VALUE_GET_PNRFUNCTION
     * @uses self::VALUE_REBOOKING_FUNCTIONALITY
     * @uses self::VALUE_NO_EMAIL_CONFIRMATION
     * @uses self::VALUE_CANCEL_PASSENGER
     * @uses self::VALUE_FREQUENT_FLYER_PROGRAM
     * @uses self::VALUE_SEAT_SELECTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_CANCEL_SEGMENTS,
            self::VALUE_CANCEL_ENTIRE_BOOKING,
            self::VALUE_GET_PNRFUNCTION,
            self::VALUE_REBOOKING_FUNCTIONALITY,
            self::VALUE_NO_EMAIL_CONFIRMATION,
            self::VALUE_CANCEL_PASSENGER,
            self::VALUE_FREQUENT_FLYER_PROGRAM,
            self::VALUE_SEAT_SELECTION,
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
