<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRoutingsResponse StructType
 * @subpackage Structs
 */
class GetRoutingsResponse extends AbstractStructBase
{
    /**
     * The GetRoutingsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseData
     */
    public $GetRoutingsResult;
    /**
     * Constructor method for GetRoutingsResponse
     * @uses GetRoutingsResponse::setGetRoutingsResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseData $getRoutingsResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseData $getRoutingsResult = null)
    {
        $this
            ->setGetRoutingsResult($getRoutingsResult);
    }
    /**
     * Get GetRoutingsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseData|null
     */
    public function getGetRoutingsResult()
    {
        return isset($this->GetRoutingsResult) ? $this->GetRoutingsResult : null;
    }
    /**
     * Set GetRoutingsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseData $getRoutingsResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRoutingsResponse
     */
    public function setGetRoutingsResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingsResponseData $getRoutingsResult = null)
    {
        if (is_null($getRoutingsResult) || (is_array($getRoutingsResult) && empty($getRoutingsResult))) {
            unset($this->GetRoutingsResult);
        } else {
            $this->GetRoutingsResult = $getRoutingsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRoutingsResponse
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
