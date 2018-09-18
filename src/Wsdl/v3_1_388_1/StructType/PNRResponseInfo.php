<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRResponseInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PNRResponseInfo
 * @subpackage Structs
 */
class PNRResponseInfo extends AbstractStructBase
{
    /**
     * The BookingStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BookingStatus;
    /**
     * The CRS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CRS;
    /**
     * The CreatedDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreatedDate;
    /**
     * The PassengerNameRecordType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerNameRecordType;
    /**
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RecordLocator;
    /**
     * The Session
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Session;
    /**
     * The UnknownPNRType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UnknownPNRType;
    /**
     * Constructor method for PNRResponseInfo
     * @uses PNRResponseInfo::setBookingStatus()
     * @uses PNRResponseInfo::setCRS()
     * @uses PNRResponseInfo::setCreatedDate()
     * @uses PNRResponseInfo::setPassengerNameRecordType()
     * @uses PNRResponseInfo::setRecordLocator()
     * @uses PNRResponseInfo::setSession()
     * @uses PNRResponseInfo::setUnknownPNRType()
     * @param string $bookingStatus
     * @param string $cRS
     * @param string $createdDate
     * @param string $passengerNameRecordType
     * @param string $recordLocator
     * @param string $session
     * @param string $unknownPNRType
     */
    public function __construct($bookingStatus = null, $cRS = null, $createdDate = null, $passengerNameRecordType = null, $recordLocator = null, $session = null, $unknownPNRType = null)
    {
        $this
            ->setBookingStatus($bookingStatus)
            ->setCRS($cRS)
            ->setCreatedDate($createdDate)
            ->setPassengerNameRecordType($passengerNameRecordType)
            ->setRecordLocator($recordLocator)
            ->setSession($session)
            ->setUnknownPNRType($unknownPNRType);
    }
    /**
     * Get BookingStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBookingStatus()
    {
        return isset($this->BookingStatus) ? $this->BookingStatus : null;
    }
    /**
     * Set BookingStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $bookingStatus
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo
     */
    public function setBookingStatus($bookingStatus = null)
    {
        // validation for constraint: string
        if (!is_null($bookingStatus) && !is_string($bookingStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingStatus)), __LINE__);
        }
        if (is_null($bookingStatus) || (is_array($bookingStatus) && empty($bookingStatus))) {
            unset($this->BookingStatus);
        } else {
            $this->BookingStatus = $bookingStatus;
        }
        return $this;
    }
    /**
     * Get CRS value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCRS()
    {
        return isset($this->CRS) ? $this->CRS : null;
    }
    /**
     * Set CRS value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cRS
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo
     */
    public function setCRS($cRS = null)
    {
        // validation for constraint: string
        if (!is_null($cRS) && !is_string($cRS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cRS)), __LINE__);
        }
        if (is_null($cRS) || (is_array($cRS) && empty($cRS))) {
            unset($this->CRS);
        } else {
            $this->CRS = $cRS;
        }
        return $this;
    }
    /**
     * Get CreatedDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreatedDate()
    {
        return isset($this->CreatedDate) ? $this->CreatedDate : null;
    }
    /**
     * Set CreatedDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $createdDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo
     */
    public function setCreatedDate($createdDate = null)
    {
        // validation for constraint: string
        if (!is_null($createdDate) && !is_string($createdDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createdDate)), __LINE__);
        }
        if (is_null($createdDate) || (is_array($createdDate) && empty($createdDate))) {
            unset($this->CreatedDate);
        } else {
            $this->CreatedDate = $createdDate;
        }
        return $this;
    }
    /**
     * Get PassengerNameRecordType value
     * @return string|null
     */
    public function getPassengerNameRecordType()
    {
        return $this->PassengerNameRecordType;
    }
    /**
     * Set PassengerNameRecordType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PnrTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PnrTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $passengerNameRecordType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo
     */
    public function setPassengerNameRecordType($passengerNameRecordType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PnrTypeEnum::valueIsValid($passengerNameRecordType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $passengerNameRecordType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PnrTypeEnum::getValidValues())), __LINE__);
        }
        $this->PassengerNameRecordType = $passengerNameRecordType;
        return $this;
    }
    /**
     * Get RecordLocator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecordLocator()
    {
        return isset($this->RecordLocator) ? $this->RecordLocator : null;
    }
    /**
     * Set RecordLocator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recordLocator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo
     */
    public function setRecordLocator($recordLocator = null)
    {
        // validation for constraint: string
        if (!is_null($recordLocator) && !is_string($recordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordLocator)), __LINE__);
        }
        if (is_null($recordLocator) || (is_array($recordLocator) && empty($recordLocator))) {
            unset($this->RecordLocator);
        } else {
            $this->RecordLocator = $recordLocator;
        }
        return $this;
    }
    /**
     * Get Session value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSession()
    {
        return isset($this->Session) ? $this->Session : null;
    }
    /**
     * Set Session value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $session
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        if (is_null($session) || (is_array($session) && empty($session))) {
            unset($this->Session);
        } else {
            $this->Session = $session;
        }
        return $this;
    }
    /**
     * Get UnknownPNRType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUnknownPNRType()
    {
        return isset($this->UnknownPNRType) ? $this->UnknownPNRType : null;
    }
    /**
     * Set UnknownPNRType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $unknownPNRType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo
     */
    public function setUnknownPNRType($unknownPNRType = null)
    {
        // validation for constraint: string
        if (!is_null($unknownPNRType) && !is_string($unknownPNRType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unknownPNRType)), __LINE__);
        }
        if (is_null($unknownPNRType) || (is_array($unknownPNRType) && empty($unknownPNRType))) {
            unset($this->UnknownPNRType);
        } else {
            $this->UnknownPNRType = $unknownPNRType;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo
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
