<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeFlightRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ChangeFlightRequestData
 * @subpackage Structs
 */
class ChangeFlightRequestData extends AbstractStructBase
{
    /**
     * The AcceptSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AcceptSurcharge;
    /**
     * The Configuration
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightConfiguration
     */
    public $Configuration;
    /**
     * The MarketingCarrierCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $MarketingCarrierCode;
    /**
     * The Recordlocator
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Recordlocator;
    /**
     * The Recordset
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Recordset;
    /**
     * The Segments
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfChangeFlightSegment
     */
    public $Segments;
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * The SurchargeLevel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSurcharge
     */
    public $SurchargeLevel;
    /**
     * Constructor method for ChangeFlightRequestData
     * @uses ChangeFlightRequestData::setAcceptSurcharge()
     * @uses ChangeFlightRequestData::setConfiguration()
     * @uses ChangeFlightRequestData::setMarketingCarrierCode()
     * @uses ChangeFlightRequestData::setRecordlocator()
     * @uses ChangeFlightRequestData::setRecordset()
     * @uses ChangeFlightRequestData::setSegments()
     * @uses ChangeFlightRequestData::setSource()
     * @uses ChangeFlightRequestData::setSurchargeLevel()
     * @param string $acceptSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightConfiguration $configuration
     * @param string $marketingCarrierCode
     * @param string $recordlocator
     * @param string $recordset
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfChangeFlightSegment $segments
     * @param string $source
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSurcharge $surchargeLevel
     */
    public function __construct($acceptSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightConfiguration $configuration = null, $marketingCarrierCode = null, $recordlocator = null, $recordset = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfChangeFlightSegment $segments = null, $source = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSurcharge $surchargeLevel = null)
    {
        $this
            ->setAcceptSurcharge($acceptSurcharge)
            ->setConfiguration($configuration)
            ->setMarketingCarrierCode($marketingCarrierCode)
            ->setRecordlocator($recordlocator)
            ->setRecordset($recordset)
            ->setSegments($segments)
            ->setSource($source)
            ->setSurchargeLevel($surchargeLevel);
    }
    /**
     * Get AcceptSurcharge value
     * @return string|null
     */
    public function getAcceptSurcharge()
    {
        return $this->AcceptSurcharge;
    }
    /**
     * Set AcceptSurcharge value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AcceptSurchargeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AcceptSurchargeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $acceptSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightRequestData
     */
    public function setAcceptSurcharge($acceptSurcharge = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AcceptSurchargeEnum::valueIsValid($acceptSurcharge)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $acceptSurcharge, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AcceptSurchargeEnum::getValidValues())), __LINE__);
        }
        $this->AcceptSurcharge = $acceptSurcharge;
        return $this;
    }
    /**
     * Get Configuration value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightConfiguration|null
     */
    public function getConfiguration()
    {
        return $this->Configuration;
    }
    /**
     * Set Configuration value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightConfiguration $configuration
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightRequestData
     */
    public function setConfiguration(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightConfiguration $configuration = null)
    {
        $this->Configuration = $configuration;
        return $this;
    }
    /**
     * Get MarketingCarrierCode value
     * @return string|null
     */
    public function getMarketingCarrierCode()
    {
        return $this->MarketingCarrierCode;
    }
    /**
     * Set MarketingCarrierCode value
     * @param string $marketingCarrierCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightRequestData
     */
    public function setMarketingCarrierCode($marketingCarrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($marketingCarrierCode) && !is_string($marketingCarrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($marketingCarrierCode)), __LINE__);
        }
        $this->MarketingCarrierCode = $marketingCarrierCode;
        return $this;
    }
    /**
     * Get Recordlocator value
     * @return string|null
     */
    public function getRecordlocator()
    {
        return $this->Recordlocator;
    }
    /**
     * Set Recordlocator value
     * @param string $recordlocator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightRequestData
     */
    public function setRecordlocator($recordlocator = null)
    {
        // validation for constraint: string
        if (!is_null($recordlocator) && !is_string($recordlocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordlocator)), __LINE__);
        }
        $this->Recordlocator = $recordlocator;
        return $this;
    }
    /**
     * Get Recordset value
     * @return string|null
     */
    public function getRecordset()
    {
        return $this->Recordset;
    }
    /**
     * Set Recordset value
     * @param string $recordset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightRequestData
     */
    public function setRecordset($recordset = null)
    {
        // validation for constraint: string
        if (!is_null($recordset) && !is_string($recordset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordset)), __LINE__);
        }
        $this->Recordset = $recordset;
        return $this;
    }
    /**
     * Get Segments value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfChangeFlightSegment|null
     */
    public function getSegments()
    {
        return $this->Segments;
    }
    /**
     * Set Segments value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfChangeFlightSegment $segments
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightRequestData
     */
    public function setSegments(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfChangeFlightSegment $segments = null)
    {
        $this->Segments = $segments;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightRequestData
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
     * Get SurchargeLevel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSurcharge|null
     */
    public function getSurchargeLevel()
    {
        return isset($this->SurchargeLevel) ? $this->SurchargeLevel : null;
    }
    /**
     * Set SurchargeLevel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSurcharge $surchargeLevel
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightRequestData
     */
    public function setSurchargeLevel(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSurcharge $surchargeLevel = null)
    {
        if (is_null($surchargeLevel) || (is_array($surchargeLevel) && empty($surchargeLevel))) {
            unset($this->SurchargeLevel);
        } else {
            $this->SurchargeLevel = $surchargeLevel;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightRequestData
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
