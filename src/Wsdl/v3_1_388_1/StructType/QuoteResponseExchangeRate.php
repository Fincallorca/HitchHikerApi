<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuoteResponseExchangeRate StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QuoteResponseExchangeRate
 * @subpackage Structs
 */
class QuoteResponseExchangeRate extends AbstractStructBase
{
    /**
     * The Decimals
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Decimals;
    /**
     * The FromCurrency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FromCurrency;
    /**
     * The Rate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Rate;
    /**
     * The Rounding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Rounding;
    /**
     * The Roundstring
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Roundstring;
    /**
     * The ToCurrency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ToCurrency;
    /**
     * Constructor method for QuoteResponseExchangeRate
     * @uses QuoteResponseExchangeRate::setDecimals()
     * @uses QuoteResponseExchangeRate::setFromCurrency()
     * @uses QuoteResponseExchangeRate::setRate()
     * @uses QuoteResponseExchangeRate::setRounding()
     * @uses QuoteResponseExchangeRate::setRoundstring()
     * @uses QuoteResponseExchangeRate::setToCurrency()
     * @param int $decimals
     * @param string $fromCurrency
     * @param float $rate
     * @param string $rounding
     * @param string $roundstring
     * @param string $toCurrency
     */
    public function __construct($decimals = null, $fromCurrency = null, $rate = null, $rounding = null, $roundstring = null, $toCurrency = null)
    {
        $this
            ->setDecimals($decimals)
            ->setFromCurrency($fromCurrency)
            ->setRate($rate)
            ->setRounding($rounding)
            ->setRoundstring($roundstring)
            ->setToCurrency($toCurrency);
    }
    /**
     * Get Decimals value
     * @return int|null
     */
    public function getDecimals()
    {
        return $this->Decimals;
    }
    /**
     * Set Decimals value
     * @param int $decimals
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate
     */
    public function setDecimals($decimals = null)
    {
        // validation for constraint: int
        if (!is_null($decimals) && !is_numeric($decimals)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($decimals)), __LINE__);
        }
        $this->Decimals = $decimals;
        return $this;
    }
    /**
     * Get FromCurrency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFromCurrency()
    {
        return isset($this->FromCurrency) ? $this->FromCurrency : null;
    }
    /**
     * Set FromCurrency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fromCurrency
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate
     */
    public function setFromCurrency($fromCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($fromCurrency) && !is_string($fromCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromCurrency)), __LINE__);
        }
        if (is_null($fromCurrency) || (is_array($fromCurrency) && empty($fromCurrency))) {
            unset($this->FromCurrency);
        } else {
            $this->FromCurrency = $fromCurrency;
        }
        return $this;
    }
    /**
     * Get Rate value
     * @return float|null
     */
    public function getRate()
    {
        return $this->Rate;
    }
    /**
     * Set Rate value
     * @param float $rate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate
     */
    public function setRate($rate = null)
    {
        $this->Rate = $rate;
        return $this;
    }
    /**
     * Get Rounding value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRounding()
    {
        return isset($this->Rounding) ? $this->Rounding : null;
    }
    /**
     * Set Rounding value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $rounding
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate
     */
    public function setRounding($rounding = null)
    {
        // validation for constraint: string
        if (!is_null($rounding) && !is_string($rounding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rounding)), __LINE__);
        }
        if (is_null($rounding) || (is_array($rounding) && empty($rounding))) {
            unset($this->Rounding);
        } else {
            $this->Rounding = $rounding;
        }
        return $this;
    }
    /**
     * Get Roundstring value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRoundstring()
    {
        return isset($this->Roundstring) ? $this->Roundstring : null;
    }
    /**
     * Set Roundstring value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $roundstring
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate
     */
    public function setRoundstring($roundstring = null)
    {
        // validation for constraint: string
        if (!is_null($roundstring) && !is_string($roundstring)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roundstring)), __LINE__);
        }
        if (is_null($roundstring) || (is_array($roundstring) && empty($roundstring))) {
            unset($this->Roundstring);
        } else {
            $this->Roundstring = $roundstring;
        }
        return $this;
    }
    /**
     * Get ToCurrency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getToCurrency()
    {
        return isset($this->ToCurrency) ? $this->ToCurrency : null;
    }
    /**
     * Set ToCurrency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $toCurrency
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate
     */
    public function setToCurrency($toCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($toCurrency) && !is_string($toCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toCurrency)), __LINE__);
        }
        if (is_null($toCurrency) || (is_array($toCurrency) && empty($toCurrency))) {
            unset($this->ToCurrency);
        } else {
            $this->ToCurrency = $toCurrency;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate
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
