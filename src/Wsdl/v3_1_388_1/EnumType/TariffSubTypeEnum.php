<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for TariffSubTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TariffSubTypeEnum
 * @subpackage Enumerations
 */
class TariffSubTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Net'
     * @return string 'Net'
     */
    const VALUE_NET = 'Net';
    /**
     * Constant for value 'Published'
     * @return string 'Published'
     */
    const VALUE_PUBLISHED = 'Published';
    /**
     * Constant for value 'Corporate'
     * @return string 'Corporate'
     */
    const VALUE_CORPORATE = 'Corporate';
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
     * @uses self::VALUE_NET
     * @uses self::VALUE_PUBLISHED
     * @uses self::VALUE_CORPORATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_NET,
            self::VALUE_PUBLISHED,
            self::VALUE_CORPORATE,
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
