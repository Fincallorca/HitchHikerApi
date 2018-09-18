<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuoteResponseFare StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QuoteResponseFare
 * @subpackage Structs
 */
class QuoteResponseFare extends AbstractStructBase
{
    /**
     * The CancelationInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelation
     */
    public $CancelationInfo;
    /**
     * The ConsoCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ConsoCode;
    /**
     * The CorporateFareAccessCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CorporateFareAccessCode;
    /**
     * The ExchangeRates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseExchangeRate
     */
    public $ExchangeRates;
    /**
     * The FareSubType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FareSubType;
    /**
     * The FareType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareType;
    /**
     * The FareTypeDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData
     */
    public $FareTypeDetails;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ID;
    /**
     * The Legs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseLeg
     */
    public $Legs;
    /**
     * The ModuleInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData
     */
    public $ModuleInfo;
    /**
     * The OwnerCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OwnerCode;
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponsePassenger
     */
    public $Passengers;
    /**
     * The PaymentMethods
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod
     */
    public $PaymentMethods;
    /**
     * The PlatingCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PlatingCarrier;
    /**
     * The PointOfTurnAround
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PointOfTurnAround;
    /**
     * The QuoteFareType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $QuoteFareType;
    /**
     * The TourCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TourCode;
    /**
     * Constructor method for QuoteResponseFare
     * @uses QuoteResponseFare::setCancelationInfo()
     * @uses QuoteResponseFare::setConsoCode()
     * @uses QuoteResponseFare::setCorporateFareAccessCode()
     * @uses QuoteResponseFare::setExchangeRates()
     * @uses QuoteResponseFare::setFareSubType()
     * @uses QuoteResponseFare::setFareType()
     * @uses QuoteResponseFare::setFareTypeDetails()
     * @uses QuoteResponseFare::setID()
     * @uses QuoteResponseFare::setLegs()
     * @uses QuoteResponseFare::setModuleInfo()
     * @uses QuoteResponseFare::setOwnerCode()
     * @uses QuoteResponseFare::setPassengers()
     * @uses QuoteResponseFare::setPaymentMethods()
     * @uses QuoteResponseFare::setPlatingCarrier()
     * @uses QuoteResponseFare::setPointOfTurnAround()
     * @uses QuoteResponseFare::setQuoteFareType()
     * @uses QuoteResponseFare::setTourCode()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelation $cancelationInfo
     * @param string $consoCode
     * @param string $corporateFareAccessCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseExchangeRate $exchangeRates
     * @param string $fareSubType
     * @param string $fareType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData $fareTypeDetails
     * @param string $iD
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseLeg $legs
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo
     * @param string $ownerCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponsePassenger $passengers
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod $paymentMethods
     * @param string $platingCarrier
     * @param string $pointOfTurnAround
     * @param string $quoteFareType
     * @param string $tourCode
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelation $cancelationInfo = null, $consoCode = null, $corporateFareAccessCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseExchangeRate $exchangeRates = null, $fareSubType = null, $fareType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData $fareTypeDetails = null, $iD = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseLeg $legs = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo = null, $ownerCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponsePassenger $passengers = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod $paymentMethods = null, $platingCarrier = null, $pointOfTurnAround = null, $quoteFareType = null, $tourCode = null)
    {
        $this
            ->setCancelationInfo($cancelationInfo)
            ->setConsoCode($consoCode)
            ->setCorporateFareAccessCode($corporateFareAccessCode)
            ->setExchangeRates($exchangeRates)
            ->setFareSubType($fareSubType)
            ->setFareType($fareType)
            ->setFareTypeDetails($fareTypeDetails)
            ->setID($iD)
            ->setLegs($legs)
            ->setModuleInfo($moduleInfo)
            ->setOwnerCode($ownerCode)
            ->setPassengers($passengers)
            ->setPaymentMethods($paymentMethods)
            ->setPlatingCarrier($platingCarrier)
            ->setPointOfTurnAround($pointOfTurnAround)
            ->setQuoteFareType($quoteFareType)
            ->setTourCode($tourCode);
    }
    /**
     * Get CancelationInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelation|null
     */
    public function getCancelationInfo()
    {
        return isset($this->CancelationInfo) ? $this->CancelationInfo : null;
    }
    /**
     * Set CancelationInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelation $cancelationInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
     */
    public function setCancelationInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelation $cancelationInfo = null)
    {
        if (is_null($cancelationInfo) || (is_array($cancelationInfo) && empty($cancelationInfo))) {
            unset($this->CancelationInfo);
        } else {
            $this->CancelationInfo = $cancelationInfo;
        }
        return $this;
    }
    /**
     * Get ConsoCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getConsoCode()
    {
        return isset($this->ConsoCode) ? $this->ConsoCode : null;
    }
    /**
     * Set ConsoCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $consoCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
     */
    public function setConsoCode($consoCode = null)
    {
        // validation for constraint: string
        if (!is_null($consoCode) && !is_string($consoCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($consoCode)), __LINE__);
        }
        if (is_null($consoCode) || (is_array($consoCode) && empty($consoCode))) {
            unset($this->ConsoCode);
        } else {
            $this->ConsoCode = $consoCode;
        }
        return $this;
    }
    /**
     * Get CorporateFareAccessCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCorporateFareAccessCode()
    {
        return isset($this->CorporateFareAccessCode) ? $this->CorporateFareAccessCode : null;
    }
    /**
     * Set CorporateFareAccessCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $corporateFareAccessCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
     */
    public function setCorporateFareAccessCode($corporateFareAccessCode = null)
    {
        // validation for constraint: string
        if (!is_null($corporateFareAccessCode) && !is_string($corporateFareAccessCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($corporateFareAccessCode)), __LINE__);
        }
        if (is_null($corporateFareAccessCode) || (is_array($corporateFareAccessCode) && empty($corporateFareAccessCode))) {
            unset($this->CorporateFareAccessCode);
        } else {
            $this->CorporateFareAccessCode = $corporateFareAccessCode;
        }
        return $this;
    }
    /**
     * Get ExchangeRates value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseExchangeRate|null
     */
    public function getExchangeRates()
    {
        return isset($this->ExchangeRates) ? $this->ExchangeRates : null;
    }
    /**
     * Set ExchangeRates value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseExchangeRate $exchangeRates
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
     */
    public function setExchangeRates(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseExchangeRate $exchangeRates = null)
    {
        if (is_null($exchangeRates) || (is_array($exchangeRates) && empty($exchangeRates))) {
            unset($this->ExchangeRates);
        } else {
            $this->ExchangeRates = $exchangeRates;
        }
        return $this;
    }
    /**
     * Get FareSubType value
     * @return string|null
     */
    public function getFareSubType()
    {
        return $this->FareSubType;
    }
    /**
     * Set FareSubType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fareSubType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
     */
    public function setFareSubType($fareSubType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::valueIsValid($fareSubType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fareSubType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::getValidValues())), __LINE__);
        }
        $this->FareSubType = $fareSubType;
        return $this;
    }
    /**
     * Get FareType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareType()
    {
        return isset($this->FareType) ? $this->FareType : null;
    }
    /**
     * Set FareType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
     */
    public function setFareType($fareType = null)
    {
        // validation for constraint: string
        if (!is_null($fareType) && !is_string($fareType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareType)), __LINE__);
        }
        if (is_null($fareType) || (is_array($fareType) && empty($fareType))) {
            unset($this->FareType);
        } else {
            $this->FareType = $fareType;
        }
        return $this;
    }
    /**
     * Get FareTypeDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData|null
     */
    public function getFareTypeDetails()
    {
        return isset($this->FareTypeDetails) ? $this->FareTypeDetails : null;
    }
    /**
     * Set FareTypeDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData $fareTypeDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
     */
    public function setFareTypeDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData $fareTypeDetails = null)
    {
        if (is_null($fareTypeDetails) || (is_array($fareTypeDetails) && empty($fareTypeDetails))) {
            unset($this->FareTypeDetails);
        } else {
            $this->FareTypeDetails = $fareTypeDetails;
        }
        return $this;
    }
    /**
     * Get ID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getID()
    {
        return isset($this->ID) ? $this->ID : null;
    }
    /**
     * Set ID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iD
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        if (is_null($iD) || (is_array($iD) && empty($iD))) {
            unset($this->ID);
        } else {
            $this->ID = $iD;
        }
        return $this;
    }
    /**
     * Get Legs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseLeg|null
     */
    public function getLegs()
    {
        return isset($this->Legs) ? $this->Legs : null;
    }
    /**
     * Set Legs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseLeg $legs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
     */
    public function setLegs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseLeg $legs = null)
    {
        if (is_null($legs) || (is_array($legs) && empty($legs))) {
            unset($this->Legs);
        } else {
            $this->Legs = $legs;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
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
     * Get OwnerCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOwnerCode()
    {
        return isset($this->OwnerCode) ? $this->OwnerCode : null;
    }
    /**
     * Set OwnerCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ownerCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
     */
    public function setOwnerCode($ownerCode = null)
    {
        // validation for constraint: string
        if (!is_null($ownerCode) && !is_string($ownerCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ownerCode)), __LINE__);
        }
        if (is_null($ownerCode) || (is_array($ownerCode) && empty($ownerCode))) {
            unset($this->OwnerCode);
        } else {
            $this->OwnerCode = $ownerCode;
        }
        return $this;
    }
    /**
     * Get Passengers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponsePassenger|null
     */
    public function getPassengers()
    {
        return isset($this->Passengers) ? $this->Passengers : null;
    }
    /**
     * Set Passengers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponsePassenger $passengers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
     */
    public function setPassengers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponsePassenger $passengers = null)
    {
        if (is_null($passengers) || (is_array($passengers) && empty($passengers))) {
            unset($this->Passengers);
        } else {
            $this->Passengers = $passengers;
        }
        return $this;
    }
    /**
     * Get PaymentMethods value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod|null
     */
    public function getPaymentMethods()
    {
        return isset($this->PaymentMethods) ? $this->PaymentMethods : null;
    }
    /**
     * Set PaymentMethods value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod $paymentMethods
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
     */
    public function setPaymentMethods(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod $paymentMethods = null)
    {
        if (is_null($paymentMethods) || (is_array($paymentMethods) && empty($paymentMethods))) {
            unset($this->PaymentMethods);
        } else {
            $this->PaymentMethods = $paymentMethods;
        }
        return $this;
    }
    /**
     * Get PlatingCarrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPlatingCarrier()
    {
        return isset($this->PlatingCarrier) ? $this->PlatingCarrier : null;
    }
    /**
     * Set PlatingCarrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $platingCarrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
     */
    public function setPlatingCarrier($platingCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($platingCarrier) && !is_string($platingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($platingCarrier)), __LINE__);
        }
        if (is_null($platingCarrier) || (is_array($platingCarrier) && empty($platingCarrier))) {
            unset($this->PlatingCarrier);
        } else {
            $this->PlatingCarrier = $platingCarrier;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
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
     * Get QuoteFareType value
     * @return string|null
     */
    public function getQuoteFareType()
    {
        return $this->QuoteFareType;
    }
    /**
     * Set QuoteFareType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PermittedFareTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PermittedFareTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $quoteFareType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
     */
    public function setQuoteFareType($quoteFareType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PermittedFareTypeEnum::valueIsValid($quoteFareType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $quoteFareType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PermittedFareTypeEnum::getValidValues())), __LINE__);
        }
        $this->QuoteFareType = $quoteFareType;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare
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
