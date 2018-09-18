<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailabilityResponseSegmentType StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AvailabilityResponseSegmentType
 * @subpackage Structs
 */
class AvailabilityResponseSegmentType extends AbstractStructBase
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
     * The AllotmentConfig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse
     */
    public $AllotmentConfig;
    /**
     * The Arrival
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Arrival;
    /**
     * The ArrivalDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ArrivalDate;
    /**
     * The ArrivalTime
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
    public $ArrivalTime;
    /**
     * The BookingClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BookingClass;
    /**
     * The CabinClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CabinClass;
    /**
     * The CabinClassName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CabinClassName;
    /**
     * The CodeShare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CodeShare;
    /**
     * The DatePair
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseDatePair
     */
    public $DatePair;
    /**
     * The Departure
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Departure;
    /**
     * The DepartureDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DepartureDate;
    /**
     * The DepartureTime
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
    public $DepartureTime;
    /**
     * The EquipmentName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EquipmentName;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FlightNumber;
    /**
     * The FreeSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $FreeSeats;
    /**
     * The LegEquipmentName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LegEquipmentName;
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
     * The Surcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $Surcharge;
    /**
     * Constructor method for AvailabilityResponseSegmentType
     * @uses AvailabilityResponseSegmentType::setAirline()
     * @uses AvailabilityResponseSegmentType::setAllotmentConfig()
     * @uses AvailabilityResponseSegmentType::setArrival()
     * @uses AvailabilityResponseSegmentType::setArrivalDate()
     * @uses AvailabilityResponseSegmentType::setArrivalTime()
     * @uses AvailabilityResponseSegmentType::setBookingClass()
     * @uses AvailabilityResponseSegmentType::setCabinClass()
     * @uses AvailabilityResponseSegmentType::setCabinClassName()
     * @uses AvailabilityResponseSegmentType::setCodeShare()
     * @uses AvailabilityResponseSegmentType::setDatePair()
     * @uses AvailabilityResponseSegmentType::setDeparture()
     * @uses AvailabilityResponseSegmentType::setDepartureDate()
     * @uses AvailabilityResponseSegmentType::setDepartureTime()
     * @uses AvailabilityResponseSegmentType::setEquipmentName()
     * @uses AvailabilityResponseSegmentType::setFlightNumber()
     * @uses AvailabilityResponseSegmentType::setFreeSeats()
     * @uses AvailabilityResponseSegmentType::setLegEquipmentName()
     * @uses AvailabilityResponseSegmentType::setMealCode()
     * @uses AvailabilityResponseSegmentType::setNumberOfStops()
     * @uses AvailabilityResponseSegmentType::setSurcharge()
     * @param string $airline
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse $allotmentConfig
     * @param string $arrival
     * @param string $arrivalDate
     * @param string $arrivalTime
     * @param string $bookingClass
     * @param string $cabinClass
     * @param string $cabinClassName
     * @param string $codeShare
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseDatePair $datePair
     * @param string $departure
     * @param string $departureDate
     * @param string $departureTime
     * @param string $equipmentName
     * @param string $flightNumber
     * @param int $freeSeats
     * @param string $legEquipmentName
     * @param string $mealCode
     * @param int $numberOfStops
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $surcharge
     */
    public function __construct($airline = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse $allotmentConfig = null, $arrival = null, $arrivalDate = null, $arrivalTime = null, $bookingClass = null, $cabinClass = null, $cabinClassName = null, $codeShare = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseDatePair $datePair = null, $departure = null, $departureDate = null, $departureTime = null, $equipmentName = null, $flightNumber = null, $freeSeats = null, $legEquipmentName = null, $mealCode = null, $numberOfStops = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $surcharge = null)
    {
        $this
            ->setAirline($airline)
            ->setAllotmentConfig($allotmentConfig)
            ->setArrival($arrival)
            ->setArrivalDate($arrivalDate)
            ->setArrivalTime($arrivalTime)
            ->setBookingClass($bookingClass)
            ->setCabinClass($cabinClass)
            ->setCabinClassName($cabinClassName)
            ->setCodeShare($codeShare)
            ->setDatePair($datePair)
            ->setDeparture($departure)
            ->setDepartureDate($departureDate)
            ->setDepartureTime($departureTime)
            ->setEquipmentName($equipmentName)
            ->setFlightNumber($flightNumber)
            ->setFreeSeats($freeSeats)
            ->setLegEquipmentName($legEquipmentName)
            ->setMealCode($mealCode)
            ->setNumberOfStops($numberOfStops)
            ->setSurcharge($surcharge);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
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
     * Get AllotmentConfig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse|null
     */
    public function getAllotmentConfig()
    {
        return isset($this->AllotmentConfig) ? $this->AllotmentConfig : null;
    }
    /**
     * Set AllotmentConfig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse $allotmentConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
     */
    public function setAllotmentConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse $allotmentConfig = null)
    {
        if (is_null($allotmentConfig) || (is_array($allotmentConfig) && empty($allotmentConfig))) {
            unset($this->AllotmentConfig);
        } else {
            $this->AllotmentConfig = $allotmentConfig;
        }
        return $this;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
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
     * Get ArrivalDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getArrivalDate()
    {
        return isset($this->ArrivalDate) ? $this->ArrivalDate : null;
    }
    /**
     * Set ArrivalDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $arrivalDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
     */
    public function setArrivalDate($arrivalDate = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalDate) && !is_string($arrivalDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalDate)), __LINE__);
        }
        if (is_null($arrivalDate) || (is_array($arrivalDate) && empty($arrivalDate))) {
            unset($this->ArrivalDate);
        } else {
            $this->ArrivalDate = $arrivalDate;
        }
        return $this;
    }
    /**
     * Get ArrivalTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getArrivalTime()
    {
        return isset($this->ArrivalTime) ? $this->ArrivalTime : null;
    }
    /**
     * Set ArrivalTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $arrivalTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
     */
    public function setArrivalTime($arrivalTime = null)
    {
        // validation for constraint: maxInclusive
        if ($arrivalTime > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $arrivalTime), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($arrivalTime < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $arrivalTime), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($arrivalTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $arrivalTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($arrivalTime, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalTime)), __LINE__);
        }
        if (is_null($arrivalTime) || (is_array($arrivalTime) && empty($arrivalTime))) {
            unset($this->ArrivalTime);
        } else {
            $this->ArrivalTime = $arrivalTime;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
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
     * Get CabinClass value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCabinClass()
    {
        return isset($this->CabinClass) ? $this->CabinClass : null;
    }
    /**
     * Set CabinClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cabinClass
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
     */
    public function setCabinClass($cabinClass = null)
    {
        // validation for constraint: string
        if (!is_null($cabinClass) && !is_string($cabinClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cabinClass)), __LINE__);
        }
        if (is_null($cabinClass) || (is_array($cabinClass) && empty($cabinClass))) {
            unset($this->CabinClass);
        } else {
            $this->CabinClass = $cabinClass;
        }
        return $this;
    }
    /**
     * Get CabinClassName value
     * @return string|null
     */
    public function getCabinClassName()
    {
        return $this->CabinClassName;
    }
    /**
     * Set CabinClassName value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cabinClassName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
     */
    public function setCabinClassName($cabinClassName = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid($cabinClassName)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cabinClassName, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues())), __LINE__);
        }
        $this->CabinClassName = $cabinClassName;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
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
     * Get DatePair value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseDatePair|null
     */
    public function getDatePair()
    {
        return isset($this->DatePair) ? $this->DatePair : null;
    }
    /**
     * Set DatePair value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseDatePair $datePair
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
     */
    public function setDatePair(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseDatePair $datePair = null)
    {
        if (is_null($datePair) || (is_array($datePair) && empty($datePair))) {
            unset($this->DatePair);
        } else {
            $this->DatePair = $datePair;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
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
     * Get DepartureDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDepartureDate()
    {
        return isset($this->DepartureDate) ? $this->DepartureDate : null;
    }
    /**
     * Set DepartureDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $departureDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
     */
    public function setDepartureDate($departureDate = null)
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDate)), __LINE__);
        }
        if (is_null($departureDate) || (is_array($departureDate) && empty($departureDate))) {
            unset($this->DepartureDate);
        } else {
            $this->DepartureDate = $departureDate;
        }
        return $this;
    }
    /**
     * Get DepartureTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDepartureTime()
    {
        return isset($this->DepartureTime) ? $this->DepartureTime : null;
    }
    /**
     * Set DepartureTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $departureTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
     */
    public function setDepartureTime($departureTime = null)
    {
        // validation for constraint: maxInclusive
        if ($departureTime > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $departureTime), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($departureTime < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $departureTime), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($departureTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $departureTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($departureTime, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureTime)), __LINE__);
        }
        if (is_null($departureTime) || (is_array($departureTime) && empty($departureTime))) {
            unset($this->DepartureTime);
        } else {
            $this->DepartureTime = $departureTime;
        }
        return $this;
    }
    /**
     * Get EquipmentName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEquipmentName()
    {
        return isset($this->EquipmentName) ? $this->EquipmentName : null;
    }
    /**
     * Set EquipmentName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $equipmentName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
     */
    public function setEquipmentName($equipmentName = null)
    {
        // validation for constraint: string
        if (!is_null($equipmentName) && !is_string($equipmentName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($equipmentName)), __LINE__);
        }
        if (is_null($equipmentName) || (is_array($equipmentName) && empty($equipmentName))) {
            unset($this->EquipmentName);
        } else {
            $this->EquipmentName = $equipmentName;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
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
     * Get FreeSeats value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getFreeSeats()
    {
        return isset($this->FreeSeats) ? $this->FreeSeats : null;
    }
    /**
     * Set FreeSeats value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $freeSeats
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
     */
    public function setFreeSeats($freeSeats = null)
    {
        // validation for constraint: int
        if (!is_null($freeSeats) && !is_numeric($freeSeats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($freeSeats)), __LINE__);
        }
        if (is_null($freeSeats) || (is_array($freeSeats) && empty($freeSeats))) {
            unset($this->FreeSeats);
        } else {
            $this->FreeSeats = $freeSeats;
        }
        return $this;
    }
    /**
     * Get LegEquipmentName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLegEquipmentName()
    {
        return isset($this->LegEquipmentName) ? $this->LegEquipmentName : null;
    }
    /**
     * Set LegEquipmentName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $legEquipmentName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
     */
    public function setLegEquipmentName($legEquipmentName = null)
    {
        // validation for constraint: string
        if (!is_null($legEquipmentName) && !is_string($legEquipmentName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legEquipmentName)), __LINE__);
        }
        if (is_null($legEquipmentName) || (is_array($legEquipmentName) && empty($legEquipmentName))) {
            unset($this->LegEquipmentName);
        } else {
            $this->LegEquipmentName = $legEquipmentName;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
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
     * Get Surcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getSurcharge()
    {
        return isset($this->Surcharge) ? $this->Surcharge : null;
    }
    /**
     * Set Surcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $surcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
     */
    public function setSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $surcharge = null)
    {
        if (is_null($surcharge) || (is_array($surcharge) && empty($surcharge))) {
            unset($this->Surcharge);
        } else {
            $this->Surcharge = $surcharge;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType
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
