<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRoutingResponseLocation ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRoutingResponseLocation
 * @subpackage Arrays
 */
class ArrayOfRoutingResponseLocation extends AbstractStructArrayBase
{
    /**
     * The RoutingResponseLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseLocation[]
     */
    public $RoutingResponseLocation;
    /**
     * Constructor method for ArrayOfRoutingResponseLocation
     * @uses ArrayOfRoutingResponseLocation::setRoutingResponseLocation()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseLocation[] $routingResponseLocation
     */
    public function __construct(array $routingResponseLocation = array())
    {
        $this
            ->setRoutingResponseLocation($routingResponseLocation);
    }
    /**
     * Get RoutingResponseLocation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseLocation[]|null
     */
    public function getRoutingResponseLocation()
    {
        return isset($this->RoutingResponseLocation) ? $this->RoutingResponseLocation : null;
    }
    /**
     * Set RoutingResponseLocation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseLocation[] $routingResponseLocation
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation
     */
    public function setRoutingResponseLocation(array $routingResponseLocation = array())
    {
        foreach ($routingResponseLocation as $arrayOfRoutingResponseLocationRoutingResponseLocationItem) {
            // validation for constraint: itemType
            if (!$arrayOfRoutingResponseLocationRoutingResponseLocationItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseLocation) {
                throw new \InvalidArgumentException(sprintf('The RoutingResponseLocation property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseLocation, "%s" given', is_object($arrayOfRoutingResponseLocationRoutingResponseLocationItem) ? get_class($arrayOfRoutingResponseLocationRoutingResponseLocationItem) : gettype($arrayOfRoutingResponseLocationRoutingResponseLocationItem)), __LINE__);
            }
        }
        if (is_null($routingResponseLocation) || (is_array($routingResponseLocation) && empty($routingResponseLocation))) {
            unset($this->RoutingResponseLocation);
        } else {
            $this->RoutingResponseLocation = $routingResponseLocation;
        }
        return $this;
    }
    /**
     * Add item to RoutingResponseLocation value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseLocation $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation
     */
    public function addToRoutingResponseLocation(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseLocation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseLocation) {
            throw new \InvalidArgumentException(sprintf('The RoutingResponseLocation property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseLocation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoutingResponseLocation[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseLocation|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseLocation|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseLocation|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseLocation|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseLocation|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RoutingResponseLocation
     */
    public function getAttributeName()
    {
        return 'RoutingResponseLocation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation
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
