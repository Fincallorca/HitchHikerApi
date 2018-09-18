<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleResponseRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RuleResponseRule
 * @subpackage Structs
 */
class RuleResponseRule extends AbstractStructBase
{
    /**
     * The Arrival
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseLocation
     */
    public $Arrival;
    /**
     * The ArrivalMinStayDefFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalMinStayDefFrom;
    /**
     * The ArrivalMinStayDefUntil
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalMinStayDefUntil;
    /**
     * The BlackoutDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutDate
     */
    public $BlackoutDate;
    /**
     * The BlackoutNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutNumber
     */
    public $BlackoutNumber;
    /**
     * The CabinClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CabinClass;
    /**
     * The CabinClassCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CabinClassCode;
    /**
     * The CancellationFeeAfterTicketing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CancellationFeeAfterTicketing;
    /**
     * The CancellationFeeBeforeTicketing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CancellationFeeBeforeTicketing;
    /**
     * The Carrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseCarrier
     */
    public $Carrier;
    /**
     * The Departure
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseLocation
     */
    public $Departure;
    /**
     * The DepartureMinStayDefFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureMinStayDefFrom;
    /**
     * The DepartureMinStayDefUntil
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureMinStayDefUntil;
    /**
     * The Direction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Direction;
    /**
     * The EffectiveDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EffectiveDate;
    /**
     * The ExtendedTicketInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseExtendedTicketInfo
     */
    public $ExtendedTicketInfo;
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
     * The FareTypeCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareTypeCode;
    /**
     * The FirstBookingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FirstBookingDate;
    /**
     * The FirstTicketingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FirstTicketingDate;
    /**
     * The FlightDaysIn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FlightDaysIn;
    /**
     * The FlightDaysOut
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FlightDaysOut;
    /**
     * The IsRefundable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsRefundable;
    /**
     * The LastBookingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastBookingDate;
    /**
     * The LastReturnDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastReturnDate;
    /**
     * The LastTicketingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastTicketingDate;
    /**
     * The MatchCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MatchCode;
    /**
     * The MaxStay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MaxStay;
    /**
     * The MinBookingBeforeDeparture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinBookingBeforeDeparture;
    /**
     * The MinStay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MinStay;
    /**
     * The MinTicketingBeforeDeparture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinTicketingBeforeDeparture;
    /**
     * The NoShow
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NoShow;
    /**
     * The OpenJaw
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OpenJaw;
    /**
     * The RebookingFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RebookingFee;
    /**
     * The ReferenceCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ReferenceCode;
    /**
     * The Season
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Season;
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
     * - nillable: true
     * @var string
     */
    public $TariffType;
    /**
     * The TariffTypeCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TariffTypeCode;
    /**
     * The TicketType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseTicketType
     */
    public $TicketType;
    /**
     * The TicketingDaysAfterBooking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TicketingDaysAfterBooking;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Title;
    /**
     * The TravelCompletionDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TravelCompletionDate;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Type;
    /**
     * The UserDefinedField
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseUserDefinedField
     */
    public $UserDefinedField;
    /**
     * The ValidFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ValidFrom;
    /**
     * The ValidUntil
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ValidUntil;
    /**
     * The WeekdaySurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseWeekdaySurcharge
     */
    public $WeekdaySurcharge;
    /**
     * The eTariffType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eTariffType;
    /**
     * Constructor method for RuleResponseRule
     * @uses RuleResponseRule::setArrival()
     * @uses RuleResponseRule::setArrivalMinStayDefFrom()
     * @uses RuleResponseRule::setArrivalMinStayDefUntil()
     * @uses RuleResponseRule::setBlackoutDate()
     * @uses RuleResponseRule::setBlackoutNumber()
     * @uses RuleResponseRule::setCabinClass()
     * @uses RuleResponseRule::setCabinClassCode()
     * @uses RuleResponseRule::setCancellationFeeAfterTicketing()
     * @uses RuleResponseRule::setCancellationFeeBeforeTicketing()
     * @uses RuleResponseRule::setCarrier()
     * @uses RuleResponseRule::setDeparture()
     * @uses RuleResponseRule::setDepartureMinStayDefFrom()
     * @uses RuleResponseRule::setDepartureMinStayDefUntil()
     * @uses RuleResponseRule::setDirection()
     * @uses RuleResponseRule::setEffectiveDate()
     * @uses RuleResponseRule::setExtendedTicketInfo()
     * @uses RuleResponseRule::setFareSubType()
     * @uses RuleResponseRule::setFareType()
     * @uses RuleResponseRule::setFareTypeCode()
     * @uses RuleResponseRule::setFirstBookingDate()
     * @uses RuleResponseRule::setFirstTicketingDate()
     * @uses RuleResponseRule::setFlightDaysIn()
     * @uses RuleResponseRule::setFlightDaysOut()
     * @uses RuleResponseRule::setIsRefundable()
     * @uses RuleResponseRule::setLastBookingDate()
     * @uses RuleResponseRule::setLastReturnDate()
     * @uses RuleResponseRule::setLastTicketingDate()
     * @uses RuleResponseRule::setMatchCode()
     * @uses RuleResponseRule::setMaxStay()
     * @uses RuleResponseRule::setMinBookingBeforeDeparture()
     * @uses RuleResponseRule::setMinStay()
     * @uses RuleResponseRule::setMinTicketingBeforeDeparture()
     * @uses RuleResponseRule::setNoShow()
     * @uses RuleResponseRule::setOpenJaw()
     * @uses RuleResponseRule::setRebookingFee()
     * @uses RuleResponseRule::setReferenceCode()
     * @uses RuleResponseRule::setSeason()
     * @uses RuleResponseRule::setTariffSubType()
     * @uses RuleResponseRule::setTariffType()
     * @uses RuleResponseRule::setTariffTypeCode()
     * @uses RuleResponseRule::setTicketType()
     * @uses RuleResponseRule::setTicketingDaysAfterBooking()
     * @uses RuleResponseRule::setTitle()
     * @uses RuleResponseRule::setTravelCompletionDate()
     * @uses RuleResponseRule::setType()
     * @uses RuleResponseRule::setUserDefinedField()
     * @uses RuleResponseRule::setValidFrom()
     * @uses RuleResponseRule::setValidUntil()
     * @uses RuleResponseRule::setWeekdaySurcharge()
     * @uses RuleResponseRule::setETariffType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseLocation $arrival
     * @param string $arrivalMinStayDefFrom
     * @param string $arrivalMinStayDefUntil
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutDate $blackoutDate
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutNumber $blackoutNumber
     * @param string $cabinClass
     * @param string $cabinClassCode
     * @param string $cancellationFeeAfterTicketing
     * @param string $cancellationFeeBeforeTicketing
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseCarrier $carrier
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseLocation $departure
     * @param string $departureMinStayDefFrom
     * @param string $departureMinStayDefUntil
     * @param string $direction
     * @param string $effectiveDate
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseExtendedTicketInfo $extendedTicketInfo
     * @param string $fareSubType
     * @param string $fareType
     * @param string $fareTypeCode
     * @param string $firstBookingDate
     * @param string $firstTicketingDate
     * @param string $flightDaysIn
     * @param string $flightDaysOut
     * @param bool $isRefundable
     * @param string $lastBookingDate
     * @param string $lastReturnDate
     * @param string $lastTicketingDate
     * @param string $matchCode
     * @param string $maxStay
     * @param int $minBookingBeforeDeparture
     * @param string $minStay
     * @param int $minTicketingBeforeDeparture
     * @param string $noShow
     * @param string $openJaw
     * @param string $rebookingFee
     * @param string $referenceCode
     * @param string $season
     * @param string $tariffSubType
     * @param string $tariffType
     * @param string $tariffTypeCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseTicketType $ticketType
     * @param int $ticketingDaysAfterBooking
     * @param string $title
     * @param string $travelCompletionDate
     * @param string $type
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseUserDefinedField $userDefinedField
     * @param string $validFrom
     * @param string $validUntil
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseWeekdaySurcharge $weekdaySurcharge
     * @param string $eTariffType
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseLocation $arrival = null, $arrivalMinStayDefFrom = null, $arrivalMinStayDefUntil = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutDate $blackoutDate = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutNumber $blackoutNumber = null, $cabinClass = null, $cabinClassCode = null, $cancellationFeeAfterTicketing = null, $cancellationFeeBeforeTicketing = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseCarrier $carrier = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseLocation $departure = null, $departureMinStayDefFrom = null, $departureMinStayDefUntil = null, $direction = null, $effectiveDate = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseExtendedTicketInfo $extendedTicketInfo = null, $fareSubType = null, $fareType = null, $fareTypeCode = null, $firstBookingDate = null, $firstTicketingDate = null, $flightDaysIn = null, $flightDaysOut = null, $isRefundable = null, $lastBookingDate = null, $lastReturnDate = null, $lastTicketingDate = null, $matchCode = null, $maxStay = null, $minBookingBeforeDeparture = null, $minStay = null, $minTicketingBeforeDeparture = null, $noShow = null, $openJaw = null, $rebookingFee = null, $referenceCode = null, $season = null, $tariffSubType = null, $tariffType = null, $tariffTypeCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseTicketType $ticketType = null, $ticketingDaysAfterBooking = null, $title = null, $travelCompletionDate = null, $type = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseUserDefinedField $userDefinedField = null, $validFrom = null, $validUntil = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseWeekdaySurcharge $weekdaySurcharge = null, $eTariffType = null)
    {
        $this
            ->setArrival($arrival)
            ->setArrivalMinStayDefFrom($arrivalMinStayDefFrom)
            ->setArrivalMinStayDefUntil($arrivalMinStayDefUntil)
            ->setBlackoutDate($blackoutDate)
            ->setBlackoutNumber($blackoutNumber)
            ->setCabinClass($cabinClass)
            ->setCabinClassCode($cabinClassCode)
            ->setCancellationFeeAfterTicketing($cancellationFeeAfterTicketing)
            ->setCancellationFeeBeforeTicketing($cancellationFeeBeforeTicketing)
            ->setCarrier($carrier)
            ->setDeparture($departure)
            ->setDepartureMinStayDefFrom($departureMinStayDefFrom)
            ->setDepartureMinStayDefUntil($departureMinStayDefUntil)
            ->setDirection($direction)
            ->setEffectiveDate($effectiveDate)
            ->setExtendedTicketInfo($extendedTicketInfo)
            ->setFareSubType($fareSubType)
            ->setFareType($fareType)
            ->setFareTypeCode($fareTypeCode)
            ->setFirstBookingDate($firstBookingDate)
            ->setFirstTicketingDate($firstTicketingDate)
            ->setFlightDaysIn($flightDaysIn)
            ->setFlightDaysOut($flightDaysOut)
            ->setIsRefundable($isRefundable)
            ->setLastBookingDate($lastBookingDate)
            ->setLastReturnDate($lastReturnDate)
            ->setLastTicketingDate($lastTicketingDate)
            ->setMatchCode($matchCode)
            ->setMaxStay($maxStay)
            ->setMinBookingBeforeDeparture($minBookingBeforeDeparture)
            ->setMinStay($minStay)
            ->setMinTicketingBeforeDeparture($minTicketingBeforeDeparture)
            ->setNoShow($noShow)
            ->setOpenJaw($openJaw)
            ->setRebookingFee($rebookingFee)
            ->setReferenceCode($referenceCode)
            ->setSeason($season)
            ->setTariffSubType($tariffSubType)
            ->setTariffType($tariffType)
            ->setTariffTypeCode($tariffTypeCode)
            ->setTicketType($ticketType)
            ->setTicketingDaysAfterBooking($ticketingDaysAfterBooking)
            ->setTitle($title)
            ->setTravelCompletionDate($travelCompletionDate)
            ->setType($type)
            ->setUserDefinedField($userDefinedField)
            ->setValidFrom($validFrom)
            ->setValidUntil($validUntil)
            ->setWeekdaySurcharge($weekdaySurcharge)
            ->setETariffType($eTariffType);
    }
    /**
     * Get Arrival value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseLocation|null
     */
    public function getArrival()
    {
        return isset($this->Arrival) ? $this->Arrival : null;
    }
    /**
     * Set Arrival value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseLocation $arrival
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setArrival(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseLocation $arrival = null)
    {
        if (is_null($arrival) || (is_array($arrival) && empty($arrival))) {
            unset($this->Arrival);
        } else {
            $this->Arrival = $arrival;
        }
        return $this;
    }
    /**
     * Get ArrivalMinStayDefFrom value
     * @return string|null
     */
    public function getArrivalMinStayDefFrom()
    {
        return $this->ArrivalMinStayDefFrom;
    }
    /**
     * Set ArrivalMinStayDefFrom value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MinStayEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MinStayEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $arrivalMinStayDefFrom
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setArrivalMinStayDefFrom($arrivalMinStayDefFrom = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MinStayEnum::valueIsValid($arrivalMinStayDefFrom)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $arrivalMinStayDefFrom, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MinStayEnum::getValidValues())), __LINE__);
        }
        $this->ArrivalMinStayDefFrom = $arrivalMinStayDefFrom;
        return $this;
    }
    /**
     * Get ArrivalMinStayDefUntil value
     * @return string|null
     */
    public function getArrivalMinStayDefUntil()
    {
        return $this->ArrivalMinStayDefUntil;
    }
    /**
     * Set ArrivalMinStayDefUntil value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MinStayEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MinStayEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $arrivalMinStayDefUntil
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setArrivalMinStayDefUntil($arrivalMinStayDefUntil = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MinStayEnum::valueIsValid($arrivalMinStayDefUntil)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $arrivalMinStayDefUntil, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MinStayEnum::getValidValues())), __LINE__);
        }
        $this->ArrivalMinStayDefUntil = $arrivalMinStayDefUntil;
        return $this;
    }
    /**
     * Get BlackoutDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutDate|null
     */
    public function getBlackoutDate()
    {
        return isset($this->BlackoutDate) ? $this->BlackoutDate : null;
    }
    /**
     * Set BlackoutDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutDate $blackoutDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setBlackoutDate(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutDate $blackoutDate = null)
    {
        if (is_null($blackoutDate) || (is_array($blackoutDate) && empty($blackoutDate))) {
            unset($this->BlackoutDate);
        } else {
            $this->BlackoutDate = $blackoutDate;
        }
        return $this;
    }
    /**
     * Get BlackoutNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutNumber|null
     */
    public function getBlackoutNumber()
    {
        return isset($this->BlackoutNumber) ? $this->BlackoutNumber : null;
    }
    /**
     * Set BlackoutNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutNumber $blackoutNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setBlackoutNumber(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutNumber $blackoutNumber = null)
    {
        if (is_null($blackoutNumber) || (is_array($blackoutNumber) && empty($blackoutNumber))) {
            unset($this->BlackoutNumber);
        } else {
            $this->BlackoutNumber = $blackoutNumber;
        }
        return $this;
    }
    /**
     * Get CabinClass value
     * @return string|null
     */
    public function getCabinClass()
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cabinClass
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setCabinClass($cabinClass = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid($cabinClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cabinClass, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues())), __LINE__);
        }
        $this->CabinClass = $cabinClass;
        return $this;
    }
    /**
     * Get CabinClassCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCabinClassCode()
    {
        return isset($this->CabinClassCode) ? $this->CabinClassCode : null;
    }
    /**
     * Set CabinClassCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cabinClassCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setCabinClassCode($cabinClassCode = null)
    {
        // validation for constraint: string
        if (!is_null($cabinClassCode) && !is_string($cabinClassCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cabinClassCode)), __LINE__);
        }
        if (is_null($cabinClassCode) || (is_array($cabinClassCode) && empty($cabinClassCode))) {
            unset($this->CabinClassCode);
        } else {
            $this->CabinClassCode = $cabinClassCode;
        }
        return $this;
    }
    /**
     * Get CancellationFeeAfterTicketing value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCancellationFeeAfterTicketing()
    {
        return isset($this->CancellationFeeAfterTicketing) ? $this->CancellationFeeAfterTicketing : null;
    }
    /**
     * Set CancellationFeeAfterTicketing value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cancellationFeeAfterTicketing
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setCancellationFeeAfterTicketing($cancellationFeeAfterTicketing = null)
    {
        // validation for constraint: string
        if (!is_null($cancellationFeeAfterTicketing) && !is_string($cancellationFeeAfterTicketing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancellationFeeAfterTicketing)), __LINE__);
        }
        if (is_null($cancellationFeeAfterTicketing) || (is_array($cancellationFeeAfterTicketing) && empty($cancellationFeeAfterTicketing))) {
            unset($this->CancellationFeeAfterTicketing);
        } else {
            $this->CancellationFeeAfterTicketing = $cancellationFeeAfterTicketing;
        }
        return $this;
    }
    /**
     * Get CancellationFeeBeforeTicketing value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCancellationFeeBeforeTicketing()
    {
        return isset($this->CancellationFeeBeforeTicketing) ? $this->CancellationFeeBeforeTicketing : null;
    }
    /**
     * Set CancellationFeeBeforeTicketing value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cancellationFeeBeforeTicketing
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setCancellationFeeBeforeTicketing($cancellationFeeBeforeTicketing = null)
    {
        // validation for constraint: string
        if (!is_null($cancellationFeeBeforeTicketing) && !is_string($cancellationFeeBeforeTicketing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancellationFeeBeforeTicketing)), __LINE__);
        }
        if (is_null($cancellationFeeBeforeTicketing) || (is_array($cancellationFeeBeforeTicketing) && empty($cancellationFeeBeforeTicketing))) {
            unset($this->CancellationFeeBeforeTicketing);
        } else {
            $this->CancellationFeeBeforeTicketing = $cancellationFeeBeforeTicketing;
        }
        return $this;
    }
    /**
     * Get Carrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseCarrier|null
     */
    public function getCarrier()
    {
        return isset($this->Carrier) ? $this->Carrier : null;
    }
    /**
     * Set Carrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseCarrier $carrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setCarrier(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseCarrier $carrier = null)
    {
        if (is_null($carrier) || (is_array($carrier) && empty($carrier))) {
            unset($this->Carrier);
        } else {
            $this->Carrier = $carrier;
        }
        return $this;
    }
    /**
     * Get Departure value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseLocation|null
     */
    public function getDeparture()
    {
        return isset($this->Departure) ? $this->Departure : null;
    }
    /**
     * Set Departure value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseLocation $departure
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setDeparture(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseLocation $departure = null)
    {
        if (is_null($departure) || (is_array($departure) && empty($departure))) {
            unset($this->Departure);
        } else {
            $this->Departure = $departure;
        }
        return $this;
    }
    /**
     * Get DepartureMinStayDefFrom value
     * @return string|null
     */
    public function getDepartureMinStayDefFrom()
    {
        return $this->DepartureMinStayDefFrom;
    }
    /**
     * Set DepartureMinStayDefFrom value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MinStayEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MinStayEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $departureMinStayDefFrom
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setDepartureMinStayDefFrom($departureMinStayDefFrom = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MinStayEnum::valueIsValid($departureMinStayDefFrom)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $departureMinStayDefFrom, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MinStayEnum::getValidValues())), __LINE__);
        }
        $this->DepartureMinStayDefFrom = $departureMinStayDefFrom;
        return $this;
    }
    /**
     * Get DepartureMinStayDefUntil value
     * @return string|null
     */
    public function getDepartureMinStayDefUntil()
    {
        return $this->DepartureMinStayDefUntil;
    }
    /**
     * Set DepartureMinStayDefUntil value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MinStayEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MinStayEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $departureMinStayDefUntil
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setDepartureMinStayDefUntil($departureMinStayDefUntil = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MinStayEnum::valueIsValid($departureMinStayDefUntil)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $departureMinStayDefUntil, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MinStayEnum::getValidValues())), __LINE__);
        }
        $this->DepartureMinStayDefUntil = $departureMinStayDefUntil;
        return $this;
    }
    /**
     * Get Direction value
     * @return string|null
     */
    public function getDirection()
    {
        return $this->Direction;
    }
    /**
     * Set Direction value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DirectionEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DirectionEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $direction
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setDirection($direction = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DirectionEnum::valueIsValid($direction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $direction, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DirectionEnum::getValidValues())), __LINE__);
        }
        $this->Direction = $direction;
        return $this;
    }
    /**
     * Get EffectiveDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return isset($this->EffectiveDate) ? $this->EffectiveDate : null;
    }
    /**
     * Set EffectiveDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $effectiveDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($effectiveDate)), __LINE__);
        }
        if (is_null($effectiveDate) || (is_array($effectiveDate) && empty($effectiveDate))) {
            unset($this->EffectiveDate);
        } else {
            $this->EffectiveDate = $effectiveDate;
        }
        return $this;
    }
    /**
     * Get ExtendedTicketInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseExtendedTicketInfo|null
     */
    public function getExtendedTicketInfo()
    {
        return isset($this->ExtendedTicketInfo) ? $this->ExtendedTicketInfo : null;
    }
    /**
     * Set ExtendedTicketInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseExtendedTicketInfo $extendedTicketInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setExtendedTicketInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseExtendedTicketInfo $extendedTicketInfo = null)
    {
        if (is_null($extendedTicketInfo) || (is_array($extendedTicketInfo) && empty($extendedTicketInfo))) {
            unset($this->ExtendedTicketInfo);
        } else {
            $this->ExtendedTicketInfo = $extendedTicketInfo;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
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
     * Get FareTypeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareTypeCode()
    {
        return isset($this->FareTypeCode) ? $this->FareTypeCode : null;
    }
    /**
     * Set FareTypeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareTypeCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setFareTypeCode($fareTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($fareTypeCode) && !is_string($fareTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareTypeCode)), __LINE__);
        }
        if (is_null($fareTypeCode) || (is_array($fareTypeCode) && empty($fareTypeCode))) {
            unset($this->FareTypeCode);
        } else {
            $this->FareTypeCode = $fareTypeCode;
        }
        return $this;
    }
    /**
     * Get FirstBookingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstBookingDate()
    {
        return isset($this->FirstBookingDate) ? $this->FirstBookingDate : null;
    }
    /**
     * Set FirstBookingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstBookingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setFirstBookingDate($firstBookingDate = null)
    {
        // validation for constraint: string
        if (!is_null($firstBookingDate) && !is_string($firstBookingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstBookingDate)), __LINE__);
        }
        if (is_null($firstBookingDate) || (is_array($firstBookingDate) && empty($firstBookingDate))) {
            unset($this->FirstBookingDate);
        } else {
            $this->FirstBookingDate = $firstBookingDate;
        }
        return $this;
    }
    /**
     * Get FirstTicketingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstTicketingDate()
    {
        return isset($this->FirstTicketingDate) ? $this->FirstTicketingDate : null;
    }
    /**
     * Set FirstTicketingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstTicketingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setFirstTicketingDate($firstTicketingDate = null)
    {
        // validation for constraint: string
        if (!is_null($firstTicketingDate) && !is_string($firstTicketingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstTicketingDate)), __LINE__);
        }
        if (is_null($firstTicketingDate) || (is_array($firstTicketingDate) && empty($firstTicketingDate))) {
            unset($this->FirstTicketingDate);
        } else {
            $this->FirstTicketingDate = $firstTicketingDate;
        }
        return $this;
    }
    /**
     * Get FlightDaysIn value
     * @return string|null
     */
    public function getFlightDaysIn()
    {
        return $this->FlightDaysIn;
    }
    /**
     * Set FlightDaysIn value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightDaysEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightDaysEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $flightDaysIn
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setFlightDaysIn($flightDaysIn = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightDaysEnum::valueIsValid($flightDaysIn)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $flightDaysIn, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightDaysEnum::getValidValues())), __LINE__);
        }
        $this->FlightDaysIn = $flightDaysIn;
        return $this;
    }
    /**
     * Get FlightDaysOut value
     * @return string|null
     */
    public function getFlightDaysOut()
    {
        return $this->FlightDaysOut;
    }
    /**
     * Set FlightDaysOut value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightDaysEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightDaysEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $flightDaysOut
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setFlightDaysOut($flightDaysOut = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightDaysEnum::valueIsValid($flightDaysOut)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $flightDaysOut, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightDaysEnum::getValidValues())), __LINE__);
        }
        $this->FlightDaysOut = $flightDaysOut;
        return $this;
    }
    /**
     * Get IsRefundable value
     * @return bool|null
     */
    public function getIsRefundable()
    {
        return $this->IsRefundable;
    }
    /**
     * Set IsRefundable value
     * @param bool $isRefundable
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setIsRefundable($isRefundable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRefundable) && !is_bool($isRefundable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRefundable)), __LINE__);
        }
        $this->IsRefundable = $isRefundable;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
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
     * Get LastReturnDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastReturnDate()
    {
        return isset($this->LastReturnDate) ? $this->LastReturnDate : null;
    }
    /**
     * Set LastReturnDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastReturnDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setLastReturnDate($lastReturnDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastReturnDate) && !is_string($lastReturnDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastReturnDate)), __LINE__);
        }
        if (is_null($lastReturnDate) || (is_array($lastReturnDate) && empty($lastReturnDate))) {
            unset($this->LastReturnDate);
        } else {
            $this->LastReturnDate = $lastReturnDate;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
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
     * Get MaxStay value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMaxStay()
    {
        return isset($this->MaxStay) ? $this->MaxStay : null;
    }
    /**
     * Set MaxStay value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $maxStay
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setMaxStay($maxStay = null)
    {
        // validation for constraint: string
        if (!is_null($maxStay) && !is_string($maxStay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxStay)), __LINE__);
        }
        if (is_null($maxStay) || (is_array($maxStay) && empty($maxStay))) {
            unset($this->MaxStay);
        } else {
            $this->MaxStay = $maxStay;
        }
        return $this;
    }
    /**
     * Get MinBookingBeforeDeparture value
     * @return int|null
     */
    public function getMinBookingBeforeDeparture()
    {
        return $this->MinBookingBeforeDeparture;
    }
    /**
     * Set MinBookingBeforeDeparture value
     * @param int $minBookingBeforeDeparture
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setMinBookingBeforeDeparture($minBookingBeforeDeparture = null)
    {
        // validation for constraint: int
        if (!is_null($minBookingBeforeDeparture) && !is_numeric($minBookingBeforeDeparture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minBookingBeforeDeparture)), __LINE__);
        }
        $this->MinBookingBeforeDeparture = $minBookingBeforeDeparture;
        return $this;
    }
    /**
     * Get MinStay value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMinStay()
    {
        return isset($this->MinStay) ? $this->MinStay : null;
    }
    /**
     * Set MinStay value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $minStay
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setMinStay($minStay = null)
    {
        // validation for constraint: string
        if (!is_null($minStay) && !is_string($minStay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minStay)), __LINE__);
        }
        if (is_null($minStay) || (is_array($minStay) && empty($minStay))) {
            unset($this->MinStay);
        } else {
            $this->MinStay = $minStay;
        }
        return $this;
    }
    /**
     * Get MinTicketingBeforeDeparture value
     * @return int|null
     */
    public function getMinTicketingBeforeDeparture()
    {
        return $this->MinTicketingBeforeDeparture;
    }
    /**
     * Set MinTicketingBeforeDeparture value
     * @param int $minTicketingBeforeDeparture
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setMinTicketingBeforeDeparture($minTicketingBeforeDeparture = null)
    {
        // validation for constraint: int
        if (!is_null($minTicketingBeforeDeparture) && !is_numeric($minTicketingBeforeDeparture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minTicketingBeforeDeparture)), __LINE__);
        }
        $this->MinTicketingBeforeDeparture = $minTicketingBeforeDeparture;
        return $this;
    }
    /**
     * Get NoShow value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNoShow()
    {
        return isset($this->NoShow) ? $this->NoShow : null;
    }
    /**
     * Set NoShow value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $noShow
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setNoShow($noShow = null)
    {
        // validation for constraint: string
        if (!is_null($noShow) && !is_string($noShow)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($noShow)), __LINE__);
        }
        if (is_null($noShow) || (is_array($noShow) && empty($noShow))) {
            unset($this->NoShow);
        } else {
            $this->NoShow = $noShow;
        }
        return $this;
    }
    /**
     * Get OpenJaw value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOpenJaw()
    {
        return isset($this->OpenJaw) ? $this->OpenJaw : null;
    }
    /**
     * Set OpenJaw value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $openJaw
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setOpenJaw($openJaw = null)
    {
        // validation for constraint: string
        if (!is_null($openJaw) && !is_string($openJaw)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($openJaw)), __LINE__);
        }
        if (is_null($openJaw) || (is_array($openJaw) && empty($openJaw))) {
            unset($this->OpenJaw);
        } else {
            $this->OpenJaw = $openJaw;
        }
        return $this;
    }
    /**
     * Get RebookingFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRebookingFee()
    {
        return isset($this->RebookingFee) ? $this->RebookingFee : null;
    }
    /**
     * Set RebookingFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $rebookingFee
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setRebookingFee($rebookingFee = null)
    {
        // validation for constraint: string
        if (!is_null($rebookingFee) && !is_string($rebookingFee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rebookingFee)), __LINE__);
        }
        if (is_null($rebookingFee) || (is_array($rebookingFee) && empty($rebookingFee))) {
            unset($this->RebookingFee);
        } else {
            $this->RebookingFee = $rebookingFee;
        }
        return $this;
    }
    /**
     * Get ReferenceCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReferenceCode()
    {
        return isset($this->ReferenceCode) ? $this->ReferenceCode : null;
    }
    /**
     * Set ReferenceCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $referenceCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setReferenceCode($referenceCode = null)
    {
        // validation for constraint: string
        if (!is_null($referenceCode) && !is_string($referenceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceCode)), __LINE__);
        }
        if (is_null($referenceCode) || (is_array($referenceCode) && empty($referenceCode))) {
            unset($this->ReferenceCode);
        } else {
            $this->ReferenceCode = $referenceCode;
        }
        return $this;
    }
    /**
     * Get Season value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSeason()
    {
        return isset($this->Season) ? $this->Season : null;
    }
    /**
     * Set Season value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $season
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setSeason($season = null)
    {
        // validation for constraint: string
        if (!is_null($season) && !is_string($season)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($season)), __LINE__);
        }
        if (is_null($season) || (is_array($season) && empty($season))) {
            unset($this->Season);
        } else {
            $this->Season = $season;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTariffType()
    {
        return isset($this->TariffType) ? $this->TariffType : null;
    }
    /**
     * Set TariffType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tariffType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setTariffType($tariffType = null)
    {
        // validation for constraint: string
        if (!is_null($tariffType) && !is_string($tariffType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tariffType)), __LINE__);
        }
        if (is_null($tariffType) || (is_array($tariffType) && empty($tariffType))) {
            unset($this->TariffType);
        } else {
            $this->TariffType = $tariffType;
        }
        return $this;
    }
    /**
     * Get TariffTypeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTariffTypeCode()
    {
        return isset($this->TariffTypeCode) ? $this->TariffTypeCode : null;
    }
    /**
     * Set TariffTypeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tariffTypeCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setTariffTypeCode($tariffTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($tariffTypeCode) && !is_string($tariffTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tariffTypeCode)), __LINE__);
        }
        if (is_null($tariffTypeCode) || (is_array($tariffTypeCode) && empty($tariffTypeCode))) {
            unset($this->TariffTypeCode);
        } else {
            $this->TariffTypeCode = $tariffTypeCode;
        }
        return $this;
    }
    /**
     * Get TicketType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseTicketType|null
     */
    public function getTicketType()
    {
        return isset($this->TicketType) ? $this->TicketType : null;
    }
    /**
     * Set TicketType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseTicketType $ticketType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setTicketType(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseTicketType $ticketType = null)
    {
        if (is_null($ticketType) || (is_array($ticketType) && empty($ticketType))) {
            unset($this->TicketType);
        } else {
            $this->TicketType = $ticketType;
        }
        return $this;
    }
    /**
     * Get TicketingDaysAfterBooking value
     * @return int|null
     */
    public function getTicketingDaysAfterBooking()
    {
        return $this->TicketingDaysAfterBooking;
    }
    /**
     * Set TicketingDaysAfterBooking value
     * @param int $ticketingDaysAfterBooking
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setTicketingDaysAfterBooking($ticketingDaysAfterBooking = null)
    {
        // validation for constraint: int
        if (!is_null($ticketingDaysAfterBooking) && !is_numeric($ticketingDaysAfterBooking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ticketingDaysAfterBooking)), __LINE__);
        }
        $this->TicketingDaysAfterBooking = $ticketingDaysAfterBooking;
        return $this;
    }
    /**
     * Get Title value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTitle()
    {
        return isset($this->Title) ? $this->Title : null;
    }
    /**
     * Set Title value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $title
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        if (is_null($title) || (is_array($title) && empty($title))) {
            unset($this->Title);
        } else {
            $this->Title = $title;
        }
        return $this;
    }
    /**
     * Get TravelCompletionDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTravelCompletionDate()
    {
        return isset($this->TravelCompletionDate) ? $this->TravelCompletionDate : null;
    }
    /**
     * Set TravelCompletionDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $travelCompletionDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setTravelCompletionDate($travelCompletionDate = null)
    {
        // validation for constraint: string
        if (!is_null($travelCompletionDate) && !is_string($travelCompletionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelCompletionDate)), __LINE__);
        }
        if (is_null($travelCompletionDate) || (is_array($travelCompletionDate) && empty($travelCompletionDate))) {
            unset($this->TravelCompletionDate);
        } else {
            $this->TravelCompletionDate = $travelCompletionDate;
        }
        return $this;
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getType()
    {
        return isset($this->Type) ? $this->Type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $type
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }
        return $this;
    }
    /**
     * Get UserDefinedField value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseUserDefinedField|null
     */
    public function getUserDefinedField()
    {
        return isset($this->UserDefinedField) ? $this->UserDefinedField : null;
    }
    /**
     * Set UserDefinedField value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseUserDefinedField $userDefinedField
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setUserDefinedField(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseUserDefinedField $userDefinedField = null)
    {
        if (is_null($userDefinedField) || (is_array($userDefinedField) && empty($userDefinedField))) {
            unset($this->UserDefinedField);
        } else {
            $this->UserDefinedField = $userDefinedField;
        }
        return $this;
    }
    /**
     * Get ValidFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidFrom()
    {
        return isset($this->ValidFrom) ? $this->ValidFrom : null;
    }
    /**
     * Set ValidFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validFrom
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setValidFrom($validFrom = null)
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validFrom)), __LINE__);
        }
        if (is_null($validFrom) || (is_array($validFrom) && empty($validFrom))) {
            unset($this->ValidFrom);
        } else {
            $this->ValidFrom = $validFrom;
        }
        return $this;
    }
    /**
     * Get ValidUntil value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidUntil()
    {
        return isset($this->ValidUntil) ? $this->ValidUntil : null;
    }
    /**
     * Set ValidUntil value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validUntil
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setValidUntil($validUntil = null)
    {
        // validation for constraint: string
        if (!is_null($validUntil) && !is_string($validUntil)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validUntil)), __LINE__);
        }
        if (is_null($validUntil) || (is_array($validUntil) && empty($validUntil))) {
            unset($this->ValidUntil);
        } else {
            $this->ValidUntil = $validUntil;
        }
        return $this;
    }
    /**
     * Get WeekdaySurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseWeekdaySurcharge|null
     */
    public function getWeekdaySurcharge()
    {
        return isset($this->WeekdaySurcharge) ? $this->WeekdaySurcharge : null;
    }
    /**
     * Set WeekdaySurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseWeekdaySurcharge $weekdaySurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setWeekdaySurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseWeekdaySurcharge $weekdaySurcharge = null)
    {
        if (is_null($weekdaySurcharge) || (is_array($weekdaySurcharge) && empty($weekdaySurcharge))) {
            unset($this->WeekdaySurcharge);
        } else {
            $this->WeekdaySurcharge = $weekdaySurcharge;
        }
        return $this;
    }
    /**
     * Get eTariffType value
     * @return string|null
     */
    public function getETariffType()
    {
        return $this->eTariffType;
    }
    /**
     * Set eTariffType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eTariffType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
     */
    public function setETariffType($eTariffType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::valueIsValid($eTariffType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eTariffType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::getValidValues())), __LINE__);
        }
        $this->eTariffType = $eTariffType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule
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
