<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSeatResResponseSegment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSeatResResponseSegment
 * @subpackage Arrays
 */
class ArrayOfSeatResResponseSegment extends AbstractStructArrayBase
{
    /**
     * The SeatResResponseSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment[]
     */
    public $SeatResResponseSegment;
    /**
     * Constructor method for ArrayOfSeatResResponseSegment
     * @uses ArrayOfSeatResResponseSegment::setSeatResResponseSegment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment[] $seatResResponseSegment
     */
    public function __construct(array $seatResResponseSegment = array())
    {
        $this
            ->setSeatResResponseSegment($seatResResponseSegment);
    }
    /**
     * Get SeatResResponseSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment[]|null
     */
    public function getSeatResResponseSegment()
    {
        return isset($this->SeatResResponseSegment) ? $this->SeatResResponseSegment : null;
    }
    /**
     * Set SeatResResponseSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment[] $seatResResponseSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResResponseSegment
     */
    public function setSeatResResponseSegment(array $seatResResponseSegment = array())
    {
        foreach ($seatResResponseSegment as $arrayOfSeatResResponseSegmentSeatResResponseSegmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfSeatResResponseSegmentSeatResResponseSegmentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment) {
                throw new \InvalidArgumentException(sprintf('The SeatResResponseSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment, "%s" given', is_object($arrayOfSeatResResponseSegmentSeatResResponseSegmentItem) ? get_class($arrayOfSeatResResponseSegmentSeatResResponseSegmentItem) : gettype($arrayOfSeatResResponseSegmentSeatResResponseSegmentItem)), __LINE__);
            }
        }
        if (is_null($seatResResponseSegment) || (is_array($seatResResponseSegment) && empty($seatResResponseSegment))) {
            unset($this->SeatResResponseSegment);
        } else {
            $this->SeatResResponseSegment = $seatResResponseSegment;
        }
        return $this;
    }
    /**
     * Add item to SeatResResponseSegment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResResponseSegment
     */
    public function addToSeatResResponseSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment) {
            throw new \InvalidArgumentException(sprintf('The SeatResResponseSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatResResponseSegment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SeatResResponseSegment
     */
    public function getAttributeName()
    {
        return 'SeatResResponseSegment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResResponseSegment
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
