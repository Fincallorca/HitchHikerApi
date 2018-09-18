<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareResponseSegment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareResponseSegment
 * @subpackage Arrays
 */
class ArrayOfFareResponseSegment extends AbstractStructArrayBase
{
    /**
     * The FareResponseSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment[]
     */
    public $FareResponseSegment;
    /**
     * Constructor method for ArrayOfFareResponseSegment
     * @uses ArrayOfFareResponseSegment::setFareResponseSegment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment[] $fareResponseSegment
     */
    public function __construct(array $fareResponseSegment = array())
    {
        $this
            ->setFareResponseSegment($fareResponseSegment);
    }
    /**
     * Get FareResponseSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment[]|null
     */
    public function getFareResponseSegment()
    {
        return isset($this->FareResponseSegment) ? $this->FareResponseSegment : null;
    }
    /**
     * Set FareResponseSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment[] $fareResponseSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseSegment
     */
    public function setFareResponseSegment(array $fareResponseSegment = array())
    {
        foreach ($fareResponseSegment as $arrayOfFareResponseSegmentFareResponseSegmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareResponseSegmentFareResponseSegmentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment) {
                throw new \InvalidArgumentException(sprintf('The FareResponseSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment, "%s" given', is_object($arrayOfFareResponseSegmentFareResponseSegmentItem) ? get_class($arrayOfFareResponseSegmentFareResponseSegmentItem) : gettype($arrayOfFareResponseSegmentFareResponseSegmentItem)), __LINE__);
            }
        }
        if (is_null($fareResponseSegment) || (is_array($fareResponseSegment) && empty($fareResponseSegment))) {
            unset($this->FareResponseSegment);
        } else {
            $this->FareResponseSegment = $fareResponseSegment;
        }
        return $this;
    }
    /**
     * Add item to FareResponseSegment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseSegment
     */
    public function addToFareResponseSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment) {
            throw new \InvalidArgumentException(sprintf('The FareResponseSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareResponseSegment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseSegment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FareResponseSegment
     */
    public function getAttributeName()
    {
        return 'FareResponseSegment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseSegment
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
