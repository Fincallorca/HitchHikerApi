<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareResponsePassenger ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareResponsePassenger
 * @subpackage Arrays
 */
class ArrayOfFareResponsePassenger extends AbstractStructArrayBase
{
    /**
     * The FareResponsePassenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger[]
     */
    public $FareResponsePassenger;
    /**
     * Constructor method for ArrayOfFareResponsePassenger
     * @uses ArrayOfFareResponsePassenger::setFareResponsePassenger()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger[] $fareResponsePassenger
     */
    public function __construct(array $fareResponsePassenger = array())
    {
        $this
            ->setFareResponsePassenger($fareResponsePassenger);
    }
    /**
     * Get FareResponsePassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger[]|null
     */
    public function getFareResponsePassenger()
    {
        return isset($this->FareResponsePassenger) ? $this->FareResponsePassenger : null;
    }
    /**
     * Set FareResponsePassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger[] $fareResponsePassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponsePassenger
     */
    public function setFareResponsePassenger(array $fareResponsePassenger = array())
    {
        foreach ($fareResponsePassenger as $arrayOfFareResponsePassengerFareResponsePassengerItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareResponsePassengerFareResponsePassengerItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger) {
                throw new \InvalidArgumentException(sprintf('The FareResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger, "%s" given', is_object($arrayOfFareResponsePassengerFareResponsePassengerItem) ? get_class($arrayOfFareResponsePassengerFareResponsePassengerItem) : gettype($arrayOfFareResponsePassengerFareResponsePassengerItem)), __LINE__);
            }
        }
        if (is_null($fareResponsePassenger) || (is_array($fareResponsePassenger) && empty($fareResponsePassenger))) {
            unset($this->FareResponsePassenger);
        } else {
            $this->FareResponsePassenger = $fareResponsePassenger;
        }
        return $this;
    }
    /**
     * Add item to FareResponsePassenger value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponsePassenger
     */
    public function addToFareResponsePassenger(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger) {
            throw new \InvalidArgumentException(sprintf('The FareResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareResponsePassenger[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FareResponsePassenger
     */
    public function getAttributeName()
    {
        return 'FareResponsePassenger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponsePassenger
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
