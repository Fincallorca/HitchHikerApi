<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCancelation ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCancelation
 * @subpackage Arrays
 */
class ArrayOfCancelation extends AbstractStructArrayBase
{
    /**
     * The Cancelation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation[]
     */
    public $Cancelation;
    /**
     * Constructor method for ArrayOfCancelation
     * @uses ArrayOfCancelation::setCancelation()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation[] $cancelation
     */
    public function __construct(array $cancelation = array())
    {
        $this
            ->setCancelation($cancelation);
    }
    /**
     * Get Cancelation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation[]|null
     */
    public function getCancelation()
    {
        return isset($this->Cancelation) ? $this->Cancelation : null;
    }
    /**
     * Set Cancelation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation[] $cancelation
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelation
     */
    public function setCancelation(array $cancelation = array())
    {
        foreach ($cancelation as $arrayOfCancelationCancelationItem) {
            // validation for constraint: itemType
            if (!$arrayOfCancelationCancelationItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation) {
                throw new \InvalidArgumentException(sprintf('The Cancelation property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation, "%s" given', is_object($arrayOfCancelationCancelationItem) ? get_class($arrayOfCancelationCancelationItem) : gettype($arrayOfCancelationCancelationItem)), __LINE__);
            }
        }
        if (is_null($cancelation) || (is_array($cancelation) && empty($cancelation))) {
            unset($this->Cancelation);
        } else {
            $this->Cancelation = $cancelation;
        }
        return $this;
    }
    /**
     * Add item to Cancelation value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelation
     */
    public function addToCancelation(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation) {
            throw new \InvalidArgumentException(sprintf('The Cancelation property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Cancelation[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Cancelation
     */
    public function getAttributeName()
    {
        return 'Cancelation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelation
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
