<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaxesAndFeesResponse StructType
 * @subpackage Structs
 */
class GetTaxesAndFeesResponse extends AbstractStructBase
{
    /**
     * The GetTaxesAndFeesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesResponseData
     */
    public $GetTaxesAndFeesResult;
    /**
     * Constructor method for GetTaxesAndFeesResponse
     * @uses GetTaxesAndFeesResponse::setGetTaxesAndFeesResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesResponseData $getTaxesAndFeesResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesResponseData $getTaxesAndFeesResult = null)
    {
        $this
            ->setGetTaxesAndFeesResult($getTaxesAndFeesResult);
    }
    /**
     * Get GetTaxesAndFeesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesResponseData|null
     */
    public function getGetTaxesAndFeesResult()
    {
        return isset($this->GetTaxesAndFeesResult) ? $this->GetTaxesAndFeesResult : null;
    }
    /**
     * Set GetTaxesAndFeesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesResponseData $getTaxesAndFeesResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTaxesAndFeesResponse
     */
    public function setGetTaxesAndFeesResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxesAndFeesResponseData $getTaxesAndFeesResult = null)
    {
        if (is_null($getTaxesAndFeesResult) || (is_array($getTaxesAndFeesResult) && empty($getTaxesAndFeesResult))) {
            unset($this->GetTaxesAndFeesResult);
        } else {
            $this->GetTaxesAndFeesResult = $getTaxesAndFeesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTaxesAndFeesResponse
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
