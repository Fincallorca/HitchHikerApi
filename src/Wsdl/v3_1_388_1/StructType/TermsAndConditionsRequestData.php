<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TermsAndConditionsRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TermsAndConditionsRequestData
 * @subpackage Structs
 */
class TermsAndConditionsRequestData extends AbstractStructBase
{
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CarrierCode;
    /**
     * The Charter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TermsAndConditionsRequestCharter
     */
    public $Charter;
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $LanguageCode;
    /**
     * The RecordSet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RecordSet;
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * Constructor method for TermsAndConditionsRequestData
     * @uses TermsAndConditionsRequestData::setCarrierCode()
     * @uses TermsAndConditionsRequestData::setCharter()
     * @uses TermsAndConditionsRequestData::setLanguageCode()
     * @uses TermsAndConditionsRequestData::setRecordSet()
     * @uses TermsAndConditionsRequestData::setSource()
     * @param string $carrierCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TermsAndConditionsRequestCharter $charter
     * @param string $languageCode
     * @param string $recordSet
     * @param string $source
     */
    public function __construct($carrierCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TermsAndConditionsRequestCharter $charter = null, $languageCode = null, $recordSet = null, $source = null)
    {
        $this
            ->setCarrierCode($carrierCode)
            ->setCharter($charter)
            ->setLanguageCode($languageCode)
            ->setRecordSet($recordSet)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TermsAndConditionsRequestData
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
     * Get Charter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TermsAndConditionsRequestCharter|null
     */
    public function getCharter()
    {
        return isset($this->Charter) ? $this->Charter : null;
    }
    /**
     * Set Charter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TermsAndConditionsRequestCharter $charter
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TermsAndConditionsRequestData
     */
    public function setCharter(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TermsAndConditionsRequestCharter $charter = null)
    {
        if (is_null($charter) || (is_array($charter) && empty($charter))) {
            unset($this->Charter);
        } else {
            $this->Charter = $charter;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TermsAndConditionsRequestData
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
     * Get RecordSet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecordSet()
    {
        return isset($this->RecordSet) ? $this->RecordSet : null;
    }
    /**
     * Set RecordSet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recordSet
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TermsAndConditionsRequestData
     */
    public function setRecordSet($recordSet = null)
    {
        // validation for constraint: string
        if (!is_null($recordSet) && !is_string($recordSet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordSet)), __LINE__);
        }
        if (is_null($recordSet) || (is_array($recordSet) && empty($recordSet))) {
            unset($this->RecordSet);
        } else {
            $this->RecordSet = $recordSet;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TermsAndConditionsRequestData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TermsAndConditionsRequestData
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
