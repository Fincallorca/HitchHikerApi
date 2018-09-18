<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleResponseBlackoutNumber StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RuleResponseBlackoutNumber
 * @subpackage Structs
 */
class RuleResponseBlackoutNumber extends AbstractStructBase
{
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CarrierCode;
    /**
     * The ValidFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ValidFrom;
    /**
     * The ValidUntil
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ValidUntil;
    /**
     * Constructor method for RuleResponseBlackoutNumber
     * @uses RuleResponseBlackoutNumber::setCarrierCode()
     * @uses RuleResponseBlackoutNumber::setValidFrom()
     * @uses RuleResponseBlackoutNumber::setValidUntil()
     * @param string $carrierCode
     * @param int $validFrom
     * @param int $validUntil
     */
    public function __construct($carrierCode = null, $validFrom = null, $validUntil = null)
    {
        $this
            ->setCarrierCode($carrierCode)
            ->setValidFrom($validFrom)
            ->setValidUntil($validUntil);
    }
    /**
     * Get CarrierCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCarrierCode()
    {
        return isset($this->CarrierCode) ? $this->CarrierCode : null;
    }
    /**
     * Set CarrierCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $carrierCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierCode)), __LINE__);
        }
        if (is_null($carrierCode) || (is_array($carrierCode) && empty($carrierCode))) {
            unset($this->CarrierCode);
        } else {
            $this->CarrierCode = $carrierCode;
        }
        return $this;
    }
    /**
     * Get ValidFrom value
     * @return int|null
     */
    public function getValidFrom()
    {
        return $this->ValidFrom;
    }
    /**
     * Set ValidFrom value
     * @param int $validFrom
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber
     */
    public function setValidFrom($validFrom = null)
    {
        // validation for constraint: int
        if (!is_null($validFrom) && !is_numeric($validFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($validFrom)), __LINE__);
        }
        $this->ValidFrom = $validFrom;
        return $this;
    }
    /**
     * Get ValidUntil value
     * @return int|null
     */
    public function getValidUntil()
    {
        return $this->ValidUntil;
    }
    /**
     * Set ValidUntil value
     * @param int $validUntil
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber
     */
    public function setValidUntil($validUntil = null)
    {
        // validation for constraint: int
        if (!is_null($validUntil) && !is_numeric($validUntil)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($validUntil)), __LINE__);
        }
        $this->ValidUntil = $validUntil;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutNumber
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
