<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserConfigurationDataResponse StructType
 * @subpackage Structs
 */
class GetUserConfigurationDataResponse extends AbstractStructBase
{
    /**
     * The GetUserConfigurationDataResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData
     */
    public $GetUserConfigurationDataResult;
    /**
     * Constructor method for GetUserConfigurationDataResponse
     * @uses GetUserConfigurationDataResponse::setGetUserConfigurationDataResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData $getUserConfigurationDataResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData $getUserConfigurationDataResult = null)
    {
        $this
            ->setGetUserConfigurationDataResult($getUserConfigurationDataResult);
    }
    /**
     * Get GetUserConfigurationDataResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData|null
     */
    public function getGetUserConfigurationDataResult()
    {
        return isset($this->GetUserConfigurationDataResult) ? $this->GetUserConfigurationDataResult : null;
    }
    /**
     * Set GetUserConfigurationDataResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData $getUserConfigurationDataResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetUserConfigurationDataResponse
     */
    public function setGetUserConfigurationDataResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserAccessData $getUserConfigurationDataResult = null)
    {
        if (is_null($getUserConfigurationDataResult) || (is_array($getUserConfigurationDataResult) && empty($getUserConfigurationDataResult))) {
            unset($this->GetUserConfigurationDataResult);
        } else {
            $this->GetUserConfigurationDataResult = $getUserConfigurationDataResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetUserConfigurationDataResponse
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
