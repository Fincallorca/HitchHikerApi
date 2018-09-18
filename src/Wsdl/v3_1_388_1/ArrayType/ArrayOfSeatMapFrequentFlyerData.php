<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSeatMapFrequentFlyerData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSeatMapFrequentFlyerData
 * @subpackage Arrays
 */
class ArrayOfSeatMapFrequentFlyerData extends AbstractStructArrayBase
{
    /**
     * The SeatMapFrequentFlyerData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData[]
     */
    public $SeatMapFrequentFlyerData;
    /**
     * Constructor method for ArrayOfSeatMapFrequentFlyerData
     * @uses ArrayOfSeatMapFrequentFlyerData::setSeatMapFrequentFlyerData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData[] $seatMapFrequentFlyerData
     */
    public function __construct(array $seatMapFrequentFlyerData = array())
    {
        $this
            ->setSeatMapFrequentFlyerData($seatMapFrequentFlyerData);
    }
    /**
     * Get SeatMapFrequentFlyerData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData[]|null
     */
    public function getSeatMapFrequentFlyerData()
    {
        return isset($this->SeatMapFrequentFlyerData) ? $this->SeatMapFrequentFlyerData : null;
    }
    /**
     * Set SeatMapFrequentFlyerData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData[] $seatMapFrequentFlyerData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapFrequentFlyerData
     */
    public function setSeatMapFrequentFlyerData(array $seatMapFrequentFlyerData = array())
    {
        foreach ($seatMapFrequentFlyerData as $arrayOfSeatMapFrequentFlyerDataSeatMapFrequentFlyerDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfSeatMapFrequentFlyerDataSeatMapFrequentFlyerDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData) {
                throw new \InvalidArgumentException(sprintf('The SeatMapFrequentFlyerData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData, "%s" given', is_object($arrayOfSeatMapFrequentFlyerDataSeatMapFrequentFlyerDataItem) ? get_class($arrayOfSeatMapFrequentFlyerDataSeatMapFrequentFlyerDataItem) : gettype($arrayOfSeatMapFrequentFlyerDataSeatMapFrequentFlyerDataItem)), __LINE__);
            }
        }
        if (is_null($seatMapFrequentFlyerData) || (is_array($seatMapFrequentFlyerData) && empty($seatMapFrequentFlyerData))) {
            unset($this->SeatMapFrequentFlyerData);
        } else {
            $this->SeatMapFrequentFlyerData = $seatMapFrequentFlyerData;
        }
        return $this;
    }
    /**
     * Add item to SeatMapFrequentFlyerData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapFrequentFlyerData
     */
    public function addToSeatMapFrequentFlyerData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData) {
            throw new \InvalidArgumentException(sprintf('The SeatMapFrequentFlyerData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatMapFrequentFlyerData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SeatMapFrequentFlyerData
     */
    public function getAttributeName()
    {
        return 'SeatMapFrequentFlyerData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapFrequentFlyerData
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
