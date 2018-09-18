<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxesAndFeesConfig StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TaxesAndFeesConfig
 * @subpackage Structs
 */
class TaxesAndFeesConfig extends AbstractStructBase
{
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
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesCharter
     */
    public $Charter;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CurrencyCode;
    /**
     * The CustomerReferenceNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CustomerReferenceNo;
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LanguageCode;
    /**
     * The Recordset
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Recordset;
    /**
     * The ReturnQSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnQSurcharge;
    /**
     * The VayantConfig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant
     */
    public $VayantConfig;
    /**
     * The WebFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesWeb
     */
    public $WebFare;
    /**
     * Constructor method for TaxesAndFeesConfig
     * @uses TaxesAndFeesConfig::setCRSConfig()
     * @uses TaxesAndFeesConfig::setCharter()
     * @uses TaxesAndFeesConfig::setCurrencyCode()
     * @uses TaxesAndFeesConfig::setCustomerReferenceNo()
     * @uses TaxesAndFeesConfig::setLanguageCode()
     * @uses TaxesAndFeesConfig::setRecordset()
     * @uses TaxesAndFeesConfig::setReturnQSurcharge()
     * @uses TaxesAndFeesConfig::setVayantConfig()
     * @uses TaxesAndFeesConfig::setWebFare()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesCharter $charter
     * @param string $currencyCode
     * @param string $customerReferenceNo
     * @param string $languageCode
     * @param string $recordset
     * @param bool $returnQSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant $vayantConfig
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesWeb $webFare
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesCharter $charter = null, $currencyCode = null, $customerReferenceNo = null, $languageCode = null, $recordset = null, $returnQSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant $vayantConfig = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesWeb $webFare = null)
    {
        $this
            ->setCRSConfig($cRSConfig)
            ->setCharter($charter)
            ->setCurrencyCode($currencyCode)
            ->setCustomerReferenceNo($customerReferenceNo)
            ->setLanguageCode($languageCode)
            ->setRecordset($recordset)
            ->setReturnQSurcharge($returnQSurcharge)
            ->setVayantConfig($vayantConfig)
            ->setWebFare($webFare);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesConfig
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesCharter|null
     */
    public function getCharter()
    {
        return isset($this->Charter) ? $this->Charter : null;
    }
    /**
     * Set Charter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesCharter $charter
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesConfig
     */
    public function setCharter(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesCharter $charter = null)
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
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesConfig
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
     * Get CustomerReferenceNo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerReferenceNo()
    {
        return isset($this->CustomerReferenceNo) ? $this->CustomerReferenceNo : null;
    }
    /**
     * Set CustomerReferenceNo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerReferenceNo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesConfig
     */
    public function setCustomerReferenceNo($customerReferenceNo = null)
    {
        // validation for constraint: string
        if (!is_null($customerReferenceNo) && !is_string($customerReferenceNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerReferenceNo)), __LINE__);
        }
        if (is_null($customerReferenceNo) || (is_array($customerReferenceNo) && empty($customerReferenceNo))) {
            unset($this->CustomerReferenceNo);
        } else {
            $this->CustomerReferenceNo = $customerReferenceNo;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesConfig
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
     * Get Recordset value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecordset()
    {
        return isset($this->Recordset) ? $this->Recordset : null;
    }
    /**
     * Set Recordset value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recordset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesConfig
     */
    public function setRecordset($recordset = null)
    {
        // validation for constraint: string
        if (!is_null($recordset) && !is_string($recordset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordset)), __LINE__);
        }
        if (is_null($recordset) || (is_array($recordset) && empty($recordset))) {
            unset($this->Recordset);
        } else {
            $this->Recordset = $recordset;
        }
        return $this;
    }
    /**
     * Get ReturnQSurcharge value
     * @return bool|null
     */
    public function getReturnQSurcharge()
    {
        return $this->ReturnQSurcharge;
    }
    /**
     * Set ReturnQSurcharge value
     * @param bool $returnQSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesConfig
     */
    public function setReturnQSurcharge($returnQSurcharge = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnQSurcharge) && !is_bool($returnQSurcharge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnQSurcharge)), __LINE__);
        }
        $this->ReturnQSurcharge = $returnQSurcharge;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesConfig
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
     * Get WebFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesWeb|null
     */
    public function getWebFare()
    {
        return isset($this->WebFare) ? $this->WebFare : null;
    }
    /**
     * Set WebFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesWeb $webFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesConfig
     */
    public function setWebFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesWeb $webFare = null)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesConfig
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
