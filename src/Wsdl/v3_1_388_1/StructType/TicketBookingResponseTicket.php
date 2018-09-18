<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketBookingResponseTicket StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketBookingResponseTicket
 * @subpackage Structs
 */
class TicketBookingResponseTicket extends AbstractStructBase
{
    /**
     * The FareDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseFare
     */
    public $FareDetails;
    /**
     * The FormOfPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FormOfPayment;
    /**
     * The SegmentDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingResponseSegment
     */
    public $SegmentDetails;
    /**
     * The TicketNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $TicketNumbers;
    /**
     * Constructor method for TicketBookingResponseTicket
     * @uses TicketBookingResponseTicket::setFareDetails()
     * @uses TicketBookingResponseTicket::setFormOfPayment()
     * @uses TicketBookingResponseTicket::setSegmentDetails()
     * @uses TicketBookingResponseTicket::setTicketNumbers()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseFare $fareDetails
     * @param string $formOfPayment
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingResponseSegment $segmentDetails
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ticketNumbers
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseFare $fareDetails = null, $formOfPayment = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingResponseSegment $segmentDetails = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ticketNumbers = null)
    {
        $this
            ->setFareDetails($fareDetails)
            ->setFormOfPayment($formOfPayment)
            ->setSegmentDetails($segmentDetails)
            ->setTicketNumbers($ticketNumbers);
    }
    /**
     * Get FareDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseFare|null
     */
    public function getFareDetails()
    {
        return isset($this->FareDetails) ? $this->FareDetails : null;
    }
    /**
     * Set FareDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseFare $fareDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseTicket
     */
    public function setFareDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseFare $fareDetails = null)
    {
        if (is_null($fareDetails) || (is_array($fareDetails) && empty($fareDetails))) {
            unset($this->FareDetails);
        } else {
            $this->FareDetails = $fareDetails;
        }
        return $this;
    }
    /**
     * Get FormOfPayment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFormOfPayment()
    {
        return isset($this->FormOfPayment) ? $this->FormOfPayment : null;
    }
    /**
     * Set FormOfPayment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $formOfPayment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseTicket
     */
    public function setFormOfPayment($formOfPayment = null)
    {
        // validation for constraint: string
        if (!is_null($formOfPayment) && !is_string($formOfPayment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formOfPayment)), __LINE__);
        }
        if (is_null($formOfPayment) || (is_array($formOfPayment) && empty($formOfPayment))) {
            unset($this->FormOfPayment);
        } else {
            $this->FormOfPayment = $formOfPayment;
        }
        return $this;
    }
    /**
     * Get SegmentDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingResponseSegment|null
     */
    public function getSegmentDetails()
    {
        return isset($this->SegmentDetails) ? $this->SegmentDetails : null;
    }
    /**
     * Set SegmentDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingResponseSegment $segmentDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseTicket
     */
    public function setSegmentDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingResponseSegment $segmentDetails = null)
    {
        if (is_null($segmentDetails) || (is_array($segmentDetails) && empty($segmentDetails))) {
            unset($this->SegmentDetails);
        } else {
            $this->SegmentDetails = $segmentDetails;
        }
        return $this;
    }
    /**
     * Get TicketNumbers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getTicketNumbers()
    {
        return isset($this->TicketNumbers) ? $this->TicketNumbers : null;
    }
    /**
     * Set TicketNumbers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ticketNumbers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseTicket
     */
    public function setTicketNumbers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ticketNumbers = null)
    {
        if (is_null($ticketNumbers) || (is_array($ticketNumbers) && empty($ticketNumbers))) {
            unset($this->TicketNumbers);
        } else {
            $this->TicketNumbers = $ticketNumbers;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseTicket
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
