<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRResponseStoredFare StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PNRResponseStoredFare
 * @subpackage Structs
 */
class PNRResponseStoredFare extends AbstractStructBase
{
    /**
     * The FareDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseFareDetails
     */
    public $FareDetails;
    /**
     * The LastTicketingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastTicketingDate;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Number;
    /**
     * The PassengerNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint
     */
    public $PassengerNumber;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Status;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTax
     */
    public $Taxes;
    /**
     * The TicketingDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketingDetails
     */
    public $TicketingDetails;
    /**
     * The TicketingSegments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseStoredFareTKTSement
     */
    public $TicketingSegments;
    /**
     * Constructor method for PNRResponseStoredFare
     * @uses PNRResponseStoredFare::setFareDetails()
     * @uses PNRResponseStoredFare::setLastTicketingDate()
     * @uses PNRResponseStoredFare::setNumber()
     * @uses PNRResponseStoredFare::setPassengerNumber()
     * @uses PNRResponseStoredFare::setStatus()
     * @uses PNRResponseStoredFare::setTaxes()
     * @uses PNRResponseStoredFare::setTicketingDetails()
     * @uses PNRResponseStoredFare::setTicketingSegments()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseFareDetails $fareDetails
     * @param string $lastTicketingDate
     * @param int $number
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $passengerNumber
     * @param string $status
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTax $taxes
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketingDetails $ticketingDetails
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseStoredFareTKTSement $ticketingSegments
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseFareDetails $fareDetails = null, $lastTicketingDate = null, $number = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $passengerNumber = null, $status = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTax $taxes = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketingDetails $ticketingDetails = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseStoredFareTKTSement $ticketingSegments = null)
    {
        $this
            ->setFareDetails($fareDetails)
            ->setLastTicketingDate($lastTicketingDate)
            ->setNumber($number)
            ->setPassengerNumber($passengerNumber)
            ->setStatus($status)
            ->setTaxes($taxes)
            ->setTicketingDetails($ticketingDetails)
            ->setTicketingSegments($ticketingSegments);
    }
    /**
     * Get FareDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseFareDetails|null
     */
    public function getFareDetails()
    {
        return isset($this->FareDetails) ? $this->FareDetails : null;
    }
    /**
     * Set FareDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseFareDetails $fareDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare
     */
    public function setFareDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseFareDetails $fareDetails = null)
    {
        if (is_null($fareDetails) || (is_array($fareDetails) && empty($fareDetails))) {
            unset($this->FareDetails);
        } else {
            $this->FareDetails = $fareDetails;
        }
        return $this;
    }
    /**
     * Get LastTicketingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastTicketingDate()
    {
        return isset($this->LastTicketingDate) ? $this->LastTicketingDate : null;
    }
    /**
     * Set LastTicketingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastTicketingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare
     */
    public function setLastTicketingDate($lastTicketingDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastTicketingDate) && !is_string($lastTicketingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastTicketingDate)), __LINE__);
        }
        if (is_null($lastTicketingDate) || (is_array($lastTicketingDate) && empty($lastTicketingDate))) {
            unset($this->LastTicketingDate);
        } else {
            $this->LastTicketingDate = $lastTicketingDate;
        }
        return $this;
    }
    /**
     * Get Number value
     * @return int|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param int $number
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare
     */
    public function setNumber($number = null)
    {
        // validation for constraint: int
        if (!is_null($number) && !is_numeric($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get PassengerNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint|null
     */
    public function getPassengerNumber()
    {
        return isset($this->PassengerNumber) ? $this->PassengerNumber : null;
    }
    /**
     * Set PassengerNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $passengerNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare
     */
    public function setPassengerNumber(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $passengerNumber = null)
    {
        if (is_null($passengerNumber) || (is_array($passengerNumber) && empty($passengerNumber))) {
            unset($this->PassengerNumber);
        } else {
            $this->PassengerNumber = $passengerNumber;
        }
        return $this;
    }
    /**
     * Get Status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatus()
    {
        return isset($this->Status) ? $this->Status : null;
    }
    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $status
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
        }
        return $this;
    }
    /**
     * Get Taxes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTax|null
     */
    public function getTaxes()
    {
        return isset($this->Taxes) ? $this->Taxes : null;
    }
    /**
     * Set Taxes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTax $taxes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare
     */
    public function setTaxes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTax $taxes = null)
    {
        if (is_null($taxes) || (is_array($taxes) && empty($taxes))) {
            unset($this->Taxes);
        } else {
            $this->Taxes = $taxes;
        }
        return $this;
    }
    /**
     * Get TicketingDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketingDetails|null
     */
    public function getTicketingDetails()
    {
        return isset($this->TicketingDetails) ? $this->TicketingDetails : null;
    }
    /**
     * Set TicketingDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketingDetails $ticketingDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare
     */
    public function setTicketingDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketingDetails $ticketingDetails = null)
    {
        if (is_null($ticketingDetails) || (is_array($ticketingDetails) && empty($ticketingDetails))) {
            unset($this->TicketingDetails);
        } else {
            $this->TicketingDetails = $ticketingDetails;
        }
        return $this;
    }
    /**
     * Get TicketingSegments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseStoredFareTKTSement|null
     */
    public function getTicketingSegments()
    {
        return isset($this->TicketingSegments) ? $this->TicketingSegments : null;
    }
    /**
     * Set TicketingSegments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseStoredFareTKTSement $ticketingSegments
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare
     */
    public function setTicketingSegments(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseStoredFareTKTSement $ticketingSegments = null)
    {
        if (is_null($ticketingSegments) || (is_array($ticketingSegments) && empty($ticketingSegments))) {
            unset($this->TicketingSegments);
        } else {
            $this->TicketingSegments = $ticketingSegments;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare
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
