<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentFilterDetails StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PaymentFilterDetails
 * @subpackage Structs
 */
class PaymentFilterDetails extends AbstractStructBase
{
    /**
     * The CreditCardCodes
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $CreditCardCodes;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PaymentType;
    /**
     * Constructor method for PaymentFilterDetails
     * @uses PaymentFilterDetails::setCreditCardCodes()
     * @uses PaymentFilterDetails::setPaymentType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $creditCardCodes
     * @param string $paymentType
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $creditCardCodes = null, $paymentType = null)
    {
        $this
            ->setCreditCardCodes($creditCardCodes)
            ->setPaymentType($paymentType);
    }
    /**
     * Get CreditCardCodes value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getCreditCardCodes()
    {
        return $this->CreditCardCodes;
    }
    /**
     * Set CreditCardCodes value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $creditCardCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails
     */
    public function setCreditCardCodes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $creditCardCodes = null)
    {
        $this->CreditCardCodes = $creditCardCodes;
        return $this;
    }
    /**
     * Get PaymentType value
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PaymentTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PaymentTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PaymentTypeEnum::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PaymentTypeEnum::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilterDetails
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
