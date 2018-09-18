<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleResponseExtendedTicketInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RuleResponseExtendedTicketInfo
 * @subpackage Structs
 */
class RuleResponseExtendedTicketInfo extends AbstractStructBase
{
    /**
     * The BookDaysBeforeDeparture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BookDaysBeforeDeparture;
    /**
     * The TicketingDaysAfterBooking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TicketingDaysAfterBooking;
    /**
     * The TicketingDaysBeforeDeparture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TicketingDaysBeforeDeparture;
    /**
     * Constructor method for RuleResponseExtendedTicketInfo
     * @uses RuleResponseExtendedTicketInfo::setBookDaysBeforeDeparture()
     * @uses RuleResponseExtendedTicketInfo::setTicketingDaysAfterBooking()
     * @uses RuleResponseExtendedTicketInfo::setTicketingDaysBeforeDeparture()
     * @param int $bookDaysBeforeDeparture
     * @param int $ticketingDaysAfterBooking
     * @param int $ticketingDaysBeforeDeparture
     */
    public function __construct($bookDaysBeforeDeparture = null, $ticketingDaysAfterBooking = null, $ticketingDaysBeforeDeparture = null)
    {
        $this
            ->setBookDaysBeforeDeparture($bookDaysBeforeDeparture)
            ->setTicketingDaysAfterBooking($ticketingDaysAfterBooking)
            ->setTicketingDaysBeforeDeparture($ticketingDaysBeforeDeparture);
    }
    /**
     * Get BookDaysBeforeDeparture value
     * @return int|null
     */
    public function getBookDaysBeforeDeparture()
    {
        return $this->BookDaysBeforeDeparture;
    }
    /**
     * Set BookDaysBeforeDeparture value
     * @param int $bookDaysBeforeDeparture
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo
     */
    public function setBookDaysBeforeDeparture($bookDaysBeforeDeparture = null)
    {
        // validation for constraint: int
        if (!is_null($bookDaysBeforeDeparture) && !is_numeric($bookDaysBeforeDeparture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bookDaysBeforeDeparture)), __LINE__);
        }
        $this->BookDaysBeforeDeparture = $bookDaysBeforeDeparture;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo
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
     * Get TicketingDaysBeforeDeparture value
     * @return int|null
     */
    public function getTicketingDaysBeforeDeparture()
    {
        return $this->TicketingDaysBeforeDeparture;
    }
    /**
     * Set TicketingDaysBeforeDeparture value
     * @param int $ticketingDaysBeforeDeparture
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo
     */
    public function setTicketingDaysBeforeDeparture($ticketingDaysBeforeDeparture = null)
    {
        // validation for constraint: int
        if (!is_null($ticketingDaysBeforeDeparture) && !is_numeric($ticketingDaysBeforeDeparture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ticketingDaysBeforeDeparture)), __LINE__);
        }
        $this->TicketingDaysBeforeDeparture = $ticketingDaysBeforeDeparture;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseExtendedTicketInfo
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
