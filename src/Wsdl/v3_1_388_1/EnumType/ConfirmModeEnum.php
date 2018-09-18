<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for ConfirmModeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ConfirmModeEnum
 * @subpackage Enumerations
 */
class ConfirmModeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'ConfirmIfLater'
     * @return string 'ConfirmIfLater'
     */
    const VALUE_CONFIRM_IF_LATER = 'ConfirmIfLater';
    /**
     * Constant for value 'ConfirmIfEarlier'
     * @return string 'ConfirmIfEarlier'
     */
    const VALUE_CONFIRM_IF_EARLIER = 'ConfirmIfEarlier';
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
     * @uses self::VALUE_CONFIRM_IF_LATER
     * @uses self::VALUE_CONFIRM_IF_EARLIER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_CONFIRM_IF_LATER,
            self::VALUE_CONFIRM_IF_EARLIER,
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
