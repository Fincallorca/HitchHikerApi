<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for RuleTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RuleTypeEnum
 * @subpackage Enumerations
 */
class RuleTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'MiniRule'
     * @return string 'MiniRule'
     */
    const VALUE_MINI_RULE = 'MiniRule';
    /**
     * Constant for value 'MaxiRule'
     * @return string 'MaxiRule'
     */
    const VALUE_MAXI_RULE = 'MaxiRule';
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
     * @uses self::VALUE_MINI_RULE
     * @uses self::VALUE_MAXI_RULE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_MINI_RULE,
            self::VALUE_MAXI_RULE,
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
