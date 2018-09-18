<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareResponseLeg StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareResponseLeg
 * @subpackage Structs
 */
class FareResponseLeg extends AbstractStructBase
{
    /**
     * The AgentCompanyID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AgentCompanyID;
    /**
     * The AgentCorporateCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AgentCorporateCode;
    /**
     * The AgentID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AgentID;
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
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseConnection
     */
    public $Connections;
    /**
     * The FareGroups
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $FareGroups;
    /**
     * The FareTypeCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareTypeCode;
    /**
     * The LegFareInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegFareInfo
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
     * The Passenger
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseLegPassenger
     */
    public $Passenger;
    /**
     * The Recordset
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Recordset;
    /**
     * The RequirementValues
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RequirementValues;
    /**
     * The Users
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseUserData
     */
    public $Users;
    /**
     * Constructor method for FareResponseLeg
     * @uses FareResponseLeg::setAgentCompanyID()
     * @uses FareResponseLeg::setAgentCorporateCode()
     * @uses FareResponseLeg::setAgentID()
     * @uses FareResponseLeg::setCarrierCode()
     * @uses FareResponseLeg::setConnections()
     * @uses FareResponseLeg::setFareGroups()
     * @uses FareResponseLeg::setFareTypeCode()
     * @uses FareResponseLeg::setLegFareInfo()
     * @uses FareResponseLeg::setMajorCarrier()
     * @uses FareResponseLeg::setPassenger()
     * @uses FareResponseLeg::setRecordset()
     * @uses FareResponseLeg::setRequirementValues()
     * @uses FareResponseLeg::setUsers()
     * @param string $agentCompanyID
     * @param string $agentCorporateCode
     * @param string $agentID
     * @param string $carrierCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseConnection $connections
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups
     * @param string $fareTypeCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegFareInfo $legFareInfo
     * @param string $majorCarrier
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseLegPassenger $passenger
     * @param string $recordset
     * @param int $requirementValues
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseUserData $users
     */
    public function __construct($agentCompanyID = null, $agentCorporateCode = null, $agentID = null, $carrierCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseConnection $connections = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups = null, $fareTypeCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegFareInfo $legFareInfo = null, $majorCarrier = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseLegPassenger $passenger = null, $recordset = null, $requirementValues = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseUserData $users = null)
    {
        $this
            ->setAgentCompanyID($agentCompanyID)
            ->setAgentCorporateCode($agentCorporateCode)
            ->setAgentID($agentID)
            ->setCarrierCode($carrierCode)
            ->setConnections($connections)
            ->setFareGroups($fareGroups)
            ->setFareTypeCode($fareTypeCode)
            ->setLegFareInfo($legFareInfo)
            ->setMajorCarrier($majorCarrier)
            ->setPassenger($passenger)
            ->setRecordset($recordset)
            ->setRequirementValues($requirementValues)
            ->setUsers($users);
    }
    /**
     * Get AgentCompanyID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAgentCompanyID()
    {
        return isset($this->AgentCompanyID) ? $this->AgentCompanyID : null;
    }
    /**
     * Set AgentCompanyID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $agentCompanyID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg
     */
    public function setAgentCompanyID($agentCompanyID = null)
    {
        // validation for constraint: string
        if (!is_null($agentCompanyID) && !is_string($agentCompanyID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentCompanyID)), __LINE__);
        }
        if (is_null($agentCompanyID) || (is_array($agentCompanyID) && empty($agentCompanyID))) {
            unset($this->AgentCompanyID);
        } else {
            $this->AgentCompanyID = $agentCompanyID;
        }
        return $this;
    }
    /**
     * Get AgentCorporateCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAgentCorporateCode()
    {
        return isset($this->AgentCorporateCode) ? $this->AgentCorporateCode : null;
    }
    /**
     * Set AgentCorporateCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $agentCorporateCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg
     */
    public function setAgentCorporateCode($agentCorporateCode = null)
    {
        // validation for constraint: string
        if (!is_null($agentCorporateCode) && !is_string($agentCorporateCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentCorporateCode)), __LINE__);
        }
        if (is_null($agentCorporateCode) || (is_array($agentCorporateCode) && empty($agentCorporateCode))) {
            unset($this->AgentCorporateCode);
        } else {
            $this->AgentCorporateCode = $agentCorporateCode;
        }
        return $this;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseConnection|null
     */
    public function getConnections()
    {
        return isset($this->Connections) ? $this->Connections : null;
    }
    /**
     * Set Connections value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseConnection $connections
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg
     */
    public function setConnections(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseConnection $connections = null)
    {
        if (is_null($connections) || (is_array($connections) && empty($connections))) {
            unset($this->Connections);
        } else {
            $this->Connections = $connections;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg
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
     * Get LegFareInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegFareInfo|null
     */
    public function getLegFareInfo()
    {
        return isset($this->LegFareInfo) ? $this->LegFareInfo : null;
    }
    /**
     * Set LegFareInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegFareInfo $legFareInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg
     */
    public function setLegFareInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegFareInfo $legFareInfo = null)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg
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
     * Get Passenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseLegPassenger|null
     */
    public function getPassenger()
    {
        return isset($this->Passenger) ? $this->Passenger : null;
    }
    /**
     * Set Passenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseLegPassenger $passenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg
     */
    public function setPassenger(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseLegPassenger $passenger = null)
    {
        if (is_null($passenger) || (is_array($passenger) && empty($passenger))) {
            unset($this->Passenger);
        } else {
            $this->Passenger = $passenger;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg
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
     * Get RequirementValues value
     * @return int|null
     */
    public function getRequirementValues()
    {
        return $this->RequirementValues;
    }
    /**
     * Set RequirementValues value
     * @param int $requirementValues
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg
     */
    public function setRequirementValues($requirementValues = null)
    {
        // validation for constraint: int
        if (!is_null($requirementValues) && !is_numeric($requirementValues)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($requirementValues)), __LINE__);
        }
        $this->RequirementValues = $requirementValues;
        return $this;
    }
    /**
     * Get Users value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseUserData|null
     */
    public function getUsers()
    {
        return isset($this->Users) ? $this->Users : null;
    }
    /**
     * Set Users value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseUserData $users
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg
     */
    public function setUsers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseUserData $users = null)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLeg
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
