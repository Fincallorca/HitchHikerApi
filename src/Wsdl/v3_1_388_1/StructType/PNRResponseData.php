<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRResponseData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PNRResponseData
 * @subpackage Structs
 */
class PNRResponseData extends AbstractStructBase
{
    /**
     * The BackOffice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BackOffice;
    /**
     * The CreatorAgent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreatorAgent;
    /**
     * The CreatorPCC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreatorPCC;
    /**
     * The Infos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseInfo
     */
    public $Infos;
    /**
     * The IsTicketIssued
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsTicketIssued;
    /**
     * The Locations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseLocation
     */
    public $Locations;
    /**
     * The ModuleInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData
     */
    public $ModuleInfo;
    /**
     * The NumberOfInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfInfos;
    /**
     * The NumberOfPhones
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPhones;
    /**
     * The OSIElements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseOSI
     */
    public $OSIElements;
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePassenger
     */
    public $Passengers;
    /**
     * The Phones
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePhone
     */
    public $Phones;
    /**
     * The PointOfTurnAround
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PointOfTurnAround;
    /**
     * The ReceivedFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ReceivedFrom;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Remark;
    /**
     * The ResponseInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails
     */
    public $ResponseInfo;
    /**
     * The SKElements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSKElement
     */
    public $SKElements;
    /**
     * The SSRElements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSSR
     */
    public $SSRElements;
    /**
     * The Segments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSegment
     */
    public $Segments;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Source;
    /**
     * The StoredFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseStoredFare
     */
    public $StoredFares;
    /**
     * The StructuredPNR
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $StructuredPNR;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Text;
    /**
     * The TicketInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTicketInfo
     */
    public $TicketInfo;
    /**
     * The TicketingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TicketingDate;
    /**
     * Constructor method for PNRResponseData
     * @uses PNRResponseData::setBackOffice()
     * @uses PNRResponseData::setCreatorAgent()
     * @uses PNRResponseData::setCreatorPCC()
     * @uses PNRResponseData::setInfos()
     * @uses PNRResponseData::setIsTicketIssued()
     * @uses PNRResponseData::setLocations()
     * @uses PNRResponseData::setModuleInfo()
     * @uses PNRResponseData::setNumberOfInfos()
     * @uses PNRResponseData::setNumberOfPhones()
     * @uses PNRResponseData::setOSIElements()
     * @uses PNRResponseData::setPassengers()
     * @uses PNRResponseData::setPhones()
     * @uses PNRResponseData::setPointOfTurnAround()
     * @uses PNRResponseData::setReceivedFrom()
     * @uses PNRResponseData::setRemark()
     * @uses PNRResponseData::setResponseInfo()
     * @uses PNRResponseData::setSKElements()
     * @uses PNRResponseData::setSSRElements()
     * @uses PNRResponseData::setSegments()
     * @uses PNRResponseData::setSource()
     * @uses PNRResponseData::setStoredFares()
     * @uses PNRResponseData::setStructuredPNR()
     * @uses PNRResponseData::setText()
     * @uses PNRResponseData::setTicketInfo()
     * @uses PNRResponseData::setTicketingDate()
     * @param string $backOffice
     * @param string $creatorAgent
     * @param string $creatorPCC
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseInfo $infos
     * @param bool $isTicketIssued
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseLocation $locations
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo
     * @param int $numberOfInfos
     * @param int $numberOfPhones
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseOSI $oSIElements
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePassenger $passengers
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePhone $phones
     * @param string $pointOfTurnAround
     * @param string $receivedFrom
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $remark
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSKElement $sKElements
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSSR $sSRElements
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSegment $segments
     * @param string $source
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseStoredFare $storedFares
     * @param bool $structuredPNR
     * @param string $text
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTicketInfo $ticketInfo
     * @param string $ticketingDate
     */
    public function __construct($backOffice = null, $creatorAgent = null, $creatorPCC = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseInfo $infos = null, $isTicketIssued = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseLocation $locations = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo = null, $numberOfInfos = null, $numberOfPhones = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseOSI $oSIElements = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePassenger $passengers = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePhone $phones = null, $pointOfTurnAround = null, $receivedFrom = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $remark = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSKElement $sKElements = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSSR $sSRElements = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSegment $segments = null, $source = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseStoredFare $storedFares = null, $structuredPNR = null, $text = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTicketInfo $ticketInfo = null, $ticketingDate = null)
    {
        $this
            ->setBackOffice($backOffice)
            ->setCreatorAgent($creatorAgent)
            ->setCreatorPCC($creatorPCC)
            ->setInfos($infos)
            ->setIsTicketIssued($isTicketIssued)
            ->setLocations($locations)
            ->setModuleInfo($moduleInfo)
            ->setNumberOfInfos($numberOfInfos)
            ->setNumberOfPhones($numberOfPhones)
            ->setOSIElements($oSIElements)
            ->setPassengers($passengers)
            ->setPhones($phones)
            ->setPointOfTurnAround($pointOfTurnAround)
            ->setReceivedFrom($receivedFrom)
            ->setRemark($remark)
            ->setResponseInfo($responseInfo)
            ->setSKElements($sKElements)
            ->setSSRElements($sSRElements)
            ->setSegments($segments)
            ->setSource($source)
            ->setStoredFares($storedFares)
            ->setStructuredPNR($structuredPNR)
            ->setText($text)
            ->setTicketInfo($ticketInfo)
            ->setTicketingDate($ticketingDate);
    }
    /**
     * Get BackOffice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBackOffice()
    {
        return isset($this->BackOffice) ? $this->BackOffice : null;
    }
    /**
     * Set BackOffice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $backOffice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setBackOffice($backOffice = null)
    {
        // validation for constraint: string
        if (!is_null($backOffice) && !is_string($backOffice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($backOffice)), __LINE__);
        }
        if (is_null($backOffice) || (is_array($backOffice) && empty($backOffice))) {
            unset($this->BackOffice);
        } else {
            $this->BackOffice = $backOffice;
        }
        return $this;
    }
    /**
     * Get CreatorAgent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreatorAgent()
    {
        return isset($this->CreatorAgent) ? $this->CreatorAgent : null;
    }
    /**
     * Set CreatorAgent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creatorAgent
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setCreatorAgent($creatorAgent = null)
    {
        // validation for constraint: string
        if (!is_null($creatorAgent) && !is_string($creatorAgent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creatorAgent)), __LINE__);
        }
        if (is_null($creatorAgent) || (is_array($creatorAgent) && empty($creatorAgent))) {
            unset($this->CreatorAgent);
        } else {
            $this->CreatorAgent = $creatorAgent;
        }
        return $this;
    }
    /**
     * Get CreatorPCC value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreatorPCC()
    {
        return isset($this->CreatorPCC) ? $this->CreatorPCC : null;
    }
    /**
     * Set CreatorPCC value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creatorPCC
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setCreatorPCC($creatorPCC = null)
    {
        // validation for constraint: string
        if (!is_null($creatorPCC) && !is_string($creatorPCC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creatorPCC)), __LINE__);
        }
        if (is_null($creatorPCC) || (is_array($creatorPCC) && empty($creatorPCC))) {
            unset($this->CreatorPCC);
        } else {
            $this->CreatorPCC = $creatorPCC;
        }
        return $this;
    }
    /**
     * Get Infos value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseInfo|null
     */
    public function getInfos()
    {
        return isset($this->Infos) ? $this->Infos : null;
    }
    /**
     * Set Infos value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseInfo $infos
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setInfos(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseInfo $infos = null)
    {
        if (is_null($infos) || (is_array($infos) && empty($infos))) {
            unset($this->Infos);
        } else {
            $this->Infos = $infos;
        }
        return $this;
    }
    /**
     * Get IsTicketIssued value
     * @return bool|null
     */
    public function getIsTicketIssued()
    {
        return $this->IsTicketIssued;
    }
    /**
     * Set IsTicketIssued value
     * @param bool $isTicketIssued
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setIsTicketIssued($isTicketIssued = null)
    {
        // validation for constraint: boolean
        if (!is_null($isTicketIssued) && !is_bool($isTicketIssued)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isTicketIssued)), __LINE__);
        }
        $this->IsTicketIssued = $isTicketIssued;
        return $this;
    }
    /**
     * Get Locations value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseLocation|null
     */
    public function getLocations()
    {
        return isset($this->Locations) ? $this->Locations : null;
    }
    /**
     * Set Locations value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseLocation $locations
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setLocations(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseLocation $locations = null)
    {
        if (is_null($locations) || (is_array($locations) && empty($locations))) {
            unset($this->Locations);
        } else {
            $this->Locations = $locations;
        }
        return $this;
    }
    /**
     * Get ModuleInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData|null
     */
    public function getModuleInfo()
    {
        return isset($this->ModuleInfo) ? $this->ModuleInfo : null;
    }
    /**
     * Set ModuleInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setModuleInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo = null)
    {
        if (is_null($moduleInfo) || (is_array($moduleInfo) && empty($moduleInfo))) {
            unset($this->ModuleInfo);
        } else {
            $this->ModuleInfo = $moduleInfo;
        }
        return $this;
    }
    /**
     * Get NumberOfInfos value
     * @return int|null
     */
    public function getNumberOfInfos()
    {
        return $this->NumberOfInfos;
    }
    /**
     * Set NumberOfInfos value
     * @param int $numberOfInfos
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setNumberOfInfos($numberOfInfos = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfInfos) && !is_numeric($numberOfInfos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfInfos)), __LINE__);
        }
        $this->NumberOfInfos = $numberOfInfos;
        return $this;
    }
    /**
     * Get NumberOfPhones value
     * @return int|null
     */
    public function getNumberOfPhones()
    {
        return $this->NumberOfPhones;
    }
    /**
     * Set NumberOfPhones value
     * @param int $numberOfPhones
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setNumberOfPhones($numberOfPhones = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPhones) && !is_numeric($numberOfPhones)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPhones)), __LINE__);
        }
        $this->NumberOfPhones = $numberOfPhones;
        return $this;
    }
    /**
     * Get OSIElements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseOSI|null
     */
    public function getOSIElements()
    {
        return isset($this->OSIElements) ? $this->OSIElements : null;
    }
    /**
     * Set OSIElements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseOSI $oSIElements
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setOSIElements(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseOSI $oSIElements = null)
    {
        if (is_null($oSIElements) || (is_array($oSIElements) && empty($oSIElements))) {
            unset($this->OSIElements);
        } else {
            $this->OSIElements = $oSIElements;
        }
        return $this;
    }
    /**
     * Get Passengers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePassenger|null
     */
    public function getPassengers()
    {
        return isset($this->Passengers) ? $this->Passengers : null;
    }
    /**
     * Set Passengers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePassenger $passengers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setPassengers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePassenger $passengers = null)
    {
        if (is_null($passengers) || (is_array($passengers) && empty($passengers))) {
            unset($this->Passengers);
        } else {
            $this->Passengers = $passengers;
        }
        return $this;
    }
    /**
     * Get Phones value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePhone|null
     */
    public function getPhones()
    {
        return isset($this->Phones) ? $this->Phones : null;
    }
    /**
     * Set Phones value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePhone $phones
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setPhones(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePhone $phones = null)
    {
        if (is_null($phones) || (is_array($phones) && empty($phones))) {
            unset($this->Phones);
        } else {
            $this->Phones = $phones;
        }
        return $this;
    }
    /**
     * Get PointOfTurnAround value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPointOfTurnAround()
    {
        return isset($this->PointOfTurnAround) ? $this->PointOfTurnAround : null;
    }
    /**
     * Set PointOfTurnAround value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pointOfTurnAround
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setPointOfTurnAround($pointOfTurnAround = null)
    {
        // validation for constraint: string
        if (!is_null($pointOfTurnAround) && !is_string($pointOfTurnAround)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pointOfTurnAround)), __LINE__);
        }
        if (is_null($pointOfTurnAround) || (is_array($pointOfTurnAround) && empty($pointOfTurnAround))) {
            unset($this->PointOfTurnAround);
        } else {
            $this->PointOfTurnAround = $pointOfTurnAround;
        }
        return $this;
    }
    /**
     * Get ReceivedFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReceivedFrom()
    {
        return isset($this->ReceivedFrom) ? $this->ReceivedFrom : null;
    }
    /**
     * Set ReceivedFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $receivedFrom
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setReceivedFrom($receivedFrom = null)
    {
        // validation for constraint: string
        if (!is_null($receivedFrom) && !is_string($receivedFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receivedFrom)), __LINE__);
        }
        if (is_null($receivedFrom) || (is_array($receivedFrom) && empty($receivedFrom))) {
            unset($this->ReceivedFrom);
        } else {
            $this->ReceivedFrom = $receivedFrom;
        }
        return $this;
    }
    /**
     * Get Remark value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getRemark()
    {
        return isset($this->Remark) ? $this->Remark : null;
    }
    /**
     * Set Remark value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $remark
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setRemark(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $remark = null)
    {
        if (is_null($remark) || (is_array($remark) && empty($remark))) {
            unset($this->Remark);
        } else {
            $this->Remark = $remark;
        }
        return $this;
    }
    /**
     * Get ResponseInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails|null
     */
    public function getResponseInfo()
    {
        return isset($this->ResponseInfo) ? $this->ResponseInfo : null;
    }
    /**
     * Set ResponseInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setResponseInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo = null)
    {
        if (is_null($responseInfo) || (is_array($responseInfo) && empty($responseInfo))) {
            unset($this->ResponseInfo);
        } else {
            $this->ResponseInfo = $responseInfo;
        }
        return $this;
    }
    /**
     * Get SKElements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSKElement|null
     */
    public function getSKElements()
    {
        return isset($this->SKElements) ? $this->SKElements : null;
    }
    /**
     * Set SKElements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSKElement $sKElements
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setSKElements(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSKElement $sKElements = null)
    {
        if (is_null($sKElements) || (is_array($sKElements) && empty($sKElements))) {
            unset($this->SKElements);
        } else {
            $this->SKElements = $sKElements;
        }
        return $this;
    }
    /**
     * Get SSRElements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSSR|null
     */
    public function getSSRElements()
    {
        return isset($this->SSRElements) ? $this->SSRElements : null;
    }
    /**
     * Set SSRElements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSSR $sSRElements
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setSSRElements(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSSR $sSRElements = null)
    {
        if (is_null($sSRElements) || (is_array($sSRElements) && empty($sSRElements))) {
            unset($this->SSRElements);
        } else {
            $this->SSRElements = $sSRElements;
        }
        return $this;
    }
    /**
     * Get Segments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSegment|null
     */
    public function getSegments()
    {
        return isset($this->Segments) ? $this->Segments : null;
    }
    /**
     * Set Segments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSegment $segments
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setSegments(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSegment $segments = null)
    {
        if (is_null($segments) || (is_array($segments) && empty($segments))) {
            unset($this->Segments);
        } else {
            $this->Segments = $segments;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
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
     * Get StoredFares value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseStoredFare|null
     */
    public function getStoredFares()
    {
        return isset($this->StoredFares) ? $this->StoredFares : null;
    }
    /**
     * Set StoredFares value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseStoredFare $storedFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setStoredFares(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseStoredFare $storedFares = null)
    {
        if (is_null($storedFares) || (is_array($storedFares) && empty($storedFares))) {
            unset($this->StoredFares);
        } else {
            $this->StoredFares = $storedFares;
        }
        return $this;
    }
    /**
     * Get StructuredPNR value
     * @return bool|null
     */
    public function getStructuredPNR()
    {
        return $this->StructuredPNR;
    }
    /**
     * Set StructuredPNR value
     * @param bool $structuredPNR
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setStructuredPNR($structuredPNR = null)
    {
        // validation for constraint: boolean
        if (!is_null($structuredPNR) && !is_bool($structuredPNR)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($structuredPNR)), __LINE__);
        }
        $this->StructuredPNR = $structuredPNR;
        return $this;
    }
    /**
     * Get Text value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getText()
    {
        return isset($this->Text) ? $this->Text : null;
    }
    /**
     * Set Text value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $text
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        if (is_null($text) || (is_array($text) && empty($text))) {
            unset($this->Text);
        } else {
            $this->Text = $text;
        }
        return $this;
    }
    /**
     * Get TicketInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTicketInfo|null
     */
    public function getTicketInfo()
    {
        return isset($this->TicketInfo) ? $this->TicketInfo : null;
    }
    /**
     * Set TicketInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTicketInfo $ticketInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setTicketInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTicketInfo $ticketInfo = null)
    {
        if (is_null($ticketInfo) || (is_array($ticketInfo) && empty($ticketInfo))) {
            unset($this->TicketInfo);
        } else {
            $this->TicketInfo = $ticketInfo;
        }
        return $this;
    }
    /**
     * Get TicketingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTicketingDate()
    {
        return isset($this->TicketingDate) ? $this->TicketingDate : null;
    }
    /**
     * Set TicketingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ticketingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public function setTicketingDate($ticketingDate = null)
    {
        // validation for constraint: string
        if (!is_null($ticketingDate) && !is_string($ticketingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketingDate)), __LINE__);
        }
        if (is_null($ticketingDate) || (is_array($ticketingDate) && empty($ticketingDate))) {
            unset($this->TicketingDate);
        } else {
            $this->TicketingDate = $ticketingDate;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
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
