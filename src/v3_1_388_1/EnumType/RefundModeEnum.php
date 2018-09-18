<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for RefundModeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RefundModeEnum
 * @subpackage Enumerations
 */
class RefundModeEnum
{
    /**
     * Constant for value 'Void'
     * @return string 'Void'
     */
    const VALUE_VOID = 'Void';
    /**
     * Constant for value 'FullRefund'
     * @return string 'FullRefund'
     */
    const VALUE_FULL_REFUND = 'FullRefund';
    /**
     * Constant for value 'PartialRefund'
     * @return string 'PartialRefund'
     */
    const VALUE_PARTIAL_REFUND = 'PartialRefund';
    /**
     * Constant for value 'EMDRefund'
     * @return string 'EMDRefund'
     */
    const VALUE_EMDREFUND = 'EMDRefund';
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
     * @uses self::VALUE_VOID
     * @uses self::VALUE_FULL_REFUND
     * @uses self::VALUE_PARTIAL_REFUND
     * @uses self::VALUE_EMDREFUND
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_VOID,
            self::VALUE_FULL_REFUND,
            self::VALUE_PARTIAL_REFUND,
            self::VALUE_EMDREFUND,
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
