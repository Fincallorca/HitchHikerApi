<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BoardingResponseDetail StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BoardingResponseDetail
 * @subpackage Structs
 */
class BoardingResponseDetail extends AbstractStructBase
{
    /**
     * The AllowSMSNotification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowSMSNotification;
    /**
     * The Baggages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseBaggageDetail
     */
    public $Baggages;
    /**
     * The CheckInFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public $CheckInFee;
    /**
     * The CheckInType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CheckInType;
    /**
     * The HandBaggageFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public $HandBaggageFee;
    /**
     * The LegIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LegIndex;
    /**
     * The SMSNotificationFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public $SMSNotificationFee;
    /**
     * The SameCheckinForAllPassenger
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SameCheckinForAllPassenger;
    /**
     * Constructor method for BoardingResponseDetail
     * @uses BoardingResponseDetail::setAllowSMSNotification()
     * @uses BoardingResponseDetail::setBaggages()
     * @uses BoardingResponseDetail::setCheckInFee()
     * @uses BoardingResponseDetail::setCheckInType()
     * @uses BoardingResponseDetail::setHandBaggageFee()
     * @uses BoardingResponseDetail::setLegIndex()
     * @uses BoardingResponseDetail::setSMSNotificationFee()
     * @uses BoardingResponseDetail::setSameCheckinForAllPassenger()
     * @param bool $allowSMSNotification
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseBaggageDetail $baggages
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $checkInFee
     * @param string $checkInType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $handBaggageFee
     * @param string $legIndex
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $sMSNotificationFee
     * @param bool $sameCheckinForAllPassenger
     */
    public function __construct($allowSMSNotification = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseBaggageDetail $baggages = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $checkInFee = null, $checkInType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $handBaggageFee = null, $legIndex = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $sMSNotificationFee = null, $sameCheckinForAllPassenger = null)
    {
        $this
            ->setAllowSMSNotification($allowSMSNotification)
            ->setBaggages($baggages)
            ->setCheckInFee($checkInFee)
            ->setCheckInType($checkInType)
            ->setHandBaggageFee($handBaggageFee)
            ->setLegIndex($legIndex)
            ->setSMSNotificationFee($sMSNotificationFee)
            ->setSameCheckinForAllPassenger($sameCheckinForAllPassenger);
    }
    /**
     * Get AllowSMSNotification value
     * @return bool|null
     */
    public function getAllowSMSNotification()
    {
        return $this->AllowSMSNotification;
    }
    /**
     * Set AllowSMSNotification value
     * @param bool $allowSMSNotification
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail
     */
    public function setAllowSMSNotification($allowSMSNotification = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowSMSNotification) && !is_bool($allowSMSNotification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowSMSNotification)), __LINE__);
        }
        $this->AllowSMSNotification = $allowSMSNotification;
        return $this;
    }
    /**
     * Get Baggages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseBaggageDetail|null
     */
    public function getBaggages()
    {
        return isset($this->Baggages) ? $this->Baggages : null;
    }
    /**
     * Set Baggages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseBaggageDetail $baggages
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail
     */
    public function setBaggages(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseBaggageDetail $baggages = null)
    {
        if (is_null($baggages) || (is_array($baggages) && empty($baggages))) {
            unset($this->Baggages);
        } else {
            $this->Baggages = $baggages;
        }
        return $this;
    }
    /**
     * Get CheckInFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData|null
     */
    public function getCheckInFee()
    {
        return isset($this->CheckInFee) ? $this->CheckInFee : null;
    }
    /**
     * Set CheckInFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $checkInFee
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail
     */
    public function setCheckInFee(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $checkInFee = null)
    {
        if (is_null($checkInFee) || (is_array($checkInFee) && empty($checkInFee))) {
            unset($this->CheckInFee);
        } else {
            $this->CheckInFee = $checkInFee;
        }
        return $this;
    }
    /**
     * Get CheckInType value
     * @return string|null
     */
    public function getCheckInType()
    {
        return $this->CheckInType;
    }
    /**
     * Set CheckInType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckInEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckInEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkInType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail
     */
    public function setCheckInType($checkInType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckInEnum::valueIsValid($checkInType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $checkInType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckInEnum::getValidValues())), __LINE__);
        }
        $this->CheckInType = $checkInType;
        return $this;
    }
    /**
     * Get HandBaggageFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData|null
     */
    public function getHandBaggageFee()
    {
        return isset($this->HandBaggageFee) ? $this->HandBaggageFee : null;
    }
    /**
     * Set HandBaggageFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $handBaggageFee
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail
     */
    public function setHandBaggageFee(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $handBaggageFee = null)
    {
        if (is_null($handBaggageFee) || (is_array($handBaggageFee) && empty($handBaggageFee))) {
            unset($this->HandBaggageFee);
        } else {
            $this->HandBaggageFee = $handBaggageFee;
        }
        return $this;
    }
    /**
     * Get LegIndex value
     * @return string|null
     */
    public function getLegIndex()
    {
        return $this->LegIndex;
    }
    /**
     * Set LegIndex value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\LegIndexEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\LegIndexEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $legIndex
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail
     */
    public function setLegIndex($legIndex = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\LegIndexEnum::valueIsValid($legIndex)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $legIndex, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\LegIndexEnum::getValidValues())), __LINE__);
        }
        $this->LegIndex = $legIndex;
        return $this;
    }
    /**
     * Get SMSNotificationFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData|null
     */
    public function getSMSNotificationFee()
    {
        return isset($this->SMSNotificationFee) ? $this->SMSNotificationFee : null;
    }
    /**
     * Set SMSNotificationFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $sMSNotificationFee
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail
     */
    public function setSMSNotificationFee(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $sMSNotificationFee = null)
    {
        if (is_null($sMSNotificationFee) || (is_array($sMSNotificationFee) && empty($sMSNotificationFee))) {
            unset($this->SMSNotificationFee);
        } else {
            $this->SMSNotificationFee = $sMSNotificationFee;
        }
        return $this;
    }
    /**
     * Get SameCheckinForAllPassenger value
     * @return bool|null
     */
    public function getSameCheckinForAllPassenger()
    {
        return $this->SameCheckinForAllPassenger;
    }
    /**
     * Set SameCheckinForAllPassenger value
     * @param bool $sameCheckinForAllPassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail
     */
    public function setSameCheckinForAllPassenger($sameCheckinForAllPassenger = null)
    {
        // validation for constraint: boolean
        if (!is_null($sameCheckinForAllPassenger) && !is_bool($sameCheckinForAllPassenger)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sameCheckinForAllPassenger)), __LINE__);
        }
        $this->SameCheckinForAllPassenger = $sameCheckinForAllPassenger;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail
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
