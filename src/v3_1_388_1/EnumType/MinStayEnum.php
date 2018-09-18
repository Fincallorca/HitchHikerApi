<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for MinStayEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MinStayEnum
 * @subpackage Enumerations
 */
class MinStayEnum
{
    /**
     * Constant for value 'FS'
     * @return string 'FS'
     */
    const VALUE_FS = 'FS';
    /**
     * Constant for value 'LS'
     * @return string 'LS'
     */
    const VALUE_LS = 'LS';
    /**
     * Constant for value 'SS'
     * @return string 'SS'
     */
    const VALUE_SS = 'SS';
    /**
     * Constant for value 'FX'
     * @return string 'FX'
     */
    const VALUE_FX = 'FX';
    /**
     * Constant for value 'LX'
     * @return string 'LX'
     */
    const VALUE_LX = 'LX';
    /**
     * Constant for value 'XT'
     * @return string 'XT'
     */
    const VALUE_XT = 'XT';
    /**
     * Constant for value 'PT'
     * @return string 'PT'
     */
    const VALUE_PT = 'PT';
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
     * @uses self::VALUE_FS
     * @uses self::VALUE_LS
     * @uses self::VALUE_SS
     * @uses self::VALUE_FX
     * @uses self::VALUE_LX
     * @uses self::VALUE_XT
     * @uses self::VALUE_PT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FS,
            self::VALUE_LS,
            self::VALUE_SS,
            self::VALUE_FX,
            self::VALUE_LX,
            self::VALUE_XT,
            self::VALUE_PT,
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
