<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for QuoteSurchargeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QuoteSurchargeEnum
 * @subpackage Enumerations
 */
class QuoteSurchargeEnum
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'RuleSurcharge'
     * @return string 'RuleSurcharge'
     */
    const VALUE_RULE_SURCHARGE = 'RuleSurcharge';
    /**
     * Constant for value 'StopSurcharge'
     * @return string 'StopSurcharge'
     */
    const VALUE_STOP_SURCHARGE = 'StopSurcharge';
    /**
     * Constant for value 'SegmentSurcharge'
     * @return string 'SegmentSurcharge'
     */
    const VALUE_SEGMENT_SURCHARGE = 'SegmentSurcharge';
    /**
     * Constant for value 'SegmentQSurcharge'
     * @return string 'SegmentQSurcharge'
     */
    const VALUE_SEGMENT_QSURCHARGE = 'SegmentQSurcharge';
    /**
     * Constant for value 'RuleDiscount'
     * @return string 'RuleDiscount'
     */
    const VALUE_RULE_DISCOUNT = 'RuleDiscount';
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
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_RULE_SURCHARGE
     * @uses self::VALUE_STOP_SURCHARGE
     * @uses self::VALUE_SEGMENT_SURCHARGE
     * @uses self::VALUE_SEGMENT_QSURCHARGE
     * @uses self::VALUE_RULE_DISCOUNT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_RULE_SURCHARGE,
            self::VALUE_STOP_SURCHARGE,
            self::VALUE_SEGMENT_SURCHARGE,
            self::VALUE_SEGMENT_QSURCHARGE,
            self::VALUE_RULE_DISCOUNT,
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
