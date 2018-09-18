<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxesAndFeesResponseData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TaxesAndFeesResponseData
 * @subpackage Structs
 */
class TaxesAndFeesResponseData extends AbstractStructBase
{
    /**
     * The ModuleInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData
     */
    public $ModuleInfo;
    /**
     * The PassengerTaxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxResponsePassenger
     */
    public $PassengerTaxes;
    /**
     * The PaymentDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod
     */
    public $PaymentDetails;
    /**
     * The ResponseInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails
     */
    public $ResponseInfo;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Source;
    /**
     * The TouroperatorCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TouroperatorCode;
    /**
     * Constructor method for TaxesAndFeesResponseData
     * @uses TaxesAndFeesResponseData::setModuleInfo()
     * @uses TaxesAndFeesResponseData::setPassengerTaxes()
     * @uses TaxesAndFeesResponseData::setPaymentDetails()
     * @uses TaxesAndFeesResponseData::setResponseInfo()
     * @uses TaxesAndFeesResponseData::setSource()
     * @uses TaxesAndFeesResponseData::setTouroperatorCode()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxResponsePassenger $passengerTaxes
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod $paymentDetails
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo
     * @param string $source
     * @param string $touroperatorCode
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxResponsePassenger $passengerTaxes = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod $paymentDetails = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo = null, $source = null, $touroperatorCode = null)
    {
        $this
            ->setModuleInfo($moduleInfo)
            ->setPassengerTaxes($passengerTaxes)
            ->setPaymentDetails($paymentDetails)
            ->setResponseInfo($responseInfo)
            ->setSource($source)
            ->setTouroperatorCode($touroperatorCode);
    }
    /**
     * Get ModuleInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData|null
     */
    public function getModuleInfo()
    {
        return isset($this->ModuleInfo) ? $this->ModuleInfo : null;
    }
    /**
     * Set ModuleInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesResponseData
     */
    public function setModuleInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo = null)
    {
        if (is_null($moduleInfo) || (is_array($moduleInfo) && empty($moduleInfo))) {
            unset($this->ModuleInfo);
        } else {
            $this->ModuleInfo = $moduleInfo;
        }
        return $this;
    }
    /**
     * Get PassengerTaxes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxResponsePassenger|null
     */
    public function getPassengerTaxes()
    {
        return isset($this->PassengerTaxes) ? $this->PassengerTaxes : null;
    }
    /**
     * Set PassengerTaxes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxResponsePassenger $passengerTaxes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesResponseData
     */
    public function setPassengerTaxes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxResponsePassenger $passengerTaxes = null)
    {
        if (is_null($passengerTaxes) || (is_array($passengerTaxes) && empty($passengerTaxes))) {
            unset($this->PassengerTaxes);
        } else {
            $this->PassengerTaxes = $passengerTaxes;
        }
        return $this;
    }
    /**
     * Get PaymentDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod|null
     */
    public function getPaymentDetails()
    {
        return isset($this->PaymentDetails) ? $this->PaymentDetails : null;
    }
    /**
     * Set PaymentDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod $paymentDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesResponseData
     */
    public function setPaymentDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod $paymentDetails = null)
    {
        if (is_null($paymentDetails) || (is_array($paymentDetails) && empty($paymentDetails))) {
            unset($this->PaymentDetails);
        } else {
            $this->PaymentDetails = $paymentDetails;
        }
        return $this;
    }
    /**
     * Get ResponseInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails|null
     */
    public function getResponseInfo()
    {
        return isset($this->ResponseInfo) ? $this->ResponseInfo : null;
    }
    /**
     * Set ResponseInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesResponseData
     */
    public function setResponseInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo = null)
    {
        if (is_null($responseInfo) || (is_array($responseInfo) && empty($responseInfo))) {
            unset($this->ResponseInfo);
        } else {
            $this->ResponseInfo = $responseInfo;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesResponseData
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
     * Get TouroperatorCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTouroperatorCode()
    {
        return isset($this->TouroperatorCode) ? $this->TouroperatorCode : null;
    }
    /**
     * Set TouroperatorCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $touroperatorCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesResponseData
     */
    public function setTouroperatorCode($touroperatorCode = null)
    {
        // validation for constraint: string
        if (!is_null($touroperatorCode) && !is_string($touroperatorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($touroperatorCode)), __LINE__);
        }
        if (is_null($touroperatorCode) || (is_array($touroperatorCode) && empty($touroperatorCode))) {
            unset($this->TouroperatorCode);
        } else {
            $this->TouroperatorCode = $touroperatorCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesResponseData
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
