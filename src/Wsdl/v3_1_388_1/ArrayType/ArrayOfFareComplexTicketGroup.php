<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareComplexTicketGroup ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareComplexTicketGroup
 * @subpackage Arrays
 */
class ArrayOfFareComplexTicketGroup extends AbstractStructArrayBase
{
    /**
     * The FareComplexTicketGroup
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup[]
     */
    public $FareComplexTicketGroup;
    /**
     * Constructor method for ArrayOfFareComplexTicketGroup
     * @uses ArrayOfFareComplexTicketGroup::setFareComplexTicketGroup()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup[] $fareComplexTicketGroup
     */
    public function __construct(array $fareComplexTicketGroup = array())
    {
        $this
            ->setFareComplexTicketGroup($fareComplexTicketGroup);
    }
    /**
     * Get FareComplexTicketGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup[]|null
     */
    public function getFareComplexTicketGroup()
    {
        return isset($this->FareComplexTicketGroup) ? $this->FareComplexTicketGroup : null;
    }
    /**
     * Set FareComplexTicketGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup[] $fareComplexTicketGroup
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexTicketGroup
     */
    public function setFareComplexTicketGroup(array $fareComplexTicketGroup = array())
    {
        foreach ($fareComplexTicketGroup as $arrayOfFareComplexTicketGroupFareComplexTicketGroupItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareComplexTicketGroupFareComplexTicketGroupItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup) {
                throw new \InvalidArgumentException(sprintf('The FareComplexTicketGroup property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup, "%s" given', is_object($arrayOfFareComplexTicketGroupFareComplexTicketGroupItem) ? get_class($arrayOfFareComplexTicketGroupFareComplexTicketGroupItem) : gettype($arrayOfFareComplexTicketGroupFareComplexTicketGroupItem)), __LINE__);
            }
        }
        if (is_null($fareComplexTicketGroup) || (is_array($fareComplexTicketGroup) && empty($fareComplexTicketGroup))) {
            unset($this->FareComplexTicketGroup);
        } else {
            $this->FareComplexTicketGroup = $fareComplexTicketGroup;
        }
        return $this;
    }
    /**
     * Add item to FareComplexTicketGroup value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexTicketGroup
     */
    public function addToFareComplexTicketGroup(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup) {
            throw new \InvalidArgumentException(sprintf('The FareComplexTicketGroup property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareComplexTicketGroup[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FareComplexTicketGroup
     */
    public function getAttributeName()
    {
        return 'FareComplexTicketGroup';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexTicketGroup
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
