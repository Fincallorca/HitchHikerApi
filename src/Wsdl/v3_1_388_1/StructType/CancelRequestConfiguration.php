<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelRequestConfiguration StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CancelRequestConfiguration
 * @subpackage Structs
 */
class CancelRequestConfiguration extends AbstractStructBase
{
    /**
     * The AgencyPhone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AgencyPhone;
    /**
     * The AllotmentAccountData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount
     */
    public $AllotmentAccountData;
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
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CurrencyCode;
    /**
     * The CustomerReferenceNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CustomerReferenceNumber;
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LanguageCode;
    /**
     * Constructor method for CancelRequestConfiguration
     * @uses CancelRequestConfiguration::setAgencyPhone()
     * @uses CancelRequestConfiguration::setAllotmentAccountData()
     * @uses CancelRequestConfiguration::setClientBusinessPhone()
     * @uses CancelRequestConfiguration::setClientHomePhone()
     * @uses CancelRequestConfiguration::setCurrencyCode()
     * @uses CancelRequestConfiguration::setCustomerReferenceNumber()
     * @uses CancelRequestConfiguration::setLanguageCode()
     * @param string $agencyPhone
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentAccountData
     * @param string $clientBusinessPhone
     * @param string $clientHomePhone
     * @param string $currencyCode
     * @param string $customerReferenceNumber
     * @param string $languageCode
     */
    public function __construct($agencyPhone = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentAccountData = null, $clientBusinessPhone = null, $clientHomePhone = null, $currencyCode = null, $customerReferenceNumber = null, $languageCode = null)
    {
        $this
            ->setAgencyPhone($agencyPhone)
            ->setAllotmentAccountData($allotmentAccountData)
            ->setClientBusinessPhone($clientBusinessPhone)
            ->setClientHomePhone($clientHomePhone)
            ->setCurrencyCode($currencyCode)
            ->setCustomerReferenceNumber($customerReferenceNumber)
            ->setLanguageCode($languageCode);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestConfiguration
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
     * Get AllotmentAccountData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount|null
     */
    public function getAllotmentAccountData()
    {
        return isset($this->AllotmentAccountData) ? $this->AllotmentAccountData : null;
    }
    /**
     * Set AllotmentAccountData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentAccountData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestConfiguration
     */
    public function setAllotmentAccountData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentAccountData = null)
    {
        if (is_null($allotmentAccountData) || (is_array($allotmentAccountData) && empty($allotmentAccountData))) {
            unset($this->AllotmentAccountData);
        } else {
            $this->AllotmentAccountData = $allotmentAccountData;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestConfiguration
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestConfiguration
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestConfiguration
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestConfiguration
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestConfiguration
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestConfiguration
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
