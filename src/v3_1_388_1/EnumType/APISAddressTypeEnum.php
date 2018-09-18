<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for APISAddressTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:APISAddressTypeEnum
 * @subpackage Enumerations
 */
class APISAddressTypeEnum
{
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
    /**
     * Constant for value 'DESTINATION'
     * @return string 'DESTINATION'
     */
    const VALUE_DESTINATION = 'DESTINATION';
    /**
     * Constant for value 'RESIDENCE'
     * @return string 'RESIDENCE'
     */
    const VALUE_RESIDENCE = 'RESIDENCE';
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
     * @uses self::VALUE_DESTINATION
     * @uses self::VALUE_RESIDENCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_DESTINATION,
            self::VALUE_RESIDENCE,
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
