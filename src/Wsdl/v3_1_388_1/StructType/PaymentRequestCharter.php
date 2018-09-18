<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentRequestCharter StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PaymentRequestCharter
 * @subpackage Structs
 */
class PaymentRequestCharter extends AbstractStructBase
{
    /**
     * The Account
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount
     */
    public $Account;
    /**
     * The Touroperator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Touroperator;
    /**
     * Constructor method for PaymentRequestCharter
     * @uses PaymentRequestCharter::setAccount()
     * @uses PaymentRequestCharter::setTouroperator()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount $account
     * @param string $touroperator
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount $account = null, $touroperator = null)
    {
        $this
            ->setAccount($account)
            ->setTouroperator($touroperator);
    }
    /**
     * Get Account value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount|null
     */
    public function getAccount()
    {
        return $this->Account;
    }
    /**
     * Set Account value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount $account
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentRequestCharter
     */
    public function setAccount(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount $account = null)
    {
        $this->Account = $account;
        return $this;
    }
    /**
     * Get Touroperator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTouroperator()
    {
        return isset($this->Touroperator) ? $this->Touroperator : null;
    }
    /**
     * Set Touroperator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $touroperator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentRequestCharter
     */
    public function setTouroperator($touroperator = null)
    {
        // validation for constraint: string
        if (!is_null($touroperator) && !is_string($touroperator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($touroperator)), __LINE__);
        }
        if (is_null($touroperator) || (is_array($touroperator) && empty($touroperator))) {
            unset($this->Touroperator);
        } else {
            $this->Touroperator = $touroperator;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentRequestCharter
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
