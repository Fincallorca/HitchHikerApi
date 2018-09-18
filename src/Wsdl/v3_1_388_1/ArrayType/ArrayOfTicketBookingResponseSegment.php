<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTicketBookingResponseSegment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTicketBookingResponseSegment
 * @subpackage Arrays
 */
class ArrayOfTicketBookingResponseSegment extends AbstractStructArrayBase
{
    /**
     * The TicketBookingResponseSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment[]
     */
    public $TicketBookingResponseSegment;
    /**
     * Constructor method for ArrayOfTicketBookingResponseSegment
     * @uses ArrayOfTicketBookingResponseSegment::setTicketBookingResponseSegment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment[] $ticketBookingResponseSegment
     */
    public function __construct(array $ticketBookingResponseSegment = array())
    {
        $this
            ->setTicketBookingResponseSegment($ticketBookingResponseSegment);
    }
    /**
     * Get TicketBookingResponseSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment[]|null
     */
    public function getTicketBookingResponseSegment()
    {
        return isset($this->TicketBookingResponseSegment) ? $this->TicketBookingResponseSegment : null;
    }
    /**
     * Set TicketBookingResponseSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment[] $ticketBookingResponseSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingResponseSegment
     */
    public function setTicketBookingResponseSegment(array $ticketBookingResponseSegment = array())
    {
        foreach ($ticketBookingResponseSegment as $arrayOfTicketBookingResponseSegmentTicketBookingResponseSegmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfTicketBookingResponseSegmentTicketBookingResponseSegmentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment) {
                throw new \InvalidArgumentException(sprintf('The TicketBookingResponseSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment, "%s" given', is_object($arrayOfTicketBookingResponseSegmentTicketBookingResponseSegmentItem) ? get_class($arrayOfTicketBookingResponseSegmentTicketBookingResponseSegmentItem) : gettype($arrayOfTicketBookingResponseSegmentTicketBookingResponseSegmentItem)), __LINE__);
            }
        }
        if (is_null($ticketBookingResponseSegment) || (is_array($ticketBookingResponseSegment) && empty($ticketBookingResponseSegment))) {
            unset($this->TicketBookingResponseSegment);
        } else {
            $this->TicketBookingResponseSegment = $ticketBookingResponseSegment;
        }
        return $this;
    }
    /**
     * Add item to TicketBookingResponseSegment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingResponseSegment
     */
    public function addToTicketBookingResponseSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment) {
            throw new \InvalidArgumentException(sprintf('The TicketBookingResponseSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TicketBookingResponseSegment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseSegment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TicketBookingResponseSegment
     */
    public function getAttributeName()
    {
        return 'TicketBookingResponseSegment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingResponseSegment
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
