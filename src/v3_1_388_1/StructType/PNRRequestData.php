<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PNRRequestData
 * @subpackage Structs
 */
class PNRRequestData extends AbstractStructBase
{
    /**
     * The AllotmentAccountData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount
     */
    public $AllotmentAccountData;
    /**
     * The CRSConfig
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public $CRSConfig;
    /**
     * The Charter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestCharter
     */
    public $Charter;
    /**
     * The CreateBackOffice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreateBackOffice;
    /**
     * The CustomerLastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CustomerLastName;
    /**
     * The IsAllotment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAllotment;
    /**
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $RecordLocator;
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * The StoredFareDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $StoredFareDetails;
    /**
     * The StructuredPNR
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $StructuredPNR;
    /**
     * The TicketDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $TicketDetails;
    /**
     * The Web
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestWeb
     */
    public $Web;
    /**
     * Constructor method for PNRRequestData
     * @uses PNRRequestData::setAllotmentAccountData()
     * @uses PNRRequestData::setCRSConfig()
     * @uses PNRRequestData::setCharter()
     * @uses PNRRequestData::setCreateBackOffice()
     * @uses PNRRequestData::setCustomerLastName()
     * @uses PNRRequestData::setIsAllotment()
     * @uses PNRRequestData::setRecordLocator()
     * @uses PNRRequestData::setSource()
     * @uses PNRRequestData::setStoredFareDetails()
     * @uses PNRRequestData::setStructuredPNR()
     * @uses PNRRequestData::setTicketDetails()
     * @uses PNRRequestData::setWeb()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentAccountData
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestCharter $charter
     * @param string $createBackOffice
     * @param string $customerLastName
     * @param bool $isAllotment
     * @param string $recordLocator
     * @param string $source
     * @param bool $storedFareDetails
     * @param bool $structuredPNR
     * @param bool $ticketDetails
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestWeb $web
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentAccountData = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestCharter $charter = null, $createBackOffice = null, $customerLastName = null, $isAllotment = null, $recordLocator = null, $source = null, $storedFareDetails = null, $structuredPNR = null, $ticketDetails = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestWeb $web = null)
    {
        $this
            ->setAllotmentAccountData($allotmentAccountData)
            ->setCRSConfig($cRSConfig)
            ->setCharter($charter)
            ->setCreateBackOffice($createBackOffice)
            ->setCustomerLastName($customerLastName)
            ->setIsAllotment($isAllotment)
            ->setRecordLocator($recordLocator)
            ->setSource($source)
            ->setStoredFareDetails($storedFareDetails)
            ->setStructuredPNR($structuredPNR)
            ->setTicketDetails($ticketDetails)
            ->setWeb($web);
    }
    /**
     * Get AllotmentAccountData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount|null
     */
    public function getAllotmentAccountData()
    {
        return isset($this->AllotmentAccountData) ? $this->AllotmentAccountData : null;
    }
    /**
     * Set AllotmentAccountData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentAccountData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestData
     */
    public function setAllotmentAccountData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentAccountData = null)
    {
        if (is_null($allotmentAccountData) || (is_array($allotmentAccountData) && empty($allotmentAccountData))) {
            unset($this->AllotmentAccountData);
        } else {
            $this->AllotmentAccountData = $allotmentAccountData;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestData
     */
    public function setCRSConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null)
    {
        $this->CRSConfig = $cRSConfig;
        return $this;
    }
    /**
     * Get Charter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestCharter|null
     */
    public function getCharter()
    {
        return isset($this->Charter) ? $this->Charter : null;
    }
    /**
     * Set Charter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestCharter $charter
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestData
     */
    public function setCharter(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestCharter $charter = null)
    {
        if (is_null($charter) || (is_array($charter) && empty($charter))) {
            unset($this->Charter);
        } else {
            $this->Charter = $charter;
        }
        return $this;
    }
    /**
     * Get CreateBackOffice value
     * @return string|null
     */
    public function getCreateBackOffice()
    {
        return $this->CreateBackOffice;
    }
    /**
     * Set CreateBackOffice value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\BackOfficeTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\BackOfficeTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $createBackOffice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestData
     */
    public function setCreateBackOffice($createBackOffice = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\BackOfficeTypeEnum::valueIsValid($createBackOffice)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $createBackOffice, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\BackOfficeTypeEnum::getValidValues())), __LINE__);
        }
        $this->CreateBackOffice = $createBackOffice;
        return $this;
    }
    /**
     * Get CustomerLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerLastName()
    {
        return isset($this->CustomerLastName) ? $this->CustomerLastName : null;
    }
    /**
     * Set CustomerLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerLastName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestData
     */
    public function setCustomerLastName($customerLastName = null)
    {
        // validation for constraint: string
        if (!is_null($customerLastName) && !is_string($customerLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerLastName)), __LINE__);
        }
        if (is_null($customerLastName) || (is_array($customerLastName) && empty($customerLastName))) {
            unset($this->CustomerLastName);
        } else {
            $this->CustomerLastName = $customerLastName;
        }
        return $this;
    }
    /**
     * Get IsAllotment value
     * @return bool|null
     */
    public function getIsAllotment()
    {
        return $this->IsAllotment;
    }
    /**
     * Set IsAllotment value
     * @param bool $isAllotment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestData
     */
    public function setIsAllotment($isAllotment = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAllotment) && !is_bool($isAllotment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAllotment)), __LINE__);
        }
        $this->IsAllotment = $isAllotment;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestData
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
     * Get StoredFareDetails value
     * @return bool|null
     */
    public function getStoredFareDetails()
    {
        return $this->StoredFareDetails;
    }
    /**
     * Set StoredFareDetails value
     * @param bool $storedFareDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestData
     */
    public function setStoredFareDetails($storedFareDetails = null)
    {
        // validation for constraint: boolean
        if (!is_null($storedFareDetails) && !is_bool($storedFareDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($storedFareDetails)), __LINE__);
        }
        $this->StoredFareDetails = $storedFareDetails;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestData
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
     * Get TicketDetails value
     * @return bool|null
     */
    public function getTicketDetails()
    {
        return $this->TicketDetails;
    }
    /**
     * Set TicketDetails value
     * @param bool $ticketDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestData
     */
    public function setTicketDetails($ticketDetails = null)
    {
        // validation for constraint: boolean
        if (!is_null($ticketDetails) && !is_bool($ticketDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ticketDetails)), __LINE__);
        }
        $this->TicketDetails = $ticketDetails;
        return $this;
    }
    /**
     * Get Web value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestWeb|null
     */
    public function getWeb()
    {
        return isset($this->Web) ? $this->Web : null;
    }
    /**
     * Set Web value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestWeb $web
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestData
     */
    public function setWeb(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestWeb $web = null)
    {
        if (is_null($web) || (is_array($web) && empty($web))) {
            unset($this->Web);
        } else {
            $this->Web = $web;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRRequestData
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
