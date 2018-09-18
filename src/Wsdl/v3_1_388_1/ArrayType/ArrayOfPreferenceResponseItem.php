<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPreferenceResponseItem ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPreferenceResponseItem
 * @subpackage Arrays
 */
class ArrayOfPreferenceResponseItem extends AbstractStructArrayBase
{
    /**
     * The PreferenceResponseItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem[]
     */
    public $PreferenceResponseItem;
    /**
     * Constructor method for ArrayOfPreferenceResponseItem
     * @uses ArrayOfPreferenceResponseItem::setPreferenceResponseItem()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem[] $preferenceResponseItem
     */
    public function __construct(array $preferenceResponseItem = array())
    {
        $this
            ->setPreferenceResponseItem($preferenceResponseItem);
    }
    /**
     * Get PreferenceResponseItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem[]|null
     */
    public function getPreferenceResponseItem()
    {
        return isset($this->PreferenceResponseItem) ? $this->PreferenceResponseItem : null;
    }
    /**
     * Set PreferenceResponseItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem[] $preferenceResponseItem
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceResponseItem
     */
    public function setPreferenceResponseItem(array $preferenceResponseItem = array())
    {
        foreach ($preferenceResponseItem as $arrayOfPreferenceResponseItemPreferenceResponseItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfPreferenceResponseItemPreferenceResponseItemItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem) {
                throw new \InvalidArgumentException(sprintf('The PreferenceResponseItem property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem, "%s" given', is_object($arrayOfPreferenceResponseItemPreferenceResponseItemItem) ? get_class($arrayOfPreferenceResponseItemPreferenceResponseItemItem) : gettype($arrayOfPreferenceResponseItemPreferenceResponseItemItem)), __LINE__);
            }
        }
        if (is_null($preferenceResponseItem) || (is_array($preferenceResponseItem) && empty($preferenceResponseItem))) {
            unset($this->PreferenceResponseItem);
        } else {
            $this->PreferenceResponseItem = $preferenceResponseItem;
        }
        return $this;
    }
    /**
     * Add item to PreferenceResponseItem value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceResponseItem
     */
    public function addToPreferenceResponseItem(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem) {
            throw new \InvalidArgumentException(sprintf('The PreferenceResponseItem property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PreferenceResponseItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PreferenceResponseItem
     */
    public function getAttributeName()
    {
        return 'PreferenceResponseItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceResponseItem
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
