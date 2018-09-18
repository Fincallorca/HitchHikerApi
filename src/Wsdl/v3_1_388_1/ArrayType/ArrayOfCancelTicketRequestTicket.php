<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCancelTicketRequestTicket ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCancelTicketRequestTicket
 * @subpackage Arrays
 */
class ArrayOfCancelTicketRequestTicket extends AbstractStructArrayBase
{
    /**
     * The CancelTicketRequestTicket
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket[]
     */
    public $CancelTicketRequestTicket;
    /**
     * Constructor method for ArrayOfCancelTicketRequestTicket
     * @uses ArrayOfCancelTicketRequestTicket::setCancelTicketRequestTicket()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket[] $cancelTicketRequestTicket
     */
    public function __construct(array $cancelTicketRequestTicket = array())
    {
        $this
            ->setCancelTicketRequestTicket($cancelTicketRequestTicket);
    }
    /**
     * Get CancelTicketRequestTicket value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket[]|null
     */
    public function getCancelTicketRequestTicket()
    {
        return isset($this->CancelTicketRequestTicket) ? $this->CancelTicketRequestTicket : null;
    }
    /**
     * Set CancelTicketRequestTicket value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket[] $cancelTicketRequestTicket
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelTicketRequestTicket
     */
    public function setCancelTicketRequestTicket(array $cancelTicketRequestTicket = array())
    {
        foreach ($cancelTicketRequestTicket as $arrayOfCancelTicketRequestTicketCancelTicketRequestTicketItem) {
            // validation for constraint: itemType
            if (!$arrayOfCancelTicketRequestTicketCancelTicketRequestTicketItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket) {
                throw new \InvalidArgumentException(sprintf('The CancelTicketRequestTicket property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket, "%s" given', is_object($arrayOfCancelTicketRequestTicketCancelTicketRequestTicketItem) ? get_class($arrayOfCancelTicketRequestTicketCancelTicketRequestTicketItem) : gettype($arrayOfCancelTicketRequestTicketCancelTicketRequestTicketItem)), __LINE__);
            }
        }
        if (is_null($cancelTicketRequestTicket) || (is_array($cancelTicketRequestTicket) && empty($cancelTicketRequestTicket))) {
            unset($this->CancelTicketRequestTicket);
        } else {
            $this->CancelTicketRequestTicket = $cancelTicketRequestTicket;
        }
        return $this;
    }
    /**
     * Add item to CancelTicketRequestTicket value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelTicketRequestTicket
     */
    public function addToCancelTicketRequestTicket(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket) {
            throw new \InvalidArgumentException(sprintf('The CancelTicketRequestTicket property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CancelTicketRequestTicket[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CancelTicketRequestTicket
     */
    public function getAttributeName()
    {
        return 'CancelTicketRequestTicket';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelTicketRequestTicket
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
