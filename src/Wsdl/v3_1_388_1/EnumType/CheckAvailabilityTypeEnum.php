<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for CheckAvailabilityTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CheckAvailabilityTypeEnum
 * @subpackage Enumerations
 */
class CheckAvailabilityTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'GDS'
     * @return string 'GDS'
     */
    const VALUE_GDS = 'GDS';
    /**
     * Constant for value 'Pathfinder'
     * @return string 'Pathfinder'
     */
    const VALUE_PATHFINDER = 'Pathfinder';
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
     * @uses self::VALUE_GDS
     * @uses self::VALUE_PATHFINDER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_GDS,
            self::VALUE_PATHFINDER,
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
