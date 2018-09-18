<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQuoteResponseLeg ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQuoteResponseLeg
 * @subpackage Arrays
 */
class ArrayOfQuoteResponseLeg extends AbstractStructArrayBase
{
    /**
     * The QuoteResponseLeg
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg[]
     */
    public $QuoteResponseLeg;
    /**
     * Constructor method for ArrayOfQuoteResponseLeg
     * @uses ArrayOfQuoteResponseLeg::setQuoteResponseLeg()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg[] $quoteResponseLeg
     */
    public function __construct(array $quoteResponseLeg = array())
    {
        $this
            ->setQuoteResponseLeg($quoteResponseLeg);
    }
    /**
     * Get QuoteResponseLeg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg[]|null
     */
    public function getQuoteResponseLeg()
    {
        return isset($this->QuoteResponseLeg) ? $this->QuoteResponseLeg : null;
    }
    /**
     * Set QuoteResponseLeg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg[] $quoteResponseLeg
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseLeg
     */
    public function setQuoteResponseLeg(array $quoteResponseLeg = array())
    {
        foreach ($quoteResponseLeg as $arrayOfQuoteResponseLegQuoteResponseLegItem) {
            // validation for constraint: itemType
            if (!$arrayOfQuoteResponseLegQuoteResponseLegItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg) {
                throw new \InvalidArgumentException(sprintf('The QuoteResponseLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg, "%s" given', is_object($arrayOfQuoteResponseLegQuoteResponseLegItem) ? get_class($arrayOfQuoteResponseLegQuoteResponseLegItem) : gettype($arrayOfQuoteResponseLegQuoteResponseLegItem)), __LINE__);
            }
        }
        if (is_null($quoteResponseLeg) || (is_array($quoteResponseLeg) && empty($quoteResponseLeg))) {
            unset($this->QuoteResponseLeg);
        } else {
            $this->QuoteResponseLeg = $quoteResponseLeg;
        }
        return $this;
    }
    /**
     * Add item to QuoteResponseLeg value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseLeg
     */
    public function addToQuoteResponseLeg(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg) {
            throw new \InvalidArgumentException(sprintf('The QuoteResponseLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QuoteResponseLeg[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseLeg|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QuoteResponseLeg
     */
    public function getAttributeName()
    {
        return 'QuoteResponseLeg';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseLeg
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
