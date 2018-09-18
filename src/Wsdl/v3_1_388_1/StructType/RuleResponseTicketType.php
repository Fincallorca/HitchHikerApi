<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleResponseTicketType StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RuleResponseTicketType
 * @subpackage Structs
 */
class RuleResponseTicketType extends AbstractStructBase
{
    /**
     * The NetCurrency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NetCurrency;
    /**
     * The PassengerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponsePassengerType
     */
    public $PassengerType;
    /**
     * The SellCurrency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SellCurrency;
    /**
     * The TicketType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TicketType;
    /**
     * Constructor method for RuleResponseTicketType
     * @uses RuleResponseTicketType::setNetCurrency()
     * @uses RuleResponseTicketType::setPassengerType()
     * @uses RuleResponseTicketType::setSellCurrency()
     * @uses RuleResponseTicketType::setTicketType()
     * @param string $netCurrency
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponsePassengerType $passengerType
     * @param string $sellCurrency
     * @param string $ticketType
     */
    public function __construct($netCurrency = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponsePassengerType $passengerType = null, $sellCurrency = null, $ticketType = null)
    {
        $this
            ->setNetCurrency($netCurrency)
            ->setPassengerType($passengerType)
            ->setSellCurrency($sellCurrency)
            ->setTicketType($ticketType);
    }
    /**
     * Get NetCurrency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNetCurrency()
    {
        return isset($this->NetCurrency) ? $this->NetCurrency : null;
    }
    /**
     * Set NetCurrency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $netCurrency
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseTicketType
     */
    public function setNetCurrency($netCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($netCurrency) && !is_string($netCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($netCurrency)), __LINE__);
        }
        if (is_null($netCurrency) || (is_array($netCurrency) && empty($netCurrency))) {
            unset($this->NetCurrency);
        } else {
            $this->NetCurrency = $netCurrency;
        }
        return $this;
    }
    /**
     * Get PassengerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponsePassengerType|null
     */
    public function getPassengerType()
    {
        return isset($this->PassengerType) ? $this->PassengerType : null;
    }
    /**
     * Set PassengerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponsePassengerType $passengerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseTicketType
     */
    public function setPassengerType(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponsePassengerType $passengerType = null)
    {
        if (is_null($passengerType) || (is_array($passengerType) && empty($passengerType))) {
            unset($this->PassengerType);
        } else {
            $this->PassengerType = $passengerType;
        }
        return $this;
    }
    /**
     * Get SellCurrency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSellCurrency()
    {
        return isset($this->SellCurrency) ? $this->SellCurrency : null;
    }
    /**
     * Set SellCurrency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sellCurrency
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseTicketType
     */
    public function setSellCurrency($sellCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($sellCurrency) && !is_string($sellCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellCurrency)), __LINE__);
        }
        if (is_null($sellCurrency) || (is_array($sellCurrency) && empty($sellCurrency))) {
            unset($this->SellCurrency);
        } else {
            $this->SellCurrency = $sellCurrency;
        }
        return $this;
    }
    /**
     * Get TicketType value
     * @return string|null
     */
    public function getTicketType()
    {
        return $this->TicketType;
    }
    /**
     * Set TicketType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TicketTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TicketTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ticketType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseTicketType
     */
    public function setTicketType($ticketType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TicketTypeEnum::valueIsValid($ticketType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ticketType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TicketTypeEnum::getValidValues())), __LINE__);
        }
        $this->TicketType = $ticketType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseTicketType
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
