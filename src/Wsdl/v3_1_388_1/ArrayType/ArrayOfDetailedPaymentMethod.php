<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDetailedPaymentMethod ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDetailedPaymentMethod
 * @subpackage Arrays
 */
class ArrayOfDetailedPaymentMethod extends AbstractStructArrayBase
{
    /**
     * The DetailedPaymentMethod
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod[]
     */
    public $DetailedPaymentMethod;
    /**
     * Constructor method for ArrayOfDetailedPaymentMethod
     * @uses ArrayOfDetailedPaymentMethod::setDetailedPaymentMethod()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod[] $detailedPaymentMethod
     */
    public function __construct(array $detailedPaymentMethod = array())
    {
        $this
            ->setDetailedPaymentMethod($detailedPaymentMethod);
    }
    /**
     * Get DetailedPaymentMethod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod[]|null
     */
    public function getDetailedPaymentMethod()
    {
        return isset($this->DetailedPaymentMethod) ? $this->DetailedPaymentMethod : null;
    }
    /**
     * Set DetailedPaymentMethod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod[] $detailedPaymentMethod
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod
     */
    public function setDetailedPaymentMethod(array $detailedPaymentMethod = array())
    {
        foreach ($detailedPaymentMethod as $arrayOfDetailedPaymentMethodDetailedPaymentMethodItem) {
            // validation for constraint: itemType
            if (!$arrayOfDetailedPaymentMethodDetailedPaymentMethodItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod) {
                throw new \InvalidArgumentException(sprintf('The DetailedPaymentMethod property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod, "%s" given', is_object($arrayOfDetailedPaymentMethodDetailedPaymentMethodItem) ? get_class($arrayOfDetailedPaymentMethodDetailedPaymentMethodItem) : gettype($arrayOfDetailedPaymentMethodDetailedPaymentMethodItem)), __LINE__);
            }
        }
        if (is_null($detailedPaymentMethod) || (is_array($detailedPaymentMethod) && empty($detailedPaymentMethod))) {
            unset($this->DetailedPaymentMethod);
        } else {
            $this->DetailedPaymentMethod = $detailedPaymentMethod;
        }
        return $this;
    }
    /**
     * Add item to DetailedPaymentMethod value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod
     */
    public function addToDetailedPaymentMethod(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod) {
            throw new \InvalidArgumentException(sprintf('The DetailedPaymentMethod property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DetailedPaymentMethod[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DetailedPaymentMethod
     */
    public function getAttributeName()
    {
        return 'DetailedPaymentMethod';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod
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
