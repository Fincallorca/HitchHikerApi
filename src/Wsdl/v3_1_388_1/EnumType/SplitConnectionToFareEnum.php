<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for SplitConnectionToFareEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SplitConnectionToFareEnum
 * @subpackage Enumerations
 */
class SplitConnectionToFareEnum
{
    /**
     * Constant for value 'Default'
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'DifferentRoutingSplit'
     * @return string 'DifferentRoutingSplit'
     */
    const VALUE_DIFFERENT_ROUTING_SPLIT = 'DifferentRoutingSplit';
    /**
     * Constant for value 'DifferentSegmentSplit'
     * @return string 'DifferentSegmentSplit'
     */
    const VALUE_DIFFERENT_SEGMENT_SPLIT = 'DifferentSegmentSplit';
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
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_DIFFERENT_ROUTING_SPLIT
     * @uses self::VALUE_DIFFERENT_SEGMENT_SPLIT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEFAULT,
            self::VALUE_DIFFERENT_ROUTING_SPLIT,
            self::VALUE_DIFFERENT_SEGMENT_SPLIT,
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
