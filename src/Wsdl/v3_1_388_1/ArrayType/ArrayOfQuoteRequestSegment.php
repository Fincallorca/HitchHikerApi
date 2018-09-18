<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQuoteRequestSegment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQuoteRequestSegment
 * @subpackage Arrays
 */
class ArrayOfQuoteRequestSegment extends AbstractStructArrayBase
{
    /**
     * The QuoteRequestSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment[]
     */
    public $QuoteRequestSegment;
    /**
     * Constructor method for ArrayOfQuoteRequestSegment
     * @uses ArrayOfQuoteRequestSegment::setQuoteRequestSegment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment[] $quoteRequestSegment
     */
    public function __construct(array $quoteRequestSegment = array())
    {
        $this
            ->setQuoteRequestSegment($quoteRequestSegment);
    }
    /**
     * Get QuoteRequestSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment[]|null
     */
    public function getQuoteRequestSegment()
    {
        return isset($this->QuoteRequestSegment) ? $this->QuoteRequestSegment : null;
    }
    /**
     * Set QuoteRequestSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment[] $quoteRequestSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestSegment
     */
    public function setQuoteRequestSegment(array $quoteRequestSegment = array())
    {
        foreach ($quoteRequestSegment as $arrayOfQuoteRequestSegmentQuoteRequestSegmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfQuoteRequestSegmentQuoteRequestSegmentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment) {
                throw new \InvalidArgumentException(sprintf('The QuoteRequestSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment, "%s" given', is_object($arrayOfQuoteRequestSegmentQuoteRequestSegmentItem) ? get_class($arrayOfQuoteRequestSegmentQuoteRequestSegmentItem) : gettype($arrayOfQuoteRequestSegmentQuoteRequestSegmentItem)), __LINE__);
            }
        }
        if (is_null($quoteRequestSegment) || (is_array($quoteRequestSegment) && empty($quoteRequestSegment))) {
            unset($this->QuoteRequestSegment);
        } else {
            $this->QuoteRequestSegment = $quoteRequestSegment;
        }
        return $this;
    }
    /**
     * Add item to QuoteRequestSegment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestSegment
     */
    public function addToQuoteRequestSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment) {
            throw new \InvalidArgumentException(sprintf('The QuoteRequestSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QuoteRequestSegment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestSegment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QuoteRequestSegment
     */
    public function getAttributeName()
    {
        return 'QuoteRequestSegment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestSegment
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
