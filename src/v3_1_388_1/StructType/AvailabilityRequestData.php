<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailabilityRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AvailabilityRequestData
 * @subpackage Structs
 */
class AvailabilityRequestData extends AbstractStructBase
{
    /**
     * The AllotmentConfig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest
     */
    public $AllotmentConfig;
    /**
     * The AllowSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowSurcharge;
    /**
     * The AvailabilitySearchMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AvailabilitySearchMode;
    /**
     * The CRSConfig
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public $CRSConfig;
    /**
     * The Charter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestCharter
     */
    public $Charter;
    /**
     * The CheckAvailability
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CheckAvailability;
    /**
     * The CheckDaysAhead
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CheckDaysAhead;
    /**
     * The CheckDaysBack
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CheckDaysBack;
    /**
     * The DoAllowWaitlist
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $DoAllowWaitlist;
    /**
     * The DoReturnAvailString
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $DoReturnAvailString;
    /**
     * The DoReturnSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $DoReturnSeats;
    /**
     * The DoReturnSoldFlights
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $DoReturnSoldFlights;
    /**
     * The EnhancedFeederSearchConfig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearch
     */
    public $EnhancedFeederSearchConfig;
    /**
     * The Farebase
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Farebase;
    /**
     * The FullAvailibility
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FullAvailibility;
    /**
     * The HasExtraInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasExtraInfo;
    /**
     * The IsDirectOnly
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDirectOnly;
    /**
     * The IsFixedStay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsFixedStay;
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LanguageCode;
    /**
     * The LegType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestLegType
     */
    public $LegType;
    /**
     * The MaxAlternatives
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxAlternatives;
    /**
     * The PassengerFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $PassengerFare;
    /**
     * The PassengerType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestPassengerType
     */
    public $PassengerType;
    /**
     * The PaymentFilters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilterDetails
     */
    public $PaymentFilters;
    /**
     * The RecordSet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RecordSet;
    /**
     * The ReturnWebfare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnWebfare;
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * The WebAgent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
     */
    public $WebAgent;
    /**
     * The XtremePricerConfig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricer
     */
    public $XtremePricerConfig;
    /**
     * Constructor method for AvailabilityRequestData
     * @uses AvailabilityRequestData::setAllotmentConfig()
     * @uses AvailabilityRequestData::setAllowSurcharge()
     * @uses AvailabilityRequestData::setAvailabilitySearchMode()
     * @uses AvailabilityRequestData::setCRSConfig()
     * @uses AvailabilityRequestData::setCharter()
     * @uses AvailabilityRequestData::setCheckAvailability()
     * @uses AvailabilityRequestData::setCheckDaysAhead()
     * @uses AvailabilityRequestData::setCheckDaysBack()
     * @uses AvailabilityRequestData::setDoAllowWaitlist()
     * @uses AvailabilityRequestData::setDoReturnAvailString()
     * @uses AvailabilityRequestData::setDoReturnSeats()
     * @uses AvailabilityRequestData::setDoReturnSoldFlights()
     * @uses AvailabilityRequestData::setEnhancedFeederSearchConfig()
     * @uses AvailabilityRequestData::setFarebase()
     * @uses AvailabilityRequestData::setFullAvailibility()
     * @uses AvailabilityRequestData::setHasExtraInfo()
     * @uses AvailabilityRequestData::setIsDirectOnly()
     * @uses AvailabilityRequestData::setIsFixedStay()
     * @uses AvailabilityRequestData::setLanguageCode()
     * @uses AvailabilityRequestData::setLegType()
     * @uses AvailabilityRequestData::setMaxAlternatives()
     * @uses AvailabilityRequestData::setPassengerFare()
     * @uses AvailabilityRequestData::setPassengerType()
     * @uses AvailabilityRequestData::setPaymentFilters()
     * @uses AvailabilityRequestData::setRecordSet()
     * @uses AvailabilityRequestData::setReturnWebfare()
     * @uses AvailabilityRequestData::setSource()
     * @uses AvailabilityRequestData::setWebAgent()
     * @uses AvailabilityRequestData::setXtremePricerConfig()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest $allotmentConfig
     * @param bool $allowSurcharge
     * @param string $availabilitySearchMode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestCharter $charter
     * @param string $checkAvailability
     * @param int $checkDaysAhead
     * @param int $checkDaysBack
     * @param bool $doAllowWaitlist
     * @param bool $doReturnAvailString
     * @param bool $doReturnSeats
     * @param bool $doReturnSoldFlights
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearch $enhancedFeederSearchConfig
     * @param string $farebase
     * @param bool $fullAvailibility
     * @param bool $hasExtraInfo
     * @param bool $isDirectOnly
     * @param bool $isFixedStay
     * @param string $languageCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestLegType $legType
     * @param int $maxAlternatives
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $passengerFare
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestPassengerType $passengerType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilterDetails $paymentFilters
     * @param string $recordSet
     * @param bool $returnWebfare
     * @param string $source
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricer $xtremePricerConfig
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest $allotmentConfig = null, $allowSurcharge = null, $availabilitySearchMode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestCharter $charter = null, $checkAvailability = null, $checkDaysAhead = null, $checkDaysBack = null, $doAllowWaitlist = null, $doReturnAvailString = null, $doReturnSeats = null, $doReturnSoldFlights = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearch $enhancedFeederSearchConfig = null, $farebase = null, $fullAvailibility = null, $hasExtraInfo = null, $isDirectOnly = null, $isFixedStay = null, $languageCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestLegType $legType = null, $maxAlternatives = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $passengerFare = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestPassengerType $passengerType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilterDetails $paymentFilters = null, $recordSet = null, $returnWebfare = null, $source = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricer $xtremePricerConfig = null)
    {
        $this
            ->setAllotmentConfig($allotmentConfig)
            ->setAllowSurcharge($allowSurcharge)
            ->setAvailabilitySearchMode($availabilitySearchMode)
            ->setCRSConfig($cRSConfig)
            ->setCharter($charter)
            ->setCheckAvailability($checkAvailability)
            ->setCheckDaysAhead($checkDaysAhead)
            ->setCheckDaysBack($checkDaysBack)
            ->setDoAllowWaitlist($doAllowWaitlist)
            ->setDoReturnAvailString($doReturnAvailString)
            ->setDoReturnSeats($doReturnSeats)
            ->setDoReturnSoldFlights($doReturnSoldFlights)
            ->setEnhancedFeederSearchConfig($enhancedFeederSearchConfig)
            ->setFarebase($farebase)
            ->setFullAvailibility($fullAvailibility)
            ->setHasExtraInfo($hasExtraInfo)
            ->setIsDirectOnly($isDirectOnly)
            ->setIsFixedStay($isFixedStay)
            ->setLanguageCode($languageCode)
            ->setLegType($legType)
            ->setMaxAlternatives($maxAlternatives)
            ->setPassengerFare($passengerFare)
            ->setPassengerType($passengerType)
            ->setPaymentFilters($paymentFilters)
            ->setRecordSet($recordSet)
            ->setReturnWebfare($returnWebfare)
            ->setSource($source)
            ->setWebAgent($webAgent)
            ->setXtremePricerConfig($xtremePricerConfig);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
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
     * Get AllowSurcharge value
     * @return bool|null
     */
    public function getAllowSurcharge()
    {
        return $this->AllowSurcharge;
    }
    /**
     * Set AllowSurcharge value
     * @param bool $allowSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setAllowSurcharge($allowSurcharge = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowSurcharge) && !is_bool($allowSurcharge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowSurcharge)), __LINE__);
        }
        $this->AllowSurcharge = $allowSurcharge;
        return $this;
    }
    /**
     * Get AvailabilitySearchMode value
     * @return string|null
     */
    public function getAvailabilitySearchMode()
    {
        return $this->AvailabilitySearchMode;
    }
    /**
     * Set AvailabilitySearchMode value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AvailabilitySearchModeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AvailabilitySearchModeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $availabilitySearchMode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setAvailabilitySearchMode($availabilitySearchMode = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AvailabilitySearchModeEnum::valueIsValid($availabilitySearchMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $availabilitySearchMode, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AvailabilitySearchModeEnum::getValidValues())), __LINE__);
        }
        $this->AvailabilitySearchMode = $availabilitySearchMode;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setCRSConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null)
    {
        $this->CRSConfig = $cRSConfig;
        return $this;
    }
    /**
     * Get Charter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestCharter|null
     */
    public function getCharter()
    {
        return isset($this->Charter) ? $this->Charter : null;
    }
    /**
     * Set Charter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestCharter $charter
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setCharter(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestCharter $charter = null)
    {
        if (is_null($charter) || (is_array($charter) && empty($charter))) {
            unset($this->Charter);
        } else {
            $this->Charter = $charter;
        }
        return $this;
    }
    /**
     * Get CheckAvailability value
     * @return string|null
     */
    public function getCheckAvailability()
    {
        return $this->CheckAvailability;
    }
    /**
     * Set CheckAvailability value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckAvailabilityTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckAvailabilityTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkAvailability
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setCheckAvailability($checkAvailability = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckAvailabilityTypeEnum::valueIsValid($checkAvailability)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $checkAvailability, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckAvailabilityTypeEnum::getValidValues())), __LINE__);
        }
        $this->CheckAvailability = $checkAvailability;
        return $this;
    }
    /**
     * Get CheckDaysAhead value
     * @return int|null
     */
    public function getCheckDaysAhead()
    {
        return $this->CheckDaysAhead;
    }
    /**
     * Set CheckDaysAhead value
     * @param int $checkDaysAhead
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setCheckDaysAhead($checkDaysAhead = null)
    {
        // validation for constraint: int
        if (!is_null($checkDaysAhead) && !is_numeric($checkDaysAhead)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($checkDaysAhead)), __LINE__);
        }
        $this->CheckDaysAhead = $checkDaysAhead;
        return $this;
    }
    /**
     * Get CheckDaysBack value
     * @return int|null
     */
    public function getCheckDaysBack()
    {
        return $this->CheckDaysBack;
    }
    /**
     * Set CheckDaysBack value
     * @param int $checkDaysBack
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setCheckDaysBack($checkDaysBack = null)
    {
        // validation for constraint: int
        if (!is_null($checkDaysBack) && !is_numeric($checkDaysBack)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($checkDaysBack)), __LINE__);
        }
        $this->CheckDaysBack = $checkDaysBack;
        return $this;
    }
    /**
     * Get DoAllowWaitlist value
     * @return bool|null
     */
    public function getDoAllowWaitlist()
    {
        return $this->DoAllowWaitlist;
    }
    /**
     * Set DoAllowWaitlist value
     * @param bool $doAllowWaitlist
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setDoAllowWaitlist($doAllowWaitlist = null)
    {
        // validation for constraint: boolean
        if (!is_null($doAllowWaitlist) && !is_bool($doAllowWaitlist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($doAllowWaitlist)), __LINE__);
        }
        $this->DoAllowWaitlist = $doAllowWaitlist;
        return $this;
    }
    /**
     * Get DoReturnAvailString value
     * @return bool|null
     */
    public function getDoReturnAvailString()
    {
        return $this->DoReturnAvailString;
    }
    /**
     * Set DoReturnAvailString value
     * @param bool $doReturnAvailString
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setDoReturnAvailString($doReturnAvailString = null)
    {
        // validation for constraint: boolean
        if (!is_null($doReturnAvailString) && !is_bool($doReturnAvailString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($doReturnAvailString)), __LINE__);
        }
        $this->DoReturnAvailString = $doReturnAvailString;
        return $this;
    }
    /**
     * Get DoReturnSeats value
     * @return bool|null
     */
    public function getDoReturnSeats()
    {
        return $this->DoReturnSeats;
    }
    /**
     * Set DoReturnSeats value
     * @param bool $doReturnSeats
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setDoReturnSeats($doReturnSeats = null)
    {
        // validation for constraint: boolean
        if (!is_null($doReturnSeats) && !is_bool($doReturnSeats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($doReturnSeats)), __LINE__);
        }
        $this->DoReturnSeats = $doReturnSeats;
        return $this;
    }
    /**
     * Get DoReturnSoldFlights value
     * @return bool|null
     */
    public function getDoReturnSoldFlights()
    {
        return $this->DoReturnSoldFlights;
    }
    /**
     * Set DoReturnSoldFlights value
     * @param bool $doReturnSoldFlights
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setDoReturnSoldFlights($doReturnSoldFlights = null)
    {
        // validation for constraint: boolean
        if (!is_null($doReturnSoldFlights) && !is_bool($doReturnSoldFlights)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($doReturnSoldFlights)), __LINE__);
        }
        $this->DoReturnSoldFlights = $doReturnSoldFlights;
        return $this;
    }
    /**
     * Get EnhancedFeederSearchConfig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearch|null
     */
    public function getEnhancedFeederSearchConfig()
    {
        return isset($this->EnhancedFeederSearchConfig) ? $this->EnhancedFeederSearchConfig : null;
    }
    /**
     * Set EnhancedFeederSearchConfig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearch $enhancedFeederSearchConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setEnhancedFeederSearchConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearch $enhancedFeederSearchConfig = null)
    {
        if (is_null($enhancedFeederSearchConfig) || (is_array($enhancedFeederSearchConfig) && empty($enhancedFeederSearchConfig))) {
            unset($this->EnhancedFeederSearchConfig);
        } else {
            $this->EnhancedFeederSearchConfig = $enhancedFeederSearchConfig;
        }
        return $this;
    }
    /**
     * Get Farebase value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFarebase()
    {
        return isset($this->Farebase) ? $this->Farebase : null;
    }
    /**
     * Set Farebase value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $farebase
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setFarebase($farebase = null)
    {
        // validation for constraint: string
        if (!is_null($farebase) && !is_string($farebase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($farebase)), __LINE__);
        }
        if (is_null($farebase) || (is_array($farebase) && empty($farebase))) {
            unset($this->Farebase);
        } else {
            $this->Farebase = $farebase;
        }
        return $this;
    }
    /**
     * Get FullAvailibility value
     * @return bool|null
     */
    public function getFullAvailibility()
    {
        return $this->FullAvailibility;
    }
    /**
     * Set FullAvailibility value
     * @param bool $fullAvailibility
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setFullAvailibility($fullAvailibility = null)
    {
        // validation for constraint: boolean
        if (!is_null($fullAvailibility) && !is_bool($fullAvailibility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fullAvailibility)), __LINE__);
        }
        $this->FullAvailibility = $fullAvailibility;
        return $this;
    }
    /**
     * Get HasExtraInfo value
     * @return bool|null
     */
    public function getHasExtraInfo()
    {
        return $this->HasExtraInfo;
    }
    /**
     * Set HasExtraInfo value
     * @param bool $hasExtraInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setHasExtraInfo($hasExtraInfo = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasExtraInfo) && !is_bool($hasExtraInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasExtraInfo)), __LINE__);
        }
        $this->HasExtraInfo = $hasExtraInfo;
        return $this;
    }
    /**
     * Get IsDirectOnly value
     * @return bool|null
     */
    public function getIsDirectOnly()
    {
        return $this->IsDirectOnly;
    }
    /**
     * Set IsDirectOnly value
     * @param bool $isDirectOnly
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setIsDirectOnly($isDirectOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDirectOnly) && !is_bool($isDirectOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDirectOnly)), __LINE__);
        }
        $this->IsDirectOnly = $isDirectOnly;
        return $this;
    }
    /**
     * Get IsFixedStay value
     * @return bool|null
     */
    public function getIsFixedStay()
    {
        return $this->IsFixedStay;
    }
    /**
     * Set IsFixedStay value
     * @param bool $isFixedStay
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setIsFixedStay($isFixedStay = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFixedStay) && !is_bool($isFixedStay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isFixedStay)), __LINE__);
        }
        $this->IsFixedStay = $isFixedStay;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
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
     * Get LegType value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestLegType|null
     */
    public function getLegType()
    {
        return $this->LegType;
    }
    /**
     * Set LegType value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestLegType $legType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setLegType(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestLegType $legType = null)
    {
        $this->LegType = $legType;
        return $this;
    }
    /**
     * Get MaxAlternatives value
     * @return int|null
     */
    public function getMaxAlternatives()
    {
        return $this->MaxAlternatives;
    }
    /**
     * Set MaxAlternatives value
     * @param int $maxAlternatives
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setMaxAlternatives($maxAlternatives = null)
    {
        // validation for constraint: int
        if (!is_null($maxAlternatives) && !is_numeric($maxAlternatives)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxAlternatives)), __LINE__);
        }
        $this->MaxAlternatives = $maxAlternatives;
        return $this;
    }
    /**
     * Get PassengerFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getPassengerFare()
    {
        return isset($this->PassengerFare) ? $this->PassengerFare : null;
    }
    /**
     * Set PassengerFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $passengerFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setPassengerFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $passengerFare = null)
    {
        if (is_null($passengerFare) || (is_array($passengerFare) && empty($passengerFare))) {
            unset($this->PassengerFare);
        } else {
            $this->PassengerFare = $passengerFare;
        }
        return $this;
    }
    /**
     * Get PassengerType value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestPassengerType|null
     */
    public function getPassengerType()
    {
        return $this->PassengerType;
    }
    /**
     * Set PassengerType value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestPassengerType $passengerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setPassengerType(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestPassengerType $passengerType = null)
    {
        $this->PassengerType = $passengerType;
        return $this;
    }
    /**
     * Get PaymentFilters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilterDetails|null
     */
    public function getPaymentFilters()
    {
        return isset($this->PaymentFilters) ? $this->PaymentFilters : null;
    }
    /**
     * Set PaymentFilters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilterDetails $paymentFilters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setPaymentFilters(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilterDetails $paymentFilters = null)
    {
        if (is_null($paymentFilters) || (is_array($paymentFilters) && empty($paymentFilters))) {
            unset($this->PaymentFilters);
        } else {
            $this->PaymentFilters = $paymentFilters;
        }
        return $this;
    }
    /**
     * Get RecordSet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecordSet()
    {
        return isset($this->RecordSet) ? $this->RecordSet : null;
    }
    /**
     * Set RecordSet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recordSet
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setRecordSet($recordSet = null)
    {
        // validation for constraint: string
        if (!is_null($recordSet) && !is_string($recordSet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordSet)), __LINE__);
        }
        if (is_null($recordSet) || (is_array($recordSet) && empty($recordSet))) {
            unset($this->RecordSet);
        } else {
            $this->RecordSet = $recordSet;
        }
        return $this;
    }
    /**
     * Get ReturnWebfare value
     * @return bool|null
     */
    public function getReturnWebfare()
    {
        return $this->ReturnWebfare;
    }
    /**
     * Set ReturnWebfare value
     * @param bool $returnWebfare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setReturnWebfare($returnWebfare = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnWebfare) && !is_bool($returnWebfare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnWebfare)), __LINE__);
        }
        $this->ReturnWebfare = $returnWebfare;
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $source
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setSource($source = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::valueIsValid($source)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $source, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::getValidValues())), __LINE__);
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Get WebAgent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent|null
     */
    public function getWebAgent()
    {
        return isset($this->WebAgent) ? $this->WebAgent : null;
    }
    /**
     * Set WebAgent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setWebAgent(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent = null)
    {
        if (is_null($webAgent) || (is_array($webAgent) && empty($webAgent))) {
            unset($this->WebAgent);
        } else {
            $this->WebAgent = $webAgent;
        }
        return $this;
    }
    /**
     * Get XtremePricerConfig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricer|null
     */
    public function getXtremePricerConfig()
    {
        return isset($this->XtremePricerConfig) ? $this->XtremePricerConfig : null;
    }
    /**
     * Set XtremePricerConfig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricer $xtremePricerConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
     */
    public function setXtremePricerConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricer $xtremePricerConfig = null)
    {
        if (is_null($xtremePricerConfig) || (is_array($xtremePricerConfig) && empty($xtremePricerConfig))) {
            unset($this->XtremePricerConfig);
        } else {
            $this->XtremePricerConfig = $xtremePricerConfig;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestData
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
