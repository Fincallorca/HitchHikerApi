<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for FOIDTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FOIDTypeEnum
 * @subpackage Enumerations
 */
class FOIDTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CreditCard'
     * @return string 'CreditCard'
     */
    const VALUE_CREDIT_CARD = 'CreditCard';
    /**
     * Constant for value 'FrequentFlyerNumber'
     * @return string 'FrequentFlyerNumber'
     */
    const VALUE_FREQUENT_FLYER_NUMBER = 'FrequentFlyerNumber';
    /**
     * Constant for value 'Passport'
     * @return string 'Passport'
     */
    const VALUE_PASSPORT = 'Passport';
    /**
     * Constant for value 'DriversLicense'
     * @return string 'DriversLicense'
     */
    const VALUE_DRIVERS_LICENSE = 'DriversLicense';
    /**
     * Constant for value 'LocalDefinedIDNumber'
     * @return string 'LocalDefinedIDNumber'
     */
    const VALUE_LOCAL_DEFINED_IDNUMBER = 'LocalDefinedIDNumber';
    /**
     * Constant for value 'NationalDefinedIDNumber'
     * @return string 'NationalDefinedIDNumber'
     */
    const VALUE_NATIONAL_DEFINED_IDNUMBER = 'NationalDefinedIDNumber';
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
     * @uses self::VALUE_CREDIT_CARD
     * @uses self::VALUE_FREQUENT_FLYER_NUMBER
     * @uses self::VALUE_PASSPORT
     * @uses self::VALUE_DRIVERS_LICENSE
     * @uses self::VALUE_LOCAL_DEFINED_IDNUMBER
     * @uses self::VALUE_NATIONAL_DEFINED_IDNUMBER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_CREDIT_CARD,
            self::VALUE_FREQUENT_FLYER_NUMBER,
            self::VALUE_PASSPORT,
            self::VALUE_DRIVERS_LICENSE,
            self::VALUE_LOCAL_DEFINED_IDNUMBER,
            self::VALUE_NATIONAL_DEFINED_IDNUMBER,
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
