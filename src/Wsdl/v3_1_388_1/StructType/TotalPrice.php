<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TotalPrice StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TotalPrice
 * @subpackage Structs
 */
class TotalPrice extends AbstractStructBase
{
    /**
     * The EquivalentTotalFlightPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentTotalFlightPrice;
    /**
     * The EquivalentTotalPassengerPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentTotalPassengerPrice;
    /**
     * The EquivalentTotalSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentTotalSurcharge;
    /**
     * The EquivalentTotalTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentTotalTax;
    /**
     * The TotalFlightPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $TotalFlightPrice;
    /**
     * The TotalPassengerPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $TotalPassengerPrice;
    /**
     * The TotalSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $TotalSurcharge;
    /**
     * The TotalTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $TotalTax;
    /**
     * Constructor method for TotalPrice
     * @uses TotalPrice::setEquivalentTotalFlightPrice()
     * @uses TotalPrice::setEquivalentTotalPassengerPrice()
     * @uses TotalPrice::setEquivalentTotalSurcharge()
     * @uses TotalPrice::setEquivalentTotalTax()
     * @uses TotalPrice::setTotalFlightPrice()
     * @uses TotalPrice::setTotalPassengerPrice()
     * @uses TotalPrice::setTotalSurcharge()
     * @uses TotalPrice::setTotalTax()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalFlightPrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalPassengerPrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTax
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalFlightPrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalPassengerPrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalFlightPrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalPassengerPrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTax = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalFlightPrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalPassengerPrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax = null)
    {
        $this
            ->setEquivalentTotalFlightPrice($equivalentTotalFlightPrice)
            ->setEquivalentTotalPassengerPrice($equivalentTotalPassengerPrice)
            ->setEquivalentTotalSurcharge($equivalentTotalSurcharge)
            ->setEquivalentTotalTax($equivalentTotalTax)
            ->setTotalFlightPrice($totalFlightPrice)
            ->setTotalPassengerPrice($totalPassengerPrice)
            ->setTotalSurcharge($totalSurcharge)
            ->setTotalTax($totalTax);
    }
    /**
     * Get EquivalentTotalFlightPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentTotalFlightPrice()
    {
        return isset($this->EquivalentTotalFlightPrice) ? $this->EquivalentTotalFlightPrice : null;
    }
    /**
     * Set EquivalentTotalFlightPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalFlightPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice
     */
    public function setEquivalentTotalFlightPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalFlightPrice = null)
    {
        if (is_null($equivalentTotalFlightPrice) || (is_array($equivalentTotalFlightPrice) && empty($equivalentTotalFlightPrice))) {
            unset($this->EquivalentTotalFlightPrice);
        } else {
            $this->EquivalentTotalFlightPrice = $equivalentTotalFlightPrice;
        }
        return $this;
    }
    /**
     * Get EquivalentTotalPassengerPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentTotalPassengerPrice()
    {
        return isset($this->EquivalentTotalPassengerPrice) ? $this->EquivalentTotalPassengerPrice : null;
    }
    /**
     * Set EquivalentTotalPassengerPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalPassengerPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice
     */
    public function setEquivalentTotalPassengerPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalPassengerPrice = null)
    {
        if (is_null($equivalentTotalPassengerPrice) || (is_array($equivalentTotalPassengerPrice) && empty($equivalentTotalPassengerPrice))) {
            unset($this->EquivalentTotalPassengerPrice);
        } else {
            $this->EquivalentTotalPassengerPrice = $equivalentTotalPassengerPrice;
        }
        return $this;
    }
    /**
     * Get EquivalentTotalSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentTotalSurcharge()
    {
        return isset($this->EquivalentTotalSurcharge) ? $this->EquivalentTotalSurcharge : null;
    }
    /**
     * Set EquivalentTotalSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice
     */
    public function setEquivalentTotalSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalSurcharge = null)
    {
        if (is_null($equivalentTotalSurcharge) || (is_array($equivalentTotalSurcharge) && empty($equivalentTotalSurcharge))) {
            unset($this->EquivalentTotalSurcharge);
        } else {
            $this->EquivalentTotalSurcharge = $equivalentTotalSurcharge;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice
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
     * Get TotalFlightPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getTotalFlightPrice()
    {
        return isset($this->TotalFlightPrice) ? $this->TotalFlightPrice : null;
    }
    /**
     * Set TotalFlightPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalFlightPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice
     */
    public function setTotalFlightPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalFlightPrice = null)
    {
        if (is_null($totalFlightPrice) || (is_array($totalFlightPrice) && empty($totalFlightPrice))) {
            unset($this->TotalFlightPrice);
        } else {
            $this->TotalFlightPrice = $totalFlightPrice;
        }
        return $this;
    }
    /**
     * Get TotalPassengerPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getTotalPassengerPrice()
    {
        return isset($this->TotalPassengerPrice) ? $this->TotalPassengerPrice : null;
    }
    /**
     * Set TotalPassengerPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalPassengerPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice
     */
    public function setTotalPassengerPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalPassengerPrice = null)
    {
        if (is_null($totalPassengerPrice) || (is_array($totalPassengerPrice) && empty($totalPassengerPrice))) {
            unset($this->TotalPassengerPrice);
        } else {
            $this->TotalPassengerPrice = $totalPassengerPrice;
        }
        return $this;
    }
    /**
     * Get TotalSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getTotalSurcharge()
    {
        return isset($this->TotalSurcharge) ? $this->TotalSurcharge : null;
    }
    /**
     * Set TotalSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice
     */
    public function setTotalSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalSurcharge = null)
    {
        if (is_null($totalSurcharge) || (is_array($totalSurcharge) && empty($totalSurcharge))) {
            unset($this->TotalSurcharge);
        } else {
            $this->TotalSurcharge = $totalSurcharge;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice
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
