<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestVayantData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RequestVayantData
 * @subpackage Structs
 */
class RequestVayantData extends AbstractStructBase
{
    /**
     * The AllowAirportChange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowAirportChange;
    /**
     * The AllowSplitTicket
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AllowSplitTicket;
    /**
     * The BookingChannel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BookingChannel;
    /**
     * The ChangeableFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ChangeableFares;
    /**
     * The MCTMultiplier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $MCTMultiplier;
    /**
     * The MaxConnectTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxConnectTime;
    /**
     * The NumberOfFares
     * @var int
     */
    public $NumberOfFares;
    /**
     * The PointOfSales
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $PointOfSales;
    /**
     * The RefundableFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $RefundableFares;
    /**
     * The VayantFareSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VayantFareSource;
    /**
     * Constructor method for RequestVayantData
     * @uses RequestVayantData::setAllowAirportChange()
     * @uses RequestVayantData::setAllowSplitTicket()
     * @uses RequestVayantData::setBookingChannel()
     * @uses RequestVayantData::setChangeableFares()
     * @uses RequestVayantData::setMCTMultiplier()
     * @uses RequestVayantData::setMaxConnectTime()
     * @uses RequestVayantData::setNumberOfFares()
     * @uses RequestVayantData::setPointOfSales()
     * @uses RequestVayantData::setRefundableFares()
     * @uses RequestVayantData::setVayantFareSource()
     * @param bool $allowAirportChange
     * @param string $allowSplitTicket
     * @param string $bookingChannel
     * @param bool $changeableFares
     * @param float $mCTMultiplier
     * @param int $maxConnectTime
     * @param int $numberOfFares
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $pointOfSales
     * @param bool $refundableFares
     * @param string $vayantFareSource
     */
    public function __construct($allowAirportChange = null, $allowSplitTicket = null, $bookingChannel = null, $changeableFares = null, $mCTMultiplier = null, $maxConnectTime = null, $numberOfFares = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $pointOfSales = null, $refundableFares = null, $vayantFareSource = null)
    {
        $this
            ->setAllowAirportChange($allowAirportChange)
            ->setAllowSplitTicket($allowSplitTicket)
            ->setBookingChannel($bookingChannel)
            ->setChangeableFares($changeableFares)
            ->setMCTMultiplier($mCTMultiplier)
            ->setMaxConnectTime($maxConnectTime)
            ->setNumberOfFares($numberOfFares)
            ->setPointOfSales($pointOfSales)
            ->setRefundableFares($refundableFares)
            ->setVayantFareSource($vayantFareSource);
    }
    /**
     * Get AllowAirportChange value
     * @return bool|null
     */
    public function getAllowAirportChange()
    {
        return $this->AllowAirportChange;
    }
    /**
     * Set AllowAirportChange value
     * @param bool $allowAirportChange
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData
     */
    public function setAllowAirportChange($allowAirportChange = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowAirportChange) && !is_bool($allowAirportChange)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowAirportChange)), __LINE__);
        }
        $this->AllowAirportChange = $allowAirportChange;
        return $this;
    }
    /**
     * Get AllowSplitTicket value
     * @return string|null
     */
    public function getAllowSplitTicket()
    {
        return $this->AllowSplitTicket;
    }
    /**
     * Set AllowSplitTicket value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllowSplitTicketEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllowSplitTicketEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $allowSplitTicket
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData
     */
    public function setAllowSplitTicket($allowSplitTicket = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllowSplitTicketEnum::valueIsValid($allowSplitTicket)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $allowSplitTicket, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllowSplitTicketEnum::getValidValues())), __LINE__);
        }
        $this->AllowSplitTicket = $allowSplitTicket;
        return $this;
    }
    /**
     * Get BookingChannel value
     * @return string|null
     */
    public function getBookingChannel()
    {
        return $this->BookingChannel;
    }
    /**
     * Set BookingChannel value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\BookingChannelEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\BookingChannelEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bookingChannel
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData
     */
    public function setBookingChannel($bookingChannel = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\BookingChannelEnum::valueIsValid($bookingChannel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $bookingChannel, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\BookingChannelEnum::getValidValues())), __LINE__);
        }
        $this->BookingChannel = $bookingChannel;
        return $this;
    }
    /**
     * Get ChangeableFares value
     * @return bool|null
     */
    public function getChangeableFares()
    {
        return $this->ChangeableFares;
    }
    /**
     * Set ChangeableFares value
     * @param bool $changeableFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData
     */
    public function setChangeableFares($changeableFares = null)
    {
        // validation for constraint: boolean
        if (!is_null($changeableFares) && !is_bool($changeableFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($changeableFares)), __LINE__);
        }
        $this->ChangeableFares = $changeableFares;
        return $this;
    }
    /**
     * Get MCTMultiplier value
     * @return float|null
     */
    public function getMCTMultiplier()
    {
        return $this->MCTMultiplier;
    }
    /**
     * Set MCTMultiplier value
     * @param float $mCTMultiplier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData
     */
    public function setMCTMultiplier($mCTMultiplier = null)
    {
        $this->MCTMultiplier = $mCTMultiplier;
        return $this;
    }
    /**
     * Get MaxConnectTime value
     * @return int|null
     */
    public function getMaxConnectTime()
    {
        return $this->MaxConnectTime;
    }
    /**
     * Set MaxConnectTime value
     * @param int $maxConnectTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData
     */
    public function setMaxConnectTime($maxConnectTime = null)
    {
        // validation for constraint: int
        if (!is_null($maxConnectTime) && !is_numeric($maxConnectTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxConnectTime)), __LINE__);
        }
        $this->MaxConnectTime = $maxConnectTime;
        return $this;
    }
    /**
     * Get NumberOfFares value
     * @return int|null
     */
    public function getNumberOfFares()
    {
        return $this->NumberOfFares;
    }
    /**
     * Set NumberOfFares value
     * @param int $numberOfFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData
     */
    public function setNumberOfFares($numberOfFares = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfFares) && !is_numeric($numberOfFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfFares)), __LINE__);
        }
        $this->NumberOfFares = $numberOfFares;
        return $this;
    }
    /**
     * Get PointOfSales value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getPointOfSales()
    {
        return isset($this->PointOfSales) ? $this->PointOfSales : null;
    }
    /**
     * Set PointOfSales value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $pointOfSales
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData
     */
    public function setPointOfSales(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $pointOfSales = null)
    {
        if (is_null($pointOfSales) || (is_array($pointOfSales) && empty($pointOfSales))) {
            unset($this->PointOfSales);
        } else {
            $this->PointOfSales = $pointOfSales;
        }
        return $this;
    }
    /**
     * Get RefundableFares value
     * @return bool|null
     */
    public function getRefundableFares()
    {
        return $this->RefundableFares;
    }
    /**
     * Set RefundableFares value
     * @param bool $refundableFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData
     */
    public function setRefundableFares($refundableFares = null)
    {
        // validation for constraint: boolean
        if (!is_null($refundableFares) && !is_bool($refundableFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($refundableFares)), __LINE__);
        }
        $this->RefundableFares = $refundableFares;
        return $this;
    }
    /**
     * Get VayantFareSource value
     * @return string|null
     */
    public function getVayantFareSource()
    {
        return $this->VayantFareSource;
    }
    /**
     * Set VayantFareSource value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSourceEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSourceEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vayantFareSource
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData
     */
    public function setVayantFareSource($vayantFareSource = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSourceEnum::valueIsValid($vayantFareSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vayantFareSource, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSourceEnum::getValidValues())), __LINE__);
        }
        $this->VayantFareSource = $vayantFareSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData
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
