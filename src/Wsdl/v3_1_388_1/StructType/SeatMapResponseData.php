<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatMapResponseData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SeatMapResponseData
 * @subpackage Structs
 */
class SeatMapResponseData extends AbstractStructBase
{
    /**
     * The Exceptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapExceptionData
     */
    public $Exceptions;
    /**
     * The ResponseInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails
     */
    public $ResponseInfo;
    /**
     * The SeatMaps
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapData
     */
    public $SeatMaps;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Source;
    /**
     * Constructor method for SeatMapResponseData
     * @uses SeatMapResponseData::setExceptions()
     * @uses SeatMapResponseData::setResponseInfo()
     * @uses SeatMapResponseData::setSeatMaps()
     * @uses SeatMapResponseData::setSource()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapExceptionData $exceptions
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapData $seatMaps
     * @param string $source
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapExceptionData $exceptions = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapData $seatMaps = null, $source = null)
    {
        $this
            ->setExceptions($exceptions)
            ->setResponseInfo($responseInfo)
            ->setSeatMaps($seatMaps)
            ->setSource($source);
    }
    /**
     * Get Exceptions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapExceptionData|null
     */
    public function getExceptions()
    {
        return isset($this->Exceptions) ? $this->Exceptions : null;
    }
    /**
     * Set Exceptions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapExceptionData $exceptions
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapResponseData
     */
    public function setExceptions(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapExceptionData $exceptions = null)
    {
        if (is_null($exceptions) || (is_array($exceptions) && empty($exceptions))) {
            unset($this->Exceptions);
        } else {
            $this->Exceptions = $exceptions;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapResponseData
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
     * Get SeatMaps value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapData|null
     */
    public function getSeatMaps()
    {
        return isset($this->SeatMaps) ? $this->SeatMaps : null;
    }
    /**
     * Set SeatMaps value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapData $seatMaps
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapResponseData
     */
    public function setSeatMaps(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapData $seatMaps = null)
    {
        if (is_null($seatMaps) || (is_array($seatMaps) && empty($seatMaps))) {
            unset($this->SeatMaps);
        } else {
            $this->SeatMaps = $seatMaps;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapResponseData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapResponseData
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
