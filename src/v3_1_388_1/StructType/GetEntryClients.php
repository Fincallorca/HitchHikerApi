<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEntryClients StructType
 * @subpackage Structs
 */
class GetEntryClients extends AbstractStructBase
{
    /**
     * The Login
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LoginData
     */
    public $Login;
    /**
     * The DBCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DBCode;
    /**
     * Constructor method for GetEntryClients
     * @uses GetEntryClients::setLogin()
     * @uses GetEntryClients::setDBCode()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LoginData $login
     * @param string $dBCode
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LoginData $login = null, $dBCode = null)
    {
        $this
            ->setLogin($login)
            ->setDBCode($dBCode);
    }
    /**
     * Get Login value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LoginData|null
     */
    public function getLogin()
    {
        return isset($this->Login) ? $this->Login : null;
    }
    /**
     * Set Login value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LoginData $login
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetEntryClients
     */
    public function setLogin(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LoginData $login = null)
    {
        if (is_null($login) || (is_array($login) && empty($login))) {
            unset($this->Login);
        } else {
            $this->Login = $login;
        }
        return $this;
    }
    /**
     * Get DBCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDBCode()
    {
        return isset($this->DBCode) ? $this->DBCode : null;
    }
    /**
     * Set DBCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dBCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetEntryClients
     */
    public function setDBCode($dBCode = null)
    {
        // validation for constraint: string
        if (!is_null($dBCode) && !is_string($dBCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dBCode)), __LINE__);
        }
        if (is_null($dBCode) || (is_array($dBCode) && empty($dBCode))) {
            unset($this->DBCode);
        } else {
            $this->DBCode = $dBCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetEntryClients
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
