<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for CheckAvailabilityEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CheckAvailabilityEnum
 * @subpackage Enumerations
 */
class CheckAvailabilityEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Vayant'
     * @return string 'Vayant'
     */
    const VALUE_VAYANT = 'Vayant';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_VAYANT
     * @uses self::VALUE_GDS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_VAYANT,
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
