<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRuleResponsePassengerType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRuleResponsePassengerType
 * @subpackage Arrays
 */
class ArrayOfRuleResponsePassengerType extends AbstractStructArrayBase
{
    /**
     * The RuleResponsePassengerType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType[]
     */
    public $RuleResponsePassengerType;
    /**
     * Constructor method for ArrayOfRuleResponsePassengerType
     * @uses ArrayOfRuleResponsePassengerType::setRuleResponsePassengerType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType[] $ruleResponsePassengerType
     */
    public function __construct(array $ruleResponsePassengerType = array())
    {
        $this
            ->setRuleResponsePassengerType($ruleResponsePassengerType);
    }
    /**
     * Get RuleResponsePassengerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType[]|null
     */
    public function getRuleResponsePassengerType()
    {
        return isset($this->RuleResponsePassengerType) ? $this->RuleResponsePassengerType : null;
    }
    /**
     * Set RuleResponsePassengerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType[] $ruleResponsePassengerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponsePassengerType
     */
    public function setRuleResponsePassengerType(array $ruleResponsePassengerType = array())
    {
        foreach ($ruleResponsePassengerType as $arrayOfRuleResponsePassengerTypeRuleResponsePassengerTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleResponsePassengerTypeRuleResponsePassengerTypeItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType) {
                throw new \InvalidArgumentException(sprintf('The RuleResponsePassengerType property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType, "%s" given', is_object($arrayOfRuleResponsePassengerTypeRuleResponsePassengerTypeItem) ? get_class($arrayOfRuleResponsePassengerTypeRuleResponsePassengerTypeItem) : gettype($arrayOfRuleResponsePassengerTypeRuleResponsePassengerTypeItem)), __LINE__);
            }
        }
        if (is_null($ruleResponsePassengerType) || (is_array($ruleResponsePassengerType) && empty($ruleResponsePassengerType))) {
            unset($this->RuleResponsePassengerType);
        } else {
            $this->RuleResponsePassengerType = $ruleResponsePassengerType;
        }
        return $this;
    }
    /**
     * Add item to RuleResponsePassengerType value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponsePassengerType
     */
    public function addToRuleResponsePassengerType(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType) {
            throw new \InvalidArgumentException(sprintf('The RuleResponsePassengerType property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RuleResponsePassengerType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RuleResponsePassengerType
     */
    public function getAttributeName()
    {
        return 'RuleResponsePassengerType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponsePassengerType
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
