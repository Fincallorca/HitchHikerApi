<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBookResponseSegment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBookResponseSegment
 * @subpackage Arrays
 */
class ArrayOfBookResponseSegment extends AbstractStructArrayBase
{
    /**
     * The BookResponseSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSegment[]
     */
    public $BookResponseSegment;
    /**
     * Constructor method for ArrayOfBookResponseSegment
     * @uses ArrayOfBookResponseSegment::setBookResponseSegment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSegment[] $bookResponseSegment
     */
    public function __construct(array $bookResponseSegment = array())
    {
        $this
            ->setBookResponseSegment($bookResponseSegment);
    }
    /**
     * Get BookResponseSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSegment[]|null
     */
    public function getBookResponseSegment()
    {
        return isset($this->BookResponseSegment) ? $this->BookResponseSegment : null;
    }
    /**
     * Set BookResponseSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSegment[] $bookResponseSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponseSegment
     */
    public function setBookResponseSegment(array $bookResponseSegment = array())
    {
        foreach ($bookResponseSegment as $arrayOfBookResponseSegmentBookResponseSegmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookResponseSegmentBookResponseSegmentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSegment) {
                throw new \InvalidArgumentException(sprintf('The BookResponseSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSegment, "%s" given', is_object($arrayOfBookResponseSegmentBookResponseSegmentItem) ? get_class($arrayOfBookResponseSegmentBookResponseSegmentItem) : gettype($arrayOfBookResponseSegmentBookResponseSegmentItem)), __LINE__);
            }
        }
        if (is_null($bookResponseSegment) || (is_array($bookResponseSegment) && empty($bookResponseSegment))) {
            unset($this->BookResponseSegment);
        } else {
            $this->BookResponseSegment = $bookResponseSegment;
        }
        return $this;
    }
    /**
     * Add item to BookResponseSegment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSegment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponseSegment
     */
    public function addToBookResponseSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSegment) {
            throw new \InvalidArgumentException(sprintf('The BookResponseSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BookResponseSegment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSegment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSegment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSegment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSegment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSegment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BookResponseSegment
     */
    public function getAttributeName()
    {
        return 'BookResponseSegment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponseSegment
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
