<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayResponseLeg StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayResponseLeg
 * @subpackage Structs
 */
class DisplayResponseLeg extends AbstractStructBase
{
    /**
     * The AdvancedPuchaseInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseAdvancedPurchase
     */
    public $AdvancedPuchaseInfo;
    /**
     * The BlackOutDays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BlackOutDays;
    /**
     * The BlackoutFlightNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $BlackoutFlightNumbers;
    /**
     * The CabinClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair
     */
    public $CabinClass;
    /**
     * The RoutingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting
     */
    public $RoutingInfo;
    /**
     * The RuleInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public $RuleInfo;
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
     * The TicketInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseTicket
     */
    public $TicketInfo;
    /**
     * The Weekdays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Weekdays;
    /**
     * The WeekendSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WeekendSurcharge;
    /**
     * Constructor method for DisplayResponseLeg
     * @uses DisplayResponseLeg::setAdvancedPuchaseInfo()
     * @uses DisplayResponseLeg::setBlackOutDays()
     * @uses DisplayResponseLeg::setBlackoutFlightNumbers()
     * @uses DisplayResponseLeg::setCabinClass()
     * @uses DisplayResponseLeg::setRoutingInfo()
     * @uses DisplayResponseLeg::setRuleInfo()
     * @uses DisplayResponseLeg::setTariffSubType()
     * @uses DisplayResponseLeg::setTariffType()
     * @uses DisplayResponseLeg::setTicketInfo()
     * @uses DisplayResponseLeg::setWeekdays()
     * @uses DisplayResponseLeg::setWeekendSurcharge()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseAdvancedPurchase $advancedPuchaseInfo
     * @param string $blackOutDays
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $blackoutFlightNumbers
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $cabinClass
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting $routingInfo
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule $ruleInfo
     * @param string $tariffSubType
     * @param string $tariffType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseTicket $ticketInfo
     * @param string $weekdays
     * @param string $weekendSurcharge
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseAdvancedPurchase $advancedPuchaseInfo = null, $blackOutDays = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $blackoutFlightNumbers = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $cabinClass = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting $routingInfo = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule $ruleInfo = null, $tariffSubType = null, $tariffType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseTicket $ticketInfo = null, $weekdays = null, $weekendSurcharge = null)
    {
        $this
            ->setAdvancedPuchaseInfo($advancedPuchaseInfo)
            ->setBlackOutDays($blackOutDays)
            ->setBlackoutFlightNumbers($blackoutFlightNumbers)
            ->setCabinClass($cabinClass)
            ->setRoutingInfo($routingInfo)
            ->setRuleInfo($ruleInfo)
            ->setTariffSubType($tariffSubType)
            ->setTariffType($tariffType)
            ->setTicketInfo($ticketInfo)
            ->setWeekdays($weekdays)
            ->setWeekendSurcharge($weekendSurcharge);
    }
    /**
     * Get AdvancedPuchaseInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseAdvancedPurchase|null
     */
    public function getAdvancedPuchaseInfo()
    {
        return isset($this->AdvancedPuchaseInfo) ? $this->AdvancedPuchaseInfo : null;
    }
    /**
     * Set AdvancedPuchaseInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseAdvancedPurchase $advancedPuchaseInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg
     */
    public function setAdvancedPuchaseInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseAdvancedPurchase $advancedPuchaseInfo = null)
    {
        if (is_null($advancedPuchaseInfo) || (is_array($advancedPuchaseInfo) && empty($advancedPuchaseInfo))) {
            unset($this->AdvancedPuchaseInfo);
        } else {
            $this->AdvancedPuchaseInfo = $advancedPuchaseInfo;
        }
        return $this;
    }
    /**
     * Get BlackOutDays value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBlackOutDays()
    {
        return isset($this->BlackOutDays) ? $this->BlackOutDays : null;
    }
    /**
     * Set BlackOutDays value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $blackOutDays
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg
     */
    public function setBlackOutDays($blackOutDays = null)
    {
        // validation for constraint: string
        if (!is_null($blackOutDays) && !is_string($blackOutDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($blackOutDays)), __LINE__);
        }
        if (is_null($blackOutDays) || (is_array($blackOutDays) && empty($blackOutDays))) {
            unset($this->BlackOutDays);
        } else {
            $this->BlackOutDays = $blackOutDays;
        }
        return $this;
    }
    /**
     * Get BlackoutFlightNumbers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getBlackoutFlightNumbers()
    {
        return isset($this->BlackoutFlightNumbers) ? $this->BlackoutFlightNumbers : null;
    }
    /**
     * Set BlackoutFlightNumbers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $blackoutFlightNumbers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg
     */
    public function setBlackoutFlightNumbers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $blackoutFlightNumbers = null)
    {
        if (is_null($blackoutFlightNumbers) || (is_array($blackoutFlightNumbers) && empty($blackoutFlightNumbers))) {
            unset($this->BlackoutFlightNumbers);
        } else {
            $this->BlackoutFlightNumbers = $blackoutFlightNumbers;
        }
        return $this;
    }
    /**
     * Get CabinClass value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair|null
     */
    public function getCabinClass()
    {
        return isset($this->CabinClass) ? $this->CabinClass : null;
    }
    /**
     * Set CabinClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $cabinClass
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg
     */
    public function setCabinClass(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $cabinClass = null)
    {
        if (is_null($cabinClass) || (is_array($cabinClass) && empty($cabinClass))) {
            unset($this->CabinClass);
        } else {
            $this->CabinClass = $cabinClass;
        }
        return $this;
    }
    /**
     * Get RoutingInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting|null
     */
    public function getRoutingInfo()
    {
        return isset($this->RoutingInfo) ? $this->RoutingInfo : null;
    }
    /**
     * Set RoutingInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting $routingInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg
     */
    public function setRoutingInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRouting $routingInfo = null)
    {
        if (is_null($routingInfo) || (is_array($routingInfo) && empty($routingInfo))) {
            unset($this->RoutingInfo);
        } else {
            $this->RoutingInfo = $routingInfo;
        }
        return $this;
    }
    /**
     * Get RuleInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule|null
     */
    public function getRuleInfo()
    {
        return isset($this->RuleInfo) ? $this->RuleInfo : null;
    }
    /**
     * Set RuleInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule $ruleInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg
     */
    public function setRuleInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule $ruleInfo = null)
    {
        if (is_null($ruleInfo) || (is_array($ruleInfo) && empty($ruleInfo))) {
            unset($this->RuleInfo);
        } else {
            $this->RuleInfo = $ruleInfo;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg
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
     * Get TicketInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseTicket|null
     */
    public function getTicketInfo()
    {
        return isset($this->TicketInfo) ? $this->TicketInfo : null;
    }
    /**
     * Set TicketInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseTicket $ticketInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg
     */
    public function setTicketInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseTicket $ticketInfo = null)
    {
        if (is_null($ticketInfo) || (is_array($ticketInfo) && empty($ticketInfo))) {
            unset($this->TicketInfo);
        } else {
            $this->TicketInfo = $ticketInfo;
        }
        return $this;
    }
    /**
     * Get Weekdays value
     * @return string|null
     */
    public function getWeekdays()
    {
        return $this->Weekdays;
    }
    /**
     * Set Weekdays value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\WeekDayEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\WeekDayEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $weekdays
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg
     */
    public function setWeekdays($weekdays = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\WeekDayEnum::valueIsValid($weekdays)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $weekdays, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\WeekDayEnum::getValidValues())), __LINE__);
        }
        $this->Weekdays = $weekdays;
        return $this;
    }
    /**
     * Get WeekendSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWeekendSurcharge()
    {
        return isset($this->WeekendSurcharge) ? $this->WeekendSurcharge : null;
    }
    /**
     * Set WeekendSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $weekendSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg
     */
    public function setWeekendSurcharge($weekendSurcharge = null)
    {
        // validation for constraint: string
        if (!is_null($weekendSurcharge) && !is_string($weekendSurcharge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($weekendSurcharge)), __LINE__);
        }
        if (is_null($weekendSurcharge) || (is_array($weekendSurcharge) && empty($weekendSurcharge))) {
            unset($this->WeekendSurcharge);
        } else {
            $this->WeekendSurcharge = $weekendSurcharge;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg
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
