<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookRequestPassenger StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BookRequestPassenger
 * @subpackage Structs
 */
class BookRequestPassenger extends AbstractStructBase
{
    /**
     * The APIS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public $APIS;
    /**
     * The AssistanceRequired
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AssistanceRequired;
    /**
     * The BoardingDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPassengerBoarding
     */
    public $BoardingDetails;
    /**
     * The DOB
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DOB;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FirstName;
    /**
     * The FrequentFlyerAirline
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FrequentFlyerAirline;
    /**
     * The FrequentFlyerNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FrequentFlyerNumber;
    /**
     * The FrequentFlyerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FrequentFlyerType;
    /**
     * The Gender
     * @var string
     */
    public $Gender;
    /**
     * The IDCardNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IDCardNumber;
    /**
     * The IDCardType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IDCardType;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $LastName;
    /**
     * The Municipality
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Municipality;
    /**
     * The Nationality
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Nationality;
    /**
     * The PassengerType
     * @var string
     */
    public $PassengerType;
    /**
     * The SSRs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $SSRs;
    /**
     * The SeatReservations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestSeatData
     */
    public $SeatReservations;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Title;
    /**
     * Constructor method for BookRequestPassenger
     * @uses BookRequestPassenger::setAPIS()
     * @uses BookRequestPassenger::setAssistanceRequired()
     * @uses BookRequestPassenger::setBoardingDetails()
     * @uses BookRequestPassenger::setDOB()
     * @uses BookRequestPassenger::setFirstName()
     * @uses BookRequestPassenger::setFrequentFlyerAirline()
     * @uses BookRequestPassenger::setFrequentFlyerNumber()
     * @uses BookRequestPassenger::setFrequentFlyerType()
     * @uses BookRequestPassenger::setGender()
     * @uses BookRequestPassenger::setIDCardNumber()
     * @uses BookRequestPassenger::setIDCardType()
     * @uses BookRequestPassenger::setLastName()
     * @uses BookRequestPassenger::setMunicipality()
     * @uses BookRequestPassenger::setNationality()
     * @uses BookRequestPassenger::setPassengerType()
     * @uses BookRequestPassenger::setSSRs()
     * @uses BookRequestPassenger::setSeatReservations()
     * @uses BookRequestPassenger::setTitle()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails $aPIS
     * @param bool $assistanceRequired
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPassengerBoarding $boardingDetails
     * @param string $dOB
     * @param string $firstName
     * @param string $frequentFlyerAirline
     * @param string $frequentFlyerNumber
     * @param string $frequentFlyerType
     * @param string $gender
     * @param string $iDCardNumber
     * @param string $iDCardType
     * @param string $lastName
     * @param string $municipality
     * @param string $nationality
     * @param string $passengerType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $sSRs
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestSeatData $seatReservations
     * @param string $title
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails $aPIS = null, $assistanceRequired = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPassengerBoarding $boardingDetails = null, $dOB = null, $firstName = null, $frequentFlyerAirline = null, $frequentFlyerNumber = null, $frequentFlyerType = null, $gender = null, $iDCardNumber = null, $iDCardType = null, $lastName = null, $municipality = null, $nationality = null, $passengerType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $sSRs = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestSeatData $seatReservations = null, $title = null)
    {
        $this
            ->setAPIS($aPIS)
            ->setAssistanceRequired($assistanceRequired)
            ->setBoardingDetails($boardingDetails)
            ->setDOB($dOB)
            ->setFirstName($firstName)
            ->setFrequentFlyerAirline($frequentFlyerAirline)
            ->setFrequentFlyerNumber($frequentFlyerNumber)
            ->setFrequentFlyerType($frequentFlyerType)
            ->setGender($gender)
            ->setIDCardNumber($iDCardNumber)
            ->setIDCardType($iDCardType)
            ->setLastName($lastName)
            ->setMunicipality($municipality)
            ->setNationality($nationality)
            ->setPassengerType($passengerType)
            ->setSSRs($sSRs)
            ->setSeatReservations($seatReservations)
            ->setTitle($title);
    }
    /**
     * Get APIS value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails|null
     */
    public function getAPIS()
    {
        return isset($this->APIS) ? $this->APIS : null;
    }
    /**
     * Set APIS value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails $aPIS
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setAPIS(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails $aPIS = null)
    {
        if (is_null($aPIS) || (is_array($aPIS) && empty($aPIS))) {
            unset($this->APIS);
        } else {
            $this->APIS = $aPIS;
        }
        return $this;
    }
    /**
     * Get AssistanceRequired value
     * @return bool|null
     */
    public function getAssistanceRequired()
    {
        return $this->AssistanceRequired;
    }
    /**
     * Set AssistanceRequired value
     * @param bool $assistanceRequired
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setAssistanceRequired($assistanceRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($assistanceRequired) && !is_bool($assistanceRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($assistanceRequired)), __LINE__);
        }
        $this->AssistanceRequired = $assistanceRequired;
        return $this;
    }
    /**
     * Get BoardingDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPassengerBoarding|null
     */
    public function getBoardingDetails()
    {
        return isset($this->BoardingDetails) ? $this->BoardingDetails : null;
    }
    /**
     * Set BoardingDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPassengerBoarding $boardingDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setBoardingDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPassengerBoarding $boardingDetails = null)
    {
        if (is_null($boardingDetails) || (is_array($boardingDetails) && empty($boardingDetails))) {
            unset($this->BoardingDetails);
        } else {
            $this->BoardingDetails = $boardingDetails;
        }
        return $this;
    }
    /**
     * Get DOB value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDOB()
    {
        return isset($this->DOB) ? $this->DOB : null;
    }
    /**
     * Set DOB value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dOB
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setDOB($dOB = null)
    {
        // validation for constraint: string
        if (!is_null($dOB) && !is_string($dOB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dOB)), __LINE__);
        }
        if (is_null($dOB) || (is_array($dOB) && empty($dOB))) {
            unset($this->DOB);
        } else {
            $this->DOB = $dOB;
        }
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get FrequentFlyerAirline value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFrequentFlyerAirline()
    {
        return isset($this->FrequentFlyerAirline) ? $this->FrequentFlyerAirline : null;
    }
    /**
     * Set FrequentFlyerAirline value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $frequentFlyerAirline
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setFrequentFlyerAirline($frequentFlyerAirline = null)
    {
        // validation for constraint: string
        if (!is_null($frequentFlyerAirline) && !is_string($frequentFlyerAirline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frequentFlyerAirline)), __LINE__);
        }
        if (is_null($frequentFlyerAirline) || (is_array($frequentFlyerAirline) && empty($frequentFlyerAirline))) {
            unset($this->FrequentFlyerAirline);
        } else {
            $this->FrequentFlyerAirline = $frequentFlyerAirline;
        }
        return $this;
    }
    /**
     * Get FrequentFlyerNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFrequentFlyerNumber()
    {
        return isset($this->FrequentFlyerNumber) ? $this->FrequentFlyerNumber : null;
    }
    /**
     * Set FrequentFlyerNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $frequentFlyerNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setFrequentFlyerNumber($frequentFlyerNumber = null)
    {
        // validation for constraint: string
        if (!is_null($frequentFlyerNumber) && !is_string($frequentFlyerNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frequentFlyerNumber)), __LINE__);
        }
        if (is_null($frequentFlyerNumber) || (is_array($frequentFlyerNumber) && empty($frequentFlyerNumber))) {
            unset($this->FrequentFlyerNumber);
        } else {
            $this->FrequentFlyerNumber = $frequentFlyerNumber;
        }
        return $this;
    }
    /**
     * Get FrequentFlyerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFrequentFlyerType()
    {
        return isset($this->FrequentFlyerType) ? $this->FrequentFlyerType : null;
    }
    /**
     * Set FrequentFlyerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $frequentFlyerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setFrequentFlyerType($frequentFlyerType = null)
    {
        // validation for constraint: string
        if (!is_null($frequentFlyerType) && !is_string($frequentFlyerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frequentFlyerType)), __LINE__);
        }
        if (is_null($frequentFlyerType) || (is_array($frequentFlyerType) && empty($frequentFlyerType))) {
            unset($this->FrequentFlyerType);
        } else {
            $this->FrequentFlyerType = $frequentFlyerType;
        }
        return $this;
    }
    /**
     * Get Gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GenderEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GenderEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $gender
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setGender($gender = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GenderEnum::valueIsValid($gender)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $gender, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GenderEnum::getValidValues())), __LINE__);
        }
        $this->Gender = $gender;
        return $this;
    }
    /**
     * Get IDCardNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIDCardNumber()
    {
        return isset($this->IDCardNumber) ? $this->IDCardNumber : null;
    }
    /**
     * Set IDCardNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iDCardNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setIDCardNumber($iDCardNumber = null)
    {
        // validation for constraint: string
        if (!is_null($iDCardNumber) && !is_string($iDCardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iDCardNumber)), __LINE__);
        }
        if (is_null($iDCardNumber) || (is_array($iDCardNumber) && empty($iDCardNumber))) {
            unset($this->IDCardNumber);
        } else {
            $this->IDCardNumber = $iDCardNumber;
        }
        return $this;
    }
    /**
     * Get IDCardType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIDCardType()
    {
        return isset($this->IDCardType) ? $this->IDCardType : null;
    }
    /**
     * Set IDCardType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iDCardType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setIDCardType($iDCardType = null)
    {
        // validation for constraint: string
        if (!is_null($iDCardType) && !is_string($iDCardType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iDCardType)), __LINE__);
        }
        if (is_null($iDCardType) || (is_array($iDCardType) && empty($iDCardType))) {
            unset($this->IDCardType);
        } else {
            $this->IDCardType = $iDCardType;
        }
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get Municipality value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMunicipality()
    {
        return isset($this->Municipality) ? $this->Municipality : null;
    }
    /**
     * Set Municipality value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $municipality
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setMunicipality($municipality = null)
    {
        // validation for constraint: string
        if (!is_null($municipality) && !is_string($municipality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($municipality)), __LINE__);
        }
        if (is_null($municipality) || (is_array($municipality) && empty($municipality))) {
            unset($this->Municipality);
        } else {
            $this->Municipality = $municipality;
        }
        return $this;
    }
    /**
     * Get Nationality value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNationality()
    {
        return isset($this->Nationality) ? $this->Nationality : null;
    }
    /**
     * Set Nationality value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nationality
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setNationality($nationality = null)
    {
        // validation for constraint: string
        if (!is_null($nationality) && !is_string($nationality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nationality)), __LINE__);
        }
        if (is_null($nationality) || (is_array($nationality) && empty($nationality))) {
            unset($this->Nationality);
        } else {
            $this->Nationality = $nationality;
        }
        return $this;
    }
    /**
     * Get PassengerType value
     * @return string|null
     */
    public function getPassengerType()
    {
        return $this->PassengerType;
    }
    /**
     * Set PassengerType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $passengerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setPassengerType($passengerType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($passengerType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $passengerType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
        }
        $this->PassengerType = $passengerType;
        return $this;
    }
    /**
     * Get SSRs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getSSRs()
    {
        return isset($this->SSRs) ? $this->SSRs : null;
    }
    /**
     * Set SSRs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $sSRs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setSSRs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $sSRs = null)
    {
        if (is_null($sSRs) || (is_array($sSRs) && empty($sSRs))) {
            unset($this->SSRs);
        } else {
            $this->SSRs = $sSRs;
        }
        return $this;
    }
    /**
     * Get SeatReservations value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestSeatData|null
     */
    public function getSeatReservations()
    {
        return isset($this->SeatReservations) ? $this->SeatReservations : null;
    }
    /**
     * Set SeatReservations value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestSeatData $seatReservations
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setSeatReservations(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestSeatData $seatReservations = null)
    {
        if (is_null($seatReservations) || (is_array($seatReservations) && empty($seatReservations))) {
            unset($this->SeatReservations);
        } else {
            $this->SeatReservations = $seatReservations;
        }
        return $this;
    }
    /**
     * Get Title value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTitle()
    {
        return isset($this->Title) ? $this->Title : null;
    }
    /**
     * Set Title value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $title
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        if (is_null($title) || (is_array($title) && empty($title))) {
            unset($this->Title);
        } else {
            $this->Title = $title;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPassenger
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
