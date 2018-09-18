<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCardRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CreditCardRequest
 * @subpackage Structs
 */
class CreditCardRequest extends AbstractStructBase
{
    /**
     * The Account
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AccountData
     */
    public $Account;
    /**
     * The BookingID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $BookingID;
    /**
     * The Card
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData
     */
    public $Card;
    /**
     * The Price
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PriceData
     */
    public $Price;
    /**
     * The Provider
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Provider;
    /**
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $RecordLocator;
    /**
     * The RefNr
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RefNr;
    /**
     * The RefText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RefText;
    /**
     * The TestMode
     * @var bool
     */
    public $TestMode;
    /**
     * Constructor method for CreditCardRequest
     * @uses CreditCardRequest::setAccount()
     * @uses CreditCardRequest::setBookingID()
     * @uses CreditCardRequest::setCard()
     * @uses CreditCardRequest::setPrice()
     * @uses CreditCardRequest::setProvider()
     * @uses CreditCardRequest::setRecordLocator()
     * @uses CreditCardRequest::setRefNr()
     * @uses CreditCardRequest::setRefText()
     * @uses CreditCardRequest::setTestMode()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AccountData $account
     * @param string $bookingID
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData $card
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PriceData $price
     * @param string $provider
     * @param string $recordLocator
     * @param string $refNr
     * @param string $refText
     * @param bool $testMode
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AccountData $account = null, $bookingID = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData $card = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PriceData $price = null, $provider = null, $recordLocator = null, $refNr = null, $refText = null, $testMode = null)
    {
        $this
            ->setAccount($account)
            ->setBookingID($bookingID)
            ->setCard($card)
            ->setPrice($price)
            ->setProvider($provider)
            ->setRecordLocator($recordLocator)
            ->setRefNr($refNr)
            ->setRefText($refText)
            ->setTestMode($testMode);
    }
    /**
     * Get Account value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AccountData|null
     */
    public function getAccount()
    {
        return $this->Account;
    }
    /**
     * Set Account value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AccountData $account
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardRequest
     */
    public function setAccount(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AccountData $account = null)
    {
        $this->Account = $account;
        return $this;
    }
    /**
     * Get BookingID value
     * @return string|null
     */
    public function getBookingID()
    {
        return $this->BookingID;
    }
    /**
     * Set BookingID value
     * @param string $bookingID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardRequest
     */
    public function setBookingID($bookingID = null)
    {
        // validation for constraint: string
        if (!is_null($bookingID) && !is_string($bookingID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingID)), __LINE__);
        }
        $this->BookingID = $bookingID;
        return $this;
    }
    /**
     * Get Card value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData|null
     */
    public function getCard()
    {
        return $this->Card;
    }
    /**
     * Set Card value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData $card
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardRequest
     */
    public function setCard(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData $card = null)
    {
        $this->Card = $card;
        return $this;
    }
    /**
     * Get Price value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PriceData|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PriceData $price
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardRequest
     */
    public function setPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PriceData $price = null)
    {
        $this->Price = $price;
        return $this;
    }
    /**
     * Get Provider value
     * @return string|null
     */
    public function getProvider()
    {
        return $this->Provider;
    }
    /**
     * Set Provider value
     * @param string $provider
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardRequest
     */
    public function setProvider($provider = null)
    {
        // validation for constraint: string
        if (!is_null($provider) && !is_string($provider)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($provider)), __LINE__);
        }
        $this->Provider = $provider;
        return $this;
    }
    /**
     * Get RecordLocator value
     * @return string|null
     */
    public function getRecordLocator()
    {
        return $this->RecordLocator;
    }
    /**
     * Set RecordLocator value
     * @param string $recordLocator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardRequest
     */
    public function setRecordLocator($recordLocator = null)
    {
        // validation for constraint: string
        if (!is_null($recordLocator) && !is_string($recordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordLocator)), __LINE__);
        }
        $this->RecordLocator = $recordLocator;
        return $this;
    }
    /**
     * Get RefNr value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRefNr()
    {
        return isset($this->RefNr) ? $this->RefNr : null;
    }
    /**
     * Set RefNr value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $refNr
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardRequest
     */
    public function setRefNr($refNr = null)
    {
        // validation for constraint: string
        if (!is_null($refNr) && !is_string($refNr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refNr)), __LINE__);
        }
        if (is_null($refNr) || (is_array($refNr) && empty($refNr))) {
            unset($this->RefNr);
        } else {
            $this->RefNr = $refNr;
        }
        return $this;
    }
    /**
     * Get RefText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRefText()
    {
        return isset($this->RefText) ? $this->RefText : null;
    }
    /**
     * Set RefText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $refText
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardRequest
     */
    public function setRefText($refText = null)
    {
        // validation for constraint: string
        if (!is_null($refText) && !is_string($refText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refText)), __LINE__);
        }
        if (is_null($refText) || (is_array($refText) && empty($refText))) {
            unset($this->RefText);
        } else {
            $this->RefText = $refText;
        }
        return $this;
    }
    /**
     * Get TestMode value
     * @return bool|null
     */
    public function getTestMode()
    {
        return $this->TestMode;
    }
    /**
     * Set TestMode value
     * @param bool $testMode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardRequest
     */
    public function setTestMode($testMode = null)
    {
        // validation for constraint: boolean
        if (!is_null($testMode) && !is_bool($testMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($testMode)), __LINE__);
        }
        $this->TestMode = $testMode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardRequest
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
