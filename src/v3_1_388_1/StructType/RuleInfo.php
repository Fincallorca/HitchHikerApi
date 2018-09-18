<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RuleInfo
 * @subpackage Structs
 */
class RuleInfo extends AbstractStructBase
{
    /**
     * The Exclude
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude;
    /**
     * The UsedRuleID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UsedRuleID;
    /**
     * The UsedRuleName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UsedRuleName;
    /**
     * Constructor method for RuleInfo
     * @uses RuleInfo::setExclude()
     * @uses RuleInfo::setUsedRuleID()
     * @uses RuleInfo::setUsedRuleName()
     * @param bool $exclude
     * @param string $usedRuleID
     * @param string $usedRuleName
     */
    public function __construct($exclude = null, $usedRuleID = null, $usedRuleName = null)
    {
        $this
            ->setExclude($exclude)
            ->setUsedRuleID($usedRuleID)
            ->setUsedRuleName($usedRuleName);
    }
    /**
     * Get Exclude value
     * @return bool|null
     */
    public function getExclude()
    {
        return $this->Exclude;
    }
    /**
     * Set Exclude value
     * @param bool $exclude
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleInfo
     */
    public function setExclude($exclude = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude) && !is_bool($exclude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exclude)), __LINE__);
        }
        $this->Exclude = $exclude;
        return $this;
    }
    /**
     * Get UsedRuleID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUsedRuleID()
    {
        return isset($this->UsedRuleID) ? $this->UsedRuleID : null;
    }
    /**
     * Set UsedRuleID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $usedRuleID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleInfo
     */
    public function setUsedRuleID($usedRuleID = null)
    {
        // validation for constraint: string
        if (!is_null($usedRuleID) && !is_string($usedRuleID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($usedRuleID)), __LINE__);
        }
        if (is_null($usedRuleID) || (is_array($usedRuleID) && empty($usedRuleID))) {
            unset($this->UsedRuleID);
        } else {
            $this->UsedRuleID = $usedRuleID;
        }
        return $this;
    }
    /**
     * Get UsedRuleName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUsedRuleName()
    {
        return isset($this->UsedRuleName) ? $this->UsedRuleName : null;
    }
    /**
     * Set UsedRuleName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $usedRuleName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleInfo
     */
    public function setUsedRuleName($usedRuleName = null)
    {
        // validation for constraint: string
        if (!is_null($usedRuleName) && !is_string($usedRuleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($usedRuleName)), __LINE__);
        }
        if (is_null($usedRuleName) || (is_array($usedRuleName) && empty($usedRuleName))) {
            unset($this->UsedRuleName);
        } else {
            $this->UsedRuleName = $usedRuleName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleInfo
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
