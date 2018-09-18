<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebCarrier StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:WebCarrier
 * @subpackage Structs
 */
class WebCarrier extends AbstractStructBase
{
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CarrierCode;
    /**
     * The ExcludeCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ExcludeCarrier;
    /**
     * The IsAPI
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAPI;
    /**
     * Constructor method for WebCarrier
     * @uses WebCarrier::setCarrierCode()
     * @uses WebCarrier::setExcludeCarrier()
     * @uses WebCarrier::setIsAPI()
     * @param string $carrierCode
     * @param bool $excludeCarrier
     * @param bool $isAPI
     */
    public function __construct($carrierCode = null, $excludeCarrier = null, $isAPI = null)
    {
        $this
            ->setCarrierCode($carrierCode)
            ->setExcludeCarrier($excludeCarrier)
            ->setIsAPI($isAPI);
    }
    /**
     * Get CarrierCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCarrierCode()
    {
        return isset($this->CarrierCode) ? $this->CarrierCode : null;
    }
    /**
     * Set CarrierCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $carrierCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierCode)), __LINE__);
        }
        if (is_null($carrierCode) || (is_array($carrierCode) && empty($carrierCode))) {
            unset($this->CarrierCode);
        } else {
            $this->CarrierCode = $carrierCode;
        }
        return $this;
    }
    /**
     * Get ExcludeCarrier value
     * @return bool|null
     */
    public function getExcludeCarrier()
    {
        return $this->ExcludeCarrier;
    }
    /**
     * Set ExcludeCarrier value
     * @param bool $excludeCarrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier
     */
    public function setExcludeCarrier($excludeCarrier = null)
    {
        // validation for constraint: boolean
        if (!is_null($excludeCarrier) && !is_bool($excludeCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($excludeCarrier)), __LINE__);
        }
        $this->ExcludeCarrier = $excludeCarrier;
        return $this;
    }
    /**
     * Get IsAPI value
     * @return bool|null
     */
    public function getIsAPI()
    {
        return $this->IsAPI;
    }
    /**
     * Set IsAPI value
     * @param bool $isAPI
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier
     */
    public function setIsAPI($isAPI = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAPI) && !is_bool($isAPI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAPI)), __LINE__);
        }
        $this->IsAPI = $isAPI;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebCarrier
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
