<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareComplexTicketGroup StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareComplexTicketGroup
 * @subpackage Structs
 */
class FareComplexTicketGroup extends AbstractStructBase
{
    /**
     * The Carriers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestCarrier
     */
    public $Carriers;
    /**
     * The ConfigurationRef
     * @var int
     */
    public $ConfigurationRef;
    /**
     * The FareRef
     * @var int
     */
    public $FareRef;
    /**
     * The Legs
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexLeg
     */
    public $Legs;
    /**
     * The PassengerGroupRef
     * @var int
     */
    public $PassengerGroupRef;
    /**
     * The Pricing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPricing
     */
    public $Pricing;
    /**
     * The TicketGroupID
     * @var int
     */
    public $TicketGroupID;
    /**
     * Constructor method for FareComplexTicketGroup
     * @uses FareComplexTicketGroup::setCarriers()
     * @uses FareComplexTicketGroup::setConfigurationRef()
     * @uses FareComplexTicketGroup::setFareRef()
     * @uses FareComplexTicketGroup::setLegs()
     * @uses FareComplexTicketGroup::setPassengerGroupRef()
     * @uses FareComplexTicketGroup::setPricing()
     * @uses FareComplexTicketGroup::setTicketGroupID()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestCarrier $carriers
     * @param int $configurationRef
     * @param int $fareRef
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexLeg $legs
     * @param int $passengerGroupRef
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPricing $pricing
     * @param int $ticketGroupID
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestCarrier $carriers = null, $configurationRef = null, $fareRef = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexLeg $legs = null, $passengerGroupRef = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPricing $pricing = null, $ticketGroupID = null)
    {
        $this
            ->setCarriers($carriers)
            ->setConfigurationRef($configurationRef)
            ->setFareRef($fareRef)
            ->setLegs($legs)
            ->setPassengerGroupRef($passengerGroupRef)
            ->setPricing($pricing)
            ->setTicketGroupID($ticketGroupID);
    }
    /**
     * Get Carriers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestCarrier|null
     */
    public function getCarriers()
    {
        return isset($this->Carriers) ? $this->Carriers : null;
    }
    /**
     * Set Carriers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestCarrier $carriers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup
     */
    public function setCarriers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestCarrier $carriers = null)
    {
        if (is_null($carriers) || (is_array($carriers) && empty($carriers))) {
            unset($this->Carriers);
        } else {
            $this->Carriers = $carriers;
        }
        return $this;
    }
    /**
     * Get ConfigurationRef value
     * @return int|null
     */
    public function getConfigurationRef()
    {
        return $this->ConfigurationRef;
    }
    /**
     * Set ConfigurationRef value
     * @param int $configurationRef
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup
     */
    public function setConfigurationRef($configurationRef = null)
    {
        // validation for constraint: int
        if (!is_null($configurationRef) && !is_numeric($configurationRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($configurationRef)), __LINE__);
        }
        $this->ConfigurationRef = $configurationRef;
        return $this;
    }
    /**
     * Get FareRef value
     * @return int|null
     */
    public function getFareRef()
    {
        return $this->FareRef;
    }
    /**
     * Set FareRef value
     * @param int $fareRef
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup
     */
    public function setFareRef($fareRef = null)
    {
        // validation for constraint: int
        if (!is_null($fareRef) && !is_numeric($fareRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fareRef)), __LINE__);
        }
        $this->FareRef = $fareRef;
        return $this;
    }
    /**
     * Get Legs value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexLeg|null
     */
    public function getLegs()
    {
        return $this->Legs;
    }
    /**
     * Set Legs value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexLeg $legs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup
     */
    public function setLegs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexLeg $legs = null)
    {
        $this->Legs = $legs;
        return $this;
    }
    /**
     * Get PassengerGroupRef value
     * @return int|null
     */
    public function getPassengerGroupRef()
    {
        return $this->PassengerGroupRef;
    }
    /**
     * Set PassengerGroupRef value
     * @param int $passengerGroupRef
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup
     */
    public function setPassengerGroupRef($passengerGroupRef = null)
    {
        // validation for constraint: int
        if (!is_null($passengerGroupRef) && !is_numeric($passengerGroupRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($passengerGroupRef)), __LINE__);
        }
        $this->PassengerGroupRef = $passengerGroupRef;
        return $this;
    }
    /**
     * Get Pricing value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPricing|null
     */
    public function getPricing()
    {
        return isset($this->Pricing) ? $this->Pricing : null;
    }
    /**
     * Set Pricing value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPricing $pricing
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup
     */
    public function setPricing(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPricing $pricing = null)
    {
        if (is_null($pricing) || (is_array($pricing) && empty($pricing))) {
            unset($this->Pricing);
        } else {
            $this->Pricing = $pricing;
        }
        return $this;
    }
    /**
     * Get TicketGroupID value
     * @return int|null
     */
    public function getTicketGroupID()
    {
        return $this->TicketGroupID;
    }
    /**
     * Set TicketGroupID value
     * @param int $ticketGroupID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup
     */
    public function setTicketGroupID($ticketGroupID = null)
    {
        // validation for constraint: int
        if (!is_null($ticketGroupID) && !is_numeric($ticketGroupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ticketGroupID)), __LINE__);
        }
        $this->TicketGroupID = $ticketGroupID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexTicketGroup
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
