<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareTypeData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareTypeData
 * @subpackage Structs
 */
class FareTypeData extends AbstractStructBase
{
    /**
     * The AgentCompanyID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AgentCompanyID;
    /**
     * The AgentID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AgentID;
    /**
     * The CorporateCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CorporateCode;
    /**
     * The FareSubType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FareSubType;
    /**
     * The FareType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FareType;
    /**
     * The IsPercentage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPercentage;
    /**
     * Constructor method for FareTypeData
     * @uses FareTypeData::setAgentCompanyID()
     * @uses FareTypeData::setAgentID()
     * @uses FareTypeData::setCorporateCode()
     * @uses FareTypeData::setFareSubType()
     * @uses FareTypeData::setFareType()
     * @uses FareTypeData::setIsPercentage()
     * @param string $agentCompanyID
     * @param string $agentID
     * @param string $corporateCode
     * @param string $fareSubType
     * @param string $fareType
     * @param bool $isPercentage
     */
    public function __construct($agentCompanyID = null, $agentID = null, $corporateCode = null, $fareSubType = null, $fareType = null, $isPercentage = null)
    {
        $this
            ->setAgentCompanyID($agentCompanyID)
            ->setAgentID($agentID)
            ->setCorporateCode($corporateCode)
            ->setFareSubType($fareSubType)
            ->setFareType($fareType)
            ->setIsPercentage($isPercentage);
    }
    /**
     * Get AgentCompanyID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAgentCompanyID()
    {
        return isset($this->AgentCompanyID) ? $this->AgentCompanyID : null;
    }
    /**
     * Set AgentCompanyID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $agentCompanyID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData
     */
    public function setAgentCompanyID($agentCompanyID = null)
    {
        // validation for constraint: string
        if (!is_null($agentCompanyID) && !is_string($agentCompanyID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentCompanyID)), __LINE__);
        }
        if (is_null($agentCompanyID) || (is_array($agentCompanyID) && empty($agentCompanyID))) {
            unset($this->AgentCompanyID);
        } else {
            $this->AgentCompanyID = $agentCompanyID;
        }
        return $this;
    }
    /**
     * Get AgentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAgentID()
    {
        return isset($this->AgentID) ? $this->AgentID : null;
    }
    /**
     * Set AgentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $agentID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData
     */
    public function setAgentID($agentID = null)
    {
        // validation for constraint: string
        if (!is_null($agentID) && !is_string($agentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentID)), __LINE__);
        }
        if (is_null($agentID) || (is_array($agentID) && empty($agentID))) {
            unset($this->AgentID);
        } else {
            $this->AgentID = $agentID;
        }
        return $this;
    }
    /**
     * Get CorporateCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCorporateCode()
    {
        return isset($this->CorporateCode) ? $this->CorporateCode : null;
    }
    /**
     * Set CorporateCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $corporateCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData
     */
    public function setCorporateCode($corporateCode = null)
    {
        // validation for constraint: string
        if (!is_null($corporateCode) && !is_string($corporateCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($corporateCode)), __LINE__);
        }
        if (is_null($corporateCode) || (is_array($corporateCode) && empty($corporateCode))) {
            unset($this->CorporateCode);
        } else {
            $this->CorporateCode = $corporateCode;
        }
        return $this;
    }
    /**
     * Get FareSubType value
     * @return string|null
     */
    public function getFareSubType()
    {
        return $this->FareSubType;
    }
    /**
     * Set FareSubType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fareSubType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData
     */
    public function setFareSubType($fareSubType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::valueIsValid($fareSubType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fareSubType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::getValidValues())), __LINE__);
        }
        $this->FareSubType = $fareSubType;
        return $this;
    }
    /**
     * Get FareType value
     * @return string|null
     */
    public function getFareType()
    {
        return $this->FareType;
    }
    /**
     * Set FareType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QueryFareTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QueryFareTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fareType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData
     */
    public function setFareType($fareType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QueryFareTypeEnum::valueIsValid($fareType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fareType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QueryFareTypeEnum::getValidValues())), __LINE__);
        }
        $this->FareType = $fareType;
        return $this;
    }
    /**
     * Get IsPercentage value
     * @return bool|null
     */
    public function getIsPercentage()
    {
        return $this->IsPercentage;
    }
    /**
     * Set IsPercentage value
     * @param bool $isPercentage
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData
     */
    public function setIsPercentage($isPercentage = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPercentage) && !is_bool($isPercentage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPercentage)), __LINE__);
        }
        $this->IsPercentage = $isPercentage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData
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
