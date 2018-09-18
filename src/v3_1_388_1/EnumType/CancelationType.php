<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for CancelationType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CancelationType
 * @subpackage Enumerations
 */
class CancelationType
{
    /**
     * Constant for value 'CNX_BeforeTicketing'
     * @return string 'CNX_BeforeTicketing'
     */
    const VALUE_CNX_BEFORE_TICKETING = 'CNX_BeforeTicketing';
    /**
     * Constant for value 'CNX_AfterTicketing'
     * @return string 'CNX_AfterTicketing'
     */
    const VALUE_CNX_AFTER_TICKETING = 'CNX_AfterTicketing';
    /**
     * Constant for value 'CNX_AfterDeparture'
     * @return string 'CNX_AfterDeparture'
     */
    const VALUE_CNX_AFTER_DEPARTURE = 'CNX_AfterDeparture';
    /**
     * Constant for value 'CNX_Itinerary'
     * @return string 'CNX_Itinerary'
     */
    const VALUE_CNX_ITINERARY = 'CNX_Itinerary';
    /**
     * Constant for value 'CNX_DateChange'
     * @return string 'CNX_DateChange'
     */
    const VALUE_CNX_DATE_CHANGE = 'CNX_DateChange';
    /**
     * Constant for value 'RBK_BeforeTicketing'
     * @return string 'RBK_BeforeTicketing'
     */
    const VALUE_RBK_BEFORE_TICKETING = 'RBK_BeforeTicketing';
    /**
     * Constant for value 'RBK_AfterTicketing'
     * @return string 'RBK_AfterTicketing'
     */
    const VALUE_RBK_AFTER_TICKETING = 'RBK_AfterTicketing';
    /**
     * Constant for value 'RBK_BeforeDeparture'
     * @return string 'RBK_BeforeDeparture'
     */
    const VALUE_RBK_BEFORE_DEPARTURE = 'RBK_BeforeDeparture';
    /**
     * Constant for value 'RBK_NoShow'
     * @return string 'RBK_NoShow'
     */
    const VALUE_RBK_NO_SHOW = 'RBK_NoShow';
    /**
     * Constant for value 'RBK_Refund'
     * @return string 'RBK_Refund'
     */
    const VALUE_RBK_REFUND = 'RBK_Refund';
    /**
     * Constant for value 'RBK_RefundAfterDeparture'
     * @return string 'RBK_RefundAfterDeparture'
     */
    const VALUE_RBK_REFUND_AFTER_DEPARTURE = 'RBK_RefundAfterDeparture';
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
     * @uses self::VALUE_CNX_BEFORE_TICKETING
     * @uses self::VALUE_CNX_AFTER_TICKETING
     * @uses self::VALUE_CNX_AFTER_DEPARTURE
     * @uses self::VALUE_CNX_ITINERARY
     * @uses self::VALUE_CNX_DATE_CHANGE
     * @uses self::VALUE_RBK_BEFORE_TICKETING
     * @uses self::VALUE_RBK_AFTER_TICKETING
     * @uses self::VALUE_RBK_BEFORE_DEPARTURE
     * @uses self::VALUE_RBK_NO_SHOW
     * @uses self::VALUE_RBK_REFUND
     * @uses self::VALUE_RBK_REFUND_AFTER_DEPARTURE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CNX_BEFORE_TICKETING,
            self::VALUE_CNX_AFTER_TICKETING,
            self::VALUE_CNX_AFTER_DEPARTURE,
            self::VALUE_CNX_ITINERARY,
            self::VALUE_CNX_DATE_CHANGE,
            self::VALUE_RBK_BEFORE_TICKETING,
            self::VALUE_RBK_AFTER_TICKETING,
            self::VALUE_RBK_BEFORE_DEPARTURE,
            self::VALUE_RBK_NO_SHOW,
            self::VALUE_RBK_REFUND,
            self::VALUE_RBK_REFUND_AFTER_DEPARTURE,
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
