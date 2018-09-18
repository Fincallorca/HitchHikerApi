<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for SegmentStatusEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SegmentStatusEnum
 * @subpackage Enumerations
 */
class SegmentStatusEnum
{
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Passive'
     * @return string 'Passive'
     */
    const VALUE_PASSIVE = 'Passive';
    /**
     * Constant for value 'Ghost'
     * @return string 'Ghost'
     */
    const VALUE_GHOST = 'Ghost';
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
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_PASSIVE
     * @uses self::VALUE_GHOST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTIVE,
            self::VALUE_PASSIVE,
            self::VALUE_GHOST,
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
