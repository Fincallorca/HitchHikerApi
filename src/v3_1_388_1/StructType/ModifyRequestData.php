<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyRequestData
 * @subpackage Structs
 */
class ModifyRequestData extends AbstractStructBase
{
    /**
     * The AddContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestContact
     */
    public $AddContact;
    /**
     * The AddPassengersToGroupBooking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AddPassengersToGroupBooking;
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
     * The CustomerLastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CustomerLastName;
    /**
     * The FormOfPayments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFormOfPayment
     */
    public $FormOfPayments;
    /**
     * The Legs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestLeg
     */
    public $Legs;
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestPassenger
     */
    public $Passengers;
    /**
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $RecordLocator;
    /**
     * The Remarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Remarks;
    /**
     * The SegmentStati
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyStatus
     */
    public $SegmentStati;
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
     * The WebConfig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestWebConfig
     */
    public $WebConfig;
    /**
     * The vFMacro
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestvFMacro
     */
    public $vFMacro;
    /**
     * Constructor method for ModifyRequestData
     * @uses ModifyRequestData::setAddContact()
     * @uses ModifyRequestData::setAddPassengersToGroupBooking()
     * @uses ModifyRequestData::setAllotmentAccountData()
     * @uses ModifyRequestData::setCRSConfig()
     * @uses ModifyRequestData::setCustomerLastName()
     * @uses ModifyRequestData::setFormOfPayments()
     * @uses ModifyRequestData::setLegs()
     * @uses ModifyRequestData::setPassengers()
     * @uses ModifyRequestData::setRecordLocator()
     * @uses ModifyRequestData::setRemarks()
     * @uses ModifyRequestData::setSegmentStati()
     * @uses ModifyRequestData::setSession()
     * @uses ModifyRequestData::setSource()
     * @uses ModifyRequestData::setWebConfig()
     * @uses ModifyRequestData::setVFMacro()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestContact $addContact
     * @param bool $addPassengersToGroupBooking
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentAccountData
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @param string $customerLastName
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFormOfPayment $formOfPayments
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestLeg $legs
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestPassenger $passengers
     * @param string $recordLocator
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $remarks
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyStatus $segmentStati
     * @param string $session
     * @param string $source
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestWebConfig $webConfig
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestvFMacro $vFMacro
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestContact $addContact = null, $addPassengersToGroupBooking = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $allotmentAccountData = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null, $customerLastName = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFormOfPayment $formOfPayments = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestLeg $legs = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestPassenger $passengers = null, $recordLocator = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $remarks = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyStatus $segmentStati = null, $session = null, $source = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestWebConfig $webConfig = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestvFMacro $vFMacro = null)
    {
        $this
            ->setAddContact($addContact)
            ->setAddPassengersToGroupBooking($addPassengersToGroupBooking)
            ->setAllotmentAccountData($allotmentAccountData)
            ->setCRSConfig($cRSConfig)
            ->setCustomerLastName($customerLastName)
            ->setFormOfPayments($formOfPayments)
            ->setLegs($legs)
            ->setPassengers($passengers)
            ->setRecordLocator($recordLocator)
            ->setRemarks($remarks)
            ->setSegmentStati($segmentStati)
            ->setSession($session)
            ->setSource($source)
            ->setWebConfig($webConfig)
            ->setVFMacro($vFMacro);
    }
    /**
     * Get AddContact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestContact|null
     */
    public function getAddContact()
    {
        return isset($this->AddContact) ? $this->AddContact : null;
    }
    /**
     * Set AddContact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestContact $addContact
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestData
     */
    public function setAddContact(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestContact $addContact = null)
    {
        if (is_null($addContact) || (is_array($addContact) && empty($addContact))) {
            unset($this->AddContact);
        } else {
            $this->AddContact = $addContact;
        }
        return $this;
    }
    /**
     * Get AddPassengersToGroupBooking value
     * @return bool|null
     */
    public function getAddPassengersToGroupBooking()
    {
        return $this->AddPassengersToGroupBooking;
    }
    /**
     * Set AddPassengersToGroupBooking value
     * @param bool $addPassengersToGroupBooking
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestData
     */
    public function setAddPassengersToGroupBooking($addPassengersToGroupBooking = null)
    {
        // validation for constraint: boolean
        if (!is_null($addPassengersToGroupBooking) && !is_bool($addPassengersToGroupBooking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($addPassengersToGroupBooking)), __LINE__);
        }
        $this->AddPassengersToGroupBooking = $addPassengersToGroupBooking;
        return $this;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestData
     */
    public function setCRSConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null)
    {
        $this->CRSConfig = $cRSConfig;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestData
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
     * Get FormOfPayments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFormOfPayment|null
     */
    public function getFormOfPayments()
    {
        return isset($this->FormOfPayments) ? $this->FormOfPayments : null;
    }
    /**
     * Set FormOfPayments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFormOfPayment $formOfPayments
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestData
     */
    public function setFormOfPayments(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFormOfPayment $formOfPayments = null)
    {
        if (is_null($formOfPayments) || (is_array($formOfPayments) && empty($formOfPayments))) {
            unset($this->FormOfPayments);
        } else {
            $this->FormOfPayments = $formOfPayments;
        }
        return $this;
    }
    /**
     * Get Legs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestLeg|null
     */
    public function getLegs()
    {
        return isset($this->Legs) ? $this->Legs : null;
    }
    /**
     * Set Legs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestLeg $legs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestData
     */
    public function setLegs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestLeg $legs = null)
    {
        if (is_null($legs) || (is_array($legs) && empty($legs))) {
            unset($this->Legs);
        } else {
            $this->Legs = $legs;
        }
        return $this;
    }
    /**
     * Get Passengers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestPassenger|null
     */
    public function getPassengers()
    {
        return isset($this->Passengers) ? $this->Passengers : null;
    }
    /**
     * Set Passengers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestPassenger $passengers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestData
     */
    public function setPassengers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestPassenger $passengers = null)
    {
        if (is_null($passengers) || (is_array($passengers) && empty($passengers))) {
            unset($this->Passengers);
        } else {
            $this->Passengers = $passengers;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestData
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
     * Get Remarks value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getRemarks()
    {
        return isset($this->Remarks) ? $this->Remarks : null;
    }
    /**
     * Set Remarks value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $remarks
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestData
     */
    public function setRemarks(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $remarks = null)
    {
        if (is_null($remarks) || (is_array($remarks) && empty($remarks))) {
            unset($this->Remarks);
        } else {
            $this->Remarks = $remarks;
        }
        return $this;
    }
    /**
     * Get SegmentStati value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyStatus|null
     */
    public function getSegmentStati()
    {
        return isset($this->SegmentStati) ? $this->SegmentStati : null;
    }
    /**
     * Set SegmentStati value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyStatus $segmentStati
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestData
     */
    public function setSegmentStati(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyStatus $segmentStati = null)
    {
        if (is_null($segmentStati) || (is_array($segmentStati) && empty($segmentStati))) {
            unset($this->SegmentStati);
        } else {
            $this->SegmentStati = $segmentStati;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestData
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
     * Get WebConfig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestWebConfig|null
     */
    public function getWebConfig()
    {
        return isset($this->WebConfig) ? $this->WebConfig : null;
    }
    /**
     * Set WebConfig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestWebConfig $webConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestData
     */
    public function setWebConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestWebConfig $webConfig = null)
    {
        if (is_null($webConfig) || (is_array($webConfig) && empty($webConfig))) {
            unset($this->WebConfig);
        } else {
            $this->WebConfig = $webConfig;
        }
        return $this;
    }
    /**
     * Get vFMacro value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestvFMacro|null
     */
    public function getVFMacro()
    {
        return isset($this->vFMacro) ? $this->vFMacro : null;
    }
    /**
     * Set vFMacro value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestvFMacro $vFMacro
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestData
     */
    public function setVFMacro(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestvFMacro $vFMacro = null)
    {
        if (is_null($vFMacro) || (is_array($vFMacro) && empty($vFMacro))) {
            unset($this->vFMacro);
        } else {
            $this->vFMacro = $vFMacro;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestData
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
