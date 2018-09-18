<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSeatMapDetailData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSeatMapDetailData
 * @subpackage Arrays
 */
class ArrayOfSeatMapDetailData extends AbstractStructArrayBase
{
    /**
     * The SeatMapDetailData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapDetailData[]
     */
    public $SeatMapDetailData;
    /**
     * Constructor method for ArrayOfSeatMapDetailData
     * @uses ArrayOfSeatMapDetailData::setSeatMapDetailData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapDetailData[] $seatMapDetailData
     */
    public function __construct(array $seatMapDetailData = array())
    {
        $this
            ->setSeatMapDetailData($seatMapDetailData);
    }
    /**
     * Get SeatMapDetailData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapDetailData[]|null
     */
    public function getSeatMapDetailData()
    {
        return isset($this->SeatMapDetailData) ? $this->SeatMapDetailData : null;
    }
    /**
     * Set SeatMapDetailData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapDetailData[] $seatMapDetailData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapDetailData
     */
    public function setSeatMapDetailData(array $seatMapDetailData = array())
    {
        foreach ($seatMapDetailData as $arrayOfSeatMapDetailDataSeatMapDetailDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfSeatMapDetailDataSeatMapDetailDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapDetailData) {
                throw new \InvalidArgumentException(sprintf('The SeatMapDetailData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapDetailData, "%s" given', is_object($arrayOfSeatMapDetailDataSeatMapDetailDataItem) ? get_class($arrayOfSeatMapDetailDataSeatMapDetailDataItem) : gettype($arrayOfSeatMapDetailDataSeatMapDetailDataItem)), __LINE__);
            }
        }
        if (is_null($seatMapDetailData) || (is_array($seatMapDetailData) && empty($seatMapDetailData))) {
            unset($this->SeatMapDetailData);
        } else {
            $this->SeatMapDetailData = $seatMapDetailData;
        }
        return $this;
    }
    /**
     * Add item to SeatMapDetailData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapDetailData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapDetailData
     */
    public function addToSeatMapDetailData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapDetailData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapDetailData) {
            throw new \InvalidArgumentException(sprintf('The SeatMapDetailData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapDetailData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatMapDetailData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapDetailData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapDetailData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapDetailData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapDetailData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapDetailData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SeatMapDetailData
     */
    public function getAttributeName()
    {
        return 'SeatMapDetailData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapDetailData
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
