<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseRuleData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BaseRuleData
 * @subpackage Structs
 */
class BaseRuleData extends AbstractStructBase
{
    /**
     * The Hierarchy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Hierarchy;
    /**
     * The Inactive
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * The RuleGUID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RuleGUID;
    /**
     * The RuleName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RuleName;
    /**
     * Constructor method for BaseRuleData
     * @uses BaseRuleData::setHierarchy()
     * @uses BaseRuleData::setInactive()
     * @uses BaseRuleData::setRuleGUID()
     * @uses BaseRuleData::setRuleName()
     * @param int $hierarchy
     * @param bool $inactive
     * @param string $ruleGUID
     * @param string $ruleName
     */
    public function __construct($hierarchy = null, $inactive = null, $ruleGUID = null, $ruleName = null)
    {
        $this
            ->setHierarchy($hierarchy)
            ->setInactive($inactive)
            ->setRuleGUID($ruleGUID)
            ->setRuleName($ruleName);
    }
    /**
     * Get Hierarchy value
     * @return int|null
     */
    public function getHierarchy()
    {
        return $this->Hierarchy;
    }
    /**
     * Set Hierarchy value
     * @param int $hierarchy
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BaseRuleData
     */
    public function setHierarchy($hierarchy = null)
    {
        // validation for constraint: int
        if (!is_null($hierarchy) && !is_numeric($hierarchy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($hierarchy)), __LINE__);
        }
        $this->Hierarchy = $hierarchy;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BaseRuleData
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Get RuleGUID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRuleGUID()
    {
        return isset($this->RuleGUID) ? $this->RuleGUID : null;
    }
    /**
     * Set RuleGUID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ruleGUID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BaseRuleData
     */
    public function setRuleGUID($ruleGUID = null)
    {
        // validation for constraint: string
        if (!is_null($ruleGUID) && !is_string($ruleGUID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ruleGUID)), __LINE__);
        }
        if (is_null($ruleGUID) || (is_array($ruleGUID) && empty($ruleGUID))) {
            unset($this->RuleGUID);
        } else {
            $this->RuleGUID = $ruleGUID;
        }
        return $this;
    }
    /**
     * Get RuleName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRuleName()
    {
        return isset($this->RuleName) ? $this->RuleName : null;
    }
    /**
     * Set RuleName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ruleName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BaseRuleData
     */
    public function setRuleName($ruleName = null)
    {
        // validation for constraint: string
        if (!is_null($ruleName) && !is_string($ruleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ruleName)), __LINE__);
        }
        if (is_null($ruleName) || (is_array($ruleName) && empty($ruleName))) {
            unset($this->RuleName);
        } else {
            $this->RuleName = $ruleName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BaseRuleData
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
