<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRuleResponseRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRuleResponseRule
 * @subpackage Arrays
 */
class ArrayOfRuleResponseRule extends AbstractStructArrayBase
{
    /**
     * The RuleResponseRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule[]
     */
    public $RuleResponseRule;
    /**
     * Constructor method for ArrayOfRuleResponseRule
     * @uses ArrayOfRuleResponseRule::setRuleResponseRule()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule[] $ruleResponseRule
     */
    public function __construct(array $ruleResponseRule = array())
    {
        $this
            ->setRuleResponseRule($ruleResponseRule);
    }
    /**
     * Get RuleResponseRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule[]|null
     */
    public function getRuleResponseRule()
    {
        return isset($this->RuleResponseRule) ? $this->RuleResponseRule : null;
    }
    /**
     * Set RuleResponseRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule[] $ruleResponseRule
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseRule
     */
    public function setRuleResponseRule(array $ruleResponseRule = array())
    {
        foreach ($ruleResponseRule as $arrayOfRuleResponseRuleRuleResponseRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleResponseRuleRuleResponseRuleItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule) {
                throw new \InvalidArgumentException(sprintf('The RuleResponseRule property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule, "%s" given', is_object($arrayOfRuleResponseRuleRuleResponseRuleItem) ? get_class($arrayOfRuleResponseRuleRuleResponseRuleItem) : gettype($arrayOfRuleResponseRuleRuleResponseRuleItem)), __LINE__);
            }
        }
        if (is_null($ruleResponseRule) || (is_array($ruleResponseRule) && empty($ruleResponseRule))) {
            unset($this->RuleResponseRule);
        } else {
            $this->RuleResponseRule = $ruleResponseRule;
        }
        return $this;
    }
    /**
     * Add item to RuleResponseRule value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseRule
     */
    public function addToRuleResponseRule(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule) {
            throw new \InvalidArgumentException(sprintf('The RuleResponseRule property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RuleResponseRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RuleResponseRule
     */
    public function getAttributeName()
    {
        return 'RuleResponseRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseRule
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
