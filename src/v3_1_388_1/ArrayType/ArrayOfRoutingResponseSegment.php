<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRoutingResponseSegment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRoutingResponseSegment
 * @subpackage Arrays
 */
class ArrayOfRoutingResponseSegment extends AbstractStructArrayBase
{
    /**
     * The RoutingResponseSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment[]
     */
    public $RoutingResponseSegment;
    /**
     * Constructor method for ArrayOfRoutingResponseSegment
     * @uses ArrayOfRoutingResponseSegment::setRoutingResponseSegment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment[] $routingResponseSegment
     */
    public function __construct(array $routingResponseSegment = array())
    {
        $this
            ->setRoutingResponseSegment($routingResponseSegment);
    }
    /**
     * Get RoutingResponseSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment[]|null
     */
    public function getRoutingResponseSegment()
    {
        return isset($this->RoutingResponseSegment) ? $this->RoutingResponseSegment : null;
    }
    /**
     * Set RoutingResponseSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment[] $routingResponseSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseSegment
     */
    public function setRoutingResponseSegment(array $routingResponseSegment = array())
    {
        foreach ($routingResponseSegment as $arrayOfRoutingResponseSegmentRoutingResponseSegmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfRoutingResponseSegmentRoutingResponseSegmentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment) {
                throw new \InvalidArgumentException(sprintf('The RoutingResponseSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment, "%s" given', is_object($arrayOfRoutingResponseSegmentRoutingResponseSegmentItem) ? get_class($arrayOfRoutingResponseSegmentRoutingResponseSegmentItem) : gettype($arrayOfRoutingResponseSegmentRoutingResponseSegmentItem)), __LINE__);
            }
        }
        if (is_null($routingResponseSegment) || (is_array($routingResponseSegment) && empty($routingResponseSegment))) {
            unset($this->RoutingResponseSegment);
        } else {
            $this->RoutingResponseSegment = $routingResponseSegment;
        }
        return $this;
    }
    /**
     * Add item to RoutingResponseSegment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseSegment
     */
    public function addToRoutingResponseSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment) {
            throw new \InvalidArgumentException(sprintf('The RoutingResponseSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoutingResponseSegment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseSegment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RoutingResponseSegment
     */
    public function getAttributeName()
    {
        return 'RoutingResponseSegment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseSegment
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
