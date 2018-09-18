<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for ChannelTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ChannelTypeEnum
 * @subpackage Enumerations
 */
class ChannelTypeEnum
{
    /**
     * Constant for value 'AMADEUSMasterPricer'
     * @return string 'AMADEUSMasterPricer'
     */
    const VALUE_AMADEUSMASTER_PRICER = 'AMADEUSMasterPricer';
    /**
     * Constant for value 'SABREBargainFinderMax'
     * @return string 'SABREBargainFinderMax'
     */
    const VALUE_SABREBARGAIN_FINDER_MAX = 'SABREBargainFinderMax';
    /**
     * Constant for value 'GALILEOSuperBestBuy'
     * @return string 'GALILEOSuperBestBuy'
     */
    const VALUE_GALILEOSUPER_BEST_BUY = 'GALILEOSuperBestBuy';
    /**
     * Constant for value 'WORLDSPANPowerShopper'
     * @return string 'WORLDSPANPowerShopper'
     */
    const VALUE_WORLDSPANPOWER_SHOPPER = 'WORLDSPANPowerShopper';
    /**
     * Constant for value 'HITCHHIKERStandardSearch'
     * @return string 'HITCHHIKERStandardSearch'
     */
    const VALUE_HITCHHIKERSTANDARD_SEARCH = 'HITCHHIKERStandardSearch';
    /**
     * Constant for value 'HITCHHIKERXtremePricer'
     * @return string 'HITCHHIKERXtremePricer'
     */
    const VALUE_HITCHHIKERXTREME_PRICER = 'HITCHHIKERXtremePricer';
    /**
     * Constant for value 'HITCHHIKERWebFareSearch'
     * @return string 'HITCHHIKERWebFareSearch'
     */
    const VALUE_HITCHHIKERWEB_FARE_SEARCH = 'HITCHHIKERWebFareSearch';
    /**
     * Constant for value 'HITCHHIKERCharter'
     * @return string 'HITCHHIKERCharter'
     */
    const VALUE_HITCHHIKERCHARTER = 'HITCHHIKERCharter';
    /**
     * Constant for value 'SIRENAWebCore'
     * @return string 'SIRENAWebCore'
     */
    const VALUE_SIRENAWEB_CORE = 'SIRENAWebCore';
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
     * @uses self::VALUE_AMADEUSMASTER_PRICER
     * @uses self::VALUE_SABREBARGAIN_FINDER_MAX
     * @uses self::VALUE_GALILEOSUPER_BEST_BUY
     * @uses self::VALUE_WORLDSPANPOWER_SHOPPER
     * @uses self::VALUE_HITCHHIKERSTANDARD_SEARCH
     * @uses self::VALUE_HITCHHIKERXTREME_PRICER
     * @uses self::VALUE_HITCHHIKERWEB_FARE_SEARCH
     * @uses self::VALUE_HITCHHIKERCHARTER
     * @uses self::VALUE_SIRENAWEB_CORE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AMADEUSMASTER_PRICER,
            self::VALUE_SABREBARGAIN_FINDER_MAX,
            self::VALUE_GALILEOSUPER_BEST_BUY,
            self::VALUE_WORLDSPANPOWER_SHOPPER,
            self::VALUE_HITCHHIKERSTANDARD_SEARCH,
            self::VALUE_HITCHHIKERXTREME_PRICER,
            self::VALUE_HITCHHIKERWEB_FARE_SEARCH,
            self::VALUE_HITCHHIKERCHARTER,
            self::VALUE_SIRENAWEB_CORE,
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
