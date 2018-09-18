<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for BrowseModeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BrowseModeEnum
 * @subpackage Enumerations
 */
class BrowseModeEnum
{
    /**
     * Constant for value 'ListQueue'
     * @return string 'ListQueue'
     */
    const VALUE_LIST_QUEUE = 'ListQueue';
    /**
     * Constant for value 'QueueCount'
     * @return string 'QueueCount'
     */
    const VALUE_QUEUE_COUNT = 'QueueCount';
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
     * @uses self::VALUE_LIST_QUEUE
     * @uses self::VALUE_QUEUE_COUNT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LIST_QUEUE,
            self::VALUE_QUEUE_COUNT,
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
