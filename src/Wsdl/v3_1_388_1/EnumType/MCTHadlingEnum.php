<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for MCTHadlingEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MCTHadlingEnum
 * @subpackage Enumerations
 */
class MCTHadlingEnum
{
    /**
     * Constant for value 'Remove'
     * @return string 'Remove'
     */
    const VALUE_REMOVE = 'Remove';
    /**
     * Constant for value 'Keep'
     * @return string 'Keep'
     */
    const VALUE_KEEP = 'Keep';
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
     * @uses self::VALUE_REMOVE
     * @uses self::VALUE_KEEP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REMOVE,
            self::VALUE_KEEP,
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
