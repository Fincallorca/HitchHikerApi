<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRuleTextRequestLeg ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRuleTextRequestLeg
 * @subpackage Arrays
 */
class ArrayOfRuleTextRequestLeg extends AbstractStructArrayBase
{
    /**
     * The RuleTextRequestLeg
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestLeg[]
     */
    public $RuleTextRequestLeg;
    /**
     * Constructor method for ArrayOfRuleTextRequestLeg
     * @uses ArrayOfRuleTextRequestLeg::setRuleTextRequestLeg()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestLeg[] $ruleTextRequestLeg
     */
    public function __construct(array $ruleTextRequestLeg = array())
    {
        $this
            ->setRuleTextRequestLeg($ruleTextRequestLeg);
    }
    /**
     * Get RuleTextRequestLeg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestLeg[]|null
     */
    public function getRuleTextRequestLeg()
    {
        return isset($this->RuleTextRequestLeg) ? $this->RuleTextRequestLeg : null;
    }
    /**
     * Set RuleTextRequestLeg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestLeg[] $ruleTextRequestLeg
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextRequestLeg
     */
    public function setRuleTextRequestLeg(array $ruleTextRequestLeg = array())
    {
        foreach ($ruleTextRequestLeg as $arrayOfRuleTextRequestLegRuleTextRequestLegItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleTextRequestLegRuleTextRequestLegItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestLeg) {
                throw new \InvalidArgumentException(sprintf('The RuleTextRequestLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestLeg, "%s" given', is_object($arrayOfRuleTextRequestLegRuleTextRequestLegItem) ? get_class($arrayOfRuleTextRequestLegRuleTextRequestLegItem) : gettype($arrayOfRuleTextRequestLegRuleTextRequestLegItem)), __LINE__);
            }
        }
        if (is_null($ruleTextRequestLeg) || (is_array($ruleTextRequestLeg) && empty($ruleTextRequestLeg))) {
            unset($this->RuleTextRequestLeg);
        } else {
            $this->RuleTextRequestLeg = $ruleTextRequestLeg;
        }
        return $this;
    }
    /**
     * Add item to RuleTextRequestLeg value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestLeg $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextRequestLeg
     */
    public function addToRuleTextRequestLeg(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestLeg $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestLeg) {
            throw new \InvalidArgumentException(sprintf('The RuleTextRequestLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestLeg, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RuleTextRequestLeg[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestLeg|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestLeg|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestLeg|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestLeg|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestLeg|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RuleTextRequestLeg
     */
    public function getAttributeName()
    {
        return 'RuleTextRequestLeg';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextRequestLeg
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
