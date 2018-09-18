<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Cancelation StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Cancelation
 * @subpackage Structs
 */
class Cancelation extends AbstractStructBase
{
    /**
     * The Buy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaxValues
     */
    public $Buy;
    /**
     * The Carrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Carrier;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Currency;
    /**
     * The DaysBeforeDeparture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DaysBeforeDeparture;
    /**
     * The Direction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Direction;
    /**
     * The Sell
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaxValues
     */
    public $Sell;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * Constructor method for Cancelation
     * @uses Cancelation::setBuy()
     * @uses Cancelation::setCarrier()
     * @uses Cancelation::setCurrency()
     * @uses Cancelation::setDaysBeforeDeparture()
     * @uses Cancelation::setDirection()
     * @uses Cancelation::setSell()
     * @uses Cancelation::setType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaxValues $buy
     * @param string $carrier
     * @param string $currency
     * @param int $daysBeforeDeparture
     * @param string $direction
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaxValues $sell
     * @param string $type
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaxValues $buy = null, $carrier = null, $currency = null, $daysBeforeDeparture = null, $direction = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaxValues $sell = null, $type = null)
    {
        $this
            ->setBuy($buy)
            ->setCarrier($carrier)
            ->setCurrency($currency)
            ->setDaysBeforeDeparture($daysBeforeDeparture)
            ->setDirection($direction)
            ->setSell($sell)
            ->setType($type);
    }
    /**
     * Get Buy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaxValues|null
     */
    public function getBuy()
    {
        return isset($this->Buy) ? $this->Buy : null;
    }
    /**
     * Set Buy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaxValues $buy
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation
     */
    public function setBuy(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaxValues $buy = null)
    {
        if (is_null($buy) || (is_array($buy) && empty($buy))) {
            unset($this->Buy);
        } else {
            $this->Buy = $buy;
        }
        return $this;
    }
    /**
     * Get Carrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCarrier()
    {
        return isset($this->Carrier) ? $this->Carrier : null;
    }
    /**
     * Set Carrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $carrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation
     */
    public function setCarrier($carrier = null)
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrier)), __LINE__);
        }
        if (is_null($carrier) || (is_array($carrier) && empty($carrier))) {
            unset($this->Carrier);
        } else {
            $this->Carrier = $carrier;
        }
        return $this;
    }
    /**
     * Get Currency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCurrency()
    {
        return isset($this->Currency) ? $this->Currency : null;
    }
    /**
     * Set Currency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $currency
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        if (is_null($currency) || (is_array($currency) && empty($currency))) {
            unset($this->Currency);
        } else {
            $this->Currency = $currency;
        }
        return $this;
    }
    /**
     * Get DaysBeforeDeparture value
     * @return int|null
     */
    public function getDaysBeforeDeparture()
    {
        return $this->DaysBeforeDeparture;
    }
    /**
     * Set DaysBeforeDeparture value
     * @param int $daysBeforeDeparture
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation
     */
    public function setDaysBeforeDeparture($daysBeforeDeparture = null)
    {
        // validation for constraint: int
        if (!is_null($daysBeforeDeparture) && !is_numeric($daysBeforeDeparture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($daysBeforeDeparture)), __LINE__);
        }
        $this->DaysBeforeDeparture = $daysBeforeDeparture;
        return $this;
    }
    /**
     * Get Direction value
     * @return string|null
     */
    public function getDirection()
    {
        return $this->Direction;
    }
    /**
     * Set Direction value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CancelationDirection::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CancelationDirection::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $direction
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation
     */
    public function setDirection($direction = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CancelationDirection::valueIsValid($direction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $direction, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CancelationDirection::getValidValues())), __LINE__);
        }
        $this->Direction = $direction;
        return $this;
    }
    /**
     * Get Sell value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaxValues|null
     */
    public function getSell()
    {
        return isset($this->Sell) ? $this->Sell : null;
    }
    /**
     * Set Sell value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaxValues $sell
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation
     */
    public function setSell(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaxValues $sell = null)
    {
        if (is_null($sell) || (is_array($sell) && empty($sell))) {
            unset($this->Sell);
        } else {
            $this->Sell = $sell;
        }
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CancelationType::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CancelationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CancelationType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CancelationType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Cancelation
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
