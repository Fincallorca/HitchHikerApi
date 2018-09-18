<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for MacroActionCodeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MacroActionCodeEnum
 * @subpackage Enumerations
 */
class MacroActionCodeEnum
{
    /**
     * Constant for value 'Add'
     * @return string 'Add'
     */
    const VALUE_ADD = 'Add';
    /**
     * Constant for value 'Delete'
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
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
     * @uses self::VALUE_ADD
     * @uses self::VALUE_DELETE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADD,
            self::VALUE_DELETE,
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
