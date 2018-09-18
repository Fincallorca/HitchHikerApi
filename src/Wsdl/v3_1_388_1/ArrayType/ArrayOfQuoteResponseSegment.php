<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQuoteResponseSegment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQuoteResponseSegment
 * @subpackage Arrays
 */
class ArrayOfQuoteResponseSegment extends AbstractStructArrayBase
{
    /**
     * The QuoteResponseSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment[]
     */
    public $QuoteResponseSegment;
    /**
     * Constructor method for ArrayOfQuoteResponseSegment
     * @uses ArrayOfQuoteResponseSegment::setQuoteResponseSegment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment[] $quoteResponseSegment
     */
    public function __construct(array $quoteResponseSegment = array())
    {
        $this
            ->setQuoteResponseSegment($quoteResponseSegment);
    }
    /**
     * Get QuoteResponseSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment[]|null
     */
    public function getQuoteResponseSegment()
    {
        return isset($this->QuoteResponseSegment) ? $this->QuoteResponseSegment : null;
    }
    /**
     * Set QuoteResponseSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment[] $quoteResponseSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSegment
     */
    public function setQuoteResponseSegment(array $quoteResponseSegment = array())
    {
        foreach ($quoteResponseSegment as $arrayOfQuoteResponseSegmentQuoteResponseSegmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfQuoteResponseSegmentQuoteResponseSegmentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment) {
                throw new \InvalidArgumentException(sprintf('The QuoteResponseSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment, "%s" given', is_object($arrayOfQuoteResponseSegmentQuoteResponseSegmentItem) ? get_class($arrayOfQuoteResponseSegmentQuoteResponseSegmentItem) : gettype($arrayOfQuoteResponseSegmentQuoteResponseSegmentItem)), __LINE__);
            }
        }
        if (is_null($quoteResponseSegment) || (is_array($quoteResponseSegment) && empty($quoteResponseSegment))) {
            unset($this->QuoteResponseSegment);
        } else {
            $this->QuoteResponseSegment = $quoteResponseSegment;
        }
        return $this;
    }
    /**
     * Add item to QuoteResponseSegment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSegment
     */
    public function addToQuoteResponseSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment) {
            throw new \InvalidArgumentException(sprintf('The QuoteResponseSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QuoteResponseSegment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSegment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QuoteResponseSegment
     */
    public function getAttributeName()
    {
        return 'QuoteResponseSegment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSegment
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
