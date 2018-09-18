<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseInfoDetails StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ResponseInfoDetails
 * @subpackage Structs
 */
class ResponseInfoDetails extends AbstractStructBase
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
     * The Exceptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRaisedException
     */
    public $Exceptions;
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
     * The ResponseDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ResponseDateTime;
    /**
     * The TranactionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TranactionID;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TransactionID;
    /**
     * Constructor method for ResponseInfoDetails
     * @uses ResponseInfoDetails::setAPIVersion()
     * @uses ResponseInfoDetails::setExceptions()
     * @uses ResponseInfoDetails::setListenPort()
     * @uses ResponseInfoDetails::setMachineName()
     * @uses ResponseInfoDetails::setResponseDateTime()
     * @uses ResponseInfoDetails::setTranactionID()
     * @uses ResponseInfoDetails::setTransactionID()
     * @param string $aPIVersion
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRaisedException $exceptions
     * @param int $listenPort
     * @param string $machineName
     * @param string $responseDateTime
     * @param string $tranactionID
     * @param string $transactionID
     */
    public function __construct($aPIVersion = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRaisedException $exceptions = null, $listenPort = null, $machineName = null, $responseDateTime = null, $tranactionID = null, $transactionID = null)
    {
        $this
            ->setAPIVersion($aPIVersion)
            ->setExceptions($exceptions)
            ->setListenPort($listenPort)
            ->setMachineName($machineName)
            ->setResponseDateTime($responseDateTime)
            ->setTranactionID($tranactionID)
            ->setTransactionID($transactionID);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails
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
     * Get Exceptions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRaisedException|null
     */
    public function getExceptions()
    {
        return isset($this->Exceptions) ? $this->Exceptions : null;
    }
    /**
     * Set Exceptions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRaisedException $exceptions
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails
     */
    public function setExceptions(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRaisedException $exceptions = null)
    {
        if (is_null($exceptions) || (is_array($exceptions) && empty($exceptions))) {
            unset($this->Exceptions);
        } else {
            $this->Exceptions = $exceptions;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails
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
     * Get ResponseDateTime value
     * @return string|null
     */
    public function getResponseDateTime()
    {
        return $this->ResponseDateTime;
    }
    /**
     * Set ResponseDateTime value
     * @param string $responseDateTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails
     */
    public function setResponseDateTime($responseDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($responseDateTime) && !is_string($responseDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($responseDateTime)), __LINE__);
        }
        $this->ResponseDateTime = $responseDateTime;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails
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
     * Get TransactionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTransactionID()
    {
        return isset($this->TransactionID) ? $this->TransactionID : null;
    }
    /**
     * Set TransactionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $transactionID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionID)), __LINE__);
        }
        if (is_null($transactionID) || (is_array($transactionID) && empty($transactionID))) {
            unset($this->TransactionID);
        } else {
            $this->TransactionID = $transactionID;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails
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
