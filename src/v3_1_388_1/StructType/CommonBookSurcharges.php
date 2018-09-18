<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommonBookSurcharges StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CommonBookSurcharges
 * @subpackage Structs
 */
class CommonBookSurcharges extends AbstractStructBase
{
    /**
     * The BaggageSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $BaggageSurcharge;
    /**
     * The BookingSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $BookingSurcharge;
    /**
     * The CheckInSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $CheckInSurcharge;
    /**
     * The EquivalentBaggageSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentBaggageSurcharge;
    /**
     * The EquivalentBookingSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentBookingSurcharge;
    /**
     * The EquivalentCheckInSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentCheckInSurcharge;
    /**
     * The EquivalentPaymentSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentPaymentSurcharge;
    /**
     * The EquivalentPrioritySurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentPrioritySurcharge;
    /**
     * The PaymentSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $PaymentSurcharge;
    /**
     * The PrioritySurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $PrioritySurcharge;
    /**
     * Constructor method for CommonBookSurcharges
     * @uses CommonBookSurcharges::setBaggageSurcharge()
     * @uses CommonBookSurcharges::setBookingSurcharge()
     * @uses CommonBookSurcharges::setCheckInSurcharge()
     * @uses CommonBookSurcharges::setEquivalentBaggageSurcharge()
     * @uses CommonBookSurcharges::setEquivalentBookingSurcharge()
     * @uses CommonBookSurcharges::setEquivalentCheckInSurcharge()
     * @uses CommonBookSurcharges::setEquivalentPaymentSurcharge()
     * @uses CommonBookSurcharges::setEquivalentPrioritySurcharge()
     * @uses CommonBookSurcharges::setPaymentSurcharge()
     * @uses CommonBookSurcharges::setPrioritySurcharge()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $baggageSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $bookingSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $checkInSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBaggageSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBookingSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentCheckInSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPaymentSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPrioritySurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $paymentSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $prioritySurcharge
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $baggageSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $bookingSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $checkInSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBaggageSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBookingSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentCheckInSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPaymentSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPrioritySurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $paymentSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $prioritySurcharge = null)
    {
        $this
            ->setBaggageSurcharge($baggageSurcharge)
            ->setBookingSurcharge($bookingSurcharge)
            ->setCheckInSurcharge($checkInSurcharge)
            ->setEquivalentBaggageSurcharge($equivalentBaggageSurcharge)
            ->setEquivalentBookingSurcharge($equivalentBookingSurcharge)
            ->setEquivalentCheckInSurcharge($equivalentCheckInSurcharge)
            ->setEquivalentPaymentSurcharge($equivalentPaymentSurcharge)
            ->setEquivalentPrioritySurcharge($equivalentPrioritySurcharge)
            ->setPaymentSurcharge($paymentSurcharge)
            ->setPrioritySurcharge($prioritySurcharge);
    }
    /**
     * Get BaggageSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getBaggageSurcharge()
    {
        return isset($this->BaggageSurcharge) ? $this->BaggageSurcharge : null;
    }
    /**
     * Set BaggageSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $baggageSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonBookSurcharges
     */
    public function setBaggageSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $baggageSurcharge = null)
    {
        if (is_null($baggageSurcharge) || (is_array($baggageSurcharge) && empty($baggageSurcharge))) {
            unset($this->BaggageSurcharge);
        } else {
            $this->BaggageSurcharge = $baggageSurcharge;
        }
        return $this;
    }
    /**
     * Get BookingSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getBookingSurcharge()
    {
        return isset($this->BookingSurcharge) ? $this->BookingSurcharge : null;
    }
    /**
     * Set BookingSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $bookingSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonBookSurcharges
     */
    public function setBookingSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $bookingSurcharge = null)
    {
        if (is_null($bookingSurcharge) || (is_array($bookingSurcharge) && empty($bookingSurcharge))) {
            unset($this->BookingSurcharge);
        } else {
            $this->BookingSurcharge = $bookingSurcharge;
        }
        return $this;
    }
    /**
     * Get CheckInSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getCheckInSurcharge()
    {
        return isset($this->CheckInSurcharge) ? $this->CheckInSurcharge : null;
    }
    /**
     * Set CheckInSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $checkInSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonBookSurcharges
     */
    public function setCheckInSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $checkInSurcharge = null)
    {
        if (is_null($checkInSurcharge) || (is_array($checkInSurcharge) && empty($checkInSurcharge))) {
            unset($this->CheckInSurcharge);
        } else {
            $this->CheckInSurcharge = $checkInSurcharge;
        }
        return $this;
    }
    /**
     * Get EquivalentBaggageSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentBaggageSurcharge()
    {
        return isset($this->EquivalentBaggageSurcharge) ? $this->EquivalentBaggageSurcharge : null;
    }
    /**
     * Set EquivalentBaggageSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBaggageSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonBookSurcharges
     */
    public function setEquivalentBaggageSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBaggageSurcharge = null)
    {
        if (is_null($equivalentBaggageSurcharge) || (is_array($equivalentBaggageSurcharge) && empty($equivalentBaggageSurcharge))) {
            unset($this->EquivalentBaggageSurcharge);
        } else {
            $this->EquivalentBaggageSurcharge = $equivalentBaggageSurcharge;
        }
        return $this;
    }
    /**
     * Get EquivalentBookingSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentBookingSurcharge()
    {
        return isset($this->EquivalentBookingSurcharge) ? $this->EquivalentBookingSurcharge : null;
    }
    /**
     * Set EquivalentBookingSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBookingSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonBookSurcharges
     */
    public function setEquivalentBookingSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBookingSurcharge = null)
    {
        if (is_null($equivalentBookingSurcharge) || (is_array($equivalentBookingSurcharge) && empty($equivalentBookingSurcharge))) {
            unset($this->EquivalentBookingSurcharge);
        } else {
            $this->EquivalentBookingSurcharge = $equivalentBookingSurcharge;
        }
        return $this;
    }
    /**
     * Get EquivalentCheckInSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentCheckInSurcharge()
    {
        return isset($this->EquivalentCheckInSurcharge) ? $this->EquivalentCheckInSurcharge : null;
    }
    /**
     * Set EquivalentCheckInSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentCheckInSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonBookSurcharges
     */
    public function setEquivalentCheckInSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentCheckInSurcharge = null)
    {
        if (is_null($equivalentCheckInSurcharge) || (is_array($equivalentCheckInSurcharge) && empty($equivalentCheckInSurcharge))) {
            unset($this->EquivalentCheckInSurcharge);
        } else {
            $this->EquivalentCheckInSurcharge = $equivalentCheckInSurcharge;
        }
        return $this;
    }
    /**
     * Get EquivalentPaymentSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentPaymentSurcharge()
    {
        return isset($this->EquivalentPaymentSurcharge) ? $this->EquivalentPaymentSurcharge : null;
    }
    /**
     * Set EquivalentPaymentSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPaymentSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonBookSurcharges
     */
    public function setEquivalentPaymentSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPaymentSurcharge = null)
    {
        if (is_null($equivalentPaymentSurcharge) || (is_array($equivalentPaymentSurcharge) && empty($equivalentPaymentSurcharge))) {
            unset($this->EquivalentPaymentSurcharge);
        } else {
            $this->EquivalentPaymentSurcharge = $equivalentPaymentSurcharge;
        }
        return $this;
    }
    /**
     * Get EquivalentPrioritySurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentPrioritySurcharge()
    {
        return isset($this->EquivalentPrioritySurcharge) ? $this->EquivalentPrioritySurcharge : null;
    }
    /**
     * Set EquivalentPrioritySurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPrioritySurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonBookSurcharges
     */
    public function setEquivalentPrioritySurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPrioritySurcharge = null)
    {
        if (is_null($equivalentPrioritySurcharge) || (is_array($equivalentPrioritySurcharge) && empty($equivalentPrioritySurcharge))) {
            unset($this->EquivalentPrioritySurcharge);
        } else {
            $this->EquivalentPrioritySurcharge = $equivalentPrioritySurcharge;
        }
        return $this;
    }
    /**
     * Get PaymentSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getPaymentSurcharge()
    {
        return isset($this->PaymentSurcharge) ? $this->PaymentSurcharge : null;
    }
    /**
     * Set PaymentSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $paymentSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonBookSurcharges
     */
    public function setPaymentSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $paymentSurcharge = null)
    {
        if (is_null($paymentSurcharge) || (is_array($paymentSurcharge) && empty($paymentSurcharge))) {
            unset($this->PaymentSurcharge);
        } else {
            $this->PaymentSurcharge = $paymentSurcharge;
        }
        return $this;
    }
    /**
     * Get PrioritySurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getPrioritySurcharge()
    {
        return isset($this->PrioritySurcharge) ? $this->PrioritySurcharge : null;
    }
    /**
     * Set PrioritySurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $prioritySurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonBookSurcharges
     */
    public function setPrioritySurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $prioritySurcharge = null)
    {
        if (is_null($prioritySurcharge) || (is_array($prioritySurcharge) && empty($prioritySurcharge))) {
            unset($this->PrioritySurcharge);
        } else {
            $this->PrioritySurcharge = $prioritySurcharge;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonBookSurcharges
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
