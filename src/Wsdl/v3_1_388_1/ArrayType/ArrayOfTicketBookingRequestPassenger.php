<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTicketBookingRequestPassenger ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTicketBookingRequestPassenger
 * @subpackage Arrays
 */
class ArrayOfTicketBookingRequestPassenger extends AbstractStructArrayBase
{
    /**
     * The TicketBookingRequestPassenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger[]
     */
    public $TicketBookingRequestPassenger;
    /**
     * Constructor method for ArrayOfTicketBookingRequestPassenger
     * @uses ArrayOfTicketBookingRequestPassenger::setTicketBookingRequestPassenger()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger[] $ticketBookingRequestPassenger
     */
    public function __construct(array $ticketBookingRequestPassenger = array())
    {
        $this
            ->setTicketBookingRequestPassenger($ticketBookingRequestPassenger);
    }
    /**
     * Get TicketBookingRequestPassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger[]|null
     */
    public function getTicketBookingRequestPassenger()
    {
        return isset($this->TicketBookingRequestPassenger) ? $this->TicketBookingRequestPassenger : null;
    }
    /**
     * Set TicketBookingRequestPassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger[] $ticketBookingRequestPassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPassenger
     */
    public function setTicketBookingRequestPassenger(array $ticketBookingRequestPassenger = array())
    {
        foreach ($ticketBookingRequestPassenger as $arrayOfTicketBookingRequestPassengerTicketBookingRequestPassengerItem) {
            // validation for constraint: itemType
            if (!$arrayOfTicketBookingRequestPassengerTicketBookingRequestPassengerItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger) {
                throw new \InvalidArgumentException(sprintf('The TicketBookingRequestPassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger, "%s" given', is_object($arrayOfTicketBookingRequestPassengerTicketBookingRequestPassengerItem) ? get_class($arrayOfTicketBookingRequestPassengerTicketBookingRequestPassengerItem) : gettype($arrayOfTicketBookingRequestPassengerTicketBookingRequestPassengerItem)), __LINE__);
            }
        }
        if (is_null($ticketBookingRequestPassenger) || (is_array($ticketBookingRequestPassenger) && empty($ticketBookingRequestPassenger))) {
            unset($this->TicketBookingRequestPassenger);
        } else {
            $this->TicketBookingRequestPassenger = $ticketBookingRequestPassenger;
        }
        return $this;
    }
    /**
     * Add item to TicketBookingRequestPassenger value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPassenger
     */
    public function addToTicketBookingRequestPassenger(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger) {
            throw new \InvalidArgumentException(sprintf('The TicketBookingRequestPassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TicketBookingRequestPassenger[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TicketBookingRequestPassenger
     */
    public function getAttributeName()
    {
        return 'TicketBookingRequestPassenger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPassenger
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
