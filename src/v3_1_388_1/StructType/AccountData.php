<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AccountData
 * @subpackage Structs
 */
class AccountData extends AbstractStructBase
{
    /**
     * The CustomerEmail
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CustomerEmail;
    /**
     * The IPAddress
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $IPAddress;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Password;
    /**
     * The UserID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $UserID;
    /**
     * Constructor method for AccountData
     * @uses AccountData::setCustomerEmail()
     * @uses AccountData::setIPAddress()
     * @uses AccountData::setPassword()
     * @uses AccountData::setUserID()
     * @param string $customerEmail
     * @param string $iPAddress
     * @param string $password
     * @param string $userID
     */
    public function __construct($customerEmail = null, $iPAddress = null, $password = null, $userID = null)
    {
        $this
            ->setCustomerEmail($customerEmail)
            ->setIPAddress($iPAddress)
            ->setPassword($password)
            ->setUserID($userID);
    }
    /**
     * Get CustomerEmail value
     * @return string|null
     */
    public function getCustomerEmail()
    {
        return $this->CustomerEmail;
    }
    /**
     * Set CustomerEmail value
     * @param string $customerEmail
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AccountData
     */
    public function setCustomerEmail($customerEmail = null)
    {
        // validation for constraint: string
        if (!is_null($customerEmail) && !is_string($customerEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerEmail)), __LINE__);
        }
        $this->CustomerEmail = $customerEmail;
        return $this;
    }
    /**
     * Get IPAddress value
     * @return string|null
     */
    public function getIPAddress()
    {
        return $this->IPAddress;
    }
    /**
     * Set IPAddress value
     * @param string $iPAddress
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AccountData
     */
    public function setIPAddress($iPAddress = null)
    {
        // validation for constraint: string
        if (!is_null($iPAddress) && !is_string($iPAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iPAddress)), __LINE__);
        }
        $this->IPAddress = $iPAddress;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AccountData
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
     * Get UserID value
     * @return string|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AccountData
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AccountData
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
