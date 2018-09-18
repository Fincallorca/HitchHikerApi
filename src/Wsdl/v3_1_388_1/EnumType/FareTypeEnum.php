<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for FareTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareTypeEnum
 * @subpackage Enumerations
 */
class FareTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Pub'
     * @return string 'Pub'
     */
    const VALUE_PUB = 'Pub';
    /**
     * Constant for value 'Net'
     * @return string 'Net'
     */
    const VALUE_NET = 'Net';
    /**
     * Constant for value 'Web'
     * @return string 'Web'
     */
    const VALUE_WEB = 'Web';
    /**
     * Constant for value 'Charter'
     * @return string 'Charter'
     */
    const VALUE_CHARTER = 'Charter';
    /**
     * Constant for value 'Vayant'
     * @return string 'Vayant'
     */
    const VALUE_VAYANT = 'Vayant';
    /**
     * Constant for value 'GDS'
     * @return string 'GDS'
     */
    const VALUE_GDS = 'GDS';
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
     * @uses self::VALUE_PUB
     * @uses self::VALUE_NET
     * @uses self::VALUE_WEB
     * @uses self::VALUE_CHARTER
     * @uses self::VALUE_VAYANT
     * @uses self::VALUE_GDS
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_PUB,
            self::VALUE_NET,
            self::VALUE_WEB,
            self::VALUE_CHARTER,
            self::VALUE_VAYANT,
            self::VALUE_GDS,
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
