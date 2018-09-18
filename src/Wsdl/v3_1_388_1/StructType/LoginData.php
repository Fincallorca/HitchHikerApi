<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoginData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LoginData
 * @subpackage Structs
 */
class LoginData extends AbstractStructBase
{
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Password;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $TransactionID;
    /**
     * The UserName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $UserName;
    /**
     * Constructor method for LoginData
     * @uses LoginData::setPassword()
     * @uses LoginData::setTransactionID()
     * @uses LoginData::setUserName()
     * @param string $password
     * @param string $transactionID
     * @param string $userName
     */
    public function __construct($password = null, $transactionID = null, $userName = null)
    {
        $this
            ->setPassword($password)
            ->setTransactionID($transactionID)
            ->setUserName($userName);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LoginData
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
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LoginData
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get UserName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * Set UserName value
     * @param string $userName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LoginData
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userName)), __LINE__);
        }
        $this->UserName = $userName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LoginData
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
