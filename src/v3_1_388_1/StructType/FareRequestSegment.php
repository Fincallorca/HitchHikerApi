<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRequestSegment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareRequestSegment
 * @subpackage Structs
 */
class FareRequestSegment extends AbstractStructBase
{
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
     * The Departure
     * Meta informations extracted from the WSDL
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
     * Constructor method for FareRequestSegment
     * @uses FareRequestSegment::setArrival()
     * @uses FareRequestSegment::setArrivalDate()
     * @uses FareRequestSegment::setArrivalTime()
     * @uses FareRequestSegment::setDeparture()
     * @uses FareRequestSegment::setDepartureDate()
     * @uses FareRequestSegment::setDepartureTime()
     * @param string $arrival
     * @param string $arrivalDate
     * @param string $arrivalTime
     * @param string $departure
     * @param string $departureDate
     * @param string $departureTime
     */
    public function __construct($arrival = null, $arrivalDate = null, $arrivalTime = null, $departure = null, $departureDate = null, $departureTime = null)
    {
        $this
            ->setArrival($arrival)
            ->setArrivalDate($arrivalDate)
            ->setArrivalTime($arrivalTime)
            ->setDeparture($departure)
            ->setDepartureDate($departureDate)
            ->setDepartureTime($departureTime);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment
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
