<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRequestLeg StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareRequestLeg
 * @subpackage Structs
 */
class FareRequestLeg extends AbstractStructBase
{
    /**
     * The ArrivalDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ArrivalDate;
    /**
     * The ArrivalSearchRadius
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ArrivalSearchRadius;
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
     * The Arrivals
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Arrivals;
    /**
     * The Class
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Class;
    /**
     * The Connections
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestConnection
     */
    public $Connections;
    /**
     * The DepartureDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DepartureDate;
    /**
     * The DepartureSearchRadius
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DepartureSearchRadius;
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
     * The Departures
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Departures;
    /**
     * The Stay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestStay
     */
    public $Stay;
    /**
     * The TimeWindow
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TimeWindow;
    /**
     * Constructor method for FareRequestLeg
     * @uses FareRequestLeg::setArrivalDate()
     * @uses FareRequestLeg::setArrivalSearchRadius()
     * @uses FareRequestLeg::setArrivalTime()
     * @uses FareRequestLeg::setArrivals()
     * @uses FareRequestLeg::setClass()
     * @uses FareRequestLeg::setConnections()
     * @uses FareRequestLeg::setDepartureDate()
     * @uses FareRequestLeg::setDepartureSearchRadius()
     * @uses FareRequestLeg::setDepartureTime()
     * @uses FareRequestLeg::setDepartures()
     * @uses FareRequestLeg::setStay()
     * @uses FareRequestLeg::setTimeWindow()
     * @param string $arrivalDate
     * @param int $arrivalSearchRadius
     * @param string $arrivalTime
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $arrivals
     * @param string $class
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestConnection $connections
     * @param string $departureDate
     * @param int $departureSearchRadius
     * @param string $departureTime
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $departures
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestStay $stay
     * @param int $timeWindow
     */
    public function __construct($arrivalDate = null, $arrivalSearchRadius = null, $arrivalTime = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $arrivals = null, $class = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestConnection $connections = null, $departureDate = null, $departureSearchRadius = null, $departureTime = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $departures = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestStay $stay = null, $timeWindow = null)
    {
        $this
            ->setArrivalDate($arrivalDate)
            ->setArrivalSearchRadius($arrivalSearchRadius)
            ->setArrivalTime($arrivalTime)
            ->setArrivals($arrivals)
            ->setClass($class)
            ->setConnections($connections)
            ->setDepartureDate($departureDate)
            ->setDepartureSearchRadius($departureSearchRadius)
            ->setDepartureTime($departureTime)
            ->setDepartures($departures)
            ->setStay($stay)
            ->setTimeWindow($timeWindow);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestLeg
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
     * Get ArrivalSearchRadius value
     * @return int|null
     */
    public function getArrivalSearchRadius()
    {
        return $this->ArrivalSearchRadius;
    }
    /**
     * Set ArrivalSearchRadius value
     * @param int $arrivalSearchRadius
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestLeg
     */
    public function setArrivalSearchRadius($arrivalSearchRadius = null)
    {
        // validation for constraint: int
        if (!is_null($arrivalSearchRadius) && !is_numeric($arrivalSearchRadius)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($arrivalSearchRadius)), __LINE__);
        }
        $this->ArrivalSearchRadius = $arrivalSearchRadius;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestLeg
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
     * Get Arrivals value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getArrivals()
    {
        return $this->Arrivals;
    }
    /**
     * Set Arrivals value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $arrivals
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestLeg
     */
    public function setArrivals(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $arrivals = null)
    {
        $this->Arrivals = $arrivals;
        return $this;
    }
    /**
     * Get Class value
     * @return string|null
     */
    public function getClass()
    {
        return $this->Class;
    }
    /**
     * Set Class value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $class
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestLeg
     */
    public function setClass($class = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid($class)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $class, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues())), __LINE__);
        }
        $this->Class = $class;
        return $this;
    }
    /**
     * Get Connections value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestConnection|null
     */
    public function getConnections()
    {
        return isset($this->Connections) ? $this->Connections : null;
    }
    /**
     * Set Connections value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestConnection $connections
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestLeg
     */
    public function setConnections(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestConnection $connections = null)
    {
        if (is_null($connections) || (is_array($connections) && empty($connections))) {
            unset($this->Connections);
        } else {
            $this->Connections = $connections;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestLeg
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
     * Get DepartureSearchRadius value
     * @return int|null
     */
    public function getDepartureSearchRadius()
    {
        return $this->DepartureSearchRadius;
    }
    /**
     * Set DepartureSearchRadius value
     * @param int $departureSearchRadius
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestLeg
     */
    public function setDepartureSearchRadius($departureSearchRadius = null)
    {
        // validation for constraint: int
        if (!is_null($departureSearchRadius) && !is_numeric($departureSearchRadius)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($departureSearchRadius)), __LINE__);
        }
        $this->DepartureSearchRadius = $departureSearchRadius;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestLeg
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
     * Get Departures value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getDepartures()
    {
        return $this->Departures;
    }
    /**
     * Set Departures value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $departures
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestLeg
     */
    public function setDepartures(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $departures = null)
    {
        $this->Departures = $departures;
        return $this;
    }
    /**
     * Get Stay value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestStay|null
     */
    public function getStay()
    {
        return isset($this->Stay) ? $this->Stay : null;
    }
    /**
     * Set Stay value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestStay $stay
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestLeg
     */
    public function setStay(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestStay $stay = null)
    {
        if (is_null($stay) || (is_array($stay) && empty($stay))) {
            unset($this->Stay);
        } else {
            $this->Stay = $stay;
        }
        return $this;
    }
    /**
     * Get TimeWindow value
     * @return int|null
     */
    public function getTimeWindow()
    {
        return $this->TimeWindow;
    }
    /**
     * Set TimeWindow value
     * @param int $timeWindow
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestLeg
     */
    public function setTimeWindow($timeWindow = null)
    {
        // validation for constraint: int
        if (!is_null($timeWindow) && !is_numeric($timeWindow)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($timeWindow)), __LINE__);
        }
        $this->TimeWindow = $timeWindow;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestLeg
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
