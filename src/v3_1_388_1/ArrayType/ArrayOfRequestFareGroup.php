<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRequestFareGroup ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRequestFareGroup
 * @subpackage Arrays
 */
class ArrayOfRequestFareGroup extends AbstractStructArrayBase
{
    /**
     * The RequestFareGroup
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup[]
     */
    public $RequestFareGroup;
    /**
     * Constructor method for ArrayOfRequestFareGroup
     * @uses ArrayOfRequestFareGroup::setRequestFareGroup()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup[] $requestFareGroup
     */
    public function __construct(array $requestFareGroup = array())
    {
        $this
            ->setRequestFareGroup($requestFareGroup);
    }
    /**
     * Get RequestFareGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup[]|null
     */
    public function getRequestFareGroup()
    {
        return isset($this->RequestFareGroup) ? $this->RequestFareGroup : null;
    }
    /**
     * Set RequestFareGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup[] $requestFareGroup
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRequestFareGroup
     */
    public function setRequestFareGroup(array $requestFareGroup = array())
    {
        foreach ($requestFareGroup as $arrayOfRequestFareGroupRequestFareGroupItem) {
            // validation for constraint: itemType
            if (!$arrayOfRequestFareGroupRequestFareGroupItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup) {
                throw new \InvalidArgumentException(sprintf('The RequestFareGroup property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup, "%s" given', is_object($arrayOfRequestFareGroupRequestFareGroupItem) ? get_class($arrayOfRequestFareGroupRequestFareGroupItem) : gettype($arrayOfRequestFareGroupRequestFareGroupItem)), __LINE__);
            }
        }
        if (is_null($requestFareGroup) || (is_array($requestFareGroup) && empty($requestFareGroup))) {
            unset($this->RequestFareGroup);
        } else {
            $this->RequestFareGroup = $requestFareGroup;
        }
        return $this;
    }
    /**
     * Add item to RequestFareGroup value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRequestFareGroup
     */
    public function addToRequestFareGroup(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup) {
            throw new \InvalidArgumentException(sprintf('The RequestFareGroup property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RequestFareGroup[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RequestFareGroup
     */
    public function getAttributeName()
    {
        return 'RequestFareGroup';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRequestFareGroup
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
