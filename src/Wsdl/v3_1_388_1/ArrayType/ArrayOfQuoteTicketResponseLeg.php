<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQuoteTicketResponseLeg ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQuoteTicketResponseLeg
 * @subpackage Arrays
 */
class ArrayOfQuoteTicketResponseLeg extends AbstractStructArrayBase
{
    /**
     * The QuoteTicketResponseLeg
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseLeg[]
     */
    public $QuoteTicketResponseLeg;
    /**
     * Constructor method for ArrayOfQuoteTicketResponseLeg
     * @uses ArrayOfQuoteTicketResponseLeg::setQuoteTicketResponseLeg()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseLeg[] $quoteTicketResponseLeg
     */
    public function __construct(array $quoteTicketResponseLeg = array())
    {
        $this
            ->setQuoteTicketResponseLeg($quoteTicketResponseLeg);
    }
    /**
     * Get QuoteTicketResponseLeg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseLeg[]|null
     */
    public function getQuoteTicketResponseLeg()
    {
        return isset($this->QuoteTicketResponseLeg) ? $this->QuoteTicketResponseLeg : null;
    }
    /**
     * Set QuoteTicketResponseLeg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseLeg[] $quoteTicketResponseLeg
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteTicketResponseLeg
     */
    public function setQuoteTicketResponseLeg(array $quoteTicketResponseLeg = array())
    {
        foreach ($quoteTicketResponseLeg as $arrayOfQuoteTicketResponseLegQuoteTicketResponseLegItem) {
            // validation for constraint: itemType
            if (!$arrayOfQuoteTicketResponseLegQuoteTicketResponseLegItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseLeg) {
                throw new \InvalidArgumentException(sprintf('The QuoteTicketResponseLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseLeg, "%s" given', is_object($arrayOfQuoteTicketResponseLegQuoteTicketResponseLegItem) ? get_class($arrayOfQuoteTicketResponseLegQuoteTicketResponseLegItem) : gettype($arrayOfQuoteTicketResponseLegQuoteTicketResponseLegItem)), __LINE__);
            }
        }
        if (is_null($quoteTicketResponseLeg) || (is_array($quoteTicketResponseLeg) && empty($quoteTicketResponseLeg))) {
            unset($this->QuoteTicketResponseLeg);
        } else {
            $this->QuoteTicketResponseLeg = $quoteTicketResponseLeg;
        }
        return $this;
    }
    /**
     * Add item to QuoteTicketResponseLeg value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseLeg $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteTicketResponseLeg
     */
    public function addToQuoteTicketResponseLeg(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseLeg $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseLeg) {
            throw new \InvalidArgumentException(sprintf('The QuoteTicketResponseLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseLeg, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QuoteTicketResponseLeg[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseLeg|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseLeg|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseLeg|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseLeg|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteTicketResponseLeg|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QuoteTicketResponseLeg
     */
    public function getAttributeName()
    {
        return 'QuoteTicketResponseLeg';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteTicketResponseLeg
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
