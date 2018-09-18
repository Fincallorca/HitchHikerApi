<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAvailabilityResponseLegType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAvailabilityResponseLegType
 * @subpackage Arrays
 */
class ArrayOfAvailabilityResponseLegType extends AbstractStructArrayBase
{
    /**
     * The AvailabilityResponseLegType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType[]
     */
    public $AvailabilityResponseLegType;
    /**
     * Constructor method for ArrayOfAvailabilityResponseLegType
     * @uses ArrayOfAvailabilityResponseLegType::setAvailabilityResponseLegType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType[] $availabilityResponseLegType
     */
    public function __construct(array $availabilityResponseLegType = array())
    {
        $this
            ->setAvailabilityResponseLegType($availabilityResponseLegType);
    }
    /**
     * Get AvailabilityResponseLegType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType[]|null
     */
    public function getAvailabilityResponseLegType()
    {
        return isset($this->AvailabilityResponseLegType) ? $this->AvailabilityResponseLegType : null;
    }
    /**
     * Set AvailabilityResponseLegType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType[] $availabilityResponseLegType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseLegType
     */
    public function setAvailabilityResponseLegType(array $availabilityResponseLegType = array())
    {
        foreach ($availabilityResponseLegType as $arrayOfAvailabilityResponseLegTypeAvailabilityResponseLegTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfAvailabilityResponseLegTypeAvailabilityResponseLegTypeItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType) {
                throw new \InvalidArgumentException(sprintf('The AvailabilityResponseLegType property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType, "%s" given', is_object($arrayOfAvailabilityResponseLegTypeAvailabilityResponseLegTypeItem) ? get_class($arrayOfAvailabilityResponseLegTypeAvailabilityResponseLegTypeItem) : gettype($arrayOfAvailabilityResponseLegTypeAvailabilityResponseLegTypeItem)), __LINE__);
            }
        }
        if (is_null($availabilityResponseLegType) || (is_array($availabilityResponseLegType) && empty($availabilityResponseLegType))) {
            unset($this->AvailabilityResponseLegType);
        } else {
            $this->AvailabilityResponseLegType = $availabilityResponseLegType;
        }
        return $this;
    }
    /**
     * Add item to AvailabilityResponseLegType value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseLegType
     */
    public function addToAvailabilityResponseLegType(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType) {
            throw new \InvalidArgumentException(sprintf('The AvailabilityResponseLegType property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AvailabilityResponseLegType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AvailabilityResponseLegType
     */
    public function getAttributeName()
    {
        return 'AvailabilityResponseLegType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseLegType
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
