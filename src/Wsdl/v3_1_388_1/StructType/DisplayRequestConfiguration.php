<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayRequestConfiguration StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayRequestConfiguration
 * @subpackage Structs
 */
class DisplayRequestConfiguration extends AbstractStructBase
{
    /**
     * The AdditionalDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalDetails;
    /**
     * The CRSConfig
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public $CRSConfig;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CurrencyCode;
    /**
     * The EarliestTicketingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EarliestTicketingDate;
    /**
     * The PaymentFilters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilter
     */
    public $PaymentFilters;
    /**
     * The PaymentInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PaymentInfo;
    /**
     * The ReturnDirectFlightsOnly
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnDirectFlightsOnly;
    /**
     * The SortBy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SortBy;
    /**
     * The VayantConfig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant
     */
    public $VayantConfig;
    /**
     * Constructor method for DisplayRequestConfiguration
     * @uses DisplayRequestConfiguration::setAdditionalDetails()
     * @uses DisplayRequestConfiguration::setCRSConfig()
     * @uses DisplayRequestConfiguration::setCurrencyCode()
     * @uses DisplayRequestConfiguration::setEarliestTicketingDate()
     * @uses DisplayRequestConfiguration::setPaymentFilters()
     * @uses DisplayRequestConfiguration::setPaymentInfo()
     * @uses DisplayRequestConfiguration::setReturnDirectFlightsOnly()
     * @uses DisplayRequestConfiguration::setSortBy()
     * @uses DisplayRequestConfiguration::setVayantConfig()
     * @param string $additionalDetails
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @param string $currencyCode
     * @param string $earliestTicketingDate
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilter $paymentFilters
     * @param string $paymentInfo
     * @param bool $returnDirectFlightsOnly
     * @param string $sortBy
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant $vayantConfig
     */
    public function __construct($additionalDetails = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null, $currencyCode = null, $earliestTicketingDate = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilter $paymentFilters = null, $paymentInfo = null, $returnDirectFlightsOnly = null, $sortBy = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant $vayantConfig = null)
    {
        $this
            ->setAdditionalDetails($additionalDetails)
            ->setCRSConfig($cRSConfig)
            ->setCurrencyCode($currencyCode)
            ->setEarliestTicketingDate($earliestTicketingDate)
            ->setPaymentFilters($paymentFilters)
            ->setPaymentInfo($paymentInfo)
            ->setReturnDirectFlightsOnly($returnDirectFlightsOnly)
            ->setSortBy($sortBy)
            ->setVayantConfig($vayantConfig);
    }
    /**
     * Get AdditionalDetails value
     * @return string|null
     */
    public function getAdditionalDetails()
    {
        return $this->AdditionalDetails;
    }
    /**
     * Set AdditionalDetails value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AdditionalDetailEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AdditionalDetailEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $additionalDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConfiguration
     */
    public function setAdditionalDetails($additionalDetails = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AdditionalDetailEnum::valueIsValid($additionalDetails)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $additionalDetails, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AdditionalDetailEnum::getValidValues())), __LINE__);
        }
        $this->AdditionalDetails = $additionalDetails;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConfiguration
     */
    public function setCRSConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null)
    {
        $this->CRSConfig = $cRSConfig;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConfiguration
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConfiguration
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
     * Get PaymentFilters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilter|null
     */
    public function getPaymentFilters()
    {
        return isset($this->PaymentFilters) ? $this->PaymentFilters : null;
    }
    /**
     * Set PaymentFilters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilter $paymentFilters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConfiguration
     */
    public function setPaymentFilters(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilter $paymentFilters = null)
    {
        if (is_null($paymentFilters) || (is_array($paymentFilters) && empty($paymentFilters))) {
            unset($this->PaymentFilters);
        } else {
            $this->PaymentFilters = $paymentFilters;
        }
        return $this;
    }
    /**
     * Get PaymentInfo value
     * @return string|null
     */
    public function getPaymentInfo()
    {
        return $this->PaymentInfo;
    }
    /**
     * Set PaymentInfo value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConfiguration
     */
    public function setPaymentInfo($paymentInfo = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::valueIsValid($paymentInfo)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentInfo, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::getValidValues())), __LINE__);
        }
        $this->PaymentInfo = $paymentInfo;
        return $this;
    }
    /**
     * Get ReturnDirectFlightsOnly value
     * @return bool|null
     */
    public function getReturnDirectFlightsOnly()
    {
        return $this->ReturnDirectFlightsOnly;
    }
    /**
     * Set ReturnDirectFlightsOnly value
     * @param bool $returnDirectFlightsOnly
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConfiguration
     */
    public function setReturnDirectFlightsOnly($returnDirectFlightsOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnDirectFlightsOnly) && !is_bool($returnDirectFlightsOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnDirectFlightsOnly)), __LINE__);
        }
        $this->ReturnDirectFlightsOnly = $returnDirectFlightsOnly;
        return $this;
    }
    /**
     * Get SortBy value
     * @return string|null
     */
    public function getSortBy()
    {
        return $this->SortBy;
    }
    /**
     * Set SortBy value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SortEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SortEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sortBy
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConfiguration
     */
    public function setSortBy($sortBy = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SortEnum::valueIsValid($sortBy)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sortBy, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SortEnum::getValidValues())), __LINE__);
        }
        $this->SortBy = $sortBy;
        return $this;
    }
    /**
     * Get VayantConfig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant|null
     */
    public function getVayantConfig()
    {
        return isset($this->VayantConfig) ? $this->VayantConfig : null;
    }
    /**
     * Set VayantConfig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant $vayantConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConfiguration
     */
    public function setVayantConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant $vayantConfig = null)
    {
        if (is_null($vayantConfig) || (is_array($vayantConfig) && empty($vayantConfig))) {
            unset($this->VayantConfig);
        } else {
            $this->VayantConfig = $vayantConfig;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConfiguration
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
