<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSeatMapAirRowData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSeatMapAirRowData
 * @subpackage Arrays
 */
class ArrayOfSeatMapAirRowData extends AbstractStructArrayBase
{
    /**
     * The SeatMapAirRowData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData[]
     */
    public $SeatMapAirRowData;
    /**
     * Constructor method for ArrayOfSeatMapAirRowData
     * @uses ArrayOfSeatMapAirRowData::setSeatMapAirRowData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData[] $seatMapAirRowData
     */
    public function __construct(array $seatMapAirRowData = array())
    {
        $this
            ->setSeatMapAirRowData($seatMapAirRowData);
    }
    /**
     * Get SeatMapAirRowData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData[]|null
     */
    public function getSeatMapAirRowData()
    {
        return isset($this->SeatMapAirRowData) ? $this->SeatMapAirRowData : null;
    }
    /**
     * Set SeatMapAirRowData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData[] $seatMapAirRowData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapAirRowData
     */
    public function setSeatMapAirRowData(array $seatMapAirRowData = array())
    {
        foreach ($seatMapAirRowData as $arrayOfSeatMapAirRowDataSeatMapAirRowDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfSeatMapAirRowDataSeatMapAirRowDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData) {
                throw new \InvalidArgumentException(sprintf('The SeatMapAirRowData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData, "%s" given', is_object($arrayOfSeatMapAirRowDataSeatMapAirRowDataItem) ? get_class($arrayOfSeatMapAirRowDataSeatMapAirRowDataItem) : gettype($arrayOfSeatMapAirRowDataSeatMapAirRowDataItem)), __LINE__);
            }
        }
        if (is_null($seatMapAirRowData) || (is_array($seatMapAirRowData) && empty($seatMapAirRowData))) {
            unset($this->SeatMapAirRowData);
        } else {
            $this->SeatMapAirRowData = $seatMapAirRowData;
        }
        return $this;
    }
    /**
     * Add item to SeatMapAirRowData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapAirRowData
     */
    public function addToSeatMapAirRowData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData) {
            throw new \InvalidArgumentException(sprintf('The SeatMapAirRowData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatMapAirRowData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SeatMapAirRowData
     */
    public function getAttributeName()
    {
        return 'SeatMapAirRowData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapAirRowData
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
