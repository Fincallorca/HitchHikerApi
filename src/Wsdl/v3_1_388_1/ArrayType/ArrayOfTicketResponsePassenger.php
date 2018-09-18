<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTicketResponsePassenger ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTicketResponsePassenger
 * @subpackage Arrays
 */
class ArrayOfTicketResponsePassenger extends AbstractStructArrayBase
{
    /**
     * The TicketResponsePassenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger[]
     */
    public $TicketResponsePassenger;
    /**
     * Constructor method for ArrayOfTicketResponsePassenger
     * @uses ArrayOfTicketResponsePassenger::setTicketResponsePassenger()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger[] $ticketResponsePassenger
     */
    public function __construct(array $ticketResponsePassenger = array())
    {
        $this
            ->setTicketResponsePassenger($ticketResponsePassenger);
    }
    /**
     * Get TicketResponsePassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger[]|null
     */
    public function getTicketResponsePassenger()
    {
        return isset($this->TicketResponsePassenger) ? $this->TicketResponsePassenger : null;
    }
    /**
     * Set TicketResponsePassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger[] $ticketResponsePassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponsePassenger
     */
    public function setTicketResponsePassenger(array $ticketResponsePassenger = array())
    {
        foreach ($ticketResponsePassenger as $arrayOfTicketResponsePassengerTicketResponsePassengerItem) {
            // validation for constraint: itemType
            if (!$arrayOfTicketResponsePassengerTicketResponsePassengerItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger) {
                throw new \InvalidArgumentException(sprintf('The TicketResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger, "%s" given', is_object($arrayOfTicketResponsePassengerTicketResponsePassengerItem) ? get_class($arrayOfTicketResponsePassengerTicketResponsePassengerItem) : gettype($arrayOfTicketResponsePassengerTicketResponsePassengerItem)), __LINE__);
            }
        }
        if (is_null($ticketResponsePassenger) || (is_array($ticketResponsePassenger) && empty($ticketResponsePassenger))) {
            unset($this->TicketResponsePassenger);
        } else {
            $this->TicketResponsePassenger = $ticketResponsePassenger;
        }
        return $this;
    }
    /**
     * Add item to TicketResponsePassenger value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponsePassenger
     */
    public function addToTicketResponsePassenger(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger) {
            throw new \InvalidArgumentException(sprintf('The TicketResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TicketResponsePassenger[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TicketResponsePassenger
     */
    public function getAttributeName()
    {
        return 'TicketResponsePassenger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponsePassenger
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
