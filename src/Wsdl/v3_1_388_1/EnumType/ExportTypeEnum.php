<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for ExportTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ExportTypeEnum
 * @subpackage Enumerations
 */
class ExportTypeEnum
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'Automator'
     * @return string 'Automator'
     */
    const VALUE_AUTOMATOR = 'Automator';
    /**
     * Constant for value 'Query'
     * @return string 'Query'
     */
    const VALUE_QUERY = 'Query';
    /**
     * Constant for value 'Amadeus'
     * @return string 'Amadeus'
     */
    const VALUE_AMADEUS = 'Amadeus';
    /**
     * Constant for value 'Galileo'
     * @return string 'Galileo'
     */
    const VALUE_GALILEO = 'Galileo';
    /**
     * Constant for value 'RFF'
     * @return string 'RFF'
     */
    const VALUE_RFF = 'RFF';
    /**
     * Constant for value 'STADAF'
     * @return string 'STADAF'
     */
    const VALUE_STADAF = 'STADAF';
    /**
     * Constant for value 'Print'
     * @return string 'Print'
     */
    const VALUE_PRINT = 'Print';
    /**
     * Constant for value 'Special'
     * @return string 'Special'
     */
    const VALUE_SPECIAL = 'Special';
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
     * @uses self::VALUE_AUTOMATOR
     * @uses self::VALUE_QUERY
     * @uses self::VALUE_AMADEUS
     * @uses self::VALUE_GALILEO
     * @uses self::VALUE_RFF
     * @uses self::VALUE_STADAF
     * @uses self::VALUE_PRINT
     * @uses self::VALUE_SPECIAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_AUTOMATOR,
            self::VALUE_QUERY,
            self::VALUE_AMADEUS,
            self::VALUE_GALILEO,
            self::VALUE_RFF,
            self::VALUE_STADAF,
            self::VALUE_PRINT,
            self::VALUE_SPECIAL,
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
