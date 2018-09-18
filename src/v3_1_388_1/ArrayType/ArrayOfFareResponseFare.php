<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareResponseFare ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareResponseFare
 * @subpackage Arrays
 */
class ArrayOfFareResponseFare extends AbstractStructArrayBase
{
    /**
     * The FareResponseFare
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFare[]
     */
    public $FareResponseFare;
    /**
     * Constructor method for ArrayOfFareResponseFare
     * @uses ArrayOfFareResponseFare::setFareResponseFare()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFare[] $fareResponseFare
     */
    public function __construct(array $fareResponseFare = array())
    {
        $this
            ->setFareResponseFare($fareResponseFare);
    }
    /**
     * Get FareResponseFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFare[]|null
     */
    public function getFareResponseFare()
    {
        return isset($this->FareResponseFare) ? $this->FareResponseFare : null;
    }
    /**
     * Set FareResponseFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFare[] $fareResponseFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseFare
     */
    public function setFareResponseFare(array $fareResponseFare = array())
    {
        foreach ($fareResponseFare as $arrayOfFareResponseFareFareResponseFareItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareResponseFareFareResponseFareItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFare) {
                throw new \InvalidArgumentException(sprintf('The FareResponseFare property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFare, "%s" given', is_object($arrayOfFareResponseFareFareResponseFareItem) ? get_class($arrayOfFareResponseFareFareResponseFareItem) : gettype($arrayOfFareResponseFareFareResponseFareItem)), __LINE__);
            }
        }
        if (is_null($fareResponseFare) || (is_array($fareResponseFare) && empty($fareResponseFare))) {
            unset($this->FareResponseFare);
        } else {
            $this->FareResponseFare = $fareResponseFare;
        }
        return $this;
    }
    /**
     * Add item to FareResponseFare value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFare $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseFare
     */
    public function addToFareResponseFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFare $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFare) {
            throw new \InvalidArgumentException(sprintf('The FareResponseFare property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFare, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareResponseFare[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFare|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFare|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFare|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFare|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFare|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FareResponseFare
     */
    public function getAttributeName()
    {
        return 'FareResponseFare';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseFare
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
