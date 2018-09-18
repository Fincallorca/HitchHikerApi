<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketBookingResponseSegment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketBookingResponseSegment
 * @subpackage Structs
 */
class TicketBookingResponseSegment extends AbstractStructBase
{
    /**
     * The Airline
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Airline;
    /**
     * The ArrivalDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalDateTime;
    /**
     * The ArrivalTerminal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ArrivalTerminal;
    /**
     * The Baggage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Baggage;
    /**
     * The BookingClasses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $BookingClasses;
    /**
     * The CabinClasses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CabinClasses;
    /**
     * The CodeShare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CodeShare;
    /**
     * The CouponNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CouponNumber;
    /**
     * The CouponStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CouponStatus;
    /**
     * The DepartureDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureDateTime;
    /**
     * The DepartureTerminal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DepartureTerminal;
    /**
     * The Designator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Designator;
    /**
     * The Destination
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Destination;
    /**
     * The Equipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Equipment;
    /**
     * The FareTimeLimit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareTimeLimit;
    /**
     * The Farebase
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Farebase;
    /**
     * The Flightnumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Flightnumber;
    /**
     * The MealCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MealCode;
    /**
     * The NVA
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NVA;
    /**
     * The NVB
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NVB;
    /**
     * The NumberOfStops
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfStops;
    /**
     * The OnTimeIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OnTimeIndicator;
    /**
     * The Origin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Origin;
    /**
     * The SegmentID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SegmentID;
    /**
     * The SegmentMileage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SegmentMileage;
    /**
     * The SegmentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SegmentNumber;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Status;
    /**
     * The StopIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StopIndicator;
    /**
     * The TicketNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TicketNumber;
    /**
     * The Ticketed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Ticketed;
    /**
     * The TravelTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true | true
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string
     */
    public $TravelTime;
    /**
     * Constructor method for TicketBookingResponseSegment
     * @uses TicketBookingResponseSegment::setAirline()
     * @uses TicketBookingResponseSegment::setArrivalDateTime()
     * @uses TicketBookingResponseSegment::setArrivalTerminal()
     * @uses TicketBookingResponseSegment::setBaggage()
     * @uses TicketBookingResponseSegment::setBookingClasses()
     * @uses TicketBookingResponseSegment::setCabinClasses()
     * @uses TicketBookingResponseSegment::setCodeShare()
     * @uses TicketBookingResponseSegment::setCouponNumber()
     * @uses TicketBookingResponseSegment::setCouponStatus()
     * @uses TicketBookingResponseSegment::setDepartureDateTime()
     * @uses TicketBookingResponseSegment::setDepartureTerminal()
     * @uses TicketBookingResponseSegment::setDesignator()
     * @uses TicketBookingResponseSegment::setDestination()
     * @uses TicketBookingResponseSegment::setEquipment()
     * @uses TicketBookingResponseSegment::setFareTimeLimit()
     * @uses TicketBookingResponseSegment::setFarebase()
     * @uses TicketBookingResponseSegment::setFlightnumber()
     * @uses TicketBookingResponseSegment::setMealCode()
     * @uses TicketBookingResponseSegment::setNVA()
     * @uses TicketBookingResponseSegment::setNVB()
     * @uses TicketBookingResponseSegment::setNumberOfStops()
     * @uses TicketBookingResponseSegment::setOnTimeIndicator()
     * @uses TicketBookingResponseSegment::setOrigin()
     * @uses TicketBookingResponseSegment::setSegmentID()
     * @uses TicketBookingResponseSegment::setSegmentMileage()
     * @uses TicketBookingResponseSegment::setSegmentNumber()
     * @uses TicketBookingResponseSegment::setStatus()
     * @uses TicketBookingResponseSegment::setStopIndicator()
     * @uses TicketBookingResponseSegment::setTicketNumber()
     * @uses TicketBookingResponseSegment::setTicketed()
     * @uses TicketBookingResponseSegment::setTravelTime()
     * @param string $airline
     * @param string $arrivalDateTime
     * @param string $arrivalTerminal
     * @param string $baggage
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $bookingClasses
     * @param string $cabinClasses
     * @param string $codeShare
     * @param string $couponNumber
     * @param string $couponStatus
     * @param string $departureDateTime
     * @param string $departureTerminal
     * @param string $designator
     * @param string $destination
     * @param string $equipment
     * @param string $fareTimeLimit
     * @param string $farebase
     * @param string $flightnumber
     * @param string $mealCode
     * @param string $nVA
     * @param string $nVB
     * @param int $numberOfStops
     * @param int $onTimeIndicator
     * @param string $origin
     * @param string $segmentID
     * @param int $segmentMileage
     * @param string $segmentNumber
     * @param string $status
     * @param string $stopIndicator
     * @param string $ticketNumber
     * @param bool $ticketed
     * @param string $travelTime
     */
    public function __construct($airline = null, $arrivalDateTime = null, $arrivalTerminal = null, $baggage = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $bookingClasses = null, $cabinClasses = null, $codeShare = null, $couponNumber = null, $couponStatus = null, $departureDateTime = null, $departureTerminal = null, $designator = null, $destination = null, $equipment = null, $fareTimeLimit = null, $farebase = null, $flightnumber = null, $mealCode = null, $nVA = null, $nVB = null, $numberOfStops = null, $onTimeIndicator = null, $origin = null, $segmentID = null, $segmentMileage = null, $segmentNumber = null, $status = null, $stopIndicator = null, $ticketNumber = null, $ticketed = null, $travelTime = null)
    {
        $this
            ->setAirline($airline)
            ->setArrivalDateTime($arrivalDateTime)
            ->setArrivalTerminal($arrivalTerminal)
            ->setBaggage($baggage)
            ->setBookingClasses($bookingClasses)
            ->setCabinClasses($cabinClasses)
            ->setCodeShare($codeShare)
            ->setCouponNumber($couponNumber)
            ->setCouponStatus($couponStatus)
            ->setDepartureDateTime($departureDateTime)
            ->setDepartureTerminal($departureTerminal)
            ->setDesignator($designator)
            ->setDestination($destination)
            ->setEquipment($equipment)
            ->setFareTimeLimit($fareTimeLimit)
            ->setFarebase($farebase)
            ->setFlightnumber($flightnumber)
            ->setMealCode($mealCode)
            ->setNVA($nVA)
            ->setNVB($nVB)
            ->setNumberOfStops($numberOfStops)
            ->setOnTimeIndicator($onTimeIndicator)
            ->setOrigin($origin)
            ->setSegmentID($segmentID)
            ->setSegmentMileage($segmentMileage)
            ->setSegmentNumber($segmentNumber)
            ->setStatus($status)
            ->setStopIndicator($stopIndicator)
            ->setTicketNumber($ticketNumber)
            ->setTicketed($ticketed)
            ->setTravelTime($travelTime);
    }
    /**
     * Get Airline value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAirline()
    {
        return isset($this->Airline) ? $this->Airline : null;
    }
    /**
     * Set Airline value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $airline
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setAirline($airline = null)
    {
        // validation for constraint: string
        if (!is_null($airline) && !is_string($airline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airline)), __LINE__);
        }
        if (is_null($airline) || (is_array($airline) && empty($airline))) {
            unset($this->Airline);
        } else {
            $this->Airline = $airline;
        }
        return $this;
    }
    /**
     * Get ArrivalDateTime value
     * @return string|null
     */
    public function getArrivalDateTime()
    {
        return $this->ArrivalDateTime;
    }
    /**
     * Set ArrivalDateTime value
     * @param string $arrivalDateTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setArrivalDateTime($arrivalDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalDateTime) && !is_string($arrivalDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalDateTime)), __LINE__);
        }
        $this->ArrivalDateTime = $arrivalDateTime;
        return $this;
    }
    /**
     * Get ArrivalTerminal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getArrivalTerminal()
    {
        return isset($this->ArrivalTerminal) ? $this->ArrivalTerminal : null;
    }
    /**
     * Set ArrivalTerminal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $arrivalTerminal
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setArrivalTerminal($arrivalTerminal = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalTerminal) && !is_string($arrivalTerminal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalTerminal)), __LINE__);
        }
        if (is_null($arrivalTerminal) || (is_array($arrivalTerminal) && empty($arrivalTerminal))) {
            unset($this->ArrivalTerminal);
        } else {
            $this->ArrivalTerminal = $arrivalTerminal;
        }
        return $this;
    }
    /**
     * Get Baggage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBaggage()
    {
        return isset($this->Baggage) ? $this->Baggage : null;
    }
    /**
     * Set Baggage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $baggage
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setBaggage($baggage = null)
    {
        // validation for constraint: string
        if (!is_null($baggage) && !is_string($baggage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($baggage)), __LINE__);
        }
        if (is_null($baggage) || (is_array($baggage) && empty($baggage))) {
            unset($this->Baggage);
        } else {
            $this->Baggage = $baggage;
        }
        return $this;
    }
    /**
     * Get BookingClasses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getBookingClasses()
    {
        return isset($this->BookingClasses) ? $this->BookingClasses : null;
    }
    /**
     * Set BookingClasses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $bookingClasses
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setBookingClasses(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $bookingClasses = null)
    {
        if (is_null($bookingClasses) || (is_array($bookingClasses) && empty($bookingClasses))) {
            unset($this->BookingClasses);
        } else {
            $this->BookingClasses = $bookingClasses;
        }
        return $this;
    }
    /**
     * Get CabinClasses value
     * @return string|null
     */
    public function getCabinClasses()
    {
        return $this->CabinClasses;
    }
    /**
     * Set CabinClasses value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cabinClasses
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setCabinClasses($cabinClasses = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid($cabinClasses)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cabinClasses, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues())), __LINE__);
        }
        $this->CabinClasses = $cabinClasses;
        return $this;
    }
    /**
     * Get CodeShare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCodeShare()
    {
        return isset($this->CodeShare) ? $this->CodeShare : null;
    }
    /**
     * Set CodeShare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $codeShare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setCodeShare($codeShare = null)
    {
        // validation for constraint: string
        if (!is_null($codeShare) && !is_string($codeShare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeShare)), __LINE__);
        }
        if (is_null($codeShare) || (is_array($codeShare) && empty($codeShare))) {
            unset($this->CodeShare);
        } else {
            $this->CodeShare = $codeShare;
        }
        return $this;
    }
    /**
     * Get CouponNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCouponNumber()
    {
        return isset($this->CouponNumber) ? $this->CouponNumber : null;
    }
    /**
     * Set CouponNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $couponNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setCouponNumber($couponNumber = null)
    {
        // validation for constraint: string
        if (!is_null($couponNumber) && !is_string($couponNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($couponNumber)), __LINE__);
        }
        if (is_null($couponNumber) || (is_array($couponNumber) && empty($couponNumber))) {
            unset($this->CouponNumber);
        } else {
            $this->CouponNumber = $couponNumber;
        }
        return $this;
    }
    /**
     * Get CouponStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCouponStatus()
    {
        return isset($this->CouponStatus) ? $this->CouponStatus : null;
    }
    /**
     * Set CouponStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $couponStatus
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setCouponStatus($couponStatus = null)
    {
        // validation for constraint: string
        if (!is_null($couponStatus) && !is_string($couponStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($couponStatus)), __LINE__);
        }
        if (is_null($couponStatus) || (is_array($couponStatus) && empty($couponStatus))) {
            unset($this->CouponStatus);
        } else {
            $this->CouponStatus = $couponStatus;
        }
        return $this;
    }
    /**
     * Get DepartureDateTime value
     * @return string|null
     */
    public function getDepartureDateTime()
    {
        return $this->DepartureDateTime;
    }
    /**
     * Set DepartureDateTime value
     * @param string $departureDateTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setDepartureDateTime($departureDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($departureDateTime) && !is_string($departureDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDateTime)), __LINE__);
        }
        $this->DepartureDateTime = $departureDateTime;
        return $this;
    }
    /**
     * Get DepartureTerminal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDepartureTerminal()
    {
        return isset($this->DepartureTerminal) ? $this->DepartureTerminal : null;
    }
    /**
     * Set DepartureTerminal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $departureTerminal
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setDepartureTerminal($departureTerminal = null)
    {
        // validation for constraint: string
        if (!is_null($departureTerminal) && !is_string($departureTerminal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureTerminal)), __LINE__);
        }
        if (is_null($departureTerminal) || (is_array($departureTerminal) && empty($departureTerminal))) {
            unset($this->DepartureTerminal);
        } else {
            $this->DepartureTerminal = $departureTerminal;
        }
        return $this;
    }
    /**
     * Get Designator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDesignator()
    {
        return isset($this->Designator) ? $this->Designator : null;
    }
    /**
     * Set Designator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $designator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setDesignator($designator = null)
    {
        // validation for constraint: string
        if (!is_null($designator) && !is_string($designator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($designator)), __LINE__);
        }
        if (is_null($designator) || (is_array($designator) && empty($designator))) {
            unset($this->Designator);
        } else {
            $this->Designator = $designator;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
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
     * Get Equipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEquipment()
    {
        return isset($this->Equipment) ? $this->Equipment : null;
    }
    /**
     * Set Equipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $equipment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setEquipment($equipment = null)
    {
        // validation for constraint: string
        if (!is_null($equipment) && !is_string($equipment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($equipment)), __LINE__);
        }
        if (is_null($equipment) || (is_array($equipment) && empty($equipment))) {
            unset($this->Equipment);
        } else {
            $this->Equipment = $equipment;
        }
        return $this;
    }
    /**
     * Get FareTimeLimit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareTimeLimit()
    {
        return isset($this->FareTimeLimit) ? $this->FareTimeLimit : null;
    }
    /**
     * Set FareTimeLimit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareTimeLimit
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setFareTimeLimit($fareTimeLimit = null)
    {
        // validation for constraint: string
        if (!is_null($fareTimeLimit) && !is_string($fareTimeLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareTimeLimit)), __LINE__);
        }
        if (is_null($fareTimeLimit) || (is_array($fareTimeLimit) && empty($fareTimeLimit))) {
            unset($this->FareTimeLimit);
        } else {
            $this->FareTimeLimit = $fareTimeLimit;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
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
     * Get Flightnumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFlightnumber()
    {
        return isset($this->Flightnumber) ? $this->Flightnumber : null;
    }
    /**
     * Set Flightnumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $flightnumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setFlightnumber($flightnumber = null)
    {
        // validation for constraint: string
        if (!is_null($flightnumber) && !is_string($flightnumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightnumber)), __LINE__);
        }
        if (is_null($flightnumber) || (is_array($flightnumber) && empty($flightnumber))) {
            unset($this->Flightnumber);
        } else {
            $this->Flightnumber = $flightnumber;
        }
        return $this;
    }
    /**
     * Get MealCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMealCode()
    {
        return isset($this->MealCode) ? $this->MealCode : null;
    }
    /**
     * Set MealCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mealCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setMealCode($mealCode = null)
    {
        // validation for constraint: string
        if (!is_null($mealCode) && !is_string($mealCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mealCode)), __LINE__);
        }
        if (is_null($mealCode) || (is_array($mealCode) && empty($mealCode))) {
            unset($this->MealCode);
        } else {
            $this->MealCode = $mealCode;
        }
        return $this;
    }
    /**
     * Get NVA value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNVA()
    {
        return isset($this->NVA) ? $this->NVA : null;
    }
    /**
     * Set NVA value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nVA
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setNVA($nVA = null)
    {
        // validation for constraint: string
        if (!is_null($nVA) && !is_string($nVA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nVA)), __LINE__);
        }
        if (is_null($nVA) || (is_array($nVA) && empty($nVA))) {
            unset($this->NVA);
        } else {
            $this->NVA = $nVA;
        }
        return $this;
    }
    /**
     * Get NVB value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNVB()
    {
        return isset($this->NVB) ? $this->NVB : null;
    }
    /**
     * Set NVB value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nVB
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setNVB($nVB = null)
    {
        // validation for constraint: string
        if (!is_null($nVB) && !is_string($nVB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nVB)), __LINE__);
        }
        if (is_null($nVB) || (is_array($nVB) && empty($nVB))) {
            unset($this->NVB);
        } else {
            $this->NVB = $nVB;
        }
        return $this;
    }
    /**
     * Get NumberOfStops value
     * @return int|null
     */
    public function getNumberOfStops()
    {
        return $this->NumberOfStops;
    }
    /**
     * Set NumberOfStops value
     * @param int $numberOfStops
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setNumberOfStops($numberOfStops = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfStops) && !is_numeric($numberOfStops)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfStops)), __LINE__);
        }
        $this->NumberOfStops = $numberOfStops;
        return $this;
    }
    /**
     * Get OnTimeIndicator value
     * @return int|null
     */
    public function getOnTimeIndicator()
    {
        return $this->OnTimeIndicator;
    }
    /**
     * Set OnTimeIndicator value
     * @param int $onTimeIndicator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setOnTimeIndicator($onTimeIndicator = null)
    {
        // validation for constraint: int
        if (!is_null($onTimeIndicator) && !is_numeric($onTimeIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($onTimeIndicator)), __LINE__);
        }
        $this->OnTimeIndicator = $onTimeIndicator;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
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
     * Get SegmentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSegmentID()
    {
        return isset($this->SegmentID) ? $this->SegmentID : null;
    }
    /**
     * Set SegmentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $segmentID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setSegmentID($segmentID = null)
    {
        // validation for constraint: string
        if (!is_null($segmentID) && !is_string($segmentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentID)), __LINE__);
        }
        if (is_null($segmentID) || (is_array($segmentID) && empty($segmentID))) {
            unset($this->SegmentID);
        } else {
            $this->SegmentID = $segmentID;
        }
        return $this;
    }
    /**
     * Get SegmentMileage value
     * @return int|null
     */
    public function getSegmentMileage()
    {
        return $this->SegmentMileage;
    }
    /**
     * Set SegmentMileage value
     * @param int $segmentMileage
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setSegmentMileage($segmentMileage = null)
    {
        // validation for constraint: int
        if (!is_null($segmentMileage) && !is_numeric($segmentMileage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($segmentMileage)), __LINE__);
        }
        $this->SegmentMileage = $segmentMileage;
        return $this;
    }
    /**
     * Get SegmentNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSegmentNumber()
    {
        return isset($this->SegmentNumber) ? $this->SegmentNumber : null;
    }
    /**
     * Set SegmentNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $segmentNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setSegmentNumber($segmentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($segmentNumber) && !is_string($segmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentNumber)), __LINE__);
        }
        if (is_null($segmentNumber) || (is_array($segmentNumber) && empty($segmentNumber))) {
            unset($this->SegmentNumber);
        } else {
            $this->SegmentNumber = $segmentNumber;
        }
        return $this;
    }
    /**
     * Get Status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatus()
    {
        return isset($this->Status) ? $this->Status : null;
    }
    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $status
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
        }
        return $this;
    }
    /**
     * Get StopIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStopIndicator()
    {
        return isset($this->StopIndicator) ? $this->StopIndicator : null;
    }
    /**
     * Set StopIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $stopIndicator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setStopIndicator($stopIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($stopIndicator) && !is_string($stopIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stopIndicator)), __LINE__);
        }
        if (is_null($stopIndicator) || (is_array($stopIndicator) && empty($stopIndicator))) {
            unset($this->StopIndicator);
        } else {
            $this->StopIndicator = $stopIndicator;
        }
        return $this;
    }
    /**
     * Get TicketNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTicketNumber()
    {
        return isset($this->TicketNumber) ? $this->TicketNumber : null;
    }
    /**
     * Set TicketNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ticketNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setTicketNumber($ticketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketNumber)), __LINE__);
        }
        if (is_null($ticketNumber) || (is_array($ticketNumber) && empty($ticketNumber))) {
            unset($this->TicketNumber);
        } else {
            $this->TicketNumber = $ticketNumber;
        }
        return $this;
    }
    /**
     * Get Ticketed value
     * @return bool|null
     */
    public function getTicketed()
    {
        return $this->Ticketed;
    }
    /**
     * Set Ticketed value
     * @param bool $ticketed
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setTicketed($ticketed = null)
    {
        // validation for constraint: boolean
        if (!is_null($ticketed) && !is_bool($ticketed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ticketed)), __LINE__);
        }
        $this->Ticketed = $ticketed;
        return $this;
    }
    /**
     * Get TravelTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTravelTime()
    {
        return isset($this->TravelTime) ? $this->TravelTime : null;
    }
    /**
     * Set TravelTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $travelTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
     */
    public function setTravelTime($travelTime = null)
    {
        // validation for constraint: maxInclusive
        if ($travelTime > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $travelTime), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($travelTime < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $travelTime), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($travelTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $travelTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($travelTime, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($travelTime) && !is_string($travelTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelTime)), __LINE__);
        }
        if (is_null($travelTime) || (is_array($travelTime) && empty($travelTime))) {
            unset($this->TravelTime);
        } else {
            $this->TravelTime = $travelTime;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment
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
