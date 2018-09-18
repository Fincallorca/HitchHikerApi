<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for IssueFareTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:IssueFareTypeEnum
 * @subpackage Enumerations
 */
class IssueFareTypeEnum
{
    /**
     * Constant for value 'IssueStoredFare'
     * @return string 'IssueStoredFare'
     */
    const VALUE_ISSUE_STORED_FARE = 'IssueStoredFare';
    /**
     * Constant for value 'ModifyAndIssueStoreFare'
     * @return string 'ModifyAndIssueStoreFare'
     */
    const VALUE_MODIFY_AND_ISSUE_STORE_FARE = 'ModifyAndIssueStoreFare';
    /**
     * Constant for value 'BuildAndIssueFare'
     * @return string 'BuildAndIssueFare'
     */
    const VALUE_BUILD_AND_ISSUE_FARE = 'BuildAndIssueFare';
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
     * @uses self::VALUE_ISSUE_STORED_FARE
     * @uses self::VALUE_MODIFY_AND_ISSUE_STORE_FARE
     * @uses self::VALUE_BUILD_AND_ISSUE_FARE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ISSUE_STORED_FARE,
            self::VALUE_MODIFY_AND_ISSUE_STORE_FARE,
            self::VALUE_BUILD_AND_ISSUE_FARE,
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
