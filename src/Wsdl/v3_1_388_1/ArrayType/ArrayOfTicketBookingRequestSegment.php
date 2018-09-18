<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTicketBookingRequestSegment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTicketBookingRequestSegment
 * @subpackage Arrays
 */
class ArrayOfTicketBookingRequestSegment extends AbstractStructArrayBase
{
    /**
     * The TicketBookingRequestSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment[]
     */
    public $TicketBookingRequestSegment;
    /**
     * Constructor method for ArrayOfTicketBookingRequestSegment
     * @uses ArrayOfTicketBookingRequestSegment::setTicketBookingRequestSegment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment[] $ticketBookingRequestSegment
     */
    public function __construct(array $ticketBookingRequestSegment = array())
    {
        $this
            ->setTicketBookingRequestSegment($ticketBookingRequestSegment);
    }
    /**
     * Get TicketBookingRequestSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment[]|null
     */
    public function getTicketBookingRequestSegment()
    {
        return isset($this->TicketBookingRequestSegment) ? $this->TicketBookingRequestSegment : null;
    }
    /**
     * Set TicketBookingRequestSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment[] $ticketBookingRequestSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestSegment
     */
    public function setTicketBookingRequestSegment(array $ticketBookingRequestSegment = array())
    {
        foreach ($ticketBookingRequestSegment as $arrayOfTicketBookingRequestSegmentTicketBookingRequestSegmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfTicketBookingRequestSegmentTicketBookingRequestSegmentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment) {
                throw new \InvalidArgumentException(sprintf('The TicketBookingRequestSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment, "%s" given', is_object($arrayOfTicketBookingRequestSegmentTicketBookingRequestSegmentItem) ? get_class($arrayOfTicketBookingRequestSegmentTicketBookingRequestSegmentItem) : gettype($arrayOfTicketBookingRequestSegmentTicketBookingRequestSegmentItem)), __LINE__);
            }
        }
        if (is_null($ticketBookingRequestSegment) || (is_array($ticketBookingRequestSegment) && empty($ticketBookingRequestSegment))) {
            unset($this->TicketBookingRequestSegment);
        } else {
            $this->TicketBookingRequestSegment = $ticketBookingRequestSegment;
        }
        return $this;
    }
    /**
     * Add item to TicketBookingRequestSegment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestSegment
     */
    public function addToTicketBookingRequestSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment) {
            throw new \InvalidArgumentException(sprintf('The TicketBookingRequestSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TicketBookingRequestSegment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestSegment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TicketBookingRequestSegment
     */
    public function getAttributeName()
    {
        return 'TicketBookingRequestSegment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestSegment
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
