<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleResponseWeekdaySurcharge StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RuleResponseWeekdaySurcharge
 * @subpackage Structs
 */
class RuleResponseWeekdaySurcharge extends AbstractStructBase
{
    /**
     * The DaysIn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DaysIn;
    /**
     * The DaysOut
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DaysOut;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
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
     * Constructor method for RuleResponseWeekdaySurcharge
     * @uses RuleResponseWeekdaySurcharge::setDaysIn()
     * @uses RuleResponseWeekdaySurcharge::setDaysOut()
     * @uses RuleResponseWeekdaySurcharge::setName()
     * @uses RuleResponseWeekdaySurcharge::setNetCurrency()
     * @uses RuleResponseWeekdaySurcharge::setPassengerType()
     * @uses RuleResponseWeekdaySurcharge::setSellCurrency()
     * @param string $daysIn
     * @param string $daysOut
     * @param string $name
     * @param string $netCurrency
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponsePassengerType $passengerType
     * @param string $sellCurrency
     */
    public function __construct($daysIn = null, $daysOut = null, $name = null, $netCurrency = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponsePassengerType $passengerType = null, $sellCurrency = null)
    {
        $this
            ->setDaysIn($daysIn)
            ->setDaysOut($daysOut)
            ->setName($name)
            ->setNetCurrency($netCurrency)
            ->setPassengerType($passengerType)
            ->setSellCurrency($sellCurrency);
    }
    /**
     * Get DaysIn value
     * @return string|null
     */
    public function getDaysIn()
    {
        return $this->DaysIn;
    }
    /**
     * Set DaysIn value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightDaysEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightDaysEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $daysIn
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseWeekdaySurcharge
     */
    public function setDaysIn($daysIn = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightDaysEnum::valueIsValid($daysIn)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $daysIn, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightDaysEnum::getValidValues())), __LINE__);
        }
        $this->DaysIn = $daysIn;
        return $this;
    }
    /**
     * Get DaysOut value
     * @return string|null
     */
    public function getDaysOut()
    {
        return $this->DaysOut;
    }
    /**
     * Set DaysOut value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightDaysEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightDaysEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $daysOut
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseWeekdaySurcharge
     */
    public function setDaysOut($daysOut = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightDaysEnum::valueIsValid($daysOut)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $daysOut, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FlightDaysEnum::getValidValues())), __LINE__);
        }
        $this->DaysOut = $daysOut;
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseWeekdaySurcharge
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseWeekdaySurcharge
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseWeekdaySurcharge
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseWeekdaySurcharge
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseWeekdaySurcharge
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
