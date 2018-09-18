<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketBookingResponse StructType
 * @subpackage Structs
 */
class TicketBookingResponse extends AbstractStructBase
{
    /**
     * The TicketBookingResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseData
     */
    public $TicketBookingResult;
    /**
     * Constructor method for TicketBookingResponse
     * @uses TicketBookingResponse::setTicketBookingResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseData $ticketBookingResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseData $ticketBookingResult = null)
    {
        $this
            ->setTicketBookingResult($ticketBookingResult);
    }
    /**
     * Get TicketBookingResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseData|null
     */
    public function getTicketBookingResult()
    {
        return isset($this->TicketBookingResult) ? $this->TicketBookingResult : null;
    }
    /**
     * Set TicketBookingResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseData $ticketBookingResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponse
     */
    public function setTicketBookingResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponseData $ticketBookingResult = null)
    {
        if (is_null($ticketBookingResult) || (is_array($ticketBookingResult) && empty($ticketBookingResult))) {
            unset($this->TicketBookingResult);
        } else {
            $this->TicketBookingResult = $ticketBookingResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingResponse
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
