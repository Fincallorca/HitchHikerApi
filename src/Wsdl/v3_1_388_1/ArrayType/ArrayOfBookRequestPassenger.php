<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBookRequestPassenger ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBookRequestPassenger
 * @subpackage Arrays
 */
class ArrayOfBookRequestPassenger extends AbstractStructArrayBase
{
    /**
     * The BookRequestPassenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger[]
     */
    public $BookRequestPassenger;
    /**
     * Constructor method for ArrayOfBookRequestPassenger
     * @uses ArrayOfBookRequestPassenger::setBookRequestPassenger()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger[] $bookRequestPassenger
     */
    public function __construct(array $bookRequestPassenger = array())
    {
        $this
            ->setBookRequestPassenger($bookRequestPassenger);
    }
    /**
     * Get BookRequestPassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger[]|null
     */
    public function getBookRequestPassenger()
    {
        return isset($this->BookRequestPassenger) ? $this->BookRequestPassenger : null;
    }
    /**
     * Set BookRequestPassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger[] $bookRequestPassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestPassenger
     */
    public function setBookRequestPassenger(array $bookRequestPassenger = array())
    {
        foreach ($bookRequestPassenger as $arrayOfBookRequestPassengerBookRequestPassengerItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookRequestPassengerBookRequestPassengerItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger) {
                throw new \InvalidArgumentException(sprintf('The BookRequestPassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger, "%s" given', is_object($arrayOfBookRequestPassengerBookRequestPassengerItem) ? get_class($arrayOfBookRequestPassengerBookRequestPassengerItem) : gettype($arrayOfBookRequestPassengerBookRequestPassengerItem)), __LINE__);
            }
        }
        if (is_null($bookRequestPassenger) || (is_array($bookRequestPassenger) && empty($bookRequestPassenger))) {
            unset($this->BookRequestPassenger);
        } else {
            $this->BookRequestPassenger = $bookRequestPassenger;
        }
        return $this;
    }
    /**
     * Add item to BookRequestPassenger value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestPassenger
     */
    public function addToBookRequestPassenger(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger) {
            throw new \InvalidArgumentException(sprintf('The BookRequestPassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BookRequestPassenger[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BookRequestPassenger
     */
    public function getAttributeName()
    {
        return 'BookRequestPassenger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestPassenger
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
