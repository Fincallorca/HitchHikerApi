<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleResponseBlackoutDate StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RuleResponseBlackoutDate
 * @subpackage Structs
 */
class RuleResponseBlackoutDate extends AbstractStructBase
{
    /**
     * The ValidFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ValidFrom;
    /**
     * The ValidUntil
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ValidUntil;
    /**
     * Constructor method for RuleResponseBlackoutDate
     * @uses RuleResponseBlackoutDate::setValidFrom()
     * @uses RuleResponseBlackoutDate::setValidUntil()
     * @param string $validFrom
     * @param string $validUntil
     */
    public function __construct($validFrom = null, $validUntil = null)
    {
        $this
            ->setValidFrom($validFrom)
            ->setValidUntil($validUntil);
    }
    /**
     * Get ValidFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidFrom()
    {
        return isset($this->ValidFrom) ? $this->ValidFrom : null;
    }
    /**
     * Set ValidFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validFrom
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate
     */
    public function setValidFrom($validFrom = null)
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validFrom)), __LINE__);
        }
        if (is_null($validFrom) || (is_array($validFrom) && empty($validFrom))) {
            unset($this->ValidFrom);
        } else {
            $this->ValidFrom = $validFrom;
        }
        return $this;
    }
    /**
     * Get ValidUntil value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidUntil()
    {
        return isset($this->ValidUntil) ? $this->ValidUntil : null;
    }
    /**
     * Set ValidUntil value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validUntil
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate
     */
    public function setValidUntil($validUntil = null)
    {
        // validation for constraint: string
        if (!is_null($validUntil) && !is_string($validUntil)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validUntil)), __LINE__);
        }
        if (is_null($validUntil) || (is_array($validUntil) && empty($validUntil))) {
            unset($this->ValidUntil);
        } else {
            $this->ValidUntil = $validUntil;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseBlackoutDate
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
