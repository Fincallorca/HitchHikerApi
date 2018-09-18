<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserAccessData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UserAccessData
 * @subpackage Structs
 */
class UserAccessData extends AbstractStructBase
{
    /**
     * The APIVersions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $APIVersions;
    /**
     * The AdminEMailAddresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $AdminEMailAddresses;
    /**
     * The AllotmentConfig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount
     */
    public $AllotmentConfig;
    /**
     * The AllowFullToleranceSearch
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowFullToleranceSearch;
    /**
     * The AllowedIpAddresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AllowedIpAddresses;
    /**
     * The AllowedNFQE
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - type: tns:NFQEEnum
     * @var string
     */
    public $AllowedNFQE;
    /**
     * The AllowedNativeCommands
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $AllowedNativeCommands;
    /**
     * The AllowedPCCList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfUserPccData
     */
    public $AllowedPCCList;
    /**
     * The CacheDurations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheDurationDefinition
     */
    public $CacheDurations;
    /**
     * The Charter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterFaresSettings
     */
    public $Charter;
    /**
     * The Commands
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Commands;
    /**
     * The CreationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreationDate;
    /**
     * The CryptPassword
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CryptPassword;
    /**
     * The CryptSaltValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CryptSaltValue;
    /**
     * The DefaultAlarmTimeout
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string
     */
    public $DefaultAlarmTimeout;
    /**
     * The DefaultLanguageCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DefaultLanguageCode;
    /**
     * The DefaultPercentageCalcGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $DefaultPercentageCalcGroup;
    /**
     * The DisableRuleEngine
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $DisableRuleEngine;
    /**
     * The DisbaleTaxOverride
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $DisbaleTaxOverride;
    /**
     * The EnableWaitScreen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $EnableWaitScreen;
    /**
     * The EnabledCacheFareType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EnabledCacheFareType;
    /**
     * The EnhancedFeederSearch
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearchSetting
     */
    public $EnhancedFeederSearch;
    /**
     * The ExpiryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ExpiryDate;
    /**
     * The GDS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GDS;
    /**
     * The GDSCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GDSCodes;
    /**
     * The GDSServer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSServerSettings
     */
    public $GDSServer;
    /**
     * The GDSTitle
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GDSTitle;
    /**
     * The GetFareRestrictions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData
     */
    public $GetFareRestrictions;
    /**
     * The IBEPort
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $IBEPort;
    /**
     * The IBEServer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IBEServer;
    /**
     * The InternalSufix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InternalSufix;
    /**
     * The IsActive
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsActive;
    /**
     * The IsAdmin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAdmin;
    /**
     * The IsEncrypt
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsEncrypt;
    /**
     * The IsInternalUser
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsInternalUser;
    /**
     * The IsTestUser
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsTestUser;
    /**
     * The MaxConcurrentCalls
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $MaxConcurrentCalls;
    /**
     * The MaxPercentageOpenJawDistance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxPercentageOpenJawDistance;
    /**
     * The MaxRuleActions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxRuleActions;
    /**
     * The MinimumStopDuration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimumStopDuration;
    /**
     * The ModifyDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ModifyDate;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Password;
    /**
     * The PercentagQuoteBeforBookingDB
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PercentagQuoteBeforBookingDB;
    /**
     * The PercentageOverrideOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PercentageOverrideOption;
    /**
     * The PreferenceSearch
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceSettings
     */
    public $PreferenceSearch;
    /**
     * The Supplier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfanyType
     */
    public $Supplier;
    /**
     * The TestRemark
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $TestRemark;
    /**
     * The TraceLevel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TraceLevel;
    /**
     * The UserGuid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UserGuid;
    /**
     * The UserName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UserName;
    /**
     * The WebFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebFaresSettings
     */
    public $WebFare;
    /**
     * The WriteOwnUserLog
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $WriteOwnUserLog;
    /**
     * The XtremePricer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricerSettings
     */
    public $XtremePricer;
    /**
     * The externalCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ExtenalCounting
     */
    public $externalCount;
    /**
     * The lCommandIP
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommandIPData
     */
    public $lCommandIP;
    /**
     * Constructor method for UserAccessData
     * @uses UserAccessData::setAPIVersions()
     * @uses UserAccessData::setAdminEMailAddresses()
     * @uses UserAccessData::setAllotmentConfig()
     * @uses UserAccessData::setAllowFullToleranceSearch()
     * @uses UserAccessData::setAllowedIpAddresses()
     * @uses UserAccessData::setAllowedNFQE()
     * @uses UserAccessData::setAllowedNativeCommands()
     * @uses UserAccessData::setAllowedPCCList()
     * @uses UserAccessData::setCacheDurations()
     * @uses UserAccessData::setCharter()
     * @uses UserAccessData::setCommands()
     * @uses UserAccessData::setCreationDate()
     * @uses UserAccessData::setCryptPassword()
     * @uses UserAccessData::setCryptSaltValue()
     * @uses UserAccessData::setDefaultAlarmTimeout()
     * @uses UserAccessData::setDefaultLanguageCode()
     * @uses UserAccessData::setDefaultPercentageCalcGroup()
     * @uses UserAccessData::setDisableRuleEngine()
     * @uses UserAccessData::setDisbaleTaxOverride()
     * @uses UserAccessData::setEnableWaitScreen()
     * @uses UserAccessData::setEnabledCacheFareType()
     * @uses UserAccessData::setEnhancedFeederSearch()
     * @uses UserAccessData::setExpiryDate()
     * @uses UserAccessData::setGDS()
     * @uses UserAccessData::setGDSCodes()
     * @uses UserAccessData::setGDSServer()
     * @uses UserAccessData::setGDSTitle()
     * @uses UserAccessData::setGetFareRestrictions()
     * @uses UserAccessData::setIBEPort()
     * @uses UserAccessData::setIBEServer()
     * @uses UserAccessData::setInternalSufix()
     * @uses UserAccessData::setIsActive()
     * @uses UserAccessData::setIsAdmin()
     * @uses UserAccessData::setIsEncrypt()
     * @uses UserAccessData::setIsInternalUser()
     * @uses UserAccessData::setIsTestUser()
     * @uses UserAccessData::setMaxConcurrentCalls()
     * @uses UserAccessData::setMaxPercentageOpenJawDistance()
     * @uses UserAccessData::setMaxRuleActions()
     * @uses UserAccessData::setMinimumStopDuration()
     * @uses UserAccessData::setModifyDate()
     * @uses UserAccessData::setPassword()
     * @uses UserAccessData::setPercentagQuoteBeforBookingDB()
     * @uses UserAccessData::setPercentageOverrideOption()
     * @uses UserAccessData::setPreferenceSearch()
     * @uses UserAccessData::setSupplier()
     * @uses UserAccessData::setTestRemark()
     * @uses UserAccessData::setTraceLevel()
     * @uses UserAccessData::setUserGuid()
     * @uses UserAccessData::setUserName()
     * @uses UserAccessData::setWebFare()
     * @uses UserAccessData::setWriteOwnUserLog()
     * @uses UserAccessData::setXtremePricer()
     * @uses UserAccessData::setExternalCount()
     * @uses UserAccessData::setLCommandIP()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $aPIVersions
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $adminEMailAddresses
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentConfig
     * @param bool $allowFullToleranceSearch
     * @param string $allowedIpAddresses
     * @param string $allowedNFQE
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $allowedNativeCommands
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfUserPccData $allowedPCCList
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheDurationDefinition $cacheDurations
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterFaresSettings $charter
     * @param string $commands
     * @param string $creationDate
     * @param string $cryptPassword
     * @param string $cryptSaltValue
     * @param string $defaultAlarmTimeout
     * @param string $defaultLanguageCode
     * @param int $defaultPercentageCalcGroup
     * @param bool $disableRuleEngine
     * @param bool $disbaleTaxOverride
     * @param bool $enableWaitScreen
     * @param string $enabledCacheFareType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearchSetting $enhancedFeederSearch
     * @param string $expiryDate
     * @param string $gDS
     * @param string $gDSCodes
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSServerSettings $gDSServer
     * @param string $gDSTitle
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData $getFareRestrictions
     * @param int $iBEPort
     * @param string $iBEServer
     * @param string $internalSufix
     * @param bool $isActive
     * @param bool $isAdmin
     * @param bool $isEncrypt
     * @param bool $isInternalUser
     * @param bool $isTestUser
     * @param int $maxConcurrentCalls
     * @param int $maxPercentageOpenJawDistance
     * @param int $maxRuleActions
     * @param int $minimumStopDuration
     * @param string $modifyDate
     * @param string $password
     * @param string $percentagQuoteBeforBookingDB
     * @param int $percentageOverrideOption
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceSettings $preferenceSearch
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfanyType $supplier
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $testRemark
     * @param string $traceLevel
     * @param string $userGuid
     * @param string $userName
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebFaresSettings $webFare
     * @param bool $writeOwnUserLog
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricerSettings $xtremePricer
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ExtenalCounting $externalCount
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommandIPData $lCommandIP
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $aPIVersions = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $adminEMailAddresses = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentConfig = null, $allowFullToleranceSearch = null, $allowedIpAddresses = null, $allowedNFQE = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $allowedNativeCommands = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfUserPccData $allowedPCCList = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheDurationDefinition $cacheDurations = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterFaresSettings $charter = null, $commands = null, $creationDate = null, $cryptPassword = null, $cryptSaltValue = null, $defaultAlarmTimeout = null, $defaultLanguageCode = null, $defaultPercentageCalcGroup = null, $disableRuleEngine = null, $disbaleTaxOverride = null, $enableWaitScreen = null, $enabledCacheFareType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearchSetting $enhancedFeederSearch = null, $expiryDate = null, $gDS = null, $gDSCodes = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSServerSettings $gDSServer = null, $gDSTitle = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData $getFareRestrictions = null, $iBEPort = null, $iBEServer = null, $internalSufix = null, $isActive = null, $isAdmin = null, $isEncrypt = null, $isInternalUser = null, $isTestUser = null, $maxConcurrentCalls = null, $maxPercentageOpenJawDistance = null, $maxRuleActions = null, $minimumStopDuration = null, $modifyDate = null, $password = null, $percentagQuoteBeforBookingDB = null, $percentageOverrideOption = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceSettings $preferenceSearch = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfanyType $supplier = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $testRemark = null, $traceLevel = null, $userGuid = null, $userName = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebFaresSettings $webFare = null, $writeOwnUserLog = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricerSettings $xtremePricer = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ExtenalCounting $externalCount = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommandIPData $lCommandIP = null)
    {
        $this
            ->setAPIVersions($aPIVersions)
            ->setAdminEMailAddresses($adminEMailAddresses)
            ->setAllotmentConfig($allotmentConfig)
            ->setAllowFullToleranceSearch($allowFullToleranceSearch)
            ->setAllowedIpAddresses($allowedIpAddresses)
            ->setAllowedNFQE($allowedNFQE)
            ->setAllowedNativeCommands($allowedNativeCommands)
            ->setAllowedPCCList($allowedPCCList)
            ->setCacheDurations($cacheDurations)
            ->setCharter($charter)
            ->setCommands($commands)
            ->setCreationDate($creationDate)
            ->setCryptPassword($cryptPassword)
            ->setCryptSaltValue($cryptSaltValue)
            ->setDefaultAlarmTimeout($defaultAlarmTimeout)
            ->setDefaultLanguageCode($defaultLanguageCode)
            ->setDefaultPercentageCalcGroup($defaultPercentageCalcGroup)
            ->setDisableRuleEngine($disableRuleEngine)
            ->setDisbaleTaxOverride($disbaleTaxOverride)
            ->setEnableWaitScreen($enableWaitScreen)
            ->setEnabledCacheFareType($enabledCacheFareType)
            ->setEnhancedFeederSearch($enhancedFeederSearch)
            ->setExpiryDate($expiryDate)
            ->setGDS($gDS)
            ->setGDSCodes($gDSCodes)
            ->setGDSServer($gDSServer)
            ->setGDSTitle($gDSTitle)
            ->setGetFareRestrictions($getFareRestrictions)
            ->setIBEPort($iBEPort)
            ->setIBEServer($iBEServer)
            ->setInternalSufix($internalSufix)
            ->setIsActive($isActive)
            ->setIsAdmin($isAdmin)
            ->setIsEncrypt($isEncrypt)
            ->setIsInternalUser($isInternalUser)
            ->setIsTestUser($isTestUser)
            ->setMaxConcurrentCalls($maxConcurrentCalls)
            ->setMaxPercentageOpenJawDistance($maxPercentageOpenJawDistance)
            ->setMaxRuleActions($maxRuleActions)
            ->setMinimumStopDuration($minimumStopDuration)
            ->setModifyDate($modifyDate)
            ->setPassword($password)
            ->setPercentagQuoteBeforBookingDB($percentagQuoteBeforBookingDB)
            ->setPercentageOverrideOption($percentageOverrideOption)
            ->setPreferenceSearch($preferenceSearch)
            ->setSupplier($supplier)
            ->setTestRemark($testRemark)
            ->setTraceLevel($traceLevel)
            ->setUserGuid($userGuid)
            ->setUserName($userName)
            ->setWebFare($webFare)
            ->setWriteOwnUserLog($writeOwnUserLog)
            ->setXtremePricer($xtremePricer)
            ->setExternalCount($externalCount)
            ->setLCommandIP($lCommandIP);
    }
    /**
     * Get APIVersions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getAPIVersions()
    {
        return isset($this->APIVersions) ? $this->APIVersions : null;
    }
    /**
     * Set APIVersions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $aPIVersions
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setAPIVersions(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $aPIVersions = null)
    {
        if (is_null($aPIVersions) || (is_array($aPIVersions) && empty($aPIVersions))) {
            unset($this->APIVersions);
        } else {
            $this->APIVersions = $aPIVersions;
        }
        return $this;
    }
    /**
     * Get AdminEMailAddresses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getAdminEMailAddresses()
    {
        return isset($this->AdminEMailAddresses) ? $this->AdminEMailAddresses : null;
    }
    /**
     * Set AdminEMailAddresses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $adminEMailAddresses
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setAdminEMailAddresses(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $adminEMailAddresses = null)
    {
        if (is_null($adminEMailAddresses) || (is_array($adminEMailAddresses) && empty($adminEMailAddresses))) {
            unset($this->AdminEMailAddresses);
        } else {
            $this->AdminEMailAddresses = $adminEMailAddresses;
        }
        return $this;
    }
    /**
     * Get AllotmentConfig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount|null
     */
    public function getAllotmentConfig()
    {
        return isset($this->AllotmentConfig) ? $this->AllotmentConfig : null;
    }
    /**
     * Set AllotmentConfig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setAllotmentConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentConfig = null)
    {
        if (is_null($allotmentConfig) || (is_array($allotmentConfig) && empty($allotmentConfig))) {
            unset($this->AllotmentConfig);
        } else {
            $this->AllotmentConfig = $allotmentConfig;
        }
        return $this;
    }
    /**
     * Get AllowFullToleranceSearch value
     * @return bool|null
     */
    public function getAllowFullToleranceSearch()
    {
        return $this->AllowFullToleranceSearch;
    }
    /**
     * Set AllowFullToleranceSearch value
     * @param bool $allowFullToleranceSearch
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setAllowFullToleranceSearch($allowFullToleranceSearch = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowFullToleranceSearch) && !is_bool($allowFullToleranceSearch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowFullToleranceSearch)), __LINE__);
        }
        $this->AllowFullToleranceSearch = $allowFullToleranceSearch;
        return $this;
    }
    /**
     * Get AllowedIpAddresses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAllowedIpAddresses()
    {
        return isset($this->AllowedIpAddresses) ? $this->AllowedIpAddresses : null;
    }
    /**
     * Set AllowedIpAddresses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $allowedIpAddresses
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setAllowedIpAddresses($allowedIpAddresses = null)
    {
        // validation for constraint: string
        if (!is_null($allowedIpAddresses) && !is_string($allowedIpAddresses)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($allowedIpAddresses)), __LINE__);
        }
        if (is_null($allowedIpAddresses) || (is_array($allowedIpAddresses) && empty($allowedIpAddresses))) {
            unset($this->AllowedIpAddresses);
        } else {
            $this->AllowedIpAddresses = $allowedIpAddresses;
        }
        return $this;
    }
    /**
     * Get AllowedNFQE value
     * @return string|null
     */
    public function getAllowedNFQE()
    {
        return $this->AllowedNFQE;
    }
    /**
     * Set AllowedNFQE value
     * @param string $allowedNFQE
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setAllowedNFQE($allowedNFQE = null)
    {
        // validation for constraint: string
        if (!is_null($allowedNFQE) && !is_string($allowedNFQE)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($allowedNFQE)), __LINE__);
        }
        $this->AllowedNFQE = $allowedNFQE;
        return $this;
    }
    /**
     * Get AllowedNativeCommands value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getAllowedNativeCommands()
    {
        return isset($this->AllowedNativeCommands) ? $this->AllowedNativeCommands : null;
    }
    /**
     * Set AllowedNativeCommands value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $allowedNativeCommands
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setAllowedNativeCommands(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $allowedNativeCommands = null)
    {
        if (is_null($allowedNativeCommands) || (is_array($allowedNativeCommands) && empty($allowedNativeCommands))) {
            unset($this->AllowedNativeCommands);
        } else {
            $this->AllowedNativeCommands = $allowedNativeCommands;
        }
        return $this;
    }
    /**
     * Get AllowedPCCList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfUserPccData|null
     */
    public function getAllowedPCCList()
    {
        return isset($this->AllowedPCCList) ? $this->AllowedPCCList : null;
    }
    /**
     * Set AllowedPCCList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfUserPccData $allowedPCCList
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setAllowedPCCList(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfUserPccData $allowedPCCList = null)
    {
        if (is_null($allowedPCCList) || (is_array($allowedPCCList) && empty($allowedPCCList))) {
            unset($this->AllowedPCCList);
        } else {
            $this->AllowedPCCList = $allowedPCCList;
        }
        return $this;
    }
    /**
     * Get CacheDurations value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheDurationDefinition|null
     */
    public function getCacheDurations()
    {
        return isset($this->CacheDurations) ? $this->CacheDurations : null;
    }
    /**
     * Set CacheDurations value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheDurationDefinition $cacheDurations
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setCacheDurations(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheDurationDefinition $cacheDurations = null)
    {
        if (is_null($cacheDurations) || (is_array($cacheDurations) && empty($cacheDurations))) {
            unset($this->CacheDurations);
        } else {
            $this->CacheDurations = $cacheDurations;
        }
        return $this;
    }
    /**
     * Get Charter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterFaresSettings|null
     */
    public function getCharter()
    {
        return isset($this->Charter) ? $this->Charter : null;
    }
    /**
     * Set Charter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterFaresSettings $charter
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setCharter(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterFaresSettings $charter = null)
    {
        if (is_null($charter) || (is_array($charter) && empty($charter))) {
            unset($this->Charter);
        } else {
            $this->Charter = $charter;
        }
        return $this;
    }
    /**
     * Get Commands value
     * @return string|null
     */
    public function getCommands()
    {
        return $this->Commands;
    }
    /**
     * Set Commands value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CommandEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CommandEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $commands
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setCommands($commands = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CommandEnum::valueIsValid($commands)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $commands, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CommandEnum::getValidValues())), __LINE__);
        }
        $this->Commands = $commands;
        return $this;
    }
    /**
     * Get CreationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreationDate()
    {
        return isset($this->CreationDate) ? $this->CreationDate : null;
    }
    /**
     * Set CreationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creationDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationDate)), __LINE__);
        }
        if (is_null($creationDate) || (is_array($creationDate) && empty($creationDate))) {
            unset($this->CreationDate);
        } else {
            $this->CreationDate = $creationDate;
        }
        return $this;
    }
    /**
     * Get CryptPassword value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCryptPassword()
    {
        return isset($this->CryptPassword) ? $this->CryptPassword : null;
    }
    /**
     * Set CryptPassword value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cryptPassword
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setCryptPassword($cryptPassword = null)
    {
        // validation for constraint: string
        if (!is_null($cryptPassword) && !is_string($cryptPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cryptPassword)), __LINE__);
        }
        if (is_null($cryptPassword) || (is_array($cryptPassword) && empty($cryptPassword))) {
            unset($this->CryptPassword);
        } else {
            $this->CryptPassword = $cryptPassword;
        }
        return $this;
    }
    /**
     * Get CryptSaltValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCryptSaltValue()
    {
        return isset($this->CryptSaltValue) ? $this->CryptSaltValue : null;
    }
    /**
     * Set CryptSaltValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cryptSaltValue
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setCryptSaltValue($cryptSaltValue = null)
    {
        // validation for constraint: string
        if (!is_null($cryptSaltValue) && !is_string($cryptSaltValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cryptSaltValue)), __LINE__);
        }
        if (is_null($cryptSaltValue) || (is_array($cryptSaltValue) && empty($cryptSaltValue))) {
            unset($this->CryptSaltValue);
        } else {
            $this->CryptSaltValue = $cryptSaltValue;
        }
        return $this;
    }
    /**
     * Get DefaultAlarmTimeout value
     * @return string|null
     */
    public function getDefaultAlarmTimeout()
    {
        return $this->DefaultAlarmTimeout;
    }
    /**
     * Set DefaultAlarmTimeout value
     * @param string $defaultAlarmTimeout
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setDefaultAlarmTimeout($defaultAlarmTimeout = null)
    {
        // validation for constraint: maxInclusive
        if ($defaultAlarmTimeout > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $defaultAlarmTimeout), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($defaultAlarmTimeout < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $defaultAlarmTimeout), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($defaultAlarmTimeout) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $defaultAlarmTimeout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($defaultAlarmTimeout, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($defaultAlarmTimeout) && !is_string($defaultAlarmTimeout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultAlarmTimeout)), __LINE__);
        }
        $this->DefaultAlarmTimeout = $defaultAlarmTimeout;
        return $this;
    }
    /**
     * Get DefaultLanguageCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDefaultLanguageCode()
    {
        return isset($this->DefaultLanguageCode) ? $this->DefaultLanguageCode : null;
    }
    /**
     * Set DefaultLanguageCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $defaultLanguageCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setDefaultLanguageCode($defaultLanguageCode = null)
    {
        // validation for constraint: string
        if (!is_null($defaultLanguageCode) && !is_string($defaultLanguageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultLanguageCode)), __LINE__);
        }
        if (is_null($defaultLanguageCode) || (is_array($defaultLanguageCode) && empty($defaultLanguageCode))) {
            unset($this->DefaultLanguageCode);
        } else {
            $this->DefaultLanguageCode = $defaultLanguageCode;
        }
        return $this;
    }
    /**
     * Get DefaultPercentageCalcGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDefaultPercentageCalcGroup()
    {
        return isset($this->DefaultPercentageCalcGroup) ? $this->DefaultPercentageCalcGroup : null;
    }
    /**
     * Set DefaultPercentageCalcGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $defaultPercentageCalcGroup
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setDefaultPercentageCalcGroup($defaultPercentageCalcGroup = null)
    {
        // validation for constraint: int
        if (!is_null($defaultPercentageCalcGroup) && !is_numeric($defaultPercentageCalcGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($defaultPercentageCalcGroup)), __LINE__);
        }
        if (is_null($defaultPercentageCalcGroup) || (is_array($defaultPercentageCalcGroup) && empty($defaultPercentageCalcGroup))) {
            unset($this->DefaultPercentageCalcGroup);
        } else {
            $this->DefaultPercentageCalcGroup = $defaultPercentageCalcGroup;
        }
        return $this;
    }
    /**
     * Get DisableRuleEngine value
     * @return bool|null
     */
    public function getDisableRuleEngine()
    {
        return $this->DisableRuleEngine;
    }
    /**
     * Set DisableRuleEngine value
     * @param bool $disableRuleEngine
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setDisableRuleEngine($disableRuleEngine = null)
    {
        // validation for constraint: boolean
        if (!is_null($disableRuleEngine) && !is_bool($disableRuleEngine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($disableRuleEngine)), __LINE__);
        }
        $this->DisableRuleEngine = $disableRuleEngine;
        return $this;
    }
    /**
     * Get DisbaleTaxOverride value
     * @return bool|null
     */
    public function getDisbaleTaxOverride()
    {
        return $this->DisbaleTaxOverride;
    }
    /**
     * Set DisbaleTaxOverride value
     * @param bool $disbaleTaxOverride
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setDisbaleTaxOverride($disbaleTaxOverride = null)
    {
        // validation for constraint: boolean
        if (!is_null($disbaleTaxOverride) && !is_bool($disbaleTaxOverride)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($disbaleTaxOverride)), __LINE__);
        }
        $this->DisbaleTaxOverride = $disbaleTaxOverride;
        return $this;
    }
    /**
     * Get EnableWaitScreen value
     * @return bool|null
     */
    public function getEnableWaitScreen()
    {
        return $this->EnableWaitScreen;
    }
    /**
     * Set EnableWaitScreen value
     * @param bool $enableWaitScreen
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setEnableWaitScreen($enableWaitScreen = null)
    {
        // validation for constraint: boolean
        if (!is_null($enableWaitScreen) && !is_bool($enableWaitScreen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enableWaitScreen)), __LINE__);
        }
        $this->EnableWaitScreen = $enableWaitScreen;
        return $this;
    }
    /**
     * Get EnabledCacheFareType value
     * @return string|null
     */
    public function getEnabledCacheFareType()
    {
        return $this->EnabledCacheFareType;
    }
    /**
     * Set EnabledCacheFareType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $enabledCacheFareType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setEnabledCacheFareType($enabledCacheFareType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::valueIsValid($enabledCacheFareType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $enabledCacheFareType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::getValidValues())), __LINE__);
        }
        $this->EnabledCacheFareType = $enabledCacheFareType;
        return $this;
    }
    /**
     * Get EnhancedFeederSearch value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearchSetting|null
     */
    public function getEnhancedFeederSearch()
    {
        return isset($this->EnhancedFeederSearch) ? $this->EnhancedFeederSearch : null;
    }
    /**
     * Set EnhancedFeederSearch value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearchSetting $enhancedFeederSearch
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setEnhancedFeederSearch(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EnhancedFeederSearchSetting $enhancedFeederSearch = null)
    {
        if (is_null($enhancedFeederSearch) || (is_array($enhancedFeederSearch) && empty($enhancedFeederSearch))) {
            unset($this->EnhancedFeederSearch);
        } else {
            $this->EnhancedFeederSearch = $enhancedFeederSearch;
        }
        return $this;
    }
    /**
     * Get ExpiryDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExpiryDate()
    {
        return isset($this->ExpiryDate) ? $this->ExpiryDate : null;
    }
    /**
     * Set ExpiryDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $expiryDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setExpiryDate($expiryDate = null)
    {
        // validation for constraint: string
        if (!is_null($expiryDate) && !is_string($expiryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiryDate)), __LINE__);
        }
        if (is_null($expiryDate) || (is_array($expiryDate) && empty($expiryDate))) {
            unset($this->ExpiryDate);
        } else {
            $this->ExpiryDate = $expiryDate;
        }
        return $this;
    }
    /**
     * Get GDS value
     * @return string|null
     */
    public function getGDS()
    {
        return $this->GDS;
    }
    /**
     * Set GDS value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $gDS
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setGDS($gDS = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::valueIsValid($gDS)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $gDS, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::getValidValues())), __LINE__);
        }
        $this->GDS = $gDS;
        return $this;
    }
    /**
     * Get GDSCodes value
     * @return string|null
     */
    public function getGDSCodes()
    {
        return $this->GDSCodes;
    }
    /**
     * Set GDSCodes value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSCodeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSCodeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $gDSCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setGDSCodes($gDSCodes = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSCodeEnum::valueIsValid($gDSCodes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $gDSCodes, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSCodeEnum::getValidValues())), __LINE__);
        }
        $this->GDSCodes = $gDSCodes;
        return $this;
    }
    /**
     * Get GDSServer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSServerSettings|null
     */
    public function getGDSServer()
    {
        return isset($this->GDSServer) ? $this->GDSServer : null;
    }
    /**
     * Set GDSServer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSServerSettings $gDSServer
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setGDSServer(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSServerSettings $gDSServer = null)
    {
        if (is_null($gDSServer) || (is_array($gDSServer) && empty($gDSServer))) {
            unset($this->GDSServer);
        } else {
            $this->GDSServer = $gDSServer;
        }
        return $this;
    }
    /**
     * Get GDSTitle value
     * @return string|null
     */
    public function getGDSTitle()
    {
        return $this->GDSTitle;
    }
    /**
     * Set GDSTitle value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $gDSTitle
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setGDSTitle($gDSTitle = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::valueIsValid($gDSTitle)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $gDSTitle, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::getValidValues())), __LINE__);
        }
        $this->GDSTitle = $gDSTitle;
        return $this;
    }
    /**
     * Get GetFareRestrictions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData|null
     */
    public function getGetFareRestrictions()
    {
        return isset($this->GetFareRestrictions) ? $this->GetFareRestrictions : null;
    }
    /**
     * Set GetFareRestrictions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData $getFareRestrictions
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setGetFareRestrictions(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareRestrictionData $getFareRestrictions = null)
    {
        if (is_null($getFareRestrictions) || (is_array($getFareRestrictions) && empty($getFareRestrictions))) {
            unset($this->GetFareRestrictions);
        } else {
            $this->GetFareRestrictions = $getFareRestrictions;
        }
        return $this;
    }
    /**
     * Get IBEPort value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getIBEPort()
    {
        return isset($this->IBEPort) ? $this->IBEPort : null;
    }
    /**
     * Set IBEPort value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $iBEPort
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setIBEPort($iBEPort = null)
    {
        // validation for constraint: int
        if (!is_null($iBEPort) && !is_numeric($iBEPort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iBEPort)), __LINE__);
        }
        if (is_null($iBEPort) || (is_array($iBEPort) && empty($iBEPort))) {
            unset($this->IBEPort);
        } else {
            $this->IBEPort = $iBEPort;
        }
        return $this;
    }
    /**
     * Get IBEServer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIBEServer()
    {
        return isset($this->IBEServer) ? $this->IBEServer : null;
    }
    /**
     * Set IBEServer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iBEServer
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setIBEServer($iBEServer = null)
    {
        // validation for constraint: string
        if (!is_null($iBEServer) && !is_string($iBEServer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iBEServer)), __LINE__);
        }
        if (is_null($iBEServer) || (is_array($iBEServer) && empty($iBEServer))) {
            unset($this->IBEServer);
        } else {
            $this->IBEServer = $iBEServer;
        }
        return $this;
    }
    /**
     * Get InternalSufix value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInternalSufix()
    {
        return isset($this->InternalSufix) ? $this->InternalSufix : null;
    }
    /**
     * Set InternalSufix value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $internalSufix
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setInternalSufix($internalSufix = null)
    {
        // validation for constraint: string
        if (!is_null($internalSufix) && !is_string($internalSufix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internalSufix)), __LINE__);
        }
        if (is_null($internalSufix) || (is_array($internalSufix) && empty($internalSufix))) {
            unset($this->InternalSufix);
        } else {
            $this->InternalSufix = $internalSufix;
        }
        return $this;
    }
    /**
     * Get IsActive value
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }
    /**
     * Set IsActive value
     * @param bool $isActive
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setIsActive($isActive = null)
    {
        // validation for constraint: boolean
        if (!is_null($isActive) && !is_bool($isActive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isActive)), __LINE__);
        }
        $this->IsActive = $isActive;
        return $this;
    }
    /**
     * Get IsAdmin value
     * @return bool|null
     */
    public function getIsAdmin()
    {
        return $this->IsAdmin;
    }
    /**
     * Set IsAdmin value
     * @param bool $isAdmin
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setIsAdmin($isAdmin = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAdmin) && !is_bool($isAdmin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAdmin)), __LINE__);
        }
        $this->IsAdmin = $isAdmin;
        return $this;
    }
    /**
     * Get IsEncrypt value
     * @return bool|null
     */
    public function getIsEncrypt()
    {
        return $this->IsEncrypt;
    }
    /**
     * Set IsEncrypt value
     * @param bool $isEncrypt
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setIsEncrypt($isEncrypt = null)
    {
        // validation for constraint: boolean
        if (!is_null($isEncrypt) && !is_bool($isEncrypt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isEncrypt)), __LINE__);
        }
        $this->IsEncrypt = $isEncrypt;
        return $this;
    }
    /**
     * Get IsInternalUser value
     * @return bool|null
     */
    public function getIsInternalUser()
    {
        return $this->IsInternalUser;
    }
    /**
     * Set IsInternalUser value
     * @param bool $isInternalUser
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setIsInternalUser($isInternalUser = null)
    {
        // validation for constraint: boolean
        if (!is_null($isInternalUser) && !is_bool($isInternalUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isInternalUser)), __LINE__);
        }
        $this->IsInternalUser = $isInternalUser;
        return $this;
    }
    /**
     * Get IsTestUser value
     * @return bool|null
     */
    public function getIsTestUser()
    {
        return $this->IsTestUser;
    }
    /**
     * Set IsTestUser value
     * @param bool $isTestUser
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setIsTestUser($isTestUser = null)
    {
        // validation for constraint: boolean
        if (!is_null($isTestUser) && !is_bool($isTestUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isTestUser)), __LINE__);
        }
        $this->IsTestUser = $isTestUser;
        return $this;
    }
    /**
     * Get MaxConcurrentCalls value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMaxConcurrentCalls()
    {
        return isset($this->MaxConcurrentCalls) ? $this->MaxConcurrentCalls : null;
    }
    /**
     * Set MaxConcurrentCalls value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $maxConcurrentCalls
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setMaxConcurrentCalls($maxConcurrentCalls = null)
    {
        // validation for constraint: int
        if (!is_null($maxConcurrentCalls) && !is_numeric($maxConcurrentCalls)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxConcurrentCalls)), __LINE__);
        }
        if (is_null($maxConcurrentCalls) || (is_array($maxConcurrentCalls) && empty($maxConcurrentCalls))) {
            unset($this->MaxConcurrentCalls);
        } else {
            $this->MaxConcurrentCalls = $maxConcurrentCalls;
        }
        return $this;
    }
    /**
     * Get MaxPercentageOpenJawDistance value
     * @return int|null
     */
    public function getMaxPercentageOpenJawDistance()
    {
        return $this->MaxPercentageOpenJawDistance;
    }
    /**
     * Set MaxPercentageOpenJawDistance value
     * @param int $maxPercentageOpenJawDistance
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setMaxPercentageOpenJawDistance($maxPercentageOpenJawDistance = null)
    {
        // validation for constraint: int
        if (!is_null($maxPercentageOpenJawDistance) && !is_numeric($maxPercentageOpenJawDistance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxPercentageOpenJawDistance)), __LINE__);
        }
        $this->MaxPercentageOpenJawDistance = $maxPercentageOpenJawDistance;
        return $this;
    }
    /**
     * Get MaxRuleActions value
     * @return int|null
     */
    public function getMaxRuleActions()
    {
        return $this->MaxRuleActions;
    }
    /**
     * Set MaxRuleActions value
     * @param int $maxRuleActions
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setMaxRuleActions($maxRuleActions = null)
    {
        // validation for constraint: int
        if (!is_null($maxRuleActions) && !is_numeric($maxRuleActions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxRuleActions)), __LINE__);
        }
        $this->MaxRuleActions = $maxRuleActions;
        return $this;
    }
    /**
     * Get MinimumStopDuration value
     * @return int|null
     */
    public function getMinimumStopDuration()
    {
        return $this->MinimumStopDuration;
    }
    /**
     * Set MinimumStopDuration value
     * @param int $minimumStopDuration
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setMinimumStopDuration($minimumStopDuration = null)
    {
        // validation for constraint: int
        if (!is_null($minimumStopDuration) && !is_numeric($minimumStopDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimumStopDuration)), __LINE__);
        }
        $this->MinimumStopDuration = $minimumStopDuration;
        return $this;
    }
    /**
     * Get ModifyDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModifyDate()
    {
        return isset($this->ModifyDate) ? $this->ModifyDate : null;
    }
    /**
     * Set ModifyDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $modifyDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setModifyDate($modifyDate = null)
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modifyDate)), __LINE__);
        }
        if (is_null($modifyDate) || (is_array($modifyDate) && empty($modifyDate))) {
            unset($this->ModifyDate);
        } else {
            $this->ModifyDate = $modifyDate;
        }
        return $this;
    }
    /**
     * Get Password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword()
    {
        return isset($this->Password) ? $this->Password : null;
    }
    /**
     * Set Password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->Password);
        } else {
            $this->Password = $password;
        }
        return $this;
    }
    /**
     * Get PercentagQuoteBeforBookingDB value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPercentagQuoteBeforBookingDB()
    {
        return isset($this->PercentagQuoteBeforBookingDB) ? $this->PercentagQuoteBeforBookingDB : null;
    }
    /**
     * Set PercentagQuoteBeforBookingDB value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $percentagQuoteBeforBookingDB
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setPercentagQuoteBeforBookingDB($percentagQuoteBeforBookingDB = null)
    {
        // validation for constraint: string
        if (!is_null($percentagQuoteBeforBookingDB) && !is_string($percentagQuoteBeforBookingDB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percentagQuoteBeforBookingDB)), __LINE__);
        }
        if (is_null($percentagQuoteBeforBookingDB) || (is_array($percentagQuoteBeforBookingDB) && empty($percentagQuoteBeforBookingDB))) {
            unset($this->PercentagQuoteBeforBookingDB);
        } else {
            $this->PercentagQuoteBeforBookingDB = $percentagQuoteBeforBookingDB;
        }
        return $this;
    }
    /**
     * Get PercentageOverrideOption value
     * @return int|null
     */
    public function getPercentageOverrideOption()
    {
        return $this->PercentageOverrideOption;
    }
    /**
     * Set PercentageOverrideOption value
     * @param int $percentageOverrideOption
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setPercentageOverrideOption($percentageOverrideOption = null)
    {
        // validation for constraint: int
        if (!is_null($percentageOverrideOption) && !is_numeric($percentageOverrideOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($percentageOverrideOption)), __LINE__);
        }
        $this->PercentageOverrideOption = $percentageOverrideOption;
        return $this;
    }
    /**
     * Get PreferenceSearch value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceSettings|null
     */
    public function getPreferenceSearch()
    {
        return isset($this->PreferenceSearch) ? $this->PreferenceSearch : null;
    }
    /**
     * Set PreferenceSearch value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceSettings $preferenceSearch
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setPreferenceSearch(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceSettings $preferenceSearch = null)
    {
        if (is_null($preferenceSearch) || (is_array($preferenceSearch) && empty($preferenceSearch))) {
            unset($this->PreferenceSearch);
        } else {
            $this->PreferenceSearch = $preferenceSearch;
        }
        return $this;
    }
    /**
     * Get Supplier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfanyType|null
     */
    public function getSupplier()
    {
        return isset($this->Supplier) ? $this->Supplier : null;
    }
    /**
     * Set Supplier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfanyType $supplier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setSupplier(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfanyType $supplier = null)
    {
        if (is_null($supplier) || (is_array($supplier) && empty($supplier))) {
            unset($this->Supplier);
        } else {
            $this->Supplier = $supplier;
        }
        return $this;
    }
    /**
     * Get TestRemark value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getTestRemark()
    {
        return isset($this->TestRemark) ? $this->TestRemark : null;
    }
    /**
     * Set TestRemark value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $testRemark
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setTestRemark(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $testRemark = null)
    {
        if (is_null($testRemark) || (is_array($testRemark) && empty($testRemark))) {
            unset($this->TestRemark);
        } else {
            $this->TestRemark = $testRemark;
        }
        return $this;
    }
    /**
     * Get TraceLevel value
     * @return string|null
     */
    public function getTraceLevel()
    {
        return $this->TraceLevel;
    }
    /**
     * Set TraceLevel value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TraceLevelEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TraceLevelEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $traceLevel
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setTraceLevel($traceLevel = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TraceLevelEnum::valueIsValid($traceLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $traceLevel, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TraceLevelEnum::getValidValues())), __LINE__);
        }
        $this->TraceLevel = $traceLevel;
        return $this;
    }
    /**
     * Get UserGuid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserGuid()
    {
        return isset($this->UserGuid) ? $this->UserGuid : null;
    }
    /**
     * Set UserGuid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userGuid
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setUserGuid($userGuid = null)
    {
        // validation for constraint: string
        if (!is_null($userGuid) && !is_string($userGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userGuid)), __LINE__);
        }
        if (is_null($userGuid) || (is_array($userGuid) && empty($userGuid))) {
            unset($this->UserGuid);
        } else {
            $this->UserGuid = $userGuid;
        }
        return $this;
    }
    /**
     * Get UserName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserName()
    {
        return isset($this->UserName) ? $this->UserName : null;
    }
    /**
     * Set UserName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userName)), __LINE__);
        }
        if (is_null($userName) || (is_array($userName) && empty($userName))) {
            unset($this->UserName);
        } else {
            $this->UserName = $userName;
        }
        return $this;
    }
    /**
     * Get WebFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebFaresSettings|null
     */
    public function getWebFare()
    {
        return isset($this->WebFare) ? $this->WebFare : null;
    }
    /**
     * Set WebFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebFaresSettings $webFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setWebFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebFaresSettings $webFare = null)
    {
        if (is_null($webFare) || (is_array($webFare) && empty($webFare))) {
            unset($this->WebFare);
        } else {
            $this->WebFare = $webFare;
        }
        return $this;
    }
    /**
     * Get WriteOwnUserLog value
     * @return bool|null
     */
    public function getWriteOwnUserLog()
    {
        return $this->WriteOwnUserLog;
    }
    /**
     * Set WriteOwnUserLog value
     * @param bool $writeOwnUserLog
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setWriteOwnUserLog($writeOwnUserLog = null)
    {
        // validation for constraint: boolean
        if (!is_null($writeOwnUserLog) && !is_bool($writeOwnUserLog)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($writeOwnUserLog)), __LINE__);
        }
        $this->WriteOwnUserLog = $writeOwnUserLog;
        return $this;
    }
    /**
     * Get XtremePricer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricerSettings|null
     */
    public function getXtremePricer()
    {
        return isset($this->XtremePricer) ? $this->XtremePricer : null;
    }
    /**
     * Set XtremePricer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricerSettings $xtremePricer
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setXtremePricer(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricerSettings $xtremePricer = null)
    {
        if (is_null($xtremePricer) || (is_array($xtremePricer) && empty($xtremePricer))) {
            unset($this->XtremePricer);
        } else {
            $this->XtremePricer = $xtremePricer;
        }
        return $this;
    }
    /**
     * Get externalCount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ExtenalCounting|null
     */
    public function getExternalCount()
    {
        return isset($this->externalCount) ? $this->externalCount : null;
    }
    /**
     * Set externalCount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ExtenalCounting $externalCount
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setExternalCount(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ExtenalCounting $externalCount = null)
    {
        if (is_null($externalCount) || (is_array($externalCount) && empty($externalCount))) {
            unset($this->externalCount);
        } else {
            $this->externalCount = $externalCount;
        }
        return $this;
    }
    /**
     * Get lCommandIP value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommandIPData|null
     */
    public function getLCommandIP()
    {
        return isset($this->lCommandIP) ? $this->lCommandIP : null;
    }
    /**
     * Set lCommandIP value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommandIPData $lCommandIP
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public function setLCommandIP(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommandIPData $lCommandIP = null)
    {
        if (is_null($lCommandIP) || (is_array($lCommandIP) && empty($lCommandIP))) {
            unset($this->lCommandIP);
        } else {
            $this->lCommandIP = $lCommandIP;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
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
