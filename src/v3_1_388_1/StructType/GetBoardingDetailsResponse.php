<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBoardingDetailsResponse StructType
 * @subpackage Structs
 */
class GetBoardingDetailsResponse extends AbstractStructBase
{
    /**
     * The GetBoardingDetailsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseData
     */
    public $GetBoardingDetailsResult;
    /**
     * Constructor method for GetBoardingDetailsResponse
     * @uses GetBoardingDetailsResponse::setGetBoardingDetailsResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseData $getBoardingDetailsResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseData $getBoardingDetailsResult = null)
    {
        $this
            ->setGetBoardingDetailsResult($getBoardingDetailsResult);
    }
    /**
     * Get GetBoardingDetailsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseData|null
     */
    public function getGetBoardingDetailsResult()
    {
        return isset($this->GetBoardingDetailsResult) ? $this->GetBoardingDetailsResult : null;
    }
    /**
     * Set GetBoardingDetailsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseData $getBoardingDetailsResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetBoardingDetailsResponse
     */
    public function setGetBoardingDetailsResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseData $getBoardingDetailsResult = null)
    {
        if (is_null($getBoardingDetailsResult) || (is_array($getBoardingDetailsResult) && empty($getBoardingDetailsResult))) {
            unset($this->GetBoardingDetailsResult);
        } else {
            $this->GetBoardingDetailsResult = $getBoardingDetailsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetBoardingDetailsResponse
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
