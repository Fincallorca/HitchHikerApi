<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestConfigurationData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RequestConfigurationData
 * @subpackage Structs
 */
class RequestConfigurationData extends AbstractStructBase
{
    /**
     * The CRSConfig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public $CRSConfig;
    /**
     * The CRSConfigData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCRSConfigData
     */
    public $CRSConfigData;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CurrencyCode;
    /**
     * The EarliestTicketingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EarliestTicketingDate;
    /**
     * The TimeOutInSeconds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TimeOutInSeconds;
    /**
     * The VayantConfig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant
     */
    public $VayantConfig;
    /**
     * Constructor method for RequestConfigurationData
     * @uses RequestConfigurationData::setCRSConfig()
     * @uses RequestConfigurationData::setCRSConfigData()
     * @uses RequestConfigurationData::setCurrencyCode()
     * @uses RequestConfigurationData::setEarliestTicketingDate()
     * @uses RequestConfigurationData::setTimeOutInSeconds()
     * @uses RequestConfigurationData::setVayantConfig()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCRSConfigData $cRSConfigData
     * @param string $currencyCode
     * @param string $earliestTicketingDate
     * @param int $timeOutInSeconds
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant $vayantConfig
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCRSConfigData $cRSConfigData = null, $currencyCode = null, $earliestTicketingDate = null, $timeOutInSeconds = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant $vayantConfig = null)
    {
        $this
            ->setCRSConfig($cRSConfig)
            ->setCRSConfigData($cRSConfigData)
            ->setCurrencyCode($currencyCode)
            ->setEarliestTicketingDate($earliestTicketingDate)
            ->setTimeOutInSeconds($timeOutInSeconds)
            ->setVayantConfig($vayantConfig);
    }
    /**
     * Get CRSConfig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS|null
     */
    public function getCRSConfig()
    {
        return isset($this->CRSConfig) ? $this->CRSConfig : null;
    }
    /**
     * Set CRSConfig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestConfigurationData
     */
    public function setCRSConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null)
    {
        if (is_null($cRSConfig) || (is_array($cRSConfig) && empty($cRSConfig))) {
            unset($this->CRSConfig);
        } else {
            $this->CRSConfig = $cRSConfig;
        }
        return $this;
    }
    /**
     * Get CRSConfigData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCRSConfigData|null
     */
    public function getCRSConfigData()
    {
        return isset($this->CRSConfigData) ? $this->CRSConfigData : null;
    }
    /**
     * Set CRSConfigData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCRSConfigData $cRSConfigData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestConfigurationData
     */
    public function setCRSConfigData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCRSConfigData $cRSConfigData = null)
    {
        if (is_null($cRSConfigData) || (is_array($cRSConfigData) && empty($cRSConfigData))) {
            unset($this->CRSConfigData);
        } else {
            $this->CRSConfigData = $cRSConfigData;
        }
        return $this;
    }
    /**
     * Get CurrencyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return isset($this->CurrencyCode) ? $this->CurrencyCode : null;
    }
    /**
     * Set CurrencyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $currencyCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestConfigurationData
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        if (is_null($currencyCode) || (is_array($currencyCode) && empty($currencyCode))) {
            unset($this->CurrencyCode);
        } else {
            $this->CurrencyCode = $currencyCode;
        }
        return $this;
    }
    /**
     * Get EarliestTicketingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEarliestTicketingDate()
    {
        return isset($this->EarliestTicketingDate) ? $this->EarliestTicketingDate : null;
    }
    /**
     * Set EarliestTicketingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $earliestTicketingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestConfigurationData
     */
    public function setEarliestTicketingDate($earliestTicketingDate = null)
    {
        // validation for constraint: string
        if (!is_null($earliestTicketingDate) && !is_string($earliestTicketingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($earliestTicketingDate)), __LINE__);
        }
        if (is_null($earliestTicketingDate) || (is_array($earliestTicketingDate) && empty($earliestTicketingDate))) {
            unset($this->EarliestTicketingDate);
        } else {
            $this->EarliestTicketingDate = $earliestTicketingDate;
        }
        return $this;
    }
    /**
     * Get TimeOutInSeconds value
     * @return int|null
     */
    public function getTimeOutInSeconds()
    {
        return $this->TimeOutInSeconds;
    }
    /**
     * Set TimeOutInSeconds value
     * @param int $timeOutInSeconds
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestConfigurationData
     */
    public function setTimeOutInSeconds($timeOutInSeconds = null)
    {
        // validation for constraint: int
        if (!is_null($timeOutInSeconds) && !is_numeric($timeOutInSeconds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($timeOutInSeconds)), __LINE__);
        }
        $this->TimeOutInSeconds = $timeOutInSeconds;
        return $this;
    }
    /**
     * Get VayantConfig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant|null
     */
    public function getVayantConfig()
    {
        return isset($this->VayantConfig) ? $this->VayantConfig : null;
    }
    /**
     * Set VayantConfig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant $vayantConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestConfigurationData
     */
    public function setVayantConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant $vayantConfig = null)
    {
        if (is_null($vayantConfig) || (is_array($vayantConfig) && empty($vayantConfig))) {
            unset($this->VayantConfig);
        } else {
            $this->VayantConfig = $vayantConfig;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestConfigurationData
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
