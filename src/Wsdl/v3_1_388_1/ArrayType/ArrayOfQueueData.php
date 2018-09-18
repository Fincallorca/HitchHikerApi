<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQueueData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQueueData
 * @subpackage Arrays
 */
class ArrayOfQueueData extends AbstractStructArrayBase
{
    /**
     * The QueueData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData[]
     */
    public $QueueData;
    /**
     * Constructor method for ArrayOfQueueData
     * @uses ArrayOfQueueData::setQueueData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData[] $queueData
     */
    public function __construct(array $queueData = array())
    {
        $this
            ->setQueueData($queueData);
    }
    /**
     * Get QueueData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData[]|null
     */
    public function getQueueData()
    {
        return isset($this->QueueData) ? $this->QueueData : null;
    }
    /**
     * Set QueueData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData[] $queueData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueueData
     */
    public function setQueueData(array $queueData = array())
    {
        foreach ($queueData as $arrayOfQueueDataQueueDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfQueueDataQueueDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData) {
                throw new \InvalidArgumentException(sprintf('The QueueData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData, "%s" given', is_object($arrayOfQueueDataQueueDataItem) ? get_class($arrayOfQueueDataQueueDataItem) : gettype($arrayOfQueueDataQueueDataItem)), __LINE__);
            }
        }
        if (is_null($queueData) || (is_array($queueData) && empty($queueData))) {
            unset($this->QueueData);
        } else {
            $this->QueueData = $queueData;
        }
        return $this;
    }
    /**
     * Add item to QueueData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueueData
     */
    public function addToQueueData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData) {
            throw new \InvalidArgumentException(sprintf('The QueueData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QueueData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QueueData
     */
    public function getAttributeName()
    {
        return 'QueueData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueueData
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
