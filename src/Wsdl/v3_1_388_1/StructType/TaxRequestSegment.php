<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxRequestSegment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TaxRequestSegment
 * @subpackage Structs
 */
class TaxRequestSegment extends AbstractStructBase
{
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
     * - minOccurs: 0
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
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FlightNumber;
    /**
     * Constructor method for TaxRequestSegment
     * @uses TaxRequestSegment::setArrival()
     * @uses TaxRequestSegment::setArrivalDateTime()
     * @uses TaxRequestSegment::setBookingClass()
     * @uses TaxRequestSegment::setCarrier()
     * @uses TaxRequestSegment::setDeparture()
     * @uses TaxRequestSegment::setDepartureDateTime()
     * @uses TaxRequestSegment::setFlightNumber()
     * @param string $arrival
     * @param string $arrivalDateTime
     * @param string $bookingClass
     * @param string $carrier
     * @param string $departure
     * @param string $departureDateTime
     * @param string $flightNumber
     */
    public function __construct($arrival = null, $arrivalDateTime = null, $bookingClass = null, $carrier = null, $departure = null, $departureDateTime = null, $flightNumber = null)
    {
        $this
            ->setArrival($arrival)
            ->setArrivalDateTime($arrivalDateTime)
            ->setBookingClass($bookingClass)
            ->setCarrier($carrier)
            ->setDeparture($departure)
            ->setDepartureDateTime($departureDateTime)
            ->setFlightNumber($flightNumber);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestSegment
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
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestSegment
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestSegment
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
