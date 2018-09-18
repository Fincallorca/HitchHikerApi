<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookRequestConfiguration StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BookRequestConfiguration
 * @subpackage Structs
 */
class BookRequestConfiguration extends AbstractStructBase
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
     * The AgencyPhone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AgencyPhone;
    /**
     * The AlarmTimeout
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string
     */
    public $AlarmTimeout;
    /**
     * The Allotment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount
     */
    public $Allotment;
    /**
     * The CRSConfig
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCRSConfiguration
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
     * The ClientBusinessPhone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ClientBusinessPhone;
    /**
     * The ClientHomePhone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ClientHomePhone;
    /**
     * The DeliveryDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public $DeliveryDetails;
    /**
     * The EarliestTicketingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EarliestTicketingDate;
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
     * - nillable: true
     * @var string
     */
    public $LanguageCode;
    /**
     * The PublishedTaxOverrideDBCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PublishedTaxOverrideDBCode;
    /**
     * The RecordSet
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $RecordSet;
    /**
     * The TicketingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TicketingDate;
    /**
     * The WebFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestWebFare
     */
    public $WebFare;
    /**
     * Constructor method for BookRequestConfiguration
     * @uses BookRequestConfiguration::setAdminEMailAddresses()
     * @uses BookRequestConfiguration::setAgencyPhone()
     * @uses BookRequestConfiguration::setAlarmTimeout()
     * @uses BookRequestConfiguration::setAllotment()
     * @uses BookRequestConfiguration::setCRSConfig()
     * @uses BookRequestConfiguration::setCharter()
     * @uses BookRequestConfiguration::setClientBusinessPhone()
     * @uses BookRequestConfiguration::setClientHomePhone()
     * @uses BookRequestConfiguration::setDeliveryDetails()
     * @uses BookRequestConfiguration::setEarliestTicketingDate()
     * @uses BookRequestConfiguration::setInvoiceDetails()
     * @uses BookRequestConfiguration::setIsLiveBooking()
     * @uses BookRequestConfiguration::setLanguageCode()
     * @uses BookRequestConfiguration::setPublishedTaxOverrideDBCode()
     * @uses BookRequestConfiguration::setRecordSet()
     * @uses BookRequestConfiguration::setTicketingDate()
     * @uses BookRequestConfiguration::setWebFare()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $adminEMailAddresses
     * @param string $agencyPhone
     * @param string $alarmTimeout
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotment
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCRSConfiguration $cRSConfig
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCharter $charter
     * @param string $clientBusinessPhone
     * @param string $clientHomePhone
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $deliveryDetails
     * @param string $earliestTicketingDate
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $invoiceDetails
     * @param bool $isLiveBooking
     * @param string $languageCode
     * @param string $publishedTaxOverrideDBCode
     * @param string $recordSet
     * @param string $ticketingDate
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestWebFare $webFare
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $adminEMailAddresses = null, $agencyPhone = null, $alarmTimeout = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotment = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCRSConfiguration $cRSConfig = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCharter $charter = null, $clientBusinessPhone = null, $clientHomePhone = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $deliveryDetails = null, $earliestTicketingDate = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $invoiceDetails = null, $isLiveBooking = null, $languageCode = null, $publishedTaxOverrideDBCode = null, $recordSet = null, $ticketingDate = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestWebFare $webFare = null)
    {
        $this
            ->setAdminEMailAddresses($adminEMailAddresses)
            ->setAgencyPhone($agencyPhone)
            ->setAlarmTimeout($alarmTimeout)
            ->setAllotment($allotment)
            ->setCRSConfig($cRSConfig)
            ->setCharter($charter)
            ->setClientBusinessPhone($clientBusinessPhone)
            ->setClientHomePhone($clientHomePhone)
            ->setDeliveryDetails($deliveryDetails)
            ->setEarliestTicketingDate($earliestTicketingDate)
            ->setInvoiceDetails($invoiceDetails)
            ->setIsLiveBooking($isLiveBooking)
            ->setLanguageCode($languageCode)
            ->setPublishedTaxOverrideDBCode($publishedTaxOverrideDBCode)
            ->setRecordSet($recordSet)
            ->setTicketingDate($ticketingDate)
            ->setWebFare($webFare);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
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
     * Get AgencyPhone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAgencyPhone()
    {
        return isset($this->AgencyPhone) ? $this->AgencyPhone : null;
    }
    /**
     * Set AgencyPhone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $agencyPhone
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
     */
    public function setAgencyPhone($agencyPhone = null)
    {
        // validation for constraint: string
        if (!is_null($agencyPhone) && !is_string($agencyPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agencyPhone)), __LINE__);
        }
        if (is_null($agencyPhone) || (is_array($agencyPhone) && empty($agencyPhone))) {
            unset($this->AgencyPhone);
        } else {
            $this->AgencyPhone = $agencyPhone;
        }
        return $this;
    }
    /**
     * Get AlarmTimeout value
     * @return string|null
     */
    public function getAlarmTimeout()
    {
        return $this->AlarmTimeout;
    }
    /**
     * Set AlarmTimeout value
     * @param string $alarmTimeout
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
     */
    public function setAlarmTimeout($alarmTimeout = null)
    {
        // validation for constraint: maxInclusive
        if ($alarmTimeout > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $alarmTimeout), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($alarmTimeout < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $alarmTimeout), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($alarmTimeout) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $alarmTimeout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($alarmTimeout, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($alarmTimeout) && !is_string($alarmTimeout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alarmTimeout)), __LINE__);
        }
        $this->AlarmTimeout = $alarmTimeout;
        return $this;
    }
    /**
     * Get Allotment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount|null
     */
    public function getAllotment()
    {
        return isset($this->Allotment) ? $this->Allotment : null;
    }
    /**
     * Set Allotment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
     */
    public function setAllotment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotment = null)
    {
        if (is_null($allotment) || (is_array($allotment) && empty($allotment))) {
            unset($this->Allotment);
        } else {
            $this->Allotment = $allotment;
        }
        return $this;
    }
    /**
     * Get CRSConfig value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCRSConfiguration|null
     */
    public function getCRSConfig()
    {
        return $this->CRSConfig;
    }
    /**
     * Set CRSConfig value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCRSConfiguration $cRSConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
     */
    public function setCRSConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCRSConfiguration $cRSConfig = null)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
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
     * Get ClientBusinessPhone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClientBusinessPhone()
    {
        return isset($this->ClientBusinessPhone) ? $this->ClientBusinessPhone : null;
    }
    /**
     * Set ClientBusinessPhone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $clientBusinessPhone
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
     */
    public function setClientBusinessPhone($clientBusinessPhone = null)
    {
        // validation for constraint: string
        if (!is_null($clientBusinessPhone) && !is_string($clientBusinessPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientBusinessPhone)), __LINE__);
        }
        if (is_null($clientBusinessPhone) || (is_array($clientBusinessPhone) && empty($clientBusinessPhone))) {
            unset($this->ClientBusinessPhone);
        } else {
            $this->ClientBusinessPhone = $clientBusinessPhone;
        }
        return $this;
    }
    /**
     * Get ClientHomePhone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClientHomePhone()
    {
        return isset($this->ClientHomePhone) ? $this->ClientHomePhone : null;
    }
    /**
     * Set ClientHomePhone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $clientHomePhone
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
     */
    public function setClientHomePhone($clientHomePhone = null)
    {
        // validation for constraint: string
        if (!is_null($clientHomePhone) && !is_string($clientHomePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientHomePhone)), __LINE__);
        }
        if (is_null($clientHomePhone) || (is_array($clientHomePhone) && empty($clientHomePhone))) {
            unset($this->ClientHomePhone);
        } else {
            $this->ClientHomePhone = $clientHomePhone;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
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
     * Get EarliestTicketingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEarliestTicketingDate()
    {
        return isset($this->EarliestTicketingDate) ? $this->EarliestTicketingDate : null;
    }
    /**
     * Set EarliestTicketingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $earliestTicketingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
     */
    public function setEarliestTicketingDate($earliestTicketingDate = null)
    {
        // validation for constraint: string
        if (!is_null($earliestTicketingDate) && !is_string($earliestTicketingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($earliestTicketingDate)), __LINE__);
        }
        if (is_null($earliestTicketingDate) || (is_array($earliestTicketingDate) && empty($earliestTicketingDate))) {
            unset($this->EarliestTicketingDate);
        } else {
            $this->EarliestTicketingDate = $earliestTicketingDate;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
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
     * @return string|null
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }
    /**
     * Set LanguageCode value
     * @param string $languageCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
     */
    public function setLanguageCode($languageCode = null)
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($languageCode)), __LINE__);
        }
        $this->LanguageCode = $languageCode;
        return $this;
    }
    /**
     * Get PublishedTaxOverrideDBCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPublishedTaxOverrideDBCode()
    {
        return isset($this->PublishedTaxOverrideDBCode) ? $this->PublishedTaxOverrideDBCode : null;
    }
    /**
     * Set PublishedTaxOverrideDBCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $publishedTaxOverrideDBCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
     */
    public function setPublishedTaxOverrideDBCode($publishedTaxOverrideDBCode = null)
    {
        // validation for constraint: string
        if (!is_null($publishedTaxOverrideDBCode) && !is_string($publishedTaxOverrideDBCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($publishedTaxOverrideDBCode)), __LINE__);
        }
        if (is_null($publishedTaxOverrideDBCode) || (is_array($publishedTaxOverrideDBCode) && empty($publishedTaxOverrideDBCode))) {
            unset($this->PublishedTaxOverrideDBCode);
        } else {
            $this->PublishedTaxOverrideDBCode = $publishedTaxOverrideDBCode;
        }
        return $this;
    }
    /**
     * Get RecordSet value
     * @return string|null
     */
    public function getRecordSet()
    {
        return $this->RecordSet;
    }
    /**
     * Set RecordSet value
     * @param string $recordSet
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
     */
    public function setRecordSet($recordSet = null)
    {
        // validation for constraint: string
        if (!is_null($recordSet) && !is_string($recordSet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordSet)), __LINE__);
        }
        $this->RecordSet = $recordSet;
        return $this;
    }
    /**
     * Get TicketingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTicketingDate()
    {
        return isset($this->TicketingDate) ? $this->TicketingDate : null;
    }
    /**
     * Set TicketingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ticketingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
     */
    public function setTicketingDate($ticketingDate = null)
    {
        // validation for constraint: string
        if (!is_null($ticketingDate) && !is_string($ticketingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketingDate)), __LINE__);
        }
        if (is_null($ticketingDate) || (is_array($ticketingDate) && empty($ticketingDate))) {
            unset($this->TicketingDate);
        } else {
            $this->TicketingDate = $ticketingDate;
        }
        return $this;
    }
    /**
     * Get WebFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestWebFare|null
     */
    public function getWebFare()
    {
        return isset($this->WebFare) ? $this->WebFare : null;
    }
    /**
     * Set WebFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestWebFare $webFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
     */
    public function setWebFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestWebFare $webFare = null)
    {
        if (is_null($webFare) || (is_array($webFare) && empty($webFare))) {
            unset($this->WebFare);
        } else {
            $this->WebFare = $webFare;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
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
