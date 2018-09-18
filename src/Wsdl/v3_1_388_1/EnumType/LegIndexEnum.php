<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for LegIndexEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LegIndexEnum
 * @subpackage Enumerations
 */
class LegIndexEnum
{
    /**
     * Constant for value 'ALL'
     * @return string 'ALL'
     */
    const VALUE_ALL = 'ALL';
    /**
     * Constant for value 'Outbound'
     * @return string 'Outbound'
     */
    const VALUE_OUTBOUND = 'Outbound';
    /**
     * Constant for value 'Inbound'
     * @return string 'Inbound'
     */
    const VALUE_INBOUND = 'Inbound';
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
     * @uses self::VALUE_ALL
     * @uses self::VALUE_OUTBOUND
     * @uses self::VALUE_INBOUND
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_OUTBOUND,
            self::VALUE_INBOUND,
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
