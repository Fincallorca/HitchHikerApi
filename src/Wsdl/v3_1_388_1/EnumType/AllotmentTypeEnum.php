<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for AllotmentTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AllotmentTypeEnum
 * @subpackage Enumerations
 */
class AllotmentTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_GROUPBOOKING_ONLINE
     * @uses self::VALUE_GROUPBOOKING_OFFLINE
     * @uses self::VALUE_BOOKINGCLASS
     * @uses self::VALUE_VIRTUAL
     * @uses self::VALUE_NEGOSPACE
     * @uses self::VALUE_PROSPECTIVE
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_GROUPBOOKING_ONLINE,
            self::VALUE_GROUPBOOKING_OFFLINE,
            self::VALUE_BOOKINGCLASS,
            self::VALUE_VIRTUAL,
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
