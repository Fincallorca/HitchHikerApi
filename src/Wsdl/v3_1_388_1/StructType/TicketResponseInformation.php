<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketResponseInformation StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketResponseInformation
 * @subpackage Structs
 */
class TicketResponseInformation extends AbstractStructBase
{
    /**
     * The RecordSet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RecordSet;
    /**
     * The Tickets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponseTicket
     */
    public $Tickets;
    /**
     * Constructor method for TicketResponseInformation
     * @uses TicketResponseInformation::setRecordSet()
     * @uses TicketResponseInformation::setTickets()
     * @param string $recordSet
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponseTicket $tickets
     */
    public function __construct($recordSet = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponseTicket $tickets = null)
    {
        $this
            ->setRecordSet($recordSet)
            ->setTickets($tickets);
    }
    /**
     * Get RecordSet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecordSet()
    {
        return isset($this->RecordSet) ? $this->RecordSet : null;
    }
    /**
     * Set RecordSet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recordSet
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseInformation
     */
    public function setRecordSet($recordSet = null)
    {
        // validation for constraint: string
        if (!is_null($recordSet) && !is_string($recordSet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordSet)), __LINE__);
        }
        if (is_null($recordSet) || (is_array($recordSet) && empty($recordSet))) {
            unset($this->RecordSet);
        } else {
            $this->RecordSet = $recordSet;
        }
        return $this;
    }
    /**
     * Get Tickets value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponseTicket|null
     */
    public function getTickets()
    {
        return isset($this->Tickets) ? $this->Tickets : null;
    }
    /**
     * Set Tickets value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponseTicket $tickets
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseInformation
     */
    public function setTickets(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponseTicket $tickets = null)
    {
        if (is_null($tickets) || (is_array($tickets) && empty($tickets))) {
            unset($this->Tickets);
        } else {
            $this->Tickets = $tickets;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseInformation
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
