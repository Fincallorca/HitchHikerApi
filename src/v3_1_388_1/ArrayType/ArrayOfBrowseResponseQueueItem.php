<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBrowseResponseQueueItem ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBrowseResponseQueueItem
 * @subpackage Arrays
 */
class ArrayOfBrowseResponseQueueItem extends AbstractStructArrayBase
{
    /**
     * The BrowseResponseQueueItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem[]
     */
    public $BrowseResponseQueueItem;
    /**
     * Constructor method for ArrayOfBrowseResponseQueueItem
     * @uses ArrayOfBrowseResponseQueueItem::setBrowseResponseQueueItem()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem[] $browseResponseQueueItem
     */
    public function __construct(array $browseResponseQueueItem = array())
    {
        $this
            ->setBrowseResponseQueueItem($browseResponseQueueItem);
    }
    /**
     * Get BrowseResponseQueueItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem[]|null
     */
    public function getBrowseResponseQueueItem()
    {
        return isset($this->BrowseResponseQueueItem) ? $this->BrowseResponseQueueItem : null;
    }
    /**
     * Set BrowseResponseQueueItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem[] $browseResponseQueueItem
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseResponseQueueItem
     */
    public function setBrowseResponseQueueItem(array $browseResponseQueueItem = array())
    {
        foreach ($browseResponseQueueItem as $arrayOfBrowseResponseQueueItemBrowseResponseQueueItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfBrowseResponseQueueItemBrowseResponseQueueItemItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem) {
                throw new \InvalidArgumentException(sprintf('The BrowseResponseQueueItem property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem, "%s" given', is_object($arrayOfBrowseResponseQueueItemBrowseResponseQueueItemItem) ? get_class($arrayOfBrowseResponseQueueItemBrowseResponseQueueItemItem) : gettype($arrayOfBrowseResponseQueueItemBrowseResponseQueueItemItem)), __LINE__);
            }
        }
        if (is_null($browseResponseQueueItem) || (is_array($browseResponseQueueItem) && empty($browseResponseQueueItem))) {
            unset($this->BrowseResponseQueueItem);
        } else {
            $this->BrowseResponseQueueItem = $browseResponseQueueItem;
        }
        return $this;
    }
    /**
     * Add item to BrowseResponseQueueItem value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseResponseQueueItem
     */
    public function addToBrowseResponseQueueItem(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem) {
            throw new \InvalidArgumentException(sprintf('The BrowseResponseQueueItem property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BrowseResponseQueueItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BrowseResponseQueueItem
     */
    public function getAttributeName()
    {
        return 'BrowseResponseQueueItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseResponseQueueItem
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
