<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for TraceLevelEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TraceLevelEnum
 * @subpackage Enumerations
 */
class TraceLevelEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'APISOAP'
     * @return string 'APISOAP'
     */
    const VALUE_APISOAP = 'APISOAP';
    /**
     * Constant for value 'API'
     * @return string 'API'
     */
    const VALUE_API = 'API';
    /**
     * Constant for value 'IBE'
     * @return string 'IBE'
     */
    const VALUE_IBE = 'IBE';
    /**
     * Constant for value 'CHARTER'
     * @return string 'CHARTER'
     */
    const VALUE_CHARTER = 'CHARTER';
    /**
     * Constant for value 'WEB'
     * @return string 'WEB'
     */
    const VALUE_WEB = 'WEB';
    /**
     * Constant for value 'VAYANT'
     * @return string 'VAYANT'
     */
    const VALUE_VAYANT = 'VAYANT';
    /**
     * Constant for value 'GDS'
     * @return string 'GDS'
     */
    const VALUE_GDS = 'GDS';
    /**
     * Constant for value 'ALL'
     * @return string 'ALL'
     */
    const VALUE_ALL = 'ALL';
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
     * @uses self::VALUE_APISOAP
     * @uses self::VALUE_API
     * @uses self::VALUE_IBE
     * @uses self::VALUE_CHARTER
     * @uses self::VALUE_WEB
     * @uses self::VALUE_VAYANT
     * @uses self::VALUE_GDS
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_APISOAP,
            self::VALUE_API,
            self::VALUE_IBE,
            self::VALUE_CHARTER,
            self::VALUE_WEB,
            self::VALUE_VAYANT,
            self::VALUE_GDS,
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
