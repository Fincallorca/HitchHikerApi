<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuoteRequestSegment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QuoteRequestSegment
 * @subpackage Structs
 */
class QuoteRequestSegment extends AbstractStructBase
{
    /**
     * The Airline
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Airline;
    /**
     * The AllotmentMatchCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AllotmentMatchCode;
    /**
     * The AllotmentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AllotmentType;
    /**
     * The Arrival
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Arrival;
    /**
     * The ArrivalDate
     * Meta informations extracted from the WSDL
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
     * @var string
     */
    public $CabinClass;
    /**
     * The CodeShareCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CodeShareCarrier;
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
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FlightNumber;
    /**
     * The PubFarebasis
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestFarebase
     */
    public $PubFarebasis;
    /**
     * Constructor method for QuoteRequestSegment
     * @uses QuoteRequestSegment::setAirline()
     * @uses QuoteRequestSegment::setAllotmentMatchCode()
     * @uses QuoteRequestSegment::setAllotmentType()
     * @uses QuoteRequestSegment::setArrival()
     * @uses QuoteRequestSegment::setArrivalDate()
     * @uses QuoteRequestSegment::setArrivalTime()
     * @uses QuoteRequestSegment::setBookingClass()
     * @uses QuoteRequestSegment::setCabinClass()
     * @uses QuoteRequestSegment::setCodeShareCarrier()
     * @uses QuoteRequestSegment::setDeparture()
     * @uses QuoteRequestSegment::setDepartureDate()
     * @uses QuoteRequestSegment::setDepartureTime()
     * @uses QuoteRequestSegment::setFlightNumber()
     * @uses QuoteRequestSegment::setPubFarebasis()
     * @param string $airline
     * @param string $allotmentMatchCode
     * @param string $allotmentType
     * @param string $arrival
     * @param string $arrivalDate
     * @param string $arrivalTime
     * @param string $bookingClass
     * @param string $cabinClass
     * @param string $codeShareCarrier
     * @param string $departure
     * @param string $departureDate
     * @param string $departureTime
     * @param string $flightNumber
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestFarebase $pubFarebasis
     */
    public function __construct($airline = null, $allotmentMatchCode = null, $allotmentType = null, $arrival = null, $arrivalDate = null, $arrivalTime = null, $bookingClass = null, $cabinClass = null, $codeShareCarrier = null, $departure = null, $departureDate = null, $departureTime = null, $flightNumber = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestFarebase $pubFarebasis = null)
    {
        $this
            ->setAirline($airline)
            ->setAllotmentMatchCode($allotmentMatchCode)
            ->setAllotmentType($allotmentType)
            ->setArrival($arrival)
            ->setArrivalDate($arrivalDate)
            ->setArrivalTime($arrivalTime)
            ->setBookingClass($bookingClass)
            ->setCabinClass($cabinClass)
            ->setCodeShareCarrier($codeShareCarrier)
            ->setDeparture($departure)
            ->setDepartureDate($departureDate)
            ->setDepartureTime($departureTime)
            ->setFlightNumber($flightNumber)
            ->setPubFarebasis($pubFarebasis);
    }
    /**
     * Get Airline value
     * @return string|null
     */
    public function getAirline()
    {
        return $this->Airline;
    }
    /**
     * Set Airline value
     * @param string $airline
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment
     */
    public function setAirline($airline = null)
    {
        // validation for constraint: string
        if (!is_null($airline) && !is_string($airline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airline)), __LINE__);
        }
        $this->Airline = $airline;
        return $this;
    }
    /**
     * Get AllotmentMatchCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAllotmentMatchCode()
    {
        return isset($this->AllotmentMatchCode) ? $this->AllotmentMatchCode : null;
    }
    /**
     * Set AllotmentMatchCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $allotmentMatchCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment
     */
    public function setAllotmentMatchCode($allotmentMatchCode = null)
    {
        // validation for constraint: string
        if (!is_null($allotmentMatchCode) && !is_string($allotmentMatchCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($allotmentMatchCode)), __LINE__);
        }
        if (is_null($allotmentMatchCode) || (is_array($allotmentMatchCode) && empty($allotmentMatchCode))) {
            unset($this->AllotmentMatchCode);
        } else {
            $this->AllotmentMatchCode = $allotmentMatchCode;
        }
        return $this;
    }
    /**
     * Get AllotmentType value
     * @return string|null
     */
    public function getAllotmentType()
    {
        return $this->AllotmentType;
    }
    /**
     * Set AllotmentType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $allotmentType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment
     */
    public function setAllotmentType($allotmentType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentTypeEnum::valueIsValid($allotmentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $allotmentType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentTypeEnum::getValidValues())), __LINE__);
        }
        $this->AllotmentType = $allotmentType;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment
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
     * Get ArrivalDate value
     * @return string|null
     */
    public function getArrivalDate()
    {
        return $this->ArrivalDate;
    }
    /**
     * Set ArrivalDate value
     * @param string $arrivalDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment
     */
    public function setArrivalDate($arrivalDate = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalDate) && !is_string($arrivalDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalDate)), __LINE__);
        }
        $this->ArrivalDate = $arrivalDate;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment
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
     * @return string|null
     */
    public function getCabinClass()
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cabinClass
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment
     */
    public function setCabinClass($cabinClass = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid($cabinClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cabinClass, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues())), __LINE__);
        }
        $this->CabinClass = $cabinClass;
        return $this;
    }
    /**
     * Get CodeShareCarrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCodeShareCarrier()
    {
        return isset($this->CodeShareCarrier) ? $this->CodeShareCarrier : null;
    }
    /**
     * Set CodeShareCarrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $codeShareCarrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment
     */
    public function setCodeShareCarrier($codeShareCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($codeShareCarrier) && !is_string($codeShareCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeShareCarrier)), __LINE__);
        }
        if (is_null($codeShareCarrier) || (is_array($codeShareCarrier) && empty($codeShareCarrier))) {
            unset($this->CodeShareCarrier);
        } else {
            $this->CodeShareCarrier = $codeShareCarrier;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment
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
     * Get PubFarebasis value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestFarebase|null
     */
    public function getPubFarebasis()
    {
        return isset($this->PubFarebasis) ? $this->PubFarebasis : null;
    }
    /**
     * Set PubFarebasis value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestFarebase $pubFarebasis
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment
     */
    public function setPubFarebasis(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestFarebase $pubFarebasis = null)
    {
        if (is_null($pubFarebasis) || (is_array($pubFarebasis) && empty($pubFarebasis))) {
            unset($this->PubFarebasis);
        } else {
            $this->PubFarebasis = $pubFarebasis;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment
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
