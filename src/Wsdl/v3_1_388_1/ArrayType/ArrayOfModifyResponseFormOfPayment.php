<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfModifyResponseFormOfPayment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfModifyResponseFormOfPayment
 * @subpackage Arrays
 */
class ArrayOfModifyResponseFormOfPayment extends AbstractStructArrayBase
{
    /**
     * The ModifyResponseFormOfPayment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseFormOfPayment[]
     */
    public $ModifyResponseFormOfPayment;
    /**
     * Constructor method for ArrayOfModifyResponseFormOfPayment
     * @uses ArrayOfModifyResponseFormOfPayment::setModifyResponseFormOfPayment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseFormOfPayment[] $modifyResponseFormOfPayment
     */
    public function __construct(array $modifyResponseFormOfPayment = array())
    {
        $this
            ->setModifyResponseFormOfPayment($modifyResponseFormOfPayment);
    }
    /**
     * Get ModifyResponseFormOfPayment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseFormOfPayment[]|null
     */
    public function getModifyResponseFormOfPayment()
    {
        return isset($this->ModifyResponseFormOfPayment) ? $this->ModifyResponseFormOfPayment : null;
    }
    /**
     * Set ModifyResponseFormOfPayment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseFormOfPayment[] $modifyResponseFormOfPayment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponseFormOfPayment
     */
    public function setModifyResponseFormOfPayment(array $modifyResponseFormOfPayment = array())
    {
        foreach ($modifyResponseFormOfPayment as $arrayOfModifyResponseFormOfPaymentModifyResponseFormOfPaymentItem) {
            // validation for constraint: itemType
            if (!$arrayOfModifyResponseFormOfPaymentModifyResponseFormOfPaymentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseFormOfPayment) {
                throw new \InvalidArgumentException(sprintf('The ModifyResponseFormOfPayment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseFormOfPayment, "%s" given', is_object($arrayOfModifyResponseFormOfPaymentModifyResponseFormOfPaymentItem) ? get_class($arrayOfModifyResponseFormOfPaymentModifyResponseFormOfPaymentItem) : gettype($arrayOfModifyResponseFormOfPaymentModifyResponseFormOfPaymentItem)), __LINE__);
            }
        }
        if (is_null($modifyResponseFormOfPayment) || (is_array($modifyResponseFormOfPayment) && empty($modifyResponseFormOfPayment))) {
            unset($this->ModifyResponseFormOfPayment);
        } else {
            $this->ModifyResponseFormOfPayment = $modifyResponseFormOfPayment;
        }
        return $this;
    }
    /**
     * Add item to ModifyResponseFormOfPayment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseFormOfPayment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponseFormOfPayment
     */
    public function addToModifyResponseFormOfPayment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseFormOfPayment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseFormOfPayment) {
            throw new \InvalidArgumentException(sprintf('The ModifyResponseFormOfPayment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseFormOfPayment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModifyResponseFormOfPayment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseFormOfPayment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseFormOfPayment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseFormOfPayment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseFormOfPayment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseFormOfPayment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyResponseFormOfPayment
     */
    public function getAttributeName()
    {
        return 'ModifyResponseFormOfPayment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponseFormOfPayment
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
