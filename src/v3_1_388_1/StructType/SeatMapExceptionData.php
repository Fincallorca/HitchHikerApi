<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatMapExceptionData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SeatMapExceptionData
 * @subpackage Structs
 */
class SeatMapExceptionData extends AbstractStructBase
{
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
     * The FlightSegment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData
     */
    public $FlightSegment;
    /**
     * The SourceException
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SourceException;
    /**
     * Constructor method for SeatMapExceptionData
     * @uses SeatMapExceptionData::setExceptionCode()
     * @uses SeatMapExceptionData::setExceptionText()
     * @uses SeatMapExceptionData::setFlightSegment()
     * @uses SeatMapExceptionData::setSourceException()
     * @param string $exceptionCode
     * @param string $exceptionText
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData $flightSegment
     * @param string $sourceException
     */
    public function __construct($exceptionCode = null, $exceptionText = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData $flightSegment = null, $sourceException = null)
    {
        $this
            ->setExceptionCode($exceptionCode)
            ->setExceptionText($exceptionText)
            ->setFlightSegment($flightSegment)
            ->setSourceException($sourceException);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapExceptionData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapExceptionData
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
     * Get FlightSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData|null
     */
    public function getFlightSegment()
    {
        return isset($this->FlightSegment) ? $this->FlightSegment : null;
    }
    /**
     * Set FlightSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData $flightSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapExceptionData
     */
    public function setFlightSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData $flightSegment = null)
    {
        if (is_null($flightSegment) || (is_array($flightSegment) && empty($flightSegment))) {
            unset($this->FlightSegment);
        } else {
            $this->FlightSegment = $flightSegment;
        }
        return $this;
    }
    /**
     * Get SourceException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSourceException()
    {
        return isset($this->SourceException) ? $this->SourceException : null;
    }
    /**
     * Set SourceException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sourceException
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapExceptionData
     */
    public function setSourceException($sourceException = null)
    {
        // validation for constraint: string
        if (!is_null($sourceException) && !is_string($sourceException)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceException)), __LINE__);
        }
        if (is_null($sourceException) || (is_array($sourceException) && empty($sourceException))) {
            unset($this->SourceException);
        } else {
            $this->SourceException = $sourceException;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapExceptionData
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
