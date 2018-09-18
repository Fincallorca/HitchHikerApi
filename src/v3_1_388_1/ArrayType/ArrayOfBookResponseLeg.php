<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBookResponseLeg ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBookResponseLeg
 * @subpackage Arrays
 */
class ArrayOfBookResponseLeg extends AbstractStructArrayBase
{
    /**
     * The BookResponseLeg
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseLeg[]
     */
    public $BookResponseLeg;
    /**
     * Constructor method for ArrayOfBookResponseLeg
     * @uses ArrayOfBookResponseLeg::setBookResponseLeg()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseLeg[] $bookResponseLeg
     */
    public function __construct(array $bookResponseLeg = array())
    {
        $this
            ->setBookResponseLeg($bookResponseLeg);
    }
    /**
     * Get BookResponseLeg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseLeg[]|null
     */
    public function getBookResponseLeg()
    {
        return isset($this->BookResponseLeg) ? $this->BookResponseLeg : null;
    }
    /**
     * Set BookResponseLeg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseLeg[] $bookResponseLeg
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponseLeg
     */
    public function setBookResponseLeg(array $bookResponseLeg = array())
    {
        foreach ($bookResponseLeg as $arrayOfBookResponseLegBookResponseLegItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookResponseLegBookResponseLegItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseLeg) {
                throw new \InvalidArgumentException(sprintf('The BookResponseLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseLeg, "%s" given', is_object($arrayOfBookResponseLegBookResponseLegItem) ? get_class($arrayOfBookResponseLegBookResponseLegItem) : gettype($arrayOfBookResponseLegBookResponseLegItem)), __LINE__);
            }
        }
        if (is_null($bookResponseLeg) || (is_array($bookResponseLeg) && empty($bookResponseLeg))) {
            unset($this->BookResponseLeg);
        } else {
            $this->BookResponseLeg = $bookResponseLeg;
        }
        return $this;
    }
    /**
     * Add item to BookResponseLeg value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseLeg $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponseLeg
     */
    public function addToBookResponseLeg(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseLeg $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseLeg) {
            throw new \InvalidArgumentException(sprintf('The BookResponseLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseLeg, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BookResponseLeg[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseLeg|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseLeg|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseLeg|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseLeg|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseLeg|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BookResponseLeg
     */
    public function getAttributeName()
    {
        return 'BookResponseLeg';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponseLeg
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
