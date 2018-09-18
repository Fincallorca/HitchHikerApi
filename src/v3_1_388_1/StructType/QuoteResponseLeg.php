<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuoteResponseLeg StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QuoteResponseLeg
 * @subpackage Structs
 */
class QuoteResponseLeg extends AbstractStructBase
{
    /**
     * The BlackoutDates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBlackoutDateData
     */
    public $BlackoutDates;
    /**
     * The FareGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FareGroup;
    /**
     * The FareGroups
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $FareGroups;
    /**
     * The FareLink
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareLink;
    /**
     * The FareType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FareType;
    /**
     * The FlightType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FlightType;
    /**
     * The LastBookingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastBookingDate;
    /**
     * The LastTicketingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastTicketingDate;
    /**
     * The MaximumTicketingDaysAfterBooking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximumTicketingDaysAfterBooking;
    /**
     * The MinimumBookingDaysBeforeDeparture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimumBookingDaysBeforeDeparture;
    /**
     * The MinimumTicketingDaysBeforeDeparture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimumTicketingDaysBeforeDeparture;
    /**
     * The ProductID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductID;
    /**
     * The Recordset
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Recordset;
    /**
     * The RoutingNames
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $RoutingNames;
    /**
     * The RuleBookingClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RuleBookingClass;
    /**
     * The RuleNames
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $RuleNames;
    /**
     * The SeasonDates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeasonDateData
     */
    public $SeasonDates;
    /**
     * The TarifLinks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $TarifLinks;
    /**
     * The TarifNames
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $TarifNames;
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
     * The UserDefinedFields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseUserData
     */
    public $UserDefinedFields;
    /**
     * Constructor method for QuoteResponseLeg
     * @uses QuoteResponseLeg::setBlackoutDates()
     * @uses QuoteResponseLeg::setFareGroup()
     * @uses QuoteResponseLeg::setFareGroups()
     * @uses QuoteResponseLeg::setFareLink()
     * @uses QuoteResponseLeg::setFareType()
     * @uses QuoteResponseLeg::setFlightType()
     * @uses QuoteResponseLeg::setLastBookingDate()
     * @uses QuoteResponseLeg::setLastTicketingDate()
     * @uses QuoteResponseLeg::setMaximumTicketingDaysAfterBooking()
     * @uses QuoteResponseLeg::setMinimumBookingDaysBeforeDeparture()
     * @uses QuoteResponseLeg::setMinimumTicketingDaysBeforeDeparture()
     * @uses QuoteResponseLeg::setProductID()
     * @uses QuoteResponseLeg::setRecordset()
     * @uses QuoteResponseLeg::setRoutingNames()
     * @uses QuoteResponseLeg::setRuleBookingClass()
     * @uses QuoteResponseLeg::setRuleNames()
     * @uses QuoteResponseLeg::setSeasonDates()
     * @uses QuoteResponseLeg::setTarifLinks()
     * @uses QuoteResponseLeg::setTarifNames()
     * @uses QuoteResponseLeg::setTariffSubType()
     * @uses QuoteResponseLeg::setTariffType()
     * @uses QuoteResponseLeg::setUserDefinedFields()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBlackoutDateData $blackoutDates
     * @param int $fareGroup
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups
     * @param string $fareLink
     * @param string $fareType
     * @param string $flightType
     * @param string $lastBookingDate
     * @param string $lastTicketingDate
     * @param int $maximumTicketingDaysAfterBooking
     * @param int $minimumBookingDaysBeforeDeparture
     * @param int $minimumTicketingDaysBeforeDeparture
     * @param string $productID
     * @param string $recordset
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $routingNames
     * @param string $ruleBookingClass
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ruleNames
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeasonDateData $seasonDates
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $tarifLinks
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $tarifNames
     * @param string $tariffSubType
     * @param string $tariffType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseUserData $userDefinedFields
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBlackoutDateData $blackoutDates = null, $fareGroup = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups = null, $fareLink = null, $fareType = null, $flightType = null, $lastBookingDate = null, $lastTicketingDate = null, $maximumTicketingDaysAfterBooking = null, $minimumBookingDaysBeforeDeparture = null, $minimumTicketingDaysBeforeDeparture = null, $productID = null, $recordset = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $routingNames = null, $ruleBookingClass = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ruleNames = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeasonDateData $seasonDates = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $tarifLinks = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $tarifNames = null, $tariffSubType = null, $tariffType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseUserData $userDefinedFields = null)
    {
        $this
            ->setBlackoutDates($blackoutDates)
            ->setFareGroup($fareGroup)
            ->setFareGroups($fareGroups)
            ->setFareLink($fareLink)
            ->setFareType($fareType)
            ->setFlightType($flightType)
            ->setLastBookingDate($lastBookingDate)
            ->setLastTicketingDate($lastTicketingDate)
            ->setMaximumTicketingDaysAfterBooking($maximumTicketingDaysAfterBooking)
            ->setMinimumBookingDaysBeforeDeparture($minimumBookingDaysBeforeDeparture)
            ->setMinimumTicketingDaysBeforeDeparture($minimumTicketingDaysBeforeDeparture)
            ->setProductID($productID)
            ->setRecordset($recordset)
            ->setRoutingNames($routingNames)
            ->setRuleBookingClass($ruleBookingClass)
            ->setRuleNames($ruleNames)
            ->setSeasonDates($seasonDates)
            ->setTarifLinks($tarifLinks)
            ->setTarifNames($tarifNames)
            ->setTariffSubType($tariffSubType)
            ->setTariffType($tariffType)
            ->setUserDefinedFields($userDefinedFields);
    }
    /**
     * Get BlackoutDates value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBlackoutDateData|null
     */
    public function getBlackoutDates()
    {
        return isset($this->BlackoutDates) ? $this->BlackoutDates : null;
    }
    /**
     * Set BlackoutDates value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBlackoutDateData $blackoutDates
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setBlackoutDates(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBlackoutDateData $blackoutDates = null)
    {
        if (is_null($blackoutDates) || (is_array($blackoutDates) && empty($blackoutDates))) {
            unset($this->BlackoutDates);
        } else {
            $this->BlackoutDates = $blackoutDates;
        }
        return $this;
    }
    /**
     * Get FareGroup value
     * @return int|null
     */
    public function getFareGroup()
    {
        return $this->FareGroup;
    }
    /**
     * Set FareGroup value
     * @param int $fareGroup
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setFareGroup($fareGroup = null)
    {
        // validation for constraint: int
        if (!is_null($fareGroup) && !is_numeric($fareGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fareGroup)), __LINE__);
        }
        $this->FareGroup = $fareGroup;
        return $this;
    }
    /**
     * Get FareGroups value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getFareGroups()
    {
        return isset($this->FareGroups) ? $this->FareGroups : null;
    }
    /**
     * Set FareGroups value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setFareGroups(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups = null)
    {
        if (is_null($fareGroups) || (is_array($fareGroups) && empty($fareGroups))) {
            unset($this->FareGroups);
        } else {
            $this->FareGroups = $fareGroups;
        }
        return $this;
    }
    /**
     * Get FareLink value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareLink()
    {
        return isset($this->FareLink) ? $this->FareLink : null;
    }
    /**
     * Set FareLink value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareLink
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setFareLink($fareLink = null)
    {
        // validation for constraint: string
        if (!is_null($fareLink) && !is_string($fareLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareLink)), __LINE__);
        }
        if (is_null($fareLink) || (is_array($fareLink) && empty($fareLink))) {
            unset($this->FareLink);
        } else {
            $this->FareLink = $fareLink;
        }
        return $this;
    }
    /**
     * Get FareType value
     * @return string|null
     */
    public function getFareType()
    {
        return $this->FareType;
    }
    /**
     * Set FareType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QuoteFareTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QuoteFareTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fareType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setFareType($fareType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QuoteFareTypeEnum::valueIsValid($fareType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fareType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QuoteFareTypeEnum::getValidValues())), __LINE__);
        }
        $this->FareType = $fareType;
        return $this;
    }
    /**
     * Get FlightType value
     * @return string|null
     */
    public function getFlightType()
    {
        return $this->FlightType;
    }
    /**
     * Set FlightType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $flightType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setFlightType($flightType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightTypeEnum::valueIsValid($flightType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $flightType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightTypeEnum::getValidValues())), __LINE__);
        }
        $this->FlightType = $flightType;
        return $this;
    }
    /**
     * Get LastBookingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastBookingDate()
    {
        return isset($this->LastBookingDate) ? $this->LastBookingDate : null;
    }
    /**
     * Set LastBookingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastBookingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setLastBookingDate($lastBookingDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastBookingDate) && !is_string($lastBookingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastBookingDate)), __LINE__);
        }
        if (is_null($lastBookingDate) || (is_array($lastBookingDate) && empty($lastBookingDate))) {
            unset($this->LastBookingDate);
        } else {
            $this->LastBookingDate = $lastBookingDate;
        }
        return $this;
    }
    /**
     * Get LastTicketingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastTicketingDate()
    {
        return isset($this->LastTicketingDate) ? $this->LastTicketingDate : null;
    }
    /**
     * Set LastTicketingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastTicketingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setLastTicketingDate($lastTicketingDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastTicketingDate) && !is_string($lastTicketingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastTicketingDate)), __LINE__);
        }
        if (is_null($lastTicketingDate) || (is_array($lastTicketingDate) && empty($lastTicketingDate))) {
            unset($this->LastTicketingDate);
        } else {
            $this->LastTicketingDate = $lastTicketingDate;
        }
        return $this;
    }
    /**
     * Get MaximumTicketingDaysAfterBooking value
     * @return int|null
     */
    public function getMaximumTicketingDaysAfterBooking()
    {
        return $this->MaximumTicketingDaysAfterBooking;
    }
    /**
     * Set MaximumTicketingDaysAfterBooking value
     * @param int $maximumTicketingDaysAfterBooking
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setMaximumTicketingDaysAfterBooking($maximumTicketingDaysAfterBooking = null)
    {
        // validation for constraint: int
        if (!is_null($maximumTicketingDaysAfterBooking) && !is_numeric($maximumTicketingDaysAfterBooking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumTicketingDaysAfterBooking)), __LINE__);
        }
        $this->MaximumTicketingDaysAfterBooking = $maximumTicketingDaysAfterBooking;
        return $this;
    }
    /**
     * Get MinimumBookingDaysBeforeDeparture value
     * @return int|null
     */
    public function getMinimumBookingDaysBeforeDeparture()
    {
        return $this->MinimumBookingDaysBeforeDeparture;
    }
    /**
     * Set MinimumBookingDaysBeforeDeparture value
     * @param int $minimumBookingDaysBeforeDeparture
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setMinimumBookingDaysBeforeDeparture($minimumBookingDaysBeforeDeparture = null)
    {
        // validation for constraint: int
        if (!is_null($minimumBookingDaysBeforeDeparture) && !is_numeric($minimumBookingDaysBeforeDeparture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimumBookingDaysBeforeDeparture)), __LINE__);
        }
        $this->MinimumBookingDaysBeforeDeparture = $minimumBookingDaysBeforeDeparture;
        return $this;
    }
    /**
     * Get MinimumTicketingDaysBeforeDeparture value
     * @return int|null
     */
    public function getMinimumTicketingDaysBeforeDeparture()
    {
        return $this->MinimumTicketingDaysBeforeDeparture;
    }
    /**
     * Set MinimumTicketingDaysBeforeDeparture value
     * @param int $minimumTicketingDaysBeforeDeparture
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setMinimumTicketingDaysBeforeDeparture($minimumTicketingDaysBeforeDeparture = null)
    {
        // validation for constraint: int
        if (!is_null($minimumTicketingDaysBeforeDeparture) && !is_numeric($minimumTicketingDaysBeforeDeparture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimumTicketingDaysBeforeDeparture)), __LINE__);
        }
        $this->MinimumTicketingDaysBeforeDeparture = $minimumTicketingDaysBeforeDeparture;
        return $this;
    }
    /**
     * Get ProductID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductID()
    {
        return isset($this->ProductID) ? $this->ProductID : null;
    }
    /**
     * Set ProductID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setProductID($productID = null)
    {
        // validation for constraint: string
        if (!is_null($productID) && !is_string($productID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productID)), __LINE__);
        }
        if (is_null($productID) || (is_array($productID) && empty($productID))) {
            unset($this->ProductID);
        } else {
            $this->ProductID = $productID;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
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
     * Get RoutingNames value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getRoutingNames()
    {
        return isset($this->RoutingNames) ? $this->RoutingNames : null;
    }
    /**
     * Set RoutingNames value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $routingNames
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setRoutingNames(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $routingNames = null)
    {
        if (is_null($routingNames) || (is_array($routingNames) && empty($routingNames))) {
            unset($this->RoutingNames);
        } else {
            $this->RoutingNames = $routingNames;
        }
        return $this;
    }
    /**
     * Get RuleBookingClass value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRuleBookingClass()
    {
        return isset($this->RuleBookingClass) ? $this->RuleBookingClass : null;
    }
    /**
     * Set RuleBookingClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ruleBookingClass
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setRuleBookingClass($ruleBookingClass = null)
    {
        // validation for constraint: string
        if (!is_null($ruleBookingClass) && !is_string($ruleBookingClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ruleBookingClass)), __LINE__);
        }
        if (is_null($ruleBookingClass) || (is_array($ruleBookingClass) && empty($ruleBookingClass))) {
            unset($this->RuleBookingClass);
        } else {
            $this->RuleBookingClass = $ruleBookingClass;
        }
        return $this;
    }
    /**
     * Get RuleNames value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getRuleNames()
    {
        return isset($this->RuleNames) ? $this->RuleNames : null;
    }
    /**
     * Set RuleNames value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ruleNames
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setRuleNames(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ruleNames = null)
    {
        if (is_null($ruleNames) || (is_array($ruleNames) && empty($ruleNames))) {
            unset($this->RuleNames);
        } else {
            $this->RuleNames = $ruleNames;
        }
        return $this;
    }
    /**
     * Get SeasonDates value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeasonDateData|null
     */
    public function getSeasonDates()
    {
        return isset($this->SeasonDates) ? $this->SeasonDates : null;
    }
    /**
     * Set SeasonDates value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeasonDateData $seasonDates
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setSeasonDates(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeasonDateData $seasonDates = null)
    {
        if (is_null($seasonDates) || (is_array($seasonDates) && empty($seasonDates))) {
            unset($this->SeasonDates);
        } else {
            $this->SeasonDates = $seasonDates;
        }
        return $this;
    }
    /**
     * Get TarifLinks value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getTarifLinks()
    {
        return isset($this->TarifLinks) ? $this->TarifLinks : null;
    }
    /**
     * Set TarifLinks value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $tarifLinks
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setTarifLinks(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $tarifLinks = null)
    {
        if (is_null($tarifLinks) || (is_array($tarifLinks) && empty($tarifLinks))) {
            unset($this->TarifLinks);
        } else {
            $this->TarifLinks = $tarifLinks;
        }
        return $this;
    }
    /**
     * Get TarifNames value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getTarifNames()
    {
        return isset($this->TarifNames) ? $this->TarifNames : null;
    }
    /**
     * Set TarifNames value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $tarifNames
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setTarifNames(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $tarifNames = null)
    {
        if (is_null($tarifNames) || (is_array($tarifNames) && empty($tarifNames))) {
            unset($this->TarifNames);
        } else {
            $this->TarifNames = $tarifNames;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
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
     * Get UserDefinedFields value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseUserData|null
     */
    public function getUserDefinedFields()
    {
        return isset($this->UserDefinedFields) ? $this->UserDefinedFields : null;
    }
    /**
     * Set UserDefinedFields value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseUserData $userDefinedFields
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
     */
    public function setUserDefinedFields(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseUserData $userDefinedFields = null)
    {
        if (is_null($userDefinedFields) || (is_array($userDefinedFields) && empty($userDefinedFields))) {
            unset($this->UserDefinedFields);
        } else {
            $this->UserDefinedFields = $userDefinedFields;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg
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
