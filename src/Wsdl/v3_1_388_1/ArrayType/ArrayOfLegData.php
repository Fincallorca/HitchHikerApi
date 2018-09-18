<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLegData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLegData
 * @subpackage Arrays
 */
class ArrayOfLegData extends AbstractStructArrayBase
{
    /**
     * The LegData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData[]
     */
    public $LegData;
    /**
     * Constructor method for ArrayOfLegData
     * @uses ArrayOfLegData::setLegData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData[] $legData
     */
    public function __construct(array $legData = array())
    {
        $this
            ->setLegData($legData);
    }
    /**
     * Get LegData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData[]|null
     */
    public function getLegData()
    {
        return isset($this->LegData) ? $this->LegData : null;
    }
    /**
     * Set LegData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData[] $legData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfLegData
     */
    public function setLegData(array $legData = array())
    {
        foreach ($legData as $arrayOfLegDataLegDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfLegDataLegDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData) {
                throw new \InvalidArgumentException(sprintf('The LegData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData, "%s" given', is_object($arrayOfLegDataLegDataItem) ? get_class($arrayOfLegDataLegDataItem) : gettype($arrayOfLegDataLegDataItem)), __LINE__);
            }
        }
        if (is_null($legData) || (is_array($legData) && empty($legData))) {
            unset($this->LegData);
        } else {
            $this->LegData = $legData;
        }
        return $this;
    }
    /**
     * Add item to LegData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfLegData
     */
    public function addToLegData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData) {
            throw new \InvalidArgumentException(sprintf('The LegData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LegData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LegData
     */
    public function getAttributeName()
    {
        return 'LegData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfLegData
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
