<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for QSurchargeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QSurchargeEnum
 * @subpackage Enumerations
 */
class QSurchargeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CRS'
     * @return string 'CRS'
     */
    const VALUE_CRS = 'CRS';
    /**
     * Constant for value 'vFEntryDB'
     * @return string 'vFEntryDB'
     */
    const VALUE_V_FENTRY_DB = 'vFEntryDB';
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
     * @uses self::VALUE_CRS
     * @uses self::VALUE_V_FENTRY_DB
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_CRS,
            self::VALUE_V_FENTRY_DB,
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
