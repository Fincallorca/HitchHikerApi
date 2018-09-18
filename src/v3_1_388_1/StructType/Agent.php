<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Agent StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Agent
 * @subpackage Structs
 */
class Agent extends AbstractStructBase
{
    /**
     * The APIPassword
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $APIPassword;
    /**
     * The APIUser
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $APIUser;
    /**
     * The Carrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Carrier;
    /**
     * The CompanyID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CompanyID;
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CompanyName;
    /**
     * The CorporateCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $CorporateCodes;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FirstName;
    /**
     * The IncludePublished
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IncludePublished;
    /**
     * The LoginID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $LoginID;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The OptionalPlugIn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OptionalPlugIn;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Password;
    /**
     * Constructor method for Agent
     * @uses Agent::setAPIPassword()
     * @uses Agent::setAPIUser()
     * @uses Agent::setCarrier()
     * @uses Agent::setCompanyID()
     * @uses Agent::setCompanyName()
     * @uses Agent::setCorporateCodes()
     * @uses Agent::setFirstName()
     * @uses Agent::setIncludePublished()
     * @uses Agent::setLoginID()
     * @uses Agent::setName()
     * @uses Agent::setOptionalPlugIn()
     * @uses Agent::setPassword()
     * @param string $aPIPassword
     * @param string $aPIUser
     * @param string $carrier
     * @param string $companyID
     * @param string $companyName
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $corporateCodes
     * @param string $firstName
     * @param bool $includePublished
     * @param string $loginID
     * @param string $name
     * @param string $optionalPlugIn
     * @param string $password
     */
    public function __construct($aPIPassword = null, $aPIUser = null, $carrier = null, $companyID = null, $companyName = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $corporateCodes = null, $firstName = null, $includePublished = null, $loginID = null, $name = null, $optionalPlugIn = null, $password = null)
    {
        $this
            ->setAPIPassword($aPIPassword)
            ->setAPIUser($aPIUser)
            ->setCarrier($carrier)
            ->setCompanyID($companyID)
            ->setCompanyName($companyName)
            ->setCorporateCodes($corporateCodes)
            ->setFirstName($firstName)
            ->setIncludePublished($includePublished)
            ->setLoginID($loginID)
            ->setName($name)
            ->setOptionalPlugIn($optionalPlugIn)
            ->setPassword($password);
    }
    /**
     * Get APIPassword value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAPIPassword()
    {
        return isset($this->APIPassword) ? $this->APIPassword : null;
    }
    /**
     * Set APIPassword value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $aPIPassword
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
     */
    public function setAPIPassword($aPIPassword = null)
    {
        // validation for constraint: string
        if (!is_null($aPIPassword) && !is_string($aPIPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aPIPassword)), __LINE__);
        }
        if (is_null($aPIPassword) || (is_array($aPIPassword) && empty($aPIPassword))) {
            unset($this->APIPassword);
        } else {
            $this->APIPassword = $aPIPassword;
        }
        return $this;
    }
    /**
     * Get APIUser value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAPIUser()
    {
        return isset($this->APIUser) ? $this->APIUser : null;
    }
    /**
     * Set APIUser value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $aPIUser
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
     */
    public function setAPIUser($aPIUser = null)
    {
        // validation for constraint: string
        if (!is_null($aPIUser) && !is_string($aPIUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aPIUser)), __LINE__);
        }
        if (is_null($aPIUser) || (is_array($aPIUser) && empty($aPIUser))) {
            unset($this->APIUser);
        } else {
            $this->APIUser = $aPIUser;
        }
        return $this;
    }
    /**
     * Get Carrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCarrier()
    {
        return isset($this->Carrier) ? $this->Carrier : null;
    }
    /**
     * Set Carrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $carrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
     */
    public function setCarrier($carrier = null)
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrier)), __LINE__);
        }
        if (is_null($carrier) || (is_array($carrier) && empty($carrier))) {
            unset($this->Carrier);
        } else {
            $this->Carrier = $carrier;
        }
        return $this;
    }
    /**
     * Get CompanyID value
     * @return string|null
     */
    public function getCompanyID()
    {
        return $this->CompanyID;
    }
    /**
     * Set CompanyID value
     * @param string $companyID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
     */
    public function setCompanyID($companyID = null)
    {
        // validation for constraint: string
        if (!is_null($companyID) && !is_string($companyID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyID)), __LINE__);
        }
        $this->CompanyID = $companyID;
        return $this;
    }
    /**
     * Get CompanyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param string $companyName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyName)), __LINE__);
        }
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get CorporateCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getCorporateCodes()
    {
        return isset($this->CorporateCodes) ? $this->CorporateCodes : null;
    }
    /**
     * Set CorporateCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $corporateCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
     */
    public function setCorporateCodes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $corporateCodes = null)
    {
        if (is_null($corporateCodes) || (is_array($corporateCodes) && empty($corporateCodes))) {
            unset($this->CorporateCodes);
        } else {
            $this->CorporateCodes = $corporateCodes;
        }
        return $this;
    }
    /**
     * Get FirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstName()
    {
        return isset($this->FirstName) ? $this->FirstName : null;
    }
    /**
     * Set FirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->FirstName);
        } else {
            $this->FirstName = $firstName;
        }
        return $this;
    }
    /**
     * Get IncludePublished value
     * @return bool|null
     */
    public function getIncludePublished()
    {
        return $this->IncludePublished;
    }
    /**
     * Set IncludePublished value
     * @param bool $includePublished
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
     */
    public function setIncludePublished($includePublished = null)
    {
        // validation for constraint: boolean
        if (!is_null($includePublished) && !is_bool($includePublished)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includePublished)), __LINE__);
        }
        $this->IncludePublished = $includePublished;
        return $this;
    }
    /**
     * Get LoginID value
     * @return string|null
     */
    public function getLoginID()
    {
        return $this->LoginID;
    }
    /**
     * Set LoginID value
     * @param string $loginID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
     */
    public function setLoginID($loginID = null)
    {
        // validation for constraint: string
        if (!is_null($loginID) && !is_string($loginID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($loginID)), __LINE__);
        }
        $this->LoginID = $loginID;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get OptionalPlugIn value
     * @return string|null
     */
    public function getOptionalPlugIn()
    {
        return $this->OptionalPlugIn;
    }
    /**
     * Set OptionalPlugIn value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\OptionalPlugInEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\OptionalPlugInEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $optionalPlugIn
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
     */
    public function setOptionalPlugIn($optionalPlugIn = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\OptionalPlugInEnum::valueIsValid($optionalPlugIn)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $optionalPlugIn, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\OptionalPlugInEnum::getValidValues())), __LINE__);
        }
        $this->OptionalPlugIn = $optionalPlugIn;
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
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
