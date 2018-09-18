<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for TaskTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TaskTypeEnum
 * @subpackage Enumerations
 */
class TaskTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'SegmentCancellation'
     * @return string 'SegmentCancellation'
     */
    const VALUE_SEGMENT_CANCELLATION = 'SegmentCancellation';
    /**
     * Constant for value 'ScheduleChange'
     * @return string 'ScheduleChange'
     */
    const VALUE_SCHEDULE_CHANGE = 'ScheduleChange';
    /**
     * Constant for value 'QueueReplacement'
     * @return string 'QueueReplacement'
     */
    const VALUE_QUEUE_REPLACEMENT = 'QueueReplacement';
    /**
     * Constant for value 'AddRemaks'
     * @return string 'AddRemaks'
     */
    const VALUE_ADD_REMAKS = 'AddRemaks';
    /**
     * Constant for value 'AddOSI'
     * @return string 'AddOSI'
     */
    const VALUE_ADD_OSI = 'AddOSI';
    /**
     * Constant for value 'StatusChanged'
     * @return string 'StatusChanged'
     */
    const VALUE_STATUS_CHANGED = 'StatusChanged';
    /**
     * Constant for value 'NoScheduleChange'
     * @return string 'NoScheduleChange'
     */
    const VALUE_NO_SCHEDULE_CHANGE = 'NoScheduleChange';
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
     * @uses self::VALUE_SEGMENT_CANCELLATION
     * @uses self::VALUE_SCHEDULE_CHANGE
     * @uses self::VALUE_QUEUE_REPLACEMENT
     * @uses self::VALUE_ADD_REMAKS
     * @uses self::VALUE_ADD_OSI
     * @uses self::VALUE_STATUS_CHANGED
     * @uses self::VALUE_NO_SCHEDULE_CHANGE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_SEGMENT_CANCELLATION,
            self::VALUE_SCHEDULE_CHANGE,
            self::VALUE_QUEUE_REPLACEMENT,
            self::VALUE_ADD_REMAKS,
            self::VALUE_ADD_OSI,
            self::VALUE_STATUS_CHANGED,
            self::VALUE_NO_SCHEDULE_CHANGE,
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
