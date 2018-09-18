<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for PrefFareTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PrefFareTypeEnum
 * @subpackage Enumerations
 */
class PrefFareTypeEnum
{
    /**
     * Constant for value 'Cat35'
     * @return string 'Cat35'
     */
    const VALUE_CAT_35 = 'Cat35';
    /**
     * Constant for value 'Charter'
     * @return string 'Charter'
     */
    const VALUE_CHARTER = 'Charter';
    /**
     * Constant for value 'Conso'
     * @return string 'Conso'
     */
    const VALUE_CONSO = 'Conso';
    /**
     * Constant for value 'Corporate'
     * @return string 'Corporate'
     */
    const VALUE_CORPORATE = 'Corporate';
    /**
     * Constant for value 'DirectConnect'
     * @return string 'DirectConnect'
     */
    const VALUE_DIRECT_CONNECT = 'DirectConnect';
    /**
     * Constant for value 'Nego'
     * @return string 'Nego'
     */
    const VALUE_NEGO = 'Nego';
    /**
     * Constant for value 'Published'
     * @return string 'Published'
     */
    const VALUE_PUBLISHED = 'Published';
    /**
     * Constant for value 'TourOperator'
     * @return string 'TourOperator'
     */
    const VALUE_TOUR_OPERATOR = 'TourOperator';
    /**
     * Constant for value 'Web'
     * @return string 'Web'
     */
    const VALUE_WEB = 'Web';
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
     * @uses self::VALUE_CAT_35
     * @uses self::VALUE_CHARTER
     * @uses self::VALUE_CONSO
     * @uses self::VALUE_CORPORATE
     * @uses self::VALUE_DIRECT_CONNECT
     * @uses self::VALUE_NEGO
     * @uses self::VALUE_PUBLISHED
     * @uses self::VALUE_TOUR_OPERATOR
     * @uses self::VALUE_WEB
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CAT_35,
            self::VALUE_CHARTER,
            self::VALUE_CONSO,
            self::VALUE_CORPORATE,
            self::VALUE_DIRECT_CONNECT,
            self::VALUE_NEGO,
            self::VALUE_PUBLISHED,
            self::VALUE_TOUR_OPERATOR,
            self::VALUE_WEB,
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
