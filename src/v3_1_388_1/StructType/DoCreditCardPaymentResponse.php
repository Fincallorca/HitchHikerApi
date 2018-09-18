<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoCreditCardPaymentResponse StructType
 * @subpackage Structs
 */
class DoCreditCardPaymentResponse extends AbstractStructBase
{
    /**
     * The DoCreditCardPaymentResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Response
     */
    public $DoCreditCardPaymentResult;
    /**
     * Constructor method for DoCreditCardPaymentResponse
     * @uses DoCreditCardPaymentResponse::setDoCreditCardPaymentResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Response $doCreditCardPaymentResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Response $doCreditCardPaymentResult = null)
    {
        $this
            ->setDoCreditCardPaymentResult($doCreditCardPaymentResult);
    }
    /**
     * Get DoCreditCardPaymentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Response|null
     */
    public function getDoCreditCardPaymentResult()
    {
        return isset($this->DoCreditCardPaymentResult) ? $this->DoCreditCardPaymentResult : null;
    }
    /**
     * Set DoCreditCardPaymentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Response $doCreditCardPaymentResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DoCreditCardPaymentResponse
     */
    public function setDoCreditCardPaymentResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Response $doCreditCardPaymentResult = null)
    {
        if (is_null($doCreditCardPaymentResult) || (is_array($doCreditCardPaymentResult) && empty($doCreditCardPaymentResult))) {
            unset($this->DoCreditCardPaymentResult);
        } else {
            $this->DoCreditCardPaymentResult = $doCreditCardPaymentResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DoCreditCardPaymentResponse
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
