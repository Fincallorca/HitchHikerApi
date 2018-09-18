<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBrowseResponseRecordLocatorItem ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBrowseResponseRecordLocatorItem
 * @subpackage Arrays
 */
class ArrayOfBrowseResponseRecordLocatorItem extends AbstractStructArrayBase
{
    /**
     * The BrowseResponseRecordLocatorItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem[]
     */
    public $BrowseResponseRecordLocatorItem;
    /**
     * Constructor method for ArrayOfBrowseResponseRecordLocatorItem
     * @uses ArrayOfBrowseResponseRecordLocatorItem::setBrowseResponseRecordLocatorItem()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem[] $browseResponseRecordLocatorItem
     */
    public function __construct(array $browseResponseRecordLocatorItem = array())
    {
        $this
            ->setBrowseResponseRecordLocatorItem($browseResponseRecordLocatorItem);
    }
    /**
     * Get BrowseResponseRecordLocatorItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem[]|null
     */
    public function getBrowseResponseRecordLocatorItem()
    {
        return isset($this->BrowseResponseRecordLocatorItem) ? $this->BrowseResponseRecordLocatorItem : null;
    }
    /**
     * Set BrowseResponseRecordLocatorItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem[] $browseResponseRecordLocatorItem
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseResponseRecordLocatorItem
     */
    public function setBrowseResponseRecordLocatorItem(array $browseResponseRecordLocatorItem = array())
    {
        foreach ($browseResponseRecordLocatorItem as $arrayOfBrowseResponseRecordLocatorItemBrowseResponseRecordLocatorItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfBrowseResponseRecordLocatorItemBrowseResponseRecordLocatorItemItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem) {
                throw new \InvalidArgumentException(sprintf('The BrowseResponseRecordLocatorItem property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem, "%s" given', is_object($arrayOfBrowseResponseRecordLocatorItemBrowseResponseRecordLocatorItemItem) ? get_class($arrayOfBrowseResponseRecordLocatorItemBrowseResponseRecordLocatorItemItem) : gettype($arrayOfBrowseResponseRecordLocatorItemBrowseResponseRecordLocatorItemItem)), __LINE__);
            }
        }
        if (is_null($browseResponseRecordLocatorItem) || (is_array($browseResponseRecordLocatorItem) && empty($browseResponseRecordLocatorItem))) {
            unset($this->BrowseResponseRecordLocatorItem);
        } else {
            $this->BrowseResponseRecordLocatorItem = $browseResponseRecordLocatorItem;
        }
        return $this;
    }
    /**
     * Add item to BrowseResponseRecordLocatorItem value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseResponseRecordLocatorItem
     */
    public function addToBrowseResponseRecordLocatorItem(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem) {
            throw new \InvalidArgumentException(sprintf('The BrowseResponseRecordLocatorItem property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BrowseResponseRecordLocatorItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BrowseResponseRecordLocatorItem
     */
    public function getAttributeName()
    {
        return 'BrowseResponseRecordLocatorItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseResponseRecordLocatorItem
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
