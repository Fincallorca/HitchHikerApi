<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayRequestData
 * @subpackage Structs
 */
class DisplayRequestData extends AbstractStructBase
{
    /**
     * The Carriers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestCarrier
     */
    public $Carriers;
    /**
     * The Configuration
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConfiguration
     */
    public $Configuration;
    /**
     * The Fare
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestFare
     */
    public $Fare;
    /**
     * The Legs
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestLeg
     */
    public $Legs;
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestPassenger
     */
    public $Passengers;
    /**
     * Constructor method for DisplayRequestData
     * @uses DisplayRequestData::setCarriers()
     * @uses DisplayRequestData::setConfiguration()
     * @uses DisplayRequestData::setFare()
     * @uses DisplayRequestData::setLegs()
     * @uses DisplayRequestData::setPassengers()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestCarrier $carriers
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConfiguration $configuration
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestFare $fare
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestLeg $legs
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestPassenger $passengers
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestCarrier $carriers = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConfiguration $configuration = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestFare $fare = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestLeg $legs = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestPassenger $passengers = null)
    {
        $this
            ->setCarriers($carriers)
            ->setConfiguration($configuration)
            ->setFare($fare)
            ->setLegs($legs)
            ->setPassengers($passengers);
    }
    /**
     * Get Carriers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestCarrier|null
     */
    public function getCarriers()
    {
        return isset($this->Carriers) ? $this->Carriers : null;
    }
    /**
     * Set Carriers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestCarrier $carriers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestData
     */
    public function setCarriers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestCarrier $carriers = null)
    {
        if (is_null($carriers) || (is_array($carriers) && empty($carriers))) {
            unset($this->Carriers);
        } else {
            $this->Carriers = $carriers;
        }
        return $this;
    }
    /**
     * Get Configuration value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConfiguration|null
     */
    public function getConfiguration()
    {
        return $this->Configuration;
    }
    /**
     * Set Configuration value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConfiguration $configuration
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestData
     */
    public function setConfiguration(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConfiguration $configuration = null)
    {
        $this->Configuration = $configuration;
        return $this;
    }
    /**
     * Get Fare value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestFare|null
     */
    public function getFare()
    {
        return $this->Fare;
    }
    /**
     * Set Fare value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestFare $fare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestData
     */
    public function setFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestFare $fare = null)
    {
        $this->Fare = $fare;
        return $this;
    }
    /**
     * Get Legs value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestLeg|null
     */
    public function getLegs()
    {
        return $this->Legs;
    }
    /**
     * Set Legs value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestLeg $legs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestData
     */
    public function setLegs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestLeg $legs = null)
    {
        $this->Legs = $legs;
        return $this;
    }
    /**
     * Get Passengers value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestPassenger|null
     */
    public function getPassengers()
    {
        return $this->Passengers;
    }
    /**
     * Set Passengers value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestPassenger $passengers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestData
     */
    public function setPassengers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestPassenger $passengers = null)
    {
        $this->Passengers = $passengers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestData
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
