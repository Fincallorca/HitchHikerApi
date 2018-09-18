<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSeatMapAirSeatData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSeatMapAirSeatData
 * @subpackage Arrays
 */
class ArrayOfSeatMapAirSeatData extends AbstractStructArrayBase
{
    /**
     * The SeatMapAirSeatData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData[]
     */
    public $SeatMapAirSeatData;
    /**
     * Constructor method for ArrayOfSeatMapAirSeatData
     * @uses ArrayOfSeatMapAirSeatData::setSeatMapAirSeatData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData[] $seatMapAirSeatData
     */
    public function __construct(array $seatMapAirSeatData = array())
    {
        $this
            ->setSeatMapAirSeatData($seatMapAirSeatData);
    }
    /**
     * Get SeatMapAirSeatData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData[]|null
     */
    public function getSeatMapAirSeatData()
    {
        return isset($this->SeatMapAirSeatData) ? $this->SeatMapAirSeatData : null;
    }
    /**
     * Set SeatMapAirSeatData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData[] $seatMapAirSeatData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapAirSeatData
     */
    public function setSeatMapAirSeatData(array $seatMapAirSeatData = array())
    {
        foreach ($seatMapAirSeatData as $arrayOfSeatMapAirSeatDataSeatMapAirSeatDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfSeatMapAirSeatDataSeatMapAirSeatDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData) {
                throw new \InvalidArgumentException(sprintf('The SeatMapAirSeatData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData, "%s" given', is_object($arrayOfSeatMapAirSeatDataSeatMapAirSeatDataItem) ? get_class($arrayOfSeatMapAirSeatDataSeatMapAirSeatDataItem) : gettype($arrayOfSeatMapAirSeatDataSeatMapAirSeatDataItem)), __LINE__);
            }
        }
        if (is_null($seatMapAirSeatData) || (is_array($seatMapAirSeatData) && empty($seatMapAirSeatData))) {
            unset($this->SeatMapAirSeatData);
        } else {
            $this->SeatMapAirSeatData = $seatMapAirSeatData;
        }
        return $this;
    }
    /**
     * Add item to SeatMapAirSeatData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapAirSeatData
     */
    public function addToSeatMapAirSeatData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData) {
            throw new \InvalidArgumentException(sprintf('The SeatMapAirSeatData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatMapAirSeatData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SeatMapAirSeatData
     */
    public function getAttributeName()
    {
        return 'SeatMapAirSeatData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapAirSeatData
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
