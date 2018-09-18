<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessingRequestRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ProcessingRequestRule
 * @subpackage Structs
 */
class ProcessingRequestRule extends AbstractStructBase
{
    /**
     * The CancelMode
     * @var string
     */
    public $CancelMode;
    /**
     * The ConfirmMode
     * @var string
     */
    public $ConfirmMode;
    /**
     * The TimeWindow
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
    public $TimeWindow;
    /**
     * Constructor method for ProcessingRequestRule
     * @uses ProcessingRequestRule::setCancelMode()
     * @uses ProcessingRequestRule::setConfirmMode()
     * @uses ProcessingRequestRule::setTimeWindow()
     * @param string $cancelMode
     * @param string $confirmMode
     * @param string $timeWindow
     */
    public function __construct($cancelMode = null, $confirmMode = null, $timeWindow = null)
    {
        $this
            ->setCancelMode($cancelMode)
            ->setConfirmMode($confirmMode)
            ->setTimeWindow($timeWindow);
    }
    /**
     * Get CancelMode value
     * @return string|null
     */
    public function getCancelMode()
    {
        return $this->CancelMode;
    }
    /**
     * Set CancelMode value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CancelModeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CancelModeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cancelMode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessingRequestRule
     */
    public function setCancelMode($cancelMode = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CancelModeEnum::valueIsValid($cancelMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cancelMode, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CancelModeEnum::getValidValues())), __LINE__);
        }
        $this->CancelMode = $cancelMode;
        return $this;
    }
    /**
     * Get ConfirmMode value
     * @return string|null
     */
    public function getConfirmMode()
    {
        return $this->ConfirmMode;
    }
    /**
     * Set ConfirmMode value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ConfirmModeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ConfirmModeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $confirmMode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessingRequestRule
     */
    public function setConfirmMode($confirmMode = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ConfirmModeEnum::valueIsValid($confirmMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $confirmMode, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ConfirmModeEnum::getValidValues())), __LINE__);
        }
        $this->ConfirmMode = $confirmMode;
        return $this;
    }
    /**
     * Get TimeWindow value
     * @return string|null
     */
    public function getTimeWindow()
    {
        return $this->TimeWindow;
    }
    /**
     * Set TimeWindow value
     * @param string $timeWindow
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessingRequestRule
     */
    public function setTimeWindow($timeWindow = null)
    {
        // validation for constraint: maxInclusive
        if ($timeWindow > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $timeWindow), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($timeWindow < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $timeWindow), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($timeWindow) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $timeWindow)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($timeWindow, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($timeWindow) && !is_string($timeWindow)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeWindow)), __LINE__);
        }
        $this->TimeWindow = $timeWindow;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessingRequestRule
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
