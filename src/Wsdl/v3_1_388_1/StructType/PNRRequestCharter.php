<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRRequestCharter StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PNRRequestCharter
 * @subpackage Structs
 */
class PNRRequestCharter extends AbstractStructBase
{
    /**
     * The Account
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount
     */
    public $Account;
    /**
     * The ContactPerson
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public $ContactPerson;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CurrencyCode;
    /**
     * The IsLiveBooking
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
     * Constructor method for PNRRequestCharter
     * @uses PNRRequestCharter::setAccount()
     * @uses PNRRequestCharter::setContactPerson()
     * @uses PNRRequestCharter::setCurrencyCode()
     * @uses PNRRequestCharter::setIsLiveBooking()
     * @uses PNRRequestCharter::setLanguageCode()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount $account
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $contactPerson
     * @param string $currencyCode
     * @param bool $isLiveBooking
     * @param string $languageCode
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount $account = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $contactPerson = null, $currencyCode = null, $isLiveBooking = null, $languageCode = null)
    {
        $this
            ->setAccount($account)
            ->setContactPerson($contactPerson)
            ->setCurrencyCode($currencyCode)
            ->setIsLiveBooking($isLiveBooking)
            ->setLanguageCode($languageCode);
    }
    /**
     * Get Account value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount|null
     */
    public function getAccount()
    {
        return $this->Account;
    }
    /**
     * Set Account value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount $account
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestCharter
     */
    public function setAccount(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount $account = null)
    {
        $this->Account = $account;
        return $this;
    }
    /**
     * Get ContactPerson value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact|null
     */
    public function getContactPerson()
    {
        return isset($this->ContactPerson) ? $this->ContactPerson : null;
    }
    /**
     * Set ContactPerson value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $contactPerson
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestCharter
     */
    public function setContactPerson(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $contactPerson = null)
    {
        if (is_null($contactPerson) || (is_array($contactPerson) && empty($contactPerson))) {
            unset($this->ContactPerson);
        } else {
            $this->ContactPerson = $contactPerson;
        }
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestCharter
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestCharter
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestCharter
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestCharter
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
