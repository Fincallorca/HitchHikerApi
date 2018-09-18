<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCancelResponseAllotment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCancelResponseAllotment
 * @subpackage Arrays
 */
class ArrayOfCancelResponseAllotment extends AbstractStructArrayBase
{
    /**
     * The CancelResponseAllotment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseAllotment[]
     */
    public $CancelResponseAllotment;
    /**
     * Constructor method for ArrayOfCancelResponseAllotment
     * @uses ArrayOfCancelResponseAllotment::setCancelResponseAllotment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseAllotment[] $cancelResponseAllotment
     */
    public function __construct(array $cancelResponseAllotment = array())
    {
        $this
            ->setCancelResponseAllotment($cancelResponseAllotment);
    }
    /**
     * Get CancelResponseAllotment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseAllotment[]|null
     */
    public function getCancelResponseAllotment()
    {
        return isset($this->CancelResponseAllotment) ? $this->CancelResponseAllotment : null;
    }
    /**
     * Set CancelResponseAllotment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseAllotment[] $cancelResponseAllotment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelResponseAllotment
     */
    public function setCancelResponseAllotment(array $cancelResponseAllotment = array())
    {
        foreach ($cancelResponseAllotment as $arrayOfCancelResponseAllotmentCancelResponseAllotmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfCancelResponseAllotmentCancelResponseAllotmentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseAllotment) {
                throw new \InvalidArgumentException(sprintf('The CancelResponseAllotment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseAllotment, "%s" given', is_object($arrayOfCancelResponseAllotmentCancelResponseAllotmentItem) ? get_class($arrayOfCancelResponseAllotmentCancelResponseAllotmentItem) : gettype($arrayOfCancelResponseAllotmentCancelResponseAllotmentItem)), __LINE__);
            }
        }
        if (is_null($cancelResponseAllotment) || (is_array($cancelResponseAllotment) && empty($cancelResponseAllotment))) {
            unset($this->CancelResponseAllotment);
        } else {
            $this->CancelResponseAllotment = $cancelResponseAllotment;
        }
        return $this;
    }
    /**
     * Add item to CancelResponseAllotment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseAllotment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelResponseAllotment
     */
    public function addToCancelResponseAllotment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseAllotment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseAllotment) {
            throw new \InvalidArgumentException(sprintf('The CancelResponseAllotment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseAllotment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CancelResponseAllotment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseAllotment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseAllotment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseAllotment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseAllotment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseAllotment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CancelResponseAllotment
     */
    public function getAttributeName()
    {
        return 'CancelResponseAllotment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelResponseAllotment
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
