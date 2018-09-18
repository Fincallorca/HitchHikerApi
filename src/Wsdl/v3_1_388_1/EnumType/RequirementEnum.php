<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for RequirementEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RequirementEnum
 * @subpackage Enumerations
 */
class RequirementEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Password'
     * @return string 'Password'
     */
    const VALUE_PASSWORD = 'Password';
    /**
     * Constant for value 'PassportNumber'
     * @return string 'PassportNumber'
     */
    const VALUE_PASSPORT_NUMBER = 'PassportNumber';
    /**
     * Constant for value 'CreditCardForCheckIn'
     * @return string 'CreditCardForCheckIn'
     */
    const VALUE_CREDIT_CARD_FOR_CHECK_IN = 'CreditCardForCheckIn';
    /**
     * Constant for value 'DOB'
     * @return string 'DOB'
     */
    const VALUE_DOB = 'DOB';
    /**
     * Constant for value 'APISDuringBooking'
     * @return string 'APISDuringBooking'
     */
    const VALUE_APISDURING_BOOKING = 'APISDuringBooking';
    /**
     * Constant for value 'APISAfterBooking'
     * @return string 'APISAfterBooking'
     */
    const VALUE_APISAFTER_BOOKING = 'APISAfterBooking';
    /**
     * Constant for value 'PaxNationality'
     * @return string 'PaxNationality'
     */
    const VALUE_PAX_NATIONALITY = 'PaxNationality';
    /**
     * Constant for value 'SameBagsForAllLegs'
     * @return string 'SameBagsForAllLegs'
     */
    const VALUE_SAME_BAGS_FOR_ALL_LEGS = 'SameBagsForAllLegs';
    /**
     * Constant for value 'GenderRequired'
     * @return string 'GenderRequired'
     */
    const VALUE_GENDER_REQUIRED = 'GenderRequired';
    /**
     * Constant for value 'MunicipalityForPassportRequired'
     * @return string 'MunicipalityForPassportRequired'
     */
    const VALUE_MUNICIPALITY_FOR_PASSPORT_REQUIRED = 'MunicipalityForPassportRequired';
    /**
     * Constant for value 'FullAPISPassportInformation'
     * @return string 'FullAPISPassportInformation'
     */
    const VALUE_FULL_APISPASSPORT_INFORMATION = 'FullAPISPassportInformation';
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
     * @uses self::VALUE_PASSWORD
     * @uses self::VALUE_PASSPORT_NUMBER
     * @uses self::VALUE_CREDIT_CARD_FOR_CHECK_IN
     * @uses self::VALUE_DOB
     * @uses self::VALUE_APISDURING_BOOKING
     * @uses self::VALUE_APISAFTER_BOOKING
     * @uses self::VALUE_PAX_NATIONALITY
     * @uses self::VALUE_SAME_BAGS_FOR_ALL_LEGS
     * @uses self::VALUE_GENDER_REQUIRED
     * @uses self::VALUE_MUNICIPALITY_FOR_PASSPORT_REQUIRED
     * @uses self::VALUE_FULL_APISPASSPORT_INFORMATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_PASSWORD,
            self::VALUE_PASSPORT_NUMBER,
            self::VALUE_CREDIT_CARD_FOR_CHECK_IN,
            self::VALUE_DOB,
            self::VALUE_APISDURING_BOOKING,
            self::VALUE_APISAFTER_BOOKING,
            self::VALUE_PAX_NATIONALITY,
            self::VALUE_SAME_BAGS_FOR_ALL_LEGS,
            self::VALUE_GENDER_REQUIRED,
            self::VALUE_MUNICIPALITY_FOR_PASSPORT_REQUIRED,
            self::VALUE_FULL_APISPASSPORT_INFORMATION,
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
