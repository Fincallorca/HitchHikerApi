<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for StatusEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:StatusEnum
 * @subpackage Enumerations
 */
class StatusEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'NotAvailable'
     * @return string 'NotAvailable'
     */
    const VALUE_NOT_AVAILABLE = 'NotAvailable';
    /**
     * Constant for value 'Running'
     * @return string 'Running'
     */
    const VALUE_RUNNING = 'Running';
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
     * @uses self::VALUE_NOT_AVAILABLE
     * @uses self::VALUE_RUNNING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_NOT_AVAILABLE,
            self::VALUE_RUNNING,
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
