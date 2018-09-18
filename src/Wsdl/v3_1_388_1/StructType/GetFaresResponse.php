<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFaresResponse StructType
 * @subpackage Structs
 */
class GetFaresResponse extends AbstractStructBase
{
    /**
     * The GetFaresResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseData
     */
    public $GetFaresResult;
    /**
     * Constructor method for GetFaresResponse
     * @uses GetFaresResponse::setGetFaresResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseData $getFaresResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseData $getFaresResult = null)
    {
        $this
            ->setGetFaresResult($getFaresResult);
    }
    /**
     * Get GetFaresResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseData|null
     */
    public function getGetFaresResult()
    {
        return isset($this->GetFaresResult) ? $this->GetFaresResult : null;
    }
    /**
     * Set GetFaresResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseData $getFaresResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFaresResponse
     */
    public function setGetFaresResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseData $getFaresResult = null)
    {
        if (is_null($getFaresResult) || (is_array($getFaresResult) && empty($getFaresResult))) {
            unset($this->GetFaresResult);
        } else {
            $this->GetFaresResult = $getFaresResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFaresResponse
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
