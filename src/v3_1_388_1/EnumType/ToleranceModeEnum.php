<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for ToleranceModeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ToleranceModeEnum
 * @subpackage Enumerations
 */
class ToleranceModeEnum
{
    /**
     * Constant for value 'Default'
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'CheckAllDatesSequential'
     * @return string 'CheckAllDatesSequential'
     */
    const VALUE_CHECK_ALL_DATES_SEQUENTIAL = 'CheckAllDatesSequential';
    /**
     * Constant for value 'CheckAllDatesOutParallelAndInSeq'
     * @return string 'CheckAllDatesOutParallelAndInSeq'
     */
    const VALUE_CHECK_ALL_DATES_OUT_PARALLEL_AND_IN_SEQ = 'CheckAllDatesOutParallelAndInSeq';
    /**
     * Constant for value 'CheckAllDateInAndOutParallel'
     * @return string 'CheckAllDateInAndOutParallel'
     */
    const VALUE_CHECK_ALL_DATE_IN_AND_OUT_PARALLEL = 'CheckAllDateInAndOutParallel';
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
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_CHECK_ALL_DATES_SEQUENTIAL
     * @uses self::VALUE_CHECK_ALL_DATES_OUT_PARALLEL_AND_IN_SEQ
     * @uses self::VALUE_CHECK_ALL_DATE_IN_AND_OUT_PARALLEL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEFAULT,
            self::VALUE_CHECK_ALL_DATES_SEQUENTIAL,
            self::VALUE_CHECK_ALL_DATES_OUT_PARALLEL_AND_IN_SEQ,
            self::VALUE_CHECK_ALL_DATE_IN_AND_OUT_PARALLEL,
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
