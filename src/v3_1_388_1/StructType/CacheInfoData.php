<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CacheInfoData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CacheInfoData
 * @subpackage Structs
 */
class CacheInfoData extends AbstractStructBase
{
    /**
     * The CacheAge
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
    public $CacheAge;
    /**
     * The Estimated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Estimated;
    /**
     * Constructor method for CacheInfoData
     * @uses CacheInfoData::setCacheAge()
     * @uses CacheInfoData::setEstimated()
     * @param string $cacheAge
     * @param bool $estimated
     */
    public function __construct($cacheAge = null, $estimated = null)
    {
        $this
            ->setCacheAge($cacheAge)
            ->setEstimated($estimated);
    }
    /**
     * Get CacheAge value
     * @return string|null
     */
    public function getCacheAge()
    {
        return $this->CacheAge;
    }
    /**
     * Set CacheAge value
     * @param string $cacheAge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheInfoData
     */
    public function setCacheAge($cacheAge = null)
    {
        // validation for constraint: maxInclusive
        if ($cacheAge > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $cacheAge), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($cacheAge < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $cacheAge), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($cacheAge) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $cacheAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($cacheAge, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($cacheAge) && !is_string($cacheAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cacheAge)), __LINE__);
        }
        $this->CacheAge = $cacheAge;
        return $this;
    }
    /**
     * Get Estimated value
     * @return bool|null
     */
    public function getEstimated()
    {
        return $this->Estimated;
    }
    /**
     * Set Estimated value
     * @param bool $estimated
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheInfoData
     */
    public function setEstimated($estimated = null)
    {
        // validation for constraint: boolean
        if (!is_null($estimated) && !is_bool($estimated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($estimated)), __LINE__);
        }
        $this->Estimated = $estimated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheInfoData
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
