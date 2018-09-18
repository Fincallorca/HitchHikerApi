<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareResponseRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareResponseRule
 * @subpackage Structs
 */
class FareResponseRule extends AbstractStructBase
{
    /**
     * The LastBookingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastBookingDate;
    /**
     * The MatchCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MatchCode;
    /**
     * The MaxAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxAge;
    /**
     * The MinAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinAge;
    /**
     * The MinBookingBeforeDep
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinBookingBeforeDep;
    /**
     * Constructor method for FareResponseRule
     * @uses FareResponseRule::setLastBookingDate()
     * @uses FareResponseRule::setMatchCode()
     * @uses FareResponseRule::setMaxAge()
     * @uses FareResponseRule::setMinAge()
     * @uses FareResponseRule::setMinBookingBeforeDep()
     * @param string $lastBookingDate
     * @param string $matchCode
     * @param int $maxAge
     * @param int $minAge
     * @param int $minBookingBeforeDep
     */
    public function __construct($lastBookingDate = null, $matchCode = null, $maxAge = null, $minAge = null, $minBookingBeforeDep = null)
    {
        $this
            ->setLastBookingDate($lastBookingDate)
            ->setMatchCode($matchCode)
            ->setMaxAge($maxAge)
            ->setMinAge($minAge)
            ->setMinBookingBeforeDep($minBookingBeforeDep);
    }
    /**
     * Get LastBookingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastBookingDate()
    {
        return isset($this->LastBookingDate) ? $this->LastBookingDate : null;
    }
    /**
     * Set LastBookingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastBookingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRule
     */
    public function setLastBookingDate($lastBookingDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastBookingDate) && !is_string($lastBookingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastBookingDate)), __LINE__);
        }
        if (is_null($lastBookingDate) || (is_array($lastBookingDate) && empty($lastBookingDate))) {
            unset($this->LastBookingDate);
        } else {
            $this->LastBookingDate = $lastBookingDate;
        }
        return $this;
    }
    /**
     * Get MatchCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMatchCode()
    {
        return isset($this->MatchCode) ? $this->MatchCode : null;
    }
    /**
     * Set MatchCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $matchCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRule
     */
    public function setMatchCode($matchCode = null)
    {
        // validation for constraint: string
        if (!is_null($matchCode) && !is_string($matchCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($matchCode)), __LINE__);
        }
        if (is_null($matchCode) || (is_array($matchCode) && empty($matchCode))) {
            unset($this->MatchCode);
        } else {
            $this->MatchCode = $matchCode;
        }
        return $this;
    }
    /**
     * Get MaxAge value
     * @return int|null
     */
    public function getMaxAge()
    {
        return $this->MaxAge;
    }
    /**
     * Set MaxAge value
     * @param int $maxAge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRule
     */
    public function setMaxAge($maxAge = null)
    {
        // validation for constraint: int
        if (!is_null($maxAge) && !is_numeric($maxAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxAge)), __LINE__);
        }
        $this->MaxAge = $maxAge;
        return $this;
    }
    /**
     * Get MinAge value
     * @return int|null
     */
    public function getMinAge()
    {
        return $this->MinAge;
    }
    /**
     * Set MinAge value
     * @param int $minAge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRule
     */
    public function setMinAge($minAge = null)
    {
        // validation for constraint: int
        if (!is_null($minAge) && !is_numeric($minAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minAge)), __LINE__);
        }
        $this->MinAge = $minAge;
        return $this;
    }
    /**
     * Get MinBookingBeforeDep value
     * @return int|null
     */
    public function getMinBookingBeforeDep()
    {
        return $this->MinBookingBeforeDep;
    }
    /**
     * Set MinBookingBeforeDep value
     * @param int $minBookingBeforeDep
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRule
     */
    public function setMinBookingBeforeDep($minBookingBeforeDep = null)
    {
        // validation for constraint: int
        if (!is_null($minBookingBeforeDep) && !is_numeric($minBookingBeforeDep)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minBookingBeforeDep)), __LINE__);
        }
        $this->MinBookingBeforeDep = $minBookingBeforeDep;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRule
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
