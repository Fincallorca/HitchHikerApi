<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBookRequestLeg ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBookRequestLeg
 * @subpackage Arrays
 */
class ArrayOfBookRequestLeg extends AbstractStructArrayBase
{
    /**
     * The BookRequestLeg
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg[]
     */
    public $BookRequestLeg;
    /**
     * Constructor method for ArrayOfBookRequestLeg
     * @uses ArrayOfBookRequestLeg::setBookRequestLeg()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg[] $bookRequestLeg
     */
    public function __construct(array $bookRequestLeg = array())
    {
        $this
            ->setBookRequestLeg($bookRequestLeg);
    }
    /**
     * Get BookRequestLeg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg[]|null
     */
    public function getBookRequestLeg()
    {
        return isset($this->BookRequestLeg) ? $this->BookRequestLeg : null;
    }
    /**
     * Set BookRequestLeg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg[] $bookRequestLeg
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestLeg
     */
    public function setBookRequestLeg(array $bookRequestLeg = array())
    {
        foreach ($bookRequestLeg as $arrayOfBookRequestLegBookRequestLegItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookRequestLegBookRequestLegItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg) {
                throw new \InvalidArgumentException(sprintf('The BookRequestLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg, "%s" given', is_object($arrayOfBookRequestLegBookRequestLegItem) ? get_class($arrayOfBookRequestLegBookRequestLegItem) : gettype($arrayOfBookRequestLegBookRequestLegItem)), __LINE__);
            }
        }
        if (is_null($bookRequestLeg) || (is_array($bookRequestLeg) && empty($bookRequestLeg))) {
            unset($this->BookRequestLeg);
        } else {
            $this->BookRequestLeg = $bookRequestLeg;
        }
        return $this;
    }
    /**
     * Add item to BookRequestLeg value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestLeg
     */
    public function addToBookRequestLeg(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg) {
            throw new \InvalidArgumentException(sprintf('The BookRequestLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BookRequestLeg[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BookRequestLeg
     */
    public function getAttributeName()
    {
        return 'BookRequestLeg';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestLeg
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
