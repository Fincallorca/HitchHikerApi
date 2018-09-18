<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnhancedFeederSearch StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EnhancedFeederSearch
 * @subpackage Structs
 */
class EnhancedFeederSearch extends AbstractStructBase
{
    /**
     * The EFSearchMaxMoveDowns
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $EFSearchMaxMoveDowns;
    /**
     * The EFSearchMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EFSearchMode;
    /**
     * The MaxConnectionTime
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
    public $MaxConnectionTime;
    /**
     * The MinConnectionTime
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
    public $MinConnectionTime;
    /**
     * Constructor method for EnhancedFeederSearch
     * @uses EnhancedFeederSearch::setEFSearchMaxMoveDowns()
     * @uses EnhancedFeederSearch::setEFSearchMode()
     * @uses EnhancedFeederSearch::setMaxConnectionTime()
     * @uses EnhancedFeederSearch::setMinConnectionTime()
     * @param int $eFSearchMaxMoveDowns
     * @param string $eFSearchMode
     * @param string $maxConnectionTime
     * @param string $minConnectionTime
     */
    public function __construct($eFSearchMaxMoveDowns = null, $eFSearchMode = null, $maxConnectionTime = null, $minConnectionTime = null)
    {
        $this
            ->setEFSearchMaxMoveDowns($eFSearchMaxMoveDowns)
            ->setEFSearchMode($eFSearchMode)
            ->setMaxConnectionTime($maxConnectionTime)
            ->setMinConnectionTime($minConnectionTime);
    }
    /**
     * Get EFSearchMaxMoveDowns value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getEFSearchMaxMoveDowns()
    {
        return isset($this->EFSearchMaxMoveDowns) ? $this->EFSearchMaxMoveDowns : null;
    }
    /**
     * Set EFSearchMaxMoveDowns value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $eFSearchMaxMoveDowns
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearch
     */
    public function setEFSearchMaxMoveDowns($eFSearchMaxMoveDowns = null)
    {
        // validation for constraint: int
        if (!is_null($eFSearchMaxMoveDowns) && !is_numeric($eFSearchMaxMoveDowns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($eFSearchMaxMoveDowns)), __LINE__);
        }
        if (is_null($eFSearchMaxMoveDowns) || (is_array($eFSearchMaxMoveDowns) && empty($eFSearchMaxMoveDowns))) {
            unset($this->EFSearchMaxMoveDowns);
        } else {
            $this->EFSearchMaxMoveDowns = $eFSearchMaxMoveDowns;
        }
        return $this;
    }
    /**
     * Get EFSearchMode value
     * @return string|null
     */
    public function getEFSearchMode()
    {
        return $this->EFSearchMode;
    }
    /**
     * Set EFSearchMode value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\EnhancedFeederSearchModeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\EnhancedFeederSearchModeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eFSearchMode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearch
     */
    public function setEFSearchMode($eFSearchMode = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\EnhancedFeederSearchModeEnum::valueIsValid($eFSearchMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eFSearchMode, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\EnhancedFeederSearchModeEnum::getValidValues())), __LINE__);
        }
        $this->EFSearchMode = $eFSearchMode;
        return $this;
    }
    /**
     * Get MaxConnectionTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMaxConnectionTime()
    {
        return isset($this->MaxConnectionTime) ? $this->MaxConnectionTime : null;
    }
    /**
     * Set MaxConnectionTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $maxConnectionTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearch
     */
    public function setMaxConnectionTime($maxConnectionTime = null)
    {
        // validation for constraint: maxInclusive
        if ($maxConnectionTime > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $maxConnectionTime), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($maxConnectionTime < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $maxConnectionTime), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($maxConnectionTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $maxConnectionTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($maxConnectionTime, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($maxConnectionTime) && !is_string($maxConnectionTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxConnectionTime)), __LINE__);
        }
        if (is_null($maxConnectionTime) || (is_array($maxConnectionTime) && empty($maxConnectionTime))) {
            unset($this->MaxConnectionTime);
        } else {
            $this->MaxConnectionTime = $maxConnectionTime;
        }
        return $this;
    }
    /**
     * Get MinConnectionTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMinConnectionTime()
    {
        return isset($this->MinConnectionTime) ? $this->MinConnectionTime : null;
    }
    /**
     * Set MinConnectionTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $minConnectionTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearch
     */
    public function setMinConnectionTime($minConnectionTime = null)
    {
        // validation for constraint: maxInclusive
        if ($minConnectionTime > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $minConnectionTime), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($minConnectionTime < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $minConnectionTime), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($minConnectionTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $minConnectionTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($minConnectionTime, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($minConnectionTime) && !is_string($minConnectionTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minConnectionTime)), __LINE__);
        }
        if (is_null($minConnectionTime) || (is_array($minConnectionTime) && empty($minConnectionTime))) {
            unset($this->MinConnectionTime);
        } else {
            $this->MinConnectionTime = $minConnectionTime;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearch
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
