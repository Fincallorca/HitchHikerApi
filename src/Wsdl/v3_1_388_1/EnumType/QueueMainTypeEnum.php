<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for QueueMainTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QueueMainTypeEnum
 * @subpackage Enumerations
 */
class QueueMainTypeEnum
{
    /**
     * Constant for value 'Master'
     * @return string 'Master'
     */
    const VALUE_MASTER = 'Master';
    /**
     * Constant for value 'SpecialPubfares'
     * @return string 'SpecialPubfares'
     */
    const VALUE_SPECIAL_PUBFARES = 'SpecialPubfares';
    /**
     * Constant for value 'SpecialNetfares'
     * @return string 'SpecialNetfares'
     */
    const VALUE_SPECIAL_NETFARES = 'SpecialNetfares';
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
     * @uses self::VALUE_MASTER
     * @uses self::VALUE_SPECIAL_PUBFARES
     * @uses self::VALUE_SPECIAL_NETFARES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MASTER,
            self::VALUE_SPECIAL_PUBFARES,
            self::VALUE_SPECIAL_NETFARES,
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
