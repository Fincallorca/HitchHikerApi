<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRuleTextResponsePassengerType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRuleTextResponsePassengerType
 * @subpackage Arrays
 */
class ArrayOfRuleTextResponsePassengerType extends AbstractStructArrayBase
{
    /**
     * The RuleTextResponsePassengerType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType[]
     */
    public $RuleTextResponsePassengerType;
    /**
     * Constructor method for ArrayOfRuleTextResponsePassengerType
     * @uses ArrayOfRuleTextResponsePassengerType::setRuleTextResponsePassengerType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType[] $ruleTextResponsePassengerType
     */
    public function __construct(array $ruleTextResponsePassengerType = array())
    {
        $this
            ->setRuleTextResponsePassengerType($ruleTextResponsePassengerType);
    }
    /**
     * Get RuleTextResponsePassengerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType[]|null
     */
    public function getRuleTextResponsePassengerType()
    {
        return isset($this->RuleTextResponsePassengerType) ? $this->RuleTextResponsePassengerType : null;
    }
    /**
     * Set RuleTextResponsePassengerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType[] $ruleTextResponsePassengerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextResponsePassengerType
     */
    public function setRuleTextResponsePassengerType(array $ruleTextResponsePassengerType = array())
    {
        foreach ($ruleTextResponsePassengerType as $arrayOfRuleTextResponsePassengerTypeRuleTextResponsePassengerTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleTextResponsePassengerTypeRuleTextResponsePassengerTypeItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType) {
                throw new \InvalidArgumentException(sprintf('The RuleTextResponsePassengerType property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType, "%s" given', is_object($arrayOfRuleTextResponsePassengerTypeRuleTextResponsePassengerTypeItem) ? get_class($arrayOfRuleTextResponsePassengerTypeRuleTextResponsePassengerTypeItem) : gettype($arrayOfRuleTextResponsePassengerTypeRuleTextResponsePassengerTypeItem)), __LINE__);
            }
        }
        if (is_null($ruleTextResponsePassengerType) || (is_array($ruleTextResponsePassengerType) && empty($ruleTextResponsePassengerType))) {
            unset($this->RuleTextResponsePassengerType);
        } else {
            $this->RuleTextResponsePassengerType = $ruleTextResponsePassengerType;
        }
        return $this;
    }
    /**
     * Add item to RuleTextResponsePassengerType value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextResponsePassengerType
     */
    public function addToRuleTextResponsePassengerType(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType) {
            throw new \InvalidArgumentException(sprintf('The RuleTextResponsePassengerType property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RuleTextResponsePassengerType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RuleTextResponsePassengerType
     */
    public function getAttributeName()
    {
        return 'RuleTextResponsePassengerType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleTextResponsePassengerType
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
