<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for MCTSourceEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MCTSourceEnum
 * @subpackage Enumerations
 */
class MCTSourceEnum
{
    /**
     * Constant for value 'Request'
     * @return string 'Request'
     */
    const VALUE_REQUEST = 'Request';
    /**
     * Constant for value 'Entry'
     * @return string 'Entry'
     */
    const VALUE_ENTRY = 'Entry';
    /**
     * Constant for value 'Pathfinder'
     * @return string 'Pathfinder'
     */
    const VALUE_PATHFINDER = 'Pathfinder';
    /**
     * Constant for value 'GDS'
     * @return string 'GDS'
     */
    const VALUE_GDS = 'GDS';
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
     * @uses self::VALUE_REQUEST
     * @uses self::VALUE_ENTRY
     * @uses self::VALUE_PATHFINDER
     * @uses self::VALUE_GDS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REQUEST,
            self::VALUE_ENTRY,
            self::VALUE_PATHFINDER,
            self::VALUE_GDS,
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
