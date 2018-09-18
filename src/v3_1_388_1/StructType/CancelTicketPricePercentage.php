<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelTicketPricePercentage StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CancelTicketPricePercentage
 * @subpackage Structs
 */
class CancelTicketPricePercentage extends AbstractStructBase
{
    /**
     * The Amount
     * @var float
     */
    public $Amount;
    /**
     * The AmountIsPercentage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AmountIsPercentage;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CurrencyCode;
    /**
     * Constructor method for CancelTicketPricePercentage
     * @uses CancelTicketPricePercentage::setAmount()
     * @uses CancelTicketPricePercentage::setAmountIsPercentage()
     * @uses CancelTicketPricePercentage::setCurrencyCode()
     * @param float $amount
     * @param bool $amountIsPercentage
     * @param string $currencyCode
     */
    public function __construct($amount = null, $amountIsPercentage = null, $currencyCode = null)
    {
        $this
            ->setAmount($amount)
            ->setAmountIsPercentage($amountIsPercentage)
            ->setCurrencyCode($currencyCode);
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketPricePercentage
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get AmountIsPercentage value
     * @return bool|null
     */
    public function getAmountIsPercentage()
    {
        return $this->AmountIsPercentage;
    }
    /**
     * Set AmountIsPercentage value
     * @param bool $amountIsPercentage
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketPricePercentage
     */
    public function setAmountIsPercentage($amountIsPercentage = null)
    {
        // validation for constraint: boolean
        if (!is_null($amountIsPercentage) && !is_bool($amountIsPercentage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($amountIsPercentage)), __LINE__);
        }
        $this->AmountIsPercentage = $amountIsPercentage;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return isset($this->CurrencyCode) ? $this->CurrencyCode : null;
    }
    /**
     * Set CurrencyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $currencyCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketPricePercentage
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        if (is_null($currencyCode) || (is_array($currencyCode) && empty($currencyCode))) {
            unset($this->CurrencyCode);
        } else {
            $this->CurrencyCode = $currencyCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketPricePercentage
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
