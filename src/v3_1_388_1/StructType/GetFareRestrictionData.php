<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFareRestrictionData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetFareRestrictionData
 * @subpackage Structs
 */
class GetFareRestrictionData extends AbstractStructBase
{
    /**
     * The AllowEmptySupplier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowEmptySupplier;
    /**
     * The AllowGetFare4CorpCodeCarriers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowGetFare4CorpCodeCarriers;
    /**
     * The AllowedGetFareQuoteType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AllowedGetFareQuoteType;
    /**
     * The DefaultMaxConnections
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DefaultMaxConnections;
    /**
     * The MaxCorpCodeRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxCorpCodeRequests;
    /**
     * The MaximumAlternatives
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximumAlternatives;
    /**
     * The MaximumCRS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximumCRS;
    /**
     * The MaximumFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximumFares;
    /**
     * The MaximumSearchNetFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximumSearchNetFares;
    /**
     * The MaximumSimultaneousAvails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximumSimultaneousAvails;
    /**
     * The MaximumTimeout
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximumTimeout;
    /**
     * The MaximumWebFareArrivalSearchRadius
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximumWebFareArrivalSearchRadius;
    /**
     * The MaximumWebFareDepartureSearchRadius
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximumWebFareDepartureSearchRadius;
    /**
     * The MinimumDepartureCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimumDepartureCodes;
    /**
     * The NumberOfNetFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfNetFares;
    /**
     * The NumberOfPublishedFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPublishedFares;
    /**
     * The NumberOfSupplier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfSupplier;
    /**
     * The ToleranceMaxCheckAhead
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ToleranceMaxCheckAhead;
    /**
     * The ToleranceMaxCheckBack
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ToleranceMaxCheckBack;
    /**
     * Constructor method for GetFareRestrictionData
     * @uses GetFareRestrictionData::setAllowEmptySupplier()
     * @uses GetFareRestrictionData::setAllowGetFare4CorpCodeCarriers()
     * @uses GetFareRestrictionData::setAllowedGetFareQuoteType()
     * @uses GetFareRestrictionData::setDefaultMaxConnections()
     * @uses GetFareRestrictionData::setMaxCorpCodeRequests()
     * @uses GetFareRestrictionData::setMaximumAlternatives()
     * @uses GetFareRestrictionData::setMaximumCRS()
     * @uses GetFareRestrictionData::setMaximumFares()
     * @uses GetFareRestrictionData::setMaximumSearchNetFares()
     * @uses GetFareRestrictionData::setMaximumSimultaneousAvails()
     * @uses GetFareRestrictionData::setMaximumTimeout()
     * @uses GetFareRestrictionData::setMaximumWebFareArrivalSearchRadius()
     * @uses GetFareRestrictionData::setMaximumWebFareDepartureSearchRadius()
     * @uses GetFareRestrictionData::setMinimumDepartureCodes()
     * @uses GetFareRestrictionData::setNumberOfNetFares()
     * @uses GetFareRestrictionData::setNumberOfPublishedFares()
     * @uses GetFareRestrictionData::setNumberOfSupplier()
     * @uses GetFareRestrictionData::setToleranceMaxCheckAhead()
     * @uses GetFareRestrictionData::setToleranceMaxCheckBack()
     * @param bool $allowEmptySupplier
     * @param bool $allowGetFare4CorpCodeCarriers
     * @param string $allowedGetFareQuoteType
     * @param int $defaultMaxConnections
     * @param int $maxCorpCodeRequests
     * @param int $maximumAlternatives
     * @param int $maximumCRS
     * @param int $maximumFares
     * @param int $maximumSearchNetFares
     * @param int $maximumSimultaneousAvails
     * @param int $maximumTimeout
     * @param int $maximumWebFareArrivalSearchRadius
     * @param int $maximumWebFareDepartureSearchRadius
     * @param int $minimumDepartureCodes
     * @param int $numberOfNetFares
     * @param int $numberOfPublishedFares
     * @param int $numberOfSupplier
     * @param int $toleranceMaxCheckAhead
     * @param int $toleranceMaxCheckBack
     */
    public function __construct($allowEmptySupplier = null, $allowGetFare4CorpCodeCarriers = null, $allowedGetFareQuoteType = null, $defaultMaxConnections = null, $maxCorpCodeRequests = null, $maximumAlternatives = null, $maximumCRS = null, $maximumFares = null, $maximumSearchNetFares = null, $maximumSimultaneousAvails = null, $maximumTimeout = null, $maximumWebFareArrivalSearchRadius = null, $maximumWebFareDepartureSearchRadius = null, $minimumDepartureCodes = null, $numberOfNetFares = null, $numberOfPublishedFares = null, $numberOfSupplier = null, $toleranceMaxCheckAhead = null, $toleranceMaxCheckBack = null)
    {
        $this
            ->setAllowEmptySupplier($allowEmptySupplier)
            ->setAllowGetFare4CorpCodeCarriers($allowGetFare4CorpCodeCarriers)
            ->setAllowedGetFareQuoteType($allowedGetFareQuoteType)
            ->setDefaultMaxConnections($defaultMaxConnections)
            ->setMaxCorpCodeRequests($maxCorpCodeRequests)
            ->setMaximumAlternatives($maximumAlternatives)
            ->setMaximumCRS($maximumCRS)
            ->setMaximumFares($maximumFares)
            ->setMaximumSearchNetFares($maximumSearchNetFares)
            ->setMaximumSimultaneousAvails($maximumSimultaneousAvails)
            ->setMaximumTimeout($maximumTimeout)
            ->setMaximumWebFareArrivalSearchRadius($maximumWebFareArrivalSearchRadius)
            ->setMaximumWebFareDepartureSearchRadius($maximumWebFareDepartureSearchRadius)
            ->setMinimumDepartureCodes($minimumDepartureCodes)
            ->setNumberOfNetFares($numberOfNetFares)
            ->setNumberOfPublishedFares($numberOfPublishedFares)
            ->setNumberOfSupplier($numberOfSupplier)
            ->setToleranceMaxCheckAhead($toleranceMaxCheckAhead)
            ->setToleranceMaxCheckBack($toleranceMaxCheckBack);
    }
    /**
     * Get AllowEmptySupplier value
     * @return bool|null
     */
    public function getAllowEmptySupplier()
    {
        return $this->AllowEmptySupplier;
    }
    /**
     * Set AllowEmptySupplier value
     * @param bool $allowEmptySupplier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setAllowEmptySupplier($allowEmptySupplier = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowEmptySupplier) && !is_bool($allowEmptySupplier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowEmptySupplier)), __LINE__);
        }
        $this->AllowEmptySupplier = $allowEmptySupplier;
        return $this;
    }
    /**
     * Get AllowGetFare4CorpCodeCarriers value
     * @return bool|null
     */
    public function getAllowGetFare4CorpCodeCarriers()
    {
        return $this->AllowGetFare4CorpCodeCarriers;
    }
    /**
     * Set AllowGetFare4CorpCodeCarriers value
     * @param bool $allowGetFare4CorpCodeCarriers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setAllowGetFare4CorpCodeCarriers($allowGetFare4CorpCodeCarriers = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowGetFare4CorpCodeCarriers) && !is_bool($allowGetFare4CorpCodeCarriers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowGetFare4CorpCodeCarriers)), __LINE__);
        }
        $this->AllowGetFare4CorpCodeCarriers = $allowGetFare4CorpCodeCarriers;
        return $this;
    }
    /**
     * Get AllowedGetFareQuoteType value
     * @return string|null
     */
    public function getAllowedGetFareQuoteType()
    {
        return $this->AllowedGetFareQuoteType;
    }
    /**
     * Set AllowedGetFareQuoteType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PermittedFareTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PermittedFareTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $allowedGetFareQuoteType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setAllowedGetFareQuoteType($allowedGetFareQuoteType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PermittedFareTypeEnum::valueIsValid($allowedGetFareQuoteType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $allowedGetFareQuoteType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PermittedFareTypeEnum::getValidValues())), __LINE__);
        }
        $this->AllowedGetFareQuoteType = $allowedGetFareQuoteType;
        return $this;
    }
    /**
     * Get DefaultMaxConnections value
     * @return int|null
     */
    public function getDefaultMaxConnections()
    {
        return $this->DefaultMaxConnections;
    }
    /**
     * Set DefaultMaxConnections value
     * @param int $defaultMaxConnections
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setDefaultMaxConnections($defaultMaxConnections = null)
    {
        // validation for constraint: int
        if (!is_null($defaultMaxConnections) && !is_numeric($defaultMaxConnections)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($defaultMaxConnections)), __LINE__);
        }
        $this->DefaultMaxConnections = $defaultMaxConnections;
        return $this;
    }
    /**
     * Get MaxCorpCodeRequests value
     * @return int|null
     */
    public function getMaxCorpCodeRequests()
    {
        return $this->MaxCorpCodeRequests;
    }
    /**
     * Set MaxCorpCodeRequests value
     * @param int $maxCorpCodeRequests
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setMaxCorpCodeRequests($maxCorpCodeRequests = null)
    {
        // validation for constraint: int
        if (!is_null($maxCorpCodeRequests) && !is_numeric($maxCorpCodeRequests)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxCorpCodeRequests)), __LINE__);
        }
        $this->MaxCorpCodeRequests = $maxCorpCodeRequests;
        return $this;
    }
    /**
     * Get MaximumAlternatives value
     * @return int|null
     */
    public function getMaximumAlternatives()
    {
        return $this->MaximumAlternatives;
    }
    /**
     * Set MaximumAlternatives value
     * @param int $maximumAlternatives
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setMaximumAlternatives($maximumAlternatives = null)
    {
        // validation for constraint: int
        if (!is_null($maximumAlternatives) && !is_numeric($maximumAlternatives)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumAlternatives)), __LINE__);
        }
        $this->MaximumAlternatives = $maximumAlternatives;
        return $this;
    }
    /**
     * Get MaximumCRS value
     * @return int|null
     */
    public function getMaximumCRS()
    {
        return $this->MaximumCRS;
    }
    /**
     * Set MaximumCRS value
     * @param int $maximumCRS
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setMaximumCRS($maximumCRS = null)
    {
        // validation for constraint: int
        if (!is_null($maximumCRS) && !is_numeric($maximumCRS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumCRS)), __LINE__);
        }
        $this->MaximumCRS = $maximumCRS;
        return $this;
    }
    /**
     * Get MaximumFares value
     * @return int|null
     */
    public function getMaximumFares()
    {
        return $this->MaximumFares;
    }
    /**
     * Set MaximumFares value
     * @param int $maximumFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setMaximumFares($maximumFares = null)
    {
        // validation for constraint: int
        if (!is_null($maximumFares) && !is_numeric($maximumFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumFares)), __LINE__);
        }
        $this->MaximumFares = $maximumFares;
        return $this;
    }
    /**
     * Get MaximumSearchNetFares value
     * @return int|null
     */
    public function getMaximumSearchNetFares()
    {
        return $this->MaximumSearchNetFares;
    }
    /**
     * Set MaximumSearchNetFares value
     * @param int $maximumSearchNetFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setMaximumSearchNetFares($maximumSearchNetFares = null)
    {
        // validation for constraint: int
        if (!is_null($maximumSearchNetFares) && !is_numeric($maximumSearchNetFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumSearchNetFares)), __LINE__);
        }
        $this->MaximumSearchNetFares = $maximumSearchNetFares;
        return $this;
    }
    /**
     * Get MaximumSimultaneousAvails value
     * @return int|null
     */
    public function getMaximumSimultaneousAvails()
    {
        return $this->MaximumSimultaneousAvails;
    }
    /**
     * Set MaximumSimultaneousAvails value
     * @param int $maximumSimultaneousAvails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setMaximumSimultaneousAvails($maximumSimultaneousAvails = null)
    {
        // validation for constraint: int
        if (!is_null($maximumSimultaneousAvails) && !is_numeric($maximumSimultaneousAvails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumSimultaneousAvails)), __LINE__);
        }
        $this->MaximumSimultaneousAvails = $maximumSimultaneousAvails;
        return $this;
    }
    /**
     * Get MaximumTimeout value
     * @return int|null
     */
    public function getMaximumTimeout()
    {
        return $this->MaximumTimeout;
    }
    /**
     * Set MaximumTimeout value
     * @param int $maximumTimeout
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setMaximumTimeout($maximumTimeout = null)
    {
        // validation for constraint: int
        if (!is_null($maximumTimeout) && !is_numeric($maximumTimeout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumTimeout)), __LINE__);
        }
        $this->MaximumTimeout = $maximumTimeout;
        return $this;
    }
    /**
     * Get MaximumWebFareArrivalSearchRadius value
     * @return int|null
     */
    public function getMaximumWebFareArrivalSearchRadius()
    {
        return $this->MaximumWebFareArrivalSearchRadius;
    }
    /**
     * Set MaximumWebFareArrivalSearchRadius value
     * @param int $maximumWebFareArrivalSearchRadius
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setMaximumWebFareArrivalSearchRadius($maximumWebFareArrivalSearchRadius = null)
    {
        // validation for constraint: int
        if (!is_null($maximumWebFareArrivalSearchRadius) && !is_numeric($maximumWebFareArrivalSearchRadius)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumWebFareArrivalSearchRadius)), __LINE__);
        }
        $this->MaximumWebFareArrivalSearchRadius = $maximumWebFareArrivalSearchRadius;
        return $this;
    }
    /**
     * Get MaximumWebFareDepartureSearchRadius value
     * @return int|null
     */
    public function getMaximumWebFareDepartureSearchRadius()
    {
        return $this->MaximumWebFareDepartureSearchRadius;
    }
    /**
     * Set MaximumWebFareDepartureSearchRadius value
     * @param int $maximumWebFareDepartureSearchRadius
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setMaximumWebFareDepartureSearchRadius($maximumWebFareDepartureSearchRadius = null)
    {
        // validation for constraint: int
        if (!is_null($maximumWebFareDepartureSearchRadius) && !is_numeric($maximumWebFareDepartureSearchRadius)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumWebFareDepartureSearchRadius)), __LINE__);
        }
        $this->MaximumWebFareDepartureSearchRadius = $maximumWebFareDepartureSearchRadius;
        return $this;
    }
    /**
     * Get MinimumDepartureCodes value
     * @return int|null
     */
    public function getMinimumDepartureCodes()
    {
        return $this->MinimumDepartureCodes;
    }
    /**
     * Set MinimumDepartureCodes value
     * @param int $minimumDepartureCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setMinimumDepartureCodes($minimumDepartureCodes = null)
    {
        // validation for constraint: int
        if (!is_null($minimumDepartureCodes) && !is_numeric($minimumDepartureCodes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimumDepartureCodes)), __LINE__);
        }
        $this->MinimumDepartureCodes = $minimumDepartureCodes;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
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
     * Get NumberOfPublishedFares value
     * @return int|null
     */
    public function getNumberOfPublishedFares()
    {
        return $this->NumberOfPublishedFares;
    }
    /**
     * Set NumberOfPublishedFares value
     * @param int $numberOfPublishedFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setNumberOfPublishedFares($numberOfPublishedFares = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPublishedFares) && !is_numeric($numberOfPublishedFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPublishedFares)), __LINE__);
        }
        $this->NumberOfPublishedFares = $numberOfPublishedFares;
        return $this;
    }
    /**
     * Get NumberOfSupplier value
     * @return int|null
     */
    public function getNumberOfSupplier()
    {
        return $this->NumberOfSupplier;
    }
    /**
     * Set NumberOfSupplier value
     * @param int $numberOfSupplier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setNumberOfSupplier($numberOfSupplier = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfSupplier) && !is_numeric($numberOfSupplier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfSupplier)), __LINE__);
        }
        $this->NumberOfSupplier = $numberOfSupplier;
        return $this;
    }
    /**
     * Get ToleranceMaxCheckAhead value
     * @return int|null
     */
    public function getToleranceMaxCheckAhead()
    {
        return $this->ToleranceMaxCheckAhead;
    }
    /**
     * Set ToleranceMaxCheckAhead value
     * @param int $toleranceMaxCheckAhead
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setToleranceMaxCheckAhead($toleranceMaxCheckAhead = null)
    {
        // validation for constraint: int
        if (!is_null($toleranceMaxCheckAhead) && !is_numeric($toleranceMaxCheckAhead)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($toleranceMaxCheckAhead)), __LINE__);
        }
        $this->ToleranceMaxCheckAhead = $toleranceMaxCheckAhead;
        return $this;
    }
    /**
     * Get ToleranceMaxCheckBack value
     * @return int|null
     */
    public function getToleranceMaxCheckBack()
    {
        return $this->ToleranceMaxCheckBack;
    }
    /**
     * Set ToleranceMaxCheckBack value
     * @param int $toleranceMaxCheckBack
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public function setToleranceMaxCheckBack($toleranceMaxCheckBack = null)
    {
        // validation for constraint: int
        if (!is_null($toleranceMaxCheckBack) && !is_numeric($toleranceMaxCheckBack)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($toleranceMaxCheckBack)), __LINE__);
        }
        $this->ToleranceMaxCheckBack = $toleranceMaxCheckBack;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
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
