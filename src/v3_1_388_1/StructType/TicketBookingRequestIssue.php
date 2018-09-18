<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketBookingRequestIssue StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketBookingRequestIssue
 * @subpackage Structs
 */
class TicketBookingRequestIssue extends AbstractStructBase
{
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestCommission
     */
    public $Commission;
    /**
     * The Endorsement
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPaxText
     */
    public $Endorsement;
    /**
     * The FormOfPayments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPayment
     */
    public $FormOfPayments;
    /**
     * The IssuePassengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPassenger
     */
    public $IssuePassengers;
    /**
     * The IssueSegments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestSegment
     */
    public $IssueSegments;
    /**
     * The Tourcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPaxText
     */
    public $Tourcode;
    /**
     * The ValidatingCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ValidatingCarrier;
    /**
     * Constructor method for TicketBookingRequestIssue
     * @uses TicketBookingRequestIssue::setCommission()
     * @uses TicketBookingRequestIssue::setEndorsement()
     * @uses TicketBookingRequestIssue::setFormOfPayments()
     * @uses TicketBookingRequestIssue::setIssuePassengers()
     * @uses TicketBookingRequestIssue::setIssueSegments()
     * @uses TicketBookingRequestIssue::setTourcode()
     * @uses TicketBookingRequestIssue::setValidatingCarrier()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestCommission $commission
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPaxText $endorsement
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPayment $formOfPayments
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPassenger $issuePassengers
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestSegment $issueSegments
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPaxText $tourcode
     * @param string $validatingCarrier
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestCommission $commission = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPaxText $endorsement = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPayment $formOfPayments = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPassenger $issuePassengers = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestSegment $issueSegments = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPaxText $tourcode = null, $validatingCarrier = null)
    {
        $this
            ->setCommission($commission)
            ->setEndorsement($endorsement)
            ->setFormOfPayments($formOfPayments)
            ->setIssuePassengers($issuePassengers)
            ->setIssueSegments($issueSegments)
            ->setTourcode($tourcode)
            ->setValidatingCarrier($validatingCarrier);
    }
    /**
     * Get Commission value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestCommission|null
     */
    public function getCommission()
    {
        return isset($this->Commission) ? $this->Commission : null;
    }
    /**
     * Set Commission value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestCommission $commission
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestIssue
     */
    public function setCommission(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestCommission $commission = null)
    {
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPaxText|null
     */
    public function getEndorsement()
    {
        return isset($this->Endorsement) ? $this->Endorsement : null;
    }
    /**
     * Set Endorsement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPaxText $endorsement
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestIssue
     */
    public function setEndorsement(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPaxText $endorsement = null)
    {
        if (is_null($endorsement) || (is_array($endorsement) && empty($endorsement))) {
            unset($this->Endorsement);
        } else {
            $this->Endorsement = $endorsement;
        }
        return $this;
    }
    /**
     * Get FormOfPayments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPayment|null
     */
    public function getFormOfPayments()
    {
        return isset($this->FormOfPayments) ? $this->FormOfPayments : null;
    }
    /**
     * Set FormOfPayments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPayment $formOfPayments
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestIssue
     */
    public function setFormOfPayments(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPayment $formOfPayments = null)
    {
        if (is_null($formOfPayments) || (is_array($formOfPayments) && empty($formOfPayments))) {
            unset($this->FormOfPayments);
        } else {
            $this->FormOfPayments = $formOfPayments;
        }
        return $this;
    }
    /**
     * Get IssuePassengers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPassenger|null
     */
    public function getIssuePassengers()
    {
        return isset($this->IssuePassengers) ? $this->IssuePassengers : null;
    }
    /**
     * Set IssuePassengers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPassenger $issuePassengers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestIssue
     */
    public function setIssuePassengers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPassenger $issuePassengers = null)
    {
        if (is_null($issuePassengers) || (is_array($issuePassengers) && empty($issuePassengers))) {
            unset($this->IssuePassengers);
        } else {
            $this->IssuePassengers = $issuePassengers;
        }
        return $this;
    }
    /**
     * Get IssueSegments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestSegment|null
     */
    public function getIssueSegments()
    {
        return isset($this->IssueSegments) ? $this->IssueSegments : null;
    }
    /**
     * Set IssueSegments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestSegment $issueSegments
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestIssue
     */
    public function setIssueSegments(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestSegment $issueSegments = null)
    {
        if (is_null($issueSegments) || (is_array($issueSegments) && empty($issueSegments))) {
            unset($this->IssueSegments);
        } else {
            $this->IssueSegments = $issueSegments;
        }
        return $this;
    }
    /**
     * Get Tourcode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPaxText|null
     */
    public function getTourcode()
    {
        return isset($this->Tourcode) ? $this->Tourcode : null;
    }
    /**
     * Set Tourcode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPaxText $tourcode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestIssue
     */
    public function setTourcode(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPaxText $tourcode = null)
    {
        if (is_null($tourcode) || (is_array($tourcode) && empty($tourcode))) {
            unset($this->Tourcode);
        } else {
            $this->Tourcode = $tourcode;
        }
        return $this;
    }
    /**
     * Get ValidatingCarrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidatingCarrier()
    {
        return isset($this->ValidatingCarrier) ? $this->ValidatingCarrier : null;
    }
    /**
     * Set ValidatingCarrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validatingCarrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestIssue
     */
    public function setValidatingCarrier($validatingCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($validatingCarrier) && !is_string($validatingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validatingCarrier)), __LINE__);
        }
        if (is_null($validatingCarrier) || (is_array($validatingCarrier) && empty($validatingCarrier))) {
            unset($this->ValidatingCarrier);
        } else {
            $this->ValidatingCarrier = $validatingCarrier;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestIssue
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
