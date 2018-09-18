<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookResponseSurcharges StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BookResponseSurcharges
 * @subpackage Structs
 */
class BookResponseSurcharges extends AbstractStructBase
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
     * The EquivalentHandBaggageSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentHandBaggageSurcharge;
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
     * The EquivalentSMSSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentSMSSurcharge;
    /**
     * The EquivalentSeatSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentSeatSurcharge;
    /**
     * The HandBaggageSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $HandBaggageSurcharge;
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
     * The SMSSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $SMSSurcharge;
    /**
     * The SeatSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $SeatSurcharge;
    /**
     * Constructor method for BookResponseSurcharges
     * @uses BookResponseSurcharges::setBaggageSurcharge()
     * @uses BookResponseSurcharges::setBookingSurcharge()
     * @uses BookResponseSurcharges::setCheckInSurcharge()
     * @uses BookResponseSurcharges::setEquivalentBaggageSurcharge()
     * @uses BookResponseSurcharges::setEquivalentBookingSurcharge()
     * @uses BookResponseSurcharges::setEquivalentCheckInSurcharge()
     * @uses BookResponseSurcharges::setEquivalentHandBaggageSurcharge()
     * @uses BookResponseSurcharges::setEquivalentPaymentSurcharge()
     * @uses BookResponseSurcharges::setEquivalentPrioritySurcharge()
     * @uses BookResponseSurcharges::setEquivalentSMSSurcharge()
     * @uses BookResponseSurcharges::setEquivalentSeatSurcharge()
     * @uses BookResponseSurcharges::setHandBaggageSurcharge()
     * @uses BookResponseSurcharges::setPaymentSurcharge()
     * @uses BookResponseSurcharges::setPrioritySurcharge()
     * @uses BookResponseSurcharges::setSMSSurcharge()
     * @uses BookResponseSurcharges::setSeatSurcharge()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $baggageSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $bookingSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $checkInSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBaggageSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBookingSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentCheckInSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentHandBaggageSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPaymentSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPrioritySurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentSMSSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentSeatSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $handBaggageSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $paymentSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $prioritySurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $sMSSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $seatSurcharge
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $baggageSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $bookingSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $checkInSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBaggageSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBookingSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentCheckInSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentHandBaggageSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPaymentSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPrioritySurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentSMSSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentSeatSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $handBaggageSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $paymentSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $prioritySurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $sMSSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $seatSurcharge = null)
    {
        $this
            ->setBaggageSurcharge($baggageSurcharge)
            ->setBookingSurcharge($bookingSurcharge)
            ->setCheckInSurcharge($checkInSurcharge)
            ->setEquivalentBaggageSurcharge($equivalentBaggageSurcharge)
            ->setEquivalentBookingSurcharge($equivalentBookingSurcharge)
            ->setEquivalentCheckInSurcharge($equivalentCheckInSurcharge)
            ->setEquivalentHandBaggageSurcharge($equivalentHandBaggageSurcharge)
            ->setEquivalentPaymentSurcharge($equivalentPaymentSurcharge)
            ->setEquivalentPrioritySurcharge($equivalentPrioritySurcharge)
            ->setEquivalentSMSSurcharge($equivalentSMSSurcharge)
            ->setEquivalentSeatSurcharge($equivalentSeatSurcharge)
            ->setHandBaggageSurcharge($handBaggageSurcharge)
            ->setPaymentSurcharge($paymentSurcharge)
            ->setPrioritySurcharge($prioritySurcharge)
            ->setSMSSurcharge($sMSSurcharge)
            ->setSeatSurcharge($seatSurcharge);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
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
     * Get EquivalentHandBaggageSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentHandBaggageSurcharge()
    {
        return isset($this->EquivalentHandBaggageSurcharge) ? $this->EquivalentHandBaggageSurcharge : null;
    }
    /**
     * Set EquivalentHandBaggageSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentHandBaggageSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
     */
    public function setEquivalentHandBaggageSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentHandBaggageSurcharge = null)
    {
        if (is_null($equivalentHandBaggageSurcharge) || (is_array($equivalentHandBaggageSurcharge) && empty($equivalentHandBaggageSurcharge))) {
            unset($this->EquivalentHandBaggageSurcharge);
        } else {
            $this->EquivalentHandBaggageSurcharge = $equivalentHandBaggageSurcharge;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
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
     * Get EquivalentSMSSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentSMSSurcharge()
    {
        return isset($this->EquivalentSMSSurcharge) ? $this->EquivalentSMSSurcharge : null;
    }
    /**
     * Set EquivalentSMSSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentSMSSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
     */
    public function setEquivalentSMSSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentSMSSurcharge = null)
    {
        if (is_null($equivalentSMSSurcharge) || (is_array($equivalentSMSSurcharge) && empty($equivalentSMSSurcharge))) {
            unset($this->EquivalentSMSSurcharge);
        } else {
            $this->EquivalentSMSSurcharge = $equivalentSMSSurcharge;
        }
        return $this;
    }
    /**
     * Get EquivalentSeatSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentSeatSurcharge()
    {
        return isset($this->EquivalentSeatSurcharge) ? $this->EquivalentSeatSurcharge : null;
    }
    /**
     * Set EquivalentSeatSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentSeatSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
     */
    public function setEquivalentSeatSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentSeatSurcharge = null)
    {
        if (is_null($equivalentSeatSurcharge) || (is_array($equivalentSeatSurcharge) && empty($equivalentSeatSurcharge))) {
            unset($this->EquivalentSeatSurcharge);
        } else {
            $this->EquivalentSeatSurcharge = $equivalentSeatSurcharge;
        }
        return $this;
    }
    /**
     * Get HandBaggageSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getHandBaggageSurcharge()
    {
        return isset($this->HandBaggageSurcharge) ? $this->HandBaggageSurcharge : null;
    }
    /**
     * Set HandBaggageSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $handBaggageSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
     */
    public function setHandBaggageSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $handBaggageSurcharge = null)
    {
        if (is_null($handBaggageSurcharge) || (is_array($handBaggageSurcharge) && empty($handBaggageSurcharge))) {
            unset($this->HandBaggageSurcharge);
        } else {
            $this->HandBaggageSurcharge = $handBaggageSurcharge;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
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
     * Get SMSSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getSMSSurcharge()
    {
        return isset($this->SMSSurcharge) ? $this->SMSSurcharge : null;
    }
    /**
     * Set SMSSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $sMSSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
     */
    public function setSMSSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $sMSSurcharge = null)
    {
        if (is_null($sMSSurcharge) || (is_array($sMSSurcharge) && empty($sMSSurcharge))) {
            unset($this->SMSSurcharge);
        } else {
            $this->SMSSurcharge = $sMSSurcharge;
        }
        return $this;
    }
    /**
     * Get SeatSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getSeatSurcharge()
    {
        return isset($this->SeatSurcharge) ? $this->SeatSurcharge : null;
    }
    /**
     * Set SeatSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $seatSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
     */
    public function setSeatSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $seatSurcharge = null)
    {
        if (is_null($seatSurcharge) || (is_array($seatSurcharge) && empty($seatSurcharge))) {
            unset($this->SeatSurcharge);
        } else {
            $this->SeatSurcharge = $seatSurcharge;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSurcharges
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
