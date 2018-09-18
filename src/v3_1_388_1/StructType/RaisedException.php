<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RaisedException StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RaisedException
 * @subpackage Structs
 */
class RaisedException extends AbstractStructBase
{
    /**
     * The CRSProfile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public $CRSProfile;
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
     * The ExtendedTransactionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ExtendedTransactionID;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Source;
    /**
     * The SourceIP
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SourceIP;
    /**
     * Constructor method for RaisedException
     * @uses RaisedException::setCRSProfile()
     * @uses RaisedException::setExceptionCode()
     * @uses RaisedException::setExceptionText()
     * @uses RaisedException::setExtendedTransactionID()
     * @uses RaisedException::setSource()
     * @uses RaisedException::setSourceIP()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSProfile
     * @param string $exceptionCode
     * @param string $exceptionText
     * @param string $extendedTransactionID
     * @param string $source
     * @param string $sourceIP
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSProfile = null, $exceptionCode = null, $exceptionText = null, $extendedTransactionID = null, $source = null, $sourceIP = null)
    {
        $this
            ->setCRSProfile($cRSProfile)
            ->setExceptionCode($exceptionCode)
            ->setExceptionText($exceptionText)
            ->setExtendedTransactionID($extendedTransactionID)
            ->setSource($source)
            ->setSourceIP($sourceIP);
    }
    /**
     * Get CRSProfile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS|null
     */
    public function getCRSProfile()
    {
        return isset($this->CRSProfile) ? $this->CRSProfile : null;
    }
    /**
     * Set CRSProfile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSProfile
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException
     */
    public function setCRSProfile(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSProfile = null)
    {
        if (is_null($cRSProfile) || (is_array($cRSProfile) && empty($cRSProfile))) {
            unset($this->CRSProfile);
        } else {
            $this->CRSProfile = $cRSProfile;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException
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
     * Get ExtendedTransactionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExtendedTransactionID()
    {
        return isset($this->ExtendedTransactionID) ? $this->ExtendedTransactionID : null;
    }
    /**
     * Set ExtendedTransactionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $extendedTransactionID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException
     */
    public function setExtendedTransactionID($extendedTransactionID = null)
    {
        // validation for constraint: string
        if (!is_null($extendedTransactionID) && !is_string($extendedTransactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extendedTransactionID)), __LINE__);
        }
        if (is_null($extendedTransactionID) || (is_array($extendedTransactionID) && empty($extendedTransactionID))) {
            unset($this->ExtendedTransactionID);
        } else {
            $this->ExtendedTransactionID = $extendedTransactionID;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException
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
     * Get SourceIP value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSourceIP()
    {
        return isset($this->SourceIP) ? $this->SourceIP : null;
    }
    /**
     * Set SourceIP value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sourceIP
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException
     */
    public function setSourceIP($sourceIP = null)
    {
        // validation for constraint: string
        if (!is_null($sourceIP) && !is_string($sourceIP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceIP)), __LINE__);
        }
        if (is_null($sourceIP) || (is_array($sourceIP) && empty($sourceIP))) {
            unset($this->SourceIP);
        } else {
            $this->SourceIP = $sourceIP;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException
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
