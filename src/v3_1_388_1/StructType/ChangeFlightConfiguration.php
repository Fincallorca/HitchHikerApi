<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeFlightConfiguration StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ChangeFlightConfiguration
 * @subpackage Structs
 */
class ChangeFlightConfiguration extends AbstractStructBase
{
    /**
     * The AdminEMailAddresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $AdminEMailAddresses;
    /**
     * The CRSConfig
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public $CRSConfig;
    /**
     * The Charter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCharter
     */
    public $Charter;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CurrencyCode;
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
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LanguageCode;
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPayment
     */
    public $Payment;
    /**
     * The Webfare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightWebFare
     */
    public $Webfare;
    /**
     * Constructor method for ChangeFlightConfiguration
     * @uses ChangeFlightConfiguration::setAdminEMailAddresses()
     * @uses ChangeFlightConfiguration::setCRSConfig()
     * @uses ChangeFlightConfiguration::setCharter()
     * @uses ChangeFlightConfiguration::setCurrencyCode()
     * @uses ChangeFlightConfiguration::setDeliveryDetails()
     * @uses ChangeFlightConfiguration::setInvoiceDetails()
     * @uses ChangeFlightConfiguration::setLanguageCode()
     * @uses ChangeFlightConfiguration::setPayment()
     * @uses ChangeFlightConfiguration::setWebfare()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $adminEMailAddresses
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCharter $charter
     * @param string $currencyCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $deliveryDetails
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $invoiceDetails
     * @param string $languageCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPayment $payment
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightWebFare $webfare
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $adminEMailAddresses = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCharter $charter = null, $currencyCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $deliveryDetails = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $invoiceDetails = null, $languageCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPayment $payment = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightWebFare $webfare = null)
    {
        $this
            ->setAdminEMailAddresses($adminEMailAddresses)
            ->setCRSConfig($cRSConfig)
            ->setCharter($charter)
            ->setCurrencyCode($currencyCode)
            ->setDeliveryDetails($deliveryDetails)
            ->setInvoiceDetails($invoiceDetails)
            ->setLanguageCode($languageCode)
            ->setPayment($payment)
            ->setWebfare($webfare);
    }
    /**
     * Get AdminEMailAddresses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getAdminEMailAddresses()
    {
        return isset($this->AdminEMailAddresses) ? $this->AdminEMailAddresses : null;
    }
    /**
     * Set AdminEMailAddresses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $adminEMailAddresses
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightConfiguration
     */
    public function setAdminEMailAddresses(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $adminEMailAddresses = null)
    {
        if (is_null($adminEMailAddresses) || (is_array($adminEMailAddresses) && empty($adminEMailAddresses))) {
            unset($this->AdminEMailAddresses);
        } else {
            $this->AdminEMailAddresses = $adminEMailAddresses;
        }
        return $this;
    }
    /**
     * Get CRSConfig value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS|null
     */
    public function getCRSConfig()
    {
        return $this->CRSConfig;
    }
    /**
     * Set CRSConfig value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightConfiguration
     */
    public function setCRSConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null)
    {
        $this->CRSConfig = $cRSConfig;
        return $this;
    }
    /**
     * Get Charter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCharter|null
     */
    public function getCharter()
    {
        return isset($this->Charter) ? $this->Charter : null;
    }
    /**
     * Set Charter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCharter $charter
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightConfiguration
     */
    public function setCharter(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCharter $charter = null)
    {
        if (is_null($charter) || (is_array($charter) && empty($charter))) {
            unset($this->Charter);
        } else {
            $this->Charter = $charter;
        }
        return $this;
    }
    /**
     * Get CurrencyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return isset($this->CurrencyCode) ? $this->CurrencyCode : null;
    }
    /**
     * Set CurrencyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $currencyCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightConfiguration
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        if (is_null($currencyCode) || (is_array($currencyCode) && empty($currencyCode))) {
            unset($this->CurrencyCode);
        } else {
            $this->CurrencyCode = $currencyCode;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightConfiguration
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightConfiguration
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightConfiguration
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
     * Get Payment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPayment|null
     */
    public function getPayment()
    {
        return isset($this->Payment) ? $this->Payment : null;
    }
    /**
     * Set Payment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPayment $payment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightConfiguration
     */
    public function setPayment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPayment $payment = null)
    {
        if (is_null($payment) || (is_array($payment) && empty($payment))) {
            unset($this->Payment);
        } else {
            $this->Payment = $payment;
        }
        return $this;
    }
    /**
     * Get Webfare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightWebFare|null
     */
    public function getWebfare()
    {
        return isset($this->Webfare) ? $this->Webfare : null;
    }
    /**
     * Set Webfare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightWebFare $webfare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightConfiguration
     */
    public function setWebfare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightWebFare $webfare = null)
    {
        if (is_null($webfare) || (is_array($webfare) && empty($webfare))) {
            unset($this->Webfare);
        } else {
            $this->Webfare = $webfare;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightConfiguration
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
