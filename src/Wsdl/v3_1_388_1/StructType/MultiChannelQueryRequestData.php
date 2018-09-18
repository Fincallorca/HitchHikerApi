<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiChannelQueryRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MultiChannelQueryRequestData
 * @subpackage Structs
 */
class MultiChannelQueryRequestData extends AbstractStructBase
{
    /**
     * The CabinClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CabinClass;
    /**
     * The Carriers
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Carriers;
    /**
     * The Destinations
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Destinations;
    /**
     * The FlightType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FlightType;
    /**
     * The Origins
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Origins;
    /**
     * The PassengerType
     * @var string
     */
    public $PassengerType;
    /**
     * Constructor method for MultiChannelQueryRequestData
     * @uses MultiChannelQueryRequestData::setCabinClass()
     * @uses MultiChannelQueryRequestData::setCarriers()
     * @uses MultiChannelQueryRequestData::setDestinations()
     * @uses MultiChannelQueryRequestData::setFlightType()
     * @uses MultiChannelQueryRequestData::setOrigins()
     * @uses MultiChannelQueryRequestData::setPassengerType()
     * @param string $cabinClass
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carriers
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $destinations
     * @param string $flightType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $origins
     * @param string $passengerType
     */
    public function __construct($cabinClass = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carriers = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $destinations = null, $flightType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $origins = null, $passengerType = null)
    {
        $this
            ->setCabinClass($cabinClass)
            ->setCarriers($carriers)
            ->setDestinations($destinations)
            ->setFlightType($flightType)
            ->setOrigins($origins)
            ->setPassengerType($passengerType);
    }
    /**
     * Get CabinClass value
     * @return string|null
     */
    public function getCabinClass()
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cabinClass
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MultiChannelQueryRequestData
     */
    public function setCabinClass($cabinClass = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid($cabinClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cabinClass, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues())), __LINE__);
        }
        $this->CabinClass = $cabinClass;
        return $this;
    }
    /**
     * Get Carriers value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getCarriers()
    {
        return $this->Carriers;
    }
    /**
     * Set Carriers value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carriers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MultiChannelQueryRequestData
     */
    public function setCarriers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carriers = null)
    {
        $this->Carriers = $carriers;
        return $this;
    }
    /**
     * Get Destinations value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getDestinations()
    {
        return $this->Destinations;
    }
    /**
     * Set Destinations value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $destinations
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MultiChannelQueryRequestData
     */
    public function setDestinations(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $destinations = null)
    {
        $this->Destinations = $destinations;
        return $this;
    }
    /**
     * Get FlightType value
     * @return string|null
     */
    public function getFlightType()
    {
        return $this->FlightType;
    }
    /**
     * Set FlightType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $flightType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MultiChannelQueryRequestData
     */
    public function setFlightType($flightType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightTypeEnum::valueIsValid($flightType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $flightType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightTypeEnum::getValidValues())), __LINE__);
        }
        $this->FlightType = $flightType;
        return $this;
    }
    /**
     * Get Origins value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getOrigins()
    {
        return $this->Origins;
    }
    /**
     * Set Origins value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $origins
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MultiChannelQueryRequestData
     */
    public function setOrigins(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $origins = null)
    {
        $this->Origins = $origins;
        return $this;
    }
    /**
     * Get PassengerType value
     * @return string|null
     */
    public function getPassengerType()
    {
        return $this->PassengerType;
    }
    /**
     * Set PassengerType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $passengerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MultiChannelQueryRequestData
     */
    public function setPassengerType($passengerType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($passengerType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $passengerType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
        }
        $this->PassengerType = $passengerType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MultiChannelQueryRequestData
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
