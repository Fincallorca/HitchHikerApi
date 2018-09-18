<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayResponsePTicket StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayResponsePTicket
 * @subpackage Structs
 */
class DisplayResponsePTicket extends AbstractStructBase
{
    /**
     * The PTicketAllowed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $PTicketAllowed;
    /**
     * The PTicketBuyPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $PTicketBuyPrice;
    /**
     * The PTicketSellPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $PTicketSellPrice;
    /**
     * Constructor method for DisplayResponsePTicket
     * @uses DisplayResponsePTicket::setPTicketAllowed()
     * @uses DisplayResponsePTicket::setPTicketBuyPrice()
     * @uses DisplayResponsePTicket::setPTicketSellPrice()
     * @param bool $pTicketAllowed
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $pTicketBuyPrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $pTicketSellPrice
     */
    public function __construct($pTicketAllowed = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $pTicketBuyPrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $pTicketSellPrice = null)
    {
        $this
            ->setPTicketAllowed($pTicketAllowed)
            ->setPTicketBuyPrice($pTicketBuyPrice)
            ->setPTicketSellPrice($pTicketSellPrice);
    }
    /**
     * Get PTicketAllowed value
     * @return bool|null
     */
    public function getPTicketAllowed()
    {
        return $this->PTicketAllowed;
    }
    /**
     * Set PTicketAllowed value
     * @param bool $pTicketAllowed
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePTicket
     */
    public function setPTicketAllowed($pTicketAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($pTicketAllowed) && !is_bool($pTicketAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($pTicketAllowed)), __LINE__);
        }
        $this->PTicketAllowed = $pTicketAllowed;
        return $this;
    }
    /**
     * Get PTicketBuyPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getPTicketBuyPrice()
    {
        return isset($this->PTicketBuyPrice) ? $this->PTicketBuyPrice : null;
    }
    /**
     * Set PTicketBuyPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $pTicketBuyPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePTicket
     */
    public function setPTicketBuyPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $pTicketBuyPrice = null)
    {
        if (is_null($pTicketBuyPrice) || (is_array($pTicketBuyPrice) && empty($pTicketBuyPrice))) {
            unset($this->PTicketBuyPrice);
        } else {
            $this->PTicketBuyPrice = $pTicketBuyPrice;
        }
        return $this;
    }
    /**
     * Get PTicketSellPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getPTicketSellPrice()
    {
        return isset($this->PTicketSellPrice) ? $this->PTicketSellPrice : null;
    }
    /**
     * Set PTicketSellPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $pTicketSellPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePTicket
     */
    public function setPTicketSellPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $pTicketSellPrice = null)
    {
        if (is_null($pTicketSellPrice) || (is_array($pTicketSellPrice) && empty($pTicketSellPrice))) {
            unset($this->PTicketSellPrice);
        } else {
            $this->PTicketSellPrice = $pTicketSellPrice;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePTicket
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
