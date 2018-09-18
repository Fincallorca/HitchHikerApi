<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for QueryFareTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QueryFareTypeEnum
 * @subpackage Enumerations
 */
class QueryFareTypeEnum
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'NetFare'
     * @return string 'NetFare'
     */
    const VALUE_NET_FARE = 'NetFare';
    /**
     * Constant for value 'PublishedFare'
     * @return string 'PublishedFare'
     */
    const VALUE_PUBLISHED_FARE = 'PublishedFare';
    /**
     * Constant for value 'NegoFare'
     * @return string 'NegoFare'
     */
    const VALUE_NEGO_FARE = 'NegoFare';
    /**
     * Constant for value 'CorpFare'
     * @return string 'CorpFare'
     */
    const VALUE_CORP_FARE = 'CorpFare';
    /**
     * Constant for value 'WebFare'
     * @return string 'WebFare'
     */
    const VALUE_WEB_FARE = 'WebFare';
    /**
     * Constant for value 'CharterFare'
     * @return string 'CharterFare'
     */
    const VALUE_CHARTER_FARE = 'CharterFare';
    /**
     * Constant for value 'MixedFares'
     * @return string 'MixedFares'
     */
    const VALUE_MIXED_FARES = 'MixedFares';
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
     * @uses self::VALUE_NET_FARE
     * @uses self::VALUE_PUBLISHED_FARE
     * @uses self::VALUE_NEGO_FARE
     * @uses self::VALUE_CORP_FARE
     * @uses self::VALUE_WEB_FARE
     * @uses self::VALUE_CHARTER_FARE
     * @uses self::VALUE_MIXED_FARES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_NET_FARE,
            self::VALUE_PUBLISHED_FARE,
            self::VALUE_NEGO_FARE,
            self::VALUE_CORP_FARE,
            self::VALUE_WEB_FARE,
            self::VALUE_CHARTER_FARE,
            self::VALUE_MIXED_FARES,
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
