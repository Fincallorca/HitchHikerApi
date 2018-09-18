<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for QueueSubTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QueueSubTypeEnum
 * @subpackage Enumerations
 */
class QueueSubTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'ETicket'
     * @return string 'ETicket'
     */
    const VALUE_ETICKET = 'ETicket';
    /**
     * Constant for value 'PaperTicket'
     * @return string 'PaperTicket'
     */
    const VALUE_PAPER_TICKET = 'PaperTicket';
    /**
     * Constant for value 'TicketDeposit'
     * @return string 'TicketDeposit'
     */
    const VALUE_TICKET_DEPOSIT = 'TicketDeposit';
    /**
     * Constant for value 'DeliveryConsoToEndConsumer'
     * @return string 'DeliveryConsoToEndConsumer'
     */
    const VALUE_DELIVERY_CONSO_TO_END_CONSUMER = 'DeliveryConsoToEndConsumer';
    /**
     * Constant for value 'AgentManualRemark'
     * @return string 'AgentManualRemark'
     */
    const VALUE_AGENT_MANUAL_REMARK = 'AgentManualRemark';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ETICKET
     * @uses self::VALUE_PAPER_TICKET
     * @uses self::VALUE_TICKET_DEPOSIT
     * @uses self::VALUE_DELIVERY_CONSO_TO_END_CONSUMER
     * @uses self::VALUE_AGENT_MANUAL_REMARK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ETICKET,
            self::VALUE_PAPER_TICKET,
            self::VALUE_TICKET_DEPOSIT,
            self::VALUE_DELIVERY_CONSO_TO_END_CONSUMER,
            self::VALUE_AGENT_MANUAL_REMARK,
        );
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
