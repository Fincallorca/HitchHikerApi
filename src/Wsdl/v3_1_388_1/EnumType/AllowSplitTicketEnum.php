<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for AllowSplitTicketEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AllowSplitTicketEnum
 * @subpackage Enumerations
 */
class AllowSplitTicketEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'PointOfTurnaround'
     * @return string 'PointOfTurnaround'
     */
    const VALUE_POINT_OF_TURNAROUND = 'PointOfTurnaround';
    /**
     * Constant for value 'Everywhere'
     * @return string 'Everywhere'
     */
    const VALUE_EVERYWHERE = 'Everywhere';
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
     * @uses self::VALUE_POINT_OF_TURNAROUND
     * @uses self::VALUE_EVERYWHERE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_POINT_OF_TURNAROUND,
            self::VALUE_EVERYWHERE,
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
