<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDisplayResponsePassengerTicket ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDisplayResponsePassengerTicket
 * @subpackage Arrays
 */
class ArrayOfDisplayResponsePassengerTicket extends AbstractStructArrayBase
{
    /**
     * The DisplayResponsePassengerTicket
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket[]
     */
    public $DisplayResponsePassengerTicket;
    /**
     * Constructor method for ArrayOfDisplayResponsePassengerTicket
     * @uses ArrayOfDisplayResponsePassengerTicket::setDisplayResponsePassengerTicket()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket[] $displayResponsePassengerTicket
     */
    public function __construct(array $displayResponsePassengerTicket = array())
    {
        $this
            ->setDisplayResponsePassengerTicket($displayResponsePassengerTicket);
    }
    /**
     * Get DisplayResponsePassengerTicket value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket[]|null
     */
    public function getDisplayResponsePassengerTicket()
    {
        return isset($this->DisplayResponsePassengerTicket) ? $this->DisplayResponsePassengerTicket : null;
    }
    /**
     * Set DisplayResponsePassengerTicket value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket[] $displayResponsePassengerTicket
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassengerTicket
     */
    public function setDisplayResponsePassengerTicket(array $displayResponsePassengerTicket = array())
    {
        foreach ($displayResponsePassengerTicket as $arrayOfDisplayResponsePassengerTicketDisplayResponsePassengerTicketItem) {
            // validation for constraint: itemType
            if (!$arrayOfDisplayResponsePassengerTicketDisplayResponsePassengerTicketItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket) {
                throw new \InvalidArgumentException(sprintf('The DisplayResponsePassengerTicket property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket, "%s" given', is_object($arrayOfDisplayResponsePassengerTicketDisplayResponsePassengerTicketItem) ? get_class($arrayOfDisplayResponsePassengerTicketDisplayResponsePassengerTicketItem) : gettype($arrayOfDisplayResponsePassengerTicketDisplayResponsePassengerTicketItem)), __LINE__);
            }
        }
        if (is_null($displayResponsePassengerTicket) || (is_array($displayResponsePassengerTicket) && empty($displayResponsePassengerTicket))) {
            unset($this->DisplayResponsePassengerTicket);
        } else {
            $this->DisplayResponsePassengerTicket = $displayResponsePassengerTicket;
        }
        return $this;
    }
    /**
     * Add item to DisplayResponsePassengerTicket value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassengerTicket
     */
    public function addToDisplayResponsePassengerTicket(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket) {
            throw new \InvalidArgumentException(sprintf('The DisplayResponsePassengerTicket property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DisplayResponsePassengerTicket[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DisplayResponsePassengerTicket
     */
    public function getAttributeName()
    {
        return 'DisplayResponsePassengerTicket';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassengerTicket
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
