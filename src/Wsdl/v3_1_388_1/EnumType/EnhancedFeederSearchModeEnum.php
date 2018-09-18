<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for EnhancedFeederSearchModeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EnhancedFeederSearchModeEnum
 * @subpackage Enumerations
 */
class EnhancedFeederSearchModeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'EFSearch'
     * @return string 'EFSearch'
     */
    const VALUE_EFSEARCH = 'EFSearch';
    /**
     * Constant for value 'EFSearchOnlyWithNoAvail'
     * @return string 'EFSearchOnlyWithNoAvail'
     */
    const VALUE_EFSEARCH_ONLY_WITH_NO_AVAIL = 'EFSearchOnlyWithNoAvail';
    /**
     * Constant for value 'EFStopCheckingTwice'
     * @return string 'EFStopCheckingTwice'
     */
    const VALUE_EFSTOP_CHECKING_TWICE = 'EFStopCheckingTwice';
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
     * @uses self::VALUE_EFSEARCH
     * @uses self::VALUE_EFSEARCH_ONLY_WITH_NO_AVAIL
     * @uses self::VALUE_EFSTOP_CHECKING_TWICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_EFSEARCH,
            self::VALUE_EFSEARCH_ONLY_WITH_NO_AVAIL,
            self::VALUE_EFSTOP_CHECKING_TWICE,
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
