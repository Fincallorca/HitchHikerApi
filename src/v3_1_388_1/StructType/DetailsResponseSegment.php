<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetailsResponseSegment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DetailsResponseSegment
 * @subpackage Structs
 */
class DetailsResponseSegment extends AbstractStructBase
{
    /**
     * The Arrival
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Arrival;
    /**
     * The ArrivalDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
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
     * The BookingClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BookingClass;
    /**
     * The Carrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Carrier;
    /**
     * The CodeShare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CodeShare;
    /**
     * The DaysOfOperation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DaysOfOperation;
    /**
     * The Departure
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Departure;
    /**
     * The DepartureDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
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
     * The Equipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Equipment;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FlightNumber;
    /**
     * The MealCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MealCode;
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
     * - nillable: true
     * @var string
     */
    public $OnTimeIndicator;
    /**
     * The SegmentTravelTime
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
    public $SegmentTravelTime;
    /**
     * Constructor method for DetailsResponseSegment
     * @uses DetailsResponseSegment::setArrival()
     * @uses DetailsResponseSegment::setArrivalDateTime()
     * @uses DetailsResponseSegment::setArrivalTerminal()
     * @uses DetailsResponseSegment::setBookingClass()
     * @uses DetailsResponseSegment::setCarrier()
     * @uses DetailsResponseSegment::setCodeShare()
     * @uses DetailsResponseSegment::setDaysOfOperation()
     * @uses DetailsResponseSegment::setDeparture()
     * @uses DetailsResponseSegment::setDepartureDateTime()
     * @uses DetailsResponseSegment::setDepartureTerminal()
     * @uses DetailsResponseSegment::setEquipment()
     * @uses DetailsResponseSegment::setFlightNumber()
     * @uses DetailsResponseSegment::setMealCode()
     * @uses DetailsResponseSegment::setNumberOfStops()
     * @uses DetailsResponseSegment::setOnTimeIndicator()
     * @uses DetailsResponseSegment::setSegmentTravelTime()
     * @param string $arrival
     * @param string $arrivalDateTime
     * @param string $arrivalTerminal
     * @param string $bookingClass
     * @param string $carrier
     * @param string $codeShare
     * @param string $daysOfOperation
     * @param string $departure
     * @param string $departureDateTime
     * @param string $departureTerminal
     * @param string $equipment
     * @param string $flightNumber
     * @param string $mealCode
     * @param int $numberOfStops
     * @param string $onTimeIndicator
     * @param string $segmentTravelTime
     */
    public function __construct($arrival = null, $arrivalDateTime = null, $arrivalTerminal = null, $bookingClass = null, $carrier = null, $codeShare = null, $daysOfOperation = null, $departure = null, $departureDateTime = null, $departureTerminal = null, $equipment = null, $flightNumber = null, $mealCode = null, $numberOfStops = null, $onTimeIndicator = null, $segmentTravelTime = null)
    {
        $this
            ->setArrival($arrival)
            ->setArrivalDateTime($arrivalDateTime)
            ->setArrivalTerminal($arrivalTerminal)
            ->setBookingClass($bookingClass)
            ->setCarrier($carrier)
            ->setCodeShare($codeShare)
            ->setDaysOfOperation($daysOfOperation)
            ->setDeparture($departure)
            ->setDepartureDateTime($departureDateTime)
            ->setDepartureTerminal($departureTerminal)
            ->setEquipment($equipment)
            ->setFlightNumber($flightNumber)
            ->setMealCode($mealCode)
            ->setNumberOfStops($numberOfStops)
            ->setOnTimeIndicator($onTimeIndicator)
            ->setSegmentTravelTime($segmentTravelTime);
    }
    /**
     * Get Arrival value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getArrival()
    {
        return isset($this->Arrival) ? $this->Arrival : null;
    }
    /**
     * Set Arrival value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $arrival
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment
     */
    public function setArrival($arrival = null)
    {
        // validation for constraint: string
        if (!is_null($arrival) && !is_string($arrival)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrival)), __LINE__);
        }
        if (is_null($arrival) || (is_array($arrival) && empty($arrival))) {
            unset($this->Arrival);
        } else {
            $this->Arrival = $arrival;
        }
        return $this;
    }
    /**
     * Get ArrivalDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getArrivalDateTime()
    {
        return isset($this->ArrivalDateTime) ? $this->ArrivalDateTime : null;
    }
    /**
     * Set ArrivalDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $arrivalDateTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment
     */
    public function setArrivalDateTime($arrivalDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalDateTime) && !is_string($arrivalDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalDateTime)), __LINE__);
        }
        if (is_null($arrivalDateTime) || (is_array($arrivalDateTime) && empty($arrivalDateTime))) {
            unset($this->ArrivalDateTime);
        } else {
            $this->ArrivalDateTime = $arrivalDateTime;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment
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
     * Get BookingClass value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBookingClass()
    {
        return isset($this->BookingClass) ? $this->BookingClass : null;
    }
    /**
     * Set BookingClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $bookingClass
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment
     */
    public function setBookingClass($bookingClass = null)
    {
        // validation for constraint: string
        if (!is_null($bookingClass) && !is_string($bookingClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingClass)), __LINE__);
        }
        if (is_null($bookingClass) || (is_array($bookingClass) && empty($bookingClass))) {
            unset($this->BookingClass);
        } else {
            $this->BookingClass = $bookingClass;
        }
        return $this;
    }
    /**
     * Get Carrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCarrier()
    {
        return isset($this->Carrier) ? $this->Carrier : null;
    }
    /**
     * Set Carrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $carrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment
     */
    public function setCarrier($carrier = null)
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrier)), __LINE__);
        }
        if (is_null($carrier) || (is_array($carrier) && empty($carrier))) {
            unset($this->Carrier);
        } else {
            $this->Carrier = $carrier;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment
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
     * Get DaysOfOperation value
     * @return string|null
     */
    public function getDaysOfOperation()
    {
        return $this->DaysOfOperation;
    }
    /**
     * Set DaysOfOperation value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DaysOfWeekEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DaysOfWeekEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $daysOfOperation
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment
     */
    public function setDaysOfOperation($daysOfOperation = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DaysOfWeekEnum::valueIsValid($daysOfOperation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $daysOfOperation, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DaysOfWeekEnum::getValidValues())), __LINE__);
        }
        $this->DaysOfOperation = $daysOfOperation;
        return $this;
    }
    /**
     * Get Departure value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeparture()
    {
        return isset($this->Departure) ? $this->Departure : null;
    }
    /**
     * Set Departure value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $departure
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment
     */
    public function setDeparture($departure = null)
    {
        // validation for constraint: string
        if (!is_null($departure) && !is_string($departure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departure)), __LINE__);
        }
        if (is_null($departure) || (is_array($departure) && empty($departure))) {
            unset($this->Departure);
        } else {
            $this->Departure = $departure;
        }
        return $this;
    }
    /**
     * Get DepartureDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDepartureDateTime()
    {
        return isset($this->DepartureDateTime) ? $this->DepartureDateTime : null;
    }
    /**
     * Set DepartureDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $departureDateTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment
     */
    public function setDepartureDateTime($departureDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($departureDateTime) && !is_string($departureDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDateTime)), __LINE__);
        }
        if (is_null($departureDateTime) || (is_array($departureDateTime) && empty($departureDateTime))) {
            unset($this->DepartureDateTime);
        } else {
            $this->DepartureDateTime = $departureDateTime;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment
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
     * Get FlightNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFlightNumber()
    {
        return isset($this->FlightNumber) ? $this->FlightNumber : null;
    }
    /**
     * Set FlightNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $flightNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment
     */
    public function setFlightNumber($flightNumber = null)
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightNumber)), __LINE__);
        }
        if (is_null($flightNumber) || (is_array($flightNumber) && empty($flightNumber))) {
            unset($this->FlightNumber);
        } else {
            $this->FlightNumber = $flightNumber;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOnTimeIndicator()
    {
        return isset($this->OnTimeIndicator) ? $this->OnTimeIndicator : null;
    }
    /**
     * Set OnTimeIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $onTimeIndicator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment
     */
    public function setOnTimeIndicator($onTimeIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($onTimeIndicator) && !is_string($onTimeIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($onTimeIndicator)), __LINE__);
        }
        if (is_null($onTimeIndicator) || (is_array($onTimeIndicator) && empty($onTimeIndicator))) {
            unset($this->OnTimeIndicator);
        } else {
            $this->OnTimeIndicator = $onTimeIndicator;
        }
        return $this;
    }
    /**
     * Get SegmentTravelTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSegmentTravelTime()
    {
        return isset($this->SegmentTravelTime) ? $this->SegmentTravelTime : null;
    }
    /**
     * Set SegmentTravelTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $segmentTravelTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment
     */
    public function setSegmentTravelTime($segmentTravelTime = null)
    {
        // validation for constraint: maxInclusive
        if ($segmentTravelTime > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $segmentTravelTime), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($segmentTravelTime < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $segmentTravelTime), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($segmentTravelTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $segmentTravelTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($segmentTravelTime, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($segmentTravelTime) && !is_string($segmentTravelTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentTravelTime)), __LINE__);
        }
        if (is_null($segmentTravelTime) || (is_array($segmentTravelTime) && empty($segmentTravelTime))) {
            unset($this->SegmentTravelTime);
        } else {
            $this->SegmentTravelTime = $segmentTravelTime;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment
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
