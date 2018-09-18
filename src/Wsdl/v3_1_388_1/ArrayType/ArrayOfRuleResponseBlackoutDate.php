<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRuleResponseBlackoutDate ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRuleResponseBlackoutDate
 * @subpackage Arrays
 */
class ArrayOfRuleResponseBlackoutDate extends AbstractStructArrayBase
{
    /**
     * The RuleResponseBlackoutDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate[]
     */
    public $RuleResponseBlackoutDate;
    /**
     * Constructor method for ArrayOfRuleResponseBlackoutDate
     * @uses ArrayOfRuleResponseBlackoutDate::setRuleResponseBlackoutDate()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate[] $ruleResponseBlackoutDate
     */
    public function __construct(array $ruleResponseBlackoutDate = array())
    {
        $this
            ->setRuleResponseBlackoutDate($ruleResponseBlackoutDate);
    }
    /**
     * Get RuleResponseBlackoutDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate[]|null
     */
    public function getRuleResponseBlackoutDate()
    {
        return isset($this->RuleResponseBlackoutDate) ? $this->RuleResponseBlackoutDate : null;
    }
    /**
     * Set RuleResponseBlackoutDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate[] $ruleResponseBlackoutDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutDate
     */
    public function setRuleResponseBlackoutDate(array $ruleResponseBlackoutDate = array())
    {
        foreach ($ruleResponseBlackoutDate as $arrayOfRuleResponseBlackoutDateRuleResponseBlackoutDateItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleResponseBlackoutDateRuleResponseBlackoutDateItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate) {
                throw new \InvalidArgumentException(sprintf('The RuleResponseBlackoutDate property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate, "%s" given', is_object($arrayOfRuleResponseBlackoutDateRuleResponseBlackoutDateItem) ? get_class($arrayOfRuleResponseBlackoutDateRuleResponseBlackoutDateItem) : gettype($arrayOfRuleResponseBlackoutDateRuleResponseBlackoutDateItem)), __LINE__);
            }
        }
        if (is_null($ruleResponseBlackoutDate) || (is_array($ruleResponseBlackoutDate) && empty($ruleResponseBlackoutDate))) {
            unset($this->RuleResponseBlackoutDate);
        } else {
            $this->RuleResponseBlackoutDate = $ruleResponseBlackoutDate;
        }
        return $this;
    }
    /**
     * Add item to RuleResponseBlackoutDate value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutDate
     */
    public function addToRuleResponseBlackoutDate(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate) {
            throw new \InvalidArgumentException(sprintf('The RuleResponseBlackoutDate property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RuleResponseBlackoutDate[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RuleResponseBlackoutDate
     */
    public function getAttributeName()
    {
        return 'RuleResponseBlackoutDate';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseBlackoutDate
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
