<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetailsResponseData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DetailsResponseData
 * @subpackage Structs
 */
class DetailsResponseData extends AbstractStructBase
{
    /**
     * The Legs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseLeg
     */
    public $Legs;
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
     * The TotalTravelTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true | true
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string
     */
    public $TotalTravelTime;
    /**
     * Constructor method for DetailsResponseData
     * @uses DetailsResponseData::setLegs()
     * @uses DetailsResponseData::setModuleInfo()
     * @uses DetailsResponseData::setResponseInfo()
     * @uses DetailsResponseData::setSource()
     * @uses DetailsResponseData::setTotalTravelTime()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseLeg $legs
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo
     * @param string $source
     * @param string $totalTravelTime
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseLeg $legs = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo = null, $source = null, $totalTravelTime = null)
    {
        $this
            ->setLegs($legs)
            ->setModuleInfo($moduleInfo)
            ->setResponseInfo($responseInfo)
            ->setSource($source)
            ->setTotalTravelTime($totalTravelTime);
    }
    /**
     * Get Legs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseLeg|null
     */
    public function getLegs()
    {
        return isset($this->Legs) ? $this->Legs : null;
    }
    /**
     * Set Legs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseLeg $legs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseData
     */
    public function setLegs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseLeg $legs = null)
    {
        if (is_null($legs) || (is_array($legs) && empty($legs))) {
            unset($this->Legs);
        } else {
            $this->Legs = $legs;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseData
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
     * Get TotalTravelTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTotalTravelTime()
    {
        return isset($this->TotalTravelTime) ? $this->TotalTravelTime : null;
    }
    /**
     * Set TotalTravelTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $totalTravelTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseData
     */
    public function setTotalTravelTime($totalTravelTime = null)
    {
        // validation for constraint: maxInclusive
        if ($totalTravelTime > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $totalTravelTime), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($totalTravelTime < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $totalTravelTime), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($totalTravelTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $totalTravelTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($totalTravelTime, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($totalTravelTime) && !is_string($totalTravelTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($totalTravelTime)), __LINE__);
        }
        if (is_null($totalTravelTime) || (is_array($totalTravelTime) && empty($totalTravelTime))) {
            unset($this->TotalTravelTime);
        } else {
            $this->TotalTravelTime = $totalTravelTime;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseData
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
