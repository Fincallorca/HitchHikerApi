<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQueryRuleData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQueryRuleData
 * @subpackage Arrays
 */
class ArrayOfQueryRuleData extends AbstractStructArrayBase
{
    /**
     * The QueryRuleData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData[]
     */
    public $QueryRuleData;
    /**
     * Constructor method for ArrayOfQueryRuleData
     * @uses ArrayOfQueryRuleData::setQueryRuleData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData[] $queryRuleData
     */
    public function __construct(array $queryRuleData = array())
    {
        $this
            ->setQueryRuleData($queryRuleData);
    }
    /**
     * Get QueryRuleData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData[]|null
     */
    public function getQueryRuleData()
    {
        return isset($this->QueryRuleData) ? $this->QueryRuleData : null;
    }
    /**
     * Set QueryRuleData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData[] $queryRuleData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryRuleData
     */
    public function setQueryRuleData(array $queryRuleData = array())
    {
        foreach ($queryRuleData as $arrayOfQueryRuleDataQueryRuleDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfQueryRuleDataQueryRuleDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData) {
                throw new \InvalidArgumentException(sprintf('The QueryRuleData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData, "%s" given', is_object($arrayOfQueryRuleDataQueryRuleDataItem) ? get_class($arrayOfQueryRuleDataQueryRuleDataItem) : gettype($arrayOfQueryRuleDataQueryRuleDataItem)), __LINE__);
            }
        }
        if (is_null($queryRuleData) || (is_array($queryRuleData) && empty($queryRuleData))) {
            unset($this->QueryRuleData);
        } else {
            $this->QueryRuleData = $queryRuleData;
        }
        return $this;
    }
    /**
     * Add item to QueryRuleData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryRuleData
     */
    public function addToQueryRuleData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData) {
            throw new \InvalidArgumentException(sprintf('The QueryRuleData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QueryRuleData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QueryRuleData
     */
    public function getAttributeName()
    {
        return 'QueryRuleData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryRuleData
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
