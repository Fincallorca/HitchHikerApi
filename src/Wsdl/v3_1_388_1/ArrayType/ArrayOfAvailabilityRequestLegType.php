<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAvailabilityRequestLegType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAvailabilityRequestLegType
 * @subpackage Arrays
 */
class ArrayOfAvailabilityRequestLegType extends AbstractStructArrayBase
{
    /**
     * The AvailabilityRequestLegType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType[]
     */
    public $AvailabilityRequestLegType;
    /**
     * Constructor method for ArrayOfAvailabilityRequestLegType
     * @uses ArrayOfAvailabilityRequestLegType::setAvailabilityRequestLegType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType[] $availabilityRequestLegType
     */
    public function __construct(array $availabilityRequestLegType = array())
    {
        $this
            ->setAvailabilityRequestLegType($availabilityRequestLegType);
    }
    /**
     * Get AvailabilityRequestLegType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType[]|null
     */
    public function getAvailabilityRequestLegType()
    {
        return isset($this->AvailabilityRequestLegType) ? $this->AvailabilityRequestLegType : null;
    }
    /**
     * Set AvailabilityRequestLegType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType[] $availabilityRequestLegType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestLegType
     */
    public function setAvailabilityRequestLegType(array $availabilityRequestLegType = array())
    {
        foreach ($availabilityRequestLegType as $arrayOfAvailabilityRequestLegTypeAvailabilityRequestLegTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfAvailabilityRequestLegTypeAvailabilityRequestLegTypeItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType) {
                throw new \InvalidArgumentException(sprintf('The AvailabilityRequestLegType property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType, "%s" given', is_object($arrayOfAvailabilityRequestLegTypeAvailabilityRequestLegTypeItem) ? get_class($arrayOfAvailabilityRequestLegTypeAvailabilityRequestLegTypeItem) : gettype($arrayOfAvailabilityRequestLegTypeAvailabilityRequestLegTypeItem)), __LINE__);
            }
        }
        if (is_null($availabilityRequestLegType) || (is_array($availabilityRequestLegType) && empty($availabilityRequestLegType))) {
            unset($this->AvailabilityRequestLegType);
        } else {
            $this->AvailabilityRequestLegType = $availabilityRequestLegType;
        }
        return $this;
    }
    /**
     * Add item to AvailabilityRequestLegType value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestLegType
     */
    public function addToAvailabilityRequestLegType(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType) {
            throw new \InvalidArgumentException(sprintf('The AvailabilityRequestLegType property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AvailabilityRequestLegType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestLegType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AvailabilityRequestLegType
     */
    public function getAttributeName()
    {
        return 'AvailabilityRequestLegType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestLegType
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
