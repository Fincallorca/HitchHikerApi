<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for TicketTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketTypeEnum
 * @subpackage Enumerations
 */
class TicketTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'ElectronicTicket'
     * @return string 'ElectronicTicket'
     */
    const VALUE_ELECTRONIC_TICKET = 'ElectronicTicket';
    /**
     * Constant for value 'PaperTicket'
     * @return string 'PaperTicket'
     */
    const VALUE_PAPER_TICKET = 'PaperTicket';
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
     * @uses self::VALUE_ELECTRONIC_TICKET
     * @uses self::VALUE_PAPER_TICKET
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ELECTRONIC_TICKET,
            self::VALUE_PAPER_TICKET,
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
