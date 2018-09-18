<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRuleResponseBlackoutNumber ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRuleResponseBlackoutNumber
 * @subpackage Arrays
 */
class ArrayOfRuleResponseBlackoutNumber extends AbstractStructArrayBase
{
    /**
     * The RuleResponseBlackoutNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber[]
     */
    public $RuleResponseBlackoutNumber;
    /**
     * Constructor method for ArrayOfRuleResponseBlackoutNumber
     * @uses ArrayOfRuleResponseBlackoutNumber::setRuleResponseBlackoutNumber()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber[] $ruleResponseBlackoutNumber
     */
    public function __construct(array $ruleResponseBlackoutNumber = array())
    {
        $this
            ->setRuleResponseBlackoutNumber($ruleResponseBlackoutNumber);
    }
    /**
     * Get RuleResponseBlackoutNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber[]|null
     */
    public function getRuleResponseBlackoutNumber()
    {
        return isset($this->RuleResponseBlackoutNumber) ? $this->RuleResponseBlackoutNumber : null;
    }
    /**
     * Set RuleResponseBlackoutNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber[] $ruleResponseBlackoutNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutNumber
     */
    public function setRuleResponseBlackoutNumber(array $ruleResponseBlackoutNumber = array())
    {
        foreach ($ruleResponseBlackoutNumber as $arrayOfRuleResponseBlackoutNumberRuleResponseBlackoutNumberItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleResponseBlackoutNumberRuleResponseBlackoutNumberItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber) {
                throw new \InvalidArgumentException(sprintf('The RuleResponseBlackoutNumber property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber, "%s" given', is_object($arrayOfRuleResponseBlackoutNumberRuleResponseBlackoutNumberItem) ? get_class($arrayOfRuleResponseBlackoutNumberRuleResponseBlackoutNumberItem) : gettype($arrayOfRuleResponseBlackoutNumberRuleResponseBlackoutNumberItem)), __LINE__);
            }
        }
        if (is_null($ruleResponseBlackoutNumber) || (is_array($ruleResponseBlackoutNumber) && empty($ruleResponseBlackoutNumber))) {
            unset($this->RuleResponseBlackoutNumber);
        } else {
            $this->RuleResponseBlackoutNumber = $ruleResponseBlackoutNumber;
        }
        return $this;
    }
    /**
     * Add item to RuleResponseBlackoutNumber value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutNumber
     */
    public function addToRuleResponseBlackoutNumber(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber) {
            throw new \InvalidArgumentException(sprintf('The RuleResponseBlackoutNumber property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RuleResponseBlackoutNumber[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RuleResponseBlackoutNumber
     */
    public function getAttributeName()
    {
        return 'RuleResponseBlackoutNumber';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutNumber
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
