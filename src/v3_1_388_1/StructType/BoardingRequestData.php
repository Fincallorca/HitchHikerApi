<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BoardingRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BoardingRequestData
 * @subpackage Structs
 */
class BoardingRequestData extends AbstractStructBase
{
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CarrierCode;
    /**
     * The Configuration
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestConfiguration
     */
    public $Configuration;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CurrencyCode;
    /**
     * The Departure
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Departure;
    /**
     * The DepartureDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DepartureDate;
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $LanguageCode;
    /**
     * The Recordset
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Recordset;
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * Constructor method for BoardingRequestData
     * @uses BoardingRequestData::setCarrierCode()
     * @uses BoardingRequestData::setConfiguration()
     * @uses BoardingRequestData::setCurrencyCode()
     * @uses BoardingRequestData::setDeparture()
     * @uses BoardingRequestData::setDepartureDate()
     * @uses BoardingRequestData::setLanguageCode()
     * @uses BoardingRequestData::setRecordset()
     * @uses BoardingRequestData::setSource()
     * @param string $carrierCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestConfiguration $configuration
     * @param string $currencyCode
     * @param string $departure
     * @param string $departureDate
     * @param string $languageCode
     * @param string $recordset
     * @param string $source
     */
    public function __construct($carrierCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestConfiguration $configuration = null, $currencyCode = null, $departure = null, $departureDate = null, $languageCode = null, $recordset = null, $source = null)
    {
        $this
            ->setCarrierCode($carrierCode)
            ->setConfiguration($configuration)
            ->setCurrencyCode($currencyCode)
            ->setDeparture($departure)
            ->setDepartureDate($departureDate)
            ->setLanguageCode($languageCode)
            ->setRecordset($recordset)
            ->setSource($source);
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @param string $carrierCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestData
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierCode)), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get Configuration value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestConfiguration|null
     */
    public function getConfiguration()
    {
        return $this->Configuration;
    }
    /**
     * Set Configuration value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestConfiguration $configuration
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestData
     */
    public function setConfiguration(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestConfiguration $configuration = null)
    {
        $this->Configuration = $configuration;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestData
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
     * Get Departure value
     * @return string|null
     */
    public function getDeparture()
    {
        return $this->Departure;
    }
    /**
     * Set Departure value
     * @param string $departure
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestData
     */
    public function setDeparture($departure = null)
    {
        // validation for constraint: string
        if (!is_null($departure) && !is_string($departure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departure)), __LINE__);
        }
        $this->Departure = $departure;
        return $this;
    }
    /**
     * Get DepartureDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDepartureDate()
    {
        return isset($this->DepartureDate) ? $this->DepartureDate : null;
    }
    /**
     * Set DepartureDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $departureDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestData
     */
    public function setDepartureDate($departureDate = null)
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDate)), __LINE__);
        }
        if (is_null($departureDate) || (is_array($departureDate) && empty($departureDate))) {
            unset($this->DepartureDate);
        } else {
            $this->DepartureDate = $departureDate;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestData
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
     * Get Recordset value
     * @return string|null
     */
    public function getRecordset()
    {
        return $this->Recordset;
    }
    /**
     * Set Recordset value
     * @param string $recordset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestData
     */
    public function setRecordset($recordset = null)
    {
        // validation for constraint: string
        if (!is_null($recordset) && !is_string($recordset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordset)), __LINE__);
        }
        $this->Recordset = $recordset;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestData
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestData
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
