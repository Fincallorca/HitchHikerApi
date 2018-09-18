<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for TicketBookingTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketBookingTypeEnum
 * @subpackage Enumerations
 */
class TicketBookingTypeEnum
{
    /**
     * Constant for value 'IATA'
     * @return string 'IATA'
     */
    const VALUE_IATA = 'IATA';
    /**
     * Constant for value 'SATA'
     * @return string 'SATA'
     */
    const VALUE_SATA = 'SATA';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
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
     * @uses self::VALUE_IATA
     * @uses self::VALUE_SATA
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IATA,
            self::VALUE_SATA,
            self::VALUE_OTHER,
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
