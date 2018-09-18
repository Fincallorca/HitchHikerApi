<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRuleTextResponseLine ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRuleTextResponseLine
 * @subpackage Arrays
 */
class ArrayOfRuleTextResponseLine extends AbstractStructArrayBase
{
    /**
     * The RuleTextResponseLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseLine[]
     */
    public $RuleTextResponseLine;
    /**
     * Constructor method for ArrayOfRuleTextResponseLine
     * @uses ArrayOfRuleTextResponseLine::setRuleTextResponseLine()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseLine[] $ruleTextResponseLine
     */
    public function __construct(array $ruleTextResponseLine = array())
    {
        $this
            ->setRuleTextResponseLine($ruleTextResponseLine);
    }
    /**
     * Get RuleTextResponseLine value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseLine[]|null
     */
    public function getRuleTextResponseLine()
    {
        return isset($this->RuleTextResponseLine) ? $this->RuleTextResponseLine : null;
    }
    /**
     * Set RuleTextResponseLine value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseLine[] $ruleTextResponseLine
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextResponseLine
     */
    public function setRuleTextResponseLine(array $ruleTextResponseLine = array())
    {
        foreach ($ruleTextResponseLine as $arrayOfRuleTextResponseLineRuleTextResponseLineItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleTextResponseLineRuleTextResponseLineItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseLine) {
                throw new \InvalidArgumentException(sprintf('The RuleTextResponseLine property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseLine, "%s" given', is_object($arrayOfRuleTextResponseLineRuleTextResponseLineItem) ? get_class($arrayOfRuleTextResponseLineRuleTextResponseLineItem) : gettype($arrayOfRuleTextResponseLineRuleTextResponseLineItem)), __LINE__);
            }
        }
        if (is_null($ruleTextResponseLine) || (is_array($ruleTextResponseLine) && empty($ruleTextResponseLine))) {
            unset($this->RuleTextResponseLine);
        } else {
            $this->RuleTextResponseLine = $ruleTextResponseLine;
        }
        return $this;
    }
    /**
     * Add item to RuleTextResponseLine value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseLine $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextResponseLine
     */
    public function addToRuleTextResponseLine(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseLine $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseLine) {
            throw new \InvalidArgumentException(sprintf('The RuleTextResponseLine property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseLine, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RuleTextResponseLine[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseLine|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseLine|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseLine|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseLine|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseLine|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RuleTextResponseLine
     */
    public function getAttributeName()
    {
        return 'RuleTextResponseLine';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextResponseLine
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
