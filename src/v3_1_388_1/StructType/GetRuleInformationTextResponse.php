<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRuleInformationTextResponse StructType
 * @subpackage Structs
 */
class GetRuleInformationTextResponse extends AbstractStructBase
{
    /**
     * The GetRuleInformationTextResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseData
     */
    public $GetRuleInformationTextResult;
    /**
     * Constructor method for GetRuleInformationTextResponse
     * @uses GetRuleInformationTextResponse::setGetRuleInformationTextResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseData $getRuleInformationTextResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseData $getRuleInformationTextResult = null)
    {
        $this
            ->setGetRuleInformationTextResult($getRuleInformationTextResult);
    }
    /**
     * Get GetRuleInformationTextResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseData|null
     */
    public function getGetRuleInformationTextResult()
    {
        return isset($this->GetRuleInformationTextResult) ? $this->GetRuleInformationTextResult : null;
    }
    /**
     * Set GetRuleInformationTextResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseData $getRuleInformationTextResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRuleInformationTextResponse
     */
    public function setGetRuleInformationTextResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponseData $getRuleInformationTextResult = null)
    {
        if (is_null($getRuleInformationTextResult) || (is_array($getRuleInformationTextResult) && empty($getRuleInformationTextResult))) {
            unset($this->GetRuleInformationTextResult);
        } else {
            $this->GetRuleInformationTextResult = $getRuleInformationTextResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRuleInformationTextResponse
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
