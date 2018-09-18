<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareComplexResponseFareItem ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareComplexResponseFareItem
 * @subpackage Arrays
 */
class ArrayOfFareComplexResponseFareItem extends AbstractStructArrayBase
{
    /**
     * The FareComplexResponseFareItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem[]
     */
    public $FareComplexResponseFareItem;
    /**
     * Constructor method for ArrayOfFareComplexResponseFareItem
     * @uses ArrayOfFareComplexResponseFareItem::setFareComplexResponseFareItem()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem[] $fareComplexResponseFareItem
     */
    public function __construct(array $fareComplexResponseFareItem = array())
    {
        $this
            ->setFareComplexResponseFareItem($fareComplexResponseFareItem);
    }
    /**
     * Get FareComplexResponseFareItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem[]|null
     */
    public function getFareComplexResponseFareItem()
    {
        return isset($this->FareComplexResponseFareItem) ? $this->FareComplexResponseFareItem : null;
    }
    /**
     * Set FareComplexResponseFareItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem[] $fareComplexResponseFareItem
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFareItem
     */
    public function setFareComplexResponseFareItem(array $fareComplexResponseFareItem = array())
    {
        foreach ($fareComplexResponseFareItem as $arrayOfFareComplexResponseFareItemFareComplexResponseFareItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareComplexResponseFareItemFareComplexResponseFareItemItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem) {
                throw new \InvalidArgumentException(sprintf('The FareComplexResponseFareItem property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem, "%s" given', is_object($arrayOfFareComplexResponseFareItemFareComplexResponseFareItemItem) ? get_class($arrayOfFareComplexResponseFareItemFareComplexResponseFareItemItem) : gettype($arrayOfFareComplexResponseFareItemFareComplexResponseFareItemItem)), __LINE__);
            }
        }
        if (is_null($fareComplexResponseFareItem) || (is_array($fareComplexResponseFareItem) && empty($fareComplexResponseFareItem))) {
            unset($this->FareComplexResponseFareItem);
        } else {
            $this->FareComplexResponseFareItem = $fareComplexResponseFareItem;
        }
        return $this;
    }
    /**
     * Add item to FareComplexResponseFareItem value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFareItem
     */
    public function addToFareComplexResponseFareItem(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem) {
            throw new \InvalidArgumentException(sprintf('The FareComplexResponseFareItem property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareComplexResponseFareItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FareComplexResponseFareItem
     */
    public function getAttributeName()
    {
        return 'FareComplexResponseFareItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFareItem
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
