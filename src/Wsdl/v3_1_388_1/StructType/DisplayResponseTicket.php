<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayResponseTicket StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayResponseTicket
 * @subpackage Structs
 */
class DisplayResponseTicket extends AbstractStructBase
{
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Commission;
    /**
     * The Endorsement
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Endorsement;
    /**
     * The FormOfPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FormOfPayment;
    /**
     * The IssuedBy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IssuedBy;
    /**
     * The PassengerTicket
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassengerTicket
     */
    public $PassengerTicket;
    /**
     * The ReferenceCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ReferenceCode;
    /**
     * The TicketOnDeparture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TicketOnDeparture;
    /**
     * Constructor method for DisplayResponseTicket
     * @uses DisplayResponseTicket::setCommission()
     * @uses DisplayResponseTicket::setEndorsement()
     * @uses DisplayResponseTicket::setFormOfPayment()
     * @uses DisplayResponseTicket::setIssuedBy()
     * @uses DisplayResponseTicket::setPassengerTicket()
     * @uses DisplayResponseTicket::setReferenceCode()
     * @uses DisplayResponseTicket::setTicketOnDeparture()
     * @param string $commission
     * @param string $endorsement
     * @param string $formOfPayment
     * @param string $issuedBy
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassengerTicket $passengerTicket
     * @param string $referenceCode
     * @param string $ticketOnDeparture
     */
    public function __construct($commission = null, $endorsement = null, $formOfPayment = null, $issuedBy = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassengerTicket $passengerTicket = null, $referenceCode = null, $ticketOnDeparture = null)
    {
        $this
            ->setCommission($commission)
            ->setEndorsement($endorsement)
            ->setFormOfPayment($formOfPayment)
            ->setIssuedBy($issuedBy)
            ->setPassengerTicket($passengerTicket)
            ->setReferenceCode($referenceCode)
            ->setTicketOnDeparture($ticketOnDeparture);
    }
    /**
     * Get Commission value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCommission()
    {
        return isset($this->Commission) ? $this->Commission : null;
    }
    /**
     * Set Commission value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $commission
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseTicket
     */
    public function setCommission($commission = null)
    {
        // validation for constraint: string
        if (!is_null($commission) && !is_string($commission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commission)), __LINE__);
        }
        if (is_null($commission) || (is_array($commission) && empty($commission))) {
            unset($this->Commission);
        } else {
            $this->Commission = $commission;
        }
        return $this;
    }
    /**
     * Get Endorsement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndorsement()
    {
        return isset($this->Endorsement) ? $this->Endorsement : null;
    }
    /**
     * Set Endorsement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endorsement
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseTicket
     */
    public function setEndorsement($endorsement = null)
    {
        // validation for constraint: string
        if (!is_null($endorsement) && !is_string($endorsement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endorsement)), __LINE__);
        }
        if (is_null($endorsement) || (is_array($endorsement) && empty($endorsement))) {
            unset($this->Endorsement);
        } else {
            $this->Endorsement = $endorsement;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseTicket
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
     * Get IssuedBy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIssuedBy()
    {
        return isset($this->IssuedBy) ? $this->IssuedBy : null;
    }
    /**
     * Set IssuedBy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $issuedBy
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseTicket
     */
    public function setIssuedBy($issuedBy = null)
    {
        // validation for constraint: string
        if (!is_null($issuedBy) && !is_string($issuedBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issuedBy)), __LINE__);
        }
        if (is_null($issuedBy) || (is_array($issuedBy) && empty($issuedBy))) {
            unset($this->IssuedBy);
        } else {
            $this->IssuedBy = $issuedBy;
        }
        return $this;
    }
    /**
     * Get PassengerTicket value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassengerTicket|null
     */
    public function getPassengerTicket()
    {
        return isset($this->PassengerTicket) ? $this->PassengerTicket : null;
    }
    /**
     * Set PassengerTicket value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassengerTicket $passengerTicket
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseTicket
     */
    public function setPassengerTicket(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassengerTicket $passengerTicket = null)
    {
        if (is_null($passengerTicket) || (is_array($passengerTicket) && empty($passengerTicket))) {
            unset($this->PassengerTicket);
        } else {
            $this->PassengerTicket = $passengerTicket;
        }
        return $this;
    }
    /**
     * Get ReferenceCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReferenceCode()
    {
        return isset($this->ReferenceCode) ? $this->ReferenceCode : null;
    }
    /**
     * Set ReferenceCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $referenceCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseTicket
     */
    public function setReferenceCode($referenceCode = null)
    {
        // validation for constraint: string
        if (!is_null($referenceCode) && !is_string($referenceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceCode)), __LINE__);
        }
        if (is_null($referenceCode) || (is_array($referenceCode) && empty($referenceCode))) {
            unset($this->ReferenceCode);
        } else {
            $this->ReferenceCode = $referenceCode;
        }
        return $this;
    }
    /**
     * Get TicketOnDeparture value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTicketOnDeparture()
    {
        return isset($this->TicketOnDeparture) ? $this->TicketOnDeparture : null;
    }
    /**
     * Set TicketOnDeparture value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ticketOnDeparture
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseTicket
     */
    public function setTicketOnDeparture($ticketOnDeparture = null)
    {
        // validation for constraint: string
        if (!is_null($ticketOnDeparture) && !is_string($ticketOnDeparture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketOnDeparture)), __LINE__);
        }
        if (is_null($ticketOnDeparture) || (is_array($ticketOnDeparture) && empty($ticketOnDeparture))) {
            unset($this->TicketOnDeparture);
        } else {
            $this->TicketOnDeparture = $ticketOnDeparture;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseTicket
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
