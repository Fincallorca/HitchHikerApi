<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for ActionTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ActionTypeEnum
 * @subpackage Enumerations
 */
class ActionTypeEnum
{
    /**
     * Constant for value 'IfRulesValidated'
     * @return string 'IfRulesValidated'
     */
    const VALUE_IF_RULES_VALIDATED = 'IfRulesValidated';
    /**
     * Constant for value 'IfRulesFailed'
     * @return string 'IfRulesFailed'
     */
    const VALUE_IF_RULES_FAILED = 'IfRulesFailed';
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
     * @uses self::VALUE_IF_RULES_VALIDATED
     * @uses self::VALUE_IF_RULES_FAILED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IF_RULES_VALIDATED,
            self::VALUE_IF_RULES_FAILED,
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
