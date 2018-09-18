<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for APISDetails StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:APISDetails
 * @subpackage Structs
 */
class APISDetails extends AbstractStructBase
{
    /**
     * The APISAddressType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $APISAddressType;
    /**
     * The APISPassportType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $APISPassportType;
    /**
     * The APISVisaType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $APISVisaType;
    /**
     * The AddressDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AddressDetails;
    /**
     * The AddressType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AddressType;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $City;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Country;
    /**
     * The DateOfBirth
     * @var string
     */
    public $DateOfBirth;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FirstName;
    /**
     * The Gender
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Gender;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $LastName;
    /**
     * The MiddleName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MiddleName;
    /**
     * The Nationality
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Nationality;
    /**
     * The PassportCountry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PassportCountry;
    /**
     * The PassportExpiryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PassportExpiryDate;
    /**
     * The PassportHolder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $PassportHolder;
    /**
     * The PassportNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PassportNumber;
    /**
     * The PassportType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PassportType;
    /**
     * The PlaceOfBirth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PlaceOfBirth;
    /**
     * The RedressNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RedressNumber;
    /**
     * The SegmentNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint
     */
    public $SegmentNumbers;
    /**
     * The State
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $State;
    /**
     * The VisaAppliedCountry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VisaAppliedCountry;
    /**
     * The VisaDateOfIssue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VisaDateOfIssue;
    /**
     * The VisaNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VisaNumber;
    /**
     * The VisaPlaceOfIssue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VisaPlaceOfIssue;
    /**
     * The VisaType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VisaType;
    /**
     * The ZIP
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ZIP;
    /**
     * Constructor method for APISDetails
     * @uses APISDetails::setAPISAddressType()
     * @uses APISDetails::setAPISPassportType()
     * @uses APISDetails::setAPISVisaType()
     * @uses APISDetails::setAddressDetails()
     * @uses APISDetails::setAddressType()
     * @uses APISDetails::setCity()
     * @uses APISDetails::setCountry()
     * @uses APISDetails::setDateOfBirth()
     * @uses APISDetails::setFirstName()
     * @uses APISDetails::setGender()
     * @uses APISDetails::setLastName()
     * @uses APISDetails::setMiddleName()
     * @uses APISDetails::setNationality()
     * @uses APISDetails::setPassportCountry()
     * @uses APISDetails::setPassportExpiryDate()
     * @uses APISDetails::setPassportHolder()
     * @uses APISDetails::setPassportNumber()
     * @uses APISDetails::setPassportType()
     * @uses APISDetails::setPlaceOfBirth()
     * @uses APISDetails::setRedressNumber()
     * @uses APISDetails::setSegmentNumbers()
     * @uses APISDetails::setState()
     * @uses APISDetails::setVisaAppliedCountry()
     * @uses APISDetails::setVisaDateOfIssue()
     * @uses APISDetails::setVisaNumber()
     * @uses APISDetails::setVisaPlaceOfIssue()
     * @uses APISDetails::setVisaType()
     * @uses APISDetails::setZIP()
     * @param string $aPISAddressType
     * @param string $aPISPassportType
     * @param string $aPISVisaType
     * @param string $addressDetails
     * @param string $addressType
     * @param string $city
     * @param string $country
     * @param string $dateOfBirth
     * @param string $firstName
     * @param string $gender
     * @param string $lastName
     * @param string $middleName
     * @param string $nationality
     * @param string $passportCountry
     * @param string $passportExpiryDate
     * @param bool $passportHolder
     * @param string $passportNumber
     * @param string $passportType
     * @param string $placeOfBirth
     * @param string $redressNumber
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $segmentNumbers
     * @param string $state
     * @param string $visaAppliedCountry
     * @param string $visaDateOfIssue
     * @param string $visaNumber
     * @param string $visaPlaceOfIssue
     * @param string $visaType
     * @param string $zIP
     */
    public function __construct($aPISAddressType = null, $aPISPassportType = null, $aPISVisaType = null, $addressDetails = null, $addressType = null, $city = null, $country = null, $dateOfBirth = null, $firstName = null, $gender = null, $lastName = null, $middleName = null, $nationality = null, $passportCountry = null, $passportExpiryDate = null, $passportHolder = null, $passportNumber = null, $passportType = null, $placeOfBirth = null, $redressNumber = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $segmentNumbers = null, $state = null, $visaAppliedCountry = null, $visaDateOfIssue = null, $visaNumber = null, $visaPlaceOfIssue = null, $visaType = null, $zIP = null)
    {
        $this
            ->setAPISAddressType($aPISAddressType)
            ->setAPISPassportType($aPISPassportType)
            ->setAPISVisaType($aPISVisaType)
            ->setAddressDetails($addressDetails)
            ->setAddressType($addressType)
            ->setCity($city)
            ->setCountry($country)
            ->setDateOfBirth($dateOfBirth)
            ->setFirstName($firstName)
            ->setGender($gender)
            ->setLastName($lastName)
            ->setMiddleName($middleName)
            ->setNationality($nationality)
            ->setPassportCountry($passportCountry)
            ->setPassportExpiryDate($passportExpiryDate)
            ->setPassportHolder($passportHolder)
            ->setPassportNumber($passportNumber)
            ->setPassportType($passportType)
            ->setPlaceOfBirth($placeOfBirth)
            ->setRedressNumber($redressNumber)
            ->setSegmentNumbers($segmentNumbers)
            ->setState($state)
            ->setVisaAppliedCountry($visaAppliedCountry)
            ->setVisaDateOfIssue($visaDateOfIssue)
            ->setVisaNumber($visaNumber)
            ->setVisaPlaceOfIssue($visaPlaceOfIssue)
            ->setVisaType($visaType)
            ->setZIP($zIP);
    }
    /**
     * Get APISAddressType value
     * @return string|null
     */
    public function getAPISAddressType()
    {
        return $this->APISAddressType;
    }
    /**
     * Set APISAddressType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\APISAddressTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\APISAddressTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $aPISAddressType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setAPISAddressType($aPISAddressType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\APISAddressTypeEnum::valueIsValid($aPISAddressType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $aPISAddressType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\APISAddressTypeEnum::getValidValues())), __LINE__);
        }
        $this->APISAddressType = $aPISAddressType;
        return $this;
    }
    /**
     * Get APISPassportType value
     * @return string|null
     */
    public function getAPISPassportType()
    {
        return $this->APISPassportType;
    }
    /**
     * Set APISPassportType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\APISPassportTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\APISPassportTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $aPISPassportType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setAPISPassportType($aPISPassportType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\APISPassportTypeEnum::valueIsValid($aPISPassportType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $aPISPassportType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\APISPassportTypeEnum::getValidValues())), __LINE__);
        }
        $this->APISPassportType = $aPISPassportType;
        return $this;
    }
    /**
     * Get APISVisaType value
     * @return string|null
     */
    public function getAPISVisaType()
    {
        return $this->APISVisaType;
    }
    /**
     * Set APISVisaType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\APISVisaTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\APISVisaTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $aPISVisaType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setAPISVisaType($aPISVisaType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\APISVisaTypeEnum::valueIsValid($aPISVisaType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $aPISVisaType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\APISVisaTypeEnum::getValidValues())), __LINE__);
        }
        $this->APISVisaType = $aPISVisaType;
        return $this;
    }
    /**
     * Get AddressDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddressDetails()
    {
        return isset($this->AddressDetails) ? $this->AddressDetails : null;
    }
    /**
     * Set AddressDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addressDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setAddressDetails($addressDetails = null)
    {
        // validation for constraint: string
        if (!is_null($addressDetails) && !is_string($addressDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressDetails)), __LINE__);
        }
        if (is_null($addressDetails) || (is_array($addressDetails) && empty($addressDetails))) {
            unset($this->AddressDetails);
        } else {
            $this->AddressDetails = $addressDetails;
        }
        return $this;
    }
    /**
     * Get AddressType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddressType()
    {
        return isset($this->AddressType) ? $this->AddressType : null;
    }
    /**
     * Set AddressType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addressType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setAddressType($addressType = null)
    {
        // validation for constraint: string
        if (!is_null($addressType) && !is_string($addressType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressType)), __LINE__);
        }
        if (is_null($addressType) || (is_array($addressType) && empty($addressType))) {
            unset($this->AddressType);
        } else {
            $this->AddressType = $addressType;
        }
        return $this;
    }
    /**
     * Get City value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCity()
    {
        return isset($this->City) ? $this->City : null;
    }
    /**
     * Set City value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $city
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->City);
        } else {
            $this->City = $city;
        }
        return $this;
    }
    /**
     * Get Country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry()
    {
        return isset($this->Country) ? $this->Country : null;
    }
    /**
     * Set Country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->Country);
        } else {
            $this->Country = $country;
        }
        return $this;
    }
    /**
     * Get DateOfBirth value
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->DateOfBirth;
    }
    /**
     * Set DateOfBirth value
     * @param string $dateOfBirth
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setDateOfBirth($dateOfBirth = null)
    {
        // validation for constraint: string
        if (!is_null($dateOfBirth) && !is_string($dateOfBirth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateOfBirth)), __LINE__);
        }
        $this->DateOfBirth = $dateOfBirth;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
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
     * Get Gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @param string $gender
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setGender($gender = null)
    {
        // validation for constraint: string
        if (!is_null($gender) && !is_string($gender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gender)), __LINE__);
        }
        $this->Gender = $gender;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
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
     * Get MiddleName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMiddleName()
    {
        return isset($this->MiddleName) ? $this->MiddleName : null;
    }
    /**
     * Set MiddleName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $middleName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setMiddleName($middleName = null)
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($middleName)), __LINE__);
        }
        if (is_null($middleName) || (is_array($middleName) && empty($middleName))) {
            unset($this->MiddleName);
        } else {
            $this->MiddleName = $middleName;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
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
     * Get PassportCountry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassportCountry()
    {
        return isset($this->PassportCountry) ? $this->PassportCountry : null;
    }
    /**
     * Set PassportCountry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passportCountry
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setPassportCountry($passportCountry = null)
    {
        // validation for constraint: string
        if (!is_null($passportCountry) && !is_string($passportCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passportCountry)), __LINE__);
        }
        if (is_null($passportCountry) || (is_array($passportCountry) && empty($passportCountry))) {
            unset($this->PassportCountry);
        } else {
            $this->PassportCountry = $passportCountry;
        }
        return $this;
    }
    /**
     * Get PassportExpiryDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassportExpiryDate()
    {
        return isset($this->PassportExpiryDate) ? $this->PassportExpiryDate : null;
    }
    /**
     * Set PassportExpiryDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passportExpiryDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setPassportExpiryDate($passportExpiryDate = null)
    {
        // validation for constraint: string
        if (!is_null($passportExpiryDate) && !is_string($passportExpiryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passportExpiryDate)), __LINE__);
        }
        if (is_null($passportExpiryDate) || (is_array($passportExpiryDate) && empty($passportExpiryDate))) {
            unset($this->PassportExpiryDate);
        } else {
            $this->PassportExpiryDate = $passportExpiryDate;
        }
        return $this;
    }
    /**
     * Get PassportHolder value
     * @return bool|null
     */
    public function getPassportHolder()
    {
        return $this->PassportHolder;
    }
    /**
     * Set PassportHolder value
     * @param bool $passportHolder
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setPassportHolder($passportHolder = null)
    {
        // validation for constraint: boolean
        if (!is_null($passportHolder) && !is_bool($passportHolder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($passportHolder)), __LINE__);
        }
        $this->PassportHolder = $passportHolder;
        return $this;
    }
    /**
     * Get PassportNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassportNumber()
    {
        return isset($this->PassportNumber) ? $this->PassportNumber : null;
    }
    /**
     * Set PassportNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passportNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setPassportNumber($passportNumber = null)
    {
        // validation for constraint: string
        if (!is_null($passportNumber) && !is_string($passportNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passportNumber)), __LINE__);
        }
        if (is_null($passportNumber) || (is_array($passportNumber) && empty($passportNumber))) {
            unset($this->PassportNumber);
        } else {
            $this->PassportNumber = $passportNumber;
        }
        return $this;
    }
    /**
     * Get PassportType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassportType()
    {
        return isset($this->PassportType) ? $this->PassportType : null;
    }
    /**
     * Set PassportType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passportType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setPassportType($passportType = null)
    {
        // validation for constraint: string
        if (!is_null($passportType) && !is_string($passportType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passportType)), __LINE__);
        }
        if (is_null($passportType) || (is_array($passportType) && empty($passportType))) {
            unset($this->PassportType);
        } else {
            $this->PassportType = $passportType;
        }
        return $this;
    }
    /**
     * Get PlaceOfBirth value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPlaceOfBirth()
    {
        return isset($this->PlaceOfBirth) ? $this->PlaceOfBirth : null;
    }
    /**
     * Set PlaceOfBirth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $placeOfBirth
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setPlaceOfBirth($placeOfBirth = null)
    {
        // validation for constraint: string
        if (!is_null($placeOfBirth) && !is_string($placeOfBirth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($placeOfBirth)), __LINE__);
        }
        if (is_null($placeOfBirth) || (is_array($placeOfBirth) && empty($placeOfBirth))) {
            unset($this->PlaceOfBirth);
        } else {
            $this->PlaceOfBirth = $placeOfBirth;
        }
        return $this;
    }
    /**
     * Get RedressNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRedressNumber()
    {
        return isset($this->RedressNumber) ? $this->RedressNumber : null;
    }
    /**
     * Set RedressNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $redressNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setRedressNumber($redressNumber = null)
    {
        // validation for constraint: string
        if (!is_null($redressNumber) && !is_string($redressNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redressNumber)), __LINE__);
        }
        if (is_null($redressNumber) || (is_array($redressNumber) && empty($redressNumber))) {
            unset($this->RedressNumber);
        } else {
            $this->RedressNumber = $redressNumber;
        }
        return $this;
    }
    /**
     * Get SegmentNumbers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint|null
     */
    public function getSegmentNumbers()
    {
        return isset($this->SegmentNumbers) ? $this->SegmentNumbers : null;
    }
    /**
     * Set SegmentNumbers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $segmentNumbers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setSegmentNumbers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $segmentNumbers = null)
    {
        if (is_null($segmentNumbers) || (is_array($segmentNumbers) && empty($segmentNumbers))) {
            unset($this->SegmentNumbers);
        } else {
            $this->SegmentNumbers = $segmentNumbers;
        }
        return $this;
    }
    /**
     * Get State value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getState()
    {
        return isset($this->State) ? $this->State : null;
    }
    /**
     * Set State value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $state
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        if (is_null($state) || (is_array($state) && empty($state))) {
            unset($this->State);
        } else {
            $this->State = $state;
        }
        return $this;
    }
    /**
     * Get VisaAppliedCountry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVisaAppliedCountry()
    {
        return isset($this->VisaAppliedCountry) ? $this->VisaAppliedCountry : null;
    }
    /**
     * Set VisaAppliedCountry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $visaAppliedCountry
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setVisaAppliedCountry($visaAppliedCountry = null)
    {
        // validation for constraint: string
        if (!is_null($visaAppliedCountry) && !is_string($visaAppliedCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($visaAppliedCountry)), __LINE__);
        }
        if (is_null($visaAppliedCountry) || (is_array($visaAppliedCountry) && empty($visaAppliedCountry))) {
            unset($this->VisaAppliedCountry);
        } else {
            $this->VisaAppliedCountry = $visaAppliedCountry;
        }
        return $this;
    }
    /**
     * Get VisaDateOfIssue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVisaDateOfIssue()
    {
        return isset($this->VisaDateOfIssue) ? $this->VisaDateOfIssue : null;
    }
    /**
     * Set VisaDateOfIssue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $visaDateOfIssue
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setVisaDateOfIssue($visaDateOfIssue = null)
    {
        // validation for constraint: string
        if (!is_null($visaDateOfIssue) && !is_string($visaDateOfIssue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($visaDateOfIssue)), __LINE__);
        }
        if (is_null($visaDateOfIssue) || (is_array($visaDateOfIssue) && empty($visaDateOfIssue))) {
            unset($this->VisaDateOfIssue);
        } else {
            $this->VisaDateOfIssue = $visaDateOfIssue;
        }
        return $this;
    }
    /**
     * Get VisaNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVisaNumber()
    {
        return isset($this->VisaNumber) ? $this->VisaNumber : null;
    }
    /**
     * Set VisaNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $visaNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setVisaNumber($visaNumber = null)
    {
        // validation for constraint: string
        if (!is_null($visaNumber) && !is_string($visaNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($visaNumber)), __LINE__);
        }
        if (is_null($visaNumber) || (is_array($visaNumber) && empty($visaNumber))) {
            unset($this->VisaNumber);
        } else {
            $this->VisaNumber = $visaNumber;
        }
        return $this;
    }
    /**
     * Get VisaPlaceOfIssue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVisaPlaceOfIssue()
    {
        return isset($this->VisaPlaceOfIssue) ? $this->VisaPlaceOfIssue : null;
    }
    /**
     * Set VisaPlaceOfIssue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $visaPlaceOfIssue
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setVisaPlaceOfIssue($visaPlaceOfIssue = null)
    {
        // validation for constraint: string
        if (!is_null($visaPlaceOfIssue) && !is_string($visaPlaceOfIssue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($visaPlaceOfIssue)), __LINE__);
        }
        if (is_null($visaPlaceOfIssue) || (is_array($visaPlaceOfIssue) && empty($visaPlaceOfIssue))) {
            unset($this->VisaPlaceOfIssue);
        } else {
            $this->VisaPlaceOfIssue = $visaPlaceOfIssue;
        }
        return $this;
    }
    /**
     * Get VisaType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVisaType()
    {
        return isset($this->VisaType) ? $this->VisaType : null;
    }
    /**
     * Set VisaType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $visaType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setVisaType($visaType = null)
    {
        // validation for constraint: string
        if (!is_null($visaType) && !is_string($visaType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($visaType)), __LINE__);
        }
        if (is_null($visaType) || (is_array($visaType) && empty($visaType))) {
            unset($this->VisaType);
        } else {
            $this->VisaType = $visaType;
        }
        return $this;
    }
    /**
     * Get ZIP value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getZIP()
    {
        return isset($this->ZIP) ? $this->ZIP : null;
    }
    /**
     * Set ZIP value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $zIP
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
     */
    public function setZIP($zIP = null)
    {
        // validation for constraint: string
        if (!is_null($zIP) && !is_string($zIP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zIP)), __LINE__);
        }
        if (is_null($zIP) || (is_array($zIP) && empty($zIP))) {
            unset($this->ZIP);
        } else {
            $this->ZIP = $zIP;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\APISDetails
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
