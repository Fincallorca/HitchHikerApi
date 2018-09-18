<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBookResponsePassenger ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBookResponsePassenger
 * @subpackage Arrays
 */
class ArrayOfBookResponsePassenger extends AbstractStructArrayBase
{
    /**
     * The BookResponsePassenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponsePassenger[]
     */
    public $BookResponsePassenger;
    /**
     * Constructor method for ArrayOfBookResponsePassenger
     * @uses ArrayOfBookResponsePassenger::setBookResponsePassenger()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponsePassenger[] $bookResponsePassenger
     */
    public function __construct(array $bookResponsePassenger = array())
    {
        $this
            ->setBookResponsePassenger($bookResponsePassenger);
    }
    /**
     * Get BookResponsePassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponsePassenger[]|null
     */
    public function getBookResponsePassenger()
    {
        return isset($this->BookResponsePassenger) ? $this->BookResponsePassenger : null;
    }
    /**
     * Set BookResponsePassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponsePassenger[] $bookResponsePassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponsePassenger
     */
    public function setBookResponsePassenger(array $bookResponsePassenger = array())
    {
        foreach ($bookResponsePassenger as $arrayOfBookResponsePassengerBookResponsePassengerItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookResponsePassengerBookResponsePassengerItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponsePassenger) {
                throw new \InvalidArgumentException(sprintf('The BookResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponsePassenger, "%s" given', is_object($arrayOfBookResponsePassengerBookResponsePassengerItem) ? get_class($arrayOfBookResponsePassengerBookResponsePassengerItem) : gettype($arrayOfBookResponsePassengerBookResponsePassengerItem)), __LINE__);
            }
        }
        if (is_null($bookResponsePassenger) || (is_array($bookResponsePassenger) && empty($bookResponsePassenger))) {
            unset($this->BookResponsePassenger);
        } else {
            $this->BookResponsePassenger = $bookResponsePassenger;
        }
        return $this;
    }
    /**
     * Add item to BookResponsePassenger value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponsePassenger $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponsePassenger
     */
    public function addToBookResponsePassenger(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponsePassenger $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponsePassenger) {
            throw new \InvalidArgumentException(sprintf('The BookResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponsePassenger, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BookResponsePassenger[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponsePassenger|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponsePassenger|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponsePassenger|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponsePassenger|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponsePassenger|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BookResponsePassenger
     */
    public function getAttributeName()
    {
        return 'BookResponsePassenger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookResponsePassenger
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
