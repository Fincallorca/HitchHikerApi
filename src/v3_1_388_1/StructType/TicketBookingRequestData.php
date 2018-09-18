<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketBookingRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketBookingRequestData
 * @subpackage Structs
 */
class TicketBookingRequestData extends AbstractStructBase
{
    /**
     * The AdvancedTicketDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestAdvanced
     */
    public $AdvancedTicketDetails;
    /**
     * The CRSConfig
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public $CRSConfig;
    /**
     * The IssueFareType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IssueFareType;
    /**
     * The PassengerLastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PassengerLastName;
    /**
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $RecordLocator;
    /**
     * The RequestGDSItinerary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $RequestGDSItinerary;
    /**
     * The Session
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Session;
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * The TicketIssueDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestIssue
     */
    public $TicketIssueDetails;
    /**
     * Constructor method for TicketBookingRequestData
     * @uses TicketBookingRequestData::setAdvancedTicketDetails()
     * @uses TicketBookingRequestData::setCRSConfig()
     * @uses TicketBookingRequestData::setIssueFareType()
     * @uses TicketBookingRequestData::setPassengerLastName()
     * @uses TicketBookingRequestData::setRecordLocator()
     * @uses TicketBookingRequestData::setRequestGDSItinerary()
     * @uses TicketBookingRequestData::setSession()
     * @uses TicketBookingRequestData::setSource()
     * @uses TicketBookingRequestData::setTicketIssueDetails()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestAdvanced $advancedTicketDetails
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @param string $issueFareType
     * @param string $passengerLastName
     * @param string $recordLocator
     * @param bool $requestGDSItinerary
     * @param string $session
     * @param string $source
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestIssue $ticketIssueDetails
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestAdvanced $advancedTicketDetails = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null, $issueFareType = null, $passengerLastName = null, $recordLocator = null, $requestGDSItinerary = null, $session = null, $source = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestIssue $ticketIssueDetails = null)
    {
        $this
            ->setAdvancedTicketDetails($advancedTicketDetails)
            ->setCRSConfig($cRSConfig)
            ->setIssueFareType($issueFareType)
            ->setPassengerLastName($passengerLastName)
            ->setRecordLocator($recordLocator)
            ->setRequestGDSItinerary($requestGDSItinerary)
            ->setSession($session)
            ->setSource($source)
            ->setTicketIssueDetails($ticketIssueDetails);
    }
    /**
     * Get AdvancedTicketDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestAdvanced|null
     */
    public function getAdvancedTicketDetails()
    {
        return isset($this->AdvancedTicketDetails) ? $this->AdvancedTicketDetails : null;
    }
    /**
     * Set AdvancedTicketDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestAdvanced $advancedTicketDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestData
     */
    public function setAdvancedTicketDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketBookingRequestAdvanced $advancedTicketDetails = null)
    {
        if (is_null($advancedTicketDetails) || (is_array($advancedTicketDetails) && empty($advancedTicketDetails))) {
            unset($this->AdvancedTicketDetails);
        } else {
            $this->AdvancedTicketDetails = $advancedTicketDetails;
        }
        return $this;
    }
    /**
     * Get CRSConfig value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS|null
     */
    public function getCRSConfig()
    {
        return $this->CRSConfig;
    }
    /**
     * Set CRSConfig value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestData
     */
    public function setCRSConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null)
    {
        $this->CRSConfig = $cRSConfig;
        return $this;
    }
    /**
     * Get IssueFareType value
     * @return string|null
     */
    public function getIssueFareType()
    {
        return $this->IssueFareType;
    }
    /**
     * Set IssueFareType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\IssueFareTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\IssueFareTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $issueFareType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestData
     */
    public function setIssueFareType($issueFareType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\IssueFareTypeEnum::valueIsValid($issueFareType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $issueFareType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\IssueFareTypeEnum::getValidValues())), __LINE__);
        }
        $this->IssueFareType = $issueFareType;
        return $this;
    }
    /**
     * Get PassengerLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassengerLastName()
    {
        return isset($this->PassengerLastName) ? $this->PassengerLastName : null;
    }
    /**
     * Set PassengerLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passengerLastName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestData
     */
    public function setPassengerLastName($passengerLastName = null)
    {
        // validation for constraint: string
        if (!is_null($passengerLastName) && !is_string($passengerLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerLastName)), __LINE__);
        }
        if (is_null($passengerLastName) || (is_array($passengerLastName) && empty($passengerLastName))) {
            unset($this->PassengerLastName);
        } else {
            $this->PassengerLastName = $passengerLastName;
        }
        return $this;
    }
    /**
     * Get RecordLocator value
     * @return string|null
     */
    public function getRecordLocator()
    {
        return $this->RecordLocator;
    }
    /**
     * Set RecordLocator value
     * @param string $recordLocator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestData
     */
    public function setRecordLocator($recordLocator = null)
    {
        // validation for constraint: string
        if (!is_null($recordLocator) && !is_string($recordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordLocator)), __LINE__);
        }
        $this->RecordLocator = $recordLocator;
        return $this;
    }
    /**
     * Get RequestGDSItinerary value
     * @return bool|null
     */
    public function getRequestGDSItinerary()
    {
        return $this->RequestGDSItinerary;
    }
    /**
     * Set RequestGDSItinerary value
     * @param bool $requestGDSItinerary
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestData
     */
    public function setRequestGDSItinerary($requestGDSItinerary = null)
    {
        // validation for constraint: boolean
        if (!is_null($requestGDSItinerary) && !is_bool($requestGDSItinerary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($requestGDSItinerary)), __LINE__);
        }
        $this->RequestGDSItinerary = $requestGDSItinerary;
        return $this;
    }
    /**
     * Get Session value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSession()
    {
        return isset($this->Session) ? $this->Session : null;
    }
    /**
     * Set Session value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $session
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestData
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        if (is_null($session) || (is_array($session) && empty($session))) {
            unset($this->Session);
        } else {
            $this->Session = $session;
        }
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $source
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestData
     */
    public function setSource($source = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::valueIsValid($source)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $source, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::getValidValues())), __LINE__);
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Get TicketIssueDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestIssue|null
     */
    public function getTicketIssueDetails()
    {
        return isset($this->TicketIssueDetails) ? $this->TicketIssueDetails : null;
    }
    /**
     * Set TicketIssueDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestIssue $ticketIssueDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestData
     */
    public function setTicketIssueDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestIssue $ticketIssueDetails = null)
    {
        if (is_null($ticketIssueDetails) || (is_array($ticketIssueDetails) && empty($ticketIssueDetails))) {
            unset($this->TicketIssueDetails);
        } else {
            $this->TicketIssueDetails = $ticketIssueDetails;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestData
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
