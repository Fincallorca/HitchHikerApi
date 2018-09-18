<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for CreditCard EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CreditCard
 * @subpackage Enumerations
 */
class CreditCard
{
    /**
     * Constant for value 'VISA'
     * @return string 'VISA'
     */
    const VALUE_VISA = 'VISA';
    /**
     * Constant for value 'MasterCard'
     * @return string 'MasterCard'
     */
    const VALUE_MASTER_CARD = 'MasterCard';
    /**
     * Constant for value 'AMEX'
     * @return string 'AMEX'
     */
    const VALUE_AMEX = 'AMEX';
    /**
     * Constant for value 'DINERS'
     * @return string 'DINERS'
     */
    const VALUE_DINERS = 'DINERS';
    /**
     * Constant for value 'JCB'
     * @return string 'JCB'
     */
    const VALUE_JCB = 'JCB';
    /**
     * Constant for value 'CBN'
     * @return string 'CBN'
     */
    const VALUE_CBN = 'CBN';
    /**
     * Constant for value 'SWITCH'
     * @return string 'SWITCH'
     */
    const VALUE_SWITCH = 'SWITCH';
    /**
     * Constant for value 'SOLO'
     * @return string 'SOLO'
     */
    const VALUE_SOLO = 'SOLO';
    /**
     * Constant for value 'Dankort'
     * @return string 'Dankort'
     */
    const VALUE_DANKORT = 'Dankort';
    /**
     * Constant for value 'ComfortCard'
     * @return string 'ComfortCard'
     */
    const VALUE_COMFORT_CARD = 'ComfortCard';
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
     * @uses self::VALUE_VISA
     * @uses self::VALUE_MASTER_CARD
     * @uses self::VALUE_AMEX
     * @uses self::VALUE_DINERS
     * @uses self::VALUE_JCB
     * @uses self::VALUE_CBN
     * @uses self::VALUE_SWITCH
     * @uses self::VALUE_SOLO
     * @uses self::VALUE_DANKORT
     * @uses self::VALUE_COMFORT_CARD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_VISA,
            self::VALUE_MASTER_CARD,
            self::VALUE_AMEX,
            self::VALUE_DINERS,
            self::VALUE_JCB,
            self::VALUE_CBN,
            self::VALUE_SWITCH,
            self::VALUE_SOLO,
            self::VALUE_DANKORT,
            self::VALUE_COMFORT_CARD,
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
