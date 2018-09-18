<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CurrencyData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CurrencyData
 * @subpackage Structs
 */
class CurrencyData extends AbstractStructBase
{
    /**
     * The CacheDuration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true | true
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string
     */
    public $CacheDuration;
    /**
     * The Decimals
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Decimals;
    /**
     * The OriginalPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $OriginalPrice;
    /**
     * The RequestedCurrencyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RequestedCurrencyCode;
    /**
     * The Rounding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Rounding;
    /**
     * Constructor method for CurrencyData
     * @uses CurrencyData::setCacheDuration()
     * @uses CurrencyData::setDecimals()
     * @uses CurrencyData::setOriginalPrice()
     * @uses CurrencyData::setRequestedCurrencyCode()
     * @uses CurrencyData::setRounding()
     * @param string $cacheDuration
     * @param int $decimals
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $originalPrice
     * @param string $requestedCurrencyCode
     * @param string $rounding
     */
    public function __construct($cacheDuration = null, $decimals = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $originalPrice = null, $requestedCurrencyCode = null, $rounding = null)
    {
        $this
            ->setCacheDuration($cacheDuration)
            ->setDecimals($decimals)
            ->setOriginalPrice($originalPrice)
            ->setRequestedCurrencyCode($requestedCurrencyCode)
            ->setRounding($rounding);
    }
    /**
     * Get CacheDuration value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCacheDuration()
    {
        return isset($this->CacheDuration) ? $this->CacheDuration : null;
    }
    /**
     * Set CacheDuration value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cacheDuration
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CurrencyData
     */
    public function setCacheDuration($cacheDuration = null)
    {
        // validation for constraint: maxInclusive
        if ($cacheDuration > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $cacheDuration), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($cacheDuration < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $cacheDuration), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($cacheDuration) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $cacheDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($cacheDuration, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($cacheDuration) && !is_string($cacheDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cacheDuration)), __LINE__);
        }
        if (is_null($cacheDuration) || (is_array($cacheDuration) && empty($cacheDuration))) {
            unset($this->CacheDuration);
        } else {
            $this->CacheDuration = $cacheDuration;
        }
        return $this;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CurrencyData
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
     * Get OriginalPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getOriginalPrice()
    {
        return isset($this->OriginalPrice) ? $this->OriginalPrice : null;
    }
    /**
     * Set OriginalPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $originalPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CurrencyData
     */
    public function setOriginalPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $originalPrice = null)
    {
        if (is_null($originalPrice) || (is_array($originalPrice) && empty($originalPrice))) {
            unset($this->OriginalPrice);
        } else {
            $this->OriginalPrice = $originalPrice;
        }
        return $this;
    }
    /**
     * Get RequestedCurrencyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRequestedCurrencyCode()
    {
        return isset($this->RequestedCurrencyCode) ? $this->RequestedCurrencyCode : null;
    }
    /**
     * Set RequestedCurrencyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $requestedCurrencyCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CurrencyData
     */
    public function setRequestedCurrencyCode($requestedCurrencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($requestedCurrencyCode) && !is_string($requestedCurrencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestedCurrencyCode)), __LINE__);
        }
        if (is_null($requestedCurrencyCode) || (is_array($requestedCurrencyCode) && empty($requestedCurrencyCode))) {
            unset($this->RequestedCurrencyCode);
        } else {
            $this->RequestedCurrencyCode = $requestedCurrencyCode;
        }
        return $this;
    }
    /**
     * Get Rounding value
     * @return string|null
     */
    public function getRounding()
    {
        return $this->Rounding;
    }
    /**
     * Set Rounding value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\RoundingModeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\RoundingModeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $rounding
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CurrencyData
     */
    public function setRounding($rounding = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\RoundingModeEnum::valueIsValid($rounding)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $rounding, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\RoundingModeEnum::getValidValues())), __LINE__);
        }
        $this->Rounding = $rounding;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CurrencyData
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
