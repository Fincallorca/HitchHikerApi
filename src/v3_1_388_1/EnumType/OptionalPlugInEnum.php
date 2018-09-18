<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for OptionalPlugInEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:OptionalPlugInEnum
 * @subpackage Enumerations
 */
class OptionalPlugInEnum
{
    /**
     * Constant for value 'defaultPlugIn'
     * @return string 'defaultPlugIn'
     */
    const VALUE_DEFAULT_PLUG_IN = 'defaultPlugIn';
    /**
     * Constant for value 'optionalPlugInAgent'
     * @return string 'optionalPlugInAgent'
     */
    const VALUE_OPTIONAL_PLUG_IN_AGENT = 'optionalPlugInAgent';
    /**
     * Constant for value 'optionalPlugInStandard'
     * @return string 'optionalPlugInStandard'
     */
    const VALUE_OPTIONAL_PLUG_IN_STANDARD = 'optionalPlugInStandard';
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
     * @uses self::VALUE_DEFAULT_PLUG_IN
     * @uses self::VALUE_OPTIONAL_PLUG_IN_AGENT
     * @uses self::VALUE_OPTIONAL_PLUG_IN_STANDARD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEFAULT_PLUG_IN,
            self::VALUE_OPTIONAL_PLUG_IN_AGENT,
            self::VALUE_OPTIONAL_PLUG_IN_STANDARD,
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
