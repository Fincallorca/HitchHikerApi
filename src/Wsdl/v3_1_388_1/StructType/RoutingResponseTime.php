<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoutingResponseTime StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RoutingResponseTime
 * @subpackage Structs
 */
class RoutingResponseTime extends AbstractStructBase
{
    /**
     * The ValidFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true | true
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string
     */
    public $ValidFrom;
    /**
     * The ValidUntil
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true | true
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string
     */
    public $ValidUntil;
    /**
     * Constructor method for RoutingResponseTime
     * @uses RoutingResponseTime::setValidFrom()
     * @uses RoutingResponseTime::setValidUntil()
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseTime
     */
    public function setValidFrom($validFrom = null)
    {
        // validation for constraint: maxInclusive
        if ($validFrom > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $validFrom), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($validFrom < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $validFrom), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($validFrom) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $validFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($validFrom, true)), __LINE__);
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseTime
     */
    public function setValidUntil($validUntil = null)
    {
        // validation for constraint: maxInclusive
        if ($validUntil > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $validUntil), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($validUntil < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $validUntil), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($validUntil) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $validUntil)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($validUntil, true)), __LINE__);
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseTime
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
