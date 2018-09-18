<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetailsResponseLeg StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DetailsResponseLeg
 * @subpackage Structs
 */
class DetailsResponseLeg extends AbstractStructBase
{
    /**
     * The ETicketting
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ETicketting;
    /**
     * The FlightTime
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
    public $FlightTime;
    /**
     * The GroundTime
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
    public $GroundTime;
    /**
     * The LegtravelTime
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
    public $LegtravelTime;
    /**
     * The Miles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Miles;
    /**
     * The NumberOfStopsInLeg
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfStopsInLeg;
    /**
     * The Segments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseSegment
     */
    public $Segments;
    /**
     * Constructor method for DetailsResponseLeg
     * @uses DetailsResponseLeg::setETicketting()
     * @uses DetailsResponseLeg::setFlightTime()
     * @uses DetailsResponseLeg::setGroundTime()
     * @uses DetailsResponseLeg::setLegtravelTime()
     * @uses DetailsResponseLeg::setMiles()
     * @uses DetailsResponseLeg::setNumberOfStopsInLeg()
     * @uses DetailsResponseLeg::setSegments()
     * @param bool $eTicketting
     * @param string $flightTime
     * @param string $groundTime
     * @param string $legtravelTime
     * @param int $miles
     * @param int $numberOfStopsInLeg
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseSegment $segments
     */
    public function __construct($eTicketting = null, $flightTime = null, $groundTime = null, $legtravelTime = null, $miles = null, $numberOfStopsInLeg = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseSegment $segments = null)
    {
        $this
            ->setETicketting($eTicketting)
            ->setFlightTime($flightTime)
            ->setGroundTime($groundTime)
            ->setLegtravelTime($legtravelTime)
            ->setMiles($miles)
            ->setNumberOfStopsInLeg($numberOfStopsInLeg)
            ->setSegments($segments);
    }
    /**
     * Get ETicketting value
     * @return bool|null
     */
    public function getETicketting()
    {
        return $this->ETicketting;
    }
    /**
     * Set ETicketting value
     * @param bool $eTicketting
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg
     */
    public function setETicketting($eTicketting = null)
    {
        // validation for constraint: boolean
        if (!is_null($eTicketting) && !is_bool($eTicketting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eTicketting)), __LINE__);
        }
        $this->ETicketting = $eTicketting;
        return $this;
    }
    /**
     * Get FlightTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFlightTime()
    {
        return isset($this->FlightTime) ? $this->FlightTime : null;
    }
    /**
     * Set FlightTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $flightTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg
     */
    public function setFlightTime($flightTime = null)
    {
        // validation for constraint: maxInclusive
        if ($flightTime > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $flightTime), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($flightTime < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $flightTime), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($flightTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $flightTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($flightTime, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($flightTime) && !is_string($flightTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightTime)), __LINE__);
        }
        if (is_null($flightTime) || (is_array($flightTime) && empty($flightTime))) {
            unset($this->FlightTime);
        } else {
            $this->FlightTime = $flightTime;
        }
        return $this;
    }
    /**
     * Get GroundTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroundTime()
    {
        return isset($this->GroundTime) ? $this->GroundTime : null;
    }
    /**
     * Set GroundTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $groundTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg
     */
    public function setGroundTime($groundTime = null)
    {
        // validation for constraint: maxInclusive
        if ($groundTime > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $groundTime), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($groundTime < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $groundTime), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($groundTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $groundTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($groundTime, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($groundTime) && !is_string($groundTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groundTime)), __LINE__);
        }
        if (is_null($groundTime) || (is_array($groundTime) && empty($groundTime))) {
            unset($this->GroundTime);
        } else {
            $this->GroundTime = $groundTime;
        }
        return $this;
    }
    /**
     * Get LegtravelTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLegtravelTime()
    {
        return isset($this->LegtravelTime) ? $this->LegtravelTime : null;
    }
    /**
     * Set LegtravelTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $legtravelTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg
     */
    public function setLegtravelTime($legtravelTime = null)
    {
        // validation for constraint: maxInclusive
        if ($legtravelTime > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $legtravelTime), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($legtravelTime < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $legtravelTime), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($legtravelTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $legtravelTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($legtravelTime, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($legtravelTime) && !is_string($legtravelTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legtravelTime)), __LINE__);
        }
        if (is_null($legtravelTime) || (is_array($legtravelTime) && empty($legtravelTime))) {
            unset($this->LegtravelTime);
        } else {
            $this->LegtravelTime = $legtravelTime;
        }
        return $this;
    }
    /**
     * Get Miles value
     * @return int|null
     */
    public function getMiles()
    {
        return $this->Miles;
    }
    /**
     * Set Miles value
     * @param int $miles
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg
     */
    public function setMiles($miles = null)
    {
        // validation for constraint: int
        if (!is_null($miles) && !is_numeric($miles)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($miles)), __LINE__);
        }
        $this->Miles = $miles;
        return $this;
    }
    /**
     * Get NumberOfStopsInLeg value
     * @return int|null
     */
    public function getNumberOfStopsInLeg()
    {
        return $this->NumberOfStopsInLeg;
    }
    /**
     * Set NumberOfStopsInLeg value
     * @param int $numberOfStopsInLeg
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg
     */
    public function setNumberOfStopsInLeg($numberOfStopsInLeg = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfStopsInLeg) && !is_numeric($numberOfStopsInLeg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfStopsInLeg)), __LINE__);
        }
        $this->NumberOfStopsInLeg = $numberOfStopsInLeg;
        return $this;
    }
    /**
     * Get Segments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseSegment|null
     */
    public function getSegments()
    {
        return isset($this->Segments) ? $this->Segments : null;
    }
    /**
     * Set Segments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseSegment $segments
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg
     */
    public function setSegments(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseSegment $segments = null)
    {
        if (is_null($segments) || (is_array($segments) && empty($segments))) {
            unset($this->Segments);
        } else {
            $this->Segments = $segments;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg
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
