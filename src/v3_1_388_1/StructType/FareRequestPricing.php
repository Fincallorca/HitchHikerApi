<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRequestPricing StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareRequestPricing
 * @subpackage Structs
 */
class FareRequestPricing extends AbstractStructBase
{
    /**
     * The AddQSurchargeToFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AddQSurchargeToFare;
    /**
     * The AllowSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowSurcharge;
    /**
     * The MaximumFarePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $MaximumFarePrice;
    /**
     * The ReturnQSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnQSurcharge;
    /**
     * Constructor method for FareRequestPricing
     * @uses FareRequestPricing::setAddQSurchargeToFare()
     * @uses FareRequestPricing::setAllowSurcharge()
     * @uses FareRequestPricing::setMaximumFarePrice()
     * @uses FareRequestPricing::setReturnQSurcharge()
     * @param bool $addQSurchargeToFare
     * @param bool $allowSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $maximumFarePrice
     * @param bool $returnQSurcharge
     */
    public function __construct($addQSurchargeToFare = null, $allowSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $maximumFarePrice = null, $returnQSurcharge = null)
    {
        $this
            ->setAddQSurchargeToFare($addQSurchargeToFare)
            ->setAllowSurcharge($allowSurcharge)
            ->setMaximumFarePrice($maximumFarePrice)
            ->setReturnQSurcharge($returnQSurcharge);
    }
    /**
     * Get AddQSurchargeToFare value
     * @return bool|null
     */
    public function getAddQSurchargeToFare()
    {
        return $this->AddQSurchargeToFare;
    }
    /**
     * Set AddQSurchargeToFare value
     * @param bool $addQSurchargeToFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPricing
     */
    public function setAddQSurchargeToFare($addQSurchargeToFare = null)
    {
        // validation for constraint: boolean
        if (!is_null($addQSurchargeToFare) && !is_bool($addQSurchargeToFare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($addQSurchargeToFare)), __LINE__);
        }
        $this->AddQSurchargeToFare = $addQSurchargeToFare;
        return $this;
    }
    /**
     * Get AllowSurcharge value
     * @return bool|null
     */
    public function getAllowSurcharge()
    {
        return $this->AllowSurcharge;
    }
    /**
     * Set AllowSurcharge value
     * @param bool $allowSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPricing
     */
    public function setAllowSurcharge($allowSurcharge = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowSurcharge) && !is_bool($allowSurcharge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowSurcharge)), __LINE__);
        }
        $this->AllowSurcharge = $allowSurcharge;
        return $this;
    }
    /**
     * Get MaximumFarePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getMaximumFarePrice()
    {
        return isset($this->MaximumFarePrice) ? $this->MaximumFarePrice : null;
    }
    /**
     * Set MaximumFarePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $maximumFarePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPricing
     */
    public function setMaximumFarePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $maximumFarePrice = null)
    {
        if (is_null($maximumFarePrice) || (is_array($maximumFarePrice) && empty($maximumFarePrice))) {
            unset($this->MaximumFarePrice);
        } else {
            $this->MaximumFarePrice = $maximumFarePrice;
        }
        return $this;
    }
    /**
     * Get ReturnQSurcharge value
     * @return bool|null
     */
    public function getReturnQSurcharge()
    {
        return $this->ReturnQSurcharge;
    }
    /**
     * Set ReturnQSurcharge value
     * @param bool $returnQSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPricing
     */
    public function setReturnQSurcharge($returnQSurcharge = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnQSurcharge) && !is_bool($returnQSurcharge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnQSurcharge)), __LINE__);
        }
        $this->ReturnQSurcharge = $returnQSurcharge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPricing
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
