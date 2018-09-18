<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AllotmentAccount StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AllotmentAccount
 * @subpackage Structs
 */
class AllotmentAccount extends AbstractStructBase
{
    /**
     * The Database
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Database;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Password;
    /**
     * The User
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $User;
    /**
     * Constructor method for AllotmentAccount
     * @uses AllotmentAccount::setDatabase()
     * @uses AllotmentAccount::setPassword()
     * @uses AllotmentAccount::setUser()
     * @param string $database
     * @param string $password
     * @param string $user
     */
    public function __construct($database = null, $password = null, $user = null)
    {
        $this
            ->setDatabase($database)
            ->setPassword($password)
            ->setUser($user);
    }
    /**
     * Get Database value
     * @return string|null
     */
    public function getDatabase()
    {
        return $this->Database;
    }
    /**
     * Set Database value
     * @param string $database
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount
     */
    public function setDatabase($database = null)
    {
        // validation for constraint: string
        if (!is_null($database) && !is_string($database)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($database)), __LINE__);
        }
        $this->Database = $database;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount
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
     * Get User value
     * @return string|null
     */
    public function getUser()
    {
        return $this->User;
    }
    /**
     * Set User value
     * @param string $user
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount
     */
    public function setUser($user = null)
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($user)), __LINE__);
        }
        $this->User = $user;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount
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
