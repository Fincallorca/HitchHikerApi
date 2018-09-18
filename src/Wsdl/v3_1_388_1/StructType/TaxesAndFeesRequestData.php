<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxesAndFeesRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TaxesAndFeesRequestData
 * @subpackage Structs
 */
class TaxesAndFeesRequestData extends AbstractStructBase
{
    /**
     * The Config
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesConfig
     */
    public $Config;
    /**
     * The Legs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestLeg
     */
    public $Legs;
    /**
     * The MatchCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MatchCode;
    /**
     * The PassengerTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestPassenger
     */
    public $PassengerTypes;
    /**
     * The PublishedTaxOverrideDBCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PublishedTaxOverrideDBCode;
    /**
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RecordLocator;
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * Constructor method for TaxesAndFeesRequestData
     * @uses TaxesAndFeesRequestData::setConfig()
     * @uses TaxesAndFeesRequestData::setLegs()
     * @uses TaxesAndFeesRequestData::setMatchCode()
     * @uses TaxesAndFeesRequestData::setPassengerTypes()
     * @uses TaxesAndFeesRequestData::setPublishedTaxOverrideDBCode()
     * @uses TaxesAndFeesRequestData::setRecordLocator()
     * @uses TaxesAndFeesRequestData::setSource()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesConfig $config
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestLeg $legs
     * @param string $matchCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestPassenger $passengerTypes
     * @param string $publishedTaxOverrideDBCode
     * @param string $recordLocator
     * @param string $source
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesConfig $config = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestLeg $legs = null, $matchCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestPassenger $passengerTypes = null, $publishedTaxOverrideDBCode = null, $recordLocator = null, $source = null)
    {
        $this
            ->setConfig($config)
            ->setLegs($legs)
            ->setMatchCode($matchCode)
            ->setPassengerTypes($passengerTypes)
            ->setPublishedTaxOverrideDBCode($publishedTaxOverrideDBCode)
            ->setRecordLocator($recordLocator)
            ->setSource($source);
    }
    /**
     * Get Config value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesConfig|null
     */
    public function getConfig()
    {
        return $this->Config;
    }
    /**
     * Set Config value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesConfig $config
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesRequestData
     */
    public function setConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesConfig $config = null)
    {
        $this->Config = $config;
        return $this;
    }
    /**
     * Get Legs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestLeg|null
     */
    public function getLegs()
    {
        return isset($this->Legs) ? $this->Legs : null;
    }
    /**
     * Set Legs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestLeg $legs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesRequestData
     */
    public function setLegs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestLeg $legs = null)
    {
        if (is_null($legs) || (is_array($legs) && empty($legs))) {
            unset($this->Legs);
        } else {
            $this->Legs = $legs;
        }
        return $this;
    }
    /**
     * Get MatchCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMatchCode()
    {
        return isset($this->MatchCode) ? $this->MatchCode : null;
    }
    /**
     * Set MatchCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $matchCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesRequestData
     */
    public function setMatchCode($matchCode = null)
    {
        // validation for constraint: string
        if (!is_null($matchCode) && !is_string($matchCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($matchCode)), __LINE__);
        }
        if (is_null($matchCode) || (is_array($matchCode) && empty($matchCode))) {
            unset($this->MatchCode);
        } else {
            $this->MatchCode = $matchCode;
        }
        return $this;
    }
    /**
     * Get PassengerTypes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestPassenger|null
     */
    public function getPassengerTypes()
    {
        return isset($this->PassengerTypes) ? $this->PassengerTypes : null;
    }
    /**
     * Set PassengerTypes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestPassenger $passengerTypes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesRequestData
     */
    public function setPassengerTypes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestPassenger $passengerTypes = null)
    {
        if (is_null($passengerTypes) || (is_array($passengerTypes) && empty($passengerTypes))) {
            unset($this->PassengerTypes);
        } else {
            $this->PassengerTypes = $passengerTypes;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesRequestData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesRequestData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesRequestData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesRequestData
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
