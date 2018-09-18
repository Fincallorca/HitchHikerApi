<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for ProcessModeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ProcessModeEnum
 * @subpackage Enumerations
 */
class ProcessModeEnum
{
    /**
     * Constant for value 'ScheduleChange'
     * @return string 'ScheduleChange'
     */
    const VALUE_SCHEDULE_CHANGE = 'ScheduleChange';
    /**
     * Constant for value 'ConfirmWaitlist'
     * @return string 'ConfirmWaitlist'
     */
    const VALUE_CONFIRM_WAITLIST = 'ConfirmWaitlist';
    /**
     * Constant for value 'ConfirmWaitlistAndCancelProtection'
     * @return string 'ConfirmWaitlistAndCancelProtection'
     */
    const VALUE_CONFIRM_WAITLIST_AND_CANCEL_PROTECTION = 'ConfirmWaitlistAndCancelProtection';
    /**
     * Constant for value 'ConfirmSSR'
     * @return string 'ConfirmSSR'
     */
    const VALUE_CONFIRM_SSR = 'ConfirmSSR';
    /**
     * Constant for value 'RemoveCancelled'
     * @return string 'RemoveCancelled'
     */
    const VALUE_REMOVE_CANCELLED = 'RemoveCancelled';
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
     * @uses self::VALUE_SCHEDULE_CHANGE
     * @uses self::VALUE_CONFIRM_WAITLIST
     * @uses self::VALUE_CONFIRM_WAITLIST_AND_CANCEL_PROTECTION
     * @uses self::VALUE_CONFIRM_SSR
     * @uses self::VALUE_REMOVE_CANCELLED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SCHEDULE_CHANGE,
            self::VALUE_CONFIRM_WAITLIST,
            self::VALUE_CONFIRM_WAITLIST_AND_CANCEL_PROTECTION,
            self::VALUE_CONFIRM_SSR,
            self::VALUE_REMOVE_CANCELLED,
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
