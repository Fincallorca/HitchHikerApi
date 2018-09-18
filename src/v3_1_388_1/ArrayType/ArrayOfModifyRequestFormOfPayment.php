<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfModifyRequestFormOfPayment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfModifyRequestFormOfPayment
 * @subpackage Arrays
 */
class ArrayOfModifyRequestFormOfPayment extends AbstractStructArrayBase
{
    /**
     * The ModifyRequestFormOfPayment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment[]
     */
    public $ModifyRequestFormOfPayment;
    /**
     * Constructor method for ArrayOfModifyRequestFormOfPayment
     * @uses ArrayOfModifyRequestFormOfPayment::setModifyRequestFormOfPayment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment[] $modifyRequestFormOfPayment
     */
    public function __construct(array $modifyRequestFormOfPayment = array())
    {
        $this
            ->setModifyRequestFormOfPayment($modifyRequestFormOfPayment);
    }
    /**
     * Get ModifyRequestFormOfPayment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment[]|null
     */
    public function getModifyRequestFormOfPayment()
    {
        return isset($this->ModifyRequestFormOfPayment) ? $this->ModifyRequestFormOfPayment : null;
    }
    /**
     * Set ModifyRequestFormOfPayment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment[] $modifyRequestFormOfPayment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFormOfPayment
     */
    public function setModifyRequestFormOfPayment(array $modifyRequestFormOfPayment = array())
    {
        foreach ($modifyRequestFormOfPayment as $arrayOfModifyRequestFormOfPaymentModifyRequestFormOfPaymentItem) {
            // validation for constraint: itemType
            if (!$arrayOfModifyRequestFormOfPaymentModifyRequestFormOfPaymentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment) {
                throw new \InvalidArgumentException(sprintf('The ModifyRequestFormOfPayment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment, "%s" given', is_object($arrayOfModifyRequestFormOfPaymentModifyRequestFormOfPaymentItem) ? get_class($arrayOfModifyRequestFormOfPaymentModifyRequestFormOfPaymentItem) : gettype($arrayOfModifyRequestFormOfPaymentModifyRequestFormOfPaymentItem)), __LINE__);
            }
        }
        if (is_null($modifyRequestFormOfPayment) || (is_array($modifyRequestFormOfPayment) && empty($modifyRequestFormOfPayment))) {
            unset($this->ModifyRequestFormOfPayment);
        } else {
            $this->ModifyRequestFormOfPayment = $modifyRequestFormOfPayment;
        }
        return $this;
    }
    /**
     * Add item to ModifyRequestFormOfPayment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFormOfPayment
     */
    public function addToModifyRequestFormOfPayment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment) {
            throw new \InvalidArgumentException(sprintf('The ModifyRequestFormOfPayment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModifyRequestFormOfPayment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyRequestFormOfPayment
     */
    public function getAttributeName()
    {
        return 'ModifyRequestFormOfPayment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFormOfPayment
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
