<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for SubChannelTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SubChannelTypeEnum
 * @subpackage Enumerations
 */
class SubChannelTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'NetFaresConsolidator'
     * @return string 'NetFaresConsolidator'
     */
    const VALUE_NET_FARES_CONSOLIDATOR = 'NetFaresConsolidator';
    /**
     * Constant for value 'NetFaresTourOperator'
     * @return string 'NetFaresTourOperator'
     */
    const VALUE_NET_FARES_TOUR_OPERATOR = 'NetFaresTourOperator';
    /**
     * Constant for value 'hFares'
     * @return string 'hFares'
     */
    const VALUE_H_FARES = 'hFares';
    /**
     * Constant for value 'PublishedFares'
     * @return string 'PublishedFares'
     */
    const VALUE_PUBLISHED_FARES = 'PublishedFares';
    /**
     * Constant for value 'Negofares'
     * @return string 'Negofares'
     */
    const VALUE_NEGOFARES = 'Negofares';
    /**
     * Constant for value 'CorporateFares'
     * @return string 'CorporateFares'
     */
    const VALUE_CORPORATE_FARES = 'CorporateFares';
    /**
     * Constant for value 'PercentageFares'
     * @return string 'PercentageFares'
     */
    const VALUE_PERCENTAGE_FARES = 'PercentageFares';
    /**
     * Constant for value 'WebFares'
     * @return string 'WebFares'
     */
    const VALUE_WEB_FARES = 'WebFares';
    /**
     * Constant for value 'CharterFares'
     * @return string 'CharterFares'
     */
    const VALUE_CHARTER_FARES = 'CharterFares';
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
     * @uses self::VALUE_NET_FARES_CONSOLIDATOR
     * @uses self::VALUE_NET_FARES_TOUR_OPERATOR
     * @uses self::VALUE_H_FARES
     * @uses self::VALUE_PUBLISHED_FARES
     * @uses self::VALUE_NEGOFARES
     * @uses self::VALUE_CORPORATE_FARES
     * @uses self::VALUE_PERCENTAGE_FARES
     * @uses self::VALUE_WEB_FARES
     * @uses self::VALUE_CHARTER_FARES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_NET_FARES_CONSOLIDATOR,
            self::VALUE_NET_FARES_TOUR_OPERATOR,
            self::VALUE_H_FARES,
            self::VALUE_PUBLISHED_FARES,
            self::VALUE_NEGOFARES,
            self::VALUE_CORPORATE_FARES,
            self::VALUE_PERCENTAGE_FARES,
            self::VALUE_WEB_FARES,
            self::VALUE_CHARTER_FARES,
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
