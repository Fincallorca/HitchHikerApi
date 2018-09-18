<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for FareRestrictionEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareRestrictionEnum
 * @subpackage Enumerations
 */
class FareRestrictionEnum
{
    /**
     * Constant for value 'NONE'
     * @return string 'NONE'
     */
    const VALUE_NONE = 'NONE';
    /**
     * Constant for value 'NRE'
     * @return string 'NRE'
     */
    const VALUE_NRE = 'NRE';
    /**
     * Constant for value 'RES'
     * @return string 'RES'
     */
    const VALUE_RES = 'RES';
    /**
     * Constant for value 'NPE'
     * @return string 'NPE'
     */
    const VALUE_NPE = 'NPE';
    /**
     * Constant for value 'PEN'
     * @return string 'PEN'
     */
    const VALUE_PEN = 'PEN';
    /**
     * Constant for value 'REF'
     * @return string 'REF'
     */
    const VALUE_REF = 'REF';
    /**
     * Constant for value 'NRF'
     * @return string 'NRF'
     */
    const VALUE_NRF = 'NRF';
    /**
     * Constant for value 'NAP'
     * @return string 'NAP'
     */
    const VALUE_NAP = 'NAP';
    /**
     * Constant for value 'APU'
     * @return string 'APU'
     */
    const VALUE_APU = 'APU';
    /**
     * Constant for value 'NMM'
     * @return string 'NMM'
     */
    const VALUE_NMM = 'NMM';
    /**
     * Constant for value 'MMS'
     * @return string 'MMS'
     */
    const VALUE_MMS = 'MMS';
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
     * @uses self::VALUE_NRE
     * @uses self::VALUE_RES
     * @uses self::VALUE_NPE
     * @uses self::VALUE_PEN
     * @uses self::VALUE_REF
     * @uses self::VALUE_NRF
     * @uses self::VALUE_NAP
     * @uses self::VALUE_APU
     * @uses self::VALUE_NMM
     * @uses self::VALUE_MMS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_NRE,
            self::VALUE_RES,
            self::VALUE_NPE,
            self::VALUE_PEN,
            self::VALUE_REF,
            self::VALUE_NRF,
            self::VALUE_NAP,
            self::VALUE_APU,
            self::VALUE_NMM,
            self::VALUE_MMS,
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
