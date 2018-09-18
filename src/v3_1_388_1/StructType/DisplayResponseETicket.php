<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayResponseETicket StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayResponseETicket
 * @subpackage Structs
 */
class DisplayResponseETicket extends AbstractStructBase
{
    /**
     * The ETicketAllowed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ETicketAllowed;
    /**
     * The ETicketBuyPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $ETicketBuyPrice;
    /**
     * The ETicketSellPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $ETicketSellPrice;
    /**
     * Constructor method for DisplayResponseETicket
     * @uses DisplayResponseETicket::setETicketAllowed()
     * @uses DisplayResponseETicket::setETicketBuyPrice()
     * @uses DisplayResponseETicket::setETicketSellPrice()
     * @param bool $eTicketAllowed
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $eTicketBuyPrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $eTicketSellPrice
     */
    public function __construct($eTicketAllowed = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $eTicketBuyPrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $eTicketSellPrice = null)
    {
        $this
            ->setETicketAllowed($eTicketAllowed)
            ->setETicketBuyPrice($eTicketBuyPrice)
            ->setETicketSellPrice($eTicketSellPrice);
    }
    /**
     * Get ETicketAllowed value
     * @return bool|null
     */
    public function getETicketAllowed()
    {
        return $this->ETicketAllowed;
    }
    /**
     * Set ETicketAllowed value
     * @param bool $eTicketAllowed
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseETicket
     */
    public function setETicketAllowed($eTicketAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($eTicketAllowed) && !is_bool($eTicketAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eTicketAllowed)), __LINE__);
        }
        $this->ETicketAllowed = $eTicketAllowed;
        return $this;
    }
    /**
     * Get ETicketBuyPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getETicketBuyPrice()
    {
        return isset($this->ETicketBuyPrice) ? $this->ETicketBuyPrice : null;
    }
    /**
     * Set ETicketBuyPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $eTicketBuyPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseETicket
     */
    public function setETicketBuyPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $eTicketBuyPrice = null)
    {
        if (is_null($eTicketBuyPrice) || (is_array($eTicketBuyPrice) && empty($eTicketBuyPrice))) {
            unset($this->ETicketBuyPrice);
        } else {
            $this->ETicketBuyPrice = $eTicketBuyPrice;
        }
        return $this;
    }
    /**
     * Get ETicketSellPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getETicketSellPrice()
    {
        return isset($this->ETicketSellPrice) ? $this->ETicketSellPrice : null;
    }
    /**
     * Set ETicketSellPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $eTicketSellPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseETicket
     */
    public function setETicketSellPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $eTicketSellPrice = null)
    {
        if (is_null($eTicketSellPrice) || (is_array($eTicketSellPrice) && empty($eTicketSellPrice))) {
            unset($this->ETicketSellPrice);
        } else {
            $this->ETicketSellPrice = $eTicketSellPrice;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseETicket
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
