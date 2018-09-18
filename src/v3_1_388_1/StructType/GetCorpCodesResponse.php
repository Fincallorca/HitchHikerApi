<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCorpCodesResponse StructType
 * @subpackage Structs
 */
class GetCorpCodesResponse extends AbstractStructBase
{
    /**
     * The GetCorpCodesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateResponseData
     */
    public $GetCorpCodesResult;
    /**
     * Constructor method for GetCorpCodesResponse
     * @uses GetCorpCodesResponse::setGetCorpCodesResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateResponseData $getCorpCodesResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateResponseData $getCorpCodesResult = null)
    {
        $this
            ->setGetCorpCodesResult($getCorpCodesResult);
    }
    /**
     * Get GetCorpCodesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateResponseData|null
     */
    public function getGetCorpCodesResult()
    {
        return isset($this->GetCorpCodesResult) ? $this->GetCorpCodesResult : null;
    }
    /**
     * Set GetCorpCodesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateResponseData $getCorpCodesResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetCorpCodesResponse
     */
    public function setGetCorpCodesResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateResponseData $getCorpCodesResult = null)
    {
        if (is_null($getCorpCodesResult) || (is_array($getCorpCodesResult) && empty($getCorpCodesResult))) {
            unset($this->GetCorpCodesResult);
        } else {
            $this->GetCorpCodesResult = $getCorpCodesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetCorpCodesResponse
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
