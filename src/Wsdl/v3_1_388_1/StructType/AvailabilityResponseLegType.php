<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailabilityResponseLegType StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AvailabilityResponseLegType
 * @subpackage Structs
 */
class AvailabilityResponseLegType extends AbstractStructBase
{
    /**
     * The Airline
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Airline;
    /**
     * The AlternativeType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseAlternativeType
     */
    public $AlternativeType;
    /**
     * The Direction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Direction;
    /**
     * Constructor method for AvailabilityResponseLegType
     * @uses AvailabilityResponseLegType::setAirline()
     * @uses AvailabilityResponseLegType::setAlternativeType()
     * @uses AvailabilityResponseLegType::setDirection()
     * @param string $airline
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseAlternativeType $alternativeType
     * @param string $direction
     */
    public function __construct($airline = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseAlternativeType $alternativeType = null, $direction = null)
    {
        $this
            ->setAirline($airline)
            ->setAlternativeType($alternativeType)
            ->setDirection($direction);
    }
    /**
     * Get Airline value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAirline()
    {
        return isset($this->Airline) ? $this->Airline : null;
    }
    /**
     * Set Airline value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $airline
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType
     */
    public function setAirline($airline = null)
    {
        // validation for constraint: string
        if (!is_null($airline) && !is_string($airline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airline)), __LINE__);
        }
        if (is_null($airline) || (is_array($airline) && empty($airline))) {
            unset($this->Airline);
        } else {
            $this->Airline = $airline;
        }
        return $this;
    }
    /**
     * Get AlternativeType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseAlternativeType|null
     */
    public function getAlternativeType()
    {
        return isset($this->AlternativeType) ? $this->AlternativeType : null;
    }
    /**
     * Set AlternativeType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseAlternativeType $alternativeType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType
     */
    public function setAlternativeType(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseAlternativeType $alternativeType = null)
    {
        if (is_null($alternativeType) || (is_array($alternativeType) && empty($alternativeType))) {
            unset($this->AlternativeType);
        } else {
            $this->AlternativeType = $alternativeType;
        }
        return $this;
    }
    /**
     * Get Direction value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDirection()
    {
        return isset($this->Direction) ? $this->Direction : null;
    }
    /**
     * Set Direction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $direction
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType
     */
    public function setDirection($direction = null)
    {
        // validation for constraint: string
        if (!is_null($direction) && !is_string($direction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($direction)), __LINE__);
        }
        if (is_null($direction) || (is_array($direction) && empty($direction))) {
            unset($this->Direction);
        } else {
            $this->Direction = $direction;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseLegType
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
