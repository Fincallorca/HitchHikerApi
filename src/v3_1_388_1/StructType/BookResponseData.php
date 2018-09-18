<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookResponseData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BookResponseData
 * @subpackage Structs
 */
class BookResponseData extends AbstractStructBase
{
    /**
     * The AdditionalInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $AdditionalInformation;
    /**
     * The CreatedPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData
     */
    public $CreatedPayment;
    /**
     * The CreditCardApprovalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreditCardApprovalCode;
    /**
     * The CustomerLastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CustomerLastName;
    /**
     * The CustomerReferenceNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CustomerReferenceNumber;
    /**
     * The EquivalentTotalPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentTotalPrice;
    /**
     * The Legs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponseLeg
     */
    public $Legs;
    /**
     * The ModuleInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData
     */
    public $ModuleInfo;
    /**
     * The NotesAndInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $NotesAndInformation;
    /**
     * The OnlineCheckinLink
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OnlineCheckinLink;
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponsePassenger
     */
    public $Passengers;
    /**
     * The PaymentTokens
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $PaymentTokens;
    /**
     * The Queue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Queue;
    /**
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RecordLocator;
    /**
     * The ResponseInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails
     */
    public $ResponseInfo;
    /**
     * The Session
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Session;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Source;
    /**
     * The Surcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
     */
    public $Surcharge;
    /**
     * The Tax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $Tax;
    /**
     * The TicketOnDepartureInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TicketOnDepartureInfo;
    /**
     * The TotalPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $TotalPrice;
    /**
     * The UsedCRSProfile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public $UsedCRSProfile;
    /**
     * The Warnings
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Warnings;
    /**
     * The WebFareConfirmationPage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WebFareConfirmationPage;
    /**
     * Constructor method for BookResponseData
     * @uses BookResponseData::setAdditionalInformation()
     * @uses BookResponseData::setCreatedPayment()
     * @uses BookResponseData::setCreditCardApprovalCode()
     * @uses BookResponseData::setCustomerLastName()
     * @uses BookResponseData::setCustomerReferenceNumber()
     * @uses BookResponseData::setEquivalentTotalPrice()
     * @uses BookResponseData::setLegs()
     * @uses BookResponseData::setModuleInfo()
     * @uses BookResponseData::setNotesAndInformation()
     * @uses BookResponseData::setOnlineCheckinLink()
     * @uses BookResponseData::setPassengers()
     * @uses BookResponseData::setPaymentTokens()
     * @uses BookResponseData::setQueue()
     * @uses BookResponseData::setRecordLocator()
     * @uses BookResponseData::setResponseInfo()
     * @uses BookResponseData::setSession()
     * @uses BookResponseData::setSource()
     * @uses BookResponseData::setSurcharge()
     * @uses BookResponseData::setTax()
     * @uses BookResponseData::setTicketOnDepartureInfo()
     * @uses BookResponseData::setTotalPrice()
     * @uses BookResponseData::setUsedCRSProfile()
     * @uses BookResponseData::setWarnings()
     * @uses BookResponseData::setWebFareConfirmationPage()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $additionalInformation
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData $createdPayment
     * @param string $creditCardApprovalCode
     * @param string $customerLastName
     * @param string $customerReferenceNumber
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalPrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponseLeg $legs
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $notesAndInformation
     * @param string $onlineCheckinLink
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponsePassenger $passengers
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $paymentTokens
     * @param string $queue
     * @param string $recordLocator
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo
     * @param string $session
     * @param string $source
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges $surcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $tax
     * @param string $ticketOnDepartureInfo
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalPrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $usedCRSProfile
     * @param string $warnings
     * @param string $webFareConfirmationPage
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $additionalInformation = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData $createdPayment = null, $creditCardApprovalCode = null, $customerLastName = null, $customerReferenceNumber = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalPrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponseLeg $legs = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $notesAndInformation = null, $onlineCheckinLink = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponsePassenger $passengers = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $paymentTokens = null, $queue = null, $recordLocator = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo = null, $session = null, $source = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges $surcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $tax = null, $ticketOnDepartureInfo = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalPrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $usedCRSProfile = null, $warnings = null, $webFareConfirmationPage = null)
    {
        $this
            ->setAdditionalInformation($additionalInformation)
            ->setCreatedPayment($createdPayment)
            ->setCreditCardApprovalCode($creditCardApprovalCode)
            ->setCustomerLastName($customerLastName)
            ->setCustomerReferenceNumber($customerReferenceNumber)
            ->setEquivalentTotalPrice($equivalentTotalPrice)
            ->setLegs($legs)
            ->setModuleInfo($moduleInfo)
            ->setNotesAndInformation($notesAndInformation)
            ->setOnlineCheckinLink($onlineCheckinLink)
            ->setPassengers($passengers)
            ->setPaymentTokens($paymentTokens)
            ->setQueue($queue)
            ->setRecordLocator($recordLocator)
            ->setResponseInfo($responseInfo)
            ->setSession($session)
            ->setSource($source)
            ->setSurcharge($surcharge)
            ->setTax($tax)
            ->setTicketOnDepartureInfo($ticketOnDepartureInfo)
            ->setTotalPrice($totalPrice)
            ->setUsedCRSProfile($usedCRSProfile)
            ->setWarnings($warnings)
            ->setWebFareConfirmationPage($webFareConfirmationPage);
    }
    /**
     * Get AdditionalInformation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getAdditionalInformation()
    {
        return isset($this->AdditionalInformation) ? $this->AdditionalInformation : null;
    }
    /**
     * Set AdditionalInformation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $additionalInformation
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setAdditionalInformation(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $additionalInformation = null)
    {
        if (is_null($additionalInformation) || (is_array($additionalInformation) && empty($additionalInformation))) {
            unset($this->AdditionalInformation);
        } else {
            $this->AdditionalInformation = $additionalInformation;
        }
        return $this;
    }
    /**
     * Get CreatedPayment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData|null
     */
    public function getCreatedPayment()
    {
        return isset($this->CreatedPayment) ? $this->CreatedPayment : null;
    }
    /**
     * Set CreatedPayment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData $createdPayment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setCreatedPayment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData $createdPayment = null)
    {
        if (is_null($createdPayment) || (is_array($createdPayment) && empty($createdPayment))) {
            unset($this->CreatedPayment);
        } else {
            $this->CreatedPayment = $createdPayment;
        }
        return $this;
    }
    /**
     * Get CreditCardApprovalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreditCardApprovalCode()
    {
        return isset($this->CreditCardApprovalCode) ? $this->CreditCardApprovalCode : null;
    }
    /**
     * Set CreditCardApprovalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creditCardApprovalCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setCreditCardApprovalCode($creditCardApprovalCode = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardApprovalCode) && !is_string($creditCardApprovalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardApprovalCode)), __LINE__);
        }
        if (is_null($creditCardApprovalCode) || (is_array($creditCardApprovalCode) && empty($creditCardApprovalCode))) {
            unset($this->CreditCardApprovalCode);
        } else {
            $this->CreditCardApprovalCode = $creditCardApprovalCode;
        }
        return $this;
    }
    /**
     * Get CustomerLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerLastName()
    {
        return isset($this->CustomerLastName) ? $this->CustomerLastName : null;
    }
    /**
     * Set CustomerLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerLastName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setCustomerLastName($customerLastName = null)
    {
        // validation for constraint: string
        if (!is_null($customerLastName) && !is_string($customerLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerLastName)), __LINE__);
        }
        if (is_null($customerLastName) || (is_array($customerLastName) && empty($customerLastName))) {
            unset($this->CustomerLastName);
        } else {
            $this->CustomerLastName = $customerLastName;
        }
        return $this;
    }
    /**
     * Get CustomerReferenceNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerReferenceNumber()
    {
        return isset($this->CustomerReferenceNumber) ? $this->CustomerReferenceNumber : null;
    }
    /**
     * Set CustomerReferenceNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerReferenceNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setCustomerReferenceNumber($customerReferenceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($customerReferenceNumber) && !is_string($customerReferenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerReferenceNumber)), __LINE__);
        }
        if (is_null($customerReferenceNumber) || (is_array($customerReferenceNumber) && empty($customerReferenceNumber))) {
            unset($this->CustomerReferenceNumber);
        } else {
            $this->CustomerReferenceNumber = $customerReferenceNumber;
        }
        return $this;
    }
    /**
     * Get EquivalentTotalPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentTotalPrice()
    {
        return isset($this->EquivalentTotalPrice) ? $this->EquivalentTotalPrice : null;
    }
    /**
     * Set EquivalentTotalPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setEquivalentTotalPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalPrice = null)
    {
        if (is_null($equivalentTotalPrice) || (is_array($equivalentTotalPrice) && empty($equivalentTotalPrice))) {
            unset($this->EquivalentTotalPrice);
        } else {
            $this->EquivalentTotalPrice = $equivalentTotalPrice;
        }
        return $this;
    }
    /**
     * Get Legs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponseLeg|null
     */
    public function getLegs()
    {
        return isset($this->Legs) ? $this->Legs : null;
    }
    /**
     * Set Legs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponseLeg $legs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setLegs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponseLeg $legs = null)
    {
        if (is_null($legs) || (is_array($legs) && empty($legs))) {
            unset($this->Legs);
        } else {
            $this->Legs = $legs;
        }
        return $this;
    }
    /**
     * Get ModuleInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData|null
     */
    public function getModuleInfo()
    {
        return isset($this->ModuleInfo) ? $this->ModuleInfo : null;
    }
    /**
     * Set ModuleInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setModuleInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo = null)
    {
        if (is_null($moduleInfo) || (is_array($moduleInfo) && empty($moduleInfo))) {
            unset($this->ModuleInfo);
        } else {
            $this->ModuleInfo = $moduleInfo;
        }
        return $this;
    }
    /**
     * Get NotesAndInformation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getNotesAndInformation()
    {
        return isset($this->NotesAndInformation) ? $this->NotesAndInformation : null;
    }
    /**
     * Set NotesAndInformation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $notesAndInformation
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setNotesAndInformation(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $notesAndInformation = null)
    {
        if (is_null($notesAndInformation) || (is_array($notesAndInformation) && empty($notesAndInformation))) {
            unset($this->NotesAndInformation);
        } else {
            $this->NotesAndInformation = $notesAndInformation;
        }
        return $this;
    }
    /**
     * Get OnlineCheckinLink value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOnlineCheckinLink()
    {
        return isset($this->OnlineCheckinLink) ? $this->OnlineCheckinLink : null;
    }
    /**
     * Set OnlineCheckinLink value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $onlineCheckinLink
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setOnlineCheckinLink($onlineCheckinLink = null)
    {
        // validation for constraint: string
        if (!is_null($onlineCheckinLink) && !is_string($onlineCheckinLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($onlineCheckinLink)), __LINE__);
        }
        if (is_null($onlineCheckinLink) || (is_array($onlineCheckinLink) && empty($onlineCheckinLink))) {
            unset($this->OnlineCheckinLink);
        } else {
            $this->OnlineCheckinLink = $onlineCheckinLink;
        }
        return $this;
    }
    /**
     * Get Passengers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponsePassenger|null
     */
    public function getPassengers()
    {
        return isset($this->Passengers) ? $this->Passengers : null;
    }
    /**
     * Set Passengers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponsePassenger $passengers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setPassengers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponsePassenger $passengers = null)
    {
        if (is_null($passengers) || (is_array($passengers) && empty($passengers))) {
            unset($this->Passengers);
        } else {
            $this->Passengers = $passengers;
        }
        return $this;
    }
    /**
     * Get PaymentTokens value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getPaymentTokens()
    {
        return isset($this->PaymentTokens) ? $this->PaymentTokens : null;
    }
    /**
     * Set PaymentTokens value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $paymentTokens
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setPaymentTokens(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $paymentTokens = null)
    {
        if (is_null($paymentTokens) || (is_array($paymentTokens) && empty($paymentTokens))) {
            unset($this->PaymentTokens);
        } else {
            $this->PaymentTokens = $paymentTokens;
        }
        return $this;
    }
    /**
     * Get Queue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getQueue()
    {
        return isset($this->Queue) ? $this->Queue : null;
    }
    /**
     * Set Queue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $queue
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setQueue($queue = null)
    {
        // validation for constraint: string
        if (!is_null($queue) && !is_string($queue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($queue)), __LINE__);
        }
        if (is_null($queue) || (is_array($queue) && empty($queue))) {
            unset($this->Queue);
        } else {
            $this->Queue = $queue;
        }
        return $this;
    }
    /**
     * Get RecordLocator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecordLocator()
    {
        return isset($this->RecordLocator) ? $this->RecordLocator : null;
    }
    /**
     * Set RecordLocator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recordLocator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setRecordLocator($recordLocator = null)
    {
        // validation for constraint: string
        if (!is_null($recordLocator) && !is_string($recordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordLocator)), __LINE__);
        }
        if (is_null($recordLocator) || (is_array($recordLocator) && empty($recordLocator))) {
            unset($this->RecordLocator);
        } else {
            $this->RecordLocator = $recordLocator;
        }
        return $this;
    }
    /**
     * Get ResponseInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails|null
     */
    public function getResponseInfo()
    {
        return isset($this->ResponseInfo) ? $this->ResponseInfo : null;
    }
    /**
     * Set ResponseInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setResponseInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo = null)
    {
        if (is_null($responseInfo) || (is_array($responseInfo) && empty($responseInfo))) {
            unset($this->ResponseInfo);
        } else {
            $this->ResponseInfo = $responseInfo;
        }
        return $this;
    }
    /**
     * Get Session value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSession()
    {
        return isset($this->Session) ? $this->Session : null;
    }
    /**
     * Set Session value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $session
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        if (is_null($session) || (is_array($session) && empty($session))) {
            unset($this->Session);
        } else {
            $this->Session = $session;
        }
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $source
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setSource($source = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::valueIsValid($source)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $source, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::getValidValues())), __LINE__);
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Get Surcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges|null
     */
    public function getSurcharge()
    {
        return isset($this->Surcharge) ? $this->Surcharge : null;
    }
    /**
     * Set Surcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges $surcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges $surcharge = null)
    {
        if (is_null($surcharge) || (is_array($surcharge) && empty($surcharge))) {
            unset($this->Surcharge);
        } else {
            $this->Surcharge = $surcharge;
        }
        return $this;
    }
    /**
     * Get Tax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getTax()
    {
        return isset($this->Tax) ? $this->Tax : null;
    }
    /**
     * Set Tax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $tax
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setTax(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $tax = null)
    {
        if (is_null($tax) || (is_array($tax) && empty($tax))) {
            unset($this->Tax);
        } else {
            $this->Tax = $tax;
        }
        return $this;
    }
    /**
     * Get TicketOnDepartureInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTicketOnDepartureInfo()
    {
        return isset($this->TicketOnDepartureInfo) ? $this->TicketOnDepartureInfo : null;
    }
    /**
     * Set TicketOnDepartureInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ticketOnDepartureInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setTicketOnDepartureInfo($ticketOnDepartureInfo = null)
    {
        // validation for constraint: string
        if (!is_null($ticketOnDepartureInfo) && !is_string($ticketOnDepartureInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketOnDepartureInfo)), __LINE__);
        }
        if (is_null($ticketOnDepartureInfo) || (is_array($ticketOnDepartureInfo) && empty($ticketOnDepartureInfo))) {
            unset($this->TicketOnDepartureInfo);
        } else {
            $this->TicketOnDepartureInfo = $ticketOnDepartureInfo;
        }
        return $this;
    }
    /**
     * Get TotalPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getTotalPrice()
    {
        return isset($this->TotalPrice) ? $this->TotalPrice : null;
    }
    /**
     * Set TotalPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setTotalPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalPrice = null)
    {
        if (is_null($totalPrice) || (is_array($totalPrice) && empty($totalPrice))) {
            unset($this->TotalPrice);
        } else {
            $this->TotalPrice = $totalPrice;
        }
        return $this;
    }
    /**
     * Get UsedCRSProfile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS|null
     */
    public function getUsedCRSProfile()
    {
        return isset($this->UsedCRSProfile) ? $this->UsedCRSProfile : null;
    }
    /**
     * Set UsedCRSProfile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $usedCRSProfile
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setUsedCRSProfile(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $usedCRSProfile = null)
    {
        if (is_null($usedCRSProfile) || (is_array($usedCRSProfile) && empty($usedCRSProfile))) {
            unset($this->UsedCRSProfile);
        } else {
            $this->UsedCRSProfile = $usedCRSProfile;
        }
        return $this;
    }
    /**
     * Get Warnings value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWarnings()
    {
        return isset($this->Warnings) ? $this->Warnings : null;
    }
    /**
     * Set Warnings value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $warnings
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setWarnings($warnings = null)
    {
        // validation for constraint: string
        if (!is_null($warnings) && !is_string($warnings)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($warnings)), __LINE__);
        }
        if (is_null($warnings) || (is_array($warnings) && empty($warnings))) {
            unset($this->Warnings);
        } else {
            $this->Warnings = $warnings;
        }
        return $this;
    }
    /**
     * Get WebFareConfirmationPage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWebFareConfirmationPage()
    {
        return isset($this->WebFareConfirmationPage) ? $this->WebFareConfirmationPage : null;
    }
    /**
     * Set WebFareConfirmationPage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $webFareConfirmationPage
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public function setWebFareConfirmationPage($webFareConfirmationPage = null)
    {
        // validation for constraint: string
        if (!is_null($webFareConfirmationPage) && !is_string($webFareConfirmationPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($webFareConfirmationPage)), __LINE__);
        }
        if (is_null($webFareConfirmationPage) || (is_array($webFareConfirmationPage) && empty($webFareConfirmationPage))) {
            unset($this->WebFareConfirmationPage);
        } else {
            $this->WebFareConfirmationPage = $webFareConfirmationPage;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
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
