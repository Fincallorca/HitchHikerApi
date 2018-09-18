<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnhancedFeederSearchSetting StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EnhancedFeederSearchSetting
 * @subpackage Structs
 */
class EnhancedFeederSearchSetting extends AbstractStructBase
{
    /**
     * The EFSMaxMoveDowns
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $EFSMaxMoveDowns;
    /**
     * The EFSSearchMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EFSSearchMode;
    /**
     * The IsAllowed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAllowed;
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
     * Constructor method for EnhancedFeederSearchSetting
     * @uses EnhancedFeederSearchSetting::setEFSMaxMoveDowns()
     * @uses EnhancedFeederSearchSetting::setEFSSearchMode()
     * @uses EnhancedFeederSearchSetting::setIsAllowed()
     * @uses EnhancedFeederSearchSetting::setMaxConnectionTime()
     * @uses EnhancedFeederSearchSetting::setMinConnectionTime()
     * @param int $eFSMaxMoveDowns
     * @param string $eFSSearchMode
     * @param bool $isAllowed
     * @param string $maxConnectionTime
     * @param string $minConnectionTime
     */
    public function __construct($eFSMaxMoveDowns = null, $eFSSearchMode = null, $isAllowed = null, $maxConnectionTime = null, $minConnectionTime = null)
    {
        $this
            ->setEFSMaxMoveDowns($eFSMaxMoveDowns)
            ->setEFSSearchMode($eFSSearchMode)
            ->setIsAllowed($isAllowed)
            ->setMaxConnectionTime($maxConnectionTime)
            ->setMinConnectionTime($minConnectionTime);
    }
    /**
     * Get EFSMaxMoveDowns value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getEFSMaxMoveDowns()
    {
        return isset($this->EFSMaxMoveDowns) ? $this->EFSMaxMoveDowns : null;
    }
    /**
     * Set EFSMaxMoveDowns value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $eFSMaxMoveDowns
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearchSetting
     */
    public function setEFSMaxMoveDowns($eFSMaxMoveDowns = null)
    {
        // validation for constraint: int
        if (!is_null($eFSMaxMoveDowns) && !is_numeric($eFSMaxMoveDowns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($eFSMaxMoveDowns)), __LINE__);
        }
        if (is_null($eFSMaxMoveDowns) || (is_array($eFSMaxMoveDowns) && empty($eFSMaxMoveDowns))) {
            unset($this->EFSMaxMoveDowns);
        } else {
            $this->EFSMaxMoveDowns = $eFSMaxMoveDowns;
        }
        return $this;
    }
    /**
     * Get EFSSearchMode value
     * @return string|null
     */
    public function getEFSSearchMode()
    {
        return $this->EFSSearchMode;
    }
    /**
     * Set EFSSearchMode value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\EnhancedFeederSearchModeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\EnhancedFeederSearchModeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eFSSearchMode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearchSetting
     */
    public function setEFSSearchMode($eFSSearchMode = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\EnhancedFeederSearchModeEnum::valueIsValid($eFSSearchMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eFSSearchMode, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\EnhancedFeederSearchModeEnum::getValidValues())), __LINE__);
        }
        $this->EFSSearchMode = $eFSSearchMode;
        return $this;
    }
    /**
     * Get IsAllowed value
     * @return bool|null
     */
    public function getIsAllowed()
    {
        return $this->IsAllowed;
    }
    /**
     * Set IsAllowed value
     * @param bool $isAllowed
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearchSetting
     */
    public function setIsAllowed($isAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAllowed) && !is_bool($isAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAllowed)), __LINE__);
        }
        $this->IsAllowed = $isAllowed;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearchSetting
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearchSetting
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearchSetting
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
