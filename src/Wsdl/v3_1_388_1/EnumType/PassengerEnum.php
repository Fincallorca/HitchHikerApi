<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for PassengerEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PassengerEnum
 * @subpackage Enumerations
 */
class PassengerEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Adult'
     * @return string 'Adult'
     */
    const VALUE_ADULT = 'Adult';
    /**
     * Constant for value 'Child'
     * @return string 'Child'
     */
    const VALUE_CHILD = 'Child';
    /**
     * Constant for value 'Infant'
     * @return string 'Infant'
     */
    const VALUE_INFANT = 'Infant';
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
     * @uses self::VALUE_ADULT
     * @uses self::VALUE_CHILD
     * @uses self::VALUE_INFANT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ADULT,
            self::VALUE_CHILD,
            self::VALUE_INFANT,
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
