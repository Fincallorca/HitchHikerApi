<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSeatMapCharacteristicData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSeatMapCharacteristicData
 * @subpackage Arrays
 */
class ArrayOfSeatMapCharacteristicData extends AbstractStructArrayBase
{
    /**
     * The SeatMapCharacteristicData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData[]
     */
    public $SeatMapCharacteristicData;
    /**
     * Constructor method for ArrayOfSeatMapCharacteristicData
     * @uses ArrayOfSeatMapCharacteristicData::setSeatMapCharacteristicData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData[] $seatMapCharacteristicData
     */
    public function __construct(array $seatMapCharacteristicData = array())
    {
        $this
            ->setSeatMapCharacteristicData($seatMapCharacteristicData);
    }
    /**
     * Get SeatMapCharacteristicData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData[]|null
     */
    public function getSeatMapCharacteristicData()
    {
        return isset($this->SeatMapCharacteristicData) ? $this->SeatMapCharacteristicData : null;
    }
    /**
     * Set SeatMapCharacteristicData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData[] $seatMapCharacteristicData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapCharacteristicData
     */
    public function setSeatMapCharacteristicData(array $seatMapCharacteristicData = array())
    {
        foreach ($seatMapCharacteristicData as $arrayOfSeatMapCharacteristicDataSeatMapCharacteristicDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfSeatMapCharacteristicDataSeatMapCharacteristicDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData) {
                throw new \InvalidArgumentException(sprintf('The SeatMapCharacteristicData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData, "%s" given', is_object($arrayOfSeatMapCharacteristicDataSeatMapCharacteristicDataItem) ? get_class($arrayOfSeatMapCharacteristicDataSeatMapCharacteristicDataItem) : gettype($arrayOfSeatMapCharacteristicDataSeatMapCharacteristicDataItem)), __LINE__);
            }
        }
        if (is_null($seatMapCharacteristicData) || (is_array($seatMapCharacteristicData) && empty($seatMapCharacteristicData))) {
            unset($this->SeatMapCharacteristicData);
        } else {
            $this->SeatMapCharacteristicData = $seatMapCharacteristicData;
        }
        return $this;
    }
    /**
     * Add item to SeatMapCharacteristicData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapCharacteristicData
     */
    public function addToSeatMapCharacteristicData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData) {
            throw new \InvalidArgumentException(sprintf('The SeatMapCharacteristicData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatMapCharacteristicData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SeatMapCharacteristicData
     */
    public function getAttributeName()
    {
        return 'SeatMapCharacteristicData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapCharacteristicData
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
