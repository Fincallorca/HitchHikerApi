<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAvailabilityResponseAlternativeType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAvailabilityResponseAlternativeType
 * @subpackage Arrays
 */
class ArrayOfAvailabilityResponseAlternativeType extends AbstractStructArrayBase
{
    /**
     * The AvailabilityResponseAlternativeType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType[]
     */
    public $AvailabilityResponseAlternativeType;
    /**
     * Constructor method for ArrayOfAvailabilityResponseAlternativeType
     * @uses ArrayOfAvailabilityResponseAlternativeType::setAvailabilityResponseAlternativeType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType[] $availabilityResponseAlternativeType
     */
    public function __construct(array $availabilityResponseAlternativeType = array())
    {
        $this
            ->setAvailabilityResponseAlternativeType($availabilityResponseAlternativeType);
    }
    /**
     * Get AvailabilityResponseAlternativeType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType[]|null
     */
    public function getAvailabilityResponseAlternativeType()
    {
        return isset($this->AvailabilityResponseAlternativeType) ? $this->AvailabilityResponseAlternativeType : null;
    }
    /**
     * Set AvailabilityResponseAlternativeType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType[] $availabilityResponseAlternativeType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseAlternativeType
     */
    public function setAvailabilityResponseAlternativeType(array $availabilityResponseAlternativeType = array())
    {
        foreach ($availabilityResponseAlternativeType as $arrayOfAvailabilityResponseAlternativeTypeAvailabilityResponseAlternativeTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfAvailabilityResponseAlternativeTypeAvailabilityResponseAlternativeTypeItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType) {
                throw new \InvalidArgumentException(sprintf('The AvailabilityResponseAlternativeType property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType, "%s" given', is_object($arrayOfAvailabilityResponseAlternativeTypeAvailabilityResponseAlternativeTypeItem) ? get_class($arrayOfAvailabilityResponseAlternativeTypeAvailabilityResponseAlternativeTypeItem) : gettype($arrayOfAvailabilityResponseAlternativeTypeAvailabilityResponseAlternativeTypeItem)), __LINE__);
            }
        }
        if (is_null($availabilityResponseAlternativeType) || (is_array($availabilityResponseAlternativeType) && empty($availabilityResponseAlternativeType))) {
            unset($this->AvailabilityResponseAlternativeType);
        } else {
            $this->AvailabilityResponseAlternativeType = $availabilityResponseAlternativeType;
        }
        return $this;
    }
    /**
     * Add item to AvailabilityResponseAlternativeType value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseAlternativeType
     */
    public function addToAvailabilityResponseAlternativeType(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType) {
            throw new \InvalidArgumentException(sprintf('The AvailabilityResponseAlternativeType property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AvailabilityResponseAlternativeType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AvailabilityResponseAlternativeType
     */
    public function getAttributeName()
    {
        return 'AvailabilityResponseAlternativeType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseAlternativeType
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
