<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetailedPaymentMethod StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DetailedPaymentMethod
 * @subpackage Structs
 */
class DetailedPaymentMethod extends AbstractStructBase
{
    /**
     * The BookingFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public $BookingFee;
    /**
     * The CreditCardCompanyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreditCardCompanyCode;
    /**
     * The CreditCardCompanyTitle
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreditCardCompanyTitle;
    /**
     * The PassengerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerType;
    /**
     * The PasswordSupported
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $PasswordSupported;
    /**
     * The PaymentFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public $PaymentFee;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PaymentType;
    /**
     * Constructor method for DetailedPaymentMethod
     * @uses DetailedPaymentMethod::setBookingFee()
     * @uses DetailedPaymentMethod::setCreditCardCompanyCode()
     * @uses DetailedPaymentMethod::setCreditCardCompanyTitle()
     * @uses DetailedPaymentMethod::setPassengerType()
     * @uses DetailedPaymentMethod::setPasswordSupported()
     * @uses DetailedPaymentMethod::setPaymentFee()
     * @uses DetailedPaymentMethod::setPaymentType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $bookingFee
     * @param string $creditCardCompanyCode
     * @param string $creditCardCompanyTitle
     * @param string $passengerType
     * @param bool $passwordSupported
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $paymentFee
     * @param string $paymentType
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $bookingFee = null, $creditCardCompanyCode = null, $creditCardCompanyTitle = null, $passengerType = null, $passwordSupported = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $paymentFee = null, $paymentType = null)
    {
        $this
            ->setBookingFee($bookingFee)
            ->setCreditCardCompanyCode($creditCardCompanyCode)
            ->setCreditCardCompanyTitle($creditCardCompanyTitle)
            ->setPassengerType($passengerType)
            ->setPasswordSupported($passwordSupported)
            ->setPaymentFee($paymentFee)
            ->setPaymentType($paymentType);
    }
    /**
     * Get BookingFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData|null
     */
    public function getBookingFee()
    {
        return isset($this->BookingFee) ? $this->BookingFee : null;
    }
    /**
     * Set BookingFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $bookingFee
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod
     */
    public function setBookingFee(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $bookingFee = null)
    {
        if (is_null($bookingFee) || (is_array($bookingFee) && empty($bookingFee))) {
            unset($this->BookingFee);
        } else {
            $this->BookingFee = $bookingFee;
        }
        return $this;
    }
    /**
     * Get CreditCardCompanyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreditCardCompanyCode()
    {
        return isset($this->CreditCardCompanyCode) ? $this->CreditCardCompanyCode : null;
    }
    /**
     * Set CreditCardCompanyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creditCardCompanyCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod
     */
    public function setCreditCardCompanyCode($creditCardCompanyCode = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardCompanyCode) && !is_string($creditCardCompanyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardCompanyCode)), __LINE__);
        }
        if (is_null($creditCardCompanyCode) || (is_array($creditCardCompanyCode) && empty($creditCardCompanyCode))) {
            unset($this->CreditCardCompanyCode);
        } else {
            $this->CreditCardCompanyCode = $creditCardCompanyCode;
        }
        return $this;
    }
    /**
     * Get CreditCardCompanyTitle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreditCardCompanyTitle()
    {
        return isset($this->CreditCardCompanyTitle) ? $this->CreditCardCompanyTitle : null;
    }
    /**
     * Set CreditCardCompanyTitle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creditCardCompanyTitle
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod
     */
    public function setCreditCardCompanyTitle($creditCardCompanyTitle = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardCompanyTitle) && !is_string($creditCardCompanyTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardCompanyTitle)), __LINE__);
        }
        if (is_null($creditCardCompanyTitle) || (is_array($creditCardCompanyTitle) && empty($creditCardCompanyTitle))) {
            unset($this->CreditCardCompanyTitle);
        } else {
            $this->CreditCardCompanyTitle = $creditCardCompanyTitle;
        }
        return $this;
    }
    /**
     * Get PassengerType value
     * @return string|null
     */
    public function getPassengerType()
    {
        return $this->PassengerType;
    }
    /**
     * Set PassengerType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $passengerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod
     */
    public function setPassengerType($passengerType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($passengerType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $passengerType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
        }
        $this->PassengerType = $passengerType;
        return $this;
    }
    /**
     * Get PasswordSupported value
     * @return bool|null
     */
    public function getPasswordSupported()
    {
        return $this->PasswordSupported;
    }
    /**
     * Set PasswordSupported value
     * @param bool $passwordSupported
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod
     */
    public function setPasswordSupported($passwordSupported = null)
    {
        // validation for constraint: boolean
        if (!is_null($passwordSupported) && !is_bool($passwordSupported)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($passwordSupported)), __LINE__);
        }
        $this->PasswordSupported = $passwordSupported;
        return $this;
    }
    /**
     * Get PaymentFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData|null
     */
    public function getPaymentFee()
    {
        return isset($this->PaymentFee) ? $this->PaymentFee : null;
    }
    /**
     * Set PaymentFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $paymentFee
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod
     */
    public function setPaymentFee(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $paymentFee = null)
    {
        if (is_null($paymentFee) || (is_array($paymentFee) && empty($paymentFee))) {
            unset($this->PaymentFee);
        } else {
            $this->PaymentFee = $paymentFee;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailedPaymentMethod
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
