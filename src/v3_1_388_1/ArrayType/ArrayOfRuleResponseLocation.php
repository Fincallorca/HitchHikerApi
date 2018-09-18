<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRuleResponseLocation ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRuleResponseLocation
 * @subpackage Arrays
 */
class ArrayOfRuleResponseLocation extends AbstractStructArrayBase
{
    /**
     * The RuleResponseLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation[]
     */
    public $RuleResponseLocation;
    /**
     * Constructor method for ArrayOfRuleResponseLocation
     * @uses ArrayOfRuleResponseLocation::setRuleResponseLocation()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation[] $ruleResponseLocation
     */
    public function __construct(array $ruleResponseLocation = array())
    {
        $this
            ->setRuleResponseLocation($ruleResponseLocation);
    }
    /**
     * Get RuleResponseLocation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation[]|null
     */
    public function getRuleResponseLocation()
    {
        return isset($this->RuleResponseLocation) ? $this->RuleResponseLocation : null;
    }
    /**
     * Set RuleResponseLocation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation[] $ruleResponseLocation
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseLocation
     */
    public function setRuleResponseLocation(array $ruleResponseLocation = array())
    {
        foreach ($ruleResponseLocation as $arrayOfRuleResponseLocationRuleResponseLocationItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleResponseLocationRuleResponseLocationItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation) {
                throw new \InvalidArgumentException(sprintf('The RuleResponseLocation property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation, "%s" given', is_object($arrayOfRuleResponseLocationRuleResponseLocationItem) ? get_class($arrayOfRuleResponseLocationRuleResponseLocationItem) : gettype($arrayOfRuleResponseLocationRuleResponseLocationItem)), __LINE__);
            }
        }
        if (is_null($ruleResponseLocation) || (is_array($ruleResponseLocation) && empty($ruleResponseLocation))) {
            unset($this->RuleResponseLocation);
        } else {
            $this->RuleResponseLocation = $ruleResponseLocation;
        }
        return $this;
    }
    /**
     * Add item to RuleResponseLocation value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseLocation
     */
    public function addToRuleResponseLocation(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation) {
            throw new \InvalidArgumentException(sprintf('The RuleResponseLocation property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RuleResponseLocation[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseLocation|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RuleResponseLocation
     */
    public function getAttributeName()
    {
        return 'RuleResponseLocation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseLocation
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
