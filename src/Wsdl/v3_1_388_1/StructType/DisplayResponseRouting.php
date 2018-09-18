<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayResponseRouting StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayResponseRouting
 * @subpackage Structs
 */
class DisplayResponseRouting extends AbstractStructBase
{
    /**
     * The Addon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair
     */
    public $Addon;
    /**
     * The AddonBookingClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AddonBookingClass;
    /**
     * The Arrival
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair
     */
    public $Arrival;
    /**
     * The BookingClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BookingClass;
    /**
     * The Carrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair
     */
    public $Carrier;
    /**
     * The Departure
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair
     */
    public $Departure;
    /**
     * The DepartureDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DepartureDate;
    /**
     * The Feeder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair
     */
    public $Feeder;
    /**
     * The FeederBookingClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FeederBookingClass;
    /**
     * The Stop
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Stop;
    /**
     * The VIA
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseCodeValuePair
     */
    public $VIA;
    /**
     * Constructor method for DisplayResponseRouting
     * @uses DisplayResponseRouting::setAddon()
     * @uses DisplayResponseRouting::setAddonBookingClass()
     * @uses DisplayResponseRouting::setArrival()
     * @uses DisplayResponseRouting::setBookingClass()
     * @uses DisplayResponseRouting::setCarrier()
     * @uses DisplayResponseRouting::setDeparture()
     * @uses DisplayResponseRouting::setDepartureDate()
     * @uses DisplayResponseRouting::setFeeder()
     * @uses DisplayResponseRouting::setFeederBookingClass()
     * @uses DisplayResponseRouting::setStop()
     * @uses DisplayResponseRouting::setVIA()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $addon
     * @param string $addonBookingClass
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $arrival
     * @param string $bookingClass
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $carrier
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $departure
     * @param string $departureDate
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $feeder
     * @param string $feederBookingClass
     * @param string $stop
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseCodeValuePair $vIA
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $addon = null, $addonBookingClass = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $arrival = null, $bookingClass = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $carrier = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $departure = null, $departureDate = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $feeder = null, $feederBookingClass = null, $stop = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseCodeValuePair $vIA = null)
    {
        $this
            ->setAddon($addon)
            ->setAddonBookingClass($addonBookingClass)
            ->setArrival($arrival)
            ->setBookingClass($bookingClass)
            ->setCarrier($carrier)
            ->setDeparture($departure)
            ->setDepartureDate($departureDate)
            ->setFeeder($feeder)
            ->setFeederBookingClass($feederBookingClass)
            ->setStop($stop)
            ->setVIA($vIA);
    }
    /**
     * Get Addon value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair|null
     */
    public function getAddon()
    {
        return isset($this->Addon) ? $this->Addon : null;
    }
    /**
     * Set Addon value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $addon
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting
     */
    public function setAddon(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $addon = null)
    {
        if (is_null($addon) || (is_array($addon) && empty($addon))) {
            unset($this->Addon);
        } else {
            $this->Addon = $addon;
        }
        return $this;
    }
    /**
     * Get AddonBookingClass value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddonBookingClass()
    {
        return isset($this->AddonBookingClass) ? $this->AddonBookingClass : null;
    }
    /**
     * Set AddonBookingClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addonBookingClass
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting
     */
    public function setAddonBookingClass($addonBookingClass = null)
    {
        // validation for constraint: string
        if (!is_null($addonBookingClass) && !is_string($addonBookingClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addonBookingClass)), __LINE__);
        }
        if (is_null($addonBookingClass) || (is_array($addonBookingClass) && empty($addonBookingClass))) {
            unset($this->AddonBookingClass);
        } else {
            $this->AddonBookingClass = $addonBookingClass;
        }
        return $this;
    }
    /**
     * Get Arrival value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair|null
     */
    public function getArrival()
    {
        return isset($this->Arrival) ? $this->Arrival : null;
    }
    /**
     * Set Arrival value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $arrival
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting
     */
    public function setArrival(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $arrival = null)
    {
        if (is_null($arrival) || (is_array($arrival) && empty($arrival))) {
            unset($this->Arrival);
        } else {
            $this->Arrival = $arrival;
        }
        return $this;
    }
    /**
     * Get BookingClass value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBookingClass()
    {
        return isset($this->BookingClass) ? $this->BookingClass : null;
    }
    /**
     * Set BookingClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $bookingClass
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting
     */
    public function setBookingClass($bookingClass = null)
    {
        // validation for constraint: string
        if (!is_null($bookingClass) && !is_string($bookingClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingClass)), __LINE__);
        }
        if (is_null($bookingClass) || (is_array($bookingClass) && empty($bookingClass))) {
            unset($this->BookingClass);
        } else {
            $this->BookingClass = $bookingClass;
        }
        return $this;
    }
    /**
     * Get Carrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair|null
     */
    public function getCarrier()
    {
        return isset($this->Carrier) ? $this->Carrier : null;
    }
    /**
     * Set Carrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $carrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting
     */
    public function setCarrier(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $carrier = null)
    {
        if (is_null($carrier) || (is_array($carrier) && empty($carrier))) {
            unset($this->Carrier);
        } else {
            $this->Carrier = $carrier;
        }
        return $this;
    }
    /**
     * Get Departure value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair|null
     */
    public function getDeparture()
    {
        return isset($this->Departure) ? $this->Departure : null;
    }
    /**
     * Set Departure value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $departure
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting
     */
    public function setDeparture(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $departure = null)
    {
        if (is_null($departure) || (is_array($departure) && empty($departure))) {
            unset($this->Departure);
        } else {
            $this->Departure = $departure;
        }
        return $this;
    }
    /**
     * Get DepartureDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDepartureDate()
    {
        return isset($this->DepartureDate) ? $this->DepartureDate : null;
    }
    /**
     * Set DepartureDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $departureDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting
     */
    public function setDepartureDate($departureDate = null)
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDate)), __LINE__);
        }
        if (is_null($departureDate) || (is_array($departureDate) && empty($departureDate))) {
            unset($this->DepartureDate);
        } else {
            $this->DepartureDate = $departureDate;
        }
        return $this;
    }
    /**
     * Get Feeder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair|null
     */
    public function getFeeder()
    {
        return isset($this->Feeder) ? $this->Feeder : null;
    }
    /**
     * Set Feeder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $feeder
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting
     */
    public function setFeeder(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $feeder = null)
    {
        if (is_null($feeder) || (is_array($feeder) && empty($feeder))) {
            unset($this->Feeder);
        } else {
            $this->Feeder = $feeder;
        }
        return $this;
    }
    /**
     * Get FeederBookingClass value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFeederBookingClass()
    {
        return isset($this->FeederBookingClass) ? $this->FeederBookingClass : null;
    }
    /**
     * Set FeederBookingClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $feederBookingClass
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting
     */
    public function setFeederBookingClass($feederBookingClass = null)
    {
        // validation for constraint: string
        if (!is_null($feederBookingClass) && !is_string($feederBookingClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($feederBookingClass)), __LINE__);
        }
        if (is_null($feederBookingClass) || (is_array($feederBookingClass) && empty($feederBookingClass))) {
            unset($this->FeederBookingClass);
        } else {
            $this->FeederBookingClass = $feederBookingClass;
        }
        return $this;
    }
    /**
     * Get Stop value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStop()
    {
        return isset($this->Stop) ? $this->Stop : null;
    }
    /**
     * Set Stop value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $stop
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting
     */
    public function setStop($stop = null)
    {
        // validation for constraint: string
        if (!is_null($stop) && !is_string($stop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stop)), __LINE__);
        }
        if (is_null($stop) || (is_array($stop) && empty($stop))) {
            unset($this->Stop);
        } else {
            $this->Stop = $stop;
        }
        return $this;
    }
    /**
     * Get VIA value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseCodeValuePair|null
     */
    public function getVIA()
    {
        return isset($this->VIA) ? $this->VIA : null;
    }
    /**
     * Set VIA value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseCodeValuePair $vIA
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting
     */
    public function setVIA(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseCodeValuePair $vIA = null)
    {
        if (is_null($vIA) || (is_array($vIA) && empty($vIA))) {
            unset($this->VIA);
        } else {
            $this->VIA = $vIA;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting
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
