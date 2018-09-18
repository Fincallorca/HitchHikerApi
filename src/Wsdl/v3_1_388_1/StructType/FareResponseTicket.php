<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareResponseTicket StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareResponseTicket
 * @subpackage Structs
 */
class FareResponseTicket extends AbstractStructBase
{
    /**
     * The LastTicketingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastTicketingDate;
    /**
     * The MaxTicketingAfterBook
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxTicketingAfterBook;
    /**
     * The MinTicketingBeforeDep
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinTicketingBeforeDep;
    /**
     * The TicketOnDepInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TicketOnDepInfo;
    /**
     * Constructor method for FareResponseTicket
     * @uses FareResponseTicket::setLastTicketingDate()
     * @uses FareResponseTicket::setMaxTicketingAfterBook()
     * @uses FareResponseTicket::setMinTicketingBeforeDep()
     * @uses FareResponseTicket::setTicketOnDepInfo()
     * @param string $lastTicketingDate
     * @param int $maxTicketingAfterBook
     * @param int $minTicketingBeforeDep
     * @param string $ticketOnDepInfo
     */
    public function __construct($lastTicketingDate = null, $maxTicketingAfterBook = null, $minTicketingBeforeDep = null, $ticketOnDepInfo = null)
    {
        $this
            ->setLastTicketingDate($lastTicketingDate)
            ->setMaxTicketingAfterBook($maxTicketingAfterBook)
            ->setMinTicketingBeforeDep($minTicketingBeforeDep)
            ->setTicketOnDepInfo($ticketOnDepInfo);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseTicket
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
     * Get MaxTicketingAfterBook value
     * @return int|null
     */
    public function getMaxTicketingAfterBook()
    {
        return $this->MaxTicketingAfterBook;
    }
    /**
     * Set MaxTicketingAfterBook value
     * @param int $maxTicketingAfterBook
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseTicket
     */
    public function setMaxTicketingAfterBook($maxTicketingAfterBook = null)
    {
        // validation for constraint: int
        if (!is_null($maxTicketingAfterBook) && !is_numeric($maxTicketingAfterBook)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxTicketingAfterBook)), __LINE__);
        }
        $this->MaxTicketingAfterBook = $maxTicketingAfterBook;
        return $this;
    }
    /**
     * Get MinTicketingBeforeDep value
     * @return int|null
     */
    public function getMinTicketingBeforeDep()
    {
        return $this->MinTicketingBeforeDep;
    }
    /**
     * Set MinTicketingBeforeDep value
     * @param int $minTicketingBeforeDep
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseTicket
     */
    public function setMinTicketingBeforeDep($minTicketingBeforeDep = null)
    {
        // validation for constraint: int
        if (!is_null($minTicketingBeforeDep) && !is_numeric($minTicketingBeforeDep)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minTicketingBeforeDep)), __LINE__);
        }
        $this->MinTicketingBeforeDep = $minTicketingBeforeDep;
        return $this;
    }
    /**
     * Get TicketOnDepInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTicketOnDepInfo()
    {
        return isset($this->TicketOnDepInfo) ? $this->TicketOnDepInfo : null;
    }
    /**
     * Set TicketOnDepInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ticketOnDepInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseTicket
     */
    public function setTicketOnDepInfo($ticketOnDepInfo = null)
    {
        // validation for constraint: string
        if (!is_null($ticketOnDepInfo) && !is_string($ticketOnDepInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketOnDepInfo)), __LINE__);
        }
        if (is_null($ticketOnDepInfo) || (is_array($ticketOnDepInfo) && empty($ticketOnDepInfo))) {
            unset($this->TicketOnDepInfo);
        } else {
            $this->TicketOnDepInfo = $ticketOnDepInfo;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseTicket
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
