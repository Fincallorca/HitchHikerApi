<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for AllotmentCategoryEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AllotmentCategoryEnum
 * @subpackage Enumerations
 */
class AllotmentCategoryEnum
{
    /**
     * Constant for value 'Default'
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'High'
     * @return string 'High'
     */
    const VALUE_HIGH = 'High';
    /**
     * Constant for value 'Low'
     * @return string 'Low'
     */
    const VALUE_LOW = 'Low';
    /**
     * Constant for value 'OnlyAllotments'
     * @return string 'OnlyAllotments'
     */
    const VALUE_ONLY_ALLOTMENTS = 'OnlyAllotments';
    /**
     * Constant for value 'GroupbookingOnline'
     * @return string 'GroupbookingOnline'
     */
    const VALUE_GROUPBOOKING_ONLINE = 'GroupbookingOnline';
    /**
     * Constant for value 'GroupbookingOffline'
     * @return string 'GroupbookingOffline'
     */
    const VALUE_GROUPBOOKING_OFFLINE = 'GroupbookingOffline';
    /**
     * Constant for value 'Bookingclass'
     * @return string 'Bookingclass'
     */
    const VALUE_BOOKINGCLASS = 'Bookingclass';
    /**
     * Constant for value 'Virtual'
     * @return string 'Virtual'
     */
    const VALUE_VIRTUAL = 'Virtual';
    /**
     * Constant for value 'OnlyCritical'
     * @return string 'OnlyCritical'
     */
    const VALUE_ONLY_CRITICAL = 'OnlyCritical';
    /**
     * Constant for value 'Enhanced'
     * @return string 'Enhanced'
     */
    const VALUE_ENHANCED = 'Enhanced';
    /**
     * Constant for value 'IgnoreAllDeadlines'
     * @return string 'IgnoreAllDeadlines'
     */
    const VALUE_IGNORE_ALL_DEADLINES = 'IgnoreAllDeadlines';
    /**
     * Constant for value 'Negospace'
     * @return string 'Negospace'
     */
    const VALUE_NEGOSPACE = 'Negospace';
    /**
     * Constant for value 'Prospective'
     * @return string 'Prospective'
     */
    const VALUE_PROSPECTIVE = 'Prospective';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
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
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_HIGH
     * @uses self::VALUE_LOW
     * @uses self::VALUE_ONLY_ALLOTMENTS
     * @uses self::VALUE_GROUPBOOKING_ONLINE
     * @uses self::VALUE_GROUPBOOKING_OFFLINE
     * @uses self::VALUE_BOOKINGCLASS
     * @uses self::VALUE_VIRTUAL
     * @uses self::VALUE_ONLY_CRITICAL
     * @uses self::VALUE_ENHANCED
     * @uses self::VALUE_IGNORE_ALL_DEADLINES
     * @uses self::VALUE_NEGOSPACE
     * @uses self::VALUE_PROSPECTIVE
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEFAULT,
            self::VALUE_HIGH,
            self::VALUE_LOW,
            self::VALUE_ONLY_ALLOTMENTS,
            self::VALUE_GROUPBOOKING_ONLINE,
            self::VALUE_GROUPBOOKING_OFFLINE,
            self::VALUE_BOOKINGCLASS,
            self::VALUE_VIRTUAL,
            self::VALUE_ONLY_CRITICAL,
            self::VALUE_ENHANCED,
            self::VALUE_IGNORE_ALL_DEADLINES,
            self::VALUE_NEGOSPACE,
            self::VALUE_PROSPECTIVE,
            self::VALUE_ALL,
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
