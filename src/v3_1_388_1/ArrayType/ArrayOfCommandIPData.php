<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCommandIPData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCommandIPData
 * @subpackage Arrays
 */
class ArrayOfCommandIPData extends AbstractStructArrayBase
{
    /**
     * The CommandIPData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData[]
     */
    public $CommandIPData;
    /**
     * Constructor method for ArrayOfCommandIPData
     * @uses ArrayOfCommandIPData::setCommandIPData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData[] $commandIPData
     */
    public function __construct(array $commandIPData = array())
    {
        $this
            ->setCommandIPData($commandIPData);
    }
    /**
     * Get CommandIPData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData[]|null
     */
    public function getCommandIPData()
    {
        return isset($this->CommandIPData) ? $this->CommandIPData : null;
    }
    /**
     * Set CommandIPData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData[] $commandIPData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommandIPData
     */
    public function setCommandIPData(array $commandIPData = array())
    {
        foreach ($commandIPData as $arrayOfCommandIPDataCommandIPDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfCommandIPDataCommandIPDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData) {
                throw new \InvalidArgumentException(sprintf('The CommandIPData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData, "%s" given', is_object($arrayOfCommandIPDataCommandIPDataItem) ? get_class($arrayOfCommandIPDataCommandIPDataItem) : gettype($arrayOfCommandIPDataCommandIPDataItem)), __LINE__);
            }
        }
        if (is_null($commandIPData) || (is_array($commandIPData) && empty($commandIPData))) {
            unset($this->CommandIPData);
        } else {
            $this->CommandIPData = $commandIPData;
        }
        return $this;
    }
    /**
     * Add item to CommandIPData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommandIPData
     */
    public function addToCommandIPData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData) {
            throw new \InvalidArgumentException(sprintf('The CommandIPData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CommandIPData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CommandIPData
     */
    public function getAttributeName()
    {
        return 'CommandIPData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommandIPData
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
