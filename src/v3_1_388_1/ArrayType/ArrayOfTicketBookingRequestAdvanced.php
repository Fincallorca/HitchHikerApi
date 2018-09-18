<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTicketBookingRequestAdvanced ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTicketBookingRequestAdvanced
 * @subpackage Arrays
 */
class ArrayOfTicketBookingRequestAdvanced extends AbstractStructArrayBase
{
    /**
     * The TicketBookingRequestAdvanced
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced[]
     */
    public $TicketBookingRequestAdvanced;
    /**
     * Constructor method for ArrayOfTicketBookingRequestAdvanced
     * @uses ArrayOfTicketBookingRequestAdvanced::setTicketBookingRequestAdvanced()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced[] $ticketBookingRequestAdvanced
     */
    public function __construct(array $ticketBookingRequestAdvanced = array())
    {
        $this
            ->setTicketBookingRequestAdvanced($ticketBookingRequestAdvanced);
    }
    /**
     * Get TicketBookingRequestAdvanced value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced[]|null
     */
    public function getTicketBookingRequestAdvanced()
    {
        return isset($this->TicketBookingRequestAdvanced) ? $this->TicketBookingRequestAdvanced : null;
    }
    /**
     * Set TicketBookingRequestAdvanced value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced[] $ticketBookingRequestAdvanced
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestAdvanced
     */
    public function setTicketBookingRequestAdvanced(array $ticketBookingRequestAdvanced = array())
    {
        foreach ($ticketBookingRequestAdvanced as $arrayOfTicketBookingRequestAdvancedTicketBookingRequestAdvancedItem) {
            // validation for constraint: itemType
            if (!$arrayOfTicketBookingRequestAdvancedTicketBookingRequestAdvancedItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced) {
                throw new \InvalidArgumentException(sprintf('The TicketBookingRequestAdvanced property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced, "%s" given', is_object($arrayOfTicketBookingRequestAdvancedTicketBookingRequestAdvancedItem) ? get_class($arrayOfTicketBookingRequestAdvancedTicketBookingRequestAdvancedItem) : gettype($arrayOfTicketBookingRequestAdvancedTicketBookingRequestAdvancedItem)), __LINE__);
            }
        }
        if (is_null($ticketBookingRequestAdvanced) || (is_array($ticketBookingRequestAdvanced) && empty($ticketBookingRequestAdvanced))) {
            unset($this->TicketBookingRequestAdvanced);
        } else {
            $this->TicketBookingRequestAdvanced = $ticketBookingRequestAdvanced;
        }
        return $this;
    }
    /**
     * Add item to TicketBookingRequestAdvanced value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestAdvanced
     */
    public function addToTicketBookingRequestAdvanced(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced) {
            throw new \InvalidArgumentException(sprintf('The TicketBookingRequestAdvanced property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TicketBookingRequestAdvanced[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TicketBookingRequestAdvanced
     */
    public function getAttributeName()
    {
        return 'TicketBookingRequestAdvanced';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestAdvanced
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
