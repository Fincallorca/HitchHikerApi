<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for GDSTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GDSTypeEnum
 * @subpackage Enumerations
 */
class GDSTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Published'
     * @return string 'Published'
     */
    const VALUE_PUBLISHED = 'Published';
    /**
     * Constant for value 'Published'
     * @return string 'Published'
     */
    const VALUE_PUBLISHED_NEGOTIATED = 'Published Negotiated';
    /**
     * Constant for value 'Negotiated'
     * @return string 'Negotiated'
     */
    const VALUE_NEGOTIATED = 'Negotiated';
    /**
     * Constant for value 'Published'
     * @return string 'Published'
     */
    const VALUE_NEGOTIATED_PUBLISHED = 'Negotiated Published';
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
     * @uses self::VALUE_PUBLISHED
     * @uses self::VALUE_NEGOTIATED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_PUBLISHED,
            self::VALUE_PUBLISHED_NEGOTIATED,
            self::VALUE_NEGOTIATED,
            self::VALUE_NEGOTIATED_PUBLISHED,
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