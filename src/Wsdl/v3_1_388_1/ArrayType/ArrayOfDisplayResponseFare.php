<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDisplayResponseFare ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDisplayResponseFare
 * @subpackage Arrays
 */
class ArrayOfDisplayResponseFare extends AbstractStructArrayBase
{
    /**
     * The DisplayResponseFare
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFare[]
     */
    public $DisplayResponseFare;
    /**
     * Constructor method for ArrayOfDisplayResponseFare
     * @uses ArrayOfDisplayResponseFare::setDisplayResponseFare()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFare[] $displayResponseFare
     */
    public function __construct(array $displayResponseFare = array())
    {
        $this
            ->setDisplayResponseFare($displayResponseFare);
    }
    /**
     * Get DisplayResponseFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFare[]|null
     */
    public function getDisplayResponseFare()
    {
        return isset($this->DisplayResponseFare) ? $this->DisplayResponseFare : null;
    }
    /**
     * Set DisplayResponseFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFare[] $displayResponseFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseFare
     */
    public function setDisplayResponseFare(array $displayResponseFare = array())
    {
        foreach ($displayResponseFare as $arrayOfDisplayResponseFareDisplayResponseFareItem) {
            // validation for constraint: itemType
            if (!$arrayOfDisplayResponseFareDisplayResponseFareItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFare) {
                throw new \InvalidArgumentException(sprintf('The DisplayResponseFare property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFare, "%s" given', is_object($arrayOfDisplayResponseFareDisplayResponseFareItem) ? get_class($arrayOfDisplayResponseFareDisplayResponseFareItem) : gettype($arrayOfDisplayResponseFareDisplayResponseFareItem)), __LINE__);
            }
        }
        if (is_null($displayResponseFare) || (is_array($displayResponseFare) && empty($displayResponseFare))) {
            unset($this->DisplayResponseFare);
        } else {
            $this->DisplayResponseFare = $displayResponseFare;
        }
        return $this;
    }
    /**
     * Add item to DisplayResponseFare value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFare $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseFare
     */
    public function addToDisplayResponseFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFare $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFare) {
            throw new \InvalidArgumentException(sprintf('The DisplayResponseFare property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFare, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DisplayResponseFare[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFare|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFare|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFare|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFare|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFare|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DisplayResponseFare
     */
    public function getAttributeName()
    {
        return 'DisplayResponseFare';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseFare
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
