<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketResponsePassenger StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketResponsePassenger
 * @subpackage Structs
 */
class TicketResponsePassenger extends AbstractStructBase
{
    /**
     * The Baggage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Baggage;
    /**
     * The FareBase
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareBase;
    /**
     * The IATABSP
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IATABSP;
    /**
     * The PassengerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PassengerType;
    /**
     * The PassengerTypeName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerTypeName;
    /**
     * The TicketingFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TicketingFare;
    /**
     * The TourCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TourCode;
    /**
     * Constructor method for TicketResponsePassenger
     * @uses TicketResponsePassenger::setBaggage()
     * @uses TicketResponsePassenger::setFareBase()
     * @uses TicketResponsePassenger::setIATABSP()
     * @uses TicketResponsePassenger::setPassengerType()
     * @uses TicketResponsePassenger::setPassengerTypeName()
     * @uses TicketResponsePassenger::setTicketingFare()
     * @uses TicketResponsePassenger::setTourCode()
     * @param string $baggage
     * @param string $fareBase
     * @param string $iATABSP
     * @param string $passengerType
     * @param string $passengerTypeName
     * @param string $ticketingFare
     * @param string $tourCode
     */
    public function __construct($baggage = null, $fareBase = null, $iATABSP = null, $passengerType = null, $passengerTypeName = null, $ticketingFare = null, $tourCode = null)
    {
        $this
            ->setBaggage($baggage)
            ->setFareBase($fareBase)
            ->setIATABSP($iATABSP)
            ->setPassengerType($passengerType)
            ->setPassengerTypeName($passengerTypeName)
            ->setTicketingFare($ticketingFare)
            ->setTourCode($tourCode);
    }
    /**
     * Get Baggage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBaggage()
    {
        return isset($this->Baggage) ? $this->Baggage : null;
    }
    /**
     * Set Baggage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $baggage
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger
     */
    public function setBaggage($baggage = null)
    {
        // validation for constraint: string
        if (!is_null($baggage) && !is_string($baggage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($baggage)), __LINE__);
        }
        if (is_null($baggage) || (is_array($baggage) && empty($baggage))) {
            unset($this->Baggage);
        } else {
            $this->Baggage = $baggage;
        }
        return $this;
    }
    /**
     * Get FareBase value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareBase()
    {
        return isset($this->FareBase) ? $this->FareBase : null;
    }
    /**
     * Set FareBase value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareBase
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger
     */
    public function setFareBase($fareBase = null)
    {
        // validation for constraint: string
        if (!is_null($fareBase) && !is_string($fareBase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareBase)), __LINE__);
        }
        if (is_null($fareBase) || (is_array($fareBase) && empty($fareBase))) {
            unset($this->FareBase);
        } else {
            $this->FareBase = $fareBase;
        }
        return $this;
    }
    /**
     * Get IATABSP value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIATABSP()
    {
        return isset($this->IATABSP) ? $this->IATABSP : null;
    }
    /**
     * Set IATABSP value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iATABSP
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger
     */
    public function setIATABSP($iATABSP = null)
    {
        // validation for constraint: string
        if (!is_null($iATABSP) && !is_string($iATABSP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iATABSP)), __LINE__);
        }
        if (is_null($iATABSP) || (is_array($iATABSP) && empty($iATABSP))) {
            unset($this->IATABSP);
        } else {
            $this->IATABSP = $iATABSP;
        }
        return $this;
    }
    /**
     * Get PassengerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassengerType()
    {
        return isset($this->PassengerType) ? $this->PassengerType : null;
    }
    /**
     * Set PassengerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passengerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger
     */
    public function setPassengerType($passengerType = null)
    {
        // validation for constraint: string
        if (!is_null($passengerType) && !is_string($passengerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerType)), __LINE__);
        }
        if (is_null($passengerType) || (is_array($passengerType) && empty($passengerType))) {
            unset($this->PassengerType);
        } else {
            $this->PassengerType = $passengerType;
        }
        return $this;
    }
    /**
     * Get PassengerTypeName value
     * @return string|null
     */
    public function getPassengerTypeName()
    {
        return $this->PassengerTypeName;
    }
    /**
     * Set PassengerTypeName value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $passengerTypeName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger
     */
    public function setPassengerTypeName($passengerTypeName = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($passengerTypeName)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $passengerTypeName, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
        }
        $this->PassengerTypeName = $passengerTypeName;
        return $this;
    }
    /**
     * Get TicketingFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTicketingFare()
    {
        return isset($this->TicketingFare) ? $this->TicketingFare : null;
    }
    /**
     * Set TicketingFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ticketingFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger
     */
    public function setTicketingFare($ticketingFare = null)
    {
        // validation for constraint: string
        if (!is_null($ticketingFare) && !is_string($ticketingFare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketingFare)), __LINE__);
        }
        if (is_null($ticketingFare) || (is_array($ticketingFare) && empty($ticketingFare))) {
            unset($this->TicketingFare);
        } else {
            $this->TicketingFare = $ticketingFare;
        }
        return $this;
    }
    /**
     * Get TourCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTourCode()
    {
        return isset($this->TourCode) ? $this->TourCode : null;
    }
    /**
     * Set TourCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tourCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger
     */
    public function setTourCode($tourCode = null)
    {
        // validation for constraint: string
        if (!is_null($tourCode) && !is_string($tourCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tourCode)), __LINE__);
        }
        if (is_null($tourCode) || (is_array($tourCode) && empty($tourCode))) {
            unset($this->TourCode);
        } else {
            $this->TourCode = $tourCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponsePassenger
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
