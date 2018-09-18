<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for AcceptSurchargeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AcceptSurchargeEnum
 * @subpackage Enumerations
 */
class AcceptSurchargeEnum
{
    /**
     * Constant for value 'DoNotRebook'
     * @return string 'DoNotRebook'
     */
    const VALUE_DO_NOT_REBOOK = 'DoNotRebook';
    /**
     * Constant for value 'NoSurcharge'
     * @return string 'NoSurcharge'
     */
    const VALUE_NO_SURCHARGE = 'NoSurcharge';
    /**
     * Constant for value 'SurchargePercent'
     * @return string 'SurchargePercent'
     */
    const VALUE_SURCHARGE_PERCENT = 'SurchargePercent';
    /**
     * Constant for value 'SurchargeAmount'
     * @return string 'SurchargeAmount'
     */
    const VALUE_SURCHARGE_AMOUNT = 'SurchargeAmount';
    /**
     * Constant for value 'AnySurcharge'
     * @return string 'AnySurcharge'
     */
    const VALUE_ANY_SURCHARGE = 'AnySurcharge';
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
     * @uses self::VALUE_DO_NOT_REBOOK
     * @uses self::VALUE_NO_SURCHARGE
     * @uses self::VALUE_SURCHARGE_PERCENT
     * @uses self::VALUE_SURCHARGE_AMOUNT
     * @uses self::VALUE_ANY_SURCHARGE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DO_NOT_REBOOK,
            self::VALUE_NO_SURCHARGE,
            self::VALUE_SURCHARGE_PERCENT,
            self::VALUE_SURCHARGE_AMOUNT,
            self::VALUE_ANY_SURCHARGE,
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
