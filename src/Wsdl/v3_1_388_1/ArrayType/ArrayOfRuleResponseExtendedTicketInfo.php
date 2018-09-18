<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRuleResponseExtendedTicketInfo ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRuleResponseExtendedTicketInfo
 * @subpackage Arrays
 */
class ArrayOfRuleResponseExtendedTicketInfo extends AbstractStructArrayBase
{
    /**
     * The RuleResponseExtendedTicketInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo[]
     */
    public $RuleResponseExtendedTicketInfo;
    /**
     * Constructor method for ArrayOfRuleResponseExtendedTicketInfo
     * @uses ArrayOfRuleResponseExtendedTicketInfo::setRuleResponseExtendedTicketInfo()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo[] $ruleResponseExtendedTicketInfo
     */
    public function __construct(array $ruleResponseExtendedTicketInfo = array())
    {
        $this
            ->setRuleResponseExtendedTicketInfo($ruleResponseExtendedTicketInfo);
    }
    /**
     * Get RuleResponseExtendedTicketInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo[]|null
     */
    public function getRuleResponseExtendedTicketInfo()
    {
        return isset($this->RuleResponseExtendedTicketInfo) ? $this->RuleResponseExtendedTicketInfo : null;
    }
    /**
     * Set RuleResponseExtendedTicketInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo[] $ruleResponseExtendedTicketInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseExtendedTicketInfo
     */
    public function setRuleResponseExtendedTicketInfo(array $ruleResponseExtendedTicketInfo = array())
    {
        foreach ($ruleResponseExtendedTicketInfo as $arrayOfRuleResponseExtendedTicketInfoRuleResponseExtendedTicketInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleResponseExtendedTicketInfoRuleResponseExtendedTicketInfoItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo) {
                throw new \InvalidArgumentException(sprintf('The RuleResponseExtendedTicketInfo property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo, "%s" given', is_object($arrayOfRuleResponseExtendedTicketInfoRuleResponseExtendedTicketInfoItem) ? get_class($arrayOfRuleResponseExtendedTicketInfoRuleResponseExtendedTicketInfoItem) : gettype($arrayOfRuleResponseExtendedTicketInfoRuleResponseExtendedTicketInfoItem)), __LINE__);
            }
        }
        if (is_null($ruleResponseExtendedTicketInfo) || (is_array($ruleResponseExtendedTicketInfo) && empty($ruleResponseExtendedTicketInfo))) {
            unset($this->RuleResponseExtendedTicketInfo);
        } else {
            $this->RuleResponseExtendedTicketInfo = $ruleResponseExtendedTicketInfo;
        }
        return $this;
    }
    /**
     * Add item to RuleResponseExtendedTicketInfo value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseExtendedTicketInfo
     */
    public function addToRuleResponseExtendedTicketInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo) {
            throw new \InvalidArgumentException(sprintf('The RuleResponseExtendedTicketInfo property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RuleResponseExtendedTicketInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RuleResponseExtendedTicketInfo
     */
    public function getAttributeName()
    {
        return 'RuleResponseExtendedTicketInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseExtendedTicketInfo
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
