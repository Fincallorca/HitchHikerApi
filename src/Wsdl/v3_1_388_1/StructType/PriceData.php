<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PriceData
 * @subpackage Structs
 */
class PriceData extends AbstractStructBase
{
    /**
     * The Amount
     * @var float
     */
    public $Amount;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Currency;
    /**
     * Constructor method for PriceData
     * @uses PriceData::setAmount()
     * @uses PriceData::setCurrency()
     * @param float $amount
     * @param string $currency
     */
    public function __construct($amount = null, $currency = null)
    {
        $this
            ->setAmount($amount)
            ->setCurrency($currency);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PriceData
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PriceData
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PriceData
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
