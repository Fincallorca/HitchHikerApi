<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookRequestSegment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BookRequestSegment
 * @subpackage Structs
 */
class BookRequestSegment extends AbstractStructBase
{
    /**
     * The AirlineFilekey
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AirlineFilekey;
    /**
     * The AllotmentConfig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest
     */
    public $AllotmentConfig;
    /**
     * The Arrival
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Arrival;
    /**
     * The ArrivalDateTime
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ArrivalDateTime;
    /**
     * The BookingClass
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $BookingClass;
    /**
     * The Carrier
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Carrier;
    /**
     * The Departure
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Departure;
    /**
     * The DepartureDateTime
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $DepartureDateTime;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FlightNumber;
    /**
     * The SegmentStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SegmentStatus;
    /**
     * Constructor method for BookRequestSegment
     * @uses BookRequestSegment::setAirlineFilekey()
     * @uses BookRequestSegment::setAllotmentConfig()
     * @uses BookRequestSegment::setArrival()
     * @uses BookRequestSegment::setArrivalDateTime()
     * @uses BookRequestSegment::setBookingClass()
     * @uses BookRequestSegment::setCarrier()
     * @uses BookRequestSegment::setDeparture()
     * @uses BookRequestSegment::setDepartureDateTime()
     * @uses BookRequestSegment::setFlightNumber()
     * @uses BookRequestSegment::setSegmentStatus()
     * @param string $airlineFilekey
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest $allotmentConfig
     * @param string $arrival
     * @param string $arrivalDateTime
     * @param string $bookingClass
     * @param string $carrier
     * @param string $departure
     * @param string $departureDateTime
     * @param string $flightNumber
     * @param string $segmentStatus
     */
    public function __construct($airlineFilekey = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest $allotmentConfig = null, $arrival = null, $arrivalDateTime = null, $bookingClass = null, $carrier = null, $departure = null, $departureDateTime = null, $flightNumber = null, $segmentStatus = null)
    {
        $this
            ->setAirlineFilekey($airlineFilekey)
            ->setAllotmentConfig($allotmentConfig)
            ->setArrival($arrival)
            ->setArrivalDateTime($arrivalDateTime)
            ->setBookingClass($bookingClass)
            ->setCarrier($carrier)
            ->setDeparture($departure)
            ->setDepartureDateTime($departureDateTime)
            ->setFlightNumber($flightNumber)
            ->setSegmentStatus($segmentStatus);
    }
    /**
     * Get AirlineFilekey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAirlineFilekey()
    {
        return isset($this->AirlineFilekey) ? $this->AirlineFilekey : null;
    }
    /**
     * Set AirlineFilekey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $airlineFilekey
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment
     */
    public function setAirlineFilekey($airlineFilekey = null)
    {
        // validation for constraint: string
        if (!is_null($airlineFilekey) && !is_string($airlineFilekey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineFilekey)), __LINE__);
        }
        if (is_null($airlineFilekey) || (is_array($airlineFilekey) && empty($airlineFilekey))) {
            unset($this->AirlineFilekey);
        } else {
            $this->AirlineFilekey = $airlineFilekey;
        }
        return $this;
    }
    /**
     * Get AllotmentConfig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest|null
     */
    public function getAllotmentConfig()
    {
        return isset($this->AllotmentConfig) ? $this->AllotmentConfig : null;
    }
    /**
     * Set AllotmentConfig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest $allotmentConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment
     */
    public function setAllotmentConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest $allotmentConfig = null)
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
     * @return string|null
     */
    public function getArrival()
    {
        return $this->Arrival;
    }
    /**
     * Set Arrival value
     * @param string $arrival
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment
     */
    public function setArrival($arrival = null)
    {
        // validation for constraint: string
        if (!is_null($arrival) && !is_string($arrival)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrival)), __LINE__);
        }
        $this->Arrival = $arrival;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment
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
     * Get BookingClass value
     * @return string|null
     */
    public function getBookingClass()
    {
        return $this->BookingClass;
    }
    /**
     * Set BookingClass value
     * @param string $bookingClass
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment
     */
    public function setBookingClass($bookingClass = null)
    {
        // validation for constraint: string
        if (!is_null($bookingClass) && !is_string($bookingClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingClass)), __LINE__);
        }
        $this->BookingClass = $bookingClass;
        return $this;
    }
    /**
     * Get Carrier value
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment
     */
    public function setCarrier($carrier = null)
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrier)), __LINE__);
        }
        $this->Carrier = $carrier;
        return $this;
    }
    /**
     * Get Departure value
     * @return string|null
     */
    public function getDeparture()
    {
        return $this->Departure;
    }
    /**
     * Set Departure value
     * @param string $departure
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment
     */
    public function setDeparture($departure = null)
    {
        // validation for constraint: string
        if (!is_null($departure) && !is_string($departure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departure)), __LINE__);
        }
        $this->Departure = $departure;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment
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
     * Get FlightNumber value
     * @return string|null
     */
    public function getFlightNumber()
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment
     */
    public function setFlightNumber($flightNumber = null)
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightNumber)), __LINE__);
        }
        $this->FlightNumber = $flightNumber;
        return $this;
    }
    /**
     * Get SegmentStatus value
     * @return string|null
     */
    public function getSegmentStatus()
    {
        return $this->SegmentStatus;
    }
    /**
     * Set SegmentStatus value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SegmentStatusEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SegmentStatusEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $segmentStatus
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment
     */
    public function setSegmentStatus($segmentStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SegmentStatusEnum::valueIsValid($segmentStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $segmentStatus, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SegmentStatusEnum::getValidValues())), __LINE__);
        }
        $this->SegmentStatus = $segmentStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment
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
