<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRuleInformationResponse StructType
 * @subpackage Structs
 */
class GetRuleInformationResponse extends AbstractStructBase
{
    /**
     * The GetRuleInformationResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseData
     */
    public $GetRuleInformationResult;
    /**
     * Constructor method for GetRuleInformationResponse
     * @uses GetRuleInformationResponse::setGetRuleInformationResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseData $getRuleInformationResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseData $getRuleInformationResult = null)
    {
        $this
            ->setGetRuleInformationResult($getRuleInformationResult);
    }
    /**
     * Get GetRuleInformationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseData|null
     */
    public function getGetRuleInformationResult()
    {
        return isset($this->GetRuleInformationResult) ? $this->GetRuleInformationResult : null;
    }
    /**
     * Set GetRuleInformationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseData $getRuleInformationResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRuleInformationResponse
     */
    public function setGetRuleInformationResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseData $getRuleInformationResult = null)
    {
        if (is_null($getRuleInformationResult) || (is_array($getRuleInformationResult) && empty($getRuleInformationResult))) {
            unset($this->GetRuleInformationResult);
        } else {
            $this->GetRuleInformationResult = $getRuleInformationResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRuleInformationResponse
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
