<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBookRequestSegment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBookRequestSegment
 * @subpackage Arrays
 */
class ArrayOfBookRequestSegment extends AbstractStructArrayBase
{
    /**
     * The BookRequestSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment[]
     */
    public $BookRequestSegment;
    /**
     * Constructor method for ArrayOfBookRequestSegment
     * @uses ArrayOfBookRequestSegment::setBookRequestSegment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment[] $bookRequestSegment
     */
    public function __construct(array $bookRequestSegment = array())
    {
        $this
            ->setBookRequestSegment($bookRequestSegment);
    }
    /**
     * Get BookRequestSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment[]|null
     */
    public function getBookRequestSegment()
    {
        return isset($this->BookRequestSegment) ? $this->BookRequestSegment : null;
    }
    /**
     * Set BookRequestSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment[] $bookRequestSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestSegment
     */
    public function setBookRequestSegment(array $bookRequestSegment = array())
    {
        foreach ($bookRequestSegment as $arrayOfBookRequestSegmentBookRequestSegmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookRequestSegmentBookRequestSegmentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment) {
                throw new \InvalidArgumentException(sprintf('The BookRequestSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment, "%s" given', is_object($arrayOfBookRequestSegmentBookRequestSegmentItem) ? get_class($arrayOfBookRequestSegmentBookRequestSegmentItem) : gettype($arrayOfBookRequestSegmentBookRequestSegmentItem)), __LINE__);
            }
        }
        if (is_null($bookRequestSegment) || (is_array($bookRequestSegment) && empty($bookRequestSegment))) {
            unset($this->BookRequestSegment);
        } else {
            $this->BookRequestSegment = $bookRequestSegment;
        }
        return $this;
    }
    /**
     * Add item to BookRequestSegment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestSegment
     */
    public function addToBookRequestSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment) {
            throw new \InvalidArgumentException(sprintf('The BookRequestSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BookRequestSegment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSegment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BookRequestSegment
     */
    public function getAttributeName()
    {
        return 'BookRequestSegment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestSegment
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
