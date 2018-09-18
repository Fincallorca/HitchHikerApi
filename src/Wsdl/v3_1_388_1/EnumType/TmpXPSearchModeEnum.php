<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for TmpXPSearchModeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TmpXPSearchModeEnum
 * @subpackage Enumerations
 */
class TmpXPSearchModeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'TransactionSaverMode'
     * @return string 'TransactionSaverMode'
     */
    const VALUE_TRANSACTION_SAVER_MODE = 'TransactionSaverMode';
    /**
     * Constant for value 'ShortestTravelTime'
     * @return string 'ShortestTravelTime'
     */
    const VALUE_SHORTEST_TRAVEL_TIME = 'ShortestTravelTime';
    /**
     * Constant for value 'FullConnection'
     * @return string 'FullConnection'
     */
    const VALUE_FULL_CONNECTION = 'FullConnection';
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
     * @uses self::VALUE_TRANSACTION_SAVER_MODE
     * @uses self::VALUE_SHORTEST_TRAVEL_TIME
     * @uses self::VALUE_FULL_CONNECTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_TRANSACTION_SAVER_MODE,
            self::VALUE_SHORTEST_TRAVEL_TIME,
            self::VALUE_FULL_CONNECTION,
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
