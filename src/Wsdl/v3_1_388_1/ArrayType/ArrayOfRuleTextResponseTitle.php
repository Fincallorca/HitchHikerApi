<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRuleTextResponseTitle ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRuleTextResponseTitle
 * @subpackage Arrays
 */
class ArrayOfRuleTextResponseTitle extends AbstractStructArrayBase
{
    /**
     * The RuleTextResponseTitle
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseTitle[]
     */
    public $RuleTextResponseTitle;
    /**
     * Constructor method for ArrayOfRuleTextResponseTitle
     * @uses ArrayOfRuleTextResponseTitle::setRuleTextResponseTitle()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseTitle[] $ruleTextResponseTitle
     */
    public function __construct(array $ruleTextResponseTitle = array())
    {
        $this
            ->setRuleTextResponseTitle($ruleTextResponseTitle);
    }
    /**
     * Get RuleTextResponseTitle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseTitle[]|null
     */
    public function getRuleTextResponseTitle()
    {
        return isset($this->RuleTextResponseTitle) ? $this->RuleTextResponseTitle : null;
    }
    /**
     * Set RuleTextResponseTitle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseTitle[] $ruleTextResponseTitle
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextResponseTitle
     */
    public function setRuleTextResponseTitle(array $ruleTextResponseTitle = array())
    {
        foreach ($ruleTextResponseTitle as $arrayOfRuleTextResponseTitleRuleTextResponseTitleItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleTextResponseTitleRuleTextResponseTitleItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseTitle) {
                throw new \InvalidArgumentException(sprintf('The RuleTextResponseTitle property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseTitle, "%s" given', is_object($arrayOfRuleTextResponseTitleRuleTextResponseTitleItem) ? get_class($arrayOfRuleTextResponseTitleRuleTextResponseTitleItem) : gettype($arrayOfRuleTextResponseTitleRuleTextResponseTitleItem)), __LINE__);
            }
        }
        if (is_null($ruleTextResponseTitle) || (is_array($ruleTextResponseTitle) && empty($ruleTextResponseTitle))) {
            unset($this->RuleTextResponseTitle);
        } else {
            $this->RuleTextResponseTitle = $ruleTextResponseTitle;
        }
        return $this;
    }
    /**
     * Add item to RuleTextResponseTitle value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseTitle $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextResponseTitle
     */
    public function addToRuleTextResponseTitle(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseTitle $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseTitle) {
            throw new \InvalidArgumentException(sprintf('The RuleTextResponseTitle property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseTitle, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RuleTextResponseTitle[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseTitle|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseTitle|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseTitle|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseTitle|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseTitle|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RuleTextResponseTitle
     */
    public function getAttributeName()
    {
        return 'RuleTextResponseTitle';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextResponseTitle
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
