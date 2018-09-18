<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBlackoutDateData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBlackoutDateData
 * @subpackage Arrays
 */
class ArrayOfBlackoutDateData extends AbstractStructArrayBase
{
    /**
     * The BlackoutDateData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData[]
     */
    public $BlackoutDateData;
    /**
     * Constructor method for ArrayOfBlackoutDateData
     * @uses ArrayOfBlackoutDateData::setBlackoutDateData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData[] $blackoutDateData
     */
    public function __construct(array $blackoutDateData = array())
    {
        $this
            ->setBlackoutDateData($blackoutDateData);
    }
    /**
     * Get BlackoutDateData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData[]|null
     */
    public function getBlackoutDateData()
    {
        return isset($this->BlackoutDateData) ? $this->BlackoutDateData : null;
    }
    /**
     * Set BlackoutDateData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData[] $blackoutDateData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBlackoutDateData
     */
    public function setBlackoutDateData(array $blackoutDateData = array())
    {
        foreach ($blackoutDateData as $arrayOfBlackoutDateDataBlackoutDateDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfBlackoutDateDataBlackoutDateDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData) {
                throw new \InvalidArgumentException(sprintf('The BlackoutDateData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData, "%s" given', is_object($arrayOfBlackoutDateDataBlackoutDateDataItem) ? get_class($arrayOfBlackoutDateDataBlackoutDateDataItem) : gettype($arrayOfBlackoutDateDataBlackoutDateDataItem)), __LINE__);
            }
        }
        if (is_null($blackoutDateData) || (is_array($blackoutDateData) && empty($blackoutDateData))) {
            unset($this->BlackoutDateData);
        } else {
            $this->BlackoutDateData = $blackoutDateData;
        }
        return $this;
    }
    /**
     * Add item to BlackoutDateData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBlackoutDateData
     */
    public function addToBlackoutDateData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData) {
            throw new \InvalidArgumentException(sprintf('The BlackoutDateData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BlackoutDateData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BlackoutDateData
     */
    public function getAttributeName()
    {
        return 'BlackoutDateData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBlackoutDateData
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
