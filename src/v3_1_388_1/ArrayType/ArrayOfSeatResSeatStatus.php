<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSeatResSeatStatus ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSeatResSeatStatus
 * @subpackage Arrays
 */
class ArrayOfSeatResSeatStatus extends AbstractStructArrayBase
{
    /**
     * The SeatResSeatStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus[]
     */
    public $SeatResSeatStatus;
    /**
     * Constructor method for ArrayOfSeatResSeatStatus
     * @uses ArrayOfSeatResSeatStatus::setSeatResSeatStatus()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus[] $seatResSeatStatus
     */
    public function __construct(array $seatResSeatStatus = array())
    {
        $this
            ->setSeatResSeatStatus($seatResSeatStatus);
    }
    /**
     * Get SeatResSeatStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus[]|null
     */
    public function getSeatResSeatStatus()
    {
        return isset($this->SeatResSeatStatus) ? $this->SeatResSeatStatus : null;
    }
    /**
     * Set SeatResSeatStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus[] $seatResSeatStatus
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatStatus
     */
    public function setSeatResSeatStatus(array $seatResSeatStatus = array())
    {
        foreach ($seatResSeatStatus as $arrayOfSeatResSeatStatusSeatResSeatStatusItem) {
            // validation for constraint: itemType
            if (!$arrayOfSeatResSeatStatusSeatResSeatStatusItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus) {
                throw new \InvalidArgumentException(sprintf('The SeatResSeatStatus property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus, "%s" given', is_object($arrayOfSeatResSeatStatusSeatResSeatStatusItem) ? get_class($arrayOfSeatResSeatStatusSeatResSeatStatusItem) : gettype($arrayOfSeatResSeatStatusSeatResSeatStatusItem)), __LINE__);
            }
        }
        if (is_null($seatResSeatStatus) || (is_array($seatResSeatStatus) && empty($seatResSeatStatus))) {
            unset($this->SeatResSeatStatus);
        } else {
            $this->SeatResSeatStatus = $seatResSeatStatus;
        }
        return $this;
    }
    /**
     * Add item to SeatResSeatStatus value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatStatus
     */
    public function addToSeatResSeatStatus(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus) {
            throw new \InvalidArgumentException(sprintf('The SeatResSeatStatus property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatResSeatStatus[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SeatResSeatStatus
     */
    public function getAttributeName()
    {
        return 'SeatResSeatStatus';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatStatus
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
