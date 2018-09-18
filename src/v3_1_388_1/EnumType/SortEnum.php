<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for SortEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SortEnum
 * @subpackage Enumerations
 */
class SortEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'TotalSellPrice'
     * @return string 'TotalSellPrice'
     */
    const VALUE_TOTAL_SELL_PRICE = 'TotalSellPrice';
    /**
     * Constant for value 'TotalBuyPrice'
     * @return string 'TotalBuyPrice'
     */
    const VALUE_TOTAL_BUY_PRICE = 'TotalBuyPrice';
    /**
     * Constant for value 'IncludeTax'
     * @return string 'IncludeTax'
     */
    const VALUE_INCLUDE_TAX = 'IncludeTax';
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
     * @uses self::VALUE_TOTAL_SELL_PRICE
     * @uses self::VALUE_TOTAL_BUY_PRICE
     * @uses self::VALUE_INCLUDE_TAX
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_TOTAL_SELL_PRICE,
            self::VALUE_TOTAL_BUY_PRICE,
            self::VALUE_INCLUDE_TAX,
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
