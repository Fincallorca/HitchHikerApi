<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWebCarrier ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfWebCarrier
 * @subpackage Arrays
 */
class ArrayOfWebCarrier extends AbstractStructArrayBase
{
    /**
     * The WebCarrier
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier[]
     */
    public $WebCarrier;
    /**
     * Constructor method for ArrayOfWebCarrier
     * @uses ArrayOfWebCarrier::setWebCarrier()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier[] $webCarrier
     */
    public function __construct(array $webCarrier = array())
    {
        $this
            ->setWebCarrier($webCarrier);
    }
    /**
     * Get WebCarrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier[]|null
     */
    public function getWebCarrier()
    {
        return isset($this->WebCarrier) ? $this->WebCarrier : null;
    }
    /**
     * Set WebCarrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier[] $webCarrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfWebCarrier
     */
    public function setWebCarrier(array $webCarrier = array())
    {
        foreach ($webCarrier as $arrayOfWebCarrierWebCarrierItem) {
            // validation for constraint: itemType
            if (!$arrayOfWebCarrierWebCarrierItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier) {
                throw new \InvalidArgumentException(sprintf('The WebCarrier property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier, "%s" given', is_object($arrayOfWebCarrierWebCarrierItem) ? get_class($arrayOfWebCarrierWebCarrierItem) : gettype($arrayOfWebCarrierWebCarrierItem)), __LINE__);
            }
        }
        if (is_null($webCarrier) || (is_array($webCarrier) && empty($webCarrier))) {
            unset($this->WebCarrier);
        } else {
            $this->WebCarrier = $webCarrier;
        }
        return $this;
    }
    /**
     * Add item to WebCarrier value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfWebCarrier
     */
    public function addToWebCarrier(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier) {
            throw new \InvalidArgumentException(sprintf('The WebCarrier property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WebCarrier[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WebCarrier
     */
    public function getAttributeName()
    {
        return 'WebCarrier';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfWebCarrier
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
