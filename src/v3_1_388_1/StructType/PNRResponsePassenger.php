<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRResponsePassenger StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PNRResponsePassenger
 * @subpackage Structs
 */
class PNRResponsePassenger extends AbstractStructBase
{
    /**
     * The Age
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Age;
    /**
     * The AssistanceRequired
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AssistanceRequired;
    /**
     * The CustomerNameData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CustomerNameData;
    /**
     * The DateOfBirth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DateOfBirth;
    /**
     * The EquivalentPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentPrice;
    /**
     * The EquivalentTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentTax;
    /**
     * The FOID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FormOfIdentification
     */
    public $FOID;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
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
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The OriginalPassengerNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OriginalPassengerNumber;
    /**
     * The Osi
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseOSI
     */
    public $Osi;
    /**
     * The PassengerNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PassengerNumber;
    /**
     * The PassengerTypeCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PassengerTypeCode;
    /**
     * The PassengerTypeName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerTypeName;
    /**
     * The Price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $Price;
    /**
     * The SeatPreferrences
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSeatPreferrence
     */
    public $SeatPreferrences;
    /**
     * The SpecialServiceRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSSR
     */
    public $SpecialServiceRequests;
    /**
     * The Tax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $Tax;
    /**
     * The TicketNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTKNO
     */
    public $TicketNumbers;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Title;
    /**
     * Constructor method for PNRResponsePassenger
     * @uses PNRResponsePassenger::setAge()
     * @uses PNRResponsePassenger::setAssistanceRequired()
     * @uses PNRResponsePassenger::setCustomerNameData()
     * @uses PNRResponsePassenger::setDateOfBirth()
     * @uses PNRResponsePassenger::setEquivalentPrice()
     * @uses PNRResponsePassenger::setEquivalentTax()
     * @uses PNRResponsePassenger::setFOID()
     * @uses PNRResponsePassenger::setFirstName()
     * @uses PNRResponsePassenger::setFrequentFlyerAirline()
     * @uses PNRResponsePassenger::setFrequentFlyerNumber()
     * @uses PNRResponsePassenger::setName()
     * @uses PNRResponsePassenger::setOriginalPassengerNumber()
     * @uses PNRResponsePassenger::setOsi()
     * @uses PNRResponsePassenger::setPassengerNumber()
     * @uses PNRResponsePassenger::setPassengerTypeCode()
     * @uses PNRResponsePassenger::setPassengerTypeName()
     * @uses PNRResponsePassenger::setPrice()
     * @uses PNRResponsePassenger::setSeatPreferrences()
     * @uses PNRResponsePassenger::setSpecialServiceRequests()
     * @uses PNRResponsePassenger::setTax()
     * @uses PNRResponsePassenger::setTicketNumbers()
     * @uses PNRResponsePassenger::setTitle()
     * @param int $age
     * @param bool $assistanceRequired
     * @param string $customerNameData
     * @param string $dateOfBirth
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTax
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FormOfIdentification $fOID
     * @param string $firstName
     * @param string $frequentFlyerAirline
     * @param string $frequentFlyerNumber
     * @param string $name
     * @param string $originalPassengerNumber
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseOSI $osi
     * @param int $passengerNumber
     * @param string $passengerTypeCode
     * @param string $passengerTypeName
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $price
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSeatPreferrence $seatPreferrences
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSSR $specialServiceRequests
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $tax
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTKNO $ticketNumbers
     * @param string $title
     */
    public function __construct($age = null, $assistanceRequired = null, $customerNameData = null, $dateOfBirth = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTax = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FormOfIdentification $fOID = null, $firstName = null, $frequentFlyerAirline = null, $frequentFlyerNumber = null, $name = null, $originalPassengerNumber = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseOSI $osi = null, $passengerNumber = null, $passengerTypeCode = null, $passengerTypeName = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $price = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSeatPreferrence $seatPreferrences = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSSR $specialServiceRequests = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $tax = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTKNO $ticketNumbers = null, $title = null)
    {
        $this
            ->setAge($age)
            ->setAssistanceRequired($assistanceRequired)
            ->setCustomerNameData($customerNameData)
            ->setDateOfBirth($dateOfBirth)
            ->setEquivalentPrice($equivalentPrice)
            ->setEquivalentTax($equivalentTax)
            ->setFOID($fOID)
            ->setFirstName($firstName)
            ->setFrequentFlyerAirline($frequentFlyerAirline)
            ->setFrequentFlyerNumber($frequentFlyerNumber)
            ->setName($name)
            ->setOriginalPassengerNumber($originalPassengerNumber)
            ->setOsi($osi)
            ->setPassengerNumber($passengerNumber)
            ->setPassengerTypeCode($passengerTypeCode)
            ->setPassengerTypeName($passengerTypeName)
            ->setPrice($price)
            ->setSeatPreferrences($seatPreferrences)
            ->setSpecialServiceRequests($specialServiceRequests)
            ->setTax($tax)
            ->setTicketNumbers($ticketNumbers)
            ->setTitle($title);
    }
    /**
     * Get Age value
     * @return int|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param int $age
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
     */
    public function setAge($age = null)
    {
        // validation for constraint: int
        if (!is_null($age) && !is_numeric($age)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($age)), __LINE__);
        }
        $this->Age = $age;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
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
     * Get CustomerNameData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerNameData()
    {
        return isset($this->CustomerNameData) ? $this->CustomerNameData : null;
    }
    /**
     * Set CustomerNameData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerNameData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
     */
    public function setCustomerNameData($customerNameData = null)
    {
        // validation for constraint: string
        if (!is_null($customerNameData) && !is_string($customerNameData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerNameData)), __LINE__);
        }
        if (is_null($customerNameData) || (is_array($customerNameData) && empty($customerNameData))) {
            unset($this->CustomerNameData);
        } else {
            $this->CustomerNameData = $customerNameData;
        }
        return $this;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
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
     * Get EquivalentPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentPrice()
    {
        return isset($this->EquivalentPrice) ? $this->EquivalentPrice : null;
    }
    /**
     * Set EquivalentPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
     */
    public function setEquivalentPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPrice = null)
    {
        if (is_null($equivalentPrice) || (is_array($equivalentPrice) && empty($equivalentPrice))) {
            unset($this->EquivalentPrice);
        } else {
            $this->EquivalentPrice = $equivalentPrice;
        }
        return $this;
    }
    /**
     * Get EquivalentTax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentTax()
    {
        return isset($this->EquivalentTax) ? $this->EquivalentTax : null;
    }
    /**
     * Set EquivalentTax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTax
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
     */
    public function setEquivalentTax(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTax = null)
    {
        if (is_null($equivalentTax) || (is_array($equivalentTax) && empty($equivalentTax))) {
            unset($this->EquivalentTax);
        } else {
            $this->EquivalentTax = $equivalentTax;
        }
        return $this;
    }
    /**
     * Get FOID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FormOfIdentification|null
     */
    public function getFOID()
    {
        return isset($this->FOID) ? $this->FOID : null;
    }
    /**
     * Set FOID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FormOfIdentification $fOID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
     */
    public function setFOID(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FormOfIdentification $fOID = null)
    {
        if (is_null($fOID) || (is_array($fOID) && empty($fOID))) {
            unset($this->FOID);
        } else {
            $this->FOID = $fOID;
        }
        return $this;
    }
    /**
     * Get FirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstName()
    {
        return isset($this->FirstName) ? $this->FirstName : null;
    }
    /**
     * Set FirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->FirstName);
        } else {
            $this->FirstName = $firstName;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
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
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Get OriginalPassengerNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOriginalPassengerNumber()
    {
        return isset($this->OriginalPassengerNumber) ? $this->OriginalPassengerNumber : null;
    }
    /**
     * Set OriginalPassengerNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $originalPassengerNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
     */
    public function setOriginalPassengerNumber($originalPassengerNumber = null)
    {
        // validation for constraint: string
        if (!is_null($originalPassengerNumber) && !is_string($originalPassengerNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalPassengerNumber)), __LINE__);
        }
        if (is_null($originalPassengerNumber) || (is_array($originalPassengerNumber) && empty($originalPassengerNumber))) {
            unset($this->OriginalPassengerNumber);
        } else {
            $this->OriginalPassengerNumber = $originalPassengerNumber;
        }
        return $this;
    }
    /**
     * Get Osi value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseOSI|null
     */
    public function getOsi()
    {
        return isset($this->Osi) ? $this->Osi : null;
    }
    /**
     * Set Osi value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseOSI $osi
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
     */
    public function setOsi(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseOSI $osi = null)
    {
        if (is_null($osi) || (is_array($osi) && empty($osi))) {
            unset($this->Osi);
        } else {
            $this->Osi = $osi;
        }
        return $this;
    }
    /**
     * Get PassengerNumber value
     * @return int|null
     */
    public function getPassengerNumber()
    {
        return $this->PassengerNumber;
    }
    /**
     * Set PassengerNumber value
     * @param int $passengerNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
     */
    public function setPassengerNumber($passengerNumber = null)
    {
        // validation for constraint: int
        if (!is_null($passengerNumber) && !is_numeric($passengerNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($passengerNumber)), __LINE__);
        }
        $this->PassengerNumber = $passengerNumber;
        return $this;
    }
    /**
     * Get PassengerTypeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassengerTypeCode()
    {
        return isset($this->PassengerTypeCode) ? $this->PassengerTypeCode : null;
    }
    /**
     * Set PassengerTypeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passengerTypeCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
     */
    public function setPassengerTypeCode($passengerTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($passengerTypeCode) && !is_string($passengerTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerTypeCode)), __LINE__);
        }
        if (is_null($passengerTypeCode) || (is_array($passengerTypeCode) && empty($passengerTypeCode))) {
            unset($this->PassengerTypeCode);
        } else {
            $this->PassengerTypeCode = $passengerTypeCode;
        }
        return $this;
    }
    /**
     * Get PassengerTypeName value
     * @return string|null
     */
    public function getPassengerTypeName()
    {
        return $this->PassengerTypeName;
    }
    /**
     * Set PassengerTypeName value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $passengerTypeName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
     */
    public function setPassengerTypeName($passengerTypeName = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($passengerTypeName)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $passengerTypeName, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
        }
        $this->PassengerTypeName = $passengerTypeName;
        return $this;
    }
    /**
     * Get Price value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getPrice()
    {
        return isset($this->Price) ? $this->Price : null;
    }
    /**
     * Set Price value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $price
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
     */
    public function setPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $price = null)
    {
        if (is_null($price) || (is_array($price) && empty($price))) {
            unset($this->Price);
        } else {
            $this->Price = $price;
        }
        return $this;
    }
    /**
     * Get SeatPreferrences value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSeatPreferrence|null
     */
    public function getSeatPreferrences()
    {
        return isset($this->SeatPreferrences) ? $this->SeatPreferrences : null;
    }
    /**
     * Set SeatPreferrences value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSeatPreferrence $seatPreferrences
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
     */
    public function setSeatPreferrences(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSeatPreferrence $seatPreferrences = null)
    {
        if (is_null($seatPreferrences) || (is_array($seatPreferrences) && empty($seatPreferrences))) {
            unset($this->SeatPreferrences);
        } else {
            $this->SeatPreferrences = $seatPreferrences;
        }
        return $this;
    }
    /**
     * Get SpecialServiceRequests value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSSR|null
     */
    public function getSpecialServiceRequests()
    {
        return isset($this->SpecialServiceRequests) ? $this->SpecialServiceRequests : null;
    }
    /**
     * Set SpecialServiceRequests value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSSR $specialServiceRequests
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
     */
    public function setSpecialServiceRequests(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSSR $specialServiceRequests = null)
    {
        if (is_null($specialServiceRequests) || (is_array($specialServiceRequests) && empty($specialServiceRequests))) {
            unset($this->SpecialServiceRequests);
        } else {
            $this->SpecialServiceRequests = $specialServiceRequests;
        }
        return $this;
    }
    /**
     * Get Tax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getTax()
    {
        return isset($this->Tax) ? $this->Tax : null;
    }
    /**
     * Set Tax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $tax
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
     */
    public function setTax(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $tax = null)
    {
        if (is_null($tax) || (is_array($tax) && empty($tax))) {
            unset($this->Tax);
        } else {
            $this->Tax = $tax;
        }
        return $this;
    }
    /**
     * Get TicketNumbers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTKNO|null
     */
    public function getTicketNumbers()
    {
        return isset($this->TicketNumbers) ? $this->TicketNumbers : null;
    }
    /**
     * Set TicketNumbers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTKNO $ticketNumbers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
     */
    public function setTicketNumbers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTKNO $ticketNumbers = null)
    {
        if (is_null($ticketNumbers) || (is_array($ticketNumbers) && empty($ticketNumbers))) {
            unset($this->TicketNumbers);
        } else {
            $this->TicketNumbers = $ticketNumbers;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger
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
