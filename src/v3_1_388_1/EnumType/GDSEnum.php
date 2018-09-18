<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for GDSEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GDSEnum
 * @subpackage Enumerations
 */
class GDSEnum
{
    /**
     * Constant for value 'NONE'
     * @return string 'NONE'
     */
    const VALUE_NONE = 'NONE';
    /**
     * Constant for value 'AmadeusAPI'
     * @return string 'AmadeusAPI'
     */
    const VALUE_AMADEUS_API = 'AmadeusAPI';
    /**
     * Constant for value 'GalileoXML'
     * @return string 'GalileoXML'
     */
    const VALUE_GALILEO_XML = 'GalileoXML';
    /**
     * Constant for value 'SabreSDS'
     * @return string 'SabreSDS'
     */
    const VALUE_SABRE_SDS = 'SabreSDS';
    /**
     * Constant for value 'WorldspanSMI'
     * @return string 'WorldspanSMI'
     */
    const VALUE_WORLDSPAN_SMI = 'WorldspanSMI';
    /**
     * Constant for value 'MultiChannel'
     * @return string 'MultiChannel'
     */
    const VALUE_MULTI_CHANNEL = 'MultiChannel';
    /**
     * Constant for value 'SpecialGDS'
     * @return string 'SpecialGDS'
     */
    const VALUE_SPECIAL_GDS = 'SpecialGDS';
    /**
     * Constant for value 'AbacusSDS'
     * @return string 'AbacusSDS'
     */
    const VALUE_ABACUS_SDS = 'AbacusSDS';
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
     * @uses self::VALUE_AMADEUS_API
     * @uses self::VALUE_GALILEO_XML
     * @uses self::VALUE_SABRE_SDS
     * @uses self::VALUE_WORLDSPAN_SMI
     * @uses self::VALUE_MULTI_CHANNEL
     * @uses self::VALUE_SPECIAL_GDS
     * @uses self::VALUE_ABACUS_SDS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_AMADEUS_API,
            self::VALUE_GALILEO_XML,
            self::VALUE_SABRE_SDS,
            self::VALUE_WORLDSPAN_SMI,
            self::VALUE_MULTI_CHANNEL,
            self::VALUE_SPECIAL_GDS,
            self::VALUE_ABACUS_SDS,
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
