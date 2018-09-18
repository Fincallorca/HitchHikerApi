<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferenceResponseItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PreferenceResponseItem
 * @subpackage Structs
 */
class PreferenceResponseItem extends AbstractStructBase
{
    /**
     * The ArrivalDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalDate;
    /**
     * The Carrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Carrier;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Currency;
    /**
     * The DepartureDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureDate;
    /**
     * The Destination
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Destination;
    /**
     * The FareSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareSource;
    /**
     * The Matchcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Matchcode;
    /**
     * The MaxTemperature
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MaxTemperature;
    /**
     * The MinTemperature
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MinTemperature;
    /**
     * The ModuleSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ModuleSource;
    /**
     * The NetFareDB
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NetFareDB;
    /**
     * The OptionalKeywordMatch
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $OptionalKeywordMatch;
    /**
     * The Origin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Origin;
    /**
     * The PCC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PCC;
    /**
     * The PasFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PasFare;
    /**
     * The PercentageMatch
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PercentageMatch;
    /**
     * The TotalTravelTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TotalTravelTime;
    /**
     * The TripDuration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $TripDuration;
    /**
     * Constructor method for PreferenceResponseItem
     * @uses PreferenceResponseItem::setArrivalDate()
     * @uses PreferenceResponseItem::setCarrier()
     * @uses PreferenceResponseItem::setCurrency()
     * @uses PreferenceResponseItem::setDepartureDate()
     * @uses PreferenceResponseItem::setDestination()
     * @uses PreferenceResponseItem::setFareSource()
     * @uses PreferenceResponseItem::setMatchcode()
     * @uses PreferenceResponseItem::setMaxTemperature()
     * @uses PreferenceResponseItem::setMinTemperature()
     * @uses PreferenceResponseItem::setModuleSource()
     * @uses PreferenceResponseItem::setNetFareDB()
     * @uses PreferenceResponseItem::setOptionalKeywordMatch()
     * @uses PreferenceResponseItem::setOrigin()
     * @uses PreferenceResponseItem::setPCC()
     * @uses PreferenceResponseItem::setPasFare()
     * @uses PreferenceResponseItem::setPercentageMatch()
     * @uses PreferenceResponseItem::setTotalTravelTime()
     * @uses PreferenceResponseItem::setTripDuration()
     * @param string $arrivalDate
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carrier
     * @param string $currency
     * @param string $departureDate
     * @param string $destination
     * @param string $fareSource
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchcode
     * @param string $maxTemperature
     * @param string $minTemperature
     * @param string $moduleSource
     * @param string $netFareDB
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $optionalKeywordMatch
     * @param string $origin
     * @param string $pCC
     * @param string $pasFare
     * @param string $percentageMatch
     * @param string $totalTravelTime
     * @param int $tripDuration
     */
    public function __construct($arrivalDate = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carrier = null, $currency = null, $departureDate = null, $destination = null, $fareSource = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchcode = null, $maxTemperature = null, $minTemperature = null, $moduleSource = null, $netFareDB = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $optionalKeywordMatch = null, $origin = null, $pCC = null, $pasFare = null, $percentageMatch = null, $totalTravelTime = null, $tripDuration = null)
    {
        $this
            ->setArrivalDate($arrivalDate)
            ->setCarrier($carrier)
            ->setCurrency($currency)
            ->setDepartureDate($departureDate)
            ->setDestination($destination)
            ->setFareSource($fareSource)
            ->setMatchcode($matchcode)
            ->setMaxTemperature($maxTemperature)
            ->setMinTemperature($minTemperature)
            ->setModuleSource($moduleSource)
            ->setNetFareDB($netFareDB)
            ->setOptionalKeywordMatch($optionalKeywordMatch)
            ->setOrigin($origin)
            ->setPCC($pCC)
            ->setPasFare($pasFare)
            ->setPercentageMatch($percentageMatch)
            ->setTotalTravelTime($totalTravelTime)
            ->setTripDuration($tripDuration);
    }
    /**
     * Get ArrivalDate value
     * @return string|null
     */
    public function getArrivalDate()
    {
        return $this->ArrivalDate;
    }
    /**
     * Set ArrivalDate value
     * @param string $arrivalDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setArrivalDate($arrivalDate = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalDate) && !is_string($arrivalDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalDate)), __LINE__);
        }
        $this->ArrivalDate = $arrivalDate;
        return $this;
    }
    /**
     * Get Carrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getCarrier()
    {
        return isset($this->Carrier) ? $this->Carrier : null;
    }
    /**
     * Set Carrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setCarrier(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carrier = null)
    {
        if (is_null($carrier) || (is_array($carrier) && empty($carrier))) {
            unset($this->Carrier);
        } else {
            $this->Carrier = $carrier;
        }
        return $this;
    }
    /**
     * Get Currency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCurrency()
    {
        return isset($this->Currency) ? $this->Currency : null;
    }
    /**
     * Set Currency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $currency
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        if (is_null($currency) || (is_array($currency) && empty($currency))) {
            unset($this->Currency);
        } else {
            $this->Currency = $currency;
        }
        return $this;
    }
    /**
     * Get DepartureDate value
     * @return string|null
     */
    public function getDepartureDate()
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param string $departureDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setDepartureDate($departureDate = null)
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDate)), __LINE__);
        }
        $this->DepartureDate = $departureDate;
        return $this;
    }
    /**
     * Get Destination value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDestination()
    {
        return isset($this->Destination) ? $this->Destination : null;
    }
    /**
     * Set Destination value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $destination
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setDestination($destination = null)
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destination)), __LINE__);
        }
        if (is_null($destination) || (is_array($destination) && empty($destination))) {
            unset($this->Destination);
        } else {
            $this->Destination = $destination;
        }
        return $this;
    }
    /**
     * Get FareSource value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareSource()
    {
        return isset($this->FareSource) ? $this->FareSource : null;
    }
    /**
     * Set FareSource value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareSource
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setFareSource($fareSource = null)
    {
        // validation for constraint: string
        if (!is_null($fareSource) && !is_string($fareSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareSource)), __LINE__);
        }
        if (is_null($fareSource) || (is_array($fareSource) && empty($fareSource))) {
            unset($this->FareSource);
        } else {
            $this->FareSource = $fareSource;
        }
        return $this;
    }
    /**
     * Get Matchcode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getMatchcode()
    {
        return isset($this->Matchcode) ? $this->Matchcode : null;
    }
    /**
     * Set Matchcode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchcode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setMatchcode(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchcode = null)
    {
        if (is_null($matchcode) || (is_array($matchcode) && empty($matchcode))) {
            unset($this->Matchcode);
        } else {
            $this->Matchcode = $matchcode;
        }
        return $this;
    }
    /**
     * Get MaxTemperature value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMaxTemperature()
    {
        return isset($this->MaxTemperature) ? $this->MaxTemperature : null;
    }
    /**
     * Set MaxTemperature value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $maxTemperature
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setMaxTemperature($maxTemperature = null)
    {
        // validation for constraint: string
        if (!is_null($maxTemperature) && !is_string($maxTemperature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxTemperature)), __LINE__);
        }
        if (is_null($maxTemperature) || (is_array($maxTemperature) && empty($maxTemperature))) {
            unset($this->MaxTemperature);
        } else {
            $this->MaxTemperature = $maxTemperature;
        }
        return $this;
    }
    /**
     * Get MinTemperature value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMinTemperature()
    {
        return isset($this->MinTemperature) ? $this->MinTemperature : null;
    }
    /**
     * Set MinTemperature value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $minTemperature
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setMinTemperature($minTemperature = null)
    {
        // validation for constraint: string
        if (!is_null($minTemperature) && !is_string($minTemperature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minTemperature)), __LINE__);
        }
        if (is_null($minTemperature) || (is_array($minTemperature) && empty($minTemperature))) {
            unset($this->MinTemperature);
        } else {
            $this->MinTemperature = $minTemperature;
        }
        return $this;
    }
    /**
     * Get ModuleSource value
     * @return string|null
     */
    public function getModuleSource()
    {
        return $this->ModuleSource;
    }
    /**
     * Set ModuleSource value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $moduleSource
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setModuleSource($moduleSource = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::valueIsValid($moduleSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $moduleSource, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::getValidValues())), __LINE__);
        }
        $this->ModuleSource = $moduleSource;
        return $this;
    }
    /**
     * Get NetFareDB value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNetFareDB()
    {
        return isset($this->NetFareDB) ? $this->NetFareDB : null;
    }
    /**
     * Set NetFareDB value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $netFareDB
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setNetFareDB($netFareDB = null)
    {
        // validation for constraint: string
        if (!is_null($netFareDB) && !is_string($netFareDB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($netFareDB)), __LINE__);
        }
        if (is_null($netFareDB) || (is_array($netFareDB) && empty($netFareDB))) {
            unset($this->NetFareDB);
        } else {
            $this->NetFareDB = $netFareDB;
        }
        return $this;
    }
    /**
     * Get OptionalKeywordMatch value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getOptionalKeywordMatch()
    {
        return isset($this->OptionalKeywordMatch) ? $this->OptionalKeywordMatch : null;
    }
    /**
     * Set OptionalKeywordMatch value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $optionalKeywordMatch
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setOptionalKeywordMatch(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $optionalKeywordMatch = null)
    {
        if (is_null($optionalKeywordMatch) || (is_array($optionalKeywordMatch) && empty($optionalKeywordMatch))) {
            unset($this->OptionalKeywordMatch);
        } else {
            $this->OptionalKeywordMatch = $optionalKeywordMatch;
        }
        return $this;
    }
    /**
     * Get Origin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrigin()
    {
        return isset($this->Origin) ? $this->Origin : null;
    }
    /**
     * Set Origin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $origin
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setOrigin($origin = null)
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($origin)), __LINE__);
        }
        if (is_null($origin) || (is_array($origin) && empty($origin))) {
            unset($this->Origin);
        } else {
            $this->Origin = $origin;
        }
        return $this;
    }
    /**
     * Get PCC value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPCC()
    {
        return isset($this->PCC) ? $this->PCC : null;
    }
    /**
     * Set PCC value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pCC
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setPCC($pCC = null)
    {
        // validation for constraint: string
        if (!is_null($pCC) && !is_string($pCC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pCC)), __LINE__);
        }
        if (is_null($pCC) || (is_array($pCC) && empty($pCC))) {
            unset($this->PCC);
        } else {
            $this->PCC = $pCC;
        }
        return $this;
    }
    /**
     * Get PasFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPasFare()
    {
        return isset($this->PasFare) ? $this->PasFare : null;
    }
    /**
     * Set PasFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pasFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setPasFare($pasFare = null)
    {
        // validation for constraint: string
        if (!is_null($pasFare) && !is_string($pasFare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pasFare)), __LINE__);
        }
        if (is_null($pasFare) || (is_array($pasFare) && empty($pasFare))) {
            unset($this->PasFare);
        } else {
            $this->PasFare = $pasFare;
        }
        return $this;
    }
    /**
     * Get PercentageMatch value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPercentageMatch()
    {
        return isset($this->PercentageMatch) ? $this->PercentageMatch : null;
    }
    /**
     * Set PercentageMatch value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $percentageMatch
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setPercentageMatch($percentageMatch = null)
    {
        // validation for constraint: string
        if (!is_null($percentageMatch) && !is_string($percentageMatch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percentageMatch)), __LINE__);
        }
        if (is_null($percentageMatch) || (is_array($percentageMatch) && empty($percentageMatch))) {
            unset($this->PercentageMatch);
        } else {
            $this->PercentageMatch = $percentageMatch;
        }
        return $this;
    }
    /**
     * Get TotalTravelTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTotalTravelTime()
    {
        return isset($this->TotalTravelTime) ? $this->TotalTravelTime : null;
    }
    /**
     * Set TotalTravelTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $totalTravelTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setTotalTravelTime($totalTravelTime = null)
    {
        // validation for constraint: string
        if (!is_null($totalTravelTime) && !is_string($totalTravelTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($totalTravelTime)), __LINE__);
        }
        if (is_null($totalTravelTime) || (is_array($totalTravelTime) && empty($totalTravelTime))) {
            unset($this->TotalTravelTime);
        } else {
            $this->TotalTravelTime = $totalTravelTime;
        }
        return $this;
    }
    /**
     * Get TripDuration value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTripDuration()
    {
        return isset($this->TripDuration) ? $this->TripDuration : null;
    }
    /**
     * Set TripDuration value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $tripDuration
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
     */
    public function setTripDuration($tripDuration = null)
    {
        // validation for constraint: int
        if (!is_null($tripDuration) && !is_numeric($tripDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tripDuration)), __LINE__);
        }
        if (is_null($tripDuration) || (is_array($tripDuration) && empty($tripDuration))) {
            unset($this->TripDuration);
        } else {
            $this->TripDuration = $tripDuration;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem
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
