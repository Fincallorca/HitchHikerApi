<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRResponseSegment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PNRResponseSegment
 * @subpackage Structs
 */
class PNRResponseSegment extends AbstractStructBase
{
    /**
     * The AirlineCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AirlineCode;
    /**
     * The AirlineRecordLocator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AirlineRecordLocator;
    /**
     * The AllotmentID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AllotmentID;
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
     * The BookingClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BookingClass;
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
     * The IsAllotment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAllotment;
    /**
     * The IsElectronicTicketingPermitted
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsElectronicTicketingPermitted;
    /**
     * The MealCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MealCode;
    /**
     * The OperatingCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OperatingCarrier;
    /**
     * The OperatingCarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OperatingCarrierCode;
    /**
     * The OriginalSegmentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OriginalSegmentNumber;
    /**
     * The SegmentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SegmentNumber;
    /**
     * The SegmentStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SegmentStatus;
    /**
     * Constructor method for PNRResponseSegment
     * @uses PNRResponseSegment::setAirlineCode()
     * @uses PNRResponseSegment::setAirlineRecordLocator()
     * @uses PNRResponseSegment::setAllotmentID()
     * @uses PNRResponseSegment::setArrival()
     * @uses PNRResponseSegment::setArrivalDate()
     * @uses PNRResponseSegment::setBookingClass()
     * @uses PNRResponseSegment::setDeparture()
     * @uses PNRResponseSegment::setDepartureDate()
     * @uses PNRResponseSegment::setEquipmentName()
     * @uses PNRResponseSegment::setFlightNumber()
     * @uses PNRResponseSegment::setIsAllotment()
     * @uses PNRResponseSegment::setIsElectronicTicketingPermitted()
     * @uses PNRResponseSegment::setMealCode()
     * @uses PNRResponseSegment::setOperatingCarrier()
     * @uses PNRResponseSegment::setOperatingCarrierCode()
     * @uses PNRResponseSegment::setOriginalSegmentNumber()
     * @uses PNRResponseSegment::setSegmentNumber()
     * @uses PNRResponseSegment::setSegmentStatus()
     * @param string $airlineCode
     * @param string $airlineRecordLocator
     * @param string $allotmentID
     * @param string $arrival
     * @param string $arrivalDate
     * @param string $bookingClass
     * @param string $departure
     * @param string $departureDate
     * @param string $equipmentName
     * @param string $flightNumber
     * @param bool $isAllotment
     * @param bool $isElectronicTicketingPermitted
     * @param string $mealCode
     * @param string $operatingCarrier
     * @param string $operatingCarrierCode
     * @param int $originalSegmentNumber
     * @param int $segmentNumber
     * @param string $segmentStatus
     */
    public function __construct($airlineCode = null, $airlineRecordLocator = null, $allotmentID = null, $arrival = null, $arrivalDate = null, $bookingClass = null, $departure = null, $departureDate = null, $equipmentName = null, $flightNumber = null, $isAllotment = null, $isElectronicTicketingPermitted = null, $mealCode = null, $operatingCarrier = null, $operatingCarrierCode = null, $originalSegmentNumber = null, $segmentNumber = null, $segmentStatus = null)
    {
        $this
            ->setAirlineCode($airlineCode)
            ->setAirlineRecordLocator($airlineRecordLocator)
            ->setAllotmentID($allotmentID)
            ->setArrival($arrival)
            ->setArrivalDate($arrivalDate)
            ->setBookingClass($bookingClass)
            ->setDeparture($departure)
            ->setDepartureDate($departureDate)
            ->setEquipmentName($equipmentName)
            ->setFlightNumber($flightNumber)
            ->setIsAllotment($isAllotment)
            ->setIsElectronicTicketingPermitted($isElectronicTicketingPermitted)
            ->setMealCode($mealCode)
            ->setOperatingCarrier($operatingCarrier)
            ->setOperatingCarrierCode($operatingCarrierCode)
            ->setOriginalSegmentNumber($originalSegmentNumber)
            ->setSegmentNumber($segmentNumber)
            ->setSegmentStatus($segmentStatus);
    }
    /**
     * Get AirlineCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAirlineCode()
    {
        return isset($this->AirlineCode) ? $this->AirlineCode : null;
    }
    /**
     * Set AirlineCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $airlineCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
     */
    public function setAirlineCode($airlineCode = null)
    {
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineCode)), __LINE__);
        }
        if (is_null($airlineCode) || (is_array($airlineCode) && empty($airlineCode))) {
            unset($this->AirlineCode);
        } else {
            $this->AirlineCode = $airlineCode;
        }
        return $this;
    }
    /**
     * Get AirlineRecordLocator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAirlineRecordLocator()
    {
        return isset($this->AirlineRecordLocator) ? $this->AirlineRecordLocator : null;
    }
    /**
     * Set AirlineRecordLocator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $airlineRecordLocator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
     */
    public function setAirlineRecordLocator($airlineRecordLocator = null)
    {
        // validation for constraint: string
        if (!is_null($airlineRecordLocator) && !is_string($airlineRecordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineRecordLocator)), __LINE__);
        }
        if (is_null($airlineRecordLocator) || (is_array($airlineRecordLocator) && empty($airlineRecordLocator))) {
            unset($this->AirlineRecordLocator);
        } else {
            $this->AirlineRecordLocator = $airlineRecordLocator;
        }
        return $this;
    }
    /**
     * Get AllotmentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAllotmentID()
    {
        return isset($this->AllotmentID) ? $this->AllotmentID : null;
    }
    /**
     * Set AllotmentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $allotmentID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
     */
    public function setAllotmentID($allotmentID = null)
    {
        // validation for constraint: string
        if (!is_null($allotmentID) && !is_string($allotmentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($allotmentID)), __LINE__);
        }
        if (is_null($allotmentID) || (is_array($allotmentID) && empty($allotmentID))) {
            unset($this->AllotmentID);
        } else {
            $this->AllotmentID = $allotmentID;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
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
     * Get IsAllotment value
     * @return bool|null
     */
    public function getIsAllotment()
    {
        return $this->IsAllotment;
    }
    /**
     * Set IsAllotment value
     * @param bool $isAllotment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
     */
    public function setIsAllotment($isAllotment = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAllotment) && !is_bool($isAllotment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAllotment)), __LINE__);
        }
        $this->IsAllotment = $isAllotment;
        return $this;
    }
    /**
     * Get IsElectronicTicketingPermitted value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsElectronicTicketingPermitted()
    {
        return isset($this->IsElectronicTicketingPermitted) ? $this->IsElectronicTicketingPermitted : null;
    }
    /**
     * Set IsElectronicTicketingPermitted value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isElectronicTicketingPermitted
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
     */
    public function setIsElectronicTicketingPermitted($isElectronicTicketingPermitted = null)
    {
        // validation for constraint: boolean
        if (!is_null($isElectronicTicketingPermitted) && !is_bool($isElectronicTicketingPermitted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isElectronicTicketingPermitted)), __LINE__);
        }
        if (is_null($isElectronicTicketingPermitted) || (is_array($isElectronicTicketingPermitted) && empty($isElectronicTicketingPermitted))) {
            unset($this->IsElectronicTicketingPermitted);
        } else {
            $this->IsElectronicTicketingPermitted = $isElectronicTicketingPermitted;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
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
     * Get OperatingCarrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOperatingCarrier()
    {
        return isset($this->OperatingCarrier) ? $this->OperatingCarrier : null;
    }
    /**
     * Set OperatingCarrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $operatingCarrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
     */
    public function setOperatingCarrier($operatingCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($operatingCarrier) && !is_string($operatingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operatingCarrier)), __LINE__);
        }
        if (is_null($operatingCarrier) || (is_array($operatingCarrier) && empty($operatingCarrier))) {
            unset($this->OperatingCarrier);
        } else {
            $this->OperatingCarrier = $operatingCarrier;
        }
        return $this;
    }
    /**
     * Get OperatingCarrierCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOperatingCarrierCode()
    {
        return isset($this->OperatingCarrierCode) ? $this->OperatingCarrierCode : null;
    }
    /**
     * Set OperatingCarrierCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $operatingCarrierCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
     */
    public function setOperatingCarrierCode($operatingCarrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($operatingCarrierCode) && !is_string($operatingCarrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operatingCarrierCode)), __LINE__);
        }
        if (is_null($operatingCarrierCode) || (is_array($operatingCarrierCode) && empty($operatingCarrierCode))) {
            unset($this->OperatingCarrierCode);
        } else {
            $this->OperatingCarrierCode = $operatingCarrierCode;
        }
        return $this;
    }
    /**
     * Get OriginalSegmentNumber value
     * @return int|null
     */
    public function getOriginalSegmentNumber()
    {
        return $this->OriginalSegmentNumber;
    }
    /**
     * Set OriginalSegmentNumber value
     * @param int $originalSegmentNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
     */
    public function setOriginalSegmentNumber($originalSegmentNumber = null)
    {
        // validation for constraint: int
        if (!is_null($originalSegmentNumber) && !is_numeric($originalSegmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($originalSegmentNumber)), __LINE__);
        }
        $this->OriginalSegmentNumber = $originalSegmentNumber;
        return $this;
    }
    /**
     * Get SegmentNumber value
     * @return int|null
     */
    public function getSegmentNumber()
    {
        return $this->SegmentNumber;
    }
    /**
     * Set SegmentNumber value
     * @param int $segmentNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
     */
    public function setSegmentNumber($segmentNumber = null)
    {
        // validation for constraint: int
        if (!is_null($segmentNumber) && !is_numeric($segmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($segmentNumber)), __LINE__);
        }
        $this->SegmentNumber = $segmentNumber;
        return $this;
    }
    /**
     * Get SegmentStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSegmentStatus()
    {
        return isset($this->SegmentStatus) ? $this->SegmentStatus : null;
    }
    /**
     * Set SegmentStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $segmentStatus
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
     */
    public function setSegmentStatus($segmentStatus = null)
    {
        // validation for constraint: string
        if (!is_null($segmentStatus) && !is_string($segmentStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentStatus)), __LINE__);
        }
        if (is_null($segmentStatus) || (is_array($segmentStatus) && empty($segmentStatus))) {
            unset($this->SegmentStatus);
        } else {
            $this->SegmentStatus = $segmentStatus;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSegment
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
