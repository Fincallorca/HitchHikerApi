<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferenceRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PreferenceRequestData
 * @subpackage Structs
 */
class PreferenceRequestData extends AbstractStructBase
{
    /**
     * The Currencies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Currencies;
    /**
     * The Destinations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Destinations;
    /**
     * The DurationRange
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $DurationRange;
    /**
     * The FareTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FareTypes;
    /**
     * The KeywordTables
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $KeywordTables;
    /**
     * The MandatoryKeywords
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $MandatoryKeywords;
    /**
     * The Matchcodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Matchcodes;
    /**
     * The MaximumPASFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $MaximumPASFare;
    /**
     * The MaximumTemperature
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $MaximumTemperature;
    /**
     * The MinimumPASFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $MinimumPASFare;
    /**
     * The MinimumTemperature
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $MinimumTemperature;
    /**
     * The NetFareDBCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $NetFareDBCodes;
    /**
     * The OnewayFlight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $OnewayFlight;
    /**
     * The OptionalKeywords
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $OptionalKeywords;
    /**
     * The Origins
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Origins;
    /**
     * The PCCs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $PCCs;
    /**
     * The Sorted
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Sorted;
    /**
     * The TravelDates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceTravelDates
     */
    public $TravelDates;
    /**
     * Constructor method for PreferenceRequestData
     * @uses PreferenceRequestData::setCurrencies()
     * @uses PreferenceRequestData::setDestinations()
     * @uses PreferenceRequestData::setDurationRange()
     * @uses PreferenceRequestData::setFareTypes()
     * @uses PreferenceRequestData::setKeywordTables()
     * @uses PreferenceRequestData::setMandatoryKeywords()
     * @uses PreferenceRequestData::setMatchcodes()
     * @uses PreferenceRequestData::setMaximumPASFare()
     * @uses PreferenceRequestData::setMaximumTemperature()
     * @uses PreferenceRequestData::setMinimumPASFare()
     * @uses PreferenceRequestData::setMinimumTemperature()
     * @uses PreferenceRequestData::setNetFareDBCodes()
     * @uses PreferenceRequestData::setOnewayFlight()
     * @uses PreferenceRequestData::setOptionalKeywords()
     * @uses PreferenceRequestData::setOrigins()
     * @uses PreferenceRequestData::setPCCs()
     * @uses PreferenceRequestData::setSorted()
     * @uses PreferenceRequestData::setTravelDates()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $currencies
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $destinations
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $durationRange
     * @param string $fareTypes
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $keywordTables
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $mandatoryKeywords
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchcodes
     * @param float $maximumPASFare
     * @param int $maximumTemperature
     * @param float $minimumPASFare
     * @param int $minimumTemperature
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareDBCodes
     * @param bool $onewayFlight
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $optionalKeywords
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $origins
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $pCCs
     * @param string $sorted
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceTravelDates $travelDates
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $currencies = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $destinations = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $durationRange = null, $fareTypes = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $keywordTables = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $mandatoryKeywords = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchcodes = null, $maximumPASFare = null, $maximumTemperature = null, $minimumPASFare = null, $minimumTemperature = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareDBCodes = null, $onewayFlight = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $optionalKeywords = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $origins = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $pCCs = null, $sorted = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceTravelDates $travelDates = null)
    {
        $this
            ->setCurrencies($currencies)
            ->setDestinations($destinations)
            ->setDurationRange($durationRange)
            ->setFareTypes($fareTypes)
            ->setKeywordTables($keywordTables)
            ->setMandatoryKeywords($mandatoryKeywords)
            ->setMatchcodes($matchcodes)
            ->setMaximumPASFare($maximumPASFare)
            ->setMaximumTemperature($maximumTemperature)
            ->setMinimumPASFare($minimumPASFare)
            ->setMinimumTemperature($minimumTemperature)
            ->setNetFareDBCodes($netFareDBCodes)
            ->setOnewayFlight($onewayFlight)
            ->setOptionalKeywords($optionalKeywords)
            ->setOrigins($origins)
            ->setPCCs($pCCs)
            ->setSorted($sorted)
            ->setTravelDates($travelDates);
    }
    /**
     * Get Currencies value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getCurrencies()
    {
        return isset($this->Currencies) ? $this->Currencies : null;
    }
    /**
     * Set Currencies value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $currencies
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setCurrencies(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $currencies = null)
    {
        if (is_null($currencies) || (is_array($currencies) && empty($currencies))) {
            unset($this->Currencies);
        } else {
            $this->Currencies = $currencies;
        }
        return $this;
    }
    /**
     * Get Destinations value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getDestinations()
    {
        return isset($this->Destinations) ? $this->Destinations : null;
    }
    /**
     * Set Destinations value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $destinations
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setDestinations(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $destinations = null)
    {
        if (is_null($destinations) || (is_array($destinations) && empty($destinations))) {
            unset($this->Destinations);
        } else {
            $this->Destinations = $destinations;
        }
        return $this;
    }
    /**
     * Get DurationRange value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getDurationRange()
    {
        return $this->DurationRange;
    }
    /**
     * Set DurationRange value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $durationRange
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setDurationRange(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $durationRange = null)
    {
        $this->DurationRange = $durationRange;
        return $this;
    }
    /**
     * Get FareTypes value
     * @return string|null
     */
    public function getFareTypes()
    {
        return $this->FareTypes;
    }
    /**
     * Set FareTypes value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PrefFareTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PrefFareTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fareTypes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setFareTypes($fareTypes = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PrefFareTypeEnum::valueIsValid($fareTypes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fareTypes, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PrefFareTypeEnum::getValidValues())), __LINE__);
        }
        $this->FareTypes = $fareTypes;
        return $this;
    }
    /**
     * Get KeywordTables value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getKeywordTables()
    {
        return isset($this->KeywordTables) ? $this->KeywordTables : null;
    }
    /**
     * Set KeywordTables value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $keywordTables
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setKeywordTables(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $keywordTables = null)
    {
        if (is_null($keywordTables) || (is_array($keywordTables) && empty($keywordTables))) {
            unset($this->KeywordTables);
        } else {
            $this->KeywordTables = $keywordTables;
        }
        return $this;
    }
    /**
     * Get MandatoryKeywords value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getMandatoryKeywords()
    {
        return isset($this->MandatoryKeywords) ? $this->MandatoryKeywords : null;
    }
    /**
     * Set MandatoryKeywords value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $mandatoryKeywords
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setMandatoryKeywords(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $mandatoryKeywords = null)
    {
        if (is_null($mandatoryKeywords) || (is_array($mandatoryKeywords) && empty($mandatoryKeywords))) {
            unset($this->MandatoryKeywords);
        } else {
            $this->MandatoryKeywords = $mandatoryKeywords;
        }
        return $this;
    }
    /**
     * Get Matchcodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getMatchcodes()
    {
        return isset($this->Matchcodes) ? $this->Matchcodes : null;
    }
    /**
     * Set Matchcodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchcodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setMatchcodes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchcodes = null)
    {
        if (is_null($matchcodes) || (is_array($matchcodes) && empty($matchcodes))) {
            unset($this->Matchcodes);
        } else {
            $this->Matchcodes = $matchcodes;
        }
        return $this;
    }
    /**
     * Get MaximumPASFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getMaximumPASFare()
    {
        return isset($this->MaximumPASFare) ? $this->MaximumPASFare : null;
    }
    /**
     * Set MaximumPASFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $maximumPASFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setMaximumPASFare($maximumPASFare = null)
    {
        if (is_null($maximumPASFare) || (is_array($maximumPASFare) && empty($maximumPASFare))) {
            unset($this->MaximumPASFare);
        } else {
            $this->MaximumPASFare = $maximumPASFare;
        }
        return $this;
    }
    /**
     * Get MaximumTemperature value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMaximumTemperature()
    {
        return isset($this->MaximumTemperature) ? $this->MaximumTemperature : null;
    }
    /**
     * Set MaximumTemperature value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $maximumTemperature
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setMaximumTemperature($maximumTemperature = null)
    {
        // validation for constraint: int
        if (!is_null($maximumTemperature) && !is_numeric($maximumTemperature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumTemperature)), __LINE__);
        }
        if (is_null($maximumTemperature) || (is_array($maximumTemperature) && empty($maximumTemperature))) {
            unset($this->MaximumTemperature);
        } else {
            $this->MaximumTemperature = $maximumTemperature;
        }
        return $this;
    }
    /**
     * Get MinimumPASFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getMinimumPASFare()
    {
        return isset($this->MinimumPASFare) ? $this->MinimumPASFare : null;
    }
    /**
     * Set MinimumPASFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $minimumPASFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setMinimumPASFare($minimumPASFare = null)
    {
        if (is_null($minimumPASFare) || (is_array($minimumPASFare) && empty($minimumPASFare))) {
            unset($this->MinimumPASFare);
        } else {
            $this->MinimumPASFare = $minimumPASFare;
        }
        return $this;
    }
    /**
     * Get MinimumTemperature value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMinimumTemperature()
    {
        return isset($this->MinimumTemperature) ? $this->MinimumTemperature : null;
    }
    /**
     * Set MinimumTemperature value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $minimumTemperature
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setMinimumTemperature($minimumTemperature = null)
    {
        // validation for constraint: int
        if (!is_null($minimumTemperature) && !is_numeric($minimumTemperature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimumTemperature)), __LINE__);
        }
        if (is_null($minimumTemperature) || (is_array($minimumTemperature) && empty($minimumTemperature))) {
            unset($this->MinimumTemperature);
        } else {
            $this->MinimumTemperature = $minimumTemperature;
        }
        return $this;
    }
    /**
     * Get NetFareDBCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getNetFareDBCodes()
    {
        return isset($this->NetFareDBCodes) ? $this->NetFareDBCodes : null;
    }
    /**
     * Set NetFareDBCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareDBCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setNetFareDBCodes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareDBCodes = null)
    {
        if (is_null($netFareDBCodes) || (is_array($netFareDBCodes) && empty($netFareDBCodes))) {
            unset($this->NetFareDBCodes);
        } else {
            $this->NetFareDBCodes = $netFareDBCodes;
        }
        return $this;
    }
    /**
     * Get OnewayFlight value
     * @return bool|null
     */
    public function getOnewayFlight()
    {
        return $this->OnewayFlight;
    }
    /**
     * Set OnewayFlight value
     * @param bool $onewayFlight
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setOnewayFlight($onewayFlight = null)
    {
        // validation for constraint: boolean
        if (!is_null($onewayFlight) && !is_bool($onewayFlight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($onewayFlight)), __LINE__);
        }
        $this->OnewayFlight = $onewayFlight;
        return $this;
    }
    /**
     * Get OptionalKeywords value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getOptionalKeywords()
    {
        return isset($this->OptionalKeywords) ? $this->OptionalKeywords : null;
    }
    /**
     * Set OptionalKeywords value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $optionalKeywords
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setOptionalKeywords(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $optionalKeywords = null)
    {
        if (is_null($optionalKeywords) || (is_array($optionalKeywords) && empty($optionalKeywords))) {
            unset($this->OptionalKeywords);
        } else {
            $this->OptionalKeywords = $optionalKeywords;
        }
        return $this;
    }
    /**
     * Get Origins value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getOrigins()
    {
        return $this->Origins;
    }
    /**
     * Set Origins value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $origins
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setOrigins(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $origins = null)
    {
        $this->Origins = $origins;
        return $this;
    }
    /**
     * Get PCCs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getPCCs()
    {
        return isset($this->PCCs) ? $this->PCCs : null;
    }
    /**
     * Set PCCs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $pCCs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setPCCs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $pCCs = null)
    {
        if (is_null($pCCs) || (is_array($pCCs) && empty($pCCs))) {
            unset($this->PCCs);
        } else {
            $this->PCCs = $pCCs;
        }
        return $this;
    }
    /**
     * Get Sorted value
     * @return string|null
     */
    public function getSorted()
    {
        return $this->Sorted;
    }
    /**
     * Set Sorted value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PrefSortEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PrefSortEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sorted
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setSorted($sorted = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PrefSortEnum::valueIsValid($sorted)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sorted, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PrefSortEnum::getValidValues())), __LINE__);
        }
        $this->Sorted = $sorted;
        return $this;
    }
    /**
     * Get TravelDates value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceTravelDates|null
     */
    public function getTravelDates()
    {
        return isset($this->TravelDates) ? $this->TravelDates : null;
    }
    /**
     * Set TravelDates value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceTravelDates $travelDates
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
     */
    public function setTravelDates(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceTravelDates $travelDates = null)
    {
        if (is_null($travelDates) || (is_array($travelDates) && empty($travelDates))) {
            unset($this->TravelDates);
        } else {
            $this->TravelDates = $travelDates;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceRequestData
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
