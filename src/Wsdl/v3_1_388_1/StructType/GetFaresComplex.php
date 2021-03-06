<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFaresComplex StructType
 * @subpackage Structs
 */
class GetFaresComplex extends AbstractStructBase
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
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexRequestData
     */
    public $request;
    /**
     * Constructor method for GetFaresComplex
     * @uses GetFaresComplex::setLogin()
     * @uses GetFaresComplex::setRequest()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LoginData $login
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexRequestData $request
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LoginData $login = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexRequestData $request = null)
    {
        $this
            ->setLogin($login)
            ->setRequest($request);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFaresComplex
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
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexRequestData|null
     */
    public function getRequest()
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexRequestData $request
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFaresComplex
     */
    public function setRequest(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexRequestData $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFaresComplex
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
