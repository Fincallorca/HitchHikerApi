<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleTextRequestCharter StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RuleTextRequestCharter
 * @subpackage Structs
 */
class RuleTextRequestCharter extends AbstractStructBase
{
    /**
     * The Account
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount
     */
    public $Account;
    /**
     * The TouroperatorCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TouroperatorCode;
    /**
     * Constructor method for RuleTextRequestCharter
     * @uses RuleTextRequestCharter::setAccount()
     * @uses RuleTextRequestCharter::setTouroperatorCode()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount $account
     * @param string $touroperatorCode
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount $account = null, $touroperatorCode = null)
    {
        $this
            ->setAccount($account)
            ->setTouroperatorCode($touroperatorCode);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestCharter
     */
    public function setAccount(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount $account = null)
    {
        $this->Account = $account;
        return $this;
    }
    /**
     * Get TouroperatorCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTouroperatorCode()
    {
        return isset($this->TouroperatorCode) ? $this->TouroperatorCode : null;
    }
    /**
     * Set TouroperatorCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $touroperatorCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestCharter
     */
    public function setTouroperatorCode($touroperatorCode = null)
    {
        // validation for constraint: string
        if (!is_null($touroperatorCode) && !is_string($touroperatorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($touroperatorCode)), __LINE__);
        }
        if (is_null($touroperatorCode) || (is_array($touroperatorCode) && empty($touroperatorCode))) {
            unset($this->TouroperatorCode);
        } else {
            $this->TouroperatorCode = $touroperatorCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextRequestCharter
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
