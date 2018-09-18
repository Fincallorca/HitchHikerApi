<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierResponse StructType
 * @subpackage Structs
 */
class GetSupplierResponse extends AbstractStructBase
{
    /**
     * The GetSupplierResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierResponseData
     */
    public $GetSupplierResult;
    /**
     * Constructor method for GetSupplierResponse
     * @uses GetSupplierResponse::setGetSupplierResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierResponseData $getSupplierResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierResponseData $getSupplierResult = null)
    {
        $this
            ->setGetSupplierResult($getSupplierResult);
    }
    /**
     * Get GetSupplierResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierResponseData|null
     */
    public function getGetSupplierResult()
    {
        return isset($this->GetSupplierResult) ? $this->GetSupplierResult : null;
    }
    /**
     * Set GetSupplierResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierResponseData $getSupplierResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetSupplierResponse
     */
    public function setGetSupplierResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierResponseData $getSupplierResult = null)
    {
        if (is_null($getSupplierResult) || (is_array($getSupplierResult) && empty($getSupplierResult))) {
            unset($this->GetSupplierResult);
        } else {
            $this->GetSupplierResult = $getSupplierResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetSupplierResponse
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
