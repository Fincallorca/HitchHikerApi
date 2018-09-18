<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contact StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Contact
 * @subpackage Structs
 */
class Contact extends AbstractStructBase
{
    /**
     * The AdditionalStreet1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AdditionalStreet1;
    /**
     * The AdditionalStreet2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AdditionalStreet2;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $City;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Country;
    /**
     * The EMail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EMail;
    /**
     * The Fax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Fax;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FirstName;
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
     * The Password
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Password;
    /**
     * The PhoneAgent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PhoneAgent;
    /**
     * The PhoneHome
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PhoneHome;
    /**
     * The PhoneMobile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PhoneMobile;
    /**
     * The PhoneNumbers
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPhoneDetails
     */
    public $PhoneNumbers;
    /**
     * The PhoneWork
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PhoneWork;
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Region;
    /**
     * The Street
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Street;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Title;
    /**
     * The UserID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UserID;
    /**
     * The ZipCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ZipCode;
    /**
     * Constructor method for Contact
     * @uses Contact::setAdditionalStreet1()
     * @uses Contact::setAdditionalStreet2()
     * @uses Contact::setCity()
     * @uses Contact::setCountry()
     * @uses Contact::setEMail()
     * @uses Contact::setFax()
     * @uses Contact::setFirstName()
     * @uses Contact::setGender()
     * @uses Contact::setIDCardNumber()
     * @uses Contact::setIDCardType()
     * @uses Contact::setLastName()
     * @uses Contact::setPassword()
     * @uses Contact::setPhoneAgent()
     * @uses Contact::setPhoneHome()
     * @uses Contact::setPhoneMobile()
     * @uses Contact::setPhoneNumbers()
     * @uses Contact::setPhoneWork()
     * @uses Contact::setRegion()
     * @uses Contact::setStreet()
     * @uses Contact::setTitle()
     * @uses Contact::setUserID()
     * @uses Contact::setZipCode()
     * @param string $additionalStreet1
     * @param string $additionalStreet2
     * @param string $city
     * @param string $country
     * @param string $eMail
     * @param string $fax
     * @param string $firstName
     * @param string $gender
     * @param string $iDCardNumber
     * @param string $iDCardType
     * @param string $lastName
     * @param string $password
     * @param string $phoneAgent
     * @param string $phoneHome
     * @param string $phoneMobile
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPhoneDetails $phoneNumbers
     * @param string $phoneWork
     * @param string $region
     * @param string $street
     * @param string $title
     * @param string $userID
     * @param string $zipCode
     */
    public function __construct($additionalStreet1 = null, $additionalStreet2 = null, $city = null, $country = null, $eMail = null, $fax = null, $firstName = null, $gender = null, $iDCardNumber = null, $iDCardType = null, $lastName = null, $password = null, $phoneAgent = null, $phoneHome = null, $phoneMobile = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPhoneDetails $phoneNumbers = null, $phoneWork = null, $region = null, $street = null, $title = null, $userID = null, $zipCode = null)
    {
        $this
            ->setAdditionalStreet1($additionalStreet1)
            ->setAdditionalStreet2($additionalStreet2)
            ->setCity($city)
            ->setCountry($country)
            ->setEMail($eMail)
            ->setFax($fax)
            ->setFirstName($firstName)
            ->setGender($gender)
            ->setIDCardNumber($iDCardNumber)
            ->setIDCardType($iDCardType)
            ->setLastName($lastName)
            ->setPassword($password)
            ->setPhoneAgent($phoneAgent)
            ->setPhoneHome($phoneHome)
            ->setPhoneMobile($phoneMobile)
            ->setPhoneNumbers($phoneNumbers)
            ->setPhoneWork($phoneWork)
            ->setRegion($region)
            ->setStreet($street)
            ->setTitle($title)
            ->setUserID($userID)
            ->setZipCode($zipCode);
    }
    /**
     * Get AdditionalStreet1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalStreet1()
    {
        return isset($this->AdditionalStreet1) ? $this->AdditionalStreet1 : null;
    }
    /**
     * Set AdditionalStreet1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additionalStreet1
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public function setAdditionalStreet1($additionalStreet1 = null)
    {
        // validation for constraint: string
        if (!is_null($additionalStreet1) && !is_string($additionalStreet1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalStreet1)), __LINE__);
        }
        if (is_null($additionalStreet1) || (is_array($additionalStreet1) && empty($additionalStreet1))) {
            unset($this->AdditionalStreet1);
        } else {
            $this->AdditionalStreet1 = $additionalStreet1;
        }
        return $this;
    }
    /**
     * Get AdditionalStreet2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalStreet2()
    {
        return isset($this->AdditionalStreet2) ? $this->AdditionalStreet2 : null;
    }
    /**
     * Set AdditionalStreet2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additionalStreet2
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public function setAdditionalStreet2($additionalStreet2 = null)
    {
        // validation for constraint: string
        if (!is_null($additionalStreet2) && !is_string($additionalStreet2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalStreet2)), __LINE__);
        }
        if (is_null($additionalStreet2) || (is_array($additionalStreet2) && empty($additionalStreet2))) {
            unset($this->AdditionalStreet2);
        } else {
            $this->AdditionalStreet2 = $additionalStreet2;
        }
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get EMail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEMail()
    {
        return isset($this->EMail) ? $this->EMail : null;
    }
    /**
     * Set EMail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $eMail
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public function setEMail($eMail = null)
    {
        // validation for constraint: string
        if (!is_null($eMail) && !is_string($eMail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMail)), __LINE__);
        }
        if (is_null($eMail) || (is_array($eMail) && empty($eMail))) {
            unset($this->EMail);
        } else {
            $this->EMail = $eMail;
        }
        return $this;
    }
    /**
     * Get Fax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFax()
    {
        return isset($this->Fax) ? $this->Fax : null;
    }
    /**
     * Set Fax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fax
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public function setFax($fax = null)
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fax)), __LINE__);
        }
        if (is_null($fax) || (is_array($fax) && empty($fax))) {
            unset($this->Fax);
        } else {
            $this->Fax = $fax;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
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
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GenderEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GenderEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $gender
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
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
     * Get Password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword()
    {
        return isset($this->Password) ? $this->Password : null;
    }
    /**
     * Set Password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->Password);
        } else {
            $this->Password = $password;
        }
        return $this;
    }
    /**
     * Get PhoneAgent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoneAgent()
    {
        return isset($this->PhoneAgent) ? $this->PhoneAgent : null;
    }
    /**
     * Set PhoneAgent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phoneAgent
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public function setPhoneAgent($phoneAgent = null)
    {
        // validation for constraint: string
        if (!is_null($phoneAgent) && !is_string($phoneAgent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneAgent)), __LINE__);
        }
        if (is_null($phoneAgent) || (is_array($phoneAgent) && empty($phoneAgent))) {
            unset($this->PhoneAgent);
        } else {
            $this->PhoneAgent = $phoneAgent;
        }
        return $this;
    }
    /**
     * Get PhoneHome value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoneHome()
    {
        return isset($this->PhoneHome) ? $this->PhoneHome : null;
    }
    /**
     * Set PhoneHome value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phoneHome
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public function setPhoneHome($phoneHome = null)
    {
        // validation for constraint: string
        if (!is_null($phoneHome) && !is_string($phoneHome)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneHome)), __LINE__);
        }
        if (is_null($phoneHome) || (is_array($phoneHome) && empty($phoneHome))) {
            unset($this->PhoneHome);
        } else {
            $this->PhoneHome = $phoneHome;
        }
        return $this;
    }
    /**
     * Get PhoneMobile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoneMobile()
    {
        return isset($this->PhoneMobile) ? $this->PhoneMobile : null;
    }
    /**
     * Set PhoneMobile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phoneMobile
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public function setPhoneMobile($phoneMobile = null)
    {
        // validation for constraint: string
        if (!is_null($phoneMobile) && !is_string($phoneMobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneMobile)), __LINE__);
        }
        if (is_null($phoneMobile) || (is_array($phoneMobile) && empty($phoneMobile))) {
            unset($this->PhoneMobile);
        } else {
            $this->PhoneMobile = $phoneMobile;
        }
        return $this;
    }
    /**
     * Get PhoneNumbers value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPhoneDetails|null
     */
    public function getPhoneNumbers()
    {
        return $this->PhoneNumbers;
    }
    /**
     * Set PhoneNumbers value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPhoneDetails $phoneNumbers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public function setPhoneNumbers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPhoneDetails $phoneNumbers = null)
    {
        $this->PhoneNumbers = $phoneNumbers;
        return $this;
    }
    /**
     * Get PhoneWork value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoneWork()
    {
        return isset($this->PhoneWork) ? $this->PhoneWork : null;
    }
    /**
     * Set PhoneWork value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phoneWork
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public function setPhoneWork($phoneWork = null)
    {
        // validation for constraint: string
        if (!is_null($phoneWork) && !is_string($phoneWork)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneWork)), __LINE__);
        }
        if (is_null($phoneWork) || (is_array($phoneWork) && empty($phoneWork))) {
            unset($this->PhoneWork);
        } else {
            $this->PhoneWork = $phoneWork;
        }
        return $this;
    }
    /**
     * Get Region value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRegion()
    {
        return isset($this->Region) ? $this->Region : null;
    }
    /**
     * Set Region value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $region
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public function setRegion($region = null)
    {
        // validation for constraint: string
        if (!is_null($region) && !is_string($region)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($region)), __LINE__);
        }
        if (is_null($region) || (is_array($region) && empty($region))) {
            unset($this->Region);
        } else {
            $this->Region = $region;
        }
        return $this;
    }
    /**
     * Get Street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->Street;
    }
    /**
     * Set Street value
     * @param string $street
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street)), __LINE__);
        }
        $this->Street = $street;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get UserID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserID()
    {
        return isset($this->UserID) ? $this->UserID : null;
    }
    /**
     * Set UserID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userID)), __LINE__);
        }
        if (is_null($userID) || (is_array($userID) && empty($userID))) {
            unset($this->UserID);
        } else {
            $this->UserID = $userID;
        }
        return $this;
    }
    /**
     * Get ZipCode value
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }
    /**
     * Set ZipCode value
     * @param string $zipCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
     */
    public function setZipCode($zipCode = null)
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zipCode)), __LINE__);
        }
        $this->ZipCode = $zipCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Contact
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
