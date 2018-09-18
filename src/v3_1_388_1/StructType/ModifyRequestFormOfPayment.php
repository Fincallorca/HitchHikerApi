<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyRequestFormOfPayment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyRequestFormOfPayment
 * @subpackage Structs
 */
class ModifyRequestFormOfPayment extends AbstractStructBase
{
    /**
     * The CreditCardExpiryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreditCardExpiryDate;
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
     * The CreditCardType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreditCardType;
    /**
     * The FormOfPayment
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FormOfPayment;
    /**
     * The IATANumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IATANumber;
    /**
     * The WantApprovalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $WantApprovalCode;
    /**
     * Constructor method for ModifyRequestFormOfPayment
     * @uses ModifyRequestFormOfPayment::setCreditCardExpiryDate()
     * @uses ModifyRequestFormOfPayment::setCreditCardNumber()
     * @uses ModifyRequestFormOfPayment::setCreditCardNumberIsCrypt()
     * @uses ModifyRequestFormOfPayment::setCreditCardType()
     * @uses ModifyRequestFormOfPayment::setFormOfPayment()
     * @uses ModifyRequestFormOfPayment::setIATANumber()
     * @uses ModifyRequestFormOfPayment::setWantApprovalCode()
     * @param string $creditCardExpiryDate
     * @param string $creditCardNumber
     * @param bool $creditCardNumberIsCrypt
     * @param string $creditCardType
     * @param string $formOfPayment
     * @param string $iATANumber
     * @param bool $wantApprovalCode
     */
    public function __construct($creditCardExpiryDate = null, $creditCardNumber = null, $creditCardNumberIsCrypt = null, $creditCardType = null, $formOfPayment = null, $iATANumber = null, $wantApprovalCode = null)
    {
        $this
            ->setCreditCardExpiryDate($creditCardExpiryDate)
            ->setCreditCardNumber($creditCardNumber)
            ->setCreditCardNumberIsCrypt($creditCardNumberIsCrypt)
            ->setCreditCardType($creditCardType)
            ->setFormOfPayment($formOfPayment)
            ->setIATANumber($iATANumber)
            ->setWantApprovalCode($wantApprovalCode);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment
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
     * Get FormOfPayment value
     * @return string|null
     */
    public function getFormOfPayment()
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param string $formOfPayment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment
     */
    public function setFormOfPayment($formOfPayment = null)
    {
        // validation for constraint: string
        if (!is_null($formOfPayment) && !is_string($formOfPayment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formOfPayment)), __LINE__);
        }
        $this->FormOfPayment = $formOfPayment;
        return $this;
    }
    /**
     * Get IATANumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIATANumber()
    {
        return isset($this->IATANumber) ? $this->IATANumber : null;
    }
    /**
     * Set IATANumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iATANumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment
     */
    public function setIATANumber($iATANumber = null)
    {
        // validation for constraint: string
        if (!is_null($iATANumber) && !is_string($iATANumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iATANumber)), __LINE__);
        }
        if (is_null($iATANumber) || (is_array($iATANumber) && empty($iATANumber))) {
            unset($this->IATANumber);
        } else {
            $this->IATANumber = $iATANumber;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFormOfPayment
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
