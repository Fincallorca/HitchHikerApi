<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTouroperator ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTouroperator
 * @subpackage Arrays
 */
class ArrayOfTouroperator extends AbstractStructArrayBase
{
    /**
     * The Touroperator
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Touroperator[]
     */
    public $Touroperator;
    /**
     * Constructor method for ArrayOfTouroperator
     * @uses ArrayOfTouroperator::setTouroperator()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Touroperator[] $touroperator
     */
    public function __construct(array $touroperator = array())
    {
        $this
            ->setTouroperator($touroperator);
    }
    /**
     * Get Touroperator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Touroperator[]|null
     */
    public function getTouroperator()
    {
        return isset($this->Touroperator) ? $this->Touroperator : null;
    }
    /**
     * Set Touroperator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Touroperator[] $touroperator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTouroperator
     */
    public function setTouroperator(array $touroperator = array())
    {
        foreach ($touroperator as $arrayOfTouroperatorTouroperatorItem) {
            // validation for constraint: itemType
            if (!$arrayOfTouroperatorTouroperatorItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Touroperator) {
                throw new \InvalidArgumentException(sprintf('The Touroperator property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Touroperator, "%s" given', is_object($arrayOfTouroperatorTouroperatorItem) ? get_class($arrayOfTouroperatorTouroperatorItem) : gettype($arrayOfTouroperatorTouroperatorItem)), __LINE__);
            }
        }
        if (is_null($touroperator) || (is_array($touroperator) && empty($touroperator))) {
            unset($this->Touroperator);
        } else {
            $this->Touroperator = $touroperator;
        }
        return $this;
    }
    /**
     * Add item to Touroperator value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Touroperator $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTouroperator
     */
    public function addToTouroperator(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Touroperator $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Touroperator) {
            throw new \InvalidArgumentException(sprintf('The Touroperator property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Touroperator, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Touroperator[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Touroperator|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Touroperator|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Touroperator|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Touroperator|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Touroperator|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Touroperator
     */
    public function getAttributeName()
    {
        return 'Touroperator';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTouroperator
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
