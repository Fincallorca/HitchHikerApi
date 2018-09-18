<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFareDisplayResponse StructType
 * @subpackage Structs
 */
class GetFareDisplayResponse extends AbstractStructBase
{
    /**
     * The GetFareDisplayResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseData
     */
    public $GetFareDisplayResult;
    /**
     * Constructor method for GetFareDisplayResponse
     * @uses GetFareDisplayResponse::setGetFareDisplayResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseData $getFareDisplayResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseData $getFareDisplayResult = null)
    {
        $this
            ->setGetFareDisplayResult($getFareDisplayResult);
    }
    /**
     * Get GetFareDisplayResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseData|null
     */
    public function getGetFareDisplayResult()
    {
        return isset($this->GetFareDisplayResult) ? $this->GetFareDisplayResult : null;
    }
    /**
     * Set GetFareDisplayResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseData $getFareDisplayResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareDisplayResponse
     */
    public function setGetFareDisplayResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseData $getFareDisplayResult = null)
    {
        if (is_null($getFareDisplayResult) || (is_array($getFareDisplayResult) && empty($getFareDisplayResult))) {
            unset($this->GetFareDisplayResult);
        } else {
            $this->GetFareDisplayResult = $getFareDisplayResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareDisplayResponse
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
