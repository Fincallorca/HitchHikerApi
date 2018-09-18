<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ResponseRule
 * @subpackage Structs
 */
class ResponseRule extends AbstractStructBase
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
     * The MaximumAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximumAge;
    /**
     * The MinBookingBeforeDep
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinBookingBeforeDep;
    /**
     * The MinimumAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimumAge;
    /**
     * Constructor method for ResponseRule
     * @uses ResponseRule::setLastBookingDate()
     * @uses ResponseRule::setMaximumAge()
     * @uses ResponseRule::setMinBookingBeforeDep()
     * @uses ResponseRule::setMinimumAge()
     * @param string $lastBookingDate
     * @param int $maximumAge
     * @param int $minBookingBeforeDep
     * @param int $minimumAge
     */
    public function __construct($lastBookingDate = null, $maximumAge = null, $minBookingBeforeDep = null, $minimumAge = null)
    {
        $this
            ->setLastBookingDate($lastBookingDate)
            ->setMaximumAge($maximumAge)
            ->setMinBookingBeforeDep($minBookingBeforeDep)
            ->setMinimumAge($minimumAge);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseRule
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
     * Get MaximumAge value
     * @return int|null
     */
    public function getMaximumAge()
    {
        return $this->MaximumAge;
    }
    /**
     * Set MaximumAge value
     * @param int $maximumAge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseRule
     */
    public function setMaximumAge($maximumAge = null)
    {
        // validation for constraint: int
        if (!is_null($maximumAge) && !is_numeric($maximumAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumAge)), __LINE__);
        }
        $this->MaximumAge = $maximumAge;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseRule
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
     * Get MinimumAge value
     * @return int|null
     */
    public function getMinimumAge()
    {
        return $this->MinimumAge;
    }
    /**
     * Set MinimumAge value
     * @param int $minimumAge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseRule
     */
    public function setMinimumAge($minimumAge = null)
    {
        // validation for constraint: int
        if (!is_null($minimumAge) && !is_numeric($minimumAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimumAge)), __LINE__);
        }
        $this->MinimumAge = $minimumAge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseRule
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
