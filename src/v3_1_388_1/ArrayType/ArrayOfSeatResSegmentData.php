<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSeatResSegmentData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSeatResSegmentData
 * @subpackage Arrays
 */
class ArrayOfSeatResSegmentData extends AbstractStructArrayBase
{
    /**
     * The SeatResSegmentData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData[]
     */
    public $SeatResSegmentData;
    /**
     * Constructor method for ArrayOfSeatResSegmentData
     * @uses ArrayOfSeatResSegmentData::setSeatResSegmentData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData[] $seatResSegmentData
     */
    public function __construct(array $seatResSegmentData = array())
    {
        $this
            ->setSeatResSegmentData($seatResSegmentData);
    }
    /**
     * Get SeatResSegmentData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData[]|null
     */
    public function getSeatResSegmentData()
    {
        return isset($this->SeatResSegmentData) ? $this->SeatResSegmentData : null;
    }
    /**
     * Set SeatResSegmentData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData[] $seatResSegmentData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSegmentData
     */
    public function setSeatResSegmentData(array $seatResSegmentData = array())
    {
        foreach ($seatResSegmentData as $arrayOfSeatResSegmentDataSeatResSegmentDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfSeatResSegmentDataSeatResSegmentDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData) {
                throw new \InvalidArgumentException(sprintf('The SeatResSegmentData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData, "%s" given', is_object($arrayOfSeatResSegmentDataSeatResSegmentDataItem) ? get_class($arrayOfSeatResSegmentDataSeatResSegmentDataItem) : gettype($arrayOfSeatResSegmentDataSeatResSegmentDataItem)), __LINE__);
            }
        }
        if (is_null($seatResSegmentData) || (is_array($seatResSegmentData) && empty($seatResSegmentData))) {
            unset($this->SeatResSegmentData);
        } else {
            $this->SeatResSegmentData = $seatResSegmentData;
        }
        return $this;
    }
    /**
     * Add item to SeatResSegmentData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSegmentData
     */
    public function addToSeatResSegmentData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData) {
            throw new \InvalidArgumentException(sprintf('The SeatResSegmentData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatResSegmentData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SeatResSegmentData
     */
    public function getAttributeName()
    {
        return 'SeatResSegmentData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSegmentData
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
