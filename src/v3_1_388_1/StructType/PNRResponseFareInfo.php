<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRResponseFareInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PNRResponseFareInfo
 * @subpackage Structs
 */
class PNRResponseFareInfo extends AbstractStructBase
{
    /**
     * The PricingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PricingInfo;
    /**
     * Constructor method for PNRResponseFareInfo
     * @uses PNRResponseFareInfo::setPricingInfo()
     * @param string $pricingInfo
     */
    public function __construct($pricingInfo = null)
    {
        $this
            ->setPricingInfo($pricingInfo);
    }
    /**
     * Get PricingInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPricingInfo()
    {
        return isset($this->PricingInfo) ? $this->PricingInfo : null;
    }
    /**
     * Set PricingInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pricingInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseFareInfo
     */
    public function setPricingInfo($pricingInfo = null)
    {
        // validation for constraint: string
        if (!is_null($pricingInfo) && !is_string($pricingInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pricingInfo)), __LINE__);
        }
        if (is_null($pricingInfo) || (is_array($pricingInfo) && empty($pricingInfo))) {
            unset($this->PricingInfo);
        } else {
            $this->PricingInfo = $pricingInfo;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseFareInfo
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
