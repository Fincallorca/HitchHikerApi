<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBookRequestOSI ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBookRequestOSI
 * @subpackage Arrays
 */
class ArrayOfBookRequestOSI extends AbstractStructArrayBase
{
    /**
     * The BookRequestOSI
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestOSI[]
     */
    public $BookRequestOSI;
    /**
     * Constructor method for ArrayOfBookRequestOSI
     * @uses ArrayOfBookRequestOSI::setBookRequestOSI()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestOSI[] $bookRequestOSI
     */
    public function __construct(array $bookRequestOSI = array())
    {
        $this
            ->setBookRequestOSI($bookRequestOSI);
    }
    /**
     * Get BookRequestOSI value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestOSI[]|null
     */
    public function getBookRequestOSI()
    {
        return isset($this->BookRequestOSI) ? $this->BookRequestOSI : null;
    }
    /**
     * Set BookRequestOSI value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestOSI[] $bookRequestOSI
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestOSI
     */
    public function setBookRequestOSI(array $bookRequestOSI = array())
    {
        foreach ($bookRequestOSI as $arrayOfBookRequestOSIBookRequestOSIItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookRequestOSIBookRequestOSIItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestOSI) {
                throw new \InvalidArgumentException(sprintf('The BookRequestOSI property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestOSI, "%s" given', is_object($arrayOfBookRequestOSIBookRequestOSIItem) ? get_class($arrayOfBookRequestOSIBookRequestOSIItem) : gettype($arrayOfBookRequestOSIBookRequestOSIItem)), __LINE__);
            }
        }
        if (is_null($bookRequestOSI) || (is_array($bookRequestOSI) && empty($bookRequestOSI))) {
            unset($this->BookRequestOSI);
        } else {
            $this->BookRequestOSI = $bookRequestOSI;
        }
        return $this;
    }
    /**
     * Add item to BookRequestOSI value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestOSI $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestOSI
     */
    public function addToBookRequestOSI(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestOSI $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestOSI) {
            throw new \InvalidArgumentException(sprintf('The BookRequestOSI property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestOSI, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BookRequestOSI[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestOSI|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestOSI|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestOSI|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestOSI|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestOSI|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BookRequestOSI
     */
    public function getAttributeName()
    {
        return 'BookRequestOSI';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestOSI
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
