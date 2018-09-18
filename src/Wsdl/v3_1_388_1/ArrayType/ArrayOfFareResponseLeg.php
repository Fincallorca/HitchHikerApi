<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareResponseLeg ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareResponseLeg
 * @subpackage Arrays
 */
class ArrayOfFareResponseLeg extends AbstractStructArrayBase
{
    /**
     * The FareResponseLeg
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg[]
     */
    public $FareResponseLeg;
    /**
     * Constructor method for ArrayOfFareResponseLeg
     * @uses ArrayOfFareResponseLeg::setFareResponseLeg()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg[] $fareResponseLeg
     */
    public function __construct(array $fareResponseLeg = array())
    {
        $this
            ->setFareResponseLeg($fareResponseLeg);
    }
    /**
     * Get FareResponseLeg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg[]|null
     */
    public function getFareResponseLeg()
    {
        return isset($this->FareResponseLeg) ? $this->FareResponseLeg : null;
    }
    /**
     * Set FareResponseLeg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg[] $fareResponseLeg
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseLeg
     */
    public function setFareResponseLeg(array $fareResponseLeg = array())
    {
        foreach ($fareResponseLeg as $arrayOfFareResponseLegFareResponseLegItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareResponseLegFareResponseLegItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg) {
                throw new \InvalidArgumentException(sprintf('The FareResponseLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg, "%s" given', is_object($arrayOfFareResponseLegFareResponseLegItem) ? get_class($arrayOfFareResponseLegFareResponseLegItem) : gettype($arrayOfFareResponseLegFareResponseLegItem)), __LINE__);
            }
        }
        if (is_null($fareResponseLeg) || (is_array($fareResponseLeg) && empty($fareResponseLeg))) {
            unset($this->FareResponseLeg);
        } else {
            $this->FareResponseLeg = $fareResponseLeg;
        }
        return $this;
    }
    /**
     * Add item to FareResponseLeg value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseLeg
     */
    public function addToFareResponseLeg(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg) {
            throw new \InvalidArgumentException(sprintf('The FareResponseLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareResponseLeg[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FareResponseLeg
     */
    public function getAttributeName()
    {
        return 'FareResponseLeg';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseLeg
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
