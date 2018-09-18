<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRequestNet StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareRequestNet
 * @subpackage Structs
 */
class FareRequestNet extends AbstractStructBase
{
    /**
     * The AllowClassMix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowClassMix;
    /**
     * The AllowWaitList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowWaitList;
    /**
     * The AvailabilitySearchMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AvailabilitySearchMode;
    /**
     * The CalcModel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CalcModel;
    /**
     * The CheckAvailability
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CheckAvailability;
    /**
     * The CheckTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CheckTax;
    /**
     * The ConcurrentAvailabilities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ConcurrentAvailabilities;
    /**
     * The DatabaseRecordsets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $DatabaseRecordsets;
    /**
     * The DeterminePointOfTurnaround
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DeterminePointOfTurnaround;
    /**
     * The EnhancedFeederSearchConfig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearch
     */
    public $EnhancedFeederSearchConfig;
    /**
     * The FillWithPublishedFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FillWithPublishedFares;
    /**
     * The MatchCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MatchCodes;
    /**
     * The MaximumConnections
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximumConnections;
    /**
     * The MaximumNumberOfNetFares
     * @var int
     */
    public $MaximumNumberOfNetFares;
    /**
     * The NetFareCodes
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $NetFareCodes;
    /**
     * The NumberOfNetFares
     * @var int
     */
    public $NumberOfNetFares;
    /**
     * The ReturnFromPathfinder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnFromPathfinder;
    /**
     * The ReturnNonAvailFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReturnNonAvailFares;
    /**
     * The ReturnPartialAvailableFlights
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnPartialAvailableFlights;
    /**
     * The SplitConnectionsToFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SplitConnectionsToFares;
    /**
     * The StartFareNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $StartFareNumber;
    /**
     * The TariffSubType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffSubType;
    /**
     * The TariffType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffType;
    /**
     * The UserDefinedFieldDetailLevel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UserDefinedFieldDetailLevel;
    /**
     * The XtremePricerConfig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricer
     */
    public $XtremePricerConfig;
    /**
     * Constructor method for FareRequestNet
     * @uses FareRequestNet::setAllowClassMix()
     * @uses FareRequestNet::setAllowWaitList()
     * @uses FareRequestNet::setAvailabilitySearchMode()
     * @uses FareRequestNet::setCalcModel()
     * @uses FareRequestNet::setCheckAvailability()
     * @uses FareRequestNet::setCheckTax()
     * @uses FareRequestNet::setConcurrentAvailabilities()
     * @uses FareRequestNet::setDatabaseRecordsets()
     * @uses FareRequestNet::setDeterminePointOfTurnaround()
     * @uses FareRequestNet::setEnhancedFeederSearchConfig()
     * @uses FareRequestNet::setFillWithPublishedFares()
     * @uses FareRequestNet::setMatchCodes()
     * @uses FareRequestNet::setMaximumConnections()
     * @uses FareRequestNet::setMaximumNumberOfNetFares()
     * @uses FareRequestNet::setNetFareCodes()
     * @uses FareRequestNet::setNumberOfNetFares()
     * @uses FareRequestNet::setReturnFromPathfinder()
     * @uses FareRequestNet::setReturnNonAvailFares()
     * @uses FareRequestNet::setReturnPartialAvailableFlights()
     * @uses FareRequestNet::setSplitConnectionsToFares()
     * @uses FareRequestNet::setStartFareNumber()
     * @uses FareRequestNet::setTariffSubType()
     * @uses FareRequestNet::setTariffType()
     * @uses FareRequestNet::setUserDefinedFieldDetailLevel()
     * @uses FareRequestNet::setXtremePricerConfig()
     * @param bool $allowClassMix
     * @param bool $allowWaitList
     * @param string $availabilitySearchMode
     * @param string $calcModel
     * @param string $checkAvailability
     * @param string $checkTax
     * @param int $concurrentAvailabilities
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $databaseRecordsets
     * @param int $determinePointOfTurnaround
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearch $enhancedFeederSearchConfig
     * @param bool $fillWithPublishedFares
     * @param string $matchCodes
     * @param int $maximumConnections
     * @param int $maximumNumberOfNetFares
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareCodes
     * @param int $numberOfNetFares
     * @param bool $returnFromPathfinder
     * @param string $returnNonAvailFares
     * @param bool $returnPartialAvailableFlights
     * @param string $splitConnectionsToFares
     * @param int $startFareNumber
     * @param string $tariffSubType
     * @param string $tariffType
     * @param string $userDefinedFieldDetailLevel
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricer $xtremePricerConfig
     */
    public function __construct($allowClassMix = null, $allowWaitList = null, $availabilitySearchMode = null, $calcModel = null, $checkAvailability = null, $checkTax = null, $concurrentAvailabilities = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $databaseRecordsets = null, $determinePointOfTurnaround = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearch $enhancedFeederSearchConfig = null, $fillWithPublishedFares = null, $matchCodes = null, $maximumConnections = null, $maximumNumberOfNetFares = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareCodes = null, $numberOfNetFares = null, $returnFromPathfinder = null, $returnNonAvailFares = null, $returnPartialAvailableFlights = null, $splitConnectionsToFares = null, $startFareNumber = null, $tariffSubType = null, $tariffType = null, $userDefinedFieldDetailLevel = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricer $xtremePricerConfig = null)
    {
        $this
            ->setAllowClassMix($allowClassMix)
            ->setAllowWaitList($allowWaitList)
            ->setAvailabilitySearchMode($availabilitySearchMode)
            ->setCalcModel($calcModel)
            ->setCheckAvailability($checkAvailability)
            ->setCheckTax($checkTax)
            ->setConcurrentAvailabilities($concurrentAvailabilities)
            ->setDatabaseRecordsets($databaseRecordsets)
            ->setDeterminePointOfTurnaround($determinePointOfTurnaround)
            ->setEnhancedFeederSearchConfig($enhancedFeederSearchConfig)
            ->setFillWithPublishedFares($fillWithPublishedFares)
            ->setMatchCodes($matchCodes)
            ->setMaximumConnections($maximumConnections)
            ->setMaximumNumberOfNetFares($maximumNumberOfNetFares)
            ->setNetFareCodes($netFareCodes)
            ->setNumberOfNetFares($numberOfNetFares)
            ->setReturnFromPathfinder($returnFromPathfinder)
            ->setReturnNonAvailFares($returnNonAvailFares)
            ->setReturnPartialAvailableFlights($returnPartialAvailableFlights)
            ->setSplitConnectionsToFares($splitConnectionsToFares)
            ->setStartFareNumber($startFareNumber)
            ->setTariffSubType($tariffSubType)
            ->setTariffType($tariffType)
            ->setUserDefinedFieldDetailLevel($userDefinedFieldDetailLevel)
            ->setXtremePricerConfig($xtremePricerConfig);
    }
    /**
     * Get AllowClassMix value
     * @return bool|null
     */
    public function getAllowClassMix()
    {
        return $this->AllowClassMix;
    }
    /**
     * Set AllowClassMix value
     * @param bool $allowClassMix
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setAllowClassMix($allowClassMix = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowClassMix) && !is_bool($allowClassMix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowClassMix)), __LINE__);
        }
        $this->AllowClassMix = $allowClassMix;
        return $this;
    }
    /**
     * Get AllowWaitList value
     * @return bool|null
     */
    public function getAllowWaitList()
    {
        return $this->AllowWaitList;
    }
    /**
     * Set AllowWaitList value
     * @param bool $allowWaitList
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setAllowWaitList($allowWaitList = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowWaitList) && !is_bool($allowWaitList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowWaitList)), __LINE__);
        }
        $this->AllowWaitList = $allowWaitList;
        return $this;
    }
    /**
     * Get AvailabilitySearchMode value
     * @return string|null
     */
    public function getAvailabilitySearchMode()
    {
        return $this->AvailabilitySearchMode;
    }
    /**
     * Set AvailabilitySearchMode value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AvailabilitySearchModeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AvailabilitySearchModeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $availabilitySearchMode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setAvailabilitySearchMode($availabilitySearchMode = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AvailabilitySearchModeEnum::valueIsValid($availabilitySearchMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $availabilitySearchMode, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AvailabilitySearchModeEnum::getValidValues())), __LINE__);
        }
        $this->AvailabilitySearchMode = $availabilitySearchMode;
        return $this;
    }
    /**
     * Get CalcModel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCalcModel()
    {
        return isset($this->CalcModel) ? $this->CalcModel : null;
    }
    /**
     * Set CalcModel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $calcModel
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setCalcModel($calcModel = null)
    {
        // validation for constraint: string
        if (!is_null($calcModel) && !is_string($calcModel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calcModel)), __LINE__);
        }
        if (is_null($calcModel) || (is_array($calcModel) && empty($calcModel))) {
            unset($this->CalcModel);
        } else {
            $this->CalcModel = $calcModel;
        }
        return $this;
    }
    /**
     * Get CheckAvailability value
     * @return string|null
     */
    public function getCheckAvailability()
    {
        return $this->CheckAvailability;
    }
    /**
     * Set CheckAvailability value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckAvailabilityTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckAvailabilityTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkAvailability
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setCheckAvailability($checkAvailability = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckAvailabilityTypeEnum::valueIsValid($checkAvailability)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $checkAvailability, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckAvailabilityTypeEnum::getValidValues())), __LINE__);
        }
        $this->CheckAvailability = $checkAvailability;
        return $this;
    }
    /**
     * Get CheckTax value
     * @return string|null
     */
    public function getCheckTax()
    {
        return $this->CheckTax;
    }
    /**
     * Set CheckTax value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckTaxEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckTaxEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkTax
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setCheckTax($checkTax = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckTaxEnum::valueIsValid($checkTax)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $checkTax, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckTaxEnum::getValidValues())), __LINE__);
        }
        $this->CheckTax = $checkTax;
        return $this;
    }
    /**
     * Get ConcurrentAvailabilities value
     * @return int|null
     */
    public function getConcurrentAvailabilities()
    {
        return $this->ConcurrentAvailabilities;
    }
    /**
     * Set ConcurrentAvailabilities value
     * @param int $concurrentAvailabilities
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setConcurrentAvailabilities($concurrentAvailabilities = null)
    {
        // validation for constraint: int
        if (!is_null($concurrentAvailabilities) && !is_numeric($concurrentAvailabilities)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($concurrentAvailabilities)), __LINE__);
        }
        $this->ConcurrentAvailabilities = $concurrentAvailabilities;
        return $this;
    }
    /**
     * Get DatabaseRecordsets value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getDatabaseRecordsets()
    {
        return isset($this->DatabaseRecordsets) ? $this->DatabaseRecordsets : null;
    }
    /**
     * Set DatabaseRecordsets value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $databaseRecordsets
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setDatabaseRecordsets(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $databaseRecordsets = null)
    {
        if (is_null($databaseRecordsets) || (is_array($databaseRecordsets) && empty($databaseRecordsets))) {
            unset($this->DatabaseRecordsets);
        } else {
            $this->DatabaseRecordsets = $databaseRecordsets;
        }
        return $this;
    }
    /**
     * Get DeterminePointOfTurnaround value
     * @return int|null
     */
    public function getDeterminePointOfTurnaround()
    {
        return $this->DeterminePointOfTurnaround;
    }
    /**
     * Set DeterminePointOfTurnaround value
     * @param int $determinePointOfTurnaround
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setDeterminePointOfTurnaround($determinePointOfTurnaround = null)
    {
        // validation for constraint: int
        if (!is_null($determinePointOfTurnaround) && !is_numeric($determinePointOfTurnaround)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($determinePointOfTurnaround)), __LINE__);
        }
        $this->DeterminePointOfTurnaround = $determinePointOfTurnaround;
        return $this;
    }
    /**
     * Get EnhancedFeederSearchConfig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearch|null
     */
    public function getEnhancedFeederSearchConfig()
    {
        return isset($this->EnhancedFeederSearchConfig) ? $this->EnhancedFeederSearchConfig : null;
    }
    /**
     * Set EnhancedFeederSearchConfig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearch $enhancedFeederSearchConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setEnhancedFeederSearchConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearch $enhancedFeederSearchConfig = null)
    {
        if (is_null($enhancedFeederSearchConfig) || (is_array($enhancedFeederSearchConfig) && empty($enhancedFeederSearchConfig))) {
            unset($this->EnhancedFeederSearchConfig);
        } else {
            $this->EnhancedFeederSearchConfig = $enhancedFeederSearchConfig;
        }
        return $this;
    }
    /**
     * Get FillWithPublishedFares value
     * @return bool|null
     */
    public function getFillWithPublishedFares()
    {
        return $this->FillWithPublishedFares;
    }
    /**
     * Set FillWithPublishedFares value
     * @param bool $fillWithPublishedFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setFillWithPublishedFares($fillWithPublishedFares = null)
    {
        // validation for constraint: boolean
        if (!is_null($fillWithPublishedFares) && !is_bool($fillWithPublishedFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fillWithPublishedFares)), __LINE__);
        }
        $this->FillWithPublishedFares = $fillWithPublishedFares;
        return $this;
    }
    /**
     * Get MatchCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMatchCodes()
    {
        return isset($this->MatchCodes) ? $this->MatchCodes : null;
    }
    /**
     * Set MatchCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $matchCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setMatchCodes($matchCodes = null)
    {
        // validation for constraint: string
        if (!is_null($matchCodes) && !is_string($matchCodes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($matchCodes)), __LINE__);
        }
        if (is_null($matchCodes) || (is_array($matchCodes) && empty($matchCodes))) {
            unset($this->MatchCodes);
        } else {
            $this->MatchCodes = $matchCodes;
        }
        return $this;
    }
    /**
     * Get MaximumConnections value
     * @return int|null
     */
    public function getMaximumConnections()
    {
        return $this->MaximumConnections;
    }
    /**
     * Set MaximumConnections value
     * @param int $maximumConnections
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setMaximumConnections($maximumConnections = null)
    {
        // validation for constraint: int
        if (!is_null($maximumConnections) && !is_numeric($maximumConnections)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumConnections)), __LINE__);
        }
        $this->MaximumConnections = $maximumConnections;
        return $this;
    }
    /**
     * Get MaximumNumberOfNetFares value
     * @return int|null
     */
    public function getMaximumNumberOfNetFares()
    {
        return $this->MaximumNumberOfNetFares;
    }
    /**
     * Set MaximumNumberOfNetFares value
     * @param int $maximumNumberOfNetFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setMaximumNumberOfNetFares($maximumNumberOfNetFares = null)
    {
        // validation for constraint: int
        if (!is_null($maximumNumberOfNetFares) && !is_numeric($maximumNumberOfNetFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumNumberOfNetFares)), __LINE__);
        }
        $this->MaximumNumberOfNetFares = $maximumNumberOfNetFares;
        return $this;
    }
    /**
     * Get NetFareCodes value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getNetFareCodes()
    {
        return $this->NetFareCodes;
    }
    /**
     * Set NetFareCodes value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setNetFareCodes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareCodes = null)
    {
        $this->NetFareCodes = $netFareCodes;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
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
     * Get ReturnFromPathfinder value
     * @return bool|null
     */
    public function getReturnFromPathfinder()
    {
        return $this->ReturnFromPathfinder;
    }
    /**
     * Set ReturnFromPathfinder value
     * @param bool $returnFromPathfinder
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setReturnFromPathfinder($returnFromPathfinder = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnFromPathfinder) && !is_bool($returnFromPathfinder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnFromPathfinder)), __LINE__);
        }
        $this->ReturnFromPathfinder = $returnFromPathfinder;
        return $this;
    }
    /**
     * Get ReturnNonAvailFares value
     * @return string|null
     */
    public function getReturnNonAvailFares()
    {
        return $this->ReturnNonAvailFares;
    }
    /**
     * Set ReturnNonAvailFares value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ReturnNonAvailFaresEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ReturnNonAvailFaresEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $returnNonAvailFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setReturnNonAvailFares($returnNonAvailFares = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ReturnNonAvailFaresEnum::valueIsValid($returnNonAvailFares)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $returnNonAvailFares, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ReturnNonAvailFaresEnum::getValidValues())), __LINE__);
        }
        $this->ReturnNonAvailFares = $returnNonAvailFares;
        return $this;
    }
    /**
     * Get ReturnPartialAvailableFlights value
     * @return bool|null
     */
    public function getReturnPartialAvailableFlights()
    {
        return $this->ReturnPartialAvailableFlights;
    }
    /**
     * Set ReturnPartialAvailableFlights value
     * @param bool $returnPartialAvailableFlights
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setReturnPartialAvailableFlights($returnPartialAvailableFlights = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnPartialAvailableFlights) && !is_bool($returnPartialAvailableFlights)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnPartialAvailableFlights)), __LINE__);
        }
        $this->ReturnPartialAvailableFlights = $returnPartialAvailableFlights;
        return $this;
    }
    /**
     * Get SplitConnectionsToFares value
     * @return string|null
     */
    public function getSplitConnectionsToFares()
    {
        return $this->SplitConnectionsToFares;
    }
    /**
     * Set SplitConnectionsToFares value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SplitConnectionToFareEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SplitConnectionToFareEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $splitConnectionsToFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setSplitConnectionsToFares($splitConnectionsToFares = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SplitConnectionToFareEnum::valueIsValid($splitConnectionsToFares)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $splitConnectionsToFares, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SplitConnectionToFareEnum::getValidValues())), __LINE__);
        }
        $this->SplitConnectionsToFares = $splitConnectionsToFares;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
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
     * Get TariffSubType value
     * @return string|null
     */
    public function getTariffSubType()
    {
        return $this->TariffSubType;
    }
    /**
     * Set TariffSubType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffSubTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffSubTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tariffSubType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setTariffSubType($tariffSubType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffSubTypeEnum::valueIsValid($tariffSubType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tariffSubType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffSubTypeEnum::getValidValues())), __LINE__);
        }
        $this->TariffSubType = $tariffSubType;
        return $this;
    }
    /**
     * Get TariffType value
     * @return string|null
     */
    public function getTariffType()
    {
        return $this->TariffType;
    }
    /**
     * Set TariffType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tariffType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setTariffType($tariffType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::valueIsValid($tariffType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tariffType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::getValidValues())), __LINE__);
        }
        $this->TariffType = $tariffType;
        return $this;
    }
    /**
     * Get UserDefinedFieldDetailLevel value
     * @return string|null
     */
    public function getUserDefinedFieldDetailLevel()
    {
        return $this->UserDefinedFieldDetailLevel;
    }
    /**
     * Set UserDefinedFieldDetailLevel value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\UserDefinedFieldDetailLevelEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\UserDefinedFieldDetailLevelEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $userDefinedFieldDetailLevel
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setUserDefinedFieldDetailLevel($userDefinedFieldDetailLevel = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\UserDefinedFieldDetailLevelEnum::valueIsValid($userDefinedFieldDetailLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $userDefinedFieldDetailLevel, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\UserDefinedFieldDetailLevelEnum::getValidValues())), __LINE__);
        }
        $this->UserDefinedFieldDetailLevel = $userDefinedFieldDetailLevel;
        return $this;
    }
    /**
     * Get XtremePricerConfig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricer|null
     */
    public function getXtremePricerConfig()
    {
        return isset($this->XtremePricerConfig) ? $this->XtremePricerConfig : null;
    }
    /**
     * Set XtremePricerConfig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricer $xtremePricerConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public function setXtremePricerConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricer $xtremePricerConfig = null)
    {
        if (is_null($xtremePricerConfig) || (is_array($xtremePricerConfig) && empty($xtremePricerConfig))) {
            unset($this->XtremePricerConfig);
        } else {
            $this->XtremePricerConfig = $xtremePricerConfig;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
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
