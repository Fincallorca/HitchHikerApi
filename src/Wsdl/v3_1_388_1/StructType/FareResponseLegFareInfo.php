<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareResponseLegFareInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareResponseLegFareInfo
 * @subpackage Structs
 */
class FareResponseLegFareInfo extends AbstractStructBase
{
    /**
     * The BookingClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BookingClass;
    /**
     * The Farebase
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Farebase;
    /**
     * The LegCabinClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LegCabinClass;
    /**
     * The Routing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRouting
     */
    public $Routing;
    /**
     * The Rule
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRule
     */
    public $Rule;
    /**
     * The TariffSubType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffSubType;
    /**
     * The TariffType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffType;
    /**
     * The Ticket
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseTicket
     */
    public $Ticket;
    /**
     * Constructor method for FareResponseLegFareInfo
     * @uses FareResponseLegFareInfo::setBookingClass()
     * @uses FareResponseLegFareInfo::setFarebase()
     * @uses FareResponseLegFareInfo::setLegCabinClass()
     * @uses FareResponseLegFareInfo::setRouting()
     * @uses FareResponseLegFareInfo::setRule()
     * @uses FareResponseLegFareInfo::setTariffSubType()
     * @uses FareResponseLegFareInfo::setTariffType()
     * @uses FareResponseLegFareInfo::setTicket()
     * @param string $bookingClass
     * @param string $farebase
     * @param string $legCabinClass
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRouting $routing
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRule $rule
     * @param string $tariffSubType
     * @param string $tariffType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseTicket $ticket
     */
    public function __construct($bookingClass = null, $farebase = null, $legCabinClass = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRouting $routing = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRule $rule = null, $tariffSubType = null, $tariffType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseTicket $ticket = null)
    {
        $this
            ->setBookingClass($bookingClass)
            ->setFarebase($farebase)
            ->setLegCabinClass($legCabinClass)
            ->setRouting($routing)
            ->setRule($rule)
            ->setTariffSubType($tariffSubType)
            ->setTariffType($tariffType)
            ->setTicket($ticket);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegFareInfo
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
     * Get Farebase value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFarebase()
    {
        return isset($this->Farebase) ? $this->Farebase : null;
    }
    /**
     * Set Farebase value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $farebase
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegFareInfo
     */
    public function setFarebase($farebase = null)
    {
        // validation for constraint: string
        if (!is_null($farebase) && !is_string($farebase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($farebase)), __LINE__);
        }
        if (is_null($farebase) || (is_array($farebase) && empty($farebase))) {
            unset($this->Farebase);
        } else {
            $this->Farebase = $farebase;
        }
        return $this;
    }
    /**
     * Get LegCabinClass value
     * @return string|null
     */
    public function getLegCabinClass()
    {
        return $this->LegCabinClass;
    }
    /**
     * Set LegCabinClass value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $legCabinClass
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegFareInfo
     */
    public function setLegCabinClass($legCabinClass = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid($legCabinClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $legCabinClass, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues())), __LINE__);
        }
        $this->LegCabinClass = $legCabinClass;
        return $this;
    }
    /**
     * Get Routing value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRouting|null
     */
    public function getRouting()
    {
        return isset($this->Routing) ? $this->Routing : null;
    }
    /**
     * Set Routing value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRouting $routing
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegFareInfo
     */
    public function setRouting(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRouting $routing = null)
    {
        if (is_null($routing) || (is_array($routing) && empty($routing))) {
            unset($this->Routing);
        } else {
            $this->Routing = $routing;
        }
        return $this;
    }
    /**
     * Get Rule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRule|null
     */
    public function getRule()
    {
        return isset($this->Rule) ? $this->Rule : null;
    }
    /**
     * Set Rule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRule $rule
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegFareInfo
     */
    public function setRule(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseRule $rule = null)
    {
        if (is_null($rule) || (is_array($rule) && empty($rule))) {
            unset($this->Rule);
        } else {
            $this->Rule = $rule;
        }
        return $this;
    }
    /**
     * Get TariffSubType value
     * @return string|null
     */
    public function getTariffSubType()
    {
        return $this->TariffSubType;
    }
    /**
     * Set TariffSubType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffSubTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffSubTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tariffSubType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegFareInfo
     */
    public function setTariffSubType($tariffSubType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffSubTypeEnum::valueIsValid($tariffSubType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tariffSubType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffSubTypeEnum::getValidValues())), __LINE__);
        }
        $this->TariffSubType = $tariffSubType;
        return $this;
    }
    /**
     * Get TariffType value
     * @return string|null
     */
    public function getTariffType()
    {
        return $this->TariffType;
    }
    /**
     * Set TariffType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tariffType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegFareInfo
     */
    public function setTariffType($tariffType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::valueIsValid($tariffType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tariffType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::getValidValues())), __LINE__);
        }
        $this->TariffType = $tariffType;
        return $this;
    }
    /**
     * Get Ticket value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseTicket|null
     */
    public function getTicket()
    {
        return isset($this->Ticket) ? $this->Ticket : null;
    }
    /**
     * Set Ticket value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseTicket $ticket
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegFareInfo
     */
    public function setTicket(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseTicket $ticket = null)
    {
        if (is_null($ticket) || (is_array($ticket) && empty($ticket))) {
            unset($this->Ticket);
        } else {
            $this->Ticket = $ticket;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegFareInfo
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
