<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoutingResponseSegment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RoutingResponseSegment
 * @subpackage Structs
 */
class RoutingResponseSegment extends AbstractStructBase
{
    /**
     * The Arrivals
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation
     */
    public $Arrivals;
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
     * The Departures
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation
     */
    public $Departures;
    /**
     * The Direction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Direction;
    /**
     * The FlightNumberRangeStart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FlightNumberRangeStart;
    /**
     * The FlightNumberRangeStop
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FlightNumberRangeStop;
    /**
     * The IsDirectOnly
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDirectOnly;
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponsePassenger
     */
    public $Passengers;
    /**
     * The Time
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseTime
     */
    public $Time;
    /**
     * Constructor method for RoutingResponseSegment
     * @uses RoutingResponseSegment::setArrivals()
     * @uses RoutingResponseSegment::setBookingClass()
     * @uses RoutingResponseSegment::setCarrier()
     * @uses RoutingResponseSegment::setDepartures()
     * @uses RoutingResponseSegment::setDirection()
     * @uses RoutingResponseSegment::setFlightNumberRangeStart()
     * @uses RoutingResponseSegment::setFlightNumberRangeStop()
     * @uses RoutingResponseSegment::setIsDirectOnly()
     * @uses RoutingResponseSegment::setPassengers()
     * @uses RoutingResponseSegment::setTime()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation $arrivals
     * @param string $bookingClass
     * @param string $carrier
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation $departures
     * @param string $direction
     * @param int $flightNumberRangeStart
     * @param int $flightNumberRangeStop
     * @param bool $isDirectOnly
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponsePassenger $passengers
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseTime $time
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation $arrivals = null, $bookingClass = null, $carrier = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation $departures = null, $direction = null, $flightNumberRangeStart = null, $flightNumberRangeStop = null, $isDirectOnly = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponsePassenger $passengers = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseTime $time = null)
    {
        $this
            ->setArrivals($arrivals)
            ->setBookingClass($bookingClass)
            ->setCarrier($carrier)
            ->setDepartures($departures)
            ->setDirection($direction)
            ->setFlightNumberRangeStart($flightNumberRangeStart)
            ->setFlightNumberRangeStop($flightNumberRangeStop)
            ->setIsDirectOnly($isDirectOnly)
            ->setPassengers($passengers)
            ->setTime($time);
    }
    /**
     * Get Arrivals value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation|null
     */
    public function getArrivals()
    {
        return isset($this->Arrivals) ? $this->Arrivals : null;
    }
    /**
     * Set Arrivals value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation $arrivals
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment
     */
    public function setArrivals(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation $arrivals = null)
    {
        if (is_null($arrivals) || (is_array($arrivals) && empty($arrivals))) {
            unset($this->Arrivals);
        } else {
            $this->Arrivals = $arrivals;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment
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
     * Get Departures value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation|null
     */
    public function getDepartures()
    {
        return isset($this->Departures) ? $this->Departures : null;
    }
    /**
     * Set Departures value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation $departures
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment
     */
    public function setDepartures(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation $departures = null)
    {
        if (is_null($departures) || (is_array($departures) && empty($departures))) {
            unset($this->Departures);
        } else {
            $this->Departures = $departures;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment
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
     * Get FlightNumberRangeStart value
     * @return int|null
     */
    public function getFlightNumberRangeStart()
    {
        return $this->FlightNumberRangeStart;
    }
    /**
     * Set FlightNumberRangeStart value
     * @param int $flightNumberRangeStart
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment
     */
    public function setFlightNumberRangeStart($flightNumberRangeStart = null)
    {
        // validation for constraint: int
        if (!is_null($flightNumberRangeStart) && !is_numeric($flightNumberRangeStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($flightNumberRangeStart)), __LINE__);
        }
        $this->FlightNumberRangeStart = $flightNumberRangeStart;
        return $this;
    }
    /**
     * Get FlightNumberRangeStop value
     * @return int|null
     */
    public function getFlightNumberRangeStop()
    {
        return $this->FlightNumberRangeStop;
    }
    /**
     * Set FlightNumberRangeStop value
     * @param int $flightNumberRangeStop
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment
     */
    public function setFlightNumberRangeStop($flightNumberRangeStop = null)
    {
        // validation for constraint: int
        if (!is_null($flightNumberRangeStop) && !is_numeric($flightNumberRangeStop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($flightNumberRangeStop)), __LINE__);
        }
        $this->FlightNumberRangeStop = $flightNumberRangeStop;
        return $this;
    }
    /**
     * Get IsDirectOnly value
     * @return bool|null
     */
    public function getIsDirectOnly()
    {
        return $this->IsDirectOnly;
    }
    /**
     * Set IsDirectOnly value
     * @param bool $isDirectOnly
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment
     */
    public function setIsDirectOnly($isDirectOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDirectOnly) && !is_bool($isDirectOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDirectOnly)), __LINE__);
        }
        $this->IsDirectOnly = $isDirectOnly;
        return $this;
    }
    /**
     * Get Passengers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponsePassenger|null
     */
    public function getPassengers()
    {
        return isset($this->Passengers) ? $this->Passengers : null;
    }
    /**
     * Set Passengers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponsePassenger $passengers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment
     */
    public function setPassengers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponsePassenger $passengers = null)
    {
        if (is_null($passengers) || (is_array($passengers) && empty($passengers))) {
            unset($this->Passengers);
        } else {
            $this->Passengers = $passengers;
        }
        return $this;
    }
    /**
     * Get Time value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseTime|null
     */
    public function getTime()
    {
        return isset($this->Time) ? $this->Time : null;
    }
    /**
     * Set Time value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseTime $time
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment
     */
    public function setTime(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseTime $time = null)
    {
        if (is_null($time) || (is_array($time) && empty($time))) {
            unset($this->Time);
        } else {
            $this->Time = $time;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment
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
