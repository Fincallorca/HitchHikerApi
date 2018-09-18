<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyRequestWebConfig StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyRequestWebConfig
 * @subpackage Structs
 */
class ModifyRequestWebConfig extends AbstractStructBase
{
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CarrierCode;
    /**
     * The ContactPerson
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public $ContactPerson;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CurrencyCode;
    /**
     * The DepartureDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DepartureDate;
    /**
     * The FirstNameOfPassenger
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FirstNameOfPassenger;
    /**
     * The LastNameOfPassenger
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastNameOfPassenger;
    /**
     * The WebAgent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent
     */
    public $WebAgent;
    /**
     * Constructor method for ModifyRequestWebConfig
     * @uses ModifyRequestWebConfig::setCarrierCode()
     * @uses ModifyRequestWebConfig::setContactPerson()
     * @uses ModifyRequestWebConfig::setCurrencyCode()
     * @uses ModifyRequestWebConfig::setDepartureDate()
     * @uses ModifyRequestWebConfig::setFirstNameOfPassenger()
     * @uses ModifyRequestWebConfig::setLastNameOfPassenger()
     * @uses ModifyRequestWebConfig::setWebAgent()
     * @param string $carrierCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $contactPerson
     * @param string $currencyCode
     * @param string $departureDate
     * @param string $firstNameOfPassenger
     * @param string $lastNameOfPassenger
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent
     */
    public function __construct($carrierCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $contactPerson = null, $currencyCode = null, $departureDate = null, $firstNameOfPassenger = null, $lastNameOfPassenger = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent = null)
    {
        $this
            ->setCarrierCode($carrierCode)
            ->setContactPerson($contactPerson)
            ->setCurrencyCode($currencyCode)
            ->setDepartureDate($departureDate)
            ->setFirstNameOfPassenger($firstNameOfPassenger)
            ->setLastNameOfPassenger($lastNameOfPassenger)
            ->setWebAgent($webAgent);
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @param string $carrierCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestWebConfig
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierCode)), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get ContactPerson value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact|null
     */
    public function getContactPerson()
    {
        return $this->ContactPerson;
    }
    /**
     * Set ContactPerson value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $contactPerson
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestWebConfig
     */
    public function setContactPerson(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact $contactPerson = null)
    {
        $this->ContactPerson = $contactPerson;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestWebConfig
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get DepartureDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDepartureDate()
    {
        return isset($this->DepartureDate) ? $this->DepartureDate : null;
    }
    /**
     * Set DepartureDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $departureDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestWebConfig
     */
    public function setDepartureDate($departureDate = null)
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDate)), __LINE__);
        }
        if (is_null($departureDate) || (is_array($departureDate) && empty($departureDate))) {
            unset($this->DepartureDate);
        } else {
            $this->DepartureDate = $departureDate;
        }
        return $this;
    }
    /**
     * Get FirstNameOfPassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstNameOfPassenger()
    {
        return isset($this->FirstNameOfPassenger) ? $this->FirstNameOfPassenger : null;
    }
    /**
     * Set FirstNameOfPassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstNameOfPassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestWebConfig
     */
    public function setFirstNameOfPassenger($firstNameOfPassenger = null)
    {
        // validation for constraint: string
        if (!is_null($firstNameOfPassenger) && !is_string($firstNameOfPassenger)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstNameOfPassenger)), __LINE__);
        }
        if (is_null($firstNameOfPassenger) || (is_array($firstNameOfPassenger) && empty($firstNameOfPassenger))) {
            unset($this->FirstNameOfPassenger);
        } else {
            $this->FirstNameOfPassenger = $firstNameOfPassenger;
        }
        return $this;
    }
    /**
     * Get LastNameOfPassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastNameOfPassenger()
    {
        return isset($this->LastNameOfPassenger) ? $this->LastNameOfPassenger : null;
    }
    /**
     * Set LastNameOfPassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastNameOfPassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestWebConfig
     */
    public function setLastNameOfPassenger($lastNameOfPassenger = null)
    {
        // validation for constraint: string
        if (!is_null($lastNameOfPassenger) && !is_string($lastNameOfPassenger)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastNameOfPassenger)), __LINE__);
        }
        if (is_null($lastNameOfPassenger) || (is_array($lastNameOfPassenger) && empty($lastNameOfPassenger))) {
            unset($this->LastNameOfPassenger);
        } else {
            $this->LastNameOfPassenger = $lastNameOfPassenger;
        }
        return $this;
    }
    /**
     * Get WebAgent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent|null
     */
    public function getWebAgent()
    {
        return isset($this->WebAgent) ? $this->WebAgent : null;
    }
    /**
     * Set WebAgent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestWebConfig
     */
    public function setWebAgent(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Agent $webAgent = null)
    {
        if (is_null($webAgent) || (is_array($webAgent) && empty($webAgent))) {
            unset($this->WebAgent);
        } else {
            $this->WebAgent = $webAgent;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestWebConfig
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
