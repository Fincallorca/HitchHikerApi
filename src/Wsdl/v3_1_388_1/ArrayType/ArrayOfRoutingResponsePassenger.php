<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRoutingResponsePassenger ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRoutingResponsePassenger
 * @subpackage Arrays
 */
class ArrayOfRoutingResponsePassenger extends AbstractStructArrayBase
{
    /**
     * The RoutingResponsePassenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponsePassenger[]
     */
    public $RoutingResponsePassenger;
    /**
     * Constructor method for ArrayOfRoutingResponsePassenger
     * @uses ArrayOfRoutingResponsePassenger::setRoutingResponsePassenger()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponsePassenger[] $routingResponsePassenger
     */
    public function __construct(array $routingResponsePassenger = array())
    {
        $this
            ->setRoutingResponsePassenger($routingResponsePassenger);
    }
    /**
     * Get RoutingResponsePassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponsePassenger[]|null
     */
    public function getRoutingResponsePassenger()
    {
        return isset($this->RoutingResponsePassenger) ? $this->RoutingResponsePassenger : null;
    }
    /**
     * Set RoutingResponsePassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponsePassenger[] $routingResponsePassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponsePassenger
     */
    public function setRoutingResponsePassenger(array $routingResponsePassenger = array())
    {
        foreach ($routingResponsePassenger as $arrayOfRoutingResponsePassengerRoutingResponsePassengerItem) {
            // validation for constraint: itemType
            if (!$arrayOfRoutingResponsePassengerRoutingResponsePassengerItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponsePassenger) {
                throw new \InvalidArgumentException(sprintf('The RoutingResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponsePassenger, "%s" given', is_object($arrayOfRoutingResponsePassengerRoutingResponsePassengerItem) ? get_class($arrayOfRoutingResponsePassengerRoutingResponsePassengerItem) : gettype($arrayOfRoutingResponsePassengerRoutingResponsePassengerItem)), __LINE__);
            }
        }
        if (is_null($routingResponsePassenger) || (is_array($routingResponsePassenger) && empty($routingResponsePassenger))) {
            unset($this->RoutingResponsePassenger);
        } else {
            $this->RoutingResponsePassenger = $routingResponsePassenger;
        }
        return $this;
    }
    /**
     * Add item to RoutingResponsePassenger value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponsePassenger $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponsePassenger
     */
    public function addToRoutingResponsePassenger(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponsePassenger $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponsePassenger) {
            throw new \InvalidArgumentException(sprintf('The RoutingResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponsePassenger, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoutingResponsePassenger[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponsePassenger|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponsePassenger|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponsePassenger|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponsePassenger|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponsePassenger|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RoutingResponsePassenger
     */
    public function getAttributeName()
    {
        return 'RoutingResponsePassenger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponsePassenger
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
