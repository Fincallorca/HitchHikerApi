<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for TariffTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TariffTypeEnum
 * @subpackage Enumerations
 */
class TariffTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Consolidator'
     * @return string 'Consolidator'
     */
    const VALUE_CONSOLIDATOR = 'Consolidator';
    /**
     * Constant for value 'Touroperator'
     * @return string 'Touroperator'
     */
    const VALUE_TOUROPERATOR = 'Touroperator';
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
     * @uses self::VALUE_CONSOLIDATOR
     * @uses self::VALUE_TOUROPERATOR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_CONSOLIDATOR,
            self::VALUE_TOUROPERATOR,
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
