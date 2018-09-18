<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightAPIFault StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FlightAPIFault
 * @subpackage Structs
 */
class FlightAPIFault extends AbstractStructBase
{
    /**
     * The APIVersion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $APIVersion;
    /**
     * The ExceptionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ExceptionCode;
    /**
     * The ExceptionText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ExceptionText;
    /**
     * The ListenPort
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ListenPort;
    /**
     * The MachineName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MachineName;
    /**
     * The TranactionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TranactionID;
    /**
     * Constructor method for FlightAPIFault
     * @uses FlightAPIFault::setAPIVersion()
     * @uses FlightAPIFault::setExceptionCode()
     * @uses FlightAPIFault::setExceptionText()
     * @uses FlightAPIFault::setListenPort()
     * @uses FlightAPIFault::setMachineName()
     * @uses FlightAPIFault::setTranactionID()
     * @param string $aPIVersion
     * @param string $exceptionCode
     * @param string $exceptionText
     * @param int $listenPort
     * @param string $machineName
     * @param string $tranactionID
     */
    public function __construct($aPIVersion = null, $exceptionCode = null, $exceptionText = null, $listenPort = null, $machineName = null, $tranactionID = null)
    {
        $this
            ->setAPIVersion($aPIVersion)
            ->setExceptionCode($exceptionCode)
            ->setExceptionText($exceptionText)
            ->setListenPort($listenPort)
            ->setMachineName($machineName)
            ->setTranactionID($tranactionID);
    }
    /**
     * Get APIVersion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAPIVersion()
    {
        return isset($this->APIVersion) ? $this->APIVersion : null;
    }
    /**
     * Set APIVersion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $aPIVersion
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FlightAPIFault
     */
    public function setAPIVersion($aPIVersion = null)
    {
        // validation for constraint: string
        if (!is_null($aPIVersion) && !is_string($aPIVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aPIVersion)), __LINE__);
        }
        if (is_null($aPIVersion) || (is_array($aPIVersion) && empty($aPIVersion))) {
            unset($this->APIVersion);
        } else {
            $this->APIVersion = $aPIVersion;
        }
        return $this;
    }
    /**
     * Get ExceptionCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExceptionCode()
    {
        return isset($this->ExceptionCode) ? $this->ExceptionCode : null;
    }
    /**
     * Set ExceptionCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $exceptionCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FlightAPIFault
     */
    public function setExceptionCode($exceptionCode = null)
    {
        // validation for constraint: string
        if (!is_null($exceptionCode) && !is_string($exceptionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exceptionCode)), __LINE__);
        }
        if (is_null($exceptionCode) || (is_array($exceptionCode) && empty($exceptionCode))) {
            unset($this->ExceptionCode);
        } else {
            $this->ExceptionCode = $exceptionCode;
        }
        return $this;
    }
    /**
     * Get ExceptionText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExceptionText()
    {
        return isset($this->ExceptionText) ? $this->ExceptionText : null;
    }
    /**
     * Set ExceptionText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $exceptionText
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FlightAPIFault
     */
    public function setExceptionText($exceptionText = null)
    {
        // validation for constraint: string
        if (!is_null($exceptionText) && !is_string($exceptionText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exceptionText)), __LINE__);
        }
        if (is_null($exceptionText) || (is_array($exceptionText) && empty($exceptionText))) {
            unset($this->ExceptionText);
        } else {
            $this->ExceptionText = $exceptionText;
        }
        return $this;
    }
    /**
     * Get ListenPort value
     * @return int|null
     */
    public function getListenPort()
    {
        return $this->ListenPort;
    }
    /**
     * Set ListenPort value
     * @param int $listenPort
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FlightAPIFault
     */
    public function setListenPort($listenPort = null)
    {
        // validation for constraint: int
        if (!is_null($listenPort) && !is_numeric($listenPort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listenPort)), __LINE__);
        }
        $this->ListenPort = $listenPort;
        return $this;
    }
    /**
     * Get MachineName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMachineName()
    {
        return isset($this->MachineName) ? $this->MachineName : null;
    }
    /**
     * Set MachineName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $machineName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FlightAPIFault
     */
    public function setMachineName($machineName = null)
    {
        // validation for constraint: string
        if (!is_null($machineName) && !is_string($machineName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($machineName)), __LINE__);
        }
        if (is_null($machineName) || (is_array($machineName) && empty($machineName))) {
            unset($this->MachineName);
        } else {
            $this->MachineName = $machineName;
        }
        return $this;
    }
    /**
     * Get TranactionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTranactionID()
    {
        return isset($this->TranactionID) ? $this->TranactionID : null;
    }
    /**
     * Set TranactionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tranactionID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FlightAPIFault
     */
    public function setTranactionID($tranactionID = null)
    {
        // validation for constraint: string
        if (!is_null($tranactionID) && !is_string($tranactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tranactionID)), __LINE__);
        }
        if (is_null($tranactionID) || (is_array($tranactionID) && empty($tranactionID))) {
            unset($this->TranactionID);
        } else {
            $this->TranactionID = $tranactionID;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FlightAPIFault
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
