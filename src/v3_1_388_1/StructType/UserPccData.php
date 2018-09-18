<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserPccData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UserPccData
 * @subpackage Structs
 */
class UserPccData extends AbstractStructBase
{
    /**
     * The AccessPoint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AccessPoint;
    /**
     * The GDSName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GDSName;
    /**
     * The IsDefault
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDefault;
    /**
     * The OrganisationID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OrganisationID;
    /**
     * The PCC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PCC;
    /**
     * The PCCUser
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PCCUser;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Password;
    /**
     * The ReferenceID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ReferenceID;
    /**
     * The TerminalCountry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TerminalCountry;
    /**
     * Constructor method for UserPccData
     * @uses UserPccData::setAccessPoint()
     * @uses UserPccData::setGDSName()
     * @uses UserPccData::setIsDefault()
     * @uses UserPccData::setOrganisationID()
     * @uses UserPccData::setPCC()
     * @uses UserPccData::setPCCUser()
     * @uses UserPccData::setPassword()
     * @uses UserPccData::setReferenceID()
     * @uses UserPccData::setTerminalCountry()
     * @param string $accessPoint
     * @param string $gDSName
     * @param bool $isDefault
     * @param string $organisationID
     * @param string $pCC
     * @param string $pCCUser
     * @param string $password
     * @param string $referenceID
     * @param string $terminalCountry
     */
    public function __construct($accessPoint = null, $gDSName = null, $isDefault = null, $organisationID = null, $pCC = null, $pCCUser = null, $password = null, $referenceID = null, $terminalCountry = null)
    {
        $this
            ->setAccessPoint($accessPoint)
            ->setGDSName($gDSName)
            ->setIsDefault($isDefault)
            ->setOrganisationID($organisationID)
            ->setPCC($pCC)
            ->setPCCUser($pCCUser)
            ->setPassword($password)
            ->setReferenceID($referenceID)
            ->setTerminalCountry($terminalCountry);
    }
    /**
     * Get AccessPoint value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAccessPoint()
    {
        return isset($this->AccessPoint) ? $this->AccessPoint : null;
    }
    /**
     * Set AccessPoint value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $accessPoint
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData
     */
    public function setAccessPoint($accessPoint = null)
    {
        // validation for constraint: string
        if (!is_null($accessPoint) && !is_string($accessPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accessPoint)), __LINE__);
        }
        if (is_null($accessPoint) || (is_array($accessPoint) && empty($accessPoint))) {
            unset($this->AccessPoint);
        } else {
            $this->AccessPoint = $accessPoint;
        }
        return $this;
    }
    /**
     * Get GDSName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGDSName()
    {
        return isset($this->GDSName) ? $this->GDSName : null;
    }
    /**
     * Set GDSName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $gDSName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData
     */
    public function setGDSName($gDSName = null)
    {
        // validation for constraint: string
        if (!is_null($gDSName) && !is_string($gDSName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gDSName)), __LINE__);
        }
        if (is_null($gDSName) || (is_array($gDSName) && empty($gDSName))) {
            unset($this->GDSName);
        } else {
            $this->GDSName = $gDSName;
        }
        return $this;
    }
    /**
     * Get IsDefault value
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->IsDefault;
    }
    /**
     * Set IsDefault value
     * @param bool $isDefault
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData
     */
    public function setIsDefault($isDefault = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDefault) && !is_bool($isDefault)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDefault)), __LINE__);
        }
        $this->IsDefault = $isDefault;
        return $this;
    }
    /**
     * Get OrganisationID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrganisationID()
    {
        return isset($this->OrganisationID) ? $this->OrganisationID : null;
    }
    /**
     * Set OrganisationID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $organisationID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData
     */
    public function setOrganisationID($organisationID = null)
    {
        // validation for constraint: string
        if (!is_null($organisationID) && !is_string($organisationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($organisationID)), __LINE__);
        }
        if (is_null($organisationID) || (is_array($organisationID) && empty($organisationID))) {
            unset($this->OrganisationID);
        } else {
            $this->OrganisationID = $organisationID;
        }
        return $this;
    }
    /**
     * Get PCC value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPCC()
    {
        return isset($this->PCC) ? $this->PCC : null;
    }
    /**
     * Set PCC value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pCC
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData
     */
    public function setPCC($pCC = null)
    {
        // validation for constraint: string
        if (!is_null($pCC) && !is_string($pCC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pCC)), __LINE__);
        }
        if (is_null($pCC) || (is_array($pCC) && empty($pCC))) {
            unset($this->PCC);
        } else {
            $this->PCC = $pCC;
        }
        return $this;
    }
    /**
     * Get PCCUser value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPCCUser()
    {
        return isset($this->PCCUser) ? $this->PCCUser : null;
    }
    /**
     * Set PCCUser value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pCCUser
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData
     */
    public function setPCCUser($pCCUser = null)
    {
        // validation for constraint: string
        if (!is_null($pCCUser) && !is_string($pCCUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pCCUser)), __LINE__);
        }
        if (is_null($pCCUser) || (is_array($pCCUser) && empty($pCCUser))) {
            unset($this->PCCUser);
        } else {
            $this->PCCUser = $pCCUser;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData
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
     * Get ReferenceID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReferenceID()
    {
        return isset($this->ReferenceID) ? $this->ReferenceID : null;
    }
    /**
     * Set ReferenceID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $referenceID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData
     */
    public function setReferenceID($referenceID = null)
    {
        // validation for constraint: string
        if (!is_null($referenceID) && !is_string($referenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceID)), __LINE__);
        }
        if (is_null($referenceID) || (is_array($referenceID) && empty($referenceID))) {
            unset($this->ReferenceID);
        } else {
            $this->ReferenceID = $referenceID;
        }
        return $this;
    }
    /**
     * Get TerminalCountry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTerminalCountry()
    {
        return isset($this->TerminalCountry) ? $this->TerminalCountry : null;
    }
    /**
     * Set TerminalCountry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $terminalCountry
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData
     */
    public function setTerminalCountry($terminalCountry = null)
    {
        // validation for constraint: string
        if (!is_null($terminalCountry) && !is_string($terminalCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($terminalCountry)), __LINE__);
        }
        if (is_null($terminalCountry) || (is_array($terminalCountry) && empty($terminalCountry))) {
            unset($this->TerminalCountry);
        } else {
            $this->TerminalCountry = $terminalCountry;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData
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
