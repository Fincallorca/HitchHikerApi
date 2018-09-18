<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLegConnectionData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLegConnectionData
 * @subpackage Arrays
 */
class ArrayOfLegConnectionData extends AbstractStructArrayBase
{
    /**
     * The LegConnectionData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData[]
     */
    public $LegConnectionData;
    /**
     * Constructor method for ArrayOfLegConnectionData
     * @uses ArrayOfLegConnectionData::setLegConnectionData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData[] $legConnectionData
     */
    public function __construct(array $legConnectionData = array())
    {
        $this
            ->setLegConnectionData($legConnectionData);
    }
    /**
     * Get LegConnectionData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData[]|null
     */
    public function getLegConnectionData()
    {
        return isset($this->LegConnectionData) ? $this->LegConnectionData : null;
    }
    /**
     * Set LegConnectionData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData[] $legConnectionData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfLegConnectionData
     */
    public function setLegConnectionData(array $legConnectionData = array())
    {
        foreach ($legConnectionData as $arrayOfLegConnectionDataLegConnectionDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfLegConnectionDataLegConnectionDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData) {
                throw new \InvalidArgumentException(sprintf('The LegConnectionData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData, "%s" given', is_object($arrayOfLegConnectionDataLegConnectionDataItem) ? get_class($arrayOfLegConnectionDataLegConnectionDataItem) : gettype($arrayOfLegConnectionDataLegConnectionDataItem)), __LINE__);
            }
        }
        if (is_null($legConnectionData) || (is_array($legConnectionData) && empty($legConnectionData))) {
            unset($this->LegConnectionData);
        } else {
            $this->LegConnectionData = $legConnectionData;
        }
        return $this;
    }
    /**
     * Add item to LegConnectionData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfLegConnectionData
     */
    public function addToLegConnectionData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData) {
            throw new \InvalidArgumentException(sprintf('The LegConnectionData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LegConnectionData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LegConnectionData
     */
    public function getAttributeName()
    {
        return 'LegConnectionData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfLegConnectionData
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
