<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPreferenceSearchResponse StructType
 * @subpackage Structs
 */
class GetPreferenceSearchResponse extends AbstractStructBase
{
    /**
     * The GetPreferenceSearchResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseData
     */
    public $GetPreferenceSearchResult;
    /**
     * Constructor method for GetPreferenceSearchResponse
     * @uses GetPreferenceSearchResponse::setGetPreferenceSearchResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseData $getPreferenceSearchResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseData $getPreferenceSearchResult = null)
    {
        $this
            ->setGetPreferenceSearchResult($getPreferenceSearchResult);
    }
    /**
     * Get GetPreferenceSearchResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseData|null
     */
    public function getGetPreferenceSearchResult()
    {
        return isset($this->GetPreferenceSearchResult) ? $this->GetPreferenceSearchResult : null;
    }
    /**
     * Set GetPreferenceSearchResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseData $getPreferenceSearchResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetPreferenceSearchResponse
     */
    public function setGetPreferenceSearchResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseData $getPreferenceSearchResult = null)
    {
        if (is_null($getPreferenceSearchResult) || (is_array($getPreferenceSearchResult) && empty($getPreferenceSearchResult))) {
            unset($this->GetPreferenceSearchResult);
        } else {
            $this->GetPreferenceSearchResult = $getPreferenceSearchResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetPreferenceSearchResponse
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
