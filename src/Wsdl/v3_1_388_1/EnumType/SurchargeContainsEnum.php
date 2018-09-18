<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for SurchargeContainsEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SurchargeContainsEnum
 * @subpackage Enumerations
 */
class SurchargeContainsEnum
{
    /**
     * Constant for value 'Fare'
     * @return string 'Fare'
     */
    const VALUE_FARE = 'Fare';
    /**
     * Constant for value 'Tax'
     * @return string 'Tax'
     */
    const VALUE_TAX = 'Tax';
    /**
     * Constant for value 'AllLegs'
     * @return string 'AllLegs'
     */
    const VALUE_ALL_LEGS = 'AllLegs';
    /**
     * Constant for value 'AllPassenger'
     * @return string 'AllPassenger'
     */
    const VALUE_ALL_PASSENGER = 'AllPassenger';
    /**
     * Constant for value 'IncludingBaggageSurcharges'
     * @return string 'IncludingBaggageSurcharges'
     */
    const VALUE_INCLUDING_BAGGAGE_SURCHARGES = 'IncludingBaggageSurcharges';
    /**
     * Constant for value 'IncludingCheckinSurcharges'
     * @return string 'IncludingCheckinSurcharges'
     */
    const VALUE_INCLUDING_CHECKIN_SURCHARGES = 'IncludingCheckinSurcharges';
    /**
     * Constant for value 'IncludeBookingSurcharges'
     * @return string 'IncludeBookingSurcharges'
     */
    const VALUE_INCLUDE_BOOKING_SURCHARGES = 'IncludeBookingSurcharges';
    /**
     * Constant for value 'IncludePaymentSurcharges'
     * @return string 'IncludePaymentSurcharges'
     */
    const VALUE_INCLUDE_PAYMENT_SURCHARGES = 'IncludePaymentSurcharges';
    /**
     * Constant for value 'IncludePrioritySurcharges'
     * @return string 'IncludePrioritySurcharges'
     */
    const VALUE_INCLUDE_PRIORITY_SURCHARGES = 'IncludePrioritySurcharges';
    /**
     * Constant for value 'IncludeSeatSurcharges'
     * @return string 'IncludeSeatSurcharges'
     */
    const VALUE_INCLUDE_SEAT_SURCHARGES = 'IncludeSeatSurcharges';
    /**
     * Constant for value 'IncludeSMSNotificationFee'
     * @return string 'IncludeSMSNotificationFee'
     */
    const VALUE_INCLUDE_SMSNOTIFICATION_FEE = 'IncludeSMSNotificationFee';
    /**
     * Constant for value 'IncludingHandBaggageFee'
     * @return string 'IncludingHandBaggageFee'
     */
    const VALUE_INCLUDING_HAND_BAGGAGE_FEE = 'IncludingHandBaggageFee';
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
     * @uses self::VALUE_FARE
     * @uses self::VALUE_TAX
     * @uses self::VALUE_ALL_LEGS
     * @uses self::VALUE_ALL_PASSENGER
     * @uses self::VALUE_INCLUDING_BAGGAGE_SURCHARGES
     * @uses self::VALUE_INCLUDING_CHECKIN_SURCHARGES
     * @uses self::VALUE_INCLUDE_BOOKING_SURCHARGES
     * @uses self::VALUE_INCLUDE_PAYMENT_SURCHARGES
     * @uses self::VALUE_INCLUDE_PRIORITY_SURCHARGES
     * @uses self::VALUE_INCLUDE_SEAT_SURCHARGES
     * @uses self::VALUE_INCLUDE_SMSNOTIFICATION_FEE
     * @uses self::VALUE_INCLUDING_HAND_BAGGAGE_FEE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FARE,
            self::VALUE_TAX,
            self::VALUE_ALL_LEGS,
            self::VALUE_ALL_PASSENGER,
            self::VALUE_INCLUDING_BAGGAGE_SURCHARGES,
            self::VALUE_INCLUDING_CHECKIN_SURCHARGES,
            self::VALUE_INCLUDE_BOOKING_SURCHARGES,
            self::VALUE_INCLUDE_PAYMENT_SURCHARGES,
            self::VALUE_INCLUDE_PRIORITY_SURCHARGES,
            self::VALUE_INCLUDE_SEAT_SURCHARGES,
            self::VALUE_INCLUDE_SMSNOTIFICATION_FEE,
            self::VALUE_INCLUDING_HAND_BAGGAGE_FEE,
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
