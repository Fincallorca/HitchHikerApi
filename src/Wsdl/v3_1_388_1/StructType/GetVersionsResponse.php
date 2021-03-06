<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVersionsResponse StructType
 * @subpackage Structs
 */
class GetVersionsResponse extends AbstractStructBase
{
    /**
     * The GetVersionsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfVersionData
     */
    public $GetVersionsResult;
    /**
     * Constructor method for GetVersionsResponse
     * @uses GetVersionsResponse::setGetVersionsResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfVersionData $getVersionsResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfVersionData $getVersionsResult = null)
    {
        $this
            ->setGetVersionsResult($getVersionsResult);
    }
    /**
     * Get GetVersionsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfVersionData|null
     */
    public function getGetVersionsResult()
    {
        return isset($this->GetVersionsResult) ? $this->GetVersionsResult : null;
    }
    /**
     * Set GetVersionsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfVersionData $getVersionsResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetVersionsResponse
     */
    public function setGetVersionsResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfVersionData $getVersionsResult = null)
    {
        if (is_null($getVersionsResult) || (is_array($getVersionsResult) && empty($getVersionsResult))) {
            unset($this->GetVersionsResult);
        } else {
            $this->GetVersionsResult = $getVersionsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetVersionsResponse
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
