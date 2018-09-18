<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConvertCurrencyResponse StructType
 * @subpackage Structs
 */
class ConvertCurrencyResponse extends AbstractStructBase
{
    /**
     * The ConvertCurrencyResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseCurrencyData
     */
    public $ConvertCurrencyResult;
    /**
     * Constructor method for ConvertCurrencyResponse
     * @uses ConvertCurrencyResponse::setConvertCurrencyResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseCurrencyData $convertCurrencyResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseCurrencyData $convertCurrencyResult = null)
    {
        $this
            ->setConvertCurrencyResult($convertCurrencyResult);
    }
    /**
     * Get ConvertCurrencyResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseCurrencyData|null
     */
    public function getConvertCurrencyResult()
    {
        return isset($this->ConvertCurrencyResult) ? $this->ConvertCurrencyResult : null;
    }
    /**
     * Set ConvertCurrencyResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseCurrencyData $convertCurrencyResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ConvertCurrencyResponse
     */
    public function setConvertCurrencyResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseCurrencyData $convertCurrencyResult = null)
    {
        if (is_null($convertCurrencyResult) || (is_array($convertCurrencyResult) && empty($convertCurrencyResult))) {
            unset($this->ConvertCurrencyResult);
        } else {
            $this->ConvertCurrencyResult = $convertCurrencyResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ConvertCurrencyResponse
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
