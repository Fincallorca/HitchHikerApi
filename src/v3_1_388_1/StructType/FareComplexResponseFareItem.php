<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareComplexResponseFareItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareComplexResponseFareItem
 * @subpackage Structs
 */
class FareComplexResponseFareItem extends FareResponseFlight
{
    /**
     * The Fare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails
     */
    public $Fare;
    /**
     * The TicketGroupID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TicketGroupID;
    /**
     * Constructor method for FareComplexResponseFareItem
     * @uses FareComplexResponseFareItem::setFare()
     * @uses FareComplexResponseFareItem::setTicketGroupID()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails $fare
     * @param int $ticketGroupID
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails $fare = null, $ticketGroupID = null)
    {
        $this
            ->setFare($fare)
            ->setTicketGroupID($ticketGroupID);
    }
    /**
     * Get Fare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails|null
     */
    public function getFare()
    {
        return isset($this->Fare) ? $this->Fare : null;
    }
    /**
     * Set Fare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails $fare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem
     */
    public function setFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareDetails $fare = null)
    {
        if (is_null($fare) || (is_array($fare) && empty($fare))) {
            unset($this->Fare);
        } else {
            $this->Fare = $fare;
        }
        return $this;
    }
    /**
     * Get TicketGroupID value
     * @return int|null
     */
    public function getTicketGroupID()
    {
        return $this->TicketGroupID;
    }
    /**
     * Set TicketGroupID value
     * @param int $ticketGroupID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem
     */
    public function setTicketGroupID($ticketGroupID = null)
    {
        // validation for constraint: int
        if (!is_null($ticketGroupID) && !is_numeric($ticketGroupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ticketGroupID)), __LINE__);
        }
        $this->TicketGroupID = $ticketGroupID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFareItem
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
