<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommandIPData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CommandIPData
 * @subpackage Structs
 */
class CommandIPData extends AbstractStructBase
{
    /**
     * The Command
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Command;
    /**
     * The IPAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IPAddress;
    /**
     * The Port
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Port;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Source;
    /**
     * Constructor method for CommandIPData
     * @uses CommandIPData::setCommand()
     * @uses CommandIPData::setIPAddress()
     * @uses CommandIPData::setPort()
     * @uses CommandIPData::setSource()
     * @param string $command
     * @param string $iPAddress
     * @param int $port
     * @param string $source
     */
    public function __construct($command = null, $iPAddress = null, $port = null, $source = null)
    {
        $this
            ->setCommand($command)
            ->setIPAddress($iPAddress)
            ->setPort($port)
            ->setSource($source);
    }
    /**
     * Get Command value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCommand()
    {
        return isset($this->Command) ? $this->Command : null;
    }
    /**
     * Set Command value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $command
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData
     */
    public function setCommand($command = null)
    {
        // validation for constraint: string
        if (!is_null($command) && !is_string($command)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($command)), __LINE__);
        }
        if (is_null($command) || (is_array($command) && empty($command))) {
            unset($this->Command);
        } else {
            $this->Command = $command;
        }
        return $this;
    }
    /**
     * Get IPAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIPAddress()
    {
        return isset($this->IPAddress) ? $this->IPAddress : null;
    }
    /**
     * Set IPAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iPAddress
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData
     */
    public function setIPAddress($iPAddress = null)
    {
        // validation for constraint: string
        if (!is_null($iPAddress) && !is_string($iPAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iPAddress)), __LINE__);
        }
        if (is_null($iPAddress) || (is_array($iPAddress) && empty($iPAddress))) {
            unset($this->IPAddress);
        } else {
            $this->IPAddress = $iPAddress;
        }
        return $this;
    }
    /**
     * Get Port value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPort()
    {
        return isset($this->Port) ? $this->Port : null;
    }
    /**
     * Set Port value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $port
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData
     */
    public function setPort($port = null)
    {
        // validation for constraint: int
        if (!is_null($port) && !is_numeric($port)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($port)), __LINE__);
        }
        if (is_null($port) || (is_array($port) && empty($port))) {
            unset($this->Port);
        } else {
            $this->Port = $port;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommandIPData
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
