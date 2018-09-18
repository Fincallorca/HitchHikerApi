<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMultiChannelQueryInformationResponse StructType
 * @subpackage Structs
 */
class GetMultiChannelQueryInformationResponse extends AbstractStructBase
{
    /**
     * The GetMultiChannelQueryInformationResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryRuleData
     */
    public $GetMultiChannelQueryInformationResult;
    /**
     * Constructor method for GetMultiChannelQueryInformationResponse
     * @uses GetMultiChannelQueryInformationResponse::setGetMultiChannelQueryInformationResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryRuleData $getMultiChannelQueryInformationResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryRuleData $getMultiChannelQueryInformationResult = null)
    {
        $this
            ->setGetMultiChannelQueryInformationResult($getMultiChannelQueryInformationResult);
    }
    /**
     * Get GetMultiChannelQueryInformationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryRuleData|null
     */
    public function getGetMultiChannelQueryInformationResult()
    {
        return isset($this->GetMultiChannelQueryInformationResult) ? $this->GetMultiChannelQueryInformationResult : null;
    }
    /**
     * Set GetMultiChannelQueryInformationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryRuleData $getMultiChannelQueryInformationResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetMultiChannelQueryInformationResponse
     */
    public function setGetMultiChannelQueryInformationResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryRuleData $getMultiChannelQueryInformationResult = null)
    {
        if (is_null($getMultiChannelQueryInformationResult) || (is_array($getMultiChannelQueryInformationResult) && empty($getMultiChannelQueryInformationResult))) {
            unset($this->GetMultiChannelQueryInformationResult);
        } else {
            $this->GetMultiChannelQueryInformationResult = $getMultiChannelQueryInformationResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetMultiChannelQueryInformationResponse
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
