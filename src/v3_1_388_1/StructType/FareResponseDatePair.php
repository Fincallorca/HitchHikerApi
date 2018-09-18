<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareResponseDatePair StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareResponseDatePair
 * @subpackage Structs
 */
class FareResponseDatePair extends AbstractStructBase
{
    /**
     * The AllotmentID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AllotmentID;
    /**
     * The ArrivalDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ArrivalDate;
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
     * - nillable: true
     * @var string
     */
    public $DepartureDate;
    /**
     * Constructor method for FareResponseDatePair
     * @uses FareResponseDatePair::setAllotmentID()
     * @uses FareResponseDatePair::setArrivalDate()
     * @uses FareResponseDatePair::setBookingClass()
     * @uses FareResponseDatePair::setDepartureDate()
     * @param string $allotmentID
     * @param string $arrivalDate
     * @param string $bookingClass
     * @param string $departureDate
     */
    public function __construct($allotmentID = null, $arrivalDate = null, $bookingClass = null, $departureDate = null)
    {
        $this
            ->setAllotmentID($allotmentID)
            ->setArrivalDate($arrivalDate)
            ->setBookingClass($bookingClass)
            ->setDepartureDate($departureDate);
    }
    /**
     * Get AllotmentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAllotmentID()
    {
        return isset($this->AllotmentID) ? $this->AllotmentID : null;
    }
    /**
     * Set AllotmentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $allotmentID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseDatePair
     */
    public function setAllotmentID($allotmentID = null)
    {
        // validation for constraint: string
        if (!is_null($allotmentID) && !is_string($allotmentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($allotmentID)), __LINE__);
        }
        if (is_null($allotmentID) || (is_array($allotmentID) && empty($allotmentID))) {
            unset($this->AllotmentID);
        } else {
            $this->AllotmentID = $allotmentID;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseDatePair
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseDatePair
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseDatePair
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseDatePair
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
