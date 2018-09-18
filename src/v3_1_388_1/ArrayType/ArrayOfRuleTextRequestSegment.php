<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRuleTextRequestSegment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRuleTextRequestSegment
 * @subpackage Arrays
 */
class ArrayOfRuleTextRequestSegment extends AbstractStructArrayBase
{
    /**
     * The RuleTextRequestSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestSegment[]
     */
    public $RuleTextRequestSegment;
    /**
     * Constructor method for ArrayOfRuleTextRequestSegment
     * @uses ArrayOfRuleTextRequestSegment::setRuleTextRequestSegment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestSegment[] $ruleTextRequestSegment
     */
    public function __construct(array $ruleTextRequestSegment = array())
    {
        $this
            ->setRuleTextRequestSegment($ruleTextRequestSegment);
    }
    /**
     * Get RuleTextRequestSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestSegment[]|null
     */
    public function getRuleTextRequestSegment()
    {
        return isset($this->RuleTextRequestSegment) ? $this->RuleTextRequestSegment : null;
    }
    /**
     * Set RuleTextRequestSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestSegment[] $ruleTextRequestSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextRequestSegment
     */
    public function setRuleTextRequestSegment(array $ruleTextRequestSegment = array())
    {
        foreach ($ruleTextRequestSegment as $arrayOfRuleTextRequestSegmentRuleTextRequestSegmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleTextRequestSegmentRuleTextRequestSegmentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestSegment) {
                throw new \InvalidArgumentException(sprintf('The RuleTextRequestSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestSegment, "%s" given', is_object($arrayOfRuleTextRequestSegmentRuleTextRequestSegmentItem) ? get_class($arrayOfRuleTextRequestSegmentRuleTextRequestSegmentItem) : gettype($arrayOfRuleTextRequestSegmentRuleTextRequestSegmentItem)), __LINE__);
            }
        }
        if (is_null($ruleTextRequestSegment) || (is_array($ruleTextRequestSegment) && empty($ruleTextRequestSegment))) {
            unset($this->RuleTextRequestSegment);
        } else {
            $this->RuleTextRequestSegment = $ruleTextRequestSegment;
        }
        return $this;
    }
    /**
     * Add item to RuleTextRequestSegment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestSegment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextRequestSegment
     */
    public function addToRuleTextRequestSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestSegment) {
            throw new \InvalidArgumentException(sprintf('The RuleTextRequestSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RuleTextRequestSegment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestSegment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestSegment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestSegment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestSegment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestSegment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RuleTextRequestSegment
     */
    public function getAttributeName()
    {
        return 'RuleTextRequestSegment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextRequestSegment
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
