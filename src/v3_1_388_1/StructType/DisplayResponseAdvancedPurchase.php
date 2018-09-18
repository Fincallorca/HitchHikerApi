<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayResponseAdvancedPurchase StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayResponseAdvancedPurchase
 * @subpackage Structs
 */
class DisplayResponseAdvancedPurchase extends AbstractStructBase
{
    /**
     * The FirstBookingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FirstBookingDate;
    /**
     * The FirstTicketingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FirstTicketingDate;
    /**
     * The LastBookingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastBookingDate;
    /**
     * The LastTicketingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastTicketingDate;
    /**
     * The MinBookingBeforeDeparture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinBookingBeforeDeparture;
    /**
     * The MinTicketingBeforeDeparture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinTicketingBeforeDeparture;
    /**
     * The TicketingDaysAfterBooking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TicketingDaysAfterBooking;
    /**
     * Constructor method for DisplayResponseAdvancedPurchase
     * @uses DisplayResponseAdvancedPurchase::setFirstBookingDate()
     * @uses DisplayResponseAdvancedPurchase::setFirstTicketingDate()
     * @uses DisplayResponseAdvancedPurchase::setLastBookingDate()
     * @uses DisplayResponseAdvancedPurchase::setLastTicketingDate()
     * @uses DisplayResponseAdvancedPurchase::setMinBookingBeforeDeparture()
     * @uses DisplayResponseAdvancedPurchase::setMinTicketingBeforeDeparture()
     * @uses DisplayResponseAdvancedPurchase::setTicketingDaysAfterBooking()
     * @param string $firstBookingDate
     * @param string $firstTicketingDate
     * @param string $lastBookingDate
     * @param string $lastTicketingDate
     * @param int $minBookingBeforeDeparture
     * @param int $minTicketingBeforeDeparture
     * @param int $ticketingDaysAfterBooking
     */
    public function __construct($firstBookingDate = null, $firstTicketingDate = null, $lastBookingDate = null, $lastTicketingDate = null, $minBookingBeforeDeparture = null, $minTicketingBeforeDeparture = null, $ticketingDaysAfterBooking = null)
    {
        $this
            ->setFirstBookingDate($firstBookingDate)
            ->setFirstTicketingDate($firstTicketingDate)
            ->setLastBookingDate($lastBookingDate)
            ->setLastTicketingDate($lastTicketingDate)
            ->setMinBookingBeforeDeparture($minBookingBeforeDeparture)
            ->setMinTicketingBeforeDeparture($minTicketingBeforeDeparture)
            ->setTicketingDaysAfterBooking($ticketingDaysAfterBooking);
    }
    /**
     * Get FirstBookingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstBookingDate()
    {
        return isset($this->FirstBookingDate) ? $this->FirstBookingDate : null;
    }
    /**
     * Set FirstBookingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstBookingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseAdvancedPurchase
     */
    public function setFirstBookingDate($firstBookingDate = null)
    {
        // validation for constraint: string
        if (!is_null($firstBookingDate) && !is_string($firstBookingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstBookingDate)), __LINE__);
        }
        if (is_null($firstBookingDate) || (is_array($firstBookingDate) && empty($firstBookingDate))) {
            unset($this->FirstBookingDate);
        } else {
            $this->FirstBookingDate = $firstBookingDate;
        }
        return $this;
    }
    /**
     * Get FirstTicketingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstTicketingDate()
    {
        return isset($this->FirstTicketingDate) ? $this->FirstTicketingDate : null;
    }
    /**
     * Set FirstTicketingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstTicketingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseAdvancedPurchase
     */
    public function setFirstTicketingDate($firstTicketingDate = null)
    {
        // validation for constraint: string
        if (!is_null($firstTicketingDate) && !is_string($firstTicketingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstTicketingDate)), __LINE__);
        }
        if (is_null($firstTicketingDate) || (is_array($firstTicketingDate) && empty($firstTicketingDate))) {
            unset($this->FirstTicketingDate);
        } else {
            $this->FirstTicketingDate = $firstTicketingDate;
        }
        return $this;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseAdvancedPurchase
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
     * Get LastTicketingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastTicketingDate()
    {
        return isset($this->LastTicketingDate) ? $this->LastTicketingDate : null;
    }
    /**
     * Set LastTicketingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastTicketingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseAdvancedPurchase
     */
    public function setLastTicketingDate($lastTicketingDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastTicketingDate) && !is_string($lastTicketingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastTicketingDate)), __LINE__);
        }
        if (is_null($lastTicketingDate) || (is_array($lastTicketingDate) && empty($lastTicketingDate))) {
            unset($this->LastTicketingDate);
        } else {
            $this->LastTicketingDate = $lastTicketingDate;
        }
        return $this;
    }
    /**
     * Get MinBookingBeforeDeparture value
     * @return int|null
     */
    public function getMinBookingBeforeDeparture()
    {
        return $this->MinBookingBeforeDeparture;
    }
    /**
     * Set MinBookingBeforeDeparture value
     * @param int $minBookingBeforeDeparture
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseAdvancedPurchase
     */
    public function setMinBookingBeforeDeparture($minBookingBeforeDeparture = null)
    {
        // validation for constraint: int
        if (!is_null($minBookingBeforeDeparture) && !is_numeric($minBookingBeforeDeparture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minBookingBeforeDeparture)), __LINE__);
        }
        $this->MinBookingBeforeDeparture = $minBookingBeforeDeparture;
        return $this;
    }
    /**
     * Get MinTicketingBeforeDeparture value
     * @return int|null
     */
    public function getMinTicketingBeforeDeparture()
    {
        return $this->MinTicketingBeforeDeparture;
    }
    /**
     * Set MinTicketingBeforeDeparture value
     * @param int $minTicketingBeforeDeparture
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseAdvancedPurchase
     */
    public function setMinTicketingBeforeDeparture($minTicketingBeforeDeparture = null)
    {
        // validation for constraint: int
        if (!is_null($minTicketingBeforeDeparture) && !is_numeric($minTicketingBeforeDeparture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minTicketingBeforeDeparture)), __LINE__);
        }
        $this->MinTicketingBeforeDeparture = $minTicketingBeforeDeparture;
        return $this;
    }
    /**
     * Get TicketingDaysAfterBooking value
     * @return int|null
     */
    public function getTicketingDaysAfterBooking()
    {
        return $this->TicketingDaysAfterBooking;
    }
    /**
     * Set TicketingDaysAfterBooking value
     * @param int $ticketingDaysAfterBooking
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseAdvancedPurchase
     */
    public function setTicketingDaysAfterBooking($ticketingDaysAfterBooking = null)
    {
        // validation for constraint: int
        if (!is_null($ticketingDaysAfterBooking) && !is_numeric($ticketingDaysAfterBooking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ticketingDaysAfterBooking)), __LINE__);
        }
        $this->TicketingDaysAfterBooking = $ticketingDaysAfterBooking;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseAdvancedPurchase
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
