<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for CancelationDirection EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CancelationDirection
 * @subpackage Enumerations
 */
class CancelationDirection
{
    /**
     * Constant for value 'OutBound'
     * @return string 'OutBound'
     */
    const VALUE_OUT_BOUND = 'OutBound';
    /**
     * Constant for value 'InBound'
     * @return string 'InBound'
     */
    const VALUE_IN_BOUND = 'InBound';
    /**
     * Constant for value 'OutIn'
     * @return string 'OutIn'
     */
    const VALUE_OUT_IN = 'OutIn';
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
     * @uses self::VALUE_OUT_BOUND
     * @uses self::VALUE_IN_BOUND
     * @uses self::VALUE_OUT_IN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OUT_BOUND,
            self::VALUE_IN_BOUND,
            self::VALUE_OUT_IN,
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
