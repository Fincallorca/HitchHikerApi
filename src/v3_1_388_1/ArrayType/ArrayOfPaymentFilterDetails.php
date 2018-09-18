<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPaymentFilterDetails ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPaymentFilterDetails
 * @subpackage Arrays
 */
class ArrayOfPaymentFilterDetails extends AbstractStructArrayBase
{
    /**
     * The PaymentFilterDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails[]
     */
    public $PaymentFilterDetails;
    /**
     * Constructor method for ArrayOfPaymentFilterDetails
     * @uses ArrayOfPaymentFilterDetails::setPaymentFilterDetails()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails[] $paymentFilterDetails
     */
    public function __construct(array $paymentFilterDetails = array())
    {
        $this
            ->setPaymentFilterDetails($paymentFilterDetails);
    }
    /**
     * Get PaymentFilterDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails[]|null
     */
    public function getPaymentFilterDetails()
    {
        return isset($this->PaymentFilterDetails) ? $this->PaymentFilterDetails : null;
    }
    /**
     * Set PaymentFilterDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails[] $paymentFilterDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilterDetails
     */
    public function setPaymentFilterDetails(array $paymentFilterDetails = array())
    {
        foreach ($paymentFilterDetails as $arrayOfPaymentFilterDetailsPaymentFilterDetailsItem) {
            // validation for constraint: itemType
            if (!$arrayOfPaymentFilterDetailsPaymentFilterDetailsItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails) {
                throw new \InvalidArgumentException(sprintf('The PaymentFilterDetails property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails, "%s" given', is_object($arrayOfPaymentFilterDetailsPaymentFilterDetailsItem) ? get_class($arrayOfPaymentFilterDetailsPaymentFilterDetailsItem) : gettype($arrayOfPaymentFilterDetailsPaymentFilterDetailsItem)), __LINE__);
            }
        }
        if (is_null($paymentFilterDetails) || (is_array($paymentFilterDetails) && empty($paymentFilterDetails))) {
            unset($this->PaymentFilterDetails);
        } else {
            $this->PaymentFilterDetails = $paymentFilterDetails;
        }
        return $this;
    }
    /**
     * Add item to PaymentFilterDetails value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilterDetails
     */
    public function addToPaymentFilterDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails) {
            throw new \InvalidArgumentException(sprintf('The PaymentFilterDetails property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentFilterDetails[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PaymentFilterDetails
     */
    public function getAttributeName()
    {
        return 'PaymentFilterDetails';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilterDetails
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
