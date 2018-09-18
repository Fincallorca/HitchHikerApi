<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSeatResSeatData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSeatResSeatData
 * @subpackage Arrays
 */
class ArrayOfSeatResSeatData extends AbstractStructArrayBase
{
    /**
     * The SeatResSeatData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData[]
     */
    public $SeatResSeatData;
    /**
     * Constructor method for ArrayOfSeatResSeatData
     * @uses ArrayOfSeatResSeatData::setSeatResSeatData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData[] $seatResSeatData
     */
    public function __construct(array $seatResSeatData = array())
    {
        $this
            ->setSeatResSeatData($seatResSeatData);
    }
    /**
     * Get SeatResSeatData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData[]|null
     */
    public function getSeatResSeatData()
    {
        return isset($this->SeatResSeatData) ? $this->SeatResSeatData : null;
    }
    /**
     * Set SeatResSeatData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData[] $seatResSeatData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatData
     */
    public function setSeatResSeatData(array $seatResSeatData = array())
    {
        foreach ($seatResSeatData as $arrayOfSeatResSeatDataSeatResSeatDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfSeatResSeatDataSeatResSeatDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData) {
                throw new \InvalidArgumentException(sprintf('The SeatResSeatData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData, "%s" given', is_object($arrayOfSeatResSeatDataSeatResSeatDataItem) ? get_class($arrayOfSeatResSeatDataSeatResSeatDataItem) : gettype($arrayOfSeatResSeatDataSeatResSeatDataItem)), __LINE__);
            }
        }
        if (is_null($seatResSeatData) || (is_array($seatResSeatData) && empty($seatResSeatData))) {
            unset($this->SeatResSeatData);
        } else {
            $this->SeatResSeatData = $seatResSeatData;
        }
        return $this;
    }
    /**
     * Add item to SeatResSeatData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatData
     */
    public function addToSeatResSeatData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData) {
            throw new \InvalidArgumentException(sprintf('The SeatResSeatData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatResSeatData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SeatResSeatData
     */
    public function getAttributeName()
    {
        return 'SeatResSeatData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatData
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
