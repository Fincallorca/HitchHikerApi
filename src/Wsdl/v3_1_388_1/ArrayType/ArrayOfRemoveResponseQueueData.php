<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRemoveResponseQueueData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRemoveResponseQueueData
 * @subpackage Arrays
 */
class ArrayOfRemoveResponseQueueData extends AbstractStructArrayBase
{
    /**
     * The RemoveResponseQueueData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponseQueueData[]
     */
    public $RemoveResponseQueueData;
    /**
     * Constructor method for ArrayOfRemoveResponseQueueData
     * @uses ArrayOfRemoveResponseQueueData::setRemoveResponseQueueData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponseQueueData[] $removeResponseQueueData
     */
    public function __construct(array $removeResponseQueueData = array())
    {
        $this
            ->setRemoveResponseQueueData($removeResponseQueueData);
    }
    /**
     * Get RemoveResponseQueueData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponseQueueData[]|null
     */
    public function getRemoveResponseQueueData()
    {
        return isset($this->RemoveResponseQueueData) ? $this->RemoveResponseQueueData : null;
    }
    /**
     * Set RemoveResponseQueueData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponseQueueData[] $removeResponseQueueData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRemoveResponseQueueData
     */
    public function setRemoveResponseQueueData(array $removeResponseQueueData = array())
    {
        foreach ($removeResponseQueueData as $arrayOfRemoveResponseQueueDataRemoveResponseQueueDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfRemoveResponseQueueDataRemoveResponseQueueDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponseQueueData) {
                throw new \InvalidArgumentException(sprintf('The RemoveResponseQueueData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponseQueueData, "%s" given', is_object($arrayOfRemoveResponseQueueDataRemoveResponseQueueDataItem) ? get_class($arrayOfRemoveResponseQueueDataRemoveResponseQueueDataItem) : gettype($arrayOfRemoveResponseQueueDataRemoveResponseQueueDataItem)), __LINE__);
            }
        }
        if (is_null($removeResponseQueueData) || (is_array($removeResponseQueueData) && empty($removeResponseQueueData))) {
            unset($this->RemoveResponseQueueData);
        } else {
            $this->RemoveResponseQueueData = $removeResponseQueueData;
        }
        return $this;
    }
    /**
     * Add item to RemoveResponseQueueData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponseQueueData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRemoveResponseQueueData
     */
    public function addToRemoveResponseQueueData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponseQueueData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponseQueueData) {
            throw new \InvalidArgumentException(sprintf('The RemoveResponseQueueData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponseQueueData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RemoveResponseQueueData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponseQueueData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponseQueueData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponseQueueData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponseQueueData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponseQueueData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RemoveResponseQueueData
     */
    public function getAttributeName()
    {
        return 'RemoveResponseQueueData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRemoveResponseQueueData
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
