<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTicketResponseLeg ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTicketResponseLeg
 * @subpackage Arrays
 */
class ArrayOfTicketResponseLeg extends AbstractStructArrayBase
{
    /**
     * The TicketResponseLeg
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg[]
     */
    public $TicketResponseLeg;
    /**
     * Constructor method for ArrayOfTicketResponseLeg
     * @uses ArrayOfTicketResponseLeg::setTicketResponseLeg()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg[] $ticketResponseLeg
     */
    public function __construct(array $ticketResponseLeg = array())
    {
        $this
            ->setTicketResponseLeg($ticketResponseLeg);
    }
    /**
     * Get TicketResponseLeg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg[]|null
     */
    public function getTicketResponseLeg()
    {
        return isset($this->TicketResponseLeg) ? $this->TicketResponseLeg : null;
    }
    /**
     * Set TicketResponseLeg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg[] $ticketResponseLeg
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponseLeg
     */
    public function setTicketResponseLeg(array $ticketResponseLeg = array())
    {
        foreach ($ticketResponseLeg as $arrayOfTicketResponseLegTicketResponseLegItem) {
            // validation for constraint: itemType
            if (!$arrayOfTicketResponseLegTicketResponseLegItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg) {
                throw new \InvalidArgumentException(sprintf('The TicketResponseLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg, "%s" given', is_object($arrayOfTicketResponseLegTicketResponseLegItem) ? get_class($arrayOfTicketResponseLegTicketResponseLegItem) : gettype($arrayOfTicketResponseLegTicketResponseLegItem)), __LINE__);
            }
        }
        if (is_null($ticketResponseLeg) || (is_array($ticketResponseLeg) && empty($ticketResponseLeg))) {
            unset($this->TicketResponseLeg);
        } else {
            $this->TicketResponseLeg = $ticketResponseLeg;
        }
        return $this;
    }
    /**
     * Add item to TicketResponseLeg value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponseLeg
     */
    public function addToTicketResponseLeg(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg) {
            throw new \InvalidArgumentException(sprintf('The TicketResponseLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TicketResponseLeg[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TicketResponseLeg
     */
    public function getAttributeName()
    {
        return 'TicketResponseLeg';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponseLeg
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
