<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRequestConfiguration StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareRequestConfiguration
 * @subpackage Structs
 */
class FareRequestConfiguration extends AbstractStructBase
{
    /**
     * The AdditionalDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalDetails;
    /**
     * The AllotmentConfig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest
     */
    public $AllotmentConfig;
    /**
     * The AllowWaitList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowWaitList;
    /**
     * The AnticipatedBookingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AnticipatedBookingDate;
    /**
     * The CRSConfig
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public $CRSConfig;
    /**
     * The Cache
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheConfigurationData
     */
    public $Cache;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
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
     * The ExtraInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExtraInfo;
    /**
     * The FareDiversity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FareDiversity;
    /**
     * The FixedStay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FixedStay;
    /**
     * The FlightType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FlightType;
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LanguageCode;
    /**
     * The MergeMCT
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAirportMCT
     */
    public $MergeMCT;
    /**
     * The NumberOfPaymentRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPaymentRequests;
    /**
     * The NumberOfPubCCRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPubCCRequests;
    /**
     * The PaymentFilters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilter
     */
    public $PaymentFilters;
    /**
     * The PaymentInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PaymentInfo;
    /**
     * The RestrictOvernight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RestrictOvernight;
    /**
     * The ReturnNonStopFlightsOnly
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReturnNonStopFlightsOnly;
    /**
     * The ReturnSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnSeats;
    /**
     * The SortBy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SortBy;
    /**
     * The TimeOutInSeconds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TimeOutInSeconds;
    /**
     * The ToleranceSearchMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ToleranceSearchMode;
    /**
     * The VayantConfig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant
     */
    public $VayantConfig;
    /**
     * Constructor method for FareRequestConfiguration
     * @uses FareRequestConfiguration::setAdditionalDetails()
     * @uses FareRequestConfiguration::setAllotmentConfig()
     * @uses FareRequestConfiguration::setAllowWaitList()
     * @uses FareRequestConfiguration::setAnticipatedBookingDate()
     * @uses FareRequestConfiguration::setCRSConfig()
     * @uses FareRequestConfiguration::setCache()
     * @uses FareRequestConfiguration::setCurrencyCode()
     * @uses FareRequestConfiguration::setEarliestTicketingDate()
     * @uses FareRequestConfiguration::setExtraInfo()
     * @uses FareRequestConfiguration::setFareDiversity()
     * @uses FareRequestConfiguration::setFixedStay()
     * @uses FareRequestConfiguration::setFlightType()
     * @uses FareRequestConfiguration::setLanguageCode()
     * @uses FareRequestConfiguration::setMergeMCT()
     * @uses FareRequestConfiguration::setNumberOfPaymentRequests()
     * @uses FareRequestConfiguration::setNumberOfPubCCRequests()
     * @uses FareRequestConfiguration::setPaymentFilters()
     * @uses FareRequestConfiguration::setPaymentInfo()
     * @uses FareRequestConfiguration::setRestrictOvernight()
     * @uses FareRequestConfiguration::setReturnNonStopFlightsOnly()
     * @uses FareRequestConfiguration::setReturnSeats()
     * @uses FareRequestConfiguration::setSortBy()
     * @uses FareRequestConfiguration::setTimeOutInSeconds()
     * @uses FareRequestConfiguration::setToleranceSearchMode()
     * @uses FareRequestConfiguration::setVayantConfig()
     * @param string $additionalDetails
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest $allotmentConfig
     * @param bool $allowWaitList
     * @param string $anticipatedBookingDate
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheConfigurationData $cache
     * @param string $currencyCode
     * @param string $earliestTicketingDate
     * @param string $extraInfo
     * @param string $fareDiversity
     * @param bool $fixedStay
     * @param string $flightType
     * @param string $languageCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAirportMCT $mergeMCT
     * @param int $numberOfPaymentRequests
     * @param int $numberOfPubCCRequests
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilter $paymentFilters
     * @param string $paymentInfo
     * @param int $restrictOvernight
     * @param string $returnNonStopFlightsOnly
     * @param bool $returnSeats
     * @param string $sortBy
     * @param int $timeOutInSeconds
     * @param string $toleranceSearchMode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant $vayantConfig
     */
    public function __construct($additionalDetails = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest $allotmentConfig = null, $allowWaitList = null, $anticipatedBookingDate = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheConfigurationData $cache = null, $currencyCode = null, $earliestTicketingDate = null, $extraInfo = null, $fareDiversity = null, $fixedStay = null, $flightType = null, $languageCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAirportMCT $mergeMCT = null, $numberOfPaymentRequests = null, $numberOfPubCCRequests = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilter $paymentFilters = null, $paymentInfo = null, $restrictOvernight = null, $returnNonStopFlightsOnly = null, $returnSeats = null, $sortBy = null, $timeOutInSeconds = null, $toleranceSearchMode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant $vayantConfig = null)
    {
        $this
            ->setAdditionalDetails($additionalDetails)
            ->setAllotmentConfig($allotmentConfig)
            ->setAllowWaitList($allowWaitList)
            ->setAnticipatedBookingDate($anticipatedBookingDate)
            ->setCRSConfig($cRSConfig)
            ->setCache($cache)
            ->setCurrencyCode($currencyCode)
            ->setEarliestTicketingDate($earliestTicketingDate)
            ->setExtraInfo($extraInfo)
            ->setFareDiversity($fareDiversity)
            ->setFixedStay($fixedStay)
            ->setFlightType($flightType)
            ->setLanguageCode($languageCode)
            ->setMergeMCT($mergeMCT)
            ->setNumberOfPaymentRequests($numberOfPaymentRequests)
            ->setNumberOfPubCCRequests($numberOfPubCCRequests)
            ->setPaymentFilters($paymentFilters)
            ->setPaymentInfo($paymentInfo)
            ->setRestrictOvernight($restrictOvernight)
            ->setReturnNonStopFlightsOnly($returnNonStopFlightsOnly)
            ->setReturnSeats($returnSeats)
            ->setSortBy($sortBy)
            ->setTimeOutInSeconds($timeOutInSeconds)
            ->setToleranceSearchMode($toleranceSearchMode)
            ->setVayantConfig($vayantConfig);
    }
    /**
     * Get AdditionalDetails value
     * @return string|null
     */
    public function getAdditionalDetails()
    {
        return $this->AdditionalDetails;
    }
    /**
     * Set AdditionalDetails value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AdditionalDetailEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AdditionalDetailEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $additionalDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setAdditionalDetails($additionalDetails = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AdditionalDetailEnum::valueIsValid($additionalDetails)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $additionalDetails, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AdditionalDetailEnum::getValidValues())), __LINE__);
        }
        $this->AdditionalDetails = $additionalDetails;
        return $this;
    }
    /**
     * Get AllotmentConfig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest|null
     */
    public function getAllotmentConfig()
    {
        return isset($this->AllotmentConfig) ? $this->AllotmentConfig : null;
    }
    /**
     * Set AllotmentConfig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest $allotmentConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setAllotmentConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest $allotmentConfig = null)
    {
        if (is_null($allotmentConfig) || (is_array($allotmentConfig) && empty($allotmentConfig))) {
            unset($this->AllotmentConfig);
        } else {
            $this->AllotmentConfig = $allotmentConfig;
        }
        return $this;
    }
    /**
     * Get AllowWaitList value
     * @return bool|null
     */
    public function getAllowWaitList()
    {
        return $this->AllowWaitList;
    }
    /**
     * Set AllowWaitList value
     * @param bool $allowWaitList
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setAllowWaitList($allowWaitList = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowWaitList) && !is_bool($allowWaitList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowWaitList)), __LINE__);
        }
        $this->AllowWaitList = $allowWaitList;
        return $this;
    }
    /**
     * Get AnticipatedBookingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAnticipatedBookingDate()
    {
        return isset($this->AnticipatedBookingDate) ? $this->AnticipatedBookingDate : null;
    }
    /**
     * Set AnticipatedBookingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $anticipatedBookingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setAnticipatedBookingDate($anticipatedBookingDate = null)
    {
        // validation for constraint: string
        if (!is_null($anticipatedBookingDate) && !is_string($anticipatedBookingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($anticipatedBookingDate)), __LINE__);
        }
        if (is_null($anticipatedBookingDate) || (is_array($anticipatedBookingDate) && empty($anticipatedBookingDate))) {
            unset($this->AnticipatedBookingDate);
        } else {
            $this->AnticipatedBookingDate = $anticipatedBookingDate;
        }
        return $this;
    }
    /**
     * Get CRSConfig value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS|null
     */
    public function getCRSConfig()
    {
        return $this->CRSConfig;
    }
    /**
     * Set CRSConfig value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setCRSConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null)
    {
        $this->CRSConfig = $cRSConfig;
        return $this;
    }
    /**
     * Get Cache value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheConfigurationData|null
     */
    public function getCache()
    {
        return isset($this->Cache) ? $this->Cache : null;
    }
    /**
     * Set Cache value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheConfigurationData $cache
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setCache(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheConfigurationData $cache = null)
    {
        if (is_null($cache) || (is_array($cache) && empty($cache))) {
            unset($this->Cache);
        } else {
            $this->Cache = $cache;
        }
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
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
     * Get ExtraInfo value
     * @return string|null
     */
    public function getExtraInfo()
    {
        return $this->ExtraInfo;
    }
    /**
     * Set ExtraInfo value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DetailLevelEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DetailLevelEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $extraInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setExtraInfo($extraInfo = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DetailLevelEnum::valueIsValid($extraInfo)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $extraInfo, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DetailLevelEnum::getValidValues())), __LINE__);
        }
        $this->ExtraInfo = $extraInfo;
        return $this;
    }
    /**
     * Get FareDiversity value
     * @return string|null
     */
    public function getFareDiversity()
    {
        return $this->FareDiversity;
    }
    /**
     * Set FareDiversity value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareDivsersityEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareDivsersityEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fareDiversity
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setFareDiversity($fareDiversity = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareDivsersityEnum::valueIsValid($fareDiversity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fareDiversity, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareDivsersityEnum::getValidValues())), __LINE__);
        }
        $this->FareDiversity = $fareDiversity;
        return $this;
    }
    /**
     * Get FixedStay value
     * @return bool|null
     */
    public function getFixedStay()
    {
        return $this->FixedStay;
    }
    /**
     * Set FixedStay value
     * @param bool $fixedStay
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setFixedStay($fixedStay = null)
    {
        // validation for constraint: boolean
        if (!is_null($fixedStay) && !is_bool($fixedStay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fixedStay)), __LINE__);
        }
        $this->FixedStay = $fixedStay;
        return $this;
    }
    /**
     * Get FlightType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFlightType()
    {
        return isset($this->FlightType) ? $this->FlightType : null;
    }
    /**
     * Set FlightType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $flightType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setFlightType($flightType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightTypeEnum::valueIsValid($flightType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $flightType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightTypeEnum::getValidValues())), __LINE__);
        }
        if (is_null($flightType) || (is_array($flightType) && empty($flightType))) {
            unset($this->FlightType);
        } else {
            $this->FlightType = $flightType;
        }
        return $this;
    }
    /**
     * Get LanguageCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLanguageCode()
    {
        return isset($this->LanguageCode) ? $this->LanguageCode : null;
    }
    /**
     * Set LanguageCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $languageCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setLanguageCode($languageCode = null)
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($languageCode)), __LINE__);
        }
        if (is_null($languageCode) || (is_array($languageCode) && empty($languageCode))) {
            unset($this->LanguageCode);
        } else {
            $this->LanguageCode = $languageCode;
        }
        return $this;
    }
    /**
     * Get MergeMCT value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAirportMCT|null
     */
    public function getMergeMCT()
    {
        return isset($this->MergeMCT) ? $this->MergeMCT : null;
    }
    /**
     * Set MergeMCT value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAirportMCT $mergeMCT
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setMergeMCT(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAirportMCT $mergeMCT = null)
    {
        if (is_null($mergeMCT) || (is_array($mergeMCT) && empty($mergeMCT))) {
            unset($this->MergeMCT);
        } else {
            $this->MergeMCT = $mergeMCT;
        }
        return $this;
    }
    /**
     * Get NumberOfPaymentRequests value
     * @return int|null
     */
    public function getNumberOfPaymentRequests()
    {
        return $this->NumberOfPaymentRequests;
    }
    /**
     * Set NumberOfPaymentRequests value
     * @param int $numberOfPaymentRequests
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setNumberOfPaymentRequests($numberOfPaymentRequests = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPaymentRequests) && !is_numeric($numberOfPaymentRequests)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPaymentRequests)), __LINE__);
        }
        $this->NumberOfPaymentRequests = $numberOfPaymentRequests;
        return $this;
    }
    /**
     * Get NumberOfPubCCRequests value
     * @return int|null
     */
    public function getNumberOfPubCCRequests()
    {
        return $this->NumberOfPubCCRequests;
    }
    /**
     * Set NumberOfPubCCRequests value
     * @param int $numberOfPubCCRequests
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setNumberOfPubCCRequests($numberOfPubCCRequests = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPubCCRequests) && !is_numeric($numberOfPubCCRequests)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPubCCRequests)), __LINE__);
        }
        $this->NumberOfPubCCRequests = $numberOfPubCCRequests;
        return $this;
    }
    /**
     * Get PaymentFilters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilter|null
     */
    public function getPaymentFilters()
    {
        return isset($this->PaymentFilters) ? $this->PaymentFilters : null;
    }
    /**
     * Set PaymentFilters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilter $paymentFilters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setPaymentFilters(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilter $paymentFilters = null)
    {
        if (is_null($paymentFilters) || (is_array($paymentFilters) && empty($paymentFilters))) {
            unset($this->PaymentFilters);
        } else {
            $this->PaymentFilters = $paymentFilters;
        }
        return $this;
    }
    /**
     * Get PaymentInfo value
     * @return string|null
     */
    public function getPaymentInfo()
    {
        return $this->PaymentInfo;
    }
    /**
     * Set PaymentInfo value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setPaymentInfo($paymentInfo = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::valueIsValid($paymentInfo)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentInfo, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::getValidValues())), __LINE__);
        }
        $this->PaymentInfo = $paymentInfo;
        return $this;
    }
    /**
     * Get RestrictOvernight value
     * @return int|null
     */
    public function getRestrictOvernight()
    {
        return $this->RestrictOvernight;
    }
    /**
     * Set RestrictOvernight value
     * @param int $restrictOvernight
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setRestrictOvernight($restrictOvernight = null)
    {
        // validation for constraint: int
        if (!is_null($restrictOvernight) && !is_numeric($restrictOvernight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($restrictOvernight)), __LINE__);
        }
        $this->RestrictOvernight = $restrictOvernight;
        return $this;
    }
    /**
     * Get ReturnNonStopFlightsOnly value
     * @return string|null
     */
    public function getReturnNonStopFlightsOnly()
    {
        return $this->ReturnNonStopFlightsOnly;
    }
    /**
     * Set ReturnNonStopFlightsOnly value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\NonStopEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\NonStopEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $returnNonStopFlightsOnly
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setReturnNonStopFlightsOnly($returnNonStopFlightsOnly = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\NonStopEnum::valueIsValid($returnNonStopFlightsOnly)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $returnNonStopFlightsOnly, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\NonStopEnum::getValidValues())), __LINE__);
        }
        $this->ReturnNonStopFlightsOnly = $returnNonStopFlightsOnly;
        return $this;
    }
    /**
     * Get ReturnSeats value
     * @return bool|null
     */
    public function getReturnSeats()
    {
        return $this->ReturnSeats;
    }
    /**
     * Set ReturnSeats value
     * @param bool $returnSeats
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setReturnSeats($returnSeats = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnSeats) && !is_bool($returnSeats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnSeats)), __LINE__);
        }
        $this->ReturnSeats = $returnSeats;
        return $this;
    }
    /**
     * Get SortBy value
     * @return string|null
     */
    public function getSortBy()
    {
        return $this->SortBy;
    }
    /**
     * Set SortBy value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SortEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SortEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sortBy
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setSortBy($sortBy = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SortEnum::valueIsValid($sortBy)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sortBy, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SortEnum::getValidValues())), __LINE__);
        }
        $this->SortBy = $sortBy;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
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
     * Get ToleranceSearchMode value
     * @return string|null
     */
    public function getToleranceSearchMode()
    {
        return $this->ToleranceSearchMode;
    }
    /**
     * Set ToleranceSearchMode value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ToleranceModeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ToleranceModeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $toleranceSearchMode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
     */
    public function setToleranceSearchMode($toleranceSearchMode = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ToleranceModeEnum::valueIsValid($toleranceSearchMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $toleranceSearchMode, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ToleranceModeEnum::getValidValues())), __LINE__);
        }
        $this->ToleranceSearchMode = $toleranceSearchMode;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConfiguration
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
