<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuoteResponseSegment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QuoteResponseSegment
 * @subpackage Structs
 */
class QuoteResponseSegment extends AbstractStructBase
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
     * The FareBase
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareBase;
    /**
     * The FreeBaggageAllowance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FreeBaggageAllowance;
    /**
     * The Mileage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Mileage;
    /**
     * The TicketDesignator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TicketDesignator;
    /**
     * Constructor method for QuoteResponseSegment
     * @uses QuoteResponseSegment::setBookingClass()
     * @uses QuoteResponseSegment::setCabinClass()
     * @uses QuoteResponseSegment::setCabinClassName()
     * @uses QuoteResponseSegment::setFareBase()
     * @uses QuoteResponseSegment::setFreeBaggageAllowance()
     * @uses QuoteResponseSegment::setMileage()
     * @uses QuoteResponseSegment::setTicketDesignator()
     * @param string $bookingClass
     * @param string $cabinClass
     * @param string $cabinClassName
     * @param string $fareBase
     * @param string $freeBaggageAllowance
     * @param string $mileage
     * @param string $ticketDesignator
     */
    public function __construct($bookingClass = null, $cabinClass = null, $cabinClassName = null, $fareBase = null, $freeBaggageAllowance = null, $mileage = null, $ticketDesignator = null)
    {
        $this
            ->setBookingClass($bookingClass)
            ->setCabinClass($cabinClass)
            ->setCabinClassName($cabinClassName)
            ->setFareBase($fareBase)
            ->setFreeBaggageAllowance($freeBaggageAllowance)
            ->setMileage($mileage)
            ->setTicketDesignator($ticketDesignator);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment
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
     * Get FreeBaggageAllowance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFreeBaggageAllowance()
    {
        return isset($this->FreeBaggageAllowance) ? $this->FreeBaggageAllowance : null;
    }
    /**
     * Set FreeBaggageAllowance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $freeBaggageAllowance
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment
     */
    public function setFreeBaggageAllowance($freeBaggageAllowance = null)
    {
        // validation for constraint: string
        if (!is_null($freeBaggageAllowance) && !is_string($freeBaggageAllowance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeBaggageAllowance)), __LINE__);
        }
        if (is_null($freeBaggageAllowance) || (is_array($freeBaggageAllowance) && empty($freeBaggageAllowance))) {
            unset($this->FreeBaggageAllowance);
        } else {
            $this->FreeBaggageAllowance = $freeBaggageAllowance;
        }
        return $this;
    }
    /**
     * Get Mileage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMileage()
    {
        return isset($this->Mileage) ? $this->Mileage : null;
    }
    /**
     * Set Mileage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mileage
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment
     */
    public function setMileage($mileage = null)
    {
        // validation for constraint: string
        if (!is_null($mileage) && !is_string($mileage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mileage)), __LINE__);
        }
        if (is_null($mileage) || (is_array($mileage) && empty($mileage))) {
            unset($this->Mileage);
        } else {
            $this->Mileage = $mileage;
        }
        return $this;
    }
    /**
     * Get TicketDesignator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTicketDesignator()
    {
        return isset($this->TicketDesignator) ? $this->TicketDesignator : null;
    }
    /**
     * Set TicketDesignator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ticketDesignator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment
     */
    public function setTicketDesignator($ticketDesignator = null)
    {
        // validation for constraint: string
        if (!is_null($ticketDesignator) && !is_string($ticketDesignator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketDesignator)), __LINE__);
        }
        if (is_null($ticketDesignator) || (is_array($ticketDesignator) && empty($ticketDesignator))) {
            unset($this->TicketDesignator);
        } else {
            $this->TicketDesignator = $ticketDesignator;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment
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
