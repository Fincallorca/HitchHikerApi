<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CancelRequestData
 * @subpackage Structs
 */
class CancelRequestData extends AbstractStructBase
{
    /**
     * The CRSConfig
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public $CRSConfig;
    /**
     * The CancelOnlyIfNotTicketed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CancelOnlyIfNotTicketed;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CarrierCode;
    /**
     * The Charter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestCharter
     */
    public $Charter;
    /**
     * The Configuration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestConfiguration
     */
    public $Configuration;
    /**
     * The CustomerLastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CustomerLastName;
    /**
     * The IsAllotment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAllotment;
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint
     */
    public $Passengers;
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData
     */
    public $Payment;
    /**
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $RecordLocator;
    /**
     * The Segments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint
     */
    public $Segments;
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * The Web
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestWeb
     */
    public $Web;
    /**
     * Constructor method for CancelRequestData
     * @uses CancelRequestData::setCRSConfig()
     * @uses CancelRequestData::setCancelOnlyIfNotTicketed()
     * @uses CancelRequestData::setCarrierCode()
     * @uses CancelRequestData::setCharter()
     * @uses CancelRequestData::setConfiguration()
     * @uses CancelRequestData::setCustomerLastName()
     * @uses CancelRequestData::setIsAllotment()
     * @uses CancelRequestData::setPassengers()
     * @uses CancelRequestData::setPayment()
     * @uses CancelRequestData::setRecordLocator()
     * @uses CancelRequestData::setSegments()
     * @uses CancelRequestData::setSource()
     * @uses CancelRequestData::setWeb()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @param bool $cancelOnlyIfNotTicketed
     * @param string $carrierCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestCharter $charter
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestConfiguration $configuration
     * @param string $customerLastName
     * @param bool $isAllotment
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $passengers
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData $payment
     * @param string $recordLocator
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $segments
     * @param string $source
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestWeb $web
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null, $cancelOnlyIfNotTicketed = null, $carrierCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestCharter $charter = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestConfiguration $configuration = null, $customerLastName = null, $isAllotment = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $passengers = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData $payment = null, $recordLocator = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $segments = null, $source = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestWeb $web = null)
    {
        $this
            ->setCRSConfig($cRSConfig)
            ->setCancelOnlyIfNotTicketed($cancelOnlyIfNotTicketed)
            ->setCarrierCode($carrierCode)
            ->setCharter($charter)
            ->setConfiguration($configuration)
            ->setCustomerLastName($customerLastName)
            ->setIsAllotment($isAllotment)
            ->setPassengers($passengers)
            ->setPayment($payment)
            ->setRecordLocator($recordLocator)
            ->setSegments($segments)
            ->setSource($source)
            ->setWeb($web);
    }
    /**
     * Get CRSConfig value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS|null
     */
    public function getCRSConfig()
    {
        return $this->CRSConfig;
    }
    /**
     * Set CRSConfig value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestData
     */
    public function setCRSConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null)
    {
        $this->CRSConfig = $cRSConfig;
        return $this;
    }
    /**
     * Get CancelOnlyIfNotTicketed value
     * @return bool|null
     */
    public function getCancelOnlyIfNotTicketed()
    {
        return $this->CancelOnlyIfNotTicketed;
    }
    /**
     * Set CancelOnlyIfNotTicketed value
     * @param bool $cancelOnlyIfNotTicketed
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestData
     */
    public function setCancelOnlyIfNotTicketed($cancelOnlyIfNotTicketed = null)
    {
        // validation for constraint: boolean
        if (!is_null($cancelOnlyIfNotTicketed) && !is_bool($cancelOnlyIfNotTicketed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cancelOnlyIfNotTicketed)), __LINE__);
        }
        $this->CancelOnlyIfNotTicketed = $cancelOnlyIfNotTicketed;
        return $this;
    }
    /**
     * Get CarrierCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCarrierCode()
    {
        return isset($this->CarrierCode) ? $this->CarrierCode : null;
    }
    /**
     * Set CarrierCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $carrierCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestData
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierCode)), __LINE__);
        }
        if (is_null($carrierCode) || (is_array($carrierCode) && empty($carrierCode))) {
            unset($this->CarrierCode);
        } else {
            $this->CarrierCode = $carrierCode;
        }
        return $this;
    }
    /**
     * Get Charter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestCharter|null
     */
    public function getCharter()
    {
        return isset($this->Charter) ? $this->Charter : null;
    }
    /**
     * Set Charter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestCharter $charter
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestData
     */
    public function setCharter(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestCharter $charter = null)
    {
        if (is_null($charter) || (is_array($charter) && empty($charter))) {
            unset($this->Charter);
        } else {
            $this->Charter = $charter;
        }
        return $this;
    }
    /**
     * Get Configuration value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestConfiguration|null
     */
    public function getConfiguration()
    {
        return isset($this->Configuration) ? $this->Configuration : null;
    }
    /**
     * Set Configuration value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestConfiguration $configuration
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestData
     */
    public function setConfiguration(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestConfiguration $configuration = null)
    {
        if (is_null($configuration) || (is_array($configuration) && empty($configuration))) {
            unset($this->Configuration);
        } else {
            $this->Configuration = $configuration;
        }
        return $this;
    }
    /**
     * Get CustomerLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerLastName()
    {
        return isset($this->CustomerLastName) ? $this->CustomerLastName : null;
    }
    /**
     * Set CustomerLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerLastName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestData
     */
    public function setCustomerLastName($customerLastName = null)
    {
        // validation for constraint: string
        if (!is_null($customerLastName) && !is_string($customerLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerLastName)), __LINE__);
        }
        if (is_null($customerLastName) || (is_array($customerLastName) && empty($customerLastName))) {
            unset($this->CustomerLastName);
        } else {
            $this->CustomerLastName = $customerLastName;
        }
        return $this;
    }
    /**
     * Get IsAllotment value
     * @return bool|null
     */
    public function getIsAllotment()
    {
        return $this->IsAllotment;
    }
    /**
     * Set IsAllotment value
     * @param bool $isAllotment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestData
     */
    public function setIsAllotment($isAllotment = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAllotment) && !is_bool($isAllotment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAllotment)), __LINE__);
        }
        $this->IsAllotment = $isAllotment;
        return $this;
    }
    /**
     * Get Passengers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint|null
     */
    public function getPassengers()
    {
        return isset($this->Passengers) ? $this->Passengers : null;
    }
    /**
     * Set Passengers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $passengers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestData
     */
    public function setPassengers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $passengers = null)
    {
        if (is_null($passengers) || (is_array($passengers) && empty($passengers))) {
            unset($this->Passengers);
        } else {
            $this->Passengers = $passengers;
        }
        return $this;
    }
    /**
     * Get Payment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData|null
     */
    public function getPayment()
    {
        return isset($this->Payment) ? $this->Payment : null;
    }
    /**
     * Set Payment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData $payment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestData
     */
    public function setPayment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestPaymentData $payment = null)
    {
        if (is_null($payment) || (is_array($payment) && empty($payment))) {
            unset($this->Payment);
        } else {
            $this->Payment = $payment;
        }
        return $this;
    }
    /**
     * Get RecordLocator value
     * @return string|null
     */
    public function getRecordLocator()
    {
        return $this->RecordLocator;
    }
    /**
     * Set RecordLocator value
     * @param string $recordLocator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestData
     */
    public function setRecordLocator($recordLocator = null)
    {
        // validation for constraint: string
        if (!is_null($recordLocator) && !is_string($recordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordLocator)), __LINE__);
        }
        $this->RecordLocator = $recordLocator;
        return $this;
    }
    /**
     * Get Segments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint|null
     */
    public function getSegments()
    {
        return isset($this->Segments) ? $this->Segments : null;
    }
    /**
     * Set Segments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $segments
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestData
     */
    public function setSegments(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $segments = null)
    {
        if (is_null($segments) || (is_array($segments) && empty($segments))) {
            unset($this->Segments);
        } else {
            $this->Segments = $segments;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestData
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
     * Get Web value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestWeb|null
     */
    public function getWeb()
    {
        return isset($this->Web) ? $this->Web : null;
    }
    /**
     * Set Web value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestWeb $web
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestData
     */
    public function setWeb(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestWeb $web = null)
    {
        if (is_null($web) || (is_array($web) && empty($web))) {
            unset($this->Web);
        } else {
            $this->Web = $web;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelRequestData
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
