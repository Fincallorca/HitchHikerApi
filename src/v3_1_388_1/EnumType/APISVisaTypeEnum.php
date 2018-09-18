<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for APISVisaTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:APISVisaTypeEnum
 * @subpackage Enumerations
 */
class APISVisaTypeEnum
{
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
    /**
     * Constant for value 'VISA'
     * @return string 'VISA'
     */
    const VALUE_VISA = 'VISA';
    /**
     * Constant for value 'REDRESS'
     * @return string 'REDRESS'
     */
    const VALUE_REDRESS = 'REDRESS';
    /**
     * Constant for value 'KNOWN_TRAVELLER'
     * @return string 'KNOWN_TRAVELLER'
     */
    const VALUE_KNOWN_TRAVELLER = 'KNOWN_TRAVELLER';
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
     * @uses self::VALUE_VISA
     * @uses self::VALUE_REDRESS
     * @uses self::VALUE_KNOWN_TRAVELLER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_VISA,
            self::VALUE_REDRESS,
            self::VALUE_KNOWN_TRAVELLER,
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
