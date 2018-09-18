<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for CancelModeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CancelModeEnum
 * @subpackage Enumerations
 */
class CancelModeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CancelSameFlightNumberAndDate'
     * @return string 'CancelSameFlightNumberAndDate'
     */
    const VALUE_CANCEL_SAME_FLIGHT_NUMBER_AND_DATE = 'CancelSameFlightNumberAndDate';
    /**
     * Constant for value 'CancelSameAirlineAndRouteAndDate'
     * @return string 'CancelSameAirlineAndRouteAndDate'
     */
    const VALUE_CANCEL_SAME_AIRLINE_AND_ROUTE_AND_DATE = 'CancelSameAirlineAndRouteAndDate';
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
     * @uses self::VALUE_CANCEL_SAME_FLIGHT_NUMBER_AND_DATE
     * @uses self::VALUE_CANCEL_SAME_AIRLINE_AND_ROUTE_AND_DATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_CANCEL_SAME_FLIGHT_NUMBER_AND_DATE,
            self::VALUE_CANCEL_SAME_AIRLINE_AND_ROUTE_AND_DATE,
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
