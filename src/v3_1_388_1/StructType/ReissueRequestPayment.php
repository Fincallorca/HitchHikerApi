<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReissueRequestPayment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ReissueRequestPayment
 * @subpackage Structs
 */
class ReissueRequestPayment extends BookRequestPayment
{
    /**
     * The AccountCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AccountCode;
    /**
     * Constructor method for ReissueRequestPayment
     * @uses ReissueRequestPayment::setAccountCode()
     * @param string $accountCode
     */
    public function __construct($accountCode = null)
    {
        $this
            ->setAccountCode($accountCode);
    }
    /**
     * Get AccountCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAccountCode()
    {
        return isset($this->AccountCode) ? $this->AccountCode : null;
    }
    /**
     * Set AccountCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $accountCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ReissueRequestPayment
     */
    public function setAccountCode($accountCode = null)
    {
        // validation for constraint: string
        if (!is_null($accountCode) && !is_string($accountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountCode)), __LINE__);
        }
        if (is_null($accountCode) || (is_array($accountCode) && empty($accountCode))) {
            unset($this->AccountCode);
        } else {
            $this->AccountCode = $accountCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ReissueRequestPayment
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
