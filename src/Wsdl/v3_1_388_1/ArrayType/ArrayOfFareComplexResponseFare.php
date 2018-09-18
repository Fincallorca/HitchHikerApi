<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareComplexResponseFare ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareComplexResponseFare
 * @subpackage Arrays
 */
class ArrayOfFareComplexResponseFare extends AbstractStructArrayBase
{
    /**
     * The FareComplexResponseFare
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare[]
     */
    public $FareComplexResponseFare;
    /**
     * Constructor method for ArrayOfFareComplexResponseFare
     * @uses ArrayOfFareComplexResponseFare::setFareComplexResponseFare()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare[] $fareComplexResponseFare
     */
    public function __construct(array $fareComplexResponseFare = array())
    {
        $this
            ->setFareComplexResponseFare($fareComplexResponseFare);
    }
    /**
     * Get FareComplexResponseFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare[]|null
     */
    public function getFareComplexResponseFare()
    {
        return isset($this->FareComplexResponseFare) ? $this->FareComplexResponseFare : null;
    }
    /**
     * Set FareComplexResponseFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare[] $fareComplexResponseFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFare
     */
    public function setFareComplexResponseFare(array $fareComplexResponseFare = array())
    {
        foreach ($fareComplexResponseFare as $arrayOfFareComplexResponseFareFareComplexResponseFareItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareComplexResponseFareFareComplexResponseFareItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare) {
                throw new \InvalidArgumentException(sprintf('The FareComplexResponseFare property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare, "%s" given', is_object($arrayOfFareComplexResponseFareFareComplexResponseFareItem) ? get_class($arrayOfFareComplexResponseFareFareComplexResponseFareItem) : gettype($arrayOfFareComplexResponseFareFareComplexResponseFareItem)), __LINE__);
            }
        }
        if (is_null($fareComplexResponseFare) || (is_array($fareComplexResponseFare) && empty($fareComplexResponseFare))) {
            unset($this->FareComplexResponseFare);
        } else {
            $this->FareComplexResponseFare = $fareComplexResponseFare;
        }
        return $this;
    }
    /**
     * Add item to FareComplexResponseFare value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFare
     */
    public function addToFareComplexResponseFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare) {
            throw new \InvalidArgumentException(sprintf('The FareComplexResponseFare property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareComplexResponseFare[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FareComplexResponseFare
     */
    public function getAttributeName()
    {
        return 'FareComplexResponseFare';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFare
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
