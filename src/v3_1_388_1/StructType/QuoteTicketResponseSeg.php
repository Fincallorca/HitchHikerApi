<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuoteTicketResponseSeg StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QuoteTicketResponseSeg
 * @subpackage Structs
 */
class QuoteTicketResponseSeg extends AbstractStructBase
{
    /**
     * The Baggage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Baggage;
    /**
     * The BaggageDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BaggageDescription;
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
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Carrier;
    /**
     * The DepartureDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureDateTime;
    /**
     * The Designator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Designator;
    /**
     * The Farebasis
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Farebasis;
    /**
     * The FlightNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FlightNo;
    /**
     * The NVA
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NVA;
    /**
     * The NVB
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NVB;
    /**
     * The SegmentID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SegmentID;
    /**
     * The StopIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StopIndicator;
    /**
     * Constructor method for QuoteTicketResponseSeg
     * @uses QuoteTicketResponseSeg::setBaggage()
     * @uses QuoteTicketResponseSeg::setBaggageDescription()
     * @uses QuoteTicketResponseSeg::setBookingClass()
     * @uses QuoteTicketResponseSeg::setCarrier()
     * @uses QuoteTicketResponseSeg::setDepartureDateTime()
     * @uses QuoteTicketResponseSeg::setDesignator()
     * @uses QuoteTicketResponseSeg::setFarebasis()
     * @uses QuoteTicketResponseSeg::setFlightNo()
     * @uses QuoteTicketResponseSeg::setNVA()
     * @uses QuoteTicketResponseSeg::setNVB()
     * @uses QuoteTicketResponseSeg::setSegmentID()
     * @uses QuoteTicketResponseSeg::setStopIndicator()
     * @param string $baggage
     * @param string $baggageDescription
     * @param string $bookingClass
     * @param string $carrier
     * @param string $departureDateTime
     * @param string $designator
     * @param string $farebasis
     * @param string $flightNo
     * @param string $nVA
     * @param string $nVB
     * @param int $segmentID
     * @param string $stopIndicator
     */
    public function __construct($baggage = null, $baggageDescription = null, $bookingClass = null, $carrier = null, $departureDateTime = null, $designator = null, $farebasis = null, $flightNo = null, $nVA = null, $nVB = null, $segmentID = null, $stopIndicator = null)
    {
        $this
            ->setBaggage($baggage)
            ->setBaggageDescription($baggageDescription)
            ->setBookingClass($bookingClass)
            ->setCarrier($carrier)
            ->setDepartureDateTime($departureDateTime)
            ->setDesignator($designator)
            ->setFarebasis($farebasis)
            ->setFlightNo($flightNo)
            ->setNVA($nVA)
            ->setNVB($nVB)
            ->setSegmentID($segmentID)
            ->setStopIndicator($stopIndicator);
    }
    /**
     * Get Baggage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBaggage()
    {
        return isset($this->Baggage) ? $this->Baggage : null;
    }
    /**
     * Set Baggage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $baggage
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseSeg
     */
    public function setBaggage($baggage = null)
    {
        // validation for constraint: string
        if (!is_null($baggage) && !is_string($baggage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($baggage)), __LINE__);
        }
        if (is_null($baggage) || (is_array($baggage) && empty($baggage))) {
            unset($this->Baggage);
        } else {
            $this->Baggage = $baggage;
        }
        return $this;
    }
    /**
     * Get BaggageDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBaggageDescription()
    {
        return isset($this->BaggageDescription) ? $this->BaggageDescription : null;
    }
    /**
     * Set BaggageDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $baggageDescription
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseSeg
     */
    public function setBaggageDescription($baggageDescription = null)
    {
        // validation for constraint: string
        if (!is_null($baggageDescription) && !is_string($baggageDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($baggageDescription)), __LINE__);
        }
        if (is_null($baggageDescription) || (is_array($baggageDescription) && empty($baggageDescription))) {
            unset($this->BaggageDescription);
        } else {
            $this->BaggageDescription = $baggageDescription;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseSeg
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCarrier()
    {
        return isset($this->Carrier) ? $this->Carrier : null;
    }
    /**
     * Set Carrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $carrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseSeg
     */
    public function setCarrier($carrier = null)
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrier)), __LINE__);
        }
        if (is_null($carrier) || (is_array($carrier) && empty($carrier))) {
            unset($this->Carrier);
        } else {
            $this->Carrier = $carrier;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseSeg
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
     * Get Designator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDesignator()
    {
        return isset($this->Designator) ? $this->Designator : null;
    }
    /**
     * Set Designator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $designator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseSeg
     */
    public function setDesignator($designator = null)
    {
        // validation for constraint: string
        if (!is_null($designator) && !is_string($designator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($designator)), __LINE__);
        }
        if (is_null($designator) || (is_array($designator) && empty($designator))) {
            unset($this->Designator);
        } else {
            $this->Designator = $designator;
        }
        return $this;
    }
    /**
     * Get Farebasis value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFarebasis()
    {
        return isset($this->Farebasis) ? $this->Farebasis : null;
    }
    /**
     * Set Farebasis value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $farebasis
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseSeg
     */
    public function setFarebasis($farebasis = null)
    {
        // validation for constraint: string
        if (!is_null($farebasis) && !is_string($farebasis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($farebasis)), __LINE__);
        }
        if (is_null($farebasis) || (is_array($farebasis) && empty($farebasis))) {
            unset($this->Farebasis);
        } else {
            $this->Farebasis = $farebasis;
        }
        return $this;
    }
    /**
     * Get FlightNo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFlightNo()
    {
        return isset($this->FlightNo) ? $this->FlightNo : null;
    }
    /**
     * Set FlightNo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $flightNo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseSeg
     */
    public function setFlightNo($flightNo = null)
    {
        // validation for constraint: string
        if (!is_null($flightNo) && !is_string($flightNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightNo)), __LINE__);
        }
        if (is_null($flightNo) || (is_array($flightNo) && empty($flightNo))) {
            unset($this->FlightNo);
        } else {
            $this->FlightNo = $flightNo;
        }
        return $this;
    }
    /**
     * Get NVA value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNVA()
    {
        return isset($this->NVA) ? $this->NVA : null;
    }
    /**
     * Set NVA value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nVA
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseSeg
     */
    public function setNVA($nVA = null)
    {
        // validation for constraint: string
        if (!is_null($nVA) && !is_string($nVA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nVA)), __LINE__);
        }
        if (is_null($nVA) || (is_array($nVA) && empty($nVA))) {
            unset($this->NVA);
        } else {
            $this->NVA = $nVA;
        }
        return $this;
    }
    /**
     * Get NVB value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNVB()
    {
        return isset($this->NVB) ? $this->NVB : null;
    }
    /**
     * Set NVB value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nVB
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseSeg
     */
    public function setNVB($nVB = null)
    {
        // validation for constraint: string
        if (!is_null($nVB) && !is_string($nVB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nVB)), __LINE__);
        }
        if (is_null($nVB) || (is_array($nVB) && empty($nVB))) {
            unset($this->NVB);
        } else {
            $this->NVB = $nVB;
        }
        return $this;
    }
    /**
     * Get SegmentID value
     * @return int|null
     */
    public function getSegmentID()
    {
        return $this->SegmentID;
    }
    /**
     * Set SegmentID value
     * @param int $segmentID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseSeg
     */
    public function setSegmentID($segmentID = null)
    {
        // validation for constraint: int
        if (!is_null($segmentID) && !is_numeric($segmentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($segmentID)), __LINE__);
        }
        $this->SegmentID = $segmentID;
        return $this;
    }
    /**
     * Get StopIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStopIndicator()
    {
        return isset($this->StopIndicator) ? $this->StopIndicator : null;
    }
    /**
     * Set StopIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $stopIndicator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseSeg
     */
    public function setStopIndicator($stopIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($stopIndicator) && !is_string($stopIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stopIndicator)), __LINE__);
        }
        if (is_null($stopIndicator) || (is_array($stopIndicator) && empty($stopIndicator))) {
            unset($this->StopIndicator);
        } else {
            $this->StopIndicator = $stopIndicator;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseSeg
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
