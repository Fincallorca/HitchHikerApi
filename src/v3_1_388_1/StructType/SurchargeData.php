<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SurchargeData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SurchargeData
 * @subpackage Structs
 */
class SurchargeData extends AbstractStructBase
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $Amount;
    /**
     * The EquivalentAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentAmount;
    /**
     * The EquivalentMinimumSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentMinimumSurcharge;
    /**
     * The IsForEachPassenger
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsForEachPassenger;
    /**
     * The IsForEachSegment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsForEachSegment;
    /**
     * The MinimumSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $MinimumSurcharge;
    /**
     * The PercentageSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PercentageSurcharge;
    /**
     * The PercentageSurchargeContains
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PercentageSurchargeContains;
    /**
     * The PercentageSurchargeMinimum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $PercentageSurchargeMinimum;
    /**
     * Constructor method for SurchargeData
     * @uses SurchargeData::setAmount()
     * @uses SurchargeData::setEquivalentAmount()
     * @uses SurchargeData::setEquivalentMinimumSurcharge()
     * @uses SurchargeData::setIsForEachPassenger()
     * @uses SurchargeData::setIsForEachSegment()
     * @uses SurchargeData::setMinimumSurcharge()
     * @uses SurchargeData::setPercentageSurcharge()
     * @uses SurchargeData::setPercentageSurchargeContains()
     * @uses SurchargeData::setPercentageSurchargeMinimum()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $amount
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAmount
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentMinimumSurcharge
     * @param bool $isForEachPassenger
     * @param bool $isForEachSegment
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $minimumSurcharge
     * @param string $percentageSurcharge
     * @param string $percentageSurchargeContains
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $percentageSurchargeMinimum
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $amount = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAmount = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentMinimumSurcharge = null, $isForEachPassenger = null, $isForEachSegment = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $minimumSurcharge = null, $percentageSurcharge = null, $percentageSurchargeContains = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $percentageSurchargeMinimum = null)
    {
        $this
            ->setAmount($amount)
            ->setEquivalentAmount($equivalentAmount)
            ->setEquivalentMinimumSurcharge($equivalentMinimumSurcharge)
            ->setIsForEachPassenger($isForEachPassenger)
            ->setIsForEachSegment($isForEachSegment)
            ->setMinimumSurcharge($minimumSurcharge)
            ->setPercentageSurcharge($percentageSurcharge)
            ->setPercentageSurchargeContains($percentageSurchargeContains)
            ->setPercentageSurchargeMinimum($percentageSurchargeMinimum);
    }
    /**
     * Get Amount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getAmount()
    {
        return isset($this->Amount) ? $this->Amount : null;
    }
    /**
     * Set Amount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $amount
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public function setAmount(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $amount = null)
    {
        if (is_null($amount) || (is_array($amount) && empty($amount))) {
            unset($this->Amount);
        } else {
            $this->Amount = $amount;
        }
        return $this;
    }
    /**
     * Get EquivalentAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentAmount()
    {
        return isset($this->EquivalentAmount) ? $this->EquivalentAmount : null;
    }
    /**
     * Set EquivalentAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAmount
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public function setEquivalentAmount(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAmount = null)
    {
        if (is_null($equivalentAmount) || (is_array($equivalentAmount) && empty($equivalentAmount))) {
            unset($this->EquivalentAmount);
        } else {
            $this->EquivalentAmount = $equivalentAmount;
        }
        return $this;
    }
    /**
     * Get EquivalentMinimumSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentMinimumSurcharge()
    {
        return isset($this->EquivalentMinimumSurcharge) ? $this->EquivalentMinimumSurcharge : null;
    }
    /**
     * Set EquivalentMinimumSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentMinimumSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public function setEquivalentMinimumSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentMinimumSurcharge = null)
    {
        if (is_null($equivalentMinimumSurcharge) || (is_array($equivalentMinimumSurcharge) && empty($equivalentMinimumSurcharge))) {
            unset($this->EquivalentMinimumSurcharge);
        } else {
            $this->EquivalentMinimumSurcharge = $equivalentMinimumSurcharge;
        }
        return $this;
    }
    /**
     * Get IsForEachPassenger value
     * @return bool|null
     */
    public function getIsForEachPassenger()
    {
        return $this->IsForEachPassenger;
    }
    /**
     * Set IsForEachPassenger value
     * @param bool $isForEachPassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public function setIsForEachPassenger($isForEachPassenger = null)
    {
        // validation for constraint: boolean
        if (!is_null($isForEachPassenger) && !is_bool($isForEachPassenger)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isForEachPassenger)), __LINE__);
        }
        $this->IsForEachPassenger = $isForEachPassenger;
        return $this;
    }
    /**
     * Get IsForEachSegment value
     * @return bool|null
     */
    public function getIsForEachSegment()
    {
        return $this->IsForEachSegment;
    }
    /**
     * Set IsForEachSegment value
     * @param bool $isForEachSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public function setIsForEachSegment($isForEachSegment = null)
    {
        // validation for constraint: boolean
        if (!is_null($isForEachSegment) && !is_bool($isForEachSegment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isForEachSegment)), __LINE__);
        }
        $this->IsForEachSegment = $isForEachSegment;
        return $this;
    }
    /**
     * Get MinimumSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getMinimumSurcharge()
    {
        return isset($this->MinimumSurcharge) ? $this->MinimumSurcharge : null;
    }
    /**
     * Set MinimumSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $minimumSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public function setMinimumSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $minimumSurcharge = null)
    {
        if (is_null($minimumSurcharge) || (is_array($minimumSurcharge) && empty($minimumSurcharge))) {
            unset($this->MinimumSurcharge);
        } else {
            $this->MinimumSurcharge = $minimumSurcharge;
        }
        return $this;
    }
    /**
     * Get PercentageSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPercentageSurcharge()
    {
        return isset($this->PercentageSurcharge) ? $this->PercentageSurcharge : null;
    }
    /**
     * Set PercentageSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $percentageSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public function setPercentageSurcharge($percentageSurcharge = null)
    {
        // validation for constraint: string
        if (!is_null($percentageSurcharge) && !is_string($percentageSurcharge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percentageSurcharge)), __LINE__);
        }
        if (is_null($percentageSurcharge) || (is_array($percentageSurcharge) && empty($percentageSurcharge))) {
            unset($this->PercentageSurcharge);
        } else {
            $this->PercentageSurcharge = $percentageSurcharge;
        }
        return $this;
    }
    /**
     * Get PercentageSurchargeContains value
     * @return string|null
     */
    public function getPercentageSurchargeContains()
    {
        return $this->PercentageSurchargeContains;
    }
    /**
     * Set PercentageSurchargeContains value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SurchargeContainsEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SurchargeContainsEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $percentageSurchargeContains
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public function setPercentageSurchargeContains($percentageSurchargeContains = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SurchargeContainsEnum::valueIsValid($percentageSurchargeContains)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $percentageSurchargeContains, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SurchargeContainsEnum::getValidValues())), __LINE__);
        }
        $this->PercentageSurchargeContains = $percentageSurchargeContains;
        return $this;
    }
    /**
     * Get PercentageSurchargeMinimum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getPercentageSurchargeMinimum()
    {
        return isset($this->PercentageSurchargeMinimum) ? $this->PercentageSurchargeMinimum : null;
    }
    /**
     * Set PercentageSurchargeMinimum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $percentageSurchargeMinimum
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public function setPercentageSurchargeMinimum(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $percentageSurchargeMinimum = null)
    {
        if (is_null($percentageSurchargeMinimum) || (is_array($percentageSurchargeMinimum) && empty($percentageSurchargeMinimum))) {
            unset($this->PercentageSurchargeMinimum);
        } else {
            $this->PercentageSurchargeMinimum = $percentageSurchargeMinimum;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
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
