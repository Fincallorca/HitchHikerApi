<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRResponseFareDetails StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PNRResponseFareDetails
 * @subpackage Structs
 */
class PNRResponseFareDetails extends AbstractStructBase
{
    /**
     * The BaseFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $BaseFare;
    /**
     * The EquivalentBaseFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentBaseFare;
    /**
     * The FareCalculation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareCalculation;
    /**
     * The GrandTotal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $GrandTotal;
    /**
     * The TotalAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $TotalAmount;
    /**
     * The TotalFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $TotalFee;
    /**
     * The TotalTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $TotalTax;
    /**
     * Constructor method for PNRResponseFareDetails
     * @uses PNRResponseFareDetails::setBaseFare()
     * @uses PNRResponseFareDetails::setEquivalentBaseFare()
     * @uses PNRResponseFareDetails::setFareCalculation()
     * @uses PNRResponseFareDetails::setGrandTotal()
     * @uses PNRResponseFareDetails::setTotalAmount()
     * @uses PNRResponseFareDetails::setTotalFee()
     * @uses PNRResponseFareDetails::setTotalTax()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $baseFare
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBaseFare
     * @param string $fareCalculation
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $grandTotal
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalAmount
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalFee
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $baseFare = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBaseFare = null, $fareCalculation = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $grandTotal = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalAmount = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalFee = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax = null)
    {
        $this
            ->setBaseFare($baseFare)
            ->setEquivalentBaseFare($equivalentBaseFare)
            ->setFareCalculation($fareCalculation)
            ->setGrandTotal($grandTotal)
            ->setTotalAmount($totalAmount)
            ->setTotalFee($totalFee)
            ->setTotalTax($totalTax);
    }
    /**
     * Get BaseFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getBaseFare()
    {
        return isset($this->BaseFare) ? $this->BaseFare : null;
    }
    /**
     * Set BaseFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $baseFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseFareDetails
     */
    public function setBaseFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $baseFare = null)
    {
        if (is_null($baseFare) || (is_array($baseFare) && empty($baseFare))) {
            unset($this->BaseFare);
        } else {
            $this->BaseFare = $baseFare;
        }
        return $this;
    }
    /**
     * Get EquivalentBaseFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentBaseFare()
    {
        return isset($this->EquivalentBaseFare) ? $this->EquivalentBaseFare : null;
    }
    /**
     * Set EquivalentBaseFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBaseFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseFareDetails
     */
    public function setEquivalentBaseFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBaseFare = null)
    {
        if (is_null($equivalentBaseFare) || (is_array($equivalentBaseFare) && empty($equivalentBaseFare))) {
            unset($this->EquivalentBaseFare);
        } else {
            $this->EquivalentBaseFare = $equivalentBaseFare;
        }
        return $this;
    }
    /**
     * Get FareCalculation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareCalculation()
    {
        return isset($this->FareCalculation) ? $this->FareCalculation : null;
    }
    /**
     * Set FareCalculation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareCalculation
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseFareDetails
     */
    public function setFareCalculation($fareCalculation = null)
    {
        // validation for constraint: string
        if (!is_null($fareCalculation) && !is_string($fareCalculation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareCalculation)), __LINE__);
        }
        if (is_null($fareCalculation) || (is_array($fareCalculation) && empty($fareCalculation))) {
            unset($this->FareCalculation);
        } else {
            $this->FareCalculation = $fareCalculation;
        }
        return $this;
    }
    /**
     * Get GrandTotal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getGrandTotal()
    {
        return isset($this->GrandTotal) ? $this->GrandTotal : null;
    }
    /**
     * Set GrandTotal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $grandTotal
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseFareDetails
     */
    public function setGrandTotal(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $grandTotal = null)
    {
        if (is_null($grandTotal) || (is_array($grandTotal) && empty($grandTotal))) {
            unset($this->GrandTotal);
        } else {
            $this->GrandTotal = $grandTotal;
        }
        return $this;
    }
    /**
     * Get TotalAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getTotalAmount()
    {
        return isset($this->TotalAmount) ? $this->TotalAmount : null;
    }
    /**
     * Set TotalAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalAmount
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseFareDetails
     */
    public function setTotalAmount(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalAmount = null)
    {
        if (is_null($totalAmount) || (is_array($totalAmount) && empty($totalAmount))) {
            unset($this->TotalAmount);
        } else {
            $this->TotalAmount = $totalAmount;
        }
        return $this;
    }
    /**
     * Get TotalFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getTotalFee()
    {
        return isset($this->TotalFee) ? $this->TotalFee : null;
    }
    /**
     * Set TotalFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalFee
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseFareDetails
     */
    public function setTotalFee(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalFee = null)
    {
        if (is_null($totalFee) || (is_array($totalFee) && empty($totalFee))) {
            unset($this->TotalFee);
        } else {
            $this->TotalFee = $totalFee;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseFareDetails
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseFareDetails
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
