<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketBookingRequestSegment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketBookingRequestSegment
 * @subpackage Structs
 */
class TicketBookingRequestSegment extends AbstractStructBase
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
     * The Baggage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Baggage;
    /**
     * The Carrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Carrier;
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
     * @var string
     */
    public $DepartureDateTime;
    /**
     * The Designator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Designator;
    /**
     * The Farebase
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Farebase;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FlightNumber;
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
     * The StopIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StopIndicator;
    /**
     * Constructor method for TicketBookingRequestSegment
     * @uses TicketBookingRequestSegment::setArrival()
     * @uses TicketBookingRequestSegment::setBaggage()
     * @uses TicketBookingRequestSegment::setCarrier()
     * @uses TicketBookingRequestSegment::setDeparture()
     * @uses TicketBookingRequestSegment::setDepartureDateTime()
     * @uses TicketBookingRequestSegment::setDesignator()
     * @uses TicketBookingRequestSegment::setFarebase()
     * @uses TicketBookingRequestSegment::setFlightNumber()
     * @uses TicketBookingRequestSegment::setNVA()
     * @uses TicketBookingRequestSegment::setNVB()
     * @uses TicketBookingRequestSegment::setStopIndicator()
     * @param string $arrival
     * @param string $baggage
     * @param string $carrier
     * @param string $departure
     * @param string $departureDateTime
     * @param string $designator
     * @param string $farebase
     * @param string $flightNumber
     * @param string $nVA
     * @param string $nVB
     * @param string $stopIndicator
     */
    public function __construct($arrival = null, $baggage = null, $carrier = null, $departure = null, $departureDateTime = null, $designator = null, $farebase = null, $flightNumber = null, $nVA = null, $nVB = null, $stopIndicator = null)
    {
        $this
            ->setArrival($arrival)
            ->setBaggage($baggage)
            ->setCarrier($carrier)
            ->setDeparture($departure)
            ->setDepartureDateTime($departureDateTime)
            ->setDesignator($designator)
            ->setFarebase($farebase)
            ->setFlightNumber($flightNumber)
            ->setNVA($nVA)
            ->setNVB($nVB)
            ->setStopIndicator($stopIndicator);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment
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
     * @return string|null
     */
    public function getDepartureDateTime()
    {
        return $this->DepartureDateTime;
    }
    /**
     * Set DepartureDateTime value
     * @param string $departureDateTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment
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
