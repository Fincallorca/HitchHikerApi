<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareRequestPassenger ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareRequestPassenger
 * @subpackage Arrays
 */
class ArrayOfFareRequestPassenger extends AbstractStructArrayBase
{
    /**
     * The FareRequestPassenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger[]
     */
    public $FareRequestPassenger;
    /**
     * Constructor method for ArrayOfFareRequestPassenger
     * @uses ArrayOfFareRequestPassenger::setFareRequestPassenger()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger[] $fareRequestPassenger
     */
    public function __construct(array $fareRequestPassenger = array())
    {
        $this
            ->setFareRequestPassenger($fareRequestPassenger);
    }
    /**
     * Get FareRequestPassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger[]|null
     */
    public function getFareRequestPassenger()
    {
        return isset($this->FareRequestPassenger) ? $this->FareRequestPassenger : null;
    }
    /**
     * Set FareRequestPassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger[] $fareRequestPassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestPassenger
     */
    public function setFareRequestPassenger(array $fareRequestPassenger = array())
    {
        foreach ($fareRequestPassenger as $arrayOfFareRequestPassengerFareRequestPassengerItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareRequestPassengerFareRequestPassengerItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger) {
                throw new \InvalidArgumentException(sprintf('The FareRequestPassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger, "%s" given', is_object($arrayOfFareRequestPassengerFareRequestPassengerItem) ? get_class($arrayOfFareRequestPassengerFareRequestPassengerItem) : gettype($arrayOfFareRequestPassengerFareRequestPassengerItem)), __LINE__);
            }
        }
        if (is_null($fareRequestPassenger) || (is_array($fareRequestPassenger) && empty($fareRequestPassenger))) {
            unset($this->FareRequestPassenger);
        } else {
            $this->FareRequestPassenger = $fareRequestPassenger;
        }
        return $this;
    }
    /**
     * Add item to FareRequestPassenger value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestPassenger
     */
    public function addToFareRequestPassenger(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger) {
            throw new \InvalidArgumentException(sprintf('The FareRequestPassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareRequestPassenger[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FareRequestPassenger
     */
    public function getAttributeName()
    {
        return 'FareRequestPassenger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestPassenger
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
