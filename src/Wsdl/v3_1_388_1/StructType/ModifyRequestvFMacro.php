<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyRequestvFMacro StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyRequestvFMacro
 * @subpackage Structs
 */
class ModifyRequestvFMacro extends AbstractStructBase
{
    /**
     * The ActionCode
     * @var string
     */
    public $ActionCode;
    /**
     * The Command
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Command;
    /**
     * The Header
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Header;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Value;
    /**
     * Constructor method for ModifyRequestvFMacro
     * @uses ModifyRequestvFMacro::setActionCode()
     * @uses ModifyRequestvFMacro::setCommand()
     * @uses ModifyRequestvFMacro::setHeader()
     * @uses ModifyRequestvFMacro::setValue()
     * @param string $actionCode
     * @param string $command
     * @param string $header
     * @param string $value
     */
    public function __construct($actionCode = null, $command = null, $header = null, $value = null)
    {
        $this
            ->setActionCode($actionCode)
            ->setCommand($command)
            ->setHeader($header)
            ->setValue($value);
    }
    /**
     * Get ActionCode value
     * @return string|null
     */
    public function getActionCode()
    {
        return $this->ActionCode;
    }
    /**
     * Set ActionCode value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MacroActionCodeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MacroActionCodeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $actionCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro
     */
    public function setActionCode($actionCode = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MacroActionCodeEnum::valueIsValid($actionCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $actionCode, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MacroActionCodeEnum::getValidValues())), __LINE__);
        }
        $this->ActionCode = $actionCode;
        return $this;
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
     * @param string $command
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro
     */
    public function setCommand($command = null)
    {
        // validation for constraint: string
        if (!is_null($command) && !is_string($command)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($command)), __LINE__);
        }
        $this->Command = $command;
        return $this;
    }
    /**
     * Get Header value
     * @return string|null
     */
    public function getHeader()
    {
        return $this->Header;
    }
    /**
     * Set Header value
     * @param string $header
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro
     */
    public function setHeader($header = null)
    {
        // validation for constraint: string
        if (!is_null($header) && !is_string($header)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($header)), __LINE__);
        }
        $this->Header = $header;
        return $this;
    }
    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValue()
    {
        return isset($this->Value) ? $this->Value : null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro
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
