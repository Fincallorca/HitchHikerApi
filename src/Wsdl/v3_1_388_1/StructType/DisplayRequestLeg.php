<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayRequestLeg StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayRequestLeg
 * @subpackage Structs
 */
class DisplayRequestLeg extends AbstractStructBase
{
    /**
     * The ArrivalSearchRadius
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ArrivalSearchRadius;
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
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestConnection
     */
    public $Connections;
    /**
     * The DepartureDate
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
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestStay
     */
    public $Stay;
    /**
     * Constructor method for DisplayRequestLeg
     * @uses DisplayRequestLeg::setArrivalSearchRadius()
     * @uses DisplayRequestLeg::setArrivals()
     * @uses DisplayRequestLeg::setClass()
     * @uses DisplayRequestLeg::setConnections()
     * @uses DisplayRequestLeg::setDepartureDate()
     * @uses DisplayRequestLeg::setDepartureSearchRadius()
     * @uses DisplayRequestLeg::setDepartures()
     * @uses DisplayRequestLeg::setStay()
     * @param int $arrivalSearchRadius
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $arrivals
     * @param string $class
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestConnection $connections
     * @param string $departureDate
     * @param int $departureSearchRadius
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $departures
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestStay $stay
     */
    public function __construct($arrivalSearchRadius = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $arrivals = null, $class = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestConnection $connections = null, $departureDate = null, $departureSearchRadius = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $departures = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestStay $stay = null)
    {
        $this
            ->setArrivalSearchRadius($arrivalSearchRadius)
            ->setArrivals($arrivals)
            ->setClass($class)
            ->setConnections($connections)
            ->setDepartureDate($departureDate)
            ->setDepartureSearchRadius($departureSearchRadius)
            ->setDepartures($departures)
            ->setStay($stay);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestConnection|null
     */
    public function getConnections()
    {
        return isset($this->Connections) ? $this->Connections : null;
    }
    /**
     * Set Connections value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestConnection $connections
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg
     */
    public function setConnections(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestConnection $connections = null)
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
     * @return string|null
     */
    public function getDepartureDate()
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param string $departureDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestStay|null
     */
    public function getStay()
    {
        return isset($this->Stay) ? $this->Stay : null;
    }
    /**
     * Set Stay value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestStay $stay
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg
     */
    public function setStay(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestStay $stay = null)
    {
        if (is_null($stay) || (is_array($stay) && empty($stay))) {
            unset($this->Stay);
        } else {
            $this->Stay = $stay;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg
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
