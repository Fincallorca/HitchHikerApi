<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LegData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LegData
 * @subpackage Structs
 */
class LegData extends AbstractStructBase
{
    /**
     * The AgentID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AgentID;
    /**
     * The BookingClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BookingClass;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CarrierCode;
    /**
     * The Connections
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfLegConnectionData
     */
    public $Connections;
    /**
     * The FareTypeCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareTypeCode;
    /**
     * The Farebase
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Farebase;
    /**
     * The LegFareInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseLegFareInfo
     */
    public $LegFareInfo;
    /**
     * The MajorCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MajorCarrier;
    /**
     * The Recordset
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Recordset;
    /**
     * The Requirements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Requirements;
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
     * The Users
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfResponseUserData
     */
    public $Users;
    /**
     * Constructor method for LegData
     * @uses LegData::setAgentID()
     * @uses LegData::setBookingClass()
     * @uses LegData::setCarrierCode()
     * @uses LegData::setConnections()
     * @uses LegData::setFareTypeCode()
     * @uses LegData::setFarebase()
     * @uses LegData::setLegFareInfo()
     * @uses LegData::setMajorCarrier()
     * @uses LegData::setRecordset()
     * @uses LegData::setRequirements()
     * @uses LegData::setTariffSubType()
     * @uses LegData::setTariffType()
     * @uses LegData::setUsers()
     * @param string $agentID
     * @param string $bookingClass
     * @param string $carrierCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfLegConnectionData $connections
     * @param string $fareTypeCode
     * @param string $farebase
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseLegFareInfo $legFareInfo
     * @param string $majorCarrier
     * @param string $recordset
     * @param string $requirements
     * @param string $tariffSubType
     * @param string $tariffType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfResponseUserData $users
     */
    public function __construct($agentID = null, $bookingClass = null, $carrierCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfLegConnectionData $connections = null, $fareTypeCode = null, $farebase = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseLegFareInfo $legFareInfo = null, $majorCarrier = null, $recordset = null, $requirements = null, $tariffSubType = null, $tariffType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfResponseUserData $users = null)
    {
        $this
            ->setAgentID($agentID)
            ->setBookingClass($bookingClass)
            ->setCarrierCode($carrierCode)
            ->setConnections($connections)
            ->setFareTypeCode($fareTypeCode)
            ->setFarebase($farebase)
            ->setLegFareInfo($legFareInfo)
            ->setMajorCarrier($majorCarrier)
            ->setRecordset($recordset)
            ->setRequirements($requirements)
            ->setTariffSubType($tariffSubType)
            ->setTariffType($tariffType)
            ->setUsers($users);
    }
    /**
     * Get AgentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAgentID()
    {
        return isset($this->AgentID) ? $this->AgentID : null;
    }
    /**
     * Set AgentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $agentID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData
     */
    public function setAgentID($agentID = null)
    {
        // validation for constraint: string
        if (!is_null($agentID) && !is_string($agentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentID)), __LINE__);
        }
        if (is_null($agentID) || (is_array($agentID) && empty($agentID))) {
            unset($this->AgentID);
        } else {
            $this->AgentID = $agentID;
        }
        return $this;
    }
    /**
     * Get BookingClass value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBookingClass()
    {
        return isset($this->BookingClass) ? $this->BookingClass : null;
    }
    /**
     * Set BookingClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $bookingClass
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData
     */
    public function setBookingClass($bookingClass = null)
    {
        // validation for constraint: string
        if (!is_null($bookingClass) && !is_string($bookingClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingClass)), __LINE__);
        }
        if (is_null($bookingClass) || (is_array($bookingClass) && empty($bookingClass))) {
            unset($this->BookingClass);
        } else {
            $this->BookingClass = $bookingClass;
        }
        return $this;
    }
    /**
     * Get CarrierCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCarrierCode()
    {
        return isset($this->CarrierCode) ? $this->CarrierCode : null;
    }
    /**
     * Set CarrierCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $carrierCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierCode)), __LINE__);
        }
        if (is_null($carrierCode) || (is_array($carrierCode) && empty($carrierCode))) {
            unset($this->CarrierCode);
        } else {
            $this->CarrierCode = $carrierCode;
        }
        return $this;
    }
    /**
     * Get Connections value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfLegConnectionData|null
     */
    public function getConnections()
    {
        return isset($this->Connections) ? $this->Connections : null;
    }
    /**
     * Set Connections value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfLegConnectionData $connections
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData
     */
    public function setConnections(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfLegConnectionData $connections = null)
    {
        if (is_null($connections) || (is_array($connections) && empty($connections))) {
            unset($this->Connections);
        } else {
            $this->Connections = $connections;
        }
        return $this;
    }
    /**
     * Get FareTypeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareTypeCode()
    {
        return isset($this->FareTypeCode) ? $this->FareTypeCode : null;
    }
    /**
     * Set FareTypeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareTypeCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData
     */
    public function setFareTypeCode($fareTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($fareTypeCode) && !is_string($fareTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareTypeCode)), __LINE__);
        }
        if (is_null($fareTypeCode) || (is_array($fareTypeCode) && empty($fareTypeCode))) {
            unset($this->FareTypeCode);
        } else {
            $this->FareTypeCode = $fareTypeCode;
        }
        return $this;
    }
    /**
     * Get Farebase value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFarebase()
    {
        return isset($this->Farebase) ? $this->Farebase : null;
    }
    /**
     * Set Farebase value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $farebase
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData
     */
    public function setFarebase($farebase = null)
    {
        // validation for constraint: string
        if (!is_null($farebase) && !is_string($farebase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($farebase)), __LINE__);
        }
        if (is_null($farebase) || (is_array($farebase) && empty($farebase))) {
            unset($this->Farebase);
        } else {
            $this->Farebase = $farebase;
        }
        return $this;
    }
    /**
     * Get LegFareInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseLegFareInfo|null
     */
    public function getLegFareInfo()
    {
        return isset($this->LegFareInfo) ? $this->LegFareInfo : null;
    }
    /**
     * Set LegFareInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseLegFareInfo $legFareInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData
     */
    public function setLegFareInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseLegFareInfo $legFareInfo = null)
    {
        if (is_null($legFareInfo) || (is_array($legFareInfo) && empty($legFareInfo))) {
            unset($this->LegFareInfo);
        } else {
            $this->LegFareInfo = $legFareInfo;
        }
        return $this;
    }
    /**
     * Get MajorCarrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMajorCarrier()
    {
        return isset($this->MajorCarrier) ? $this->MajorCarrier : null;
    }
    /**
     * Set MajorCarrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $majorCarrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData
     */
    public function setMajorCarrier($majorCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($majorCarrier) && !is_string($majorCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($majorCarrier)), __LINE__);
        }
        if (is_null($majorCarrier) || (is_array($majorCarrier) && empty($majorCarrier))) {
            unset($this->MajorCarrier);
        } else {
            $this->MajorCarrier = $majorCarrier;
        }
        return $this;
    }
    /**
     * Get Recordset value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecordset()
    {
        return isset($this->Recordset) ? $this->Recordset : null;
    }
    /**
     * Set Recordset value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recordset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData
     */
    public function setRecordset($recordset = null)
    {
        // validation for constraint: string
        if (!is_null($recordset) && !is_string($recordset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordset)), __LINE__);
        }
        if (is_null($recordset) || (is_array($recordset) && empty($recordset))) {
            unset($this->Recordset);
        } else {
            $this->Recordset = $recordset;
        }
        return $this;
    }
    /**
     * Get Requirements value
     * @return string|null
     */
    public function getRequirements()
    {
        return $this->Requirements;
    }
    /**
     * Set Requirements value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\RequirementEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\RequirementEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $requirements
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData
     */
    public function setRequirements($requirements = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\RequirementEnum::valueIsValid($requirements)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $requirements, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\RequirementEnum::getValidValues())), __LINE__);
        }
        $this->Requirements = $requirements;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData
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
     * Get Users value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfResponseUserData|null
     */
    public function getUsers()
    {
        return isset($this->Users) ? $this->Users : null;
    }
    /**
     * Set Users value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfResponseUserData $users
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData
     */
    public function setUsers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfResponseUserData $users = null)
    {
        if (is_null($users) || (is_array($users) && empty($users))) {
            unset($this->Users);
        } else {
            $this->Users = $users;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegData
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
