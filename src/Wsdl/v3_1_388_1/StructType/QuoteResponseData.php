<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuoteResponseData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QuoteResponseData
 * @subpackage Structs
 */
class QuoteResponseData extends AbstractStructBase
{
    /**
     * The Fares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseFare
     */
    public $Fares;
    /**
     * The ModuleInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData
     */
    public $ModuleInfo;
    /**
     * The ResponseInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails
     */
    public $ResponseInfo;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Source;
    /**
     * Constructor method for QuoteResponseData
     * @uses QuoteResponseData::setFares()
     * @uses QuoteResponseData::setModuleInfo()
     * @uses QuoteResponseData::setResponseInfo()
     * @uses QuoteResponseData::setSource()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseFare $fares
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo
     * @param string $source
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseFare $fares = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo = null, $source = null)
    {
        $this
            ->setFares($fares)
            ->setModuleInfo($moduleInfo)
            ->setResponseInfo($responseInfo)
            ->setSource($source);
    }
    /**
     * Get Fares value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseFare|null
     */
    public function getFares()
    {
        return isset($this->Fares) ? $this->Fares : null;
    }
    /**
     * Set Fares value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseFare $fares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseData
     */
    public function setFares(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseFare $fares = null)
    {
        if (is_null($fares) || (is_array($fares) && empty($fares))) {
            unset($this->Fares);
        } else {
            $this->Fares = $fares;
        }
        return $this;
    }
    /**
     * Get ModuleInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData|null
     */
    public function getModuleInfo()
    {
        return isset($this->ModuleInfo) ? $this->ModuleInfo : null;
    }
    /**
     * Set ModuleInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseData
     */
    public function setModuleInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo = null)
    {
        if (is_null($moduleInfo) || (is_array($moduleInfo) && empty($moduleInfo))) {
            unset($this->ModuleInfo);
        } else {
            $this->ModuleInfo = $moduleInfo;
        }
        return $this;
    }
    /**
     * Get ResponseInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails|null
     */
    public function getResponseInfo()
    {
        return isset($this->ResponseInfo) ? $this->ResponseInfo : null;
    }
    /**
     * Set ResponseInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseData
     */
    public function setResponseInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo = null)
    {
        if (is_null($responseInfo) || (is_array($responseInfo) && empty($responseInfo))) {
            unset($this->ResponseInfo);
        } else {
            $this->ResponseInfo = $responseInfo;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseData
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
