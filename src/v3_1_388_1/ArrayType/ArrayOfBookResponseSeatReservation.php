<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBookResponseSeatReservation ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBookResponseSeatReservation
 * @subpackage Arrays
 */
class ArrayOfBookResponseSeatReservation extends AbstractStructArrayBase
{
    /**
     * The BookResponseSeatReservation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation[]
     */
    public $BookResponseSeatReservation;
    /**
     * Constructor method for ArrayOfBookResponseSeatReservation
     * @uses ArrayOfBookResponseSeatReservation::setBookResponseSeatReservation()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation[] $bookResponseSeatReservation
     */
    public function __construct(array $bookResponseSeatReservation = array())
    {
        $this
            ->setBookResponseSeatReservation($bookResponseSeatReservation);
    }
    /**
     * Get BookResponseSeatReservation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation[]|null
     */
    public function getBookResponseSeatReservation()
    {
        return isset($this->BookResponseSeatReservation) ? $this->BookResponseSeatReservation : null;
    }
    /**
     * Set BookResponseSeatReservation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation[] $bookResponseSeatReservation
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponseSeatReservation
     */
    public function setBookResponseSeatReservation(array $bookResponseSeatReservation = array())
    {
        foreach ($bookResponseSeatReservation as $arrayOfBookResponseSeatReservationBookResponseSeatReservationItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookResponseSeatReservationBookResponseSeatReservationItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation) {
                throw new \InvalidArgumentException(sprintf('The BookResponseSeatReservation property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation, "%s" given', is_object($arrayOfBookResponseSeatReservationBookResponseSeatReservationItem) ? get_class($arrayOfBookResponseSeatReservationBookResponseSeatReservationItem) : gettype($arrayOfBookResponseSeatReservationBookResponseSeatReservationItem)), __LINE__);
            }
        }
        if (is_null($bookResponseSeatReservation) || (is_array($bookResponseSeatReservation) && empty($bookResponseSeatReservation))) {
            unset($this->BookResponseSeatReservation);
        } else {
            $this->BookResponseSeatReservation = $bookResponseSeatReservation;
        }
        return $this;
    }
    /**
     * Add item to BookResponseSeatReservation value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponseSeatReservation
     */
    public function addToBookResponseSeatReservation(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation) {
            throw new \InvalidArgumentException(sprintf('The BookResponseSeatReservation property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BookResponseSeatReservation[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BookResponseSeatReservation
     */
    public function getAttributeName()
    {
        return 'BookResponseSeatReservation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponseSeatReservation
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
