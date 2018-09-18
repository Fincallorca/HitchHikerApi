<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for AllotmentRequestTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AllotmentRequestTypeEnum
 * @subpackage Enumerations
 */
class AllotmentRequestTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Escorted'
     * @return string 'Escorted'
     */
    const VALUE_ESCORTED = 'Escorted';
    /**
     * Constant for value 'Tour'
     * @return string 'Tour'
     */
    const VALUE_TOUR = 'Tour';
    /**
     * Constant for value 'Broker'
     * @return string 'Broker'
     */
    const VALUE_BROKER = 'Broker';
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
     * @uses self::VALUE_ESCORTED
     * @uses self::VALUE_TOUR
     * @uses self::VALUE_BROKER
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ESCORTED,
            self::VALUE_TOUR,
            self::VALUE_BROKER,
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
