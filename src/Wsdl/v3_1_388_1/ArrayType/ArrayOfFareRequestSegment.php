<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareRequestSegment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareRequestSegment
 * @subpackage Arrays
 */
class ArrayOfFareRequestSegment extends AbstractStructArrayBase
{
    /**
     * The FareRequestSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment[]
     */
    public $FareRequestSegment;
    /**
     * Constructor method for ArrayOfFareRequestSegment
     * @uses ArrayOfFareRequestSegment::setFareRequestSegment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment[] $fareRequestSegment
     */
    public function __construct(array $fareRequestSegment = array())
    {
        $this
            ->setFareRequestSegment($fareRequestSegment);
    }
    /**
     * Get FareRequestSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment[]|null
     */
    public function getFareRequestSegment()
    {
        return isset($this->FareRequestSegment) ? $this->FareRequestSegment : null;
    }
    /**
     * Set FareRequestSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment[] $fareRequestSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestSegment
     */
    public function setFareRequestSegment(array $fareRequestSegment = array())
    {
        foreach ($fareRequestSegment as $arrayOfFareRequestSegmentFareRequestSegmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareRequestSegmentFareRequestSegmentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment) {
                throw new \InvalidArgumentException(sprintf('The FareRequestSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment, "%s" given', is_object($arrayOfFareRequestSegmentFareRequestSegmentItem) ? get_class($arrayOfFareRequestSegmentFareRequestSegmentItem) : gettype($arrayOfFareRequestSegmentFareRequestSegmentItem)), __LINE__);
            }
        }
        if (is_null($fareRequestSegment) || (is_array($fareRequestSegment) && empty($fareRequestSegment))) {
            unset($this->FareRequestSegment);
        } else {
            $this->FareRequestSegment = $fareRequestSegment;
        }
        return $this;
    }
    /**
     * Add item to FareRequestSegment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestSegment
     */
    public function addToFareRequestSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment) {
            throw new \InvalidArgumentException(sprintf('The FareRequestSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareRequestSegment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestSegment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FareRequestSegment
     */
    public function getAttributeName()
    {
        return 'FareRequestSegment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestSegment
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
