<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRResponseTicketingDetails StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PNRResponseTicketingDetails
 * @subpackage Structs
 */
class PNRResponseTicketingDetails extends AbstractStructBase
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
     * The Endorsment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Endorsment;
    /**
     * The FormOfPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FormOfPayment;
    /**
     * The OriginalIssuedDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OriginalIssuedDetails;
    /**
     * The Tourcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
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
     * Constructor method for PNRResponseTicketingDetails
     * @uses PNRResponseTicketingDetails::setCommission()
     * @uses PNRResponseTicketingDetails::setEndorsment()
     * @uses PNRResponseTicketingDetails::setFormOfPayment()
     * @uses PNRResponseTicketingDetails::setOriginalIssuedDetails()
     * @uses PNRResponseTicketingDetails::setTourcode()
     * @uses PNRResponseTicketingDetails::setValidatingCarrier()
     * @param string $commission
     * @param string $endorsment
     * @param string $formOfPayment
     * @param string $originalIssuedDetails
     * @param string $tourcode
     * @param string $validatingCarrier
     */
    public function __construct($commission = null, $endorsment = null, $formOfPayment = null, $originalIssuedDetails = null, $tourcode = null, $validatingCarrier = null)
    {
        $this
            ->setCommission($commission)
            ->setEndorsment($endorsment)
            ->setFormOfPayment($formOfPayment)
            ->setOriginalIssuedDetails($originalIssuedDetails)
            ->setTourcode($tourcode)
            ->setValidatingCarrier($validatingCarrier);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketingDetails
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
     * Get Endorsment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndorsment()
    {
        return isset($this->Endorsment) ? $this->Endorsment : null;
    }
    /**
     * Set Endorsment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endorsment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketingDetails
     */
    public function setEndorsment($endorsment = null)
    {
        // validation for constraint: string
        if (!is_null($endorsment) && !is_string($endorsment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endorsment)), __LINE__);
        }
        if (is_null($endorsment) || (is_array($endorsment) && empty($endorsment))) {
            unset($this->Endorsment);
        } else {
            $this->Endorsment = $endorsment;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketingDetails
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
     * Get OriginalIssuedDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOriginalIssuedDetails()
    {
        return isset($this->OriginalIssuedDetails) ? $this->OriginalIssuedDetails : null;
    }
    /**
     * Set OriginalIssuedDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $originalIssuedDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketingDetails
     */
    public function setOriginalIssuedDetails($originalIssuedDetails = null)
    {
        // validation for constraint: string
        if (!is_null($originalIssuedDetails) && !is_string($originalIssuedDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalIssuedDetails)), __LINE__);
        }
        if (is_null($originalIssuedDetails) || (is_array($originalIssuedDetails) && empty($originalIssuedDetails))) {
            unset($this->OriginalIssuedDetails);
        } else {
            $this->OriginalIssuedDetails = $originalIssuedDetails;
        }
        return $this;
    }
    /**
     * Get Tourcode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTourcode()
    {
        return isset($this->Tourcode) ? $this->Tourcode : null;
    }
    /**
     * Set Tourcode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tourcode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketingDetails
     */
    public function setTourcode($tourcode = null)
    {
        // validation for constraint: string
        if (!is_null($tourcode) && !is_string($tourcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tourcode)), __LINE__);
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketingDetails
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketingDetails
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
