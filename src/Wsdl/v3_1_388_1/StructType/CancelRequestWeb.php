<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelRequestWeb StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CancelRequestWeb
 * @subpackage Structs
 */
class CancelRequestWeb extends AbstractStructBase
{
    /**
     * The Delivery
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public $Delivery;
    /**
     * The DepartureDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureDate;
    /**
     * The FirstNameOfPassenger
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FirstNameOfPassenger;
    /**
     * The Invoice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public $Invoice;
    /**
     * The LastNameOfPassenger
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastNameOfPassenger;
    /**
     * The WebAgent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
     */
    public $WebAgent;
    /**
     * Constructor method for CancelRequestWeb
     * @uses CancelRequestWeb::setDelivery()
     * @uses CancelRequestWeb::setDepartureDate()
     * @uses CancelRequestWeb::setFirstNameOfPassenger()
     * @uses CancelRequestWeb::setInvoice()
     * @uses CancelRequestWeb::setLastNameOfPassenger()
     * @uses CancelRequestWeb::setWebAgent()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $delivery
     * @param string $departureDate
     * @param string $firstNameOfPassenger
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $invoice
     * @param string $lastNameOfPassenger
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $delivery = null, $departureDate = null, $firstNameOfPassenger = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $invoice = null, $lastNameOfPassenger = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent = null)
    {
        $this
            ->setDelivery($delivery)
            ->setDepartureDate($departureDate)
            ->setFirstNameOfPassenger($firstNameOfPassenger)
            ->setInvoice($invoice)
            ->setLastNameOfPassenger($lastNameOfPassenger)
            ->setWebAgent($webAgent);
    }
    /**
     * Get Delivery value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact|null
     */
    public function getDelivery()
    {
        return isset($this->Delivery) ? $this->Delivery : null;
    }
    /**
     * Set Delivery value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $delivery
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestWeb
     */
    public function setDelivery(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $delivery = null)
    {
        if (is_null($delivery) || (is_array($delivery) && empty($delivery))) {
            unset($this->Delivery);
        } else {
            $this->Delivery = $delivery;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestWeb
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
     * Get FirstNameOfPassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstNameOfPassenger()
    {
        return isset($this->FirstNameOfPassenger) ? $this->FirstNameOfPassenger : null;
    }
    /**
     * Set FirstNameOfPassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstNameOfPassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestWeb
     */
    public function setFirstNameOfPassenger($firstNameOfPassenger = null)
    {
        // validation for constraint: string
        if (!is_null($firstNameOfPassenger) && !is_string($firstNameOfPassenger)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstNameOfPassenger)), __LINE__);
        }
        if (is_null($firstNameOfPassenger) || (is_array($firstNameOfPassenger) && empty($firstNameOfPassenger))) {
            unset($this->FirstNameOfPassenger);
        } else {
            $this->FirstNameOfPassenger = $firstNameOfPassenger;
        }
        return $this;
    }
    /**
     * Get Invoice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact|null
     */
    public function getInvoice()
    {
        return isset($this->Invoice) ? $this->Invoice : null;
    }
    /**
     * Set Invoice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $invoice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestWeb
     */
    public function setInvoice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $invoice = null)
    {
        if (is_null($invoice) || (is_array($invoice) && empty($invoice))) {
            unset($this->Invoice);
        } else {
            $this->Invoice = $invoice;
        }
        return $this;
    }
    /**
     * Get LastNameOfPassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastNameOfPassenger()
    {
        return isset($this->LastNameOfPassenger) ? $this->LastNameOfPassenger : null;
    }
    /**
     * Set LastNameOfPassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastNameOfPassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestWeb
     */
    public function setLastNameOfPassenger($lastNameOfPassenger = null)
    {
        // validation for constraint: string
        if (!is_null($lastNameOfPassenger) && !is_string($lastNameOfPassenger)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastNameOfPassenger)), __LINE__);
        }
        if (is_null($lastNameOfPassenger) || (is_array($lastNameOfPassenger) && empty($lastNameOfPassenger))) {
            unset($this->LastNameOfPassenger);
        } else {
            $this->LastNameOfPassenger = $lastNameOfPassenger;
        }
        return $this;
    }
    /**
     * Get WebAgent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent|null
     */
    public function getWebAgent()
    {
        return isset($this->WebAgent) ? $this->WebAgent : null;
    }
    /**
     * Set WebAgent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestWeb
     */
    public function setWebAgent(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent = null)
    {
        if (is_null($webAgent) || (is_array($webAgent) && empty($webAgent))) {
            unset($this->WebAgent);
        } else {
            $this->WebAgent = $webAgent;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestWeb
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
