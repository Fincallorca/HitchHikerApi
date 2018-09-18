<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatMapFrequentFlyerData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SeatMapFrequentFlyerData
 * @subpackage Structs
 */
class SeatMapFrequentFlyerData extends AbstractStructBase
{
    /**
     * The Airline
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Airline;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FirstName;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ID;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * Constructor method for SeatMapFrequentFlyerData
     * @uses SeatMapFrequentFlyerData::setAirline()
     * @uses SeatMapFrequentFlyerData::setFirstName()
     * @uses SeatMapFrequentFlyerData::setID()
     * @uses SeatMapFrequentFlyerData::setName()
     * @param string $airline
     * @param string $firstName
     * @param string $iD
     * @param string $name
     */
    public function __construct($airline = null, $firstName = null, $iD = null, $name = null)
    {
        $this
            ->setAirline($airline)
            ->setFirstName($firstName)
            ->setID($iD)
            ->setName($name);
    }
    /**
     * Get Airline value
     * @return string|null
     */
    public function getAirline()
    {
        return $this->Airline;
    }
    /**
     * Set Airline value
     * @param string $airline
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData
     */
    public function setAirline($airline = null)
    {
        // validation for constraint: string
        if (!is_null($airline) && !is_string($airline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airline)), __LINE__);
        }
        $this->Airline = $airline;
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapFrequentFlyerData
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
