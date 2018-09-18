<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareResponseFlight StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareResponseFlight
 * @subpackage Structs
 */
class FareResponseFlight extends AbstractStructBase
{
    /**
     * The AvailableFlight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AvailableFlight;
    /**
     * The CharterSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CharterSource;
    /**
     * The Legs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseLeg
     */
    public $Legs;
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponsePassenger
     */
    public $Passengers;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $StatusCode;
    /**
     * The StatusText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StatusText;
    /**
     * The SupportedFunctions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SupportedFunctions;
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TourOperator;
    /**
     * Constructor method for FareResponseFlight
     * @uses FareResponseFlight::setAvailableFlight()
     * @uses FareResponseFlight::setCharterSource()
     * @uses FareResponseFlight::setLegs()
     * @uses FareResponseFlight::setPassengers()
     * @uses FareResponseFlight::setStatusCode()
     * @uses FareResponseFlight::setStatusText()
     * @uses FareResponseFlight::setSupportedFunctions()
     * @uses FareResponseFlight::setTourOperator()
     * @param bool $availableFlight
     * @param string $charterSource
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseLeg $legs
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponsePassenger $passengers
     * @param int $statusCode
     * @param string $statusText
     * @param string $supportedFunctions
     * @param string $tourOperator
     */
    public function __construct($availableFlight = null, $charterSource = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseLeg $legs = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponsePassenger $passengers = null, $statusCode = null, $statusText = null, $supportedFunctions = null, $tourOperator = null)
    {
        $this
            ->setAvailableFlight($availableFlight)
            ->setCharterSource($charterSource)
            ->setLegs($legs)
            ->setPassengers($passengers)
            ->setStatusCode($statusCode)
            ->setStatusText($statusText)
            ->setSupportedFunctions($supportedFunctions)
            ->setTourOperator($tourOperator);
    }
    /**
     * Get AvailableFlight value
     * @return bool|null
     */
    public function getAvailableFlight()
    {
        return $this->AvailableFlight;
    }
    /**
     * Set AvailableFlight value
     * @param bool $availableFlight
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFlight
     */
    public function setAvailableFlight($availableFlight = null)
    {
        // validation for constraint: boolean
        if (!is_null($availableFlight) && !is_bool($availableFlight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($availableFlight)), __LINE__);
        }
        $this->AvailableFlight = $availableFlight;
        return $this;
    }
    /**
     * Get CharterSource value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCharterSource()
    {
        return isset($this->CharterSource) ? $this->CharterSource : null;
    }
    /**
     * Set CharterSource value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $charterSource
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFlight
     */
    public function setCharterSource($charterSource = null)
    {
        // validation for constraint: string
        if (!is_null($charterSource) && !is_string($charterSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($charterSource)), __LINE__);
        }
        if (is_null($charterSource) || (is_array($charterSource) && empty($charterSource))) {
            unset($this->CharterSource);
        } else {
            $this->CharterSource = $charterSource;
        }
        return $this;
    }
    /**
     * Get Legs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseLeg|null
     */
    public function getLegs()
    {
        return isset($this->Legs) ? $this->Legs : null;
    }
    /**
     * Set Legs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseLeg $legs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFlight
     */
    public function setLegs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseLeg $legs = null)
    {
        if (is_null($legs) || (is_array($legs) && empty($legs))) {
            unset($this->Legs);
        } else {
            $this->Legs = $legs;
        }
        return $this;
    }
    /**
     * Get Passengers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponsePassenger|null
     */
    public function getPassengers()
    {
        return isset($this->Passengers) ? $this->Passengers : null;
    }
    /**
     * Set Passengers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponsePassenger $passengers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFlight
     */
    public function setPassengers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponsePassenger $passengers = null)
    {
        if (is_null($passengers) || (is_array($passengers) && empty($passengers))) {
            unset($this->Passengers);
        } else {
            $this->Passengers = $passengers;
        }
        return $this;
    }
    /**
     * Get StatusCode value
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param int $statusCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFlight
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: int
        if (!is_null($statusCode) && !is_numeric($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($statusCode)), __LINE__);
        }
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Get StatusText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatusText()
    {
        return isset($this->StatusText) ? $this->StatusText : null;
    }
    /**
     * Set StatusText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $statusText
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFlight
     */
    public function setStatusText($statusText = null)
    {
        // validation for constraint: string
        if (!is_null($statusText) && !is_string($statusText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusText)), __LINE__);
        }
        if (is_null($statusText) || (is_array($statusText) && empty($statusText))) {
            unset($this->StatusText);
        } else {
            $this->StatusText = $statusText;
        }
        return $this;
    }
    /**
     * Get SupportedFunctions value
     * @return string|null
     */
    public function getSupportedFunctions()
    {
        return $this->SupportedFunctions;
    }
    /**
     * Set SupportedFunctions value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SupportedFunctionsEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SupportedFunctionsEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $supportedFunctions
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFlight
     */
    public function setSupportedFunctions($supportedFunctions = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SupportedFunctionsEnum::valueIsValid($supportedFunctions)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $supportedFunctions, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SupportedFunctionsEnum::getValidValues())), __LINE__);
        }
        $this->SupportedFunctions = $supportedFunctions;
        return $this;
    }
    /**
     * Get TourOperator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTourOperator()
    {
        return isset($this->TourOperator) ? $this->TourOperator : null;
    }
    /**
     * Set TourOperator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tourOperator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFlight
     */
    public function setTourOperator($tourOperator = null)
    {
        // validation for constraint: string
        if (!is_null($tourOperator) && !is_string($tourOperator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tourOperator)), __LINE__);
        }
        if (is_null($tourOperator) || (is_array($tourOperator) && empty($tourOperator))) {
            unset($this->TourOperator);
        } else {
            $this->TourOperator = $tourOperator;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseFlight
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
