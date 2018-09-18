<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRemovePNRData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRemovePNRData
 * @subpackage Arrays
 */
class ArrayOfRemovePNRData extends AbstractStructArrayBase
{
    /**
     * The RemovePNRData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData[]
     */
    public $RemovePNRData;
    /**
     * Constructor method for ArrayOfRemovePNRData
     * @uses ArrayOfRemovePNRData::setRemovePNRData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData[] $removePNRData
     */
    public function __construct(array $removePNRData = array())
    {
        $this
            ->setRemovePNRData($removePNRData);
    }
    /**
     * Get RemovePNRData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData[]|null
     */
    public function getRemovePNRData()
    {
        return isset($this->RemovePNRData) ? $this->RemovePNRData : null;
    }
    /**
     * Set RemovePNRData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData[] $removePNRData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRemovePNRData
     */
    public function setRemovePNRData(array $removePNRData = array())
    {
        foreach ($removePNRData as $arrayOfRemovePNRDataRemovePNRDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfRemovePNRDataRemovePNRDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData) {
                throw new \InvalidArgumentException(sprintf('The RemovePNRData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData, "%s" given', is_object($arrayOfRemovePNRDataRemovePNRDataItem) ? get_class($arrayOfRemovePNRDataRemovePNRDataItem) : gettype($arrayOfRemovePNRDataRemovePNRDataItem)), __LINE__);
            }
        }
        if (is_null($removePNRData) || (is_array($removePNRData) && empty($removePNRData))) {
            unset($this->RemovePNRData);
        } else {
            $this->RemovePNRData = $removePNRData;
        }
        return $this;
    }
    /**
     * Add item to RemovePNRData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRemovePNRData
     */
    public function addToRemovePNRData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData) {
            throw new \InvalidArgumentException(sprintf('The RemovePNRData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RemovePNRData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RemovePNRData
     */
    public function getAttributeName()
    {
        return 'RemovePNRData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRemovePNRData
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
