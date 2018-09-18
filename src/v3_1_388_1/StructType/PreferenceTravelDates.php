<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferenceTravelDates StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PreferenceTravelDates
 * @subpackage Structs
 */
class PreferenceTravelDates extends AbstractStructBase
{
    /**
     * The FromDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FromDate;
    /**
     * The TravelComplete
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $TravelComplete;
    /**
     * The UntilDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UntilDate;
    /**
     * Constructor method for PreferenceTravelDates
     * @uses PreferenceTravelDates::setFromDate()
     * @uses PreferenceTravelDates::setTravelComplete()
     * @uses PreferenceTravelDates::setUntilDate()
     * @param string $fromDate
     * @param bool $travelComplete
     * @param string $untilDate
     */
    public function __construct($fromDate = null, $travelComplete = null, $untilDate = null)
    {
        $this
            ->setFromDate($fromDate)
            ->setTravelComplete($travelComplete)
            ->setUntilDate($untilDate);
    }
    /**
     * Get FromDate value
     * @return string|null
     */
    public function getFromDate()
    {
        return $this->FromDate;
    }
    /**
     * Set FromDate value
     * @param string $fromDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates
     */
    public function setFromDate($fromDate = null)
    {
        // validation for constraint: string
        if (!is_null($fromDate) && !is_string($fromDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromDate)), __LINE__);
        }
        $this->FromDate = $fromDate;
        return $this;
    }
    /**
     * Get TravelComplete value
     * @return bool|null
     */
    public function getTravelComplete()
    {
        return $this->TravelComplete;
    }
    /**
     * Set TravelComplete value
     * @param bool $travelComplete
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates
     */
    public function setTravelComplete($travelComplete = null)
    {
        // validation for constraint: boolean
        if (!is_null($travelComplete) && !is_bool($travelComplete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($travelComplete)), __LINE__);
        }
        $this->TravelComplete = $travelComplete;
        return $this;
    }
    /**
     * Get UntilDate value
     * @return string|null
     */
    public function getUntilDate()
    {
        return $this->UntilDate;
    }
    /**
     * Set UntilDate value
     * @param string $untilDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates
     */
    public function setUntilDate($untilDate = null)
    {
        // validation for constraint: string
        if (!is_null($untilDate) && !is_string($untilDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($untilDate)), __LINE__);
        }
        $this->UntilDate = $untilDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates
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
