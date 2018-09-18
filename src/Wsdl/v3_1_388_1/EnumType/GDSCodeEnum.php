<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for GDSCodeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GDSCodeEnum
 * @subpackage Enumerations
 */
class GDSCodeEnum
{
    /**
     * Constant for value 'AMA'
     * @return string 'AMA'
     */
    const VALUE_AMA = 'AMA';
    /**
     * Constant for value 'GAL'
     * @return string 'GAL'
     */
    const VALUE_GAL = 'GAL';
    /**
     * Constant for value 'SAB'
     * @return string 'SAB'
     */
    const VALUE_SAB = 'SAB';
    /**
     * Constant for value 'WSP'
     * @return string 'WSP'
     */
    const VALUE_WSP = 'WSP';
    /**
     * Constant for value 'MCH'
     * @return string 'MCH'
     */
    const VALUE_MCH = 'MCH';
    /**
     * Constant for value 'SPC'
     * @return string 'SPC'
     */
    const VALUE_SPC = 'SPC';
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
     * @uses self::VALUE_AMA
     * @uses self::VALUE_GAL
     * @uses self::VALUE_SAB
     * @uses self::VALUE_WSP
     * @uses self::VALUE_MCH
     * @uses self::VALUE_SPC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AMA,
            self::VALUE_GAL,
            self::VALUE_SAB,
            self::VALUE_WSP,
            self::VALUE_MCH,
            self::VALUE_SPC,
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
