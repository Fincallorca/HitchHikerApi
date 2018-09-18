<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCRSConfigData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RequestCRSConfigData
 * @subpackage Structs
 */
class RequestCRSConfigData extends CRS
{
    /**
     * The CacheID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CacheID;
    /**
     * The CacheMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CacheMode;
    /**
     * Constructor method for RequestCRSConfigData
     * @uses RequestCRSConfigData::setCacheID()
     * @uses RequestCRSConfigData::setCacheMode()
     * @param string $cacheID
     * @param string $cacheMode
     */
    public function __construct($cacheID = null, $cacheMode = null)
    {
        $this
            ->setCacheID($cacheID)
            ->setCacheMode($cacheMode);
    }
    /**
     * Get CacheID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCacheID()
    {
        return isset($this->CacheID) ? $this->CacheID : null;
    }
    /**
     * Set CacheID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cacheID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCRSConfigData
     */
    public function setCacheID($cacheID = null)
    {
        // validation for constraint: string
        if (!is_null($cacheID) && !is_string($cacheID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cacheID)), __LINE__);
        }
        if (is_null($cacheID) || (is_array($cacheID) && empty($cacheID))) {
            unset($this->CacheID);
        } else {
            $this->CacheID = $cacheID;
        }
        return $this;
    }
    /**
     * Get CacheMode value
     * @return string|null
     */
    public function getCacheMode()
    {
        return $this->CacheMode;
    }
    /**
     * Set CacheMode value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CacheModeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CacheModeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cacheMode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCRSConfigData
     */
    public function setCacheMode($cacheMode = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CacheModeEnum::valueIsValid($cacheMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cacheMode, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CacheModeEnum::getValidValues())), __LINE__);
        }
        $this->CacheMode = $cacheMode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCRSConfigData
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
