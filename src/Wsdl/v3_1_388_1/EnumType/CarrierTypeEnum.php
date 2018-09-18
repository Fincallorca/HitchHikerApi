<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for CarrierTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CarrierTypeEnum
 * @subpackage Enumerations
 */
class CarrierTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Feeder'
     * @return string 'Feeder'
     */
    const VALUE_FEEDER = 'Feeder';
    /**
     * Constant for value 'Longhaul'
     * @return string 'Longhaul'
     */
    const VALUE_LONGHAUL = 'Longhaul';
    /**
     * Constant for value 'Addon'
     * @return string 'Addon'
     */
    const VALUE_ADDON = 'Addon';
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
     * @uses self::VALUE_FEEDER
     * @uses self::VALUE_LONGHAUL
     * @uses self::VALUE_ADDON
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_FEEDER,
            self::VALUE_LONGHAUL,
            self::VALUE_ADDON,
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
