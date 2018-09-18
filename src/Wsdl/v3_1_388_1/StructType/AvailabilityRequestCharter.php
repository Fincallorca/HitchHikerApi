<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailabilityRequestCharter StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AvailabilityRequestCharter
 * @subpackage Structs
 */
class AvailabilityRequestCharter extends AbstractStructBase
{
    /**
     * The Account
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount
     */
    public $Account;
    /**
     * The FareType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareType;
    /**
     * The IsLiveBooking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsLiveBooking;
    /**
     * The TouroperatorCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TouroperatorCode;
    /**
     * Constructor method for AvailabilityRequestCharter
     * @uses AvailabilityRequestCharter::setAccount()
     * @uses AvailabilityRequestCharter::setFareType()
     * @uses AvailabilityRequestCharter::setIsLiveBooking()
     * @uses AvailabilityRequestCharter::setTouroperatorCode()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount $account
     * @param string $fareType
     * @param bool $isLiveBooking
     * @param string $touroperatorCode
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount $account = null, $fareType = null, $isLiveBooking = null, $touroperatorCode = null)
    {
        $this
            ->setAccount($account)
            ->setFareType($fareType)
            ->setIsLiveBooking($isLiveBooking)
            ->setTouroperatorCode($touroperatorCode);
    }
    /**
     * Get Account value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount|null
     */
    public function getAccount()
    {
        return $this->Account;
    }
    /**
     * Set Account value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount $account
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestCharter
     */
    public function setAccount(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterAccount $account = null)
    {
        $this->Account = $account;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestCharter
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
     * Get IsLiveBooking value
     * @return bool|null
     */
    public function getIsLiveBooking()
    {
        return $this->IsLiveBooking;
    }
    /**
     * Set IsLiveBooking value
     * @param bool $isLiveBooking
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestCharter
     */
    public function setIsLiveBooking($isLiveBooking = null)
    {
        // validation for constraint: boolean
        if (!is_null($isLiveBooking) && !is_bool($isLiveBooking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isLiveBooking)), __LINE__);
        }
        $this->IsLiveBooking = $isLiveBooking;
        return $this;
    }
    /**
     * Get TouroperatorCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTouroperatorCode()
    {
        return isset($this->TouroperatorCode) ? $this->TouroperatorCode : null;
    }
    /**
     * Set TouroperatorCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $touroperatorCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestCharter
     */
    public function setTouroperatorCode($touroperatorCode = null)
    {
        // validation for constraint: string
        if (!is_null($touroperatorCode) && !is_string($touroperatorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($touroperatorCode)), __LINE__);
        }
        if (is_null($touroperatorCode) || (is_array($touroperatorCode) && empty($touroperatorCode))) {
            unset($this->TouroperatorCode);
        } else {
            $this->TouroperatorCode = $touroperatorCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestCharter
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
