<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for QuoteFareTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QuoteFareTypeEnum
 * @subpackage Enumerations
 */
class QuoteFareTypeEnum
{
    /**
     * Constant for value 'Default'
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'NetFare'
     * @return string 'NetFare'
     */
    const VALUE_NET_FARE = 'NetFare';
    /**
     * Constant for value 'GDSFare'
     * @return string 'GDSFare'
     */
    const VALUE_GDSFARE = 'GDSFare';
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
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_NET_FARE
     * @uses self::VALUE_GDSFARE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEFAULT,
            self::VALUE_NET_FARE,
            self::VALUE_GDSFARE,
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
