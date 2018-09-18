<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for TaxOverrideAction EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TaxOverrideAction
 * @subpackage Enumerations
 */
class TaxOverrideAction
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Overridden'
     * @return string 'Overridden'
     */
    const VALUE_OVERRIDDEN = 'Overridden';
    /**
     * Constant for value 'Ignored'
     * @return string 'Ignored'
     */
    const VALUE_IGNORED = 'Ignored';
    /**
     * Constant for value 'Added'
     * @return string 'Added'
     */
    const VALUE_ADDED = 'Added';
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
     * @uses self::VALUE_OVERRIDDEN
     * @uses self::VALUE_IGNORED
     * @uses self::VALUE_ADDED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_OVERRIDDEN,
            self::VALUE_IGNORED,
            self::VALUE_ADDED,
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
