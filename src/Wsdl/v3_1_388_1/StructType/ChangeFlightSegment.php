<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeFlightSegment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ChangeFlightSegment
 * @subpackage Structs
 */
class ChangeFlightSegment extends AbstractStructBase
{
    /**
     * The Availstring
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Availstring;
    /**
     * The BookingClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BookingClass;
    /**
     * The DepartureDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
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
     * The OriginalSegmentNumber
     * @var int
     */
    public $OriginalSegmentNumber;
    /**
     * Constructor method for ChangeFlightSegment
     * @uses ChangeFlightSegment::setAvailstring()
     * @uses ChangeFlightSegment::setBookingClass()
     * @uses ChangeFlightSegment::setDepartureDate()
     * @uses ChangeFlightSegment::setDepartureTime()
     * @uses ChangeFlightSegment::setFlightNumber()
     * @uses ChangeFlightSegment::setOriginalSegmentNumber()
     * @param string $availstring
     * @param string $bookingClass
     * @param string $departureDate
     * @param string $departureTime
     * @param string $flightNumber
     * @param int $originalSegmentNumber
     */
    public function __construct($availstring = null, $bookingClass = null, $departureDate = null, $departureTime = null, $flightNumber = null, $originalSegmentNumber = null)
    {
        $this
            ->setAvailstring($availstring)
            ->setBookingClass($bookingClass)
            ->setDepartureDate($departureDate)
            ->setDepartureTime($departureTime)
            ->setFlightNumber($flightNumber)
            ->setOriginalSegmentNumber($originalSegmentNumber);
    }
    /**
     * Get Availstring value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAvailstring()
    {
        return isset($this->Availstring) ? $this->Availstring : null;
    }
    /**
     * Set Availstring value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $availstring
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment
     */
    public function setAvailstring($availstring = null)
    {
        // validation for constraint: string
        if (!is_null($availstring) && !is_string($availstring)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($availstring)), __LINE__);
        }
        if (is_null($availstring) || (is_array($availstring) && empty($availstring))) {
            unset($this->Availstring);
        } else {
            $this->Availstring = $availstring;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment
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
