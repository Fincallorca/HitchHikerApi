<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAvailabilityResponseSegmentType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAvailabilityResponseSegmentType
 * @subpackage Arrays
 */
class ArrayOfAvailabilityResponseSegmentType extends AbstractStructArrayBase
{
    /**
     * The AvailabilityResponseSegmentType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType[]
     */
    public $AvailabilityResponseSegmentType;
    /**
     * Constructor method for ArrayOfAvailabilityResponseSegmentType
     * @uses ArrayOfAvailabilityResponseSegmentType::setAvailabilityResponseSegmentType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType[] $availabilityResponseSegmentType
     */
    public function __construct(array $availabilityResponseSegmentType = array())
    {
        $this
            ->setAvailabilityResponseSegmentType($availabilityResponseSegmentType);
    }
    /**
     * Get AvailabilityResponseSegmentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType[]|null
     */
    public function getAvailabilityResponseSegmentType()
    {
        return isset($this->AvailabilityResponseSegmentType) ? $this->AvailabilityResponseSegmentType : null;
    }
    /**
     * Set AvailabilityResponseSegmentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType[] $availabilityResponseSegmentType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseSegmentType
     */
    public function setAvailabilityResponseSegmentType(array $availabilityResponseSegmentType = array())
    {
        foreach ($availabilityResponseSegmentType as $arrayOfAvailabilityResponseSegmentTypeAvailabilityResponseSegmentTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfAvailabilityResponseSegmentTypeAvailabilityResponseSegmentTypeItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType) {
                throw new \InvalidArgumentException(sprintf('The AvailabilityResponseSegmentType property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType, "%s" given', is_object($arrayOfAvailabilityResponseSegmentTypeAvailabilityResponseSegmentTypeItem) ? get_class($arrayOfAvailabilityResponseSegmentTypeAvailabilityResponseSegmentTypeItem) : gettype($arrayOfAvailabilityResponseSegmentTypeAvailabilityResponseSegmentTypeItem)), __LINE__);
            }
        }
        if (is_null($availabilityResponseSegmentType) || (is_array($availabilityResponseSegmentType) && empty($availabilityResponseSegmentType))) {
            unset($this->AvailabilityResponseSegmentType);
        } else {
            $this->AvailabilityResponseSegmentType = $availabilityResponseSegmentType;
        }
        return $this;
    }
    /**
     * Add item to AvailabilityResponseSegmentType value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseSegmentType
     */
    public function addToAvailabilityResponseSegmentType(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType) {
            throw new \InvalidArgumentException(sprintf('The AvailabilityResponseSegmentType property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AvailabilityResponseSegmentType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseSegmentType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AvailabilityResponseSegmentType
     */
    public function getAttributeName()
    {
        return 'AvailabilityResponseSegmentType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseSegmentType
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
