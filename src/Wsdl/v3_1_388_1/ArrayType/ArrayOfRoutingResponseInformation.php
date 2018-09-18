<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRoutingResponseInformation ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRoutingResponseInformation
 * @subpackage Arrays
 */
class ArrayOfRoutingResponseInformation extends AbstractStructArrayBase
{
    /**
     * The RoutingResponseInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation[]
     */
    public $RoutingResponseInformation;
    /**
     * Constructor method for ArrayOfRoutingResponseInformation
     * @uses ArrayOfRoutingResponseInformation::setRoutingResponseInformation()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation[] $routingResponseInformation
     */
    public function __construct(array $routingResponseInformation = array())
    {
        $this
            ->setRoutingResponseInformation($routingResponseInformation);
    }
    /**
     * Get RoutingResponseInformation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation[]|null
     */
    public function getRoutingResponseInformation()
    {
        return isset($this->RoutingResponseInformation) ? $this->RoutingResponseInformation : null;
    }
    /**
     * Set RoutingResponseInformation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation[] $routingResponseInformation
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseInformation
     */
    public function setRoutingResponseInformation(array $routingResponseInformation = array())
    {
        foreach ($routingResponseInformation as $arrayOfRoutingResponseInformationRoutingResponseInformationItem) {
            // validation for constraint: itemType
            if (!$arrayOfRoutingResponseInformationRoutingResponseInformationItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation) {
                throw new \InvalidArgumentException(sprintf('The RoutingResponseInformation property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation, "%s" given', is_object($arrayOfRoutingResponseInformationRoutingResponseInformationItem) ? get_class($arrayOfRoutingResponseInformationRoutingResponseInformationItem) : gettype($arrayOfRoutingResponseInformationRoutingResponseInformationItem)), __LINE__);
            }
        }
        if (is_null($routingResponseInformation) || (is_array($routingResponseInformation) && empty($routingResponseInformation))) {
            unset($this->RoutingResponseInformation);
        } else {
            $this->RoutingResponseInformation = $routingResponseInformation;
        }
        return $this;
    }
    /**
     * Add item to RoutingResponseInformation value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseInformation
     */
    public function addToRoutingResponseInformation(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation) {
            throw new \InvalidArgumentException(sprintf('The RoutingResponseInformation property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoutingResponseInformation[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RoutingResponseInformation
     */
    public function getAttributeName()
    {
        return 'RoutingResponseInformation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseInformation
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
