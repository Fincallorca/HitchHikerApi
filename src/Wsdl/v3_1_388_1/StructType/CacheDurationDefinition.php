<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CacheDurationDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CacheDurationDefinition
 * @subpackage Structs
 */
class CacheDurationDefinition extends AbstractStructBase
{
    /**
     * The Command
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Command;
    /**
     * The Duration
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
    public $Duration;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Source;
    /**
     * The bCacheFAPISource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bCacheFAPISource;
    /**
     * Constructor method for CacheDurationDefinition
     * @uses CacheDurationDefinition::setCommand()
     * @uses CacheDurationDefinition::setDuration()
     * @uses CacheDurationDefinition::setSource()
     * @uses CacheDurationDefinition::setBCacheFAPISource()
     * @param string $command
     * @param string $duration
     * @param string $source
     * @param bool $bCacheFAPISource
     */
    public function __construct($command = null, $duration = null, $source = null, $bCacheFAPISource = null)
    {
        $this
            ->setCommand($command)
            ->setDuration($duration)
            ->setSource($source)
            ->setBCacheFAPISource($bCacheFAPISource);
    }
    /**
     * Get Command value
     * @return string|null
     */
    public function getCommand()
    {
        return $this->Command;
    }
    /**
     * Set Command value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CommandEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CommandEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $command
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition
     */
    public function setCommand($command = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CommandEnum::valueIsValid($command)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $command, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CommandEnum::getValidValues())), __LINE__);
        }
        $this->Command = $command;
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param string $duration
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: maxInclusive
        if ($duration > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $duration), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($duration < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $duration), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($duration) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($duration, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $source
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition
     */
    public function setSource($source = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::valueIsValid($source)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $source, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::getValidValues())), __LINE__);
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Get bCacheFAPISource value
     * @return bool|null
     */
    public function getBCacheFAPISource()
    {
        return $this->bCacheFAPISource;
    }
    /**
     * Set bCacheFAPISource value
     * @param bool $bCacheFAPISource
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition
     */
    public function setBCacheFAPISource($bCacheFAPISource = null)
    {
        // validation for constraint: boolean
        if (!is_null($bCacheFAPISource) && !is_bool($bCacheFAPISource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bCacheFAPISource)), __LINE__);
        }
        $this->bCacheFAPISource = $bCacheFAPISource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition
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
