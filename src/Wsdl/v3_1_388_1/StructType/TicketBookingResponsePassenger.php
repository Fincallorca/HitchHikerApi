<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketBookingResponsePassenger StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketBookingResponsePassenger
 * @subpackage Structs
 */
class TicketBookingResponsePassenger extends AbstractStructBase
{
    /**
     * The PassengerDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponsePassengerDetails
     */
    public $PassengerDetails;
    /**
     * The TicketDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseTicket
     */
    public $TicketDetails;
    /**
     * Constructor method for TicketBookingResponsePassenger
     * @uses TicketBookingResponsePassenger::setPassengerDetails()
     * @uses TicketBookingResponsePassenger::setTicketDetails()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponsePassengerDetails $passengerDetails
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseTicket $ticketDetails
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponsePassengerDetails $passengerDetails = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseTicket $ticketDetails = null)
    {
        $this
            ->setPassengerDetails($passengerDetails)
            ->setTicketDetails($ticketDetails);
    }
    /**
     * Get PassengerDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponsePassengerDetails|null
     */
    public function getPassengerDetails()
    {
        return isset($this->PassengerDetails) ? $this->PassengerDetails : null;
    }
    /**
     * Set PassengerDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponsePassengerDetails $passengerDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponsePassenger
     */
    public function setPassengerDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponsePassengerDetails $passengerDetails = null)
    {
        if (is_null($passengerDetails) || (is_array($passengerDetails) && empty($passengerDetails))) {
            unset($this->PassengerDetails);
        } else {
            $this->PassengerDetails = $passengerDetails;
        }
        return $this;
    }
    /**
     * Get TicketDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseTicket|null
     */
    public function getTicketDetails()
    {
        return isset($this->TicketDetails) ? $this->TicketDetails : null;
    }
    /**
     * Set TicketDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseTicket $ticketDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponsePassenger
     */
    public function setTicketDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseTicket $ticketDetails = null)
    {
        if (is_null($ticketDetails) || (is_array($ticketDetails) && empty($ticketDetails))) {
            unset($this->TicketDetails);
        } else {
            $this->TicketDetails = $ticketDetails;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponsePassenger
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
