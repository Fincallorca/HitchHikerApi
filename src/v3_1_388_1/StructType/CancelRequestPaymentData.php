<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelRequestPaymentData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CancelRequestPaymentData
 * @subpackage Structs
 */
class CancelRequestPaymentData extends AbstractStructBase
{
    /**
     * The BankAccountHolderFirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BankAccountHolderFirstName;
    /**
     * The BankAccountHolderLastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BankAccountHolderLastName;
    /**
     * The BankAccountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BankAccountNumber;
    /**
     * The BankAccountNumberIsCrypt
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $BankAccountNumberIsCrypt;
    /**
     * The BankCodeNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BankCodeNumber;
    /**
     * The BankName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BankName;
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CountryCode;
    /**
     * The CreditCardCVCNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreditCardCVCNumber;
    /**
     * The CreditCardCVCNumberIsCrypt
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CreditCardCVCNumberIsCrypt;
    /**
     * The CreditCardExpiryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreditCardExpiryDate;
    /**
     * The CreditCardHolderFirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreditCardHolderFirstName;
    /**
     * The CreditCardHolderLastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreditCardHolderLastName;
    /**
     * The CreditCardNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreditCardNumber;
    /**
     * The CreditCardNumberIsCrypt
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CreditCardNumberIsCrypt;
    /**
     * The CreditCardPassword
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreditCardPassword;
    /**
     * The CreditCardType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreditCardType;
    /**
     * The CreditCardUserName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreditCardUserName;
    /**
     * The FormOfPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FormOfPayment;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PaymentType;
    /**
     * The WantApprovalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $WantApprovalCode;
    /**
     * Constructor method for CancelRequestPaymentData
     * @uses CancelRequestPaymentData::setBankAccountHolderFirstName()
     * @uses CancelRequestPaymentData::setBankAccountHolderLastName()
     * @uses CancelRequestPaymentData::setBankAccountNumber()
     * @uses CancelRequestPaymentData::setBankAccountNumberIsCrypt()
     * @uses CancelRequestPaymentData::setBankCodeNumber()
     * @uses CancelRequestPaymentData::setBankName()
     * @uses CancelRequestPaymentData::setCountryCode()
     * @uses CancelRequestPaymentData::setCreditCardCVCNumber()
     * @uses CancelRequestPaymentData::setCreditCardCVCNumberIsCrypt()
     * @uses CancelRequestPaymentData::setCreditCardExpiryDate()
     * @uses CancelRequestPaymentData::setCreditCardHolderFirstName()
     * @uses CancelRequestPaymentData::setCreditCardHolderLastName()
     * @uses CancelRequestPaymentData::setCreditCardNumber()
     * @uses CancelRequestPaymentData::setCreditCardNumberIsCrypt()
     * @uses CancelRequestPaymentData::setCreditCardPassword()
     * @uses CancelRequestPaymentData::setCreditCardType()
     * @uses CancelRequestPaymentData::setCreditCardUserName()
     * @uses CancelRequestPaymentData::setFormOfPayment()
     * @uses CancelRequestPaymentData::setPaymentType()
     * @uses CancelRequestPaymentData::setWantApprovalCode()
     * @param string $bankAccountHolderFirstName
     * @param string $bankAccountHolderLastName
     * @param string $bankAccountNumber
     * @param bool $bankAccountNumberIsCrypt
     * @param string $bankCodeNumber
     * @param string $bankName
     * @param string $countryCode
     * @param string $creditCardCVCNumber
     * @param bool $creditCardCVCNumberIsCrypt
     * @param string $creditCardExpiryDate
     * @param string $creditCardHolderFirstName
     * @param string $creditCardHolderLastName
     * @param string $creditCardNumber
     * @param bool $creditCardNumberIsCrypt
     * @param string $creditCardPassword
     * @param string $creditCardType
     * @param string $creditCardUserName
     * @param string $formOfPayment
     * @param string $paymentType
     * @param bool $wantApprovalCode
     */
    public function __construct($bankAccountHolderFirstName = null, $bankAccountHolderLastName = null, $bankAccountNumber = null, $bankAccountNumberIsCrypt = null, $bankCodeNumber = null, $bankName = null, $countryCode = null, $creditCardCVCNumber = null, $creditCardCVCNumberIsCrypt = null, $creditCardExpiryDate = null, $creditCardHolderFirstName = null, $creditCardHolderLastName = null, $creditCardNumber = null, $creditCardNumberIsCrypt = null, $creditCardPassword = null, $creditCardType = null, $creditCardUserName = null, $formOfPayment = null, $paymentType = null, $wantApprovalCode = null)
    {
        $this
            ->setBankAccountHolderFirstName($bankAccountHolderFirstName)
            ->setBankAccountHolderLastName($bankAccountHolderLastName)
            ->setBankAccountNumber($bankAccountNumber)
            ->setBankAccountNumberIsCrypt($bankAccountNumberIsCrypt)
            ->setBankCodeNumber($bankCodeNumber)
            ->setBankName($bankName)
            ->setCountryCode($countryCode)
            ->setCreditCardCVCNumber($creditCardCVCNumber)
            ->setCreditCardCVCNumberIsCrypt($creditCardCVCNumberIsCrypt)
            ->setCreditCardExpiryDate($creditCardExpiryDate)
            ->setCreditCardHolderFirstName($creditCardHolderFirstName)
            ->setCreditCardHolderLastName($creditCardHolderLastName)
            ->setCreditCardNumber($creditCardNumber)
            ->setCreditCardNumberIsCrypt($creditCardNumberIsCrypt)
            ->setCreditCardPassword($creditCardPassword)
            ->setCreditCardType($creditCardType)
            ->setCreditCardUserName($creditCardUserName)
            ->setFormOfPayment($formOfPayment)
            ->setPaymentType($paymentType)
            ->setWantApprovalCode($wantApprovalCode);
    }
    /**
     * Get BankAccountHolderFirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBankAccountHolderFirstName()
    {
        return isset($this->BankAccountHolderFirstName) ? $this->BankAccountHolderFirstName : null;
    }
    /**
     * Set BankAccountHolderFirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $bankAccountHolderFirstName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setBankAccountHolderFirstName($bankAccountHolderFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($bankAccountHolderFirstName) && !is_string($bankAccountHolderFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankAccountHolderFirstName)), __LINE__);
        }
        if (is_null($bankAccountHolderFirstName) || (is_array($bankAccountHolderFirstName) && empty($bankAccountHolderFirstName))) {
            unset($this->BankAccountHolderFirstName);
        } else {
            $this->BankAccountHolderFirstName = $bankAccountHolderFirstName;
        }
        return $this;
    }
    /**
     * Get BankAccountHolderLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBankAccountHolderLastName()
    {
        return isset($this->BankAccountHolderLastName) ? $this->BankAccountHolderLastName : null;
    }
    /**
     * Set BankAccountHolderLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $bankAccountHolderLastName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setBankAccountHolderLastName($bankAccountHolderLastName = null)
    {
        // validation for constraint: string
        if (!is_null($bankAccountHolderLastName) && !is_string($bankAccountHolderLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankAccountHolderLastName)), __LINE__);
        }
        if (is_null($bankAccountHolderLastName) || (is_array($bankAccountHolderLastName) && empty($bankAccountHolderLastName))) {
            unset($this->BankAccountHolderLastName);
        } else {
            $this->BankAccountHolderLastName = $bankAccountHolderLastName;
        }
        return $this;
    }
    /**
     * Get BankAccountNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBankAccountNumber()
    {
        return isset($this->BankAccountNumber) ? $this->BankAccountNumber : null;
    }
    /**
     * Set BankAccountNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $bankAccountNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setBankAccountNumber($bankAccountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bankAccountNumber) && !is_string($bankAccountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankAccountNumber)), __LINE__);
        }
        if (is_null($bankAccountNumber) || (is_array($bankAccountNumber) && empty($bankAccountNumber))) {
            unset($this->BankAccountNumber);
        } else {
            $this->BankAccountNumber = $bankAccountNumber;
        }
        return $this;
    }
    /**
     * Get BankAccountNumberIsCrypt value
     * @return bool|null
     */
    public function getBankAccountNumberIsCrypt()
    {
        return $this->BankAccountNumberIsCrypt;
    }
    /**
     * Set BankAccountNumberIsCrypt value
     * @param bool $bankAccountNumberIsCrypt
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setBankAccountNumberIsCrypt($bankAccountNumberIsCrypt = null)
    {
        // validation for constraint: boolean
        if (!is_null($bankAccountNumberIsCrypt) && !is_bool($bankAccountNumberIsCrypt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bankAccountNumberIsCrypt)), __LINE__);
        }
        $this->BankAccountNumberIsCrypt = $bankAccountNumberIsCrypt;
        return $this;
    }
    /**
     * Get BankCodeNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBankCodeNumber()
    {
        return isset($this->BankCodeNumber) ? $this->BankCodeNumber : null;
    }
    /**
     * Set BankCodeNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $bankCodeNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setBankCodeNumber($bankCodeNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bankCodeNumber) && !is_string($bankCodeNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankCodeNumber)), __LINE__);
        }
        if (is_null($bankCodeNumber) || (is_array($bankCodeNumber) && empty($bankCodeNumber))) {
            unset($this->BankCodeNumber);
        } else {
            $this->BankCodeNumber = $bankCodeNumber;
        }
        return $this;
    }
    /**
     * Get BankName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBankName()
    {
        return isset($this->BankName) ? $this->BankName : null;
    }
    /**
     * Set BankName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $bankName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setBankName($bankName = null)
    {
        // validation for constraint: string
        if (!is_null($bankName) && !is_string($bankName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankName)), __LINE__);
        }
        if (is_null($bankName) || (is_array($bankName) && empty($bankName))) {
            unset($this->BankName);
        } else {
            $this->BankName = $bankName;
        }
        return $this;
    }
    /**
     * Get CountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountryCode()
    {
        return isset($this->CountryCode) ? $this->CountryCode : null;
    }
    /**
     * Set CountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $countryCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        if (is_null($countryCode) || (is_array($countryCode) && empty($countryCode))) {
            unset($this->CountryCode);
        } else {
            $this->CountryCode = $countryCode;
        }
        return $this;
    }
    /**
     * Get CreditCardCVCNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreditCardCVCNumber()
    {
        return isset($this->CreditCardCVCNumber) ? $this->CreditCardCVCNumber : null;
    }
    /**
     * Set CreditCardCVCNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creditCardCVCNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setCreditCardCVCNumber($creditCardCVCNumber = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardCVCNumber) && !is_string($creditCardCVCNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardCVCNumber)), __LINE__);
        }
        if (is_null($creditCardCVCNumber) || (is_array($creditCardCVCNumber) && empty($creditCardCVCNumber))) {
            unset($this->CreditCardCVCNumber);
        } else {
            $this->CreditCardCVCNumber = $creditCardCVCNumber;
        }
        return $this;
    }
    /**
     * Get CreditCardCVCNumberIsCrypt value
     * @return bool|null
     */
    public function getCreditCardCVCNumberIsCrypt()
    {
        return $this->CreditCardCVCNumberIsCrypt;
    }
    /**
     * Set CreditCardCVCNumberIsCrypt value
     * @param bool $creditCardCVCNumberIsCrypt
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setCreditCardCVCNumberIsCrypt($creditCardCVCNumberIsCrypt = null)
    {
        // validation for constraint: boolean
        if (!is_null($creditCardCVCNumberIsCrypt) && !is_bool($creditCardCVCNumberIsCrypt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($creditCardCVCNumberIsCrypt)), __LINE__);
        }
        $this->CreditCardCVCNumberIsCrypt = $creditCardCVCNumberIsCrypt;
        return $this;
    }
    /**
     * Get CreditCardExpiryDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreditCardExpiryDate()
    {
        return isset($this->CreditCardExpiryDate) ? $this->CreditCardExpiryDate : null;
    }
    /**
     * Set CreditCardExpiryDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creditCardExpiryDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setCreditCardExpiryDate($creditCardExpiryDate = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardExpiryDate) && !is_string($creditCardExpiryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardExpiryDate)), __LINE__);
        }
        if (is_null($creditCardExpiryDate) || (is_array($creditCardExpiryDate) && empty($creditCardExpiryDate))) {
            unset($this->CreditCardExpiryDate);
        } else {
            $this->CreditCardExpiryDate = $creditCardExpiryDate;
        }
        return $this;
    }
    /**
     * Get CreditCardHolderFirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreditCardHolderFirstName()
    {
        return isset($this->CreditCardHolderFirstName) ? $this->CreditCardHolderFirstName : null;
    }
    /**
     * Set CreditCardHolderFirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creditCardHolderFirstName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setCreditCardHolderFirstName($creditCardHolderFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardHolderFirstName) && !is_string($creditCardHolderFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardHolderFirstName)), __LINE__);
        }
        if (is_null($creditCardHolderFirstName) || (is_array($creditCardHolderFirstName) && empty($creditCardHolderFirstName))) {
            unset($this->CreditCardHolderFirstName);
        } else {
            $this->CreditCardHolderFirstName = $creditCardHolderFirstName;
        }
        return $this;
    }
    /**
     * Get CreditCardHolderLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreditCardHolderLastName()
    {
        return isset($this->CreditCardHolderLastName) ? $this->CreditCardHolderLastName : null;
    }
    /**
     * Set CreditCardHolderLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creditCardHolderLastName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setCreditCardHolderLastName($creditCardHolderLastName = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardHolderLastName) && !is_string($creditCardHolderLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardHolderLastName)), __LINE__);
        }
        if (is_null($creditCardHolderLastName) || (is_array($creditCardHolderLastName) && empty($creditCardHolderLastName))) {
            unset($this->CreditCardHolderLastName);
        } else {
            $this->CreditCardHolderLastName = $creditCardHolderLastName;
        }
        return $this;
    }
    /**
     * Get CreditCardNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreditCardNumber()
    {
        return isset($this->CreditCardNumber) ? $this->CreditCardNumber : null;
    }
    /**
     * Set CreditCardNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creditCardNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setCreditCardNumber($creditCardNumber = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardNumber) && !is_string($creditCardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardNumber)), __LINE__);
        }
        if (is_null($creditCardNumber) || (is_array($creditCardNumber) && empty($creditCardNumber))) {
            unset($this->CreditCardNumber);
        } else {
            $this->CreditCardNumber = $creditCardNumber;
        }
        return $this;
    }
    /**
     * Get CreditCardNumberIsCrypt value
     * @return bool|null
     */
    public function getCreditCardNumberIsCrypt()
    {
        return $this->CreditCardNumberIsCrypt;
    }
    /**
     * Set CreditCardNumberIsCrypt value
     * @param bool $creditCardNumberIsCrypt
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setCreditCardNumberIsCrypt($creditCardNumberIsCrypt = null)
    {
        // validation for constraint: boolean
        if (!is_null($creditCardNumberIsCrypt) && !is_bool($creditCardNumberIsCrypt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($creditCardNumberIsCrypt)), __LINE__);
        }
        $this->CreditCardNumberIsCrypt = $creditCardNumberIsCrypt;
        return $this;
    }
    /**
     * Get CreditCardPassword value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreditCardPassword()
    {
        return isset($this->CreditCardPassword) ? $this->CreditCardPassword : null;
    }
    /**
     * Set CreditCardPassword value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creditCardPassword
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setCreditCardPassword($creditCardPassword = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardPassword) && !is_string($creditCardPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardPassword)), __LINE__);
        }
        if (is_null($creditCardPassword) || (is_array($creditCardPassword) && empty($creditCardPassword))) {
            unset($this->CreditCardPassword);
        } else {
            $this->CreditCardPassword = $creditCardPassword;
        }
        return $this;
    }
    /**
     * Get CreditCardType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreditCardType()
    {
        return isset($this->CreditCardType) ? $this->CreditCardType : null;
    }
    /**
     * Set CreditCardType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creditCardType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setCreditCardType($creditCardType = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardType) && !is_string($creditCardType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardType)), __LINE__);
        }
        if (is_null($creditCardType) || (is_array($creditCardType) && empty($creditCardType))) {
            unset($this->CreditCardType);
        } else {
            $this->CreditCardType = $creditCardType;
        }
        return $this;
    }
    /**
     * Get CreditCardUserName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreditCardUserName()
    {
        return isset($this->CreditCardUserName) ? $this->CreditCardUserName : null;
    }
    /**
     * Set CreditCardUserName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creditCardUserName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setCreditCardUserName($creditCardUserName = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardUserName) && !is_string($creditCardUserName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardUserName)), __LINE__);
        }
        if (is_null($creditCardUserName) || (is_array($creditCardUserName) && empty($creditCardUserName))) {
            unset($this->CreditCardUserName);
        } else {
            $this->CreditCardUserName = $creditCardUserName;
        }
        return $this;
    }
    /**
     * Get FormOfPayment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFormOfPayment()
    {
        return isset($this->FormOfPayment) ? $this->FormOfPayment : null;
    }
    /**
     * Set FormOfPayment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $formOfPayment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setFormOfPayment($formOfPayment = null)
    {
        // validation for constraint: string
        if (!is_null($formOfPayment) && !is_string($formOfPayment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formOfPayment)), __LINE__);
        }
        if (is_null($formOfPayment) || (is_array($formOfPayment) && empty($formOfPayment))) {
            unset($this->FormOfPayment);
        } else {
            $this->FormOfPayment = $formOfPayment;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
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
     * Get WantApprovalCode value
     * @return bool|null
     */
    public function getWantApprovalCode()
    {
        return $this->WantApprovalCode;
    }
    /**
     * Set WantApprovalCode value
     * @param bool $wantApprovalCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public function setWantApprovalCode($wantApprovalCode = null)
    {
        // validation for constraint: boolean
        if (!is_null($wantApprovalCode) && !is_bool($wantApprovalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($wantApprovalCode)), __LINE__);
        }
        $this->WantApprovalCode = $wantApprovalCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
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
