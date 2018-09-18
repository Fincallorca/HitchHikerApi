<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareSegmentData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareSegmentData
 * @subpackage Structs
 */
class FareSegmentData extends SegmentData
{
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
     * - nillable: true
     * @var string
     */
    public $CabinClass;
    /**
     * The CabinClassName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CabinClassName;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CarrierCode;
    /**
     * The CodeShare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CodeShare;
    /**
     * The EquipmentCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EquipmentCode;
    /**
     * The EquipmentName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EquipmentName;
    /**
     * The FareBase
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareBase;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FlightNumber;
    /**
     * The FreeSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $FreeSeats;
    /**
     * The MealCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MealCode;
    /**
     * The NumberOfStops
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfStops;
    /**
     * The SegmentMileage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SegmentMileage;
    /**
     * Constructor method for FareSegmentData
     * @uses FareSegmentData::setBookingClass()
     * @uses FareSegmentData::setCabinClass()
     * @uses FareSegmentData::setCabinClassName()
     * @uses FareSegmentData::setCarrierCode()
     * @uses FareSegmentData::setCodeShare()
     * @uses FareSegmentData::setEquipmentCode()
     * @uses FareSegmentData::setEquipmentName()
     * @uses FareSegmentData::setFareBase()
     * @uses FareSegmentData::setFlightNumber()
     * @uses FareSegmentData::setFreeSeats()
     * @uses FareSegmentData::setMealCode()
     * @uses FareSegmentData::setNumberOfStops()
     * @uses FareSegmentData::setSegmentMileage()
     * @param string $bookingClass
     * @param string $cabinClass
     * @param string $cabinClassName
     * @param string $carrierCode
     * @param string $codeShare
     * @param string $equipmentCode
     * @param string $equipmentName
     * @param string $fareBase
     * @param string $flightNumber
     * @param int $freeSeats
     * @param string $mealCode
     * @param int $numberOfStops
     * @param int $segmentMileage
     */
    public function __construct($bookingClass = null, $cabinClass = null, $cabinClassName = null, $carrierCode = null, $codeShare = null, $equipmentCode = null, $equipmentName = null, $fareBase = null, $flightNumber = null, $freeSeats = null, $mealCode = null, $numberOfStops = null, $segmentMileage = null)
    {
        $this
            ->setBookingClass($bookingClass)
            ->setCabinClass($cabinClass)
            ->setCabinClassName($cabinClassName)
            ->setCarrierCode($carrierCode)
            ->setCodeShare($codeShare)
            ->setEquipmentCode($equipmentCode)
            ->setEquipmentName($equipmentName)
            ->setFareBase($fareBase)
            ->setFlightNumber($flightNumber)
            ->setFreeSeats($freeSeats)
            ->setMealCode($mealCode)
            ->setNumberOfStops($numberOfStops)
            ->setSegmentMileage($segmentMileage);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCabinClass()
    {
        return isset($this->CabinClass) ? $this->CabinClass : null;
    }
    /**
     * Set CabinClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cabinClass
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData
     */
    public function setCabinClass($cabinClass = null)
    {
        // validation for constraint: string
        if (!is_null($cabinClass) && !is_string($cabinClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cabinClass)), __LINE__);
        }
        if (is_null($cabinClass) || (is_array($cabinClass) && empty($cabinClass))) {
            unset($this->CabinClass);
        } else {
            $this->CabinClass = $cabinClass;
        }
        return $this;
    }
    /**
     * Get CabinClassName value
     * @return string|null
     */
    public function getCabinClassName()
    {
        return $this->CabinClassName;
    }
    /**
     * Set CabinClassName value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cabinClassName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData
     */
    public function setCabinClassName($cabinClassName = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid($cabinClassName)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cabinClassName, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues())), __LINE__);
        }
        $this->CabinClassName = $cabinClassName;
        return $this;
    }
    /**
     * Get CarrierCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCarrierCode()
    {
        return isset($this->CarrierCode) ? $this->CarrierCode : null;
    }
    /**
     * Set CarrierCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $carrierCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierCode)), __LINE__);
        }
        if (is_null($carrierCode) || (is_array($carrierCode) && empty($carrierCode))) {
            unset($this->CarrierCode);
        } else {
            $this->CarrierCode = $carrierCode;
        }
        return $this;
    }
    /**
     * Get CodeShare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCodeShare()
    {
        return isset($this->CodeShare) ? $this->CodeShare : null;
    }
    /**
     * Set CodeShare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $codeShare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData
     */
    public function setCodeShare($codeShare = null)
    {
        // validation for constraint: string
        if (!is_null($codeShare) && !is_string($codeShare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeShare)), __LINE__);
        }
        if (is_null($codeShare) || (is_array($codeShare) && empty($codeShare))) {
            unset($this->CodeShare);
        } else {
            $this->CodeShare = $codeShare;
        }
        return $this;
    }
    /**
     * Get EquipmentCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEquipmentCode()
    {
        return isset($this->EquipmentCode) ? $this->EquipmentCode : null;
    }
    /**
     * Set EquipmentCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $equipmentCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData
     */
    public function setEquipmentCode($equipmentCode = null)
    {
        // validation for constraint: string
        if (!is_null($equipmentCode) && !is_string($equipmentCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($equipmentCode)), __LINE__);
        }
        if (is_null($equipmentCode) || (is_array($equipmentCode) && empty($equipmentCode))) {
            unset($this->EquipmentCode);
        } else {
            $this->EquipmentCode = $equipmentCode;
        }
        return $this;
    }
    /**
     * Get EquipmentName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEquipmentName()
    {
        return isset($this->EquipmentName) ? $this->EquipmentName : null;
    }
    /**
     * Set EquipmentName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $equipmentName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData
     */
    public function setEquipmentName($equipmentName = null)
    {
        // validation for constraint: string
        if (!is_null($equipmentName) && !is_string($equipmentName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($equipmentName)), __LINE__);
        }
        if (is_null($equipmentName) || (is_array($equipmentName) && empty($equipmentName))) {
            unset($this->EquipmentName);
        } else {
            $this->EquipmentName = $equipmentName;
        }
        return $this;
    }
    /**
     * Get FareBase value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareBase()
    {
        return isset($this->FareBase) ? $this->FareBase : null;
    }
    /**
     * Set FareBase value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareBase
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData
     */
    public function setFareBase($fareBase = null)
    {
        // validation for constraint: string
        if (!is_null($fareBase) && !is_string($fareBase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareBase)), __LINE__);
        }
        if (is_null($fareBase) || (is_array($fareBase) && empty($fareBase))) {
            unset($this->FareBase);
        } else {
            $this->FareBase = $fareBase;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData
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
     * Get FreeSeats value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getFreeSeats()
    {
        return isset($this->FreeSeats) ? $this->FreeSeats : null;
    }
    /**
     * Set FreeSeats value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $freeSeats
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData
     */
    public function setFreeSeats($freeSeats = null)
    {
        // validation for constraint: int
        if (!is_null($freeSeats) && !is_numeric($freeSeats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($freeSeats)), __LINE__);
        }
        if (is_null($freeSeats) || (is_array($freeSeats) && empty($freeSeats))) {
            unset($this->FreeSeats);
        } else {
            $this->FreeSeats = $freeSeats;
        }
        return $this;
    }
    /**
     * Get MealCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMealCode()
    {
        return isset($this->MealCode) ? $this->MealCode : null;
    }
    /**
     * Set MealCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mealCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData
     */
    public function setMealCode($mealCode = null)
    {
        // validation for constraint: string
        if (!is_null($mealCode) && !is_string($mealCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mealCode)), __LINE__);
        }
        if (is_null($mealCode) || (is_array($mealCode) && empty($mealCode))) {
            unset($this->MealCode);
        } else {
            $this->MealCode = $mealCode;
        }
        return $this;
    }
    /**
     * Get NumberOfStops value
     * @return int|null
     */
    public function getNumberOfStops()
    {
        return $this->NumberOfStops;
    }
    /**
     * Set NumberOfStops value
     * @param int $numberOfStops
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData
     */
    public function setNumberOfStops($numberOfStops = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfStops) && !is_numeric($numberOfStops)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfStops)), __LINE__);
        }
        $this->NumberOfStops = $numberOfStops;
        return $this;
    }
    /**
     * Get SegmentMileage value
     * @return int|null
     */
    public function getSegmentMileage()
    {
        return $this->SegmentMileage;
    }
    /**
     * Set SegmentMileage value
     * @param int $segmentMileage
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData
     */
    public function setSegmentMileage($segmentMileage = null)
    {
        // validation for constraint: int
        if (!is_null($segmentMileage) && !is_numeric($segmentMileage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($segmentMileage)), __LINE__);
        }
        $this->SegmentMileage = $segmentMileage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData
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
