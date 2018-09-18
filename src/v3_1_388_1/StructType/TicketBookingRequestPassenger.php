<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketBookingRequestPassenger StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketBookingRequestPassenger
 * @subpackage Structs
 */
class TicketBookingRequestPassenger extends AbstractStructBase
{
    /**
     * The DateOfBirth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
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
     * - minOccurs: 0
     * @var string
     */
    public $Gender;
    /**
     * The IncludeOPC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeOPC;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $LastName;
    /**
     * The PassengerType
     * @var string
     */
    public $PassengerType;
    /**
     * The PaymemtNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PaymemtNumber;
    /**
     * Constructor method for TicketBookingRequestPassenger
     * @uses TicketBookingRequestPassenger::setDateOfBirth()
     * @uses TicketBookingRequestPassenger::setFirstName()
     * @uses TicketBookingRequestPassenger::setGender()
     * @uses TicketBookingRequestPassenger::setIncludeOPC()
     * @uses TicketBookingRequestPassenger::setLastName()
     * @uses TicketBookingRequestPassenger::setPassengerType()
     * @uses TicketBookingRequestPassenger::setPaymemtNumber()
     * @param string $dateOfBirth
     * @param string $firstName
     * @param string $gender
     * @param bool $includeOPC
     * @param string $lastName
     * @param string $passengerType
     * @param int $paymemtNumber
     */
    public function __construct($dateOfBirth = null, $firstName = null, $gender = null, $includeOPC = null, $lastName = null, $passengerType = null, $paymemtNumber = null)
    {
        $this
            ->setDateOfBirth($dateOfBirth)
            ->setFirstName($firstName)
            ->setGender($gender)
            ->setIncludeOPC($includeOPC)
            ->setLastName($lastName)
            ->setPassengerType($passengerType)
            ->setPaymemtNumber($paymemtNumber);
    }
    /**
     * Get DateOfBirth value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return isset($this->DateOfBirth) ? $this->DateOfBirth : null;
    }
    /**
     * Set DateOfBirth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dateOfBirth
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger
     */
    public function setDateOfBirth($dateOfBirth = null)
    {
        // validation for constraint: string
        if (!is_null($dateOfBirth) && !is_string($dateOfBirth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateOfBirth)), __LINE__);
        }
        if (is_null($dateOfBirth) || (is_array($dateOfBirth) && empty($dateOfBirth))) {
            unset($this->DateOfBirth);
        } else {
            $this->DateOfBirth = $dateOfBirth;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger
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
     * Get IncludeOPC value
     * @return bool|null
     */
    public function getIncludeOPC()
    {
        return $this->IncludeOPC;
    }
    /**
     * Set IncludeOPC value
     * @param bool $includeOPC
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger
     */
    public function setIncludeOPC($includeOPC = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeOPC) && !is_bool($includeOPC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeOPC)), __LINE__);
        }
        $this->IncludeOPC = $includeOPC;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger
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
     * Get PaymemtNumber value
     * @return int|null
     */
    public function getPaymemtNumber()
    {
        return $this->PaymemtNumber;
    }
    /**
     * Set PaymemtNumber value
     * @param int $paymemtNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger
     */
    public function setPaymemtNumber($paymemtNumber = null)
    {
        // validation for constraint: int
        if (!is_null($paymemtNumber) && !is_numeric($paymemtNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paymemtNumber)), __LINE__);
        }
        $this->PaymemtNumber = $paymemtNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestPassenger
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
