<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for CheckTaxEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CheckTaxEnum
 * @subpackage Enumerations
 */
class CheckTaxEnum
{
    /**
     * Constant for value 'NoTaxForecast'
     * @return string 'NoTaxForecast'
     */
    const VALUE_NO_TAX_FORECAST = 'NoTaxForecast';
    /**
     * Constant for value 'CRSTaxForecast'
     * @return string 'CRSTaxForecast'
     */
    const VALUE_CRSTAX_FORECAST = 'CRSTaxForecast';
    /**
     * Constant for value 'DBTaxForecast'
     * @return string 'DBTaxForecast'
     */
    const VALUE_DBTAX_FORECAST = 'DBTaxForecast';
    /**
     * Constant for value 'VayantTaxForecast'
     * @return string 'VayantTaxForecast'
     */
    const VALUE_VAYANT_TAX_FORECAST = 'VayantTaxForecast';
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
     * @uses self::VALUE_NO_TAX_FORECAST
     * @uses self::VALUE_CRSTAX_FORECAST
     * @uses self::VALUE_DBTAX_FORECAST
     * @uses self::VALUE_VAYANT_TAX_FORECAST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_TAX_FORECAST,
            self::VALUE_CRSTAX_FORECAST,
            self::VALUE_DBTAX_FORECAST,
            self::VALUE_VAYANT_TAX_FORECAST,
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
