<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRuleTextResponseRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRuleTextResponseRule
 * @subpackage Arrays
 */
class ArrayOfRuleTextResponseRule extends AbstractStructArrayBase
{
    /**
     * The RuleTextResponseRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseRule[]
     */
    public $RuleTextResponseRule;
    /**
     * Constructor method for ArrayOfRuleTextResponseRule
     * @uses ArrayOfRuleTextResponseRule::setRuleTextResponseRule()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseRule[] $ruleTextResponseRule
     */
    public function __construct(array $ruleTextResponseRule = array())
    {
        $this
            ->setRuleTextResponseRule($ruleTextResponseRule);
    }
    /**
     * Get RuleTextResponseRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseRule[]|null
     */
    public function getRuleTextResponseRule()
    {
        return isset($this->RuleTextResponseRule) ? $this->RuleTextResponseRule : null;
    }
    /**
     * Set RuleTextResponseRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseRule[] $ruleTextResponseRule
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextResponseRule
     */
    public function setRuleTextResponseRule(array $ruleTextResponseRule = array())
    {
        foreach ($ruleTextResponseRule as $arrayOfRuleTextResponseRuleRuleTextResponseRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleTextResponseRuleRuleTextResponseRuleItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseRule) {
                throw new \InvalidArgumentException(sprintf('The RuleTextResponseRule property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseRule, "%s" given', is_object($arrayOfRuleTextResponseRuleRuleTextResponseRuleItem) ? get_class($arrayOfRuleTextResponseRuleRuleTextResponseRuleItem) : gettype($arrayOfRuleTextResponseRuleRuleTextResponseRuleItem)), __LINE__);
            }
        }
        if (is_null($ruleTextResponseRule) || (is_array($ruleTextResponseRule) && empty($ruleTextResponseRule))) {
            unset($this->RuleTextResponseRule);
        } else {
            $this->RuleTextResponseRule = $ruleTextResponseRule;
        }
        return $this;
    }
    /**
     * Add item to RuleTextResponseRule value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseRule $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextResponseRule
     */
    public function addToRuleTextResponseRule(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseRule) {
            throw new \InvalidArgumentException(sprintf('The RuleTextResponseRule property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RuleTextResponseRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RuleTextResponseRule
     */
    public function getAttributeName()
    {
        return 'RuleTextResponseRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextResponseRule
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
