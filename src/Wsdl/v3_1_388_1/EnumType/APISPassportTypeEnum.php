<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for APISPassportTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:APISPassportTypeEnum
 * @subpackage Enumerations
 */
class APISPassportTypeEnum
{
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
    /**
     * Constant for value 'APPROVED_ID'
     * @return string 'APPROVED_ID'
     */
    const VALUE_APPROVED_ID = 'APPROVED_ID';
    /**
     * Constant for value 'CREWMEMBER'
     * @return string 'CREWMEMBER'
     */
    const VALUE_CREWMEMBER = 'CREWMEMBER';
    /**
     * Constant for value 'ID_CARD_A'
     * @return string 'ID_CARD_A'
     */
    const VALUE_ID_CARD_A = 'ID_CARD_A';
    /**
     * Constant for value 'ID_CARD_C'
     * @return string 'ID_CARD_C'
     */
    const VALUE_ID_CARD_C = 'ID_CARD_C';
    /**
     * Constant for value 'ID_CARD_I'
     * @return string 'ID_CARD_I'
     */
    const VALUE_ID_CARD_I = 'ID_CARD_I';
    /**
     * Constant for value 'PASSPORT_CARD'
     * @return string 'PASSPORT_CARD'
     */
    const VALUE_PASSPORT_CARD = 'PASSPORT_CARD';
    /**
     * Constant for value 'PASSENGER_PASSPORT'
     * @return string 'PASSENGER_PASSPORT'
     */
    const VALUE_PASSENGER_PASSPORT = 'PASSENGER_PASSPORT';
    /**
     * Constant for value 'MILITARY_ID'
     * @return string 'MILITARY_ID'
     */
    const VALUE_MILITARY_ID = 'MILITARY_ID';
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
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_APPROVED_ID
     * @uses self::VALUE_CREWMEMBER
     * @uses self::VALUE_ID_CARD_A
     * @uses self::VALUE_ID_CARD_C
     * @uses self::VALUE_ID_CARD_I
     * @uses self::VALUE_PASSPORT_CARD
     * @uses self::VALUE_PASSENGER_PASSPORT
     * @uses self::VALUE_MILITARY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_APPROVED_ID,
            self::VALUE_CREWMEMBER,
            self::VALUE_ID_CARD_A,
            self::VALUE_ID_CARD_C,
            self::VALUE_ID_CARD_I,
            self::VALUE_PASSPORT_CARD,
            self::VALUE_PASSENGER_PASSPORT,
            self::VALUE_MILITARY_ID,
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
