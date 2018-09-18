<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareComplexRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareComplexRequestData
 * @subpackage Structs
 */
class FareComplexRequestData extends AbstractStructBase
{
    /**
     * The Configurations
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexConfiguration
     */
    public $Configurations;
    /**
     * The Fares
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexFare
     */
    public $Fares;
    /**
     * The MCT
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MCTData
     */
    public $MCT;
    /**
     * The MaxTotalFares
     * @var int
     */
    public $MaxTotalFares;
    /**
     * The PassengerGroups
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexPassengeGroup
     */
    public $PassengerGroups;
    /**
     * The StartFareNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $StartFareNumber;
    /**
     * The TicketGroups
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexTicketGroup
     */
    public $TicketGroups;
    /**
     * Constructor method for FareComplexRequestData
     * @uses FareComplexRequestData::setConfigurations()
     * @uses FareComplexRequestData::setFares()
     * @uses FareComplexRequestData::setMCT()
     * @uses FareComplexRequestData::setMaxTotalFares()
     * @uses FareComplexRequestData::setPassengerGroups()
     * @uses FareComplexRequestData::setStartFareNumber()
     * @uses FareComplexRequestData::setTicketGroups()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexConfiguration $configurations
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexFare $fares
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MCTData $mCT
     * @param int $maxTotalFares
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexPassengeGroup $passengerGroups
     * @param int $startFareNumber
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexTicketGroup $ticketGroups
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexConfiguration $configurations = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexFare $fares = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MCTData $mCT = null, $maxTotalFares = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexPassengeGroup $passengerGroups = null, $startFareNumber = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexTicketGroup $ticketGroups = null)
    {
        $this
            ->setConfigurations($configurations)
            ->setFares($fares)
            ->setMCT($mCT)
            ->setMaxTotalFares($maxTotalFares)
            ->setPassengerGroups($passengerGroups)
            ->setStartFareNumber($startFareNumber)
            ->setTicketGroups($ticketGroups);
    }
    /**
     * Get Configurations value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexConfiguration|null
     */
    public function getConfigurations()
    {
        return $this->Configurations;
    }
    /**
     * Set Configurations value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexConfiguration $configurations
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexRequestData
     */
    public function setConfigurations(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexConfiguration $configurations = null)
    {
        $this->Configurations = $configurations;
        return $this;
    }
    /**
     * Get Fares value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexFare|null
     */
    public function getFares()
    {
        return $this->Fares;
    }
    /**
     * Set Fares value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexFare $fares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexRequestData
     */
    public function setFares(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexFare $fares = null)
    {
        $this->Fares = $fares;
        return $this;
    }
    /**
     * Get MCT value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MCTData|null
     */
    public function getMCT()
    {
        return isset($this->MCT) ? $this->MCT : null;
    }
    /**
     * Set MCT value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MCTData $mCT
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexRequestData
     */
    public function setMCT(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MCTData $mCT = null)
    {
        if (is_null($mCT) || (is_array($mCT) && empty($mCT))) {
            unset($this->MCT);
        } else {
            $this->MCT = $mCT;
        }
        return $this;
    }
    /**
     * Get MaxTotalFares value
     * @return int|null
     */
    public function getMaxTotalFares()
    {
        return $this->MaxTotalFares;
    }
    /**
     * Set MaxTotalFares value
     * @param int $maxTotalFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexRequestData
     */
    public function setMaxTotalFares($maxTotalFares = null)
    {
        // validation for constraint: int
        if (!is_null($maxTotalFares) && !is_numeric($maxTotalFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxTotalFares)), __LINE__);
        }
        $this->MaxTotalFares = $maxTotalFares;
        return $this;
    }
    /**
     * Get PassengerGroups value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexPassengeGroup|null
     */
    public function getPassengerGroups()
    {
        return $this->PassengerGroups;
    }
    /**
     * Set PassengerGroups value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexPassengeGroup $passengerGroups
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexRequestData
     */
    public function setPassengerGroups(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexPassengeGroup $passengerGroups = null)
    {
        $this->PassengerGroups = $passengerGroups;
        return $this;
    }
    /**
     * Get StartFareNumber value
     * @return int|null
     */
    public function getStartFareNumber()
    {
        return $this->StartFareNumber;
    }
    /**
     * Set StartFareNumber value
     * @param int $startFareNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexRequestData
     */
    public function setStartFareNumber($startFareNumber = null)
    {
        // validation for constraint: int
        if (!is_null($startFareNumber) && !is_numeric($startFareNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($startFareNumber)), __LINE__);
        }
        $this->StartFareNumber = $startFareNumber;
        return $this;
    }
    /**
     * Get TicketGroups value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexTicketGroup|null
     */
    public function getTicketGroups()
    {
        return $this->TicketGroups;
    }
    /**
     * Set TicketGroups value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexTicketGroup $ticketGroups
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexRequestData
     */
    public function setTicketGroups(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexTicketGroup $ticketGroups = null)
    {
        $this->TicketGroups = $ticketGroups;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexRequestData
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
