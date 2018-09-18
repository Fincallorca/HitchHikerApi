<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRoutingsResponseRouting ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRoutingsResponseRouting
 * @subpackage Arrays
 */
class ArrayOfRoutingsResponseRouting extends AbstractStructArrayBase
{
    /**
     * The RoutingsResponseRouting
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseRouting[]
     */
    public $RoutingsResponseRouting;
    /**
     * Constructor method for ArrayOfRoutingsResponseRouting
     * @uses ArrayOfRoutingsResponseRouting::setRoutingsResponseRouting()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseRouting[] $routingsResponseRouting
     */
    public function __construct(array $routingsResponseRouting = array())
    {
        $this
            ->setRoutingsResponseRouting($routingsResponseRouting);
    }
    /**
     * Get RoutingsResponseRouting value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseRouting[]|null
     */
    public function getRoutingsResponseRouting()
    {
        return isset($this->RoutingsResponseRouting) ? $this->RoutingsResponseRouting : null;
    }
    /**
     * Set RoutingsResponseRouting value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseRouting[] $routingsResponseRouting
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingsResponseRouting
     */
    public function setRoutingsResponseRouting(array $routingsResponseRouting = array())
    {
        foreach ($routingsResponseRouting as $arrayOfRoutingsResponseRoutingRoutingsResponseRoutingItem) {
            // validation for constraint: itemType
            if (!$arrayOfRoutingsResponseRoutingRoutingsResponseRoutingItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseRouting) {
                throw new \InvalidArgumentException(sprintf('The RoutingsResponseRouting property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseRouting, "%s" given', is_object($arrayOfRoutingsResponseRoutingRoutingsResponseRoutingItem) ? get_class($arrayOfRoutingsResponseRoutingRoutingsResponseRoutingItem) : gettype($arrayOfRoutingsResponseRoutingRoutingsResponseRoutingItem)), __LINE__);
            }
        }
        if (is_null($routingsResponseRouting) || (is_array($routingsResponseRouting) && empty($routingsResponseRouting))) {
            unset($this->RoutingsResponseRouting);
        } else {
            $this->RoutingsResponseRouting = $routingsResponseRouting;
        }
        return $this;
    }
    /**
     * Add item to RoutingsResponseRouting value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseRouting $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingsResponseRouting
     */
    public function addToRoutingsResponseRouting(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseRouting $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseRouting) {
            throw new \InvalidArgumentException(sprintf('The RoutingsResponseRouting property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseRouting, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoutingsResponseRouting[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseRouting|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseRouting|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseRouting|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseRouting|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseRouting|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RoutingsResponseRouting
     */
    public function getAttributeName()
    {
        return 'RoutingsResponseRouting';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingsResponseRouting
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
