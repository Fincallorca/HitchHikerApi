<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaymentMethodsResponse StructType
 * @subpackage Structs
 */
class GetPaymentMethodsResponse extends AbstractStructBase
{
    /**
     * The GetPaymentMethodsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentMethods
     */
    public $GetPaymentMethodsResult;
    /**
     * Constructor method for GetPaymentMethodsResponse
     * @uses GetPaymentMethodsResponse::setGetPaymentMethodsResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentMethods $getPaymentMethodsResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentMethods $getPaymentMethodsResult = null)
    {
        $this
            ->setGetPaymentMethodsResult($getPaymentMethodsResult);
    }
    /**
     * Get GetPaymentMethodsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentMethods|null
     */
    public function getGetPaymentMethodsResult()
    {
        return isset($this->GetPaymentMethodsResult) ? $this->GetPaymentMethodsResult : null;
    }
    /**
     * Set GetPaymentMethodsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentMethods $getPaymentMethodsResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetPaymentMethodsResponse
     */
    public function setGetPaymentMethodsResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentMethods $getPaymentMethodsResult = null)
    {
        if (is_null($getPaymentMethodsResult) || (is_array($getPaymentMethodsResult) && empty($getPaymentMethodsResult))) {
            unset($this->GetPaymentMethodsResult);
        } else {
            $this->GetPaymentMethodsResult = $getPaymentMethodsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetPaymentMethodsResponse
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
