<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareComplexPassengeGroup ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareComplexPassengeGroup
 * @subpackage Arrays
 */
class ArrayOfFareComplexPassengeGroup extends AbstractStructArrayBase
{
    /**
     * The FareComplexPassengeGroup
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup[]
     */
    public $FareComplexPassengeGroup;
    /**
     * Constructor method for ArrayOfFareComplexPassengeGroup
     * @uses ArrayOfFareComplexPassengeGroup::setFareComplexPassengeGroup()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup[] $fareComplexPassengeGroup
     */
    public function __construct(array $fareComplexPassengeGroup = array())
    {
        $this
            ->setFareComplexPassengeGroup($fareComplexPassengeGroup);
    }
    /**
     * Get FareComplexPassengeGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup[]|null
     */
    public function getFareComplexPassengeGroup()
    {
        return isset($this->FareComplexPassengeGroup) ? $this->FareComplexPassengeGroup : null;
    }
    /**
     * Set FareComplexPassengeGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup[] $fareComplexPassengeGroup
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexPassengeGroup
     */
    public function setFareComplexPassengeGroup(array $fareComplexPassengeGroup = array())
    {
        foreach ($fareComplexPassengeGroup as $arrayOfFareComplexPassengeGroupFareComplexPassengeGroupItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareComplexPassengeGroupFareComplexPassengeGroupItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup) {
                throw new \InvalidArgumentException(sprintf('The FareComplexPassengeGroup property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup, "%s" given', is_object($arrayOfFareComplexPassengeGroupFareComplexPassengeGroupItem) ? get_class($arrayOfFareComplexPassengeGroupFareComplexPassengeGroupItem) : gettype($arrayOfFareComplexPassengeGroupFareComplexPassengeGroupItem)), __LINE__);
            }
        }
        if (is_null($fareComplexPassengeGroup) || (is_array($fareComplexPassengeGroup) && empty($fareComplexPassengeGroup))) {
            unset($this->FareComplexPassengeGroup);
        } else {
            $this->FareComplexPassengeGroup = $fareComplexPassengeGroup;
        }
        return $this;
    }
    /**
     * Add item to FareComplexPassengeGroup value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexPassengeGroup
     */
    public function addToFareComplexPassengeGroup(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup) {
            throw new \InvalidArgumentException(sprintf('The FareComplexPassengeGroup property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareComplexPassengeGroup[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FareComplexPassengeGroup
     */
    public function getAttributeName()
    {
        return 'FareComplexPassengeGroup';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexPassengeGroup
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
