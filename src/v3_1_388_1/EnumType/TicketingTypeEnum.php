<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for TicketingTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketingTypeEnum
 * @subpackage Enumerations
 */
class TicketingTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'PaperTicketing'
     * @return string 'PaperTicketing'
     */
    const VALUE_PAPER_TICKETING = 'PaperTicketing';
    /**
     * Constant for value 'ElectronicTicketing'
     * @return string 'ElectronicTicketing'
     */
    const VALUE_ELECTRONIC_TICKETING = 'ElectronicTicketing';
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
     * @uses self::VALUE_PAPER_TICKETING
     * @uses self::VALUE_ELECTRONIC_TICKETING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_PAPER_TICKETING,
            self::VALUE_ELECTRONIC_TICKETING,
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
