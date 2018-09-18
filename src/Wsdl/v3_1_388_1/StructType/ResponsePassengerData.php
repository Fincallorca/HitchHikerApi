<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponsePassengerData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ResponsePassengerData
 * @subpackage Structs
 */
class ResponsePassengerData extends AbstractStructBase
{
    /**
     * The AirlineSell
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $AirlineSell;
    /**
     * The CalcType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CalcType;
    /**
     * The CalculationGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CalculationGroup;
    /**
     * The CalculationRule
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CalculationRule;
    /**
     * The EndconsumerBuy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EndconsumerBuy;
    /**
     * The EquivalentAirlineSell
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentAirlineSell;
    /**
     * The EquivalentEndconsumerBuy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentEndconsumerBuy;
    /**
     * The EquivalentServiceFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentServiceFee;
    /**
     * The EquivalentTotalTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentTotalTax;
    /**
     * The FareSubType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FareSubType;
    /**
     * The FareType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareType;
    /**
     * The HasServiceFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasServiceFee;
    /**
     * The PassengerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PassengerType;
    /**
     * The PassengerTypeName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerTypeName;
    /**
     * The ServiceFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $ServiceFee;
    /**
     * The TotalTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $TotalTax;
    /**
     * Constructor method for ResponsePassengerData
     * @uses ResponsePassengerData::setAirlineSell()
     * @uses ResponsePassengerData::setCalcType()
     * @uses ResponsePassengerData::setCalculationGroup()
     * @uses ResponsePassengerData::setCalculationRule()
     * @uses ResponsePassengerData::setEndconsumerBuy()
     * @uses ResponsePassengerData::setEquivalentAirlineSell()
     * @uses ResponsePassengerData::setEquivalentEndconsumerBuy()
     * @uses ResponsePassengerData::setEquivalentServiceFee()
     * @uses ResponsePassengerData::setEquivalentTotalTax()
     * @uses ResponsePassengerData::setFareSubType()
     * @uses ResponsePassengerData::setFareType()
     * @uses ResponsePassengerData::setHasServiceFee()
     * @uses ResponsePassengerData::setPassengerType()
     * @uses ResponsePassengerData::setPassengerTypeName()
     * @uses ResponsePassengerData::setServiceFee()
     * @uses ResponsePassengerData::setTotalTax()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $airlineSell
     * @param int $calcType
     * @param string $calculationGroup
     * @param string $calculationRule
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $endconsumerBuy
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAirlineSell
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentEndconsumerBuy
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentServiceFee
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTax
     * @param string $fareSubType
     * @param string $fareType
     * @param bool $hasServiceFee
     * @param string $passengerType
     * @param string $passengerTypeName
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $serviceFee
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $airlineSell = null, $calcType = null, $calculationGroup = null, $calculationRule = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $endconsumerBuy = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAirlineSell = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentEndconsumerBuy = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentServiceFee = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTax = null, $fareSubType = null, $fareType = null, $hasServiceFee = null, $passengerType = null, $passengerTypeName = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $serviceFee = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax = null)
    {
        $this
            ->setAirlineSell($airlineSell)
            ->setCalcType($calcType)
            ->setCalculationGroup($calculationGroup)
            ->setCalculationRule($calculationRule)
            ->setEndconsumerBuy($endconsumerBuy)
            ->setEquivalentAirlineSell($equivalentAirlineSell)
            ->setEquivalentEndconsumerBuy($equivalentEndconsumerBuy)
            ->setEquivalentServiceFee($equivalentServiceFee)
            ->setEquivalentTotalTax($equivalentTotalTax)
            ->setFareSubType($fareSubType)
            ->setFareType($fareType)
            ->setHasServiceFee($hasServiceFee)
            ->setPassengerType($passengerType)
            ->setPassengerTypeName($passengerTypeName)
            ->setServiceFee($serviceFee)
            ->setTotalTax($totalTax);
    }
    /**
     * Get AirlineSell value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getAirlineSell()
    {
        return isset($this->AirlineSell) ? $this->AirlineSell : null;
    }
    /**
     * Set AirlineSell value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $airlineSell
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponsePassengerData
     */
    public function setAirlineSell(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $airlineSell = null)
    {
        if (is_null($airlineSell) || (is_array($airlineSell) && empty($airlineSell))) {
            unset($this->AirlineSell);
        } else {
            $this->AirlineSell = $airlineSell;
        }
        return $this;
    }
    /**
     * Get CalcType value
     * @return int|null
     */
    public function getCalcType()
    {
        return $this->CalcType;
    }
    /**
     * Set CalcType value
     * @param int $calcType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponsePassengerData
     */
    public function setCalcType($calcType = null)
    {
        // validation for constraint: int
        if (!is_null($calcType) && !is_numeric($calcType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($calcType)), __LINE__);
        }
        $this->CalcType = $calcType;
        return $this;
    }
    /**
     * Get CalculationGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCalculationGroup()
    {
        return isset($this->CalculationGroup) ? $this->CalculationGroup : null;
    }
    /**
     * Set CalculationGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $calculationGroup
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponsePassengerData
     */
    public function setCalculationGroup($calculationGroup = null)
    {
        // validation for constraint: string
        if (!is_null($calculationGroup) && !is_string($calculationGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calculationGroup)), __LINE__);
        }
        if (is_null($calculationGroup) || (is_array($calculationGroup) && empty($calculationGroup))) {
            unset($this->CalculationGroup);
        } else {
            $this->CalculationGroup = $calculationGroup;
        }
        return $this;
    }
    /**
     * Get CalculationRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCalculationRule()
    {
        return isset($this->CalculationRule) ? $this->CalculationRule : null;
    }
    /**
     * Set CalculationRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $calculationRule
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponsePassengerData
     */
    public function setCalculationRule($calculationRule = null)
    {
        // validation for constraint: string
        if (!is_null($calculationRule) && !is_string($calculationRule)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calculationRule)), __LINE__);
        }
        if (is_null($calculationRule) || (is_array($calculationRule) && empty($calculationRule))) {
            unset($this->CalculationRule);
        } else {
            $this->CalculationRule = $calculationRule;
        }
        return $this;
    }
    /**
     * Get EndconsumerBuy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEndconsumerBuy()
    {
        return isset($this->EndconsumerBuy) ? $this->EndconsumerBuy : null;
    }
    /**
     * Set EndconsumerBuy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $endconsumerBuy
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponsePassengerData
     */
    public function setEndconsumerBuy(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $endconsumerBuy = null)
    {
        if (is_null($endconsumerBuy) || (is_array($endconsumerBuy) && empty($endconsumerBuy))) {
            unset($this->EndconsumerBuy);
        } else {
            $this->EndconsumerBuy = $endconsumerBuy;
        }
        return $this;
    }
    /**
     * Get EquivalentAirlineSell value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentAirlineSell()
    {
        return isset($this->EquivalentAirlineSell) ? $this->EquivalentAirlineSell : null;
    }
    /**
     * Set EquivalentAirlineSell value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAirlineSell
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponsePassengerData
     */
    public function setEquivalentAirlineSell(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAirlineSell = null)
    {
        if (is_null($equivalentAirlineSell) || (is_array($equivalentAirlineSell) && empty($equivalentAirlineSell))) {
            unset($this->EquivalentAirlineSell);
        } else {
            $this->EquivalentAirlineSell = $equivalentAirlineSell;
        }
        return $this;
    }
    /**
     * Get EquivalentEndconsumerBuy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentEndconsumerBuy()
    {
        return isset($this->EquivalentEndconsumerBuy) ? $this->EquivalentEndconsumerBuy : null;
    }
    /**
     * Set EquivalentEndconsumerBuy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentEndconsumerBuy
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponsePassengerData
     */
    public function setEquivalentEndconsumerBuy(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentEndconsumerBuy = null)
    {
        if (is_null($equivalentEndconsumerBuy) || (is_array($equivalentEndconsumerBuy) && empty($equivalentEndconsumerBuy))) {
            unset($this->EquivalentEndconsumerBuy);
        } else {
            $this->EquivalentEndconsumerBuy = $equivalentEndconsumerBuy;
        }
        return $this;
    }
    /**
     * Get EquivalentServiceFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentServiceFee()
    {
        return isset($this->EquivalentServiceFee) ? $this->EquivalentServiceFee : null;
    }
    /**
     * Set EquivalentServiceFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentServiceFee
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponsePassengerData
     */
    public function setEquivalentServiceFee(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentServiceFee = null)
    {
        if (is_null($equivalentServiceFee) || (is_array($equivalentServiceFee) && empty($equivalentServiceFee))) {
            unset($this->EquivalentServiceFee);
        } else {
            $this->EquivalentServiceFee = $equivalentServiceFee;
        }
        return $this;
    }
    /**
     * Get EquivalentTotalTax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentTotalTax()
    {
        return isset($this->EquivalentTotalTax) ? $this->EquivalentTotalTax : null;
    }
    /**
     * Set EquivalentTotalTax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTax
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponsePassengerData
     */
    public function setEquivalentTotalTax(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTax = null)
    {
        if (is_null($equivalentTotalTax) || (is_array($equivalentTotalTax) && empty($equivalentTotalTax))) {
            unset($this->EquivalentTotalTax);
        } else {
            $this->EquivalentTotalTax = $equivalentTotalTax;
        }
        return $this;
    }
    /**
     * Get FareSubType value
     * @return string|null
     */
    public function getFareSubType()
    {
        return $this->FareSubType;
    }
    /**
     * Set FareSubType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fareSubType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponsePassengerData
     */
    public function setFareSubType($fareSubType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::valueIsValid($fareSubType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fareSubType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::getValidValues())), __LINE__);
        }
        $this->FareSubType = $fareSubType;
        return $this;
    }
    /**
     * Get FareType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareType()
    {
        return isset($this->FareType) ? $this->FareType : null;
    }
    /**
     * Set FareType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponsePassengerData
     */
    public function setFareType($fareType = null)
    {
        // validation for constraint: string
        if (!is_null($fareType) && !is_string($fareType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareType)), __LINE__);
        }
        if (is_null($fareType) || (is_array($fareType) && empty($fareType))) {
            unset($this->FareType);
        } else {
            $this->FareType = $fareType;
        }
        return $this;
    }
    /**
     * Get HasServiceFee value
     * @return bool|null
     */
    public function getHasServiceFee()
    {
        return $this->HasServiceFee;
    }
    /**
     * Set HasServiceFee value
     * @param bool $hasServiceFee
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponsePassengerData
     */
    public function setHasServiceFee($hasServiceFee = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasServiceFee) && !is_bool($hasServiceFee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasServiceFee)), __LINE__);
        }
        $this->HasServiceFee = $hasServiceFee;
        return $this;
    }
    /**
     * Get PassengerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassengerType()
    {
        return isset($this->PassengerType) ? $this->PassengerType : null;
    }
    /**
     * Set PassengerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passengerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponsePassengerData
     */
    public function setPassengerType($passengerType = null)
    {
        // validation for constraint: string
        if (!is_null($passengerType) && !is_string($passengerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerType)), __LINE__);
        }
        if (is_null($passengerType) || (is_array($passengerType) && empty($passengerType))) {
            unset($this->PassengerType);
        } else {
            $this->PassengerType = $passengerType;
        }
        return $this;
    }
    /**
     * Get PassengerTypeName value
     * @return string|null
     */
    public function getPassengerTypeName()
    {
        return $this->PassengerTypeName;
    }
    /**
     * Set PassengerTypeName value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $passengerTypeName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponsePassengerData
     */
    public function setPassengerTypeName($passengerTypeName = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($passengerTypeName)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $passengerTypeName, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
        }
        $this->PassengerTypeName = $passengerTypeName;
        return $this;
    }
    /**
     * Get ServiceFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getServiceFee()
    {
        return isset($this->ServiceFee) ? $this->ServiceFee : null;
    }
    /**
     * Set ServiceFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $serviceFee
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponsePassengerData
     */
    public function setServiceFee(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $serviceFee = null)
    {
        if (is_null($serviceFee) || (is_array($serviceFee) && empty($serviceFee))) {
            unset($this->ServiceFee);
        } else {
            $this->ServiceFee = $serviceFee;
        }
        return $this;
    }
    /**
     * Get TotalTax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getTotalTax()
    {
        return isset($this->TotalTax) ? $this->TotalTax : null;
    }
    /**
     * Set TotalTax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponsePassengerData
     */
    public function setTotalTax(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax = null)
    {
        if (is_null($totalTax) || (is_array($totalTax) && empty($totalTax))) {
            unset($this->TotalTax);
        } else {
            $this->TotalTax = $totalTax;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponsePassengerData
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
