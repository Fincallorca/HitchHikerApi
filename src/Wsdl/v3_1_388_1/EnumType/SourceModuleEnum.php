<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for SourceModuleEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SourceModuleEnum
 * @subpackage Enumerations
 */
class SourceModuleEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'IBESource'
     * @return string 'IBESource'
     */
    const VALUE_IBESOURCE = 'IBESource';
    /**
     * Constant for value 'WebSource'
     * @return string 'WebSource'
     */
    const VALUE_WEB_SOURCE = 'WebSource';
    /**
     * Constant for value 'CharterSource'
     * @return string 'CharterSource'
     */
    const VALUE_CHARTER_SOURCE = 'CharterSource';
    /**
     * Constant for value 'VayantSource'
     * @return string 'VayantSource'
     */
    const VALUE_VAYANT_SOURCE = 'VayantSource';
    /**
     * Constant for value 'GDSSource'
     * @return string 'GDSSource'
     */
    const VALUE_GDSSOURCE = 'GDSSource';
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
     * @uses self::VALUE_IBESOURCE
     * @uses self::VALUE_WEB_SOURCE
     * @uses self::VALUE_CHARTER_SOURCE
     * @uses self::VALUE_VAYANT_SOURCE
     * @uses self::VALUE_GDSSOURCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_IBESOURCE,
            self::VALUE_WEB_SOURCE,
            self::VALUE_CHARTER_SOURCE,
            self::VALUE_VAYANT_SOURCE,
            self::VALUE_GDSSOURCE,
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
