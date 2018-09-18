<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRuleResponseCarrier ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRuleResponseCarrier
 * @subpackage Arrays
 */
class ArrayOfRuleResponseCarrier extends AbstractStructArrayBase
{
    /**
     * The RuleResponseCarrier
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseCarrier[]
     */
    public $RuleResponseCarrier;
    /**
     * Constructor method for ArrayOfRuleResponseCarrier
     * @uses ArrayOfRuleResponseCarrier::setRuleResponseCarrier()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseCarrier[] $ruleResponseCarrier
     */
    public function __construct(array $ruleResponseCarrier = array())
    {
        $this
            ->setRuleResponseCarrier($ruleResponseCarrier);
    }
    /**
     * Get RuleResponseCarrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseCarrier[]|null
     */
    public function getRuleResponseCarrier()
    {
        return isset($this->RuleResponseCarrier) ? $this->RuleResponseCarrier : null;
    }
    /**
     * Set RuleResponseCarrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseCarrier[] $ruleResponseCarrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseCarrier
     */
    public function setRuleResponseCarrier(array $ruleResponseCarrier = array())
    {
        foreach ($ruleResponseCarrier as $arrayOfRuleResponseCarrierRuleResponseCarrierItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleResponseCarrierRuleResponseCarrierItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseCarrier) {
                throw new \InvalidArgumentException(sprintf('The RuleResponseCarrier property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseCarrier, "%s" given', is_object($arrayOfRuleResponseCarrierRuleResponseCarrierItem) ? get_class($arrayOfRuleResponseCarrierRuleResponseCarrierItem) : gettype($arrayOfRuleResponseCarrierRuleResponseCarrierItem)), __LINE__);
            }
        }
        if (is_null($ruleResponseCarrier) || (is_array($ruleResponseCarrier) && empty($ruleResponseCarrier))) {
            unset($this->RuleResponseCarrier);
        } else {
            $this->RuleResponseCarrier = $ruleResponseCarrier;
        }
        return $this;
    }
    /**
     * Add item to RuleResponseCarrier value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseCarrier $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseCarrier
     */
    public function addToRuleResponseCarrier(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseCarrier $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseCarrier) {
            throw new \InvalidArgumentException(sprintf('The RuleResponseCarrier property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseCarrier, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RuleResponseCarrier[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseCarrier|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseCarrier|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseCarrier|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseCarrier|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseCarrier|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RuleResponseCarrier
     */
    public function getAttributeName()
    {
        return 'RuleResponseCarrier';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseCarrier
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
