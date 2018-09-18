<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for ResultFareFlagEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ResultFareFlagEnum
 * @subpackage Enumerations
 */
class ResultFareFlagEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Selling'
     * @return string 'Selling'
     */
    const VALUE_SELLING = 'Selling';
    /**
     * Constant for value 'Net'
     * @return string 'Net'
     */
    const VALUE_NET = 'Net';
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
     * @uses self::VALUE_SELLING
     * @uses self::VALUE_NET
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_SELLING,
            self::VALUE_NET,
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
