<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueryActionData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QueryActionData
 * @subpackage Structs
 */
class QueryActionData extends AbstractStructBase
{
    /**
     * The CRSProfileLink
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CRSProfileLink;
    /**
     * The CabinClasses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CabinClasses;
    /**
     * The Carriers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCarrierData
     */
    public $Carriers;
    /**
     * The Channel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Channel;
    /**
     * The CharterHosts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $CharterHosts;
    /**
     * The CharterTouroperators
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $CharterTouroperators;
    /**
     * The CorporateCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $CorporateCodes;
    /**
     * The Destinations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Destinations;
    /**
     * The FallbackIncludeExclude
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FallbackIncludeExclude;
    /**
     * The FallbackToOriginDestination
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FallbackToOriginDestination;
    /**
     * The GUID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GUID;
    /**
     * The IncludeRailAndFly
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeRailAndFly;
    /**
     * The MatchCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $MatchCodes;
    /**
     * The MaxConnections
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxConnections;
    /**
     * The NegoFareType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NegoFareType;
    /**
     * The NetFareDatabaseCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $NetFareDatabaseCodes;
    /**
     * The NumberOfCharterFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfCharterFares;
    /**
     * The NumberOfNetFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfNetFares;
    /**
     * The NumberOfNetSearchFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfNetSearchFares;
    /**
     * The NumberOfPubFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPubFares;
    /**
     * The NumberOfWebFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfWebFares;
    /**
     * The Origins
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Origins;
    /**
     * The PercentageDatabaseCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $PercentageDatabaseCodes;
    /**
     * The ReturnDirectFlightsOnly
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnDirectFlightsOnly;
    /**
     * The SubChannel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SubChannel;
    /**
     * The XPSearchConcurrentAvails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $XPSearchConcurrentAvails;
    /**
     * The XPSearchMaxConnections
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $XPSearchMaxConnections;
    /**
     * The XPSearchMaxMoveDowns
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $XPSearchMaxMoveDowns;
    /**
     * The XPSearchMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $XPSearchMode;
    /**
     * Constructor method for QueryActionData
     * @uses QueryActionData::setCRSProfileLink()
     * @uses QueryActionData::setCabinClasses()
     * @uses QueryActionData::setCarriers()
     * @uses QueryActionData::setChannel()
     * @uses QueryActionData::setCharterHosts()
     * @uses QueryActionData::setCharterTouroperators()
     * @uses QueryActionData::setCorporateCodes()
     * @uses QueryActionData::setDestinations()
     * @uses QueryActionData::setFallbackIncludeExclude()
     * @uses QueryActionData::setFallbackToOriginDestination()
     * @uses QueryActionData::setGUID()
     * @uses QueryActionData::setIncludeRailAndFly()
     * @uses QueryActionData::setMatchCodes()
     * @uses QueryActionData::setMaxConnections()
     * @uses QueryActionData::setNegoFareType()
     * @uses QueryActionData::setNetFareDatabaseCodes()
     * @uses QueryActionData::setNumberOfCharterFares()
     * @uses QueryActionData::setNumberOfNetFares()
     * @uses QueryActionData::setNumberOfNetSearchFares()
     * @uses QueryActionData::setNumberOfPubFares()
     * @uses QueryActionData::setNumberOfWebFares()
     * @uses QueryActionData::setOrigins()
     * @uses QueryActionData::setPercentageDatabaseCodes()
     * @uses QueryActionData::setReturnDirectFlightsOnly()
     * @uses QueryActionData::setSubChannel()
     * @uses QueryActionData::setXPSearchConcurrentAvails()
     * @uses QueryActionData::setXPSearchMaxConnections()
     * @uses QueryActionData::setXPSearchMaxMoveDowns()
     * @uses QueryActionData::setXPSearchMode()
     * @param string $cRSProfileLink
     * @param string $cabinClasses
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCarrierData $carriers
     * @param string $channel
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $charterHosts
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $charterTouroperators
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $corporateCodes
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $destinations
     * @param bool $fallbackIncludeExclude
     * @param bool $fallbackToOriginDestination
     * @param string $gUID
     * @param bool $includeRailAndFly
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchCodes
     * @param int $maxConnections
     * @param string $negoFareType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareDatabaseCodes
     * @param int $numberOfCharterFares
     * @param int $numberOfNetFares
     * @param int $numberOfNetSearchFares
     * @param int $numberOfPubFares
     * @param int $numberOfWebFares
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $origins
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $percentageDatabaseCodes
     * @param bool $returnDirectFlightsOnly
     * @param string $subChannel
     * @param int $xPSearchConcurrentAvails
     * @param int $xPSearchMaxConnections
     * @param int $xPSearchMaxMoveDowns
     * @param string $xPSearchMode
     */
    public function __construct($cRSProfileLink = null, $cabinClasses = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCarrierData $carriers = null, $channel = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $charterHosts = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $charterTouroperators = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $corporateCodes = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $destinations = null, $fallbackIncludeExclude = null, $fallbackToOriginDestination = null, $gUID = null, $includeRailAndFly = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchCodes = null, $maxConnections = null, $negoFareType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareDatabaseCodes = null, $numberOfCharterFares = null, $numberOfNetFares = null, $numberOfNetSearchFares = null, $numberOfPubFares = null, $numberOfWebFares = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $origins = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $percentageDatabaseCodes = null, $returnDirectFlightsOnly = null, $subChannel = null, $xPSearchConcurrentAvails = null, $xPSearchMaxConnections = null, $xPSearchMaxMoveDowns = null, $xPSearchMode = null)
    {
        $this
            ->setCRSProfileLink($cRSProfileLink)
            ->setCabinClasses($cabinClasses)
            ->setCarriers($carriers)
            ->setChannel($channel)
            ->setCharterHosts($charterHosts)
            ->setCharterTouroperators($charterTouroperators)
            ->setCorporateCodes($corporateCodes)
            ->setDestinations($destinations)
            ->setFallbackIncludeExclude($fallbackIncludeExclude)
            ->setFallbackToOriginDestination($fallbackToOriginDestination)
            ->setGUID($gUID)
            ->setIncludeRailAndFly($includeRailAndFly)
            ->setMatchCodes($matchCodes)
            ->setMaxConnections($maxConnections)
            ->setNegoFareType($negoFareType)
            ->setNetFareDatabaseCodes($netFareDatabaseCodes)
            ->setNumberOfCharterFares($numberOfCharterFares)
            ->setNumberOfNetFares($numberOfNetFares)
            ->setNumberOfNetSearchFares($numberOfNetSearchFares)
            ->setNumberOfPubFares($numberOfPubFares)
            ->setNumberOfWebFares($numberOfWebFares)
            ->setOrigins($origins)
            ->setPercentageDatabaseCodes($percentageDatabaseCodes)
            ->setReturnDirectFlightsOnly($returnDirectFlightsOnly)
            ->setSubChannel($subChannel)
            ->setXPSearchConcurrentAvails($xPSearchConcurrentAvails)
            ->setXPSearchMaxConnections($xPSearchMaxConnections)
            ->setXPSearchMaxMoveDowns($xPSearchMaxMoveDowns)
            ->setXPSearchMode($xPSearchMode);
    }
    /**
     * Get CRSProfileLink value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCRSProfileLink()
    {
        return isset($this->CRSProfileLink) ? $this->CRSProfileLink : null;
    }
    /**
     * Set CRSProfileLink value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cRSProfileLink
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setCRSProfileLink($cRSProfileLink = null)
    {
        // validation for constraint: string
        if (!is_null($cRSProfileLink) && !is_string($cRSProfileLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cRSProfileLink)), __LINE__);
        }
        if (is_null($cRSProfileLink) || (is_array($cRSProfileLink) && empty($cRSProfileLink))) {
            unset($this->CRSProfileLink);
        } else {
            $this->CRSProfileLink = $cRSProfileLink;
        }
        return $this;
    }
    /**
     * Get CabinClasses value
     * @return string|null
     */
    public function getCabinClasses()
    {
        return $this->CabinClasses;
    }
    /**
     * Set CabinClasses value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cabinClasses
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setCabinClasses($cabinClasses = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid($cabinClasses)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cabinClasses, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues())), __LINE__);
        }
        $this->CabinClasses = $cabinClasses;
        return $this;
    }
    /**
     * Get Carriers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCarrierData|null
     */
    public function getCarriers()
    {
        return isset($this->Carriers) ? $this->Carriers : null;
    }
    /**
     * Set Carriers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCarrierData $carriers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setCarriers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCarrierData $carriers = null)
    {
        if (is_null($carriers) || (is_array($carriers) && empty($carriers))) {
            unset($this->Carriers);
        } else {
            $this->Carriers = $carriers;
        }
        return $this;
    }
    /**
     * Get Channel value
     * @return string|null
     */
    public function getChannel()
    {
        return $this->Channel;
    }
    /**
     * Set Channel value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ChannelTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ChannelTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $channel
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setChannel($channel = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ChannelTypeEnum::valueIsValid($channel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $channel, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ChannelTypeEnum::getValidValues())), __LINE__);
        }
        $this->Channel = $channel;
        return $this;
    }
    /**
     * Get CharterHosts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getCharterHosts()
    {
        return isset($this->CharterHosts) ? $this->CharterHosts : null;
    }
    /**
     * Set CharterHosts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $charterHosts
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setCharterHosts(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $charterHosts = null)
    {
        if (is_null($charterHosts) || (is_array($charterHosts) && empty($charterHosts))) {
            unset($this->CharterHosts);
        } else {
            $this->CharterHosts = $charterHosts;
        }
        return $this;
    }
    /**
     * Get CharterTouroperators value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getCharterTouroperators()
    {
        return isset($this->CharterTouroperators) ? $this->CharterTouroperators : null;
    }
    /**
     * Set CharterTouroperators value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $charterTouroperators
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setCharterTouroperators(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $charterTouroperators = null)
    {
        if (is_null($charterTouroperators) || (is_array($charterTouroperators) && empty($charterTouroperators))) {
            unset($this->CharterTouroperators);
        } else {
            $this->CharterTouroperators = $charterTouroperators;
        }
        return $this;
    }
    /**
     * Get CorporateCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getCorporateCodes()
    {
        return isset($this->CorporateCodes) ? $this->CorporateCodes : null;
    }
    /**
     * Set CorporateCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $corporateCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setCorporateCodes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $corporateCodes = null)
    {
        if (is_null($corporateCodes) || (is_array($corporateCodes) && empty($corporateCodes))) {
            unset($this->CorporateCodes);
        } else {
            $this->CorporateCodes = $corporateCodes;
        }
        return $this;
    }
    /**
     * Get Destinations value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getDestinations()
    {
        return isset($this->Destinations) ? $this->Destinations : null;
    }
    /**
     * Set Destinations value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $destinations
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setDestinations(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $destinations = null)
    {
        if (is_null($destinations) || (is_array($destinations) && empty($destinations))) {
            unset($this->Destinations);
        } else {
            $this->Destinations = $destinations;
        }
        return $this;
    }
    /**
     * Get FallbackIncludeExclude value
     * @return bool|null
     */
    public function getFallbackIncludeExclude()
    {
        return $this->FallbackIncludeExclude;
    }
    /**
     * Set FallbackIncludeExclude value
     * @param bool $fallbackIncludeExclude
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setFallbackIncludeExclude($fallbackIncludeExclude = null)
    {
        // validation for constraint: boolean
        if (!is_null($fallbackIncludeExclude) && !is_bool($fallbackIncludeExclude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fallbackIncludeExclude)), __LINE__);
        }
        $this->FallbackIncludeExclude = $fallbackIncludeExclude;
        return $this;
    }
    /**
     * Get FallbackToOriginDestination value
     * @return bool|null
     */
    public function getFallbackToOriginDestination()
    {
        return $this->FallbackToOriginDestination;
    }
    /**
     * Set FallbackToOriginDestination value
     * @param bool $fallbackToOriginDestination
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setFallbackToOriginDestination($fallbackToOriginDestination = null)
    {
        // validation for constraint: boolean
        if (!is_null($fallbackToOriginDestination) && !is_bool($fallbackToOriginDestination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fallbackToOriginDestination)), __LINE__);
        }
        $this->FallbackToOriginDestination = $fallbackToOriginDestination;
        return $this;
    }
    /**
     * Get GUID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGUID()
    {
        return isset($this->GUID) ? $this->GUID : null;
    }
    /**
     * Set GUID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $gUID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setGUID($gUID = null)
    {
        // validation for constraint: string
        if (!is_null($gUID) && !is_string($gUID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gUID)), __LINE__);
        }
        if (is_null($gUID) || (is_array($gUID) && empty($gUID))) {
            unset($this->GUID);
        } else {
            $this->GUID = $gUID;
        }
        return $this;
    }
    /**
     * Get IncludeRailAndFly value
     * @return bool|null
     */
    public function getIncludeRailAndFly()
    {
        return $this->IncludeRailAndFly;
    }
    /**
     * Set IncludeRailAndFly value
     * @param bool $includeRailAndFly
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setIncludeRailAndFly($includeRailAndFly = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeRailAndFly) && !is_bool($includeRailAndFly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeRailAndFly)), __LINE__);
        }
        $this->IncludeRailAndFly = $includeRailAndFly;
        return $this;
    }
    /**
     * Get MatchCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getMatchCodes()
    {
        return isset($this->MatchCodes) ? $this->MatchCodes : null;
    }
    /**
     * Set MatchCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setMatchCodes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchCodes = null)
    {
        if (is_null($matchCodes) || (is_array($matchCodes) && empty($matchCodes))) {
            unset($this->MatchCodes);
        } else {
            $this->MatchCodes = $matchCodes;
        }
        return $this;
    }
    /**
     * Get MaxConnections value
     * @return int|null
     */
    public function getMaxConnections()
    {
        return $this->MaxConnections;
    }
    /**
     * Set MaxConnections value
     * @param int $maxConnections
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setMaxConnections($maxConnections = null)
    {
        // validation for constraint: int
        if (!is_null($maxConnections) && !is_numeric($maxConnections)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxConnections)), __LINE__);
        }
        $this->MaxConnections = $maxConnections;
        return $this;
    }
    /**
     * Get NegoFareType value
     * @return string|null
     */
    public function getNegoFareType()
    {
        return $this->NegoFareType;
    }
    /**
     * Set NegoFareType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $negoFareType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setNegoFareType($negoFareType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($negoFareType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $negoFareType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
        }
        $this->NegoFareType = $negoFareType;
        return $this;
    }
    /**
     * Get NetFareDatabaseCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getNetFareDatabaseCodes()
    {
        return isset($this->NetFareDatabaseCodes) ? $this->NetFareDatabaseCodes : null;
    }
    /**
     * Set NetFareDatabaseCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareDatabaseCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setNetFareDatabaseCodes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareDatabaseCodes = null)
    {
        if (is_null($netFareDatabaseCodes) || (is_array($netFareDatabaseCodes) && empty($netFareDatabaseCodes))) {
            unset($this->NetFareDatabaseCodes);
        } else {
            $this->NetFareDatabaseCodes = $netFareDatabaseCodes;
        }
        return $this;
    }
    /**
     * Get NumberOfCharterFares value
     * @return int|null
     */
    public function getNumberOfCharterFares()
    {
        return $this->NumberOfCharterFares;
    }
    /**
     * Set NumberOfCharterFares value
     * @param int $numberOfCharterFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setNumberOfCharterFares($numberOfCharterFares = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfCharterFares) && !is_numeric($numberOfCharterFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfCharterFares)), __LINE__);
        }
        $this->NumberOfCharterFares = $numberOfCharterFares;
        return $this;
    }
    /**
     * Get NumberOfNetFares value
     * @return int|null
     */
    public function getNumberOfNetFares()
    {
        return $this->NumberOfNetFares;
    }
    /**
     * Set NumberOfNetFares value
     * @param int $numberOfNetFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setNumberOfNetFares($numberOfNetFares = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfNetFares) && !is_numeric($numberOfNetFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfNetFares)), __LINE__);
        }
        $this->NumberOfNetFares = $numberOfNetFares;
        return $this;
    }
    /**
     * Get NumberOfNetSearchFares value
     * @return int|null
     */
    public function getNumberOfNetSearchFares()
    {
        return $this->NumberOfNetSearchFares;
    }
    /**
     * Set NumberOfNetSearchFares value
     * @param int $numberOfNetSearchFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setNumberOfNetSearchFares($numberOfNetSearchFares = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfNetSearchFares) && !is_numeric($numberOfNetSearchFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfNetSearchFares)), __LINE__);
        }
        $this->NumberOfNetSearchFares = $numberOfNetSearchFares;
        return $this;
    }
    /**
     * Get NumberOfPubFares value
     * @return int|null
     */
    public function getNumberOfPubFares()
    {
        return $this->NumberOfPubFares;
    }
    /**
     * Set NumberOfPubFares value
     * @param int $numberOfPubFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setNumberOfPubFares($numberOfPubFares = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPubFares) && !is_numeric($numberOfPubFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPubFares)), __LINE__);
        }
        $this->NumberOfPubFares = $numberOfPubFares;
        return $this;
    }
    /**
     * Get NumberOfWebFares value
     * @return int|null
     */
    public function getNumberOfWebFares()
    {
        return $this->NumberOfWebFares;
    }
    /**
     * Set NumberOfWebFares value
     * @param int $numberOfWebFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setNumberOfWebFares($numberOfWebFares = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfWebFares) && !is_numeric($numberOfWebFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfWebFares)), __LINE__);
        }
        $this->NumberOfWebFares = $numberOfWebFares;
        return $this;
    }
    /**
     * Get Origins value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getOrigins()
    {
        return isset($this->Origins) ? $this->Origins : null;
    }
    /**
     * Set Origins value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $origins
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setOrigins(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $origins = null)
    {
        if (is_null($origins) || (is_array($origins) && empty($origins))) {
            unset($this->Origins);
        } else {
            $this->Origins = $origins;
        }
        return $this;
    }
    /**
     * Get PercentageDatabaseCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getPercentageDatabaseCodes()
    {
        return isset($this->PercentageDatabaseCodes) ? $this->PercentageDatabaseCodes : null;
    }
    /**
     * Set PercentageDatabaseCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $percentageDatabaseCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setPercentageDatabaseCodes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $percentageDatabaseCodes = null)
    {
        if (is_null($percentageDatabaseCodes) || (is_array($percentageDatabaseCodes) && empty($percentageDatabaseCodes))) {
            unset($this->PercentageDatabaseCodes);
        } else {
            $this->PercentageDatabaseCodes = $percentageDatabaseCodes;
        }
        return $this;
    }
    /**
     * Get ReturnDirectFlightsOnly value
     * @return bool|null
     */
    public function getReturnDirectFlightsOnly()
    {
        return $this->ReturnDirectFlightsOnly;
    }
    /**
     * Set ReturnDirectFlightsOnly value
     * @param bool $returnDirectFlightsOnly
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setReturnDirectFlightsOnly($returnDirectFlightsOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnDirectFlightsOnly) && !is_bool($returnDirectFlightsOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnDirectFlightsOnly)), __LINE__);
        }
        $this->ReturnDirectFlightsOnly = $returnDirectFlightsOnly;
        return $this;
    }
    /**
     * Get SubChannel value
     * @return string|null
     */
    public function getSubChannel()
    {
        return $this->SubChannel;
    }
    /**
     * Set SubChannel value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SubChannelTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SubChannelTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $subChannel
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setSubChannel($subChannel = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SubChannelTypeEnum::valueIsValid($subChannel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $subChannel, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SubChannelTypeEnum::getValidValues())), __LINE__);
        }
        $this->SubChannel = $subChannel;
        return $this;
    }
    /**
     * Get XPSearchConcurrentAvails value
     * @return int|null
     */
    public function getXPSearchConcurrentAvails()
    {
        return $this->XPSearchConcurrentAvails;
    }
    /**
     * Set XPSearchConcurrentAvails value
     * @param int $xPSearchConcurrentAvails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setXPSearchConcurrentAvails($xPSearchConcurrentAvails = null)
    {
        // validation for constraint: int
        if (!is_null($xPSearchConcurrentAvails) && !is_numeric($xPSearchConcurrentAvails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($xPSearchConcurrentAvails)), __LINE__);
        }
        $this->XPSearchConcurrentAvails = $xPSearchConcurrentAvails;
        return $this;
    }
    /**
     * Get XPSearchMaxConnections value
     * @return int|null
     */
    public function getXPSearchMaxConnections()
    {
        return $this->XPSearchMaxConnections;
    }
    /**
     * Set XPSearchMaxConnections value
     * @param int $xPSearchMaxConnections
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setXPSearchMaxConnections($xPSearchMaxConnections = null)
    {
        // validation for constraint: int
        if (!is_null($xPSearchMaxConnections) && !is_numeric($xPSearchMaxConnections)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($xPSearchMaxConnections)), __LINE__);
        }
        $this->XPSearchMaxConnections = $xPSearchMaxConnections;
        return $this;
    }
    /**
     * Get XPSearchMaxMoveDowns value
     * @return int|null
     */
    public function getXPSearchMaxMoveDowns()
    {
        return $this->XPSearchMaxMoveDowns;
    }
    /**
     * Set XPSearchMaxMoveDowns value
     * @param int $xPSearchMaxMoveDowns
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setXPSearchMaxMoveDowns($xPSearchMaxMoveDowns = null)
    {
        // validation for constraint: int
        if (!is_null($xPSearchMaxMoveDowns) && !is_numeric($xPSearchMaxMoveDowns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($xPSearchMaxMoveDowns)), __LINE__);
        }
        $this->XPSearchMaxMoveDowns = $xPSearchMaxMoveDowns;
        return $this;
    }
    /**
     * Get XPSearchMode value
     * @return string|null
     */
    public function getXPSearchMode()
    {
        return $this->XPSearchMode;
    }
    /**
     * Set XPSearchMode value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\XPSearchModeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\XPSearchModeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $xPSearchMode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
     */
    public function setXPSearchMode($xPSearchMode = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\XPSearchModeEnum::valueIsValid($xPSearchMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $xPSearchMode, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\XPSearchModeEnum::getValidValues())), __LINE__);
        }
        $this->XPSearchMode = $xPSearchMode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData
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
