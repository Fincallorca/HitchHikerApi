<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCancelTicketResponseTicket ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCancelTicketResponseTicket
 * @subpackage Arrays
 */
class ArrayOfCancelTicketResponseTicket extends AbstractStructArrayBase
{
    /**
     * The CancelTicketResponseTicket
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket[]
     */
    public $CancelTicketResponseTicket;
    /**
     * Constructor method for ArrayOfCancelTicketResponseTicket
     * @uses ArrayOfCancelTicketResponseTicket::setCancelTicketResponseTicket()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket[] $cancelTicketResponseTicket
     */
    public function __construct(array $cancelTicketResponseTicket = array())
    {
        $this
            ->setCancelTicketResponseTicket($cancelTicketResponseTicket);
    }
    /**
     * Get CancelTicketResponseTicket value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket[]|null
     */
    public function getCancelTicketResponseTicket()
    {
        return isset($this->CancelTicketResponseTicket) ? $this->CancelTicketResponseTicket : null;
    }
    /**
     * Set CancelTicketResponseTicket value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket[] $cancelTicketResponseTicket
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelTicketResponseTicket
     */
    public function setCancelTicketResponseTicket(array $cancelTicketResponseTicket = array())
    {
        foreach ($cancelTicketResponseTicket as $arrayOfCancelTicketResponseTicketCancelTicketResponseTicketItem) {
            // validation for constraint: itemType
            if (!$arrayOfCancelTicketResponseTicketCancelTicketResponseTicketItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket) {
                throw new \InvalidArgumentException(sprintf('The CancelTicketResponseTicket property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket, "%s" given', is_object($arrayOfCancelTicketResponseTicketCancelTicketResponseTicketItem) ? get_class($arrayOfCancelTicketResponseTicketCancelTicketResponseTicketItem) : gettype($arrayOfCancelTicketResponseTicketCancelTicketResponseTicketItem)), __LINE__);
            }
        }
        if (is_null($cancelTicketResponseTicket) || (is_array($cancelTicketResponseTicket) && empty($cancelTicketResponseTicket))) {
            unset($this->CancelTicketResponseTicket);
        } else {
            $this->CancelTicketResponseTicket = $cancelTicketResponseTicket;
        }
        return $this;
    }
    /**
     * Add item to CancelTicketResponseTicket value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelTicketResponseTicket
     */
    public function addToCancelTicketResponseTicket(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket) {
            throw new \InvalidArgumentException(sprintf('The CancelTicketResponseTicket property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CancelTicketResponseTicket[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CancelTicketResponseTicket
     */
    public function getAttributeName()
    {
        return 'CancelTicketResponseTicket';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelTicketResponseTicket
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
