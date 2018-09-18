<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDisplayRequestCarrier ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDisplayRequestCarrier
 * @subpackage Arrays
 */
class ArrayOfDisplayRequestCarrier extends AbstractStructArrayBase
{
    /**
     * The DisplayRequestCarrier
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier[]
     */
    public $DisplayRequestCarrier;
    /**
     * Constructor method for ArrayOfDisplayRequestCarrier
     * @uses ArrayOfDisplayRequestCarrier::setDisplayRequestCarrier()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier[] $displayRequestCarrier
     */
    public function __construct(array $displayRequestCarrier = array())
    {
        $this
            ->setDisplayRequestCarrier($displayRequestCarrier);
    }
    /**
     * Get DisplayRequestCarrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier[]|null
     */
    public function getDisplayRequestCarrier()
    {
        return isset($this->DisplayRequestCarrier) ? $this->DisplayRequestCarrier : null;
    }
    /**
     * Set DisplayRequestCarrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier[] $displayRequestCarrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestCarrier
     */
    public function setDisplayRequestCarrier(array $displayRequestCarrier = array())
    {
        foreach ($displayRequestCarrier as $arrayOfDisplayRequestCarrierDisplayRequestCarrierItem) {
            // validation for constraint: itemType
            if (!$arrayOfDisplayRequestCarrierDisplayRequestCarrierItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier) {
                throw new \InvalidArgumentException(sprintf('The DisplayRequestCarrier property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier, "%s" given', is_object($arrayOfDisplayRequestCarrierDisplayRequestCarrierItem) ? get_class($arrayOfDisplayRequestCarrierDisplayRequestCarrierItem) : gettype($arrayOfDisplayRequestCarrierDisplayRequestCarrierItem)), __LINE__);
            }
        }
        if (is_null($displayRequestCarrier) || (is_array($displayRequestCarrier) && empty($displayRequestCarrier))) {
            unset($this->DisplayRequestCarrier);
        } else {
            $this->DisplayRequestCarrier = $displayRequestCarrier;
        }
        return $this;
    }
    /**
     * Add item to DisplayRequestCarrier value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestCarrier
     */
    public function addToDisplayRequestCarrier(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier) {
            throw new \InvalidArgumentException(sprintf('The DisplayRequestCarrier property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DisplayRequestCarrier[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DisplayRequestCarrier
     */
    public function getAttributeName()
    {
        return 'DisplayRequestCarrier';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestCarrier
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
