<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAvailabilityRequestPassengerType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAvailabilityRequestPassengerType
 * @subpackage Arrays
 */
class ArrayOfAvailabilityRequestPassengerType extends AbstractStructArrayBase
{
    /**
     * The AvailabilityRequestPassengerType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType[]
     */
    public $AvailabilityRequestPassengerType;
    /**
     * Constructor method for ArrayOfAvailabilityRequestPassengerType
     * @uses ArrayOfAvailabilityRequestPassengerType::setAvailabilityRequestPassengerType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType[] $availabilityRequestPassengerType
     */
    public function __construct(array $availabilityRequestPassengerType = array())
    {
        $this
            ->setAvailabilityRequestPassengerType($availabilityRequestPassengerType);
    }
    /**
     * Get AvailabilityRequestPassengerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType[]|null
     */
    public function getAvailabilityRequestPassengerType()
    {
        return isset($this->AvailabilityRequestPassengerType) ? $this->AvailabilityRequestPassengerType : null;
    }
    /**
     * Set AvailabilityRequestPassengerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType[] $availabilityRequestPassengerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestPassengerType
     */
    public function setAvailabilityRequestPassengerType(array $availabilityRequestPassengerType = array())
    {
        foreach ($availabilityRequestPassengerType as $arrayOfAvailabilityRequestPassengerTypeAvailabilityRequestPassengerTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfAvailabilityRequestPassengerTypeAvailabilityRequestPassengerTypeItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType) {
                throw new \InvalidArgumentException(sprintf('The AvailabilityRequestPassengerType property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType, "%s" given', is_object($arrayOfAvailabilityRequestPassengerTypeAvailabilityRequestPassengerTypeItem) ? get_class($arrayOfAvailabilityRequestPassengerTypeAvailabilityRequestPassengerTypeItem) : gettype($arrayOfAvailabilityRequestPassengerTypeAvailabilityRequestPassengerTypeItem)), __LINE__);
            }
        }
        if (is_null($availabilityRequestPassengerType) || (is_array($availabilityRequestPassengerType) && empty($availabilityRequestPassengerType))) {
            unset($this->AvailabilityRequestPassengerType);
        } else {
            $this->AvailabilityRequestPassengerType = $availabilityRequestPassengerType;
        }
        return $this;
    }
    /**
     * Add item to AvailabilityRequestPassengerType value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestPassengerType
     */
    public function addToAvailabilityRequestPassengerType(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType) {
            throw new \InvalidArgumentException(sprintf('The AvailabilityRequestPassengerType property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AvailabilityRequestPassengerType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AvailabilityRequestPassengerType
     */
    public function getAttributeName()
    {
        return 'AvailabilityRequestPassengerType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityRequestPassengerType
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
