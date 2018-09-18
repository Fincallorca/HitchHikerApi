<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTicketBookingRequestPayment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTicketBookingRequestPayment
 * @subpackage Arrays
 */
class ArrayOfTicketBookingRequestPayment extends AbstractStructArrayBase
{
    /**
     * The TicketBookingRequestPayment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPayment[]
     */
    public $TicketBookingRequestPayment;
    /**
     * Constructor method for ArrayOfTicketBookingRequestPayment
     * @uses ArrayOfTicketBookingRequestPayment::setTicketBookingRequestPayment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPayment[] $ticketBookingRequestPayment
     */
    public function __construct(array $ticketBookingRequestPayment = array())
    {
        $this
            ->setTicketBookingRequestPayment($ticketBookingRequestPayment);
    }
    /**
     * Get TicketBookingRequestPayment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPayment[]|null
     */
    public function getTicketBookingRequestPayment()
    {
        return isset($this->TicketBookingRequestPayment) ? $this->TicketBookingRequestPayment : null;
    }
    /**
     * Set TicketBookingRequestPayment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPayment[] $ticketBookingRequestPayment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPayment
     */
    public function setTicketBookingRequestPayment(array $ticketBookingRequestPayment = array())
    {
        foreach ($ticketBookingRequestPayment as $arrayOfTicketBookingRequestPaymentTicketBookingRequestPaymentItem) {
            // validation for constraint: itemType
            if (!$arrayOfTicketBookingRequestPaymentTicketBookingRequestPaymentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPayment) {
                throw new \InvalidArgumentException(sprintf('The TicketBookingRequestPayment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPayment, "%s" given', is_object($arrayOfTicketBookingRequestPaymentTicketBookingRequestPaymentItem) ? get_class($arrayOfTicketBookingRequestPaymentTicketBookingRequestPaymentItem) : gettype($arrayOfTicketBookingRequestPaymentTicketBookingRequestPaymentItem)), __LINE__);
            }
        }
        if (is_null($ticketBookingRequestPayment) || (is_array($ticketBookingRequestPayment) && empty($ticketBookingRequestPayment))) {
            unset($this->TicketBookingRequestPayment);
        } else {
            $this->TicketBookingRequestPayment = $ticketBookingRequestPayment;
        }
        return $this;
    }
    /**
     * Add item to TicketBookingRequestPayment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPayment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPayment
     */
    public function addToTicketBookingRequestPayment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPayment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPayment) {
            throw new \InvalidArgumentException(sprintf('The TicketBookingRequestPayment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPayment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TicketBookingRequestPayment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPayment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPayment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPayment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPayment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPayment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TicketBookingRequestPayment
     */
    public function getAttributeName()
    {
        return 'TicketBookingRequestPayment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestPayment
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
