<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailabilityRequestLegType StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AvailabilityRequestLegType
 * @subpackage Structs
 */
class AvailabilityRequestLegType extends AbstractStructBase
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
     * The Arrival
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Arrival;
    /**
     * The BookingClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BookingClass;
    /**
     * The CheckDaysAhead
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CheckDaysAhead;
    /**
     * The CheckDaysBack
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CheckDaysBack;
    /**
     * The Departure
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Departure;
    /**
     * The DepartureDate
     * Meta informations extracted from the WSDL
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
     * The SegmentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestSegmentType
     */
    public $SegmentType;
    /**
     * Constructor method for AvailabilityRequestLegType
     * @uses AvailabilityRequestLegType::setAirline()
     * @uses AvailabilityRequestLegType::setArrival()
     * @uses AvailabilityRequestLegType::setBookingClass()
     * @uses AvailabilityRequestLegType::setCheckDaysAhead()
     * @uses AvailabilityRequestLegType::setCheckDaysBack()
     * @uses AvailabilityRequestLegType::setDeparture()
     * @uses AvailabilityRequestLegType::setDepartureDate()
     * @uses AvailabilityRequestLegType::setDepartureTime()
     * @uses AvailabilityRequestLegType::setSegmentType()
     * @param string $airline
     * @param string $arrival
     * @param string $bookingClass
     * @param int $checkDaysAhead
     * @param int $checkDaysBack
     * @param string $departure
     * @param string $departureDate
     * @param string $departureTime
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestSegmentType $segmentType
     */
    public function __construct($airline = null, $arrival = null, $bookingClass = null, $checkDaysAhead = null, $checkDaysBack = null, $departure = null, $departureDate = null, $departureTime = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestSegmentType $segmentType = null)
    {
        $this
            ->setAirline($airline)
            ->setArrival($arrival)
            ->setBookingClass($bookingClass)
            ->setCheckDaysAhead($checkDaysAhead)
            ->setCheckDaysBack($checkDaysBack)
            ->setDeparture($departure)
            ->setDepartureDate($departureDate)
            ->setDepartureTime($departureTime)
            ->setSegmentType($segmentType);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType
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
     * Get CheckDaysAhead value
     * @return int|null
     */
    public function getCheckDaysAhead()
    {
        return $this->CheckDaysAhead;
    }
    /**
     * Set CheckDaysAhead value
     * @param int $checkDaysAhead
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType
     */
    public function setCheckDaysAhead($checkDaysAhead = null)
    {
        // validation for constraint: int
        if (!is_null($checkDaysAhead) && !is_numeric($checkDaysAhead)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($checkDaysAhead)), __LINE__);
        }
        $this->CheckDaysAhead = $checkDaysAhead;
        return $this;
    }
    /**
     * Get CheckDaysBack value
     * @return int|null
     */
    public function getCheckDaysBack()
    {
        return $this->CheckDaysBack;
    }
    /**
     * Set CheckDaysBack value
     * @param int $checkDaysBack
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType
     */
    public function setCheckDaysBack($checkDaysBack = null)
    {
        // validation for constraint: int
        if (!is_null($checkDaysBack) && !is_numeric($checkDaysBack)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($checkDaysBack)), __LINE__);
        }
        $this->CheckDaysBack = $checkDaysBack;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType
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
     * Get SegmentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestSegmentType|null
     */
    public function getSegmentType()
    {
        return isset($this->SegmentType) ? $this->SegmentType : null;
    }
    /**
     * Set SegmentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestSegmentType $segmentType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType
     */
    public function setSegmentType(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestSegmentType $segmentType = null)
    {
        if (is_null($segmentType) || (is_array($segmentType) && empty($segmentType))) {
            unset($this->SegmentType);
        } else {
            $this->SegmentType = $segmentType;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType
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
