<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelResponsePNR StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CancelResponsePNR
 * @subpackage Structs
 */
class CancelResponsePNR extends AbstractStructBase
{
    /**
     * The AdditionalInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AdditionalInformation;
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
     * The FileKey
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FileKey;
    /**
     * The Legs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponseLeg
     */
    public $Legs;
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
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponsePassenger
     */
    public $Passengers;
    /**
     * The Queue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Queue;
    /**
     * The Surcharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonBookSurcharges
     */
    public $Surcharges;
    /**
     * The TotalPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $TotalPrice;
    /**
     * The WebFareConfirmationPage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WebFareConfirmationPage;
    /**
     * Constructor method for CancelResponsePNR
     * @uses CancelResponsePNR::setAdditionalInformation()
     * @uses CancelResponsePNR::setCustomerReferenceNumber()
     * @uses CancelResponsePNR::setEquivalentTotalPrice()
     * @uses CancelResponsePNR::setFileKey()
     * @uses CancelResponsePNR::setLegs()
     * @uses CancelResponsePNR::setOnlineCheckinLink()
     * @uses CancelResponsePNR::setPassengers()
     * @uses CancelResponsePNR::setQueue()
     * @uses CancelResponsePNR::setSurcharges()
     * @uses CancelResponsePNR::setTotalPrice()
     * @uses CancelResponsePNR::setWebFareConfirmationPage()
     * @param string $additionalInformation
     * @param string $customerReferenceNumber
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalPrice
     * @param string $fileKey
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponseLeg $legs
     * @param string $onlineCheckinLink
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponsePassenger $passengers
     * @param string $queue
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonBookSurcharges $surcharges
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalPrice
     * @param string $webFareConfirmationPage
     */
    public function __construct($additionalInformation = null, $customerReferenceNumber = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalPrice = null, $fileKey = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponseLeg $legs = null, $onlineCheckinLink = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponsePassenger $passengers = null, $queue = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonBookSurcharges $surcharges = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalPrice = null, $webFareConfirmationPage = null)
    {
        $this
            ->setAdditionalInformation($additionalInformation)
            ->setCustomerReferenceNumber($customerReferenceNumber)
            ->setEquivalentTotalPrice($equivalentTotalPrice)
            ->setFileKey($fileKey)
            ->setLegs($legs)
            ->setOnlineCheckinLink($onlineCheckinLink)
            ->setPassengers($passengers)
            ->setQueue($queue)
            ->setSurcharges($surcharges)
            ->setTotalPrice($totalPrice)
            ->setWebFareConfirmationPage($webFareConfirmationPage);
    }
    /**
     * Get AdditionalInformation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalInformation()
    {
        return isset($this->AdditionalInformation) ? $this->AdditionalInformation : null;
    }
    /**
     * Set AdditionalInformation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additionalInformation
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR
     */
    public function setAdditionalInformation($additionalInformation = null)
    {
        // validation for constraint: string
        if (!is_null($additionalInformation) && !is_string($additionalInformation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalInformation)), __LINE__);
        }
        if (is_null($additionalInformation) || (is_array($additionalInformation) && empty($additionalInformation))) {
            unset($this->AdditionalInformation);
        } else {
            $this->AdditionalInformation = $additionalInformation;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR
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
     * Get FileKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFileKey()
    {
        return isset($this->FileKey) ? $this->FileKey : null;
    }
    /**
     * Set FileKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fileKey
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR
     */
    public function setFileKey($fileKey = null)
    {
        // validation for constraint: string
        if (!is_null($fileKey) && !is_string($fileKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileKey)), __LINE__);
        }
        if (is_null($fileKey) || (is_array($fileKey) && empty($fileKey))) {
            unset($this->FileKey);
        } else {
            $this->FileKey = $fileKey;
        }
        return $this;
    }
    /**
     * Get Legs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponseLeg|null
     */
    public function getLegs()
    {
        return isset($this->Legs) ? $this->Legs : null;
    }
    /**
     * Set Legs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponseLeg $legs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR
     */
    public function setLegs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponseLeg $legs = null)
    {
        if (is_null($legs) || (is_array($legs) && empty($legs))) {
            unset($this->Legs);
        } else {
            $this->Legs = $legs;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponsePassenger|null
     */
    public function getPassengers()
    {
        return isset($this->Passengers) ? $this->Passengers : null;
    }
    /**
     * Set Passengers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponsePassenger $passengers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR
     */
    public function setPassengers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponsePassenger $passengers = null)
    {
        if (is_null($passengers) || (is_array($passengers) && empty($passengers))) {
            unset($this->Passengers);
        } else {
            $this->Passengers = $passengers;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR
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
     * Get Surcharges value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonBookSurcharges|null
     */
    public function getSurcharges()
    {
        return isset($this->Surcharges) ? $this->Surcharges : null;
    }
    /**
     * Set Surcharges value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonBookSurcharges $surcharges
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR
     */
    public function setSurcharges(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonBookSurcharges $surcharges = null)
    {
        if (is_null($surcharges) || (is_array($surcharges) && empty($surcharges))) {
            unset($this->Surcharges);
        } else {
            $this->Surcharges = $surcharges;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR
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
