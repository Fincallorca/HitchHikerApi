<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeFlightWebFare StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ChangeFlightWebFare
 * @subpackage Structs
 */
class ChangeFlightWebFare extends AbstractStructBase
{
    /**
     * The AllowSMSNotification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowSMSNotification;
    /**
     * The PassengerFirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PassengerFirstName;
    /**
     * The PassengerLastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PassengerLastName;
    /**
     * The Transactioncode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Transactioncode;
    /**
     * The WebAgent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
     */
    public $WebAgent;
    /**
     * Constructor method for ChangeFlightWebFare
     * @uses ChangeFlightWebFare::setAllowSMSNotification()
     * @uses ChangeFlightWebFare::setPassengerFirstName()
     * @uses ChangeFlightWebFare::setPassengerLastName()
     * @uses ChangeFlightWebFare::setTransactioncode()
     * @uses ChangeFlightWebFare::setWebAgent()
     * @param bool $allowSMSNotification
     * @param string $passengerFirstName
     * @param string $passengerLastName
     * @param string $transactioncode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent
     */
    public function __construct($allowSMSNotification = null, $passengerFirstName = null, $passengerLastName = null, $transactioncode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent = null)
    {
        $this
            ->setAllowSMSNotification($allowSMSNotification)
            ->setPassengerFirstName($passengerFirstName)
            ->setPassengerLastName($passengerLastName)
            ->setTransactioncode($transactioncode)
            ->setWebAgent($webAgent);
    }
    /**
     * Get AllowSMSNotification value
     * @return bool|null
     */
    public function getAllowSMSNotification()
    {
        return $this->AllowSMSNotification;
    }
    /**
     * Set AllowSMSNotification value
     * @param bool $allowSMSNotification
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightWebFare
     */
    public function setAllowSMSNotification($allowSMSNotification = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowSMSNotification) && !is_bool($allowSMSNotification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowSMSNotification)), __LINE__);
        }
        $this->AllowSMSNotification = $allowSMSNotification;
        return $this;
    }
    /**
     * Get PassengerFirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassengerFirstName()
    {
        return isset($this->PassengerFirstName) ? $this->PassengerFirstName : null;
    }
    /**
     * Set PassengerFirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passengerFirstName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightWebFare
     */
    public function setPassengerFirstName($passengerFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($passengerFirstName) && !is_string($passengerFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerFirstName)), __LINE__);
        }
        if (is_null($passengerFirstName) || (is_array($passengerFirstName) && empty($passengerFirstName))) {
            unset($this->PassengerFirstName);
        } else {
            $this->PassengerFirstName = $passengerFirstName;
        }
        return $this;
    }
    /**
     * Get PassengerLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassengerLastName()
    {
        return isset($this->PassengerLastName) ? $this->PassengerLastName : null;
    }
    /**
     * Set PassengerLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passengerLastName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightWebFare
     */
    public function setPassengerLastName($passengerLastName = null)
    {
        // validation for constraint: string
        if (!is_null($passengerLastName) && !is_string($passengerLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerLastName)), __LINE__);
        }
        if (is_null($passengerLastName) || (is_array($passengerLastName) && empty($passengerLastName))) {
            unset($this->PassengerLastName);
        } else {
            $this->PassengerLastName = $passengerLastName;
        }
        return $this;
    }
    /**
     * Get Transactioncode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTransactioncode()
    {
        return isset($this->Transactioncode) ? $this->Transactioncode : null;
    }
    /**
     * Set Transactioncode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $transactioncode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightWebFare
     */
    public function setTransactioncode($transactioncode = null)
    {
        // validation for constraint: string
        if (!is_null($transactioncode) && !is_string($transactioncode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactioncode)), __LINE__);
        }
        if (is_null($transactioncode) || (is_array($transactioncode) && empty($transactioncode))) {
            unset($this->Transactioncode);
        } else {
            $this->Transactioncode = $transactioncode;
        }
        return $this;
    }
    /**
     * Get WebAgent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent|null
     */
    public function getWebAgent()
    {
        return isset($this->WebAgent) ? $this->WebAgent : null;
    }
    /**
     * Set WebAgent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightWebFare
     */
    public function setWebAgent(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent = null)
    {
        if (is_null($webAgent) || (is_array($webAgent) && empty($webAgent))) {
            unset($this->WebAgent);
        } else {
            $this->WebAgent = $webAgent;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightWebFare
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
