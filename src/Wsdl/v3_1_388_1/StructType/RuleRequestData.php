<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RuleRequestData
 * @subpackage Structs
 */
class RuleRequestData extends AbstractStructBase
{
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CurrencyCode;
    /**
     * The IsRoundtrip
     * @var bool
     */
    public $IsRoundtrip;
    /**
     * The RecordSets
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $RecordSets;
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * Constructor method for RuleRequestData
     * @uses RuleRequestData::setCurrencyCode()
     * @uses RuleRequestData::setIsRoundtrip()
     * @uses RuleRequestData::setRecordSets()
     * @uses RuleRequestData::setSource()
     * @param string $currencyCode
     * @param bool $isRoundtrip
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $recordSets
     * @param string $source
     */
    public function __construct($currencyCode = null, $isRoundtrip = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $recordSets = null, $source = null)
    {
        $this
            ->setCurrencyCode($currencyCode)
            ->setIsRoundtrip($isRoundtrip)
            ->setRecordSets($recordSets)
            ->setSource($source);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleRequestData
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
     * Get IsRoundtrip value
     * @return bool|null
     */
    public function getIsRoundtrip()
    {
        return $this->IsRoundtrip;
    }
    /**
     * Set IsRoundtrip value
     * @param bool $isRoundtrip
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleRequestData
     */
    public function setIsRoundtrip($isRoundtrip = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRoundtrip) && !is_bool($isRoundtrip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRoundtrip)), __LINE__);
        }
        $this->IsRoundtrip = $isRoundtrip;
        return $this;
    }
    /**
     * Get RecordSets value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getRecordSets()
    {
        return $this->RecordSets;
    }
    /**
     * Set RecordSets value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $recordSets
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleRequestData
     */
    public function setRecordSets(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $recordSets = null)
    {
        $this->RecordSets = $recordSets;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleRequestData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleRequestData
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
