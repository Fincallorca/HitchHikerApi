<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQuoteRequestLeg ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQuoteRequestLeg
 * @subpackage Arrays
 */
class ArrayOfQuoteRequestLeg extends AbstractStructArrayBase
{
    /**
     * The QuoteRequestLeg
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestLeg[]
     */
    public $QuoteRequestLeg;
    /**
     * Constructor method for ArrayOfQuoteRequestLeg
     * @uses ArrayOfQuoteRequestLeg::setQuoteRequestLeg()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestLeg[] $quoteRequestLeg
     */
    public function __construct(array $quoteRequestLeg = array())
    {
        $this
            ->setQuoteRequestLeg($quoteRequestLeg);
    }
    /**
     * Get QuoteRequestLeg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestLeg[]|null
     */
    public function getQuoteRequestLeg()
    {
        return isset($this->QuoteRequestLeg) ? $this->QuoteRequestLeg : null;
    }
    /**
     * Set QuoteRequestLeg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestLeg[] $quoteRequestLeg
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestLeg
     */
    public function setQuoteRequestLeg(array $quoteRequestLeg = array())
    {
        foreach ($quoteRequestLeg as $arrayOfQuoteRequestLegQuoteRequestLegItem) {
            // validation for constraint: itemType
            if (!$arrayOfQuoteRequestLegQuoteRequestLegItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestLeg) {
                throw new \InvalidArgumentException(sprintf('The QuoteRequestLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestLeg, "%s" given', is_object($arrayOfQuoteRequestLegQuoteRequestLegItem) ? get_class($arrayOfQuoteRequestLegQuoteRequestLegItem) : gettype($arrayOfQuoteRequestLegQuoteRequestLegItem)), __LINE__);
            }
        }
        if (is_null($quoteRequestLeg) || (is_array($quoteRequestLeg) && empty($quoteRequestLeg))) {
            unset($this->QuoteRequestLeg);
        } else {
            $this->QuoteRequestLeg = $quoteRequestLeg;
        }
        return $this;
    }
    /**
     * Add item to QuoteRequestLeg value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestLeg $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestLeg
     */
    public function addToQuoteRequestLeg(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestLeg $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestLeg) {
            throw new \InvalidArgumentException(sprintf('The QuoteRequestLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestLeg, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QuoteRequestLeg[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestLeg|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestLeg|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestLeg|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestLeg|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestLeg|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QuoteRequestLeg
     */
    public function getAttributeName()
    {
        return 'QuoteRequestLeg';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestLeg
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
