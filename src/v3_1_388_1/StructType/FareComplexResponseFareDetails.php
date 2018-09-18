<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareComplexResponseFareDetails StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareComplexResponseFareDetails
 * @subpackage Structs
 */
class FareComplexResponseFareDetails extends AbstractStructBase
{
    /**
     * The BoardingDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseDetail
     */
    public $BoardingDetails;
    /**
     * The BookingCRS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData
     */
    public $BookingCRS;
    /**
     * The CacheInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheInfoData
     */
    public $CacheInfo;
    /**
     * The FareGroups
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $FareGroups;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ID;
    /**
     * The ModificationInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleModificationInfo
     */
    public $ModificationInfo;
    /**
     * The ModuleInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData
     */
    public $ModuleInfo;
    /**
     * The PaymentMethods
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod
     */
    public $PaymentMethods;
    /**
     * The PercentageDBCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PercentageDBCode;
    /**
     * The PlatingCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PlatingCarrier;
    /**
     * The PriceDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice
     */
    public $PriceDetails;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Source;
    /**
     * The UsedCRSProfile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public $UsedCRSProfile;
    /**
     * Constructor method for FareComplexResponseFareDetails
     * @uses FareComplexResponseFareDetails::setBoardingDetails()
     * @uses FareComplexResponseFareDetails::setBookingCRS()
     * @uses FareComplexResponseFareDetails::setCacheInfo()
     * @uses FareComplexResponseFareDetails::setFareGroups()
     * @uses FareComplexResponseFareDetails::setID()
     * @uses FareComplexResponseFareDetails::setModificationInfo()
     * @uses FareComplexResponseFareDetails::setModuleInfo()
     * @uses FareComplexResponseFareDetails::setPaymentMethods()
     * @uses FareComplexResponseFareDetails::setPercentageDBCode()
     * @uses FareComplexResponseFareDetails::setPlatingCarrier()
     * @uses FareComplexResponseFareDetails::setPriceDetails()
     * @uses FareComplexResponseFareDetails::setSource()
     * @uses FareComplexResponseFareDetails::setUsedCRSProfile()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseDetail $boardingDetails
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData $bookingCRS
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheInfoData $cacheInfo
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups
     * @param string $iD
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleModificationInfo $modificationInfo
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod $paymentMethods
     * @param string $percentageDBCode
     * @param string $platingCarrier
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice $priceDetails
     * @param string $source
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $usedCRSProfile
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseDetail $boardingDetails = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData $bookingCRS = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheInfoData $cacheInfo = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups = null, $iD = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleModificationInfo $modificationInfo = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailedPaymentMethod $paymentMethods = null, $percentageDBCode = null, $platingCarrier = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice $priceDetails = null, $source = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $usedCRSProfile = null)
    {
        $this
            ->setBoardingDetails($boardingDetails)
            ->setBookingCRS($bookingCRS)
            ->setCacheInfo($cacheInfo)
            ->setFareGroups($fareGroups)
            ->setID($iD)
            ->setModificationInfo($modificationInfo)
            ->setModuleInfo($moduleInfo)
            ->setPaymentMethods($paymentMethods)
            ->setPercentageDBCode($percentageDBCode)
            ->setPlatingCarrier($platingCarrier)
            ->setPriceDetails($priceDetails)
            ->setSource($source)
            ->setUsedCRSProfile($usedCRSProfile);
    }
    /**
     * Get BoardingDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseDetail|null
     */
    public function getBoardingDetails()
    {
        return isset($this->BoardingDetails) ? $this->BoardingDetails : null;
    }
    /**
     * Set BoardingDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseDetail $boardingDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails
     */
    public function setBoardingDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseDetail $boardingDetails = null)
    {
        if (is_null($boardingDetails) || (is_array($boardingDetails) && empty($boardingDetails))) {
            unset($this->BoardingDetails);
        } else {
            $this->BoardingDetails = $boardingDetails;
        }
        return $this;
    }
    /**
     * Get BookingCRS value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData|null
     */
    public function getBookingCRS()
    {
        return isset($this->BookingCRS) ? $this->BookingCRS : null;
    }
    /**
     * Set BookingCRS value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData $bookingCRS
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails
     */
    public function setBookingCRS(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData $bookingCRS = null)
    {
        if (is_null($bookingCRS) || (is_array($bookingCRS) && empty($bookingCRS))) {
            unset($this->BookingCRS);
        } else {
            $this->BookingCRS = $bookingCRS;
        }
        return $this;
    }
    /**
     * Get CacheInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheInfoData|null
     */
    public function getCacheInfo()
    {
        return isset($this->CacheInfo) ? $this->CacheInfo : null;
    }
    /**
     * Set CacheInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheInfoData $cacheInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails
     */
    public function setCacheInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheInfoData $cacheInfo = null)
    {
        if (is_null($cacheInfo) || (is_array($cacheInfo) && empty($cacheInfo))) {
            unset($this->CacheInfo);
        } else {
            $this->CacheInfo = $cacheInfo;
        }
        return $this;
    }
    /**
     * Get FareGroups value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getFareGroups()
    {
        return isset($this->FareGroups) ? $this->FareGroups : null;
    }
    /**
     * Set FareGroups value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails
     */
    public function setFareGroups(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups = null)
    {
        if (is_null($fareGroups) || (is_array($fareGroups) && empty($fareGroups))) {
            unset($this->FareGroups);
        } else {
            $this->FareGroups = $fareGroups;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails
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
     * Get ModificationInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleModificationInfo|null
     */
    public function getModificationInfo()
    {
        return isset($this->ModificationInfo) ? $this->ModificationInfo : null;
    }
    /**
     * Set ModificationInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleModificationInfo $modificationInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails
     */
    public function setModificationInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleModificationInfo $modificationInfo = null)
    {
        if (is_null($modificationInfo) || (is_array($modificationInfo) && empty($modificationInfo))) {
            unset($this->ModificationInfo);
        } else {
            $this->ModificationInfo = $modificationInfo;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails
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
     * Get PercentageDBCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPercentageDBCode()
    {
        return isset($this->PercentageDBCode) ? $this->PercentageDBCode : null;
    }
    /**
     * Set PercentageDBCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $percentageDBCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails
     */
    public function setPercentageDBCode($percentageDBCode = null)
    {
        // validation for constraint: string
        if (!is_null($percentageDBCode) && !is_string($percentageDBCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percentageDBCode)), __LINE__);
        }
        if (is_null($percentageDBCode) || (is_array($percentageDBCode) && empty($percentageDBCode))) {
            unset($this->PercentageDBCode);
        } else {
            $this->PercentageDBCode = $percentageDBCode;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails
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
     * Get PriceDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice|null
     */
    public function getPriceDetails()
    {
        return isset($this->PriceDetails) ? $this->PriceDetails : null;
    }
    /**
     * Set PriceDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice $priceDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails
     */
    public function setPriceDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice $priceDetails = null)
    {
        if (is_null($priceDetails) || (is_array($priceDetails) && empty($priceDetails))) {
            unset($this->PriceDetails);
        } else {
            $this->PriceDetails = $priceDetails;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails
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
     * Get UsedCRSProfile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS|null
     */
    public function getUsedCRSProfile()
    {
        return isset($this->UsedCRSProfile) ? $this->UsedCRSProfile : null;
    }
    /**
     * Set UsedCRSProfile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $usedCRSProfile
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails
     */
    public function setUsedCRSProfile(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $usedCRSProfile = null)
    {
        if (is_null($usedCRSProfile) || (is_array($usedCRSProfile) && empty($usedCRSProfile))) {
            unset($this->UsedCRSProfile);
        } else {
            $this->UsedCRSProfile = $usedCRSProfile;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails
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
