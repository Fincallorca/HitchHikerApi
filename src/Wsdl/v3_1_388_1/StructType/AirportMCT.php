<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirportMCT StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AirportMCT
 * @subpackage Structs
 */
class AirportMCT extends AbstractStructBase
{
    /**
     * The AirportCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $AirportCode;
    /**
     * The MCT
     * @var int
     */
    public $MCT;
    /**
     * Constructor method for AirportMCT
     * @uses AirportMCT::setAirportCode()
     * @uses AirportMCT::setMCT()
     * @param string $airportCode
     * @param int $mCT
     */
    public function __construct($airportCode = null, $mCT = null)
    {
        $this
            ->setAirportCode($airportCode)
            ->setMCT($mCT);
    }
    /**
     * Get AirportCode value
     * @return string|null
     */
    public function getAirportCode()
    {
        return $this->AirportCode;
    }
    /**
     * Set AirportCode value
     * @param string $airportCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT
     */
    public function setAirportCode($airportCode = null)
    {
        // validation for constraint: string
        if (!is_null($airportCode) && !is_string($airportCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airportCode)), __LINE__);
        }
        $this->AirportCode = $airportCode;
        return $this;
    }
    /**
     * Get MCT value
     * @return int|null
     */
    public function getMCT()
    {
        return $this->MCT;
    }
    /**
     * Set MCT value
     * @param int $mCT
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT
     */
    public function setMCT($mCT = null)
    {
        // validation for constraint: int
        if (!is_null($mCT) && !is_numeric($mCT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($mCT)), __LINE__);
        }
        $this->MCT = $mCT;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT
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
