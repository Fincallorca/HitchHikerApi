<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRoutingResponseVia ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRoutingResponseVia
 * @subpackage Arrays
 */
class ArrayOfRoutingResponseVia extends AbstractStructArrayBase
{
    /**
     * The RoutingResponseVia
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia[]
     */
    public $RoutingResponseVia;
    /**
     * Constructor method for ArrayOfRoutingResponseVia
     * @uses ArrayOfRoutingResponseVia::setRoutingResponseVia()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia[] $routingResponseVia
     */
    public function __construct(array $routingResponseVia = array())
    {
        $this
            ->setRoutingResponseVia($routingResponseVia);
    }
    /**
     * Get RoutingResponseVia value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia[]|null
     */
    public function getRoutingResponseVia()
    {
        return isset($this->RoutingResponseVia) ? $this->RoutingResponseVia : null;
    }
    /**
     * Set RoutingResponseVia value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia[] $routingResponseVia
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseVia
     */
    public function setRoutingResponseVia(array $routingResponseVia = array())
    {
        foreach ($routingResponseVia as $arrayOfRoutingResponseViaRoutingResponseViaItem) {
            // validation for constraint: itemType
            if (!$arrayOfRoutingResponseViaRoutingResponseViaItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia) {
                throw new \InvalidArgumentException(sprintf('The RoutingResponseVia property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia, "%s" given', is_object($arrayOfRoutingResponseViaRoutingResponseViaItem) ? get_class($arrayOfRoutingResponseViaRoutingResponseViaItem) : gettype($arrayOfRoutingResponseViaRoutingResponseViaItem)), __LINE__);
            }
        }
        if (is_null($routingResponseVia) || (is_array($routingResponseVia) && empty($routingResponseVia))) {
            unset($this->RoutingResponseVia);
        } else {
            $this->RoutingResponseVia = $routingResponseVia;
        }
        return $this;
    }
    /**
     * Add item to RoutingResponseVia value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseVia
     */
    public function addToRoutingResponseVia(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia) {
            throw new \InvalidArgumentException(sprintf('The RoutingResponseVia property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoutingResponseVia[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RoutingResponseVia
     */
    public function getAttributeName()
    {
        return 'RoutingResponseVia';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseVia
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
