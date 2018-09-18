<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSeatMapSegmentData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSeatMapSegmentData
 * @subpackage Arrays
 */
class ArrayOfSeatMapSegmentData extends AbstractStructArrayBase
{
    /**
     * The SeatMapSegmentData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData[]
     */
    public $SeatMapSegmentData;
    /**
     * Constructor method for ArrayOfSeatMapSegmentData
     * @uses ArrayOfSeatMapSegmentData::setSeatMapSegmentData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData[] $seatMapSegmentData
     */
    public function __construct(array $seatMapSegmentData = array())
    {
        $this
            ->setSeatMapSegmentData($seatMapSegmentData);
    }
    /**
     * Get SeatMapSegmentData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData[]|null
     */
    public function getSeatMapSegmentData()
    {
        return isset($this->SeatMapSegmentData) ? $this->SeatMapSegmentData : null;
    }
    /**
     * Set SeatMapSegmentData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData[] $seatMapSegmentData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapSegmentData
     */
    public function setSeatMapSegmentData(array $seatMapSegmentData = array())
    {
        foreach ($seatMapSegmentData as $arrayOfSeatMapSegmentDataSeatMapSegmentDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfSeatMapSegmentDataSeatMapSegmentDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData) {
                throw new \InvalidArgumentException(sprintf('The SeatMapSegmentData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData, "%s" given', is_object($arrayOfSeatMapSegmentDataSeatMapSegmentDataItem) ? get_class($arrayOfSeatMapSegmentDataSeatMapSegmentDataItem) : gettype($arrayOfSeatMapSegmentDataSeatMapSegmentDataItem)), __LINE__);
            }
        }
        if (is_null($seatMapSegmentData) || (is_array($seatMapSegmentData) && empty($seatMapSegmentData))) {
            unset($this->SeatMapSegmentData);
        } else {
            $this->SeatMapSegmentData = $seatMapSegmentData;
        }
        return $this;
    }
    /**
     * Add item to SeatMapSegmentData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapSegmentData
     */
    public function addToSeatMapSegmentData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData) {
            throw new \InvalidArgumentException(sprintf('The SeatMapSegmentData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatMapSegmentData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SeatMapSegmentData
     */
    public function getAttributeName()
    {
        return 'SeatMapSegmentData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapSegmentData
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
