<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharterAccount StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CharterAccount
 * @subpackage Structs
 */
class CharterAccount extends AbstractStructBase
{
    /**
     * The AccountID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $AccountID;
    /**
     * The AccountName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $AccountName;
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CompanyName;
    /**
     * The LoginName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $LoginName;
    /**
     * The LoginPassword
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $LoginPassword;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Source;
    /**
     * Constructor method for CharterAccount
     * @uses CharterAccount::setAccountID()
     * @uses CharterAccount::setAccountName()
     * @uses CharterAccount::setCompanyName()
     * @uses CharterAccount::setLoginName()
     * @uses CharterAccount::setLoginPassword()
     * @uses CharterAccount::setSource()
     * @param string $accountID
     * @param string $accountName
     * @param string $companyName
     * @param string $loginName
     * @param string $loginPassword
     * @param string $source
     */
    public function __construct($accountID = null, $accountName = null, $companyName = null, $loginName = null, $loginPassword = null, $source = null)
    {
        $this
            ->setAccountID($accountID)
            ->setAccountName($accountName)
            ->setCompanyName($companyName)
            ->setLoginName($loginName)
            ->setLoginPassword($loginPassword)
            ->setSource($source);
    }
    /**
     * Get AccountID value
     * @return string|null
     */
    public function getAccountID()
    {
        return $this->AccountID;
    }
    /**
     * Set AccountID value
     * @param string $accountID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount
     */
    public function setAccountID($accountID = null)
    {
        // validation for constraint: string
        if (!is_null($accountID) && !is_string($accountID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountID)), __LINE__);
        }
        $this->AccountID = $accountID;
        return $this;
    }
    /**
     * Get AccountName value
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }
    /**
     * Set AccountName value
     * @param string $accountName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount
     */
    public function setAccountName($accountName = null)
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountName)), __LINE__);
        }
        $this->AccountName = $accountName;
        return $this;
    }
    /**
     * Get CompanyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCompanyName()
    {
        return isset($this->CompanyName) ? $this->CompanyName : null;
    }
    /**
     * Set CompanyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $companyName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyName)), __LINE__);
        }
        if (is_null($companyName) || (is_array($companyName) && empty($companyName))) {
            unset($this->CompanyName);
        } else {
            $this->CompanyName = $companyName;
        }
        return $this;
    }
    /**
     * Get LoginName value
     * @return string|null
     */
    public function getLoginName()
    {
        return $this->LoginName;
    }
    /**
     * Set LoginName value
     * @param string $loginName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount
     */
    public function setLoginName($loginName = null)
    {
        // validation for constraint: string
        if (!is_null($loginName) && !is_string($loginName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($loginName)), __LINE__);
        }
        $this->LoginName = $loginName;
        return $this;
    }
    /**
     * Get LoginPassword value
     * @return string|null
     */
    public function getLoginPassword()
    {
        return $this->LoginPassword;
    }
    /**
     * Set LoginPassword value
     * @param string $loginPassword
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount
     */
    public function setLoginPassword($loginPassword = null)
    {
        // validation for constraint: string
        if (!is_null($loginPassword) && !is_string($loginPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($loginPassword)), __LINE__);
        }
        $this->LoginPassword = $loginPassword;
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
     * @param string $source
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount
     */
    public function setSource($source = null)
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($source)), __LINE__);
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount
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
