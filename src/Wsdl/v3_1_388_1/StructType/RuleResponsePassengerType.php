<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleResponsePassengerType StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RuleResponsePassengerType
 * @subpackage Structs
 */
class RuleResponsePassengerType extends AbstractStructBase
{
    /**
     * The EquivNetSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivNetSurcharge;
    /**
     * The EquivSellSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivSellSurcharge;
    /**
     * The NetSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $NetSurcharge;
    /**
     * The PassengerTypeCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PassengerTypeCode;
    /**
     * The SellSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $SellSurcharge;
    /**
     * Constructor method for RuleResponsePassengerType
     * @uses RuleResponsePassengerType::setEquivNetSurcharge()
     * @uses RuleResponsePassengerType::setEquivSellSurcharge()
     * @uses RuleResponsePassengerType::setNetSurcharge()
     * @uses RuleResponsePassengerType::setPassengerTypeCode()
     * @uses RuleResponsePassengerType::setSellSurcharge()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivNetSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivSellSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $netSurcharge
     * @param string $passengerTypeCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $sellSurcharge
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivNetSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivSellSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $netSurcharge = null, $passengerTypeCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $sellSurcharge = null)
    {
        $this
            ->setEquivNetSurcharge($equivNetSurcharge)
            ->setEquivSellSurcharge($equivSellSurcharge)
            ->setNetSurcharge($netSurcharge)
            ->setPassengerTypeCode($passengerTypeCode)
            ->setSellSurcharge($sellSurcharge);
    }
    /**
     * Get EquivNetSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivNetSurcharge()
    {
        return isset($this->EquivNetSurcharge) ? $this->EquivNetSurcharge : null;
    }
    /**
     * Set EquivNetSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivNetSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType
     */
    public function setEquivNetSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivNetSurcharge = null)
    {
        if (is_null($equivNetSurcharge) || (is_array($equivNetSurcharge) && empty($equivNetSurcharge))) {
            unset($this->EquivNetSurcharge);
        } else {
            $this->EquivNetSurcharge = $equivNetSurcharge;
        }
        return $this;
    }
    /**
     * Get EquivSellSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivSellSurcharge()
    {
        return isset($this->EquivSellSurcharge) ? $this->EquivSellSurcharge : null;
    }
    /**
     * Set EquivSellSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivSellSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType
     */
    public function setEquivSellSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivSellSurcharge = null)
    {
        if (is_null($equivSellSurcharge) || (is_array($equivSellSurcharge) && empty($equivSellSurcharge))) {
            unset($this->EquivSellSurcharge);
        } else {
            $this->EquivSellSurcharge = $equivSellSurcharge;
        }
        return $this;
    }
    /**
     * Get NetSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getNetSurcharge()
    {
        return isset($this->NetSurcharge) ? $this->NetSurcharge : null;
    }
    /**
     * Set NetSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $netSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType
     */
    public function setNetSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $netSurcharge = null)
    {
        if (is_null($netSurcharge) || (is_array($netSurcharge) && empty($netSurcharge))) {
            unset($this->NetSurcharge);
        } else {
            $this->NetSurcharge = $netSurcharge;
        }
        return $this;
    }
    /**
     * Get PassengerTypeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassengerTypeCode()
    {
        return isset($this->PassengerTypeCode) ? $this->PassengerTypeCode : null;
    }
    /**
     * Set PassengerTypeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passengerTypeCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType
     */
    public function setPassengerTypeCode($passengerTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($passengerTypeCode) && !is_string($passengerTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerTypeCode)), __LINE__);
        }
        if (is_null($passengerTypeCode) || (is_array($passengerTypeCode) && empty($passengerTypeCode))) {
            unset($this->PassengerTypeCode);
        } else {
            $this->PassengerTypeCode = $passengerTypeCode;
        }
        return $this;
    }
    /**
     * Get SellSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getSellSurcharge()
    {
        return isset($this->SellSurcharge) ? $this->SellSurcharge : null;
    }
    /**
     * Set SellSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $sellSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType
     */
    public function setSellSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $sellSurcharge = null)
    {
        if (is_null($sellSurcharge) || (is_array($sellSurcharge) && empty($sellSurcharge))) {
            unset($this->SellSurcharge);
        } else {
            $this->SellSurcharge = $sellSurcharge;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponsePassengerType
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
