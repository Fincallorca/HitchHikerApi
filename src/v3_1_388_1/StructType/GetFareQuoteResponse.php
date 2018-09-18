<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFareQuoteResponse StructType
 * @subpackage Structs
 */
class GetFareQuoteResponse extends AbstractStructBase
{
    /**
     * The GetFareQuoteResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseData
     */
    public $GetFareQuoteResult;
    /**
     * Constructor method for GetFareQuoteResponse
     * @uses GetFareQuoteResponse::setGetFareQuoteResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseData $getFareQuoteResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseData $getFareQuoteResult = null)
    {
        $this
            ->setGetFareQuoteResult($getFareQuoteResult);
    }
    /**
     * Get GetFareQuoteResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseData|null
     */
    public function getGetFareQuoteResult()
    {
        return isset($this->GetFareQuoteResult) ? $this->GetFareQuoteResult : null;
    }
    /**
     * Set GetFareQuoteResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseData $getFareQuoteResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareQuoteResponse
     */
    public function setGetFareQuoteResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseData $getFareQuoteResult = null)
    {
        if (is_null($getFareQuoteResult) || (is_array($getFareQuoteResult) && empty($getFareQuoteResult))) {
            unset($this->GetFareQuoteResult);
        } else {
            $this->GetFareQuoteResult = $getFareQuoteResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareQuoteResponse
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
