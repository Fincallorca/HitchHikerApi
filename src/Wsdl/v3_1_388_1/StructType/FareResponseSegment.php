<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareResponseSegment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareResponseSegment
 * @subpackage Structs
 */
class FareResponseSegment extends AbstractStructBase
{
    /**
     * The Allotment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse
     */
    public $Allotment;
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
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CarrierCode;
    /**
     * The CodeShare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CodeShare;
    /**
     * The DatePairs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseDatePair
     */
    public $DatePairs;
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
     * The EquipmentCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EquipmentCode;
    /**
     * The EquipmentName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EquipmentName;
    /**
     * The FareBase
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareBase;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FlightNumber;
    /**
     * The FreeBaggageAllowance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FreeBaggageAllowance;
    /**
     * The FreeSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $FreeSeats;
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
     * The Surcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $Surcharge;
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
     * Constructor method for FareResponseSegment
     * @uses FareResponseSegment::setAllotment()
     * @uses FareResponseSegment::setArrival()
     * @uses FareResponseSegment::setArrivalDateTime()
     * @uses FareResponseSegment::setBookingClass()
     * @uses FareResponseSegment::setCabinClass()
     * @uses FareResponseSegment::setCabinClassName()
     * @uses FareResponseSegment::setCarrierCode()
     * @uses FareResponseSegment::setCodeShare()
     * @uses FareResponseSegment::setDatePairs()
     * @uses FareResponseSegment::setDeparture()
     * @uses FareResponseSegment::setDepartureDateTime()
     * @uses FareResponseSegment::setEquipmentCode()
     * @uses FareResponseSegment::setEquipmentName()
     * @uses FareResponseSegment::setFareBase()
     * @uses FareResponseSegment::setFlightNumber()
     * @uses FareResponseSegment::setFreeBaggageAllowance()
     * @uses FareResponseSegment::setFreeSeats()
     * @uses FareResponseSegment::setMealCode()
     * @uses FareResponseSegment::setNumberOfStops()
     * @uses FareResponseSegment::setSegmentID()
     * @uses FareResponseSegment::setSegmentMileage()
     * @uses FareResponseSegment::setSurcharge()
     * @uses FareResponseSegment::setTravelTime()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse $allotment
     * @param string $arrival
     * @param string $arrivalDateTime
     * @param string $bookingClass
     * @param string $cabinClass
     * @param string $cabinClassName
     * @param string $carrierCode
     * @param string $codeShare
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseDatePair $datePairs
     * @param string $departure
     * @param string $departureDateTime
     * @param string $equipmentCode
     * @param string $equipmentName
     * @param string $fareBase
     * @param string $flightNumber
     * @param string $freeBaggageAllowance
     * @param int $freeSeats
     * @param string $mealCode
     * @param int $numberOfStops
     * @param string $segmentID
     * @param int $segmentMileage
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $surcharge
     * @param string $travelTime
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse $allotment = null, $arrival = null, $arrivalDateTime = null, $bookingClass = null, $cabinClass = null, $cabinClassName = null, $carrierCode = null, $codeShare = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseDatePair $datePairs = null, $departure = null, $departureDateTime = null, $equipmentCode = null, $equipmentName = null, $fareBase = null, $flightNumber = null, $freeBaggageAllowance = null, $freeSeats = null, $mealCode = null, $numberOfStops = null, $segmentID = null, $segmentMileage = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $surcharge = null, $travelTime = null)
    {
        $this
            ->setAllotment($allotment)
            ->setArrival($arrival)
            ->setArrivalDateTime($arrivalDateTime)
            ->setBookingClass($bookingClass)
            ->setCabinClass($cabinClass)
            ->setCabinClassName($cabinClassName)
            ->setCarrierCode($carrierCode)
            ->setCodeShare($codeShare)
            ->setDatePairs($datePairs)
            ->setDeparture($departure)
            ->setDepartureDateTime($departureDateTime)
            ->setEquipmentCode($equipmentCode)
            ->setEquipmentName($equipmentName)
            ->setFareBase($fareBase)
            ->setFlightNumber($flightNumber)
            ->setFreeBaggageAllowance($freeBaggageAllowance)
            ->setFreeSeats($freeSeats)
            ->setMealCode($mealCode)
            ->setNumberOfStops($numberOfStops)
            ->setSegmentID($segmentID)
            ->setSegmentMileage($segmentMileage)
            ->setSurcharge($surcharge)
            ->setTravelTime($travelTime);
    }
    /**
     * Get Allotment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse|null
     */
    public function getAllotment()
    {
        return isset($this->Allotment) ? $this->Allotment : null;
    }
    /**
     * Set Allotment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse $allotment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
     */
    public function setAllotment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse $allotment = null)
    {
        if (is_null($allotment) || (is_array($allotment) && empty($allotment))) {
            unset($this->Allotment);
        } else {
            $this->Allotment = $allotment;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
     * Get CarrierCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCarrierCode()
    {
        return isset($this->CarrierCode) ? $this->CarrierCode : null;
    }
    /**
     * Set CarrierCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $carrierCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierCode)), __LINE__);
        }
        if (is_null($carrierCode) || (is_array($carrierCode) && empty($carrierCode))) {
            unset($this->CarrierCode);
        } else {
            $this->CarrierCode = $carrierCode;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
     * Get DatePairs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseDatePair|null
     */
    public function getDatePairs()
    {
        return isset($this->DatePairs) ? $this->DatePairs : null;
    }
    /**
     * Set DatePairs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseDatePair $datePairs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
     */
    public function setDatePairs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseDatePair $datePairs = null)
    {
        if (is_null($datePairs) || (is_array($datePairs) && empty($datePairs))) {
            unset($this->DatePairs);
        } else {
            $this->DatePairs = $datePairs;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
     * Get EquipmentCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEquipmentCode()
    {
        return isset($this->EquipmentCode) ? $this->EquipmentCode : null;
    }
    /**
     * Set EquipmentCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $equipmentCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
     */
    public function setEquipmentCode($equipmentCode = null)
    {
        // validation for constraint: string
        if (!is_null($equipmentCode) && !is_string($equipmentCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($equipmentCode)), __LINE__);
        }
        if (is_null($equipmentCode) || (is_array($equipmentCode) && empty($equipmentCode))) {
            unset($this->EquipmentCode);
        } else {
            $this->EquipmentCode = $equipmentCode;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
     * Get FareBase value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareBase()
    {
        return isset($this->FareBase) ? $this->FareBase : null;
    }
    /**
     * Set FareBase value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareBase
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
     */
    public function setFareBase($fareBase = null)
    {
        // validation for constraint: string
        if (!is_null($fareBase) && !is_string($fareBase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareBase)), __LINE__);
        }
        if (is_null($fareBase) || (is_array($fareBase) && empty($fareBase))) {
            unset($this->FareBase);
        } else {
            $this->FareBase = $fareBase;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
     * Get FreeBaggageAllowance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFreeBaggageAllowance()
    {
        return isset($this->FreeBaggageAllowance) ? $this->FreeBaggageAllowance : null;
    }
    /**
     * Set FreeBaggageAllowance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $freeBaggageAllowance
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
     */
    public function setFreeBaggageAllowance($freeBaggageAllowance = null)
    {
        // validation for constraint: string
        if (!is_null($freeBaggageAllowance) && !is_string($freeBaggageAllowance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeBaggageAllowance)), __LINE__);
        }
        if (is_null($freeBaggageAllowance) || (is_array($freeBaggageAllowance) && empty($freeBaggageAllowance))) {
            unset($this->FreeBaggageAllowance);
        } else {
            $this->FreeBaggageAllowance = $freeBaggageAllowance;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment
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
