<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for FareDivsersityEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareDivsersityEnum
 * @subpackage Enumerations
 */
class FareDivsersityEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'AirlineDiversity'
     * @return string 'AirlineDiversity'
     */
    const VALUE_AIRLINE_DIVERSITY = 'AirlineDiversity';
    /**
     * Constant for value 'CabinClassDiversity'
     * @return string 'CabinClassDiversity'
     */
    const VALUE_CABIN_CLASS_DIVERSITY = 'CabinClassDiversity';
    /**
     * Constant for value 'CabinClassMixDiversity'
     * @return string 'CabinClassMixDiversity'
     */
    const VALUE_CABIN_CLASS_MIX_DIVERSITY = 'CabinClassMixDiversity';
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
     * @uses self::VALUE_AIRLINE_DIVERSITY
     * @uses self::VALUE_CABIN_CLASS_DIVERSITY
     * @uses self::VALUE_CABIN_CLASS_MIX_DIVERSITY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_AIRLINE_DIVERSITY,
            self::VALUE_CABIN_CLASS_DIVERSITY,
            self::VALUE_CABIN_CLASS_MIX_DIVERSITY,
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
