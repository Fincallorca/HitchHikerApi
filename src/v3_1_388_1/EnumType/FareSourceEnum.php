<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for FareSourceEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareSourceEnum
 * @subpackage Enumerations
 */
class FareSourceEnum
{
    /**
     * Constant for value 'Published'
     * @return string 'Published'
     */
    const VALUE_PUBLISHED = 'Published';
    /**
     * Constant for value 'ATPCO_Cat15'
     * @return string 'ATPCO_Cat15'
     */
    const VALUE_ATPCO_CAT_15 = 'ATPCO_Cat15';
    /**
     * Constant for value 'ATPCO_Cat25'
     * @return string 'ATPCO_Cat25'
     */
    const VALUE_ATPCO_CAT_25 = 'ATPCO_Cat25';
    /**
     * Constant for value 'ATPCO_Cat35'
     * @return string 'ATPCO_Cat35'
     */
    const VALUE_ATPCO_CAT_35 = 'ATPCO_Cat35';
    /**
     * Constant for value 'LowCost'
     * @return string 'LowCost'
     */
    const VALUE_LOW_COST = 'LowCost';
    /**
     * Constant for value 'HitchHiker'
     * @return string 'HitchHiker'
     */
    const VALUE_HITCH_HIKER = 'HitchHiker';
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
     * @uses self::VALUE_PUBLISHED
     * @uses self::VALUE_ATPCO_CAT_15
     * @uses self::VALUE_ATPCO_CAT_25
     * @uses self::VALUE_ATPCO_CAT_35
     * @uses self::VALUE_LOW_COST
     * @uses self::VALUE_HITCH_HIKER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PUBLISHED,
            self::VALUE_ATPCO_CAT_15,
            self::VALUE_ATPCO_CAT_25,
            self::VALUE_ATPCO_CAT_35,
            self::VALUE_LOW_COST,
            self::VALUE_HITCH_HIKER,
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
