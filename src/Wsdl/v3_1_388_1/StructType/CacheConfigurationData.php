<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CacheConfigurationData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CacheConfigurationData
 * @subpackage Structs
 */
class CacheConfigurationData extends AbstractStructBase
{
    /**
     * The CacheFailRequestMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CacheFailRequestMode;
    /**
     * The MaxCacheAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string
     */
    public $MaxCacheAge;
    /**
     * The SourceSystem
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SourceSystem;
    /**
     * Constructor method for CacheConfigurationData
     * @uses CacheConfigurationData::setCacheFailRequestMode()
     * @uses CacheConfigurationData::setMaxCacheAge()
     * @uses CacheConfigurationData::setSourceSystem()
     * @param bool $cacheFailRequestMode
     * @param string $maxCacheAge
     * @param string $sourceSystem
     */
    public function __construct($cacheFailRequestMode = null, $maxCacheAge = null, $sourceSystem = null)
    {
        $this
            ->setCacheFailRequestMode($cacheFailRequestMode)
            ->setMaxCacheAge($maxCacheAge)
            ->setSourceSystem($sourceSystem);
    }
    /**
     * Get CacheFailRequestMode value
     * @return bool|null
     */
    public function getCacheFailRequestMode()
    {
        return $this->CacheFailRequestMode;
    }
    /**
     * Set CacheFailRequestMode value
     * @param bool $cacheFailRequestMode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData
     */
    public function setCacheFailRequestMode($cacheFailRequestMode = null)
    {
        // validation for constraint: boolean
        if (!is_null($cacheFailRequestMode) && !is_bool($cacheFailRequestMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cacheFailRequestMode)), __LINE__);
        }
        $this->CacheFailRequestMode = $cacheFailRequestMode;
        return $this;
    }
    /**
     * Get MaxCacheAge value
     * @return string|null
     */
    public function getMaxCacheAge()
    {
        return $this->MaxCacheAge;
    }
    /**
     * Set MaxCacheAge value
     * @param string $maxCacheAge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData
     */
    public function setMaxCacheAge($maxCacheAge = null)
    {
        // validation for constraint: maxInclusive
        if ($maxCacheAge > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $maxCacheAge), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($maxCacheAge < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $maxCacheAge), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($maxCacheAge) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $maxCacheAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($maxCacheAge, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($maxCacheAge) && !is_string($maxCacheAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxCacheAge)), __LINE__);
        }
        $this->MaxCacheAge = $maxCacheAge;
        return $this;
    }
    /**
     * Get SourceSystem value
     * @return string|null
     */
    public function getSourceSystem()
    {
        return $this->SourceSystem;
    }
    /**
     * Set SourceSystem value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sourceSystem
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData
     */
    public function setSourceSystem($sourceSystem = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::valueIsValid($sourceSystem)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sourceSystem, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData
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
