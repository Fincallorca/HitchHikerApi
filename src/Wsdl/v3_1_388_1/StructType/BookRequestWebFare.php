<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookRequestWebFare StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BookRequestWebFare
 * @subpackage Structs
 */
class BookRequestWebFare extends AbstractStructBase
{
    /**
     * The AllowSMSNotification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowSMSNotification;
    /**
     * The DeliveryDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public $DeliveryDetails;
    /**
     * The InvoiceDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public $InvoiceDetails;
    /**
     * The IsLiveBooking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsLiveBooking;
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LanguageCode;
    /**
     * The MaximumTolerance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $MaximumTolerance;
    /**
     * The PercentageTolerance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PercentageTolerance;
    /**
     * The Transactioncode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Transactioncode;
    /**
     * The WebAgent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
     */
    public $WebAgent;
    /**
     * Constructor method for BookRequestWebFare
     * @uses BookRequestWebFare::setAllowSMSNotification()
     * @uses BookRequestWebFare::setDeliveryDetails()
     * @uses BookRequestWebFare::setInvoiceDetails()
     * @uses BookRequestWebFare::setIsLiveBooking()
     * @uses BookRequestWebFare::setLanguageCode()
     * @uses BookRequestWebFare::setMaximumTolerance()
     * @uses BookRequestWebFare::setPercentageTolerance()
     * @uses BookRequestWebFare::setTransactioncode()
     * @uses BookRequestWebFare::setWebAgent()
     * @param bool $allowSMSNotification
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $deliveryDetails
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $invoiceDetails
     * @param bool $isLiveBooking
     * @param string $languageCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $maximumTolerance
     * @param int $percentageTolerance
     * @param string $transactioncode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent
     */
    public function __construct($allowSMSNotification = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $deliveryDetails = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $invoiceDetails = null, $isLiveBooking = null, $languageCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $maximumTolerance = null, $percentageTolerance = null, $transactioncode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent = null)
    {
        $this
            ->setAllowSMSNotification($allowSMSNotification)
            ->setDeliveryDetails($deliveryDetails)
            ->setInvoiceDetails($invoiceDetails)
            ->setIsLiveBooking($isLiveBooking)
            ->setLanguageCode($languageCode)
            ->setMaximumTolerance($maximumTolerance)
            ->setPercentageTolerance($percentageTolerance)
            ->setTransactioncode($transactioncode)
            ->setWebAgent($webAgent);
    }
    /**
     * Get AllowSMSNotification value
     * @return bool|null
     */
    public function getAllowSMSNotification()
    {
        return $this->AllowSMSNotification;
    }
    /**
     * Set AllowSMSNotification value
     * @param bool $allowSMSNotification
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestWebFare
     */
    public function setAllowSMSNotification($allowSMSNotification = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowSMSNotification) && !is_bool($allowSMSNotification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowSMSNotification)), __LINE__);
        }
        $this->AllowSMSNotification = $allowSMSNotification;
        return $this;
    }
    /**
     * Get DeliveryDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact|null
     */
    public function getDeliveryDetails()
    {
        return isset($this->DeliveryDetails) ? $this->DeliveryDetails : null;
    }
    /**
     * Set DeliveryDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $deliveryDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestWebFare
     */
    public function setDeliveryDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $deliveryDetails = null)
    {
        if (is_null($deliveryDetails) || (is_array($deliveryDetails) && empty($deliveryDetails))) {
            unset($this->DeliveryDetails);
        } else {
            $this->DeliveryDetails = $deliveryDetails;
        }
        return $this;
    }
    /**
     * Get InvoiceDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact|null
     */
    public function getInvoiceDetails()
    {
        return isset($this->InvoiceDetails) ? $this->InvoiceDetails : null;
    }
    /**
     * Set InvoiceDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $invoiceDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestWebFare
     */
    public function setInvoiceDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $invoiceDetails = null)
    {
        if (is_null($invoiceDetails) || (is_array($invoiceDetails) && empty($invoiceDetails))) {
            unset($this->InvoiceDetails);
        } else {
            $this->InvoiceDetails = $invoiceDetails;
        }
        return $this;
    }
    /**
     * Get IsLiveBooking value
     * @return bool|null
     */
    public function getIsLiveBooking()
    {
        return $this->IsLiveBooking;
    }
    /**
     * Set IsLiveBooking value
     * @param bool $isLiveBooking
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestWebFare
     */
    public function setIsLiveBooking($isLiveBooking = null)
    {
        // validation for constraint: boolean
        if (!is_null($isLiveBooking) && !is_bool($isLiveBooking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isLiveBooking)), __LINE__);
        }
        $this->IsLiveBooking = $isLiveBooking;
        return $this;
    }
    /**
     * Get LanguageCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLanguageCode()
    {
        return isset($this->LanguageCode) ? $this->LanguageCode : null;
    }
    /**
     * Set LanguageCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $languageCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestWebFare
     */
    public function setLanguageCode($languageCode = null)
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($languageCode)), __LINE__);
        }
        if (is_null($languageCode) || (is_array($languageCode) && empty($languageCode))) {
            unset($this->LanguageCode);
        } else {
            $this->LanguageCode = $languageCode;
        }
        return $this;
    }
    /**
     * Get MaximumTolerance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getMaximumTolerance()
    {
        return isset($this->MaximumTolerance) ? $this->MaximumTolerance : null;
    }
    /**
     * Set MaximumTolerance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $maximumTolerance
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestWebFare
     */
    public function setMaximumTolerance(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $maximumTolerance = null)
    {
        if (is_null($maximumTolerance) || (is_array($maximumTolerance) && empty($maximumTolerance))) {
            unset($this->MaximumTolerance);
        } else {
            $this->MaximumTolerance = $maximumTolerance;
        }
        return $this;
    }
    /**
     * Get PercentageTolerance value
     * @return int|null
     */
    public function getPercentageTolerance()
    {
        return $this->PercentageTolerance;
    }
    /**
     * Set PercentageTolerance value
     * @param int $percentageTolerance
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestWebFare
     */
    public function setPercentageTolerance($percentageTolerance = null)
    {
        // validation for constraint: int
        if (!is_null($percentageTolerance) && !is_numeric($percentageTolerance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($percentageTolerance)), __LINE__);
        }
        $this->PercentageTolerance = $percentageTolerance;
        return $this;
    }
    /**
     * Get Transactioncode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTransactioncode()
    {
        return isset($this->Transactioncode) ? $this->Transactioncode : null;
    }
    /**
     * Set Transactioncode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $transactioncode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestWebFare
     */
    public function setTransactioncode($transactioncode = null)
    {
        // validation for constraint: string
        if (!is_null($transactioncode) && !is_string($transactioncode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactioncode)), __LINE__);
        }
        if (is_null($transactioncode) || (is_array($transactioncode) && empty($transactioncode))) {
            unset($this->Transactioncode);
        } else {
            $this->Transactioncode = $transactioncode;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestWebFare
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestWebFare
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
