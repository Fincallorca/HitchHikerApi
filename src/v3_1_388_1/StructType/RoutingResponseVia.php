<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoutingResponseVia StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RoutingResponseVia
 * @subpackage Structs
 */
class RoutingResponseVia extends AbstractStructBase
{
    /**
     * The Direction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Direction;
    /**
     * The IsDirectFlight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDirectFlight;
    /**
     * The Locations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation
     */
    public $Locations;
    /**
     * Constructor method for RoutingResponseVia
     * @uses RoutingResponseVia::setDirection()
     * @uses RoutingResponseVia::setIsDirectFlight()
     * @uses RoutingResponseVia::setLocations()
     * @param string $direction
     * @param bool $isDirectFlight
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation $locations
     */
    public function __construct($direction = null, $isDirectFlight = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation $locations = null)
    {
        $this
            ->setDirection($direction)
            ->setIsDirectFlight($isDirectFlight)
            ->setLocations($locations);
    }
    /**
     * Get Direction value
     * @return string|null
     */
    public function getDirection()
    {
        return $this->Direction;
    }
    /**
     * Set Direction value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DirectionEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DirectionEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $direction
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia
     */
    public function setDirection($direction = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DirectionEnum::valueIsValid($direction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $direction, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DirectionEnum::getValidValues())), __LINE__);
        }
        $this->Direction = $direction;
        return $this;
    }
    /**
     * Get IsDirectFlight value
     * @return bool|null
     */
    public function getIsDirectFlight()
    {
        return $this->IsDirectFlight;
    }
    /**
     * Set IsDirectFlight value
     * @param bool $isDirectFlight
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia
     */
    public function setIsDirectFlight($isDirectFlight = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDirectFlight) && !is_bool($isDirectFlight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDirectFlight)), __LINE__);
        }
        $this->IsDirectFlight = $isDirectFlight;
        return $this;
    }
    /**
     * Get Locations value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation|null
     */
    public function getLocations()
    {
        return isset($this->Locations) ? $this->Locations : null;
    }
    /**
     * Set Locations value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation $locations
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia
     */
    public function setLocations(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseLocation $locations = null)
    {
        if (is_null($locations) || (is_array($locations) && empty($locations))) {
            unset($this->Locations);
        } else {
            $this->Locations = $locations;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseVia
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
