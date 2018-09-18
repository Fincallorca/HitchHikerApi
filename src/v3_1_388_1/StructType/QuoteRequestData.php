<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuoteRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QuoteRequestData
 * @subpackage Structs
 */
class QuoteRequestData extends AbstractStructBase
{
    /**
     * The AddSurchargeToFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AddSurchargeToFare;
    /**
     * The AllotmentAccountData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount
     */
    public $AllotmentAccountData;
    /**
     * The AllowRebook
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowRebook;
    /**
     * The BestBuyMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BestBuyMode;
    /**
     * The BookingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BookingDate;
    /**
     * The CRSConfig
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public $CRSConfig;
    /**
     * The CorporateFareAccessCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $CorporateFareAccessCodes;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Currency;
    /**
     * The CustomerLastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CustomerLastName;
    /**
     * The DeterminePointOfTurnaround
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DeterminePointOfTurnaround;
    /**
     * The EarliestTicketingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EarliestTicketingDate;
    /**
     * The FareSubType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FareSubType;
    /**
     * The FareType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareType;
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LanguageCode;
    /**
     * The Legs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestLeg
     */
    public $Legs;
    /**
     * The MatchCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MatchCode;
    /**
     * The NetFareData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestNetData
     */
    public $NetFareData;
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestPasType
     */
    public $Passengers;
    /**
     * The PermittedFareType
     * @var string
     */
    public $PermittedFareType;
    /**
     * The PlatingCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PlatingCarrier;
    /**
     * The PublishedTaxOverrideDBCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PublishedTaxOverrideDBCode;
    /**
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RecordLocator;
    /**
     * The Recordset
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Recordset;
    /**
     * The ReturnTaxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnTaxes;
    /**
     * The ReturnTicketData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnTicketData;
    /**
     * The SegmentNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $SegmentNumbers;
    /**
     * The SortByFlag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SortByFlag;
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * The SplitCorporateRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SplitCorporateRequests;
    /**
     * The StoreFareQuoteType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StoreFareQuoteType;
    /**
     * The TariffSubType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffSubType;
    /**
     * The TariffType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffType;
    /**
     * The TicketingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TicketingType;
    /**
     * The TimeOut
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TimeOut;
    /**
     * The WebFareData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestWebFareData
     */
    public $WebFareData;
    /**
     * Constructor method for QuoteRequestData
     * @uses QuoteRequestData::setAddSurchargeToFare()
     * @uses QuoteRequestData::setAllotmentAccountData()
     * @uses QuoteRequestData::setAllowRebook()
     * @uses QuoteRequestData::setBestBuyMode()
     * @uses QuoteRequestData::setBookingDate()
     * @uses QuoteRequestData::setCRSConfig()
     * @uses QuoteRequestData::setCorporateFareAccessCodes()
     * @uses QuoteRequestData::setCurrency()
     * @uses QuoteRequestData::setCustomerLastName()
     * @uses QuoteRequestData::setDeterminePointOfTurnaround()
     * @uses QuoteRequestData::setEarliestTicketingDate()
     * @uses QuoteRequestData::setFareSubType()
     * @uses QuoteRequestData::setFareType()
     * @uses QuoteRequestData::setLanguageCode()
     * @uses QuoteRequestData::setLegs()
     * @uses QuoteRequestData::setMatchCode()
     * @uses QuoteRequestData::setNetFareData()
     * @uses QuoteRequestData::setPassengers()
     * @uses QuoteRequestData::setPermittedFareType()
     * @uses QuoteRequestData::setPlatingCarrier()
     * @uses QuoteRequestData::setPublishedTaxOverrideDBCode()
     * @uses QuoteRequestData::setRecordLocator()
     * @uses QuoteRequestData::setRecordset()
     * @uses QuoteRequestData::setReturnTaxes()
     * @uses QuoteRequestData::setReturnTicketData()
     * @uses QuoteRequestData::setSegmentNumbers()
     * @uses QuoteRequestData::setSortByFlag()
     * @uses QuoteRequestData::setSource()
     * @uses QuoteRequestData::setSplitCorporateRequests()
     * @uses QuoteRequestData::setStoreFareQuoteType()
     * @uses QuoteRequestData::setTariffSubType()
     * @uses QuoteRequestData::setTariffType()
     * @uses QuoteRequestData::setTicketingType()
     * @uses QuoteRequestData::setTimeOut()
     * @uses QuoteRequestData::setWebFareData()
     * @param bool $addSurchargeToFare
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentAccountData
     * @param bool $allowRebook
     * @param string $bestBuyMode
     * @param string $bookingDate
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $corporateFareAccessCodes
     * @param string $currency
     * @param string $customerLastName
     * @param int $determinePointOfTurnaround
     * @param string $earliestTicketingDate
     * @param string $fareSubType
     * @param string $fareType
     * @param string $languageCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestLeg $legs
     * @param string $matchCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestNetData $netFareData
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestPasType $passengers
     * @param string $permittedFareType
     * @param string $platingCarrier
     * @param string $publishedTaxOverrideDBCode
     * @param string $recordLocator
     * @param string $recordset
     * @param bool $returnTaxes
     * @param bool $returnTicketData
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $segmentNumbers
     * @param string $sortByFlag
     * @param string $source
     * @param bool $splitCorporateRequests
     * @param string $storeFareQuoteType
     * @param string $tariffSubType
     * @param string $tariffType
     * @param string $ticketingType
     * @param int $timeOut
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestWebFareData $webFareData
     */
    public function __construct($addSurchargeToFare = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentAccountData = null, $allowRebook = null, $bestBuyMode = null, $bookingDate = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $corporateFareAccessCodes = null, $currency = null, $customerLastName = null, $determinePointOfTurnaround = null, $earliestTicketingDate = null, $fareSubType = null, $fareType = null, $languageCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestLeg $legs = null, $matchCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestNetData $netFareData = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestPasType $passengers = null, $permittedFareType = null, $platingCarrier = null, $publishedTaxOverrideDBCode = null, $recordLocator = null, $recordset = null, $returnTaxes = null, $returnTicketData = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $segmentNumbers = null, $sortByFlag = null, $source = null, $splitCorporateRequests = null, $storeFareQuoteType = null, $tariffSubType = null, $tariffType = null, $ticketingType = null, $timeOut = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestWebFareData $webFareData = null)
    {
        $this
            ->setAddSurchargeToFare($addSurchargeToFare)
            ->setAllotmentAccountData($allotmentAccountData)
            ->setAllowRebook($allowRebook)
            ->setBestBuyMode($bestBuyMode)
            ->setBookingDate($bookingDate)
            ->setCRSConfig($cRSConfig)
            ->setCorporateFareAccessCodes($corporateFareAccessCodes)
            ->setCurrency($currency)
            ->setCustomerLastName($customerLastName)
            ->setDeterminePointOfTurnaround($determinePointOfTurnaround)
            ->setEarliestTicketingDate($earliestTicketingDate)
            ->setFareSubType($fareSubType)
            ->setFareType($fareType)
            ->setLanguageCode($languageCode)
            ->setLegs($legs)
            ->setMatchCode($matchCode)
            ->setNetFareData($netFareData)
            ->setPassengers($passengers)
            ->setPermittedFareType($permittedFareType)
            ->setPlatingCarrier($platingCarrier)
            ->setPublishedTaxOverrideDBCode($publishedTaxOverrideDBCode)
            ->setRecordLocator($recordLocator)
            ->setRecordset($recordset)
            ->setReturnTaxes($returnTaxes)
            ->setReturnTicketData($returnTicketData)
            ->setSegmentNumbers($segmentNumbers)
            ->setSortByFlag($sortByFlag)
            ->setSource($source)
            ->setSplitCorporateRequests($splitCorporateRequests)
            ->setStoreFareQuoteType($storeFareQuoteType)
            ->setTariffSubType($tariffSubType)
            ->setTariffType($tariffType)
            ->setTicketingType($ticketingType)
            ->setTimeOut($timeOut)
            ->setWebFareData($webFareData);
    }
    /**
     * Get AddSurchargeToFare value
     * @return bool|null
     */
    public function getAddSurchargeToFare()
    {
        return $this->AddSurchargeToFare;
    }
    /**
     * Set AddSurchargeToFare value
     * @param bool $addSurchargeToFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setAddSurchargeToFare($addSurchargeToFare = null)
    {
        // validation for constraint: boolean
        if (!is_null($addSurchargeToFare) && !is_bool($addSurchargeToFare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($addSurchargeToFare)), __LINE__);
        }
        $this->AddSurchargeToFare = $addSurchargeToFare;
        return $this;
    }
    /**
     * Get AllotmentAccountData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount|null
     */
    public function getAllotmentAccountData()
    {
        return isset($this->AllotmentAccountData) ? $this->AllotmentAccountData : null;
    }
    /**
     * Set AllotmentAccountData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentAccountData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setAllotmentAccountData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentAccountData = null)
    {
        if (is_null($allotmentAccountData) || (is_array($allotmentAccountData) && empty($allotmentAccountData))) {
            unset($this->AllotmentAccountData);
        } else {
            $this->AllotmentAccountData = $allotmentAccountData;
        }
        return $this;
    }
    /**
     * Get AllowRebook value
     * @return bool|null
     */
    public function getAllowRebook()
    {
        return $this->AllowRebook;
    }
    /**
     * Set AllowRebook value
     * @param bool $allowRebook
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setAllowRebook($allowRebook = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowRebook) && !is_bool($allowRebook)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowRebook)), __LINE__);
        }
        $this->AllowRebook = $allowRebook;
        return $this;
    }
    /**
     * Get BestBuyMode value
     * @return string|null
     */
    public function getBestBuyMode()
    {
        return $this->BestBuyMode;
    }
    /**
     * Set BestBuyMode value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\BestBuyEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\BestBuyEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bestBuyMode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setBestBuyMode($bestBuyMode = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\BestBuyEnum::valueIsValid($bestBuyMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $bestBuyMode, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\BestBuyEnum::getValidValues())), __LINE__);
        }
        $this->BestBuyMode = $bestBuyMode;
        return $this;
    }
    /**
     * Get BookingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBookingDate()
    {
        return isset($this->BookingDate) ? $this->BookingDate : null;
    }
    /**
     * Set BookingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $bookingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setBookingDate($bookingDate = null)
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingDate)), __LINE__);
        }
        if (is_null($bookingDate) || (is_array($bookingDate) && empty($bookingDate))) {
            unset($this->BookingDate);
        } else {
            $this->BookingDate = $bookingDate;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setCRSConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null)
    {
        $this->CRSConfig = $cRSConfig;
        return $this;
    }
    /**
     * Get CorporateFareAccessCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getCorporateFareAccessCodes()
    {
        return isset($this->CorporateFareAccessCodes) ? $this->CorporateFareAccessCodes : null;
    }
    /**
     * Set CorporateFareAccessCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $corporateFareAccessCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setCorporateFareAccessCodes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $corporateFareAccessCodes = null)
    {
        if (is_null($corporateFareAccessCodes) || (is_array($corporateFareAccessCodes) && empty($corporateFareAccessCodes))) {
            unset($this->CorporateFareAccessCodes);
        } else {
            $this->CorporateFareAccessCodes = $corporateFareAccessCodes;
        }
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Get CustomerLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerLastName()
    {
        return isset($this->CustomerLastName) ? $this->CustomerLastName : null;
    }
    /**
     * Set CustomerLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerLastName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setCustomerLastName($customerLastName = null)
    {
        // validation for constraint: string
        if (!is_null($customerLastName) && !is_string($customerLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerLastName)), __LINE__);
        }
        if (is_null($customerLastName) || (is_array($customerLastName) && empty($customerLastName))) {
            unset($this->CustomerLastName);
        } else {
            $this->CustomerLastName = $customerLastName;
        }
        return $this;
    }
    /**
     * Get DeterminePointOfTurnaround value
     * @return int|null
     */
    public function getDeterminePointOfTurnaround()
    {
        return $this->DeterminePointOfTurnaround;
    }
    /**
     * Set DeterminePointOfTurnaround value
     * @param int $determinePointOfTurnaround
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setDeterminePointOfTurnaround($determinePointOfTurnaround = null)
    {
        // validation for constraint: int
        if (!is_null($determinePointOfTurnaround) && !is_numeric($determinePointOfTurnaround)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($determinePointOfTurnaround)), __LINE__);
        }
        $this->DeterminePointOfTurnaround = $determinePointOfTurnaround;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
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
     * Get FareSubType value
     * @return string|null
     */
    public function getFareSubType()
    {
        return $this->FareSubType;
    }
    /**
     * Set FareSubType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fareSubType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setFareSubType($fareSubType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::valueIsValid($fareSubType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fareSubType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::getValidValues())), __LINE__);
        }
        $this->FareSubType = $fareSubType;
        return $this;
    }
    /**
     * Get FareType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareType()
    {
        return isset($this->FareType) ? $this->FareType : null;
    }
    /**
     * Set FareType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setFareType($fareType = null)
    {
        // validation for constraint: string
        if (!is_null($fareType) && !is_string($fareType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareType)), __LINE__);
        }
        if (is_null($fareType) || (is_array($fareType) && empty($fareType))) {
            unset($this->FareType);
        } else {
            $this->FareType = $fareType;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
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
     * Get Legs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestLeg|null
     */
    public function getLegs()
    {
        return isset($this->Legs) ? $this->Legs : null;
    }
    /**
     * Set Legs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestLeg $legs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setLegs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestLeg $legs = null)
    {
        if (is_null($legs) || (is_array($legs) && empty($legs))) {
            unset($this->Legs);
        } else {
            $this->Legs = $legs;
        }
        return $this;
    }
    /**
     * Get MatchCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMatchCode()
    {
        return isset($this->MatchCode) ? $this->MatchCode : null;
    }
    /**
     * Set MatchCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $matchCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setMatchCode($matchCode = null)
    {
        // validation for constraint: string
        if (!is_null($matchCode) && !is_string($matchCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($matchCode)), __LINE__);
        }
        if (is_null($matchCode) || (is_array($matchCode) && empty($matchCode))) {
            unset($this->MatchCode);
        } else {
            $this->MatchCode = $matchCode;
        }
        return $this;
    }
    /**
     * Get NetFareData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestNetData|null
     */
    public function getNetFareData()
    {
        return isset($this->NetFareData) ? $this->NetFareData : null;
    }
    /**
     * Set NetFareData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestNetData $netFareData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setNetFareData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestNetData $netFareData = null)
    {
        if (is_null($netFareData) || (is_array($netFareData) && empty($netFareData))) {
            unset($this->NetFareData);
        } else {
            $this->NetFareData = $netFareData;
        }
        return $this;
    }
    /**
     * Get Passengers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestPasType|null
     */
    public function getPassengers()
    {
        return isset($this->Passengers) ? $this->Passengers : null;
    }
    /**
     * Set Passengers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestPasType $passengers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setPassengers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestPasType $passengers = null)
    {
        if (is_null($passengers) || (is_array($passengers) && empty($passengers))) {
            unset($this->Passengers);
        } else {
            $this->Passengers = $passengers;
        }
        return $this;
    }
    /**
     * Get PermittedFareType value
     * @return string|null
     */
    public function getPermittedFareType()
    {
        return $this->PermittedFareType;
    }
    /**
     * Set PermittedFareType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PermittedFareTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PermittedFareTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $permittedFareType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setPermittedFareType($permittedFareType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PermittedFareTypeEnum::valueIsValid($permittedFareType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $permittedFareType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PermittedFareTypeEnum::getValidValues())), __LINE__);
        }
        $this->PermittedFareType = $permittedFareType;
        return $this;
    }
    /**
     * Get PlatingCarrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPlatingCarrier()
    {
        return isset($this->PlatingCarrier) ? $this->PlatingCarrier : null;
    }
    /**
     * Set PlatingCarrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $platingCarrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setPlatingCarrier($platingCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($platingCarrier) && !is_string($platingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($platingCarrier)), __LINE__);
        }
        if (is_null($platingCarrier) || (is_array($platingCarrier) && empty($platingCarrier))) {
            unset($this->PlatingCarrier);
        } else {
            $this->PlatingCarrier = $platingCarrier;
        }
        return $this;
    }
    /**
     * Get PublishedTaxOverrideDBCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPublishedTaxOverrideDBCode()
    {
        return isset($this->PublishedTaxOverrideDBCode) ? $this->PublishedTaxOverrideDBCode : null;
    }
    /**
     * Set PublishedTaxOverrideDBCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $publishedTaxOverrideDBCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setPublishedTaxOverrideDBCode($publishedTaxOverrideDBCode = null)
    {
        // validation for constraint: string
        if (!is_null($publishedTaxOverrideDBCode) && !is_string($publishedTaxOverrideDBCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($publishedTaxOverrideDBCode)), __LINE__);
        }
        if (is_null($publishedTaxOverrideDBCode) || (is_array($publishedTaxOverrideDBCode) && empty($publishedTaxOverrideDBCode))) {
            unset($this->PublishedTaxOverrideDBCode);
        } else {
            $this->PublishedTaxOverrideDBCode = $publishedTaxOverrideDBCode;
        }
        return $this;
    }
    /**
     * Get RecordLocator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecordLocator()
    {
        return isset($this->RecordLocator) ? $this->RecordLocator : null;
    }
    /**
     * Set RecordLocator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recordLocator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setRecordLocator($recordLocator = null)
    {
        // validation for constraint: string
        if (!is_null($recordLocator) && !is_string($recordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordLocator)), __LINE__);
        }
        if (is_null($recordLocator) || (is_array($recordLocator) && empty($recordLocator))) {
            unset($this->RecordLocator);
        } else {
            $this->RecordLocator = $recordLocator;
        }
        return $this;
    }
    /**
     * Get Recordset value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecordset()
    {
        return isset($this->Recordset) ? $this->Recordset : null;
    }
    /**
     * Set Recordset value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recordset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setRecordset($recordset = null)
    {
        // validation for constraint: string
        if (!is_null($recordset) && !is_string($recordset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordset)), __LINE__);
        }
        if (is_null($recordset) || (is_array($recordset) && empty($recordset))) {
            unset($this->Recordset);
        } else {
            $this->Recordset = $recordset;
        }
        return $this;
    }
    /**
     * Get ReturnTaxes value
     * @return bool|null
     */
    public function getReturnTaxes()
    {
        return $this->ReturnTaxes;
    }
    /**
     * Set ReturnTaxes value
     * @param bool $returnTaxes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setReturnTaxes($returnTaxes = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnTaxes) && !is_bool($returnTaxes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnTaxes)), __LINE__);
        }
        $this->ReturnTaxes = $returnTaxes;
        return $this;
    }
    /**
     * Get ReturnTicketData value
     * @return bool|null
     */
    public function getReturnTicketData()
    {
        return $this->ReturnTicketData;
    }
    /**
     * Set ReturnTicketData value
     * @param bool $returnTicketData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setReturnTicketData($returnTicketData = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnTicketData) && !is_bool($returnTicketData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnTicketData)), __LINE__);
        }
        $this->ReturnTicketData = $returnTicketData;
        return $this;
    }
    /**
     * Get SegmentNumbers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getSegmentNumbers()
    {
        return isset($this->SegmentNumbers) ? $this->SegmentNumbers : null;
    }
    /**
     * Set SegmentNumbers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $segmentNumbers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setSegmentNumbers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $segmentNumbers = null)
    {
        if (is_null($segmentNumbers) || (is_array($segmentNumbers) && empty($segmentNumbers))) {
            unset($this->SegmentNumbers);
        } else {
            $this->SegmentNumbers = $segmentNumbers;
        }
        return $this;
    }
    /**
     * Get SortByFlag value
     * @return string|null
     */
    public function getSortByFlag()
    {
        return $this->SortByFlag;
    }
    /**
     * Set SortByFlag value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ResultFareFlagEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ResultFareFlagEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sortByFlag
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setSortByFlag($sortByFlag = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ResultFareFlagEnum::valueIsValid($sortByFlag)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sortByFlag, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ResultFareFlagEnum::getValidValues())), __LINE__);
        }
        $this->SortByFlag = $sortByFlag;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
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
     * Get SplitCorporateRequests value
     * @return bool|null
     */
    public function getSplitCorporateRequests()
    {
        return $this->SplitCorporateRequests;
    }
    /**
     * Set SplitCorporateRequests value
     * @param bool $splitCorporateRequests
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setSplitCorporateRequests($splitCorporateRequests = null)
    {
        // validation for constraint: boolean
        if (!is_null($splitCorporateRequests) && !is_bool($splitCorporateRequests)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($splitCorporateRequests)), __LINE__);
        }
        $this->SplitCorporateRequests = $splitCorporateRequests;
        return $this;
    }
    /**
     * Get StoreFareQuoteType value
     * @return string|null
     */
    public function getStoreFareQuoteType()
    {
        return $this->StoreFareQuoteType;
    }
    /**
     * Set StoreFareQuoteType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\StoreFareQuoteTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\StoreFareQuoteTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $storeFareQuoteType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setStoreFareQuoteType($storeFareQuoteType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\StoreFareQuoteTypeEnum::valueIsValid($storeFareQuoteType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $storeFareQuoteType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\StoreFareQuoteTypeEnum::getValidValues())), __LINE__);
        }
        $this->StoreFareQuoteType = $storeFareQuoteType;
        return $this;
    }
    /**
     * Get TariffSubType value
     * @return string|null
     */
    public function getTariffSubType()
    {
        return $this->TariffSubType;
    }
    /**
     * Set TariffSubType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffSubTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffSubTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tariffSubType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setTariffSubType($tariffSubType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffSubTypeEnum::valueIsValid($tariffSubType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tariffSubType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffSubTypeEnum::getValidValues())), __LINE__);
        }
        $this->TariffSubType = $tariffSubType;
        return $this;
    }
    /**
     * Get TariffType value
     * @return string|null
     */
    public function getTariffType()
    {
        return $this->TariffType;
    }
    /**
     * Set TariffType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tariffType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setTariffType($tariffType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::valueIsValid($tariffType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tariffType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::getValidValues())), __LINE__);
        }
        $this->TariffType = $tariffType;
        return $this;
    }
    /**
     * Get TicketingType value
     * @return string|null
     */
    public function getTicketingType()
    {
        return $this->TicketingType;
    }
    /**
     * Set TicketingType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TicketingTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TicketingTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ticketingType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setTicketingType($ticketingType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TicketingTypeEnum::valueIsValid($ticketingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ticketingType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TicketingTypeEnum::getValidValues())), __LINE__);
        }
        $this->TicketingType = $ticketingType;
        return $this;
    }
    /**
     * Get TimeOut value
     * @return int|null
     */
    public function getTimeOut()
    {
        return $this->TimeOut;
    }
    /**
     * Set TimeOut value
     * @param int $timeOut
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setTimeOut($timeOut = null)
    {
        // validation for constraint: int
        if (!is_null($timeOut) && !is_numeric($timeOut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($timeOut)), __LINE__);
        }
        $this->TimeOut = $timeOut;
        return $this;
    }
    /**
     * Get WebFareData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestWebFareData|null
     */
    public function getWebFareData()
    {
        return isset($this->WebFareData) ? $this->WebFareData : null;
    }
    /**
     * Set WebFareData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestWebFareData $webFareData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
     */
    public function setWebFareData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestWebFareData $webFareData = null)
    {
        if (is_null($webFareData) || (is_array($webFareData) && empty($webFareData))) {
            unset($this->WebFareData);
        } else {
            $this->WebFareData = $webFareData;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestData
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
