<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuerySearchCriteriaData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QuerySearchCriteriaData
 * @subpackage Structs
 */
class QuerySearchCriteriaData extends AbstractStructBase
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
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Carriers;
    /**
     * The Destinations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Destinations;
    /**
     * The Domestic
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Domestic;
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
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Origins;
    /**
     * The PassengerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerType;
    /**
     * Constructor method for QuerySearchCriteriaData
     * @uses QuerySearchCriteriaData::setCabinClass()
     * @uses QuerySearchCriteriaData::setCarriers()
     * @uses QuerySearchCriteriaData::setDestinations()
     * @uses QuerySearchCriteriaData::setDomestic()
     * @uses QuerySearchCriteriaData::setFlightType()
     * @uses QuerySearchCriteriaData::setOrigins()
     * @uses QuerySearchCriteriaData::setPassengerType()
     * @param string $cabinClass
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carriers
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $destinations
     * @param bool $domestic
     * @param string $flightType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $origins
     * @param string $passengerType
     */
    public function __construct($cabinClass = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carriers = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $destinations = null, $domestic = null, $flightType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $origins = null, $passengerType = null)
    {
        $this
            ->setCabinClass($cabinClass)
            ->setCarriers($carriers)
            ->setDestinations($destinations)
            ->setDomestic($domestic)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuerySearchCriteriaData
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getCarriers()
    {
        return isset($this->Carriers) ? $this->Carriers : null;
    }
    /**
     * Set Carriers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carriers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuerySearchCriteriaData
     */
    public function setCarriers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carriers = null)
    {
        if (is_null($carriers) || (is_array($carriers) && empty($carriers))) {
            unset($this->Carriers);
        } else {
            $this->Carriers = $carriers;
        }
        return $this;
    }
    /**
     * Get Destinations value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getDestinations()
    {
        return isset($this->Destinations) ? $this->Destinations : null;
    }
    /**
     * Set Destinations value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $destinations
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuerySearchCriteriaData
     */
    public function setDestinations(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $destinations = null)
    {
        if (is_null($destinations) || (is_array($destinations) && empty($destinations))) {
            unset($this->Destinations);
        } else {
            $this->Destinations = $destinations;
        }
        return $this;
    }
    /**
     * Get Domestic value
     * @return bool|null
     */
    public function getDomestic()
    {
        return $this->Domestic;
    }
    /**
     * Set Domestic value
     * @param bool $domestic
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuerySearchCriteriaData
     */
    public function setDomestic($domestic = null)
    {
        // validation for constraint: boolean
        if (!is_null($domestic) && !is_bool($domestic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($domestic)), __LINE__);
        }
        $this->Domestic = $domestic;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuerySearchCriteriaData
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getOrigins()
    {
        return isset($this->Origins) ? $this->Origins : null;
    }
    /**
     * Set Origins value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $origins
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuerySearchCriteriaData
     */
    public function setOrigins(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $origins = null)
    {
        if (is_null($origins) || (is_array($origins) && empty($origins))) {
            unset($this->Origins);
        } else {
            $this->Origins = $origins;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuerySearchCriteriaData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuerySearchCriteriaData
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
