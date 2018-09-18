<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFaresComplexResponse StructType
 * @subpackage Structs
 */
class GetFaresComplexResponse extends AbstractStructBase
{
    /**
     * The GetFaresComplexResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseData
     */
    public $GetFaresComplexResult;
    /**
     * Constructor method for GetFaresComplexResponse
     * @uses GetFaresComplexResponse::setGetFaresComplexResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseData $getFaresComplexResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseData $getFaresComplexResult = null)
    {
        $this
            ->setGetFaresComplexResult($getFaresComplexResult);
    }
    /**
     * Get GetFaresComplexResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseData|null
     */
    public function getGetFaresComplexResult()
    {
        return isset($this->GetFaresComplexResult) ? $this->GetFaresComplexResult : null;
    }
    /**
     * Set GetFaresComplexResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseData $getFaresComplexResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFaresComplexResponse
     */
    public function setGetFaresComplexResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseData $getFaresComplexResult = null)
    {
        if (is_null($getFaresComplexResult) || (is_array($getFaresComplexResult) && empty($getFaresComplexResult))) {
            unset($this->GetFaresComplexResult);
        } else {
            $this->GetFaresComplexResult = $getFaresComplexResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFaresComplexResponse
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
