<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBookRequestRemark ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBookRequestRemark
 * @subpackage Arrays
 */
class ArrayOfBookRequestRemark extends AbstractStructArrayBase
{
    /**
     * The BookRequestRemark
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestRemark[]
     */
    public $BookRequestRemark;
    /**
     * Constructor method for ArrayOfBookRequestRemark
     * @uses ArrayOfBookRequestRemark::setBookRequestRemark()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestRemark[] $bookRequestRemark
     */
    public function __construct(array $bookRequestRemark = array())
    {
        $this
            ->setBookRequestRemark($bookRequestRemark);
    }
    /**
     * Get BookRequestRemark value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestRemark[]|null
     */
    public function getBookRequestRemark()
    {
        return isset($this->BookRequestRemark) ? $this->BookRequestRemark : null;
    }
    /**
     * Set BookRequestRemark value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestRemark[] $bookRequestRemark
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestRemark
     */
    public function setBookRequestRemark(array $bookRequestRemark = array())
    {
        foreach ($bookRequestRemark as $arrayOfBookRequestRemarkBookRequestRemarkItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookRequestRemarkBookRequestRemarkItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestRemark) {
                throw new \InvalidArgumentException(sprintf('The BookRequestRemark property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestRemark, "%s" given', is_object($arrayOfBookRequestRemarkBookRequestRemarkItem) ? get_class($arrayOfBookRequestRemarkBookRequestRemarkItem) : gettype($arrayOfBookRequestRemarkBookRequestRemarkItem)), __LINE__);
            }
        }
        if (is_null($bookRequestRemark) || (is_array($bookRequestRemark) && empty($bookRequestRemark))) {
            unset($this->BookRequestRemark);
        } else {
            $this->BookRequestRemark = $bookRequestRemark;
        }
        return $this;
    }
    /**
     * Add item to BookRequestRemark value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestRemark $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestRemark
     */
    public function addToBookRequestRemark(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestRemark $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestRemark) {
            throw new \InvalidArgumentException(sprintf('The BookRequestRemark property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestRemark, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BookRequestRemark[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestRemark|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestRemark|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestRemark|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestRemark|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestRemark|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BookRequestRemark
     */
    public function getAttributeName()
    {
        return 'BookRequestRemark';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestRemark
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
