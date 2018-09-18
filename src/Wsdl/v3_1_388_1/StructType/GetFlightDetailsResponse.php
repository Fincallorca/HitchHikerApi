<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFlightDetailsResponse StructType
 * @subpackage Structs
 */
class GetFlightDetailsResponse extends AbstractStructBase
{
    /**
     * The GetFlightDetailsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseData
     */
    public $GetFlightDetailsResult;
    /**
     * Constructor method for GetFlightDetailsResponse
     * @uses GetFlightDetailsResponse::setGetFlightDetailsResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseData $getFlightDetailsResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseData $getFlightDetailsResult = null)
    {
        $this
            ->setGetFlightDetailsResult($getFlightDetailsResult);
    }
    /**
     * Get GetFlightDetailsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseData|null
     */
    public function getGetFlightDetailsResult()
    {
        return isset($this->GetFlightDetailsResult) ? $this->GetFlightDetailsResult : null;
    }
    /**
     * Set GetFlightDetailsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseData $getFlightDetailsResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFlightDetailsResponse
     */
    public function setGetFlightDetailsResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseData $getFlightDetailsResult = null)
    {
        if (is_null($getFlightDetailsResult) || (is_array($getFlightDetailsResult) && empty($getFlightDetailsResult))) {
            unset($this->GetFlightDetailsResult);
        } else {
            $this->GetFlightDetailsResult = $getFlightDetailsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFlightDetailsResponse
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
