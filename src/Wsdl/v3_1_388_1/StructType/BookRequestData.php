<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BookRequestData
 * @subpackage Structs
 */
class BookRequestData extends AbstractStructBase
{
    /**
     * The BackOffice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestBackOffice
     */
    public $BackOffice;
    /**
     * The CalcModel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CalcModel;
    /**
     * The Configuration
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration
     */
    public $Configuration;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Currency;
    /**
     * The EnduserIP
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EnduserIP;
    /**
     * The Fare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestFare
     */
    public $Fare;
    /**
     * The IATANumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IATANumber;
    /**
     * The IgnoreCCError
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IgnoreCCError;
    /**
     * The IgnoreFlightTimes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IgnoreFlightTimes;
    /**
     * The Legs
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestLeg
     */
    public $Legs;
    /**
     * The OSI
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestOSI
     */
    public $OSI;
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestPassenger
     */
    public $Passengers;
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPayment
     */
    public $Payment;
    /**
     * The PlatingCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PlatingCarrier;
    /**
     * The RemarkLines
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestRemark
     */
    public $RemarkLines;
    /**
     * The SKs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSKRequestData
     */
    public $SKs;
    /**
     * The SSRs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSSRRequestData
     */
    public $SSRs;
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * The StoreFareQuoteType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StoreFareQuoteType;
    /**
     * The TicketingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TicketingType;
    /**
     * Constructor method for BookRequestData
     * @uses BookRequestData::setBackOffice()
     * @uses BookRequestData::setCalcModel()
     * @uses BookRequestData::setConfiguration()
     * @uses BookRequestData::setCurrency()
     * @uses BookRequestData::setEnduserIP()
     * @uses BookRequestData::setFare()
     * @uses BookRequestData::setIATANumber()
     * @uses BookRequestData::setIgnoreCCError()
     * @uses BookRequestData::setIgnoreFlightTimes()
     * @uses BookRequestData::setLegs()
     * @uses BookRequestData::setOSI()
     * @uses BookRequestData::setPassengers()
     * @uses BookRequestData::setPayment()
     * @uses BookRequestData::setPlatingCarrier()
     * @uses BookRequestData::setRemarkLines()
     * @uses BookRequestData::setSKs()
     * @uses BookRequestData::setSSRs()
     * @uses BookRequestData::setSource()
     * @uses BookRequestData::setStoreFareQuoteType()
     * @uses BookRequestData::setTicketingType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestBackOffice $backOffice
     * @param string $calcModel
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration $configuration
     * @param string $currency
     * @param string $enduserIP
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestFare $fare
     * @param string $iATANumber
     * @param bool $ignoreCCError
     * @param bool $ignoreFlightTimes
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestLeg $legs
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestOSI $oSI
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestPassenger $passengers
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPayment $payment
     * @param string $platingCarrier
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestRemark $remarkLines
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSKRequestData $sKs
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSSRRequestData $sSRs
     * @param string $source
     * @param string $storeFareQuoteType
     * @param string $ticketingType
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestBackOffice $backOffice = null, $calcModel = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration $configuration = null, $currency = null, $enduserIP = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestFare $fare = null, $iATANumber = null, $ignoreCCError = null, $ignoreFlightTimes = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestLeg $legs = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestOSI $oSI = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestPassenger $passengers = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPayment $payment = null, $platingCarrier = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestRemark $remarkLines = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSKRequestData $sKs = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSSRRequestData $sSRs = null, $source = null, $storeFareQuoteType = null, $ticketingType = null)
    {
        $this
            ->setBackOffice($backOffice)
            ->setCalcModel($calcModel)
            ->setConfiguration($configuration)
            ->setCurrency($currency)
            ->setEnduserIP($enduserIP)
            ->setFare($fare)
            ->setIATANumber($iATANumber)
            ->setIgnoreCCError($ignoreCCError)
            ->setIgnoreFlightTimes($ignoreFlightTimes)
            ->setLegs($legs)
            ->setOSI($oSI)
            ->setPassengers($passengers)
            ->setPayment($payment)
            ->setPlatingCarrier($platingCarrier)
            ->setRemarkLines($remarkLines)
            ->setSKs($sKs)
            ->setSSRs($sSRs)
            ->setSource($source)
            ->setStoreFareQuoteType($storeFareQuoteType)
            ->setTicketingType($ticketingType);
    }
    /**
     * Get BackOffice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestBackOffice|null
     */
    public function getBackOffice()
    {
        return isset($this->BackOffice) ? $this->BackOffice : null;
    }
    /**
     * Set BackOffice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestBackOffice $backOffice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setBackOffice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestBackOffice $backOffice = null)
    {
        if (is_null($backOffice) || (is_array($backOffice) && empty($backOffice))) {
            unset($this->BackOffice);
        } else {
            $this->BackOffice = $backOffice;
        }
        return $this;
    }
    /**
     * Get CalcModel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCalcModel()
    {
        return isset($this->CalcModel) ? $this->CalcModel : null;
    }
    /**
     * Set CalcModel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $calcModel
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setCalcModel($calcModel = null)
    {
        // validation for constraint: string
        if (!is_null($calcModel) && !is_string($calcModel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calcModel)), __LINE__);
        }
        if (is_null($calcModel) || (is_array($calcModel) && empty($calcModel))) {
            unset($this->CalcModel);
        } else {
            $this->CalcModel = $calcModel;
        }
        return $this;
    }
    /**
     * Get Configuration value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration|null
     */
    public function getConfiguration()
    {
        return $this->Configuration;
    }
    /**
     * Set Configuration value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration $configuration
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setConfiguration(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestConfiguration $configuration = null)
    {
        $this->Configuration = $configuration;
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Get EnduserIP value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEnduserIP()
    {
        return isset($this->EnduserIP) ? $this->EnduserIP : null;
    }
    /**
     * Set EnduserIP value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $enduserIP
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setEnduserIP($enduserIP = null)
    {
        // validation for constraint: string
        if (!is_null($enduserIP) && !is_string($enduserIP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($enduserIP)), __LINE__);
        }
        if (is_null($enduserIP) || (is_array($enduserIP) && empty($enduserIP))) {
            unset($this->EnduserIP);
        } else {
            $this->EnduserIP = $enduserIP;
        }
        return $this;
    }
    /**
     * Get Fare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestFare|null
     */
    public function getFare()
    {
        return isset($this->Fare) ? $this->Fare : null;
    }
    /**
     * Set Fare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestFare $fare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestFare $fare = null)
    {
        if (is_null($fare) || (is_array($fare) && empty($fare))) {
            unset($this->Fare);
        } else {
            $this->Fare = $fare;
        }
        return $this;
    }
    /**
     * Get IATANumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIATANumber()
    {
        return isset($this->IATANumber) ? $this->IATANumber : null;
    }
    /**
     * Set IATANumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iATANumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setIATANumber($iATANumber = null)
    {
        // validation for constraint: string
        if (!is_null($iATANumber) && !is_string($iATANumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iATANumber)), __LINE__);
        }
        if (is_null($iATANumber) || (is_array($iATANumber) && empty($iATANumber))) {
            unset($this->IATANumber);
        } else {
            $this->IATANumber = $iATANumber;
        }
        return $this;
    }
    /**
     * Get IgnoreCCError value
     * @return bool|null
     */
    public function getIgnoreCCError()
    {
        return $this->IgnoreCCError;
    }
    /**
     * Set IgnoreCCError value
     * @param bool $ignoreCCError
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setIgnoreCCError($ignoreCCError = null)
    {
        // validation for constraint: boolean
        if (!is_null($ignoreCCError) && !is_bool($ignoreCCError)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ignoreCCError)), __LINE__);
        }
        $this->IgnoreCCError = $ignoreCCError;
        return $this;
    }
    /**
     * Get IgnoreFlightTimes value
     * @return bool|null
     */
    public function getIgnoreFlightTimes()
    {
        return $this->IgnoreFlightTimes;
    }
    /**
     * Set IgnoreFlightTimes value
     * @param bool $ignoreFlightTimes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setIgnoreFlightTimes($ignoreFlightTimes = null)
    {
        // validation for constraint: boolean
        if (!is_null($ignoreFlightTimes) && !is_bool($ignoreFlightTimes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ignoreFlightTimes)), __LINE__);
        }
        $this->IgnoreFlightTimes = $ignoreFlightTimes;
        return $this;
    }
    /**
     * Get Legs value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestLeg|null
     */
    public function getLegs()
    {
        return $this->Legs;
    }
    /**
     * Set Legs value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestLeg $legs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setLegs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestLeg $legs = null)
    {
        $this->Legs = $legs;
        return $this;
    }
    /**
     * Get OSI value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestOSI|null
     */
    public function getOSI()
    {
        return isset($this->OSI) ? $this->OSI : null;
    }
    /**
     * Set OSI value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestOSI $oSI
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setOSI(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestOSI $oSI = null)
    {
        if (is_null($oSI) || (is_array($oSI) && empty($oSI))) {
            unset($this->OSI);
        } else {
            $this->OSI = $oSI;
        }
        return $this;
    }
    /**
     * Get Passengers value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestPassenger|null
     */
    public function getPassengers()
    {
        return $this->Passengers;
    }
    /**
     * Set Passengers value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestPassenger $passengers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setPassengers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestPassenger $passengers = null)
    {
        $this->Passengers = $passengers;
        return $this;
    }
    /**
     * Get Payment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPayment|null
     */
    public function getPayment()
    {
        return isset($this->Payment) ? $this->Payment : null;
    }
    /**
     * Set Payment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPayment $payment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setPayment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestPayment $payment = null)
    {
        if (is_null($payment) || (is_array($payment) && empty($payment))) {
            unset($this->Payment);
        } else {
            $this->Payment = $payment;
        }
        return $this;
    }
    /**
     * Get PlatingCarrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPlatingCarrier()
    {
        return isset($this->PlatingCarrier) ? $this->PlatingCarrier : null;
    }
    /**
     * Set PlatingCarrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $platingCarrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setPlatingCarrier($platingCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($platingCarrier) && !is_string($platingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($platingCarrier)), __LINE__);
        }
        if (is_null($platingCarrier) || (is_array($platingCarrier) && empty($platingCarrier))) {
            unset($this->PlatingCarrier);
        } else {
            $this->PlatingCarrier = $platingCarrier;
        }
        return $this;
    }
    /**
     * Get RemarkLines value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestRemark|null
     */
    public function getRemarkLines()
    {
        return isset($this->RemarkLines) ? $this->RemarkLines : null;
    }
    /**
     * Set RemarkLines value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestRemark $remarkLines
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setRemarkLines(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestRemark $remarkLines = null)
    {
        if (is_null($remarkLines) || (is_array($remarkLines) && empty($remarkLines))) {
            unset($this->RemarkLines);
        } else {
            $this->RemarkLines = $remarkLines;
        }
        return $this;
    }
    /**
     * Get SKs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSKRequestData|null
     */
    public function getSKs()
    {
        return isset($this->SKs) ? $this->SKs : null;
    }
    /**
     * Set SKs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSKRequestData $sKs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setSKs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSKRequestData $sKs = null)
    {
        if (is_null($sKs) || (is_array($sKs) && empty($sKs))) {
            unset($this->SKs);
        } else {
            $this->SKs = $sKs;
        }
        return $this;
    }
    /**
     * Get SSRs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSSRRequestData|null
     */
    public function getSSRs()
    {
        return isset($this->SSRs) ? $this->SSRs : null;
    }
    /**
     * Set SSRs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSSRRequestData $sSRs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setSSRs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSSRRequestData $sSRs = null)
    {
        if (is_null($sSRs) || (is_array($sSRs) && empty($sSRs))) {
            unset($this->SSRs);
        } else {
            $this->SSRs = $sSRs;
        }
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $source
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setSource($source = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::valueIsValid($source)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $source, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::getValidValues())), __LINE__);
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Get StoreFareQuoteType value
     * @return string|null
     */
    public function getStoreFareQuoteType()
    {
        return $this->StoreFareQuoteType;
    }
    /**
     * Set StoreFareQuoteType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\StoreFareQuoteTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\StoreFareQuoteTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $storeFareQuoteType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setStoreFareQuoteType($storeFareQuoteType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\StoreFareQuoteTypeEnum::valueIsValid($storeFareQuoteType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $storeFareQuoteType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\StoreFareQuoteTypeEnum::getValidValues())), __LINE__);
        }
        $this->StoreFareQuoteType = $storeFareQuoteType;
        return $this;
    }
    /**
     * Get TicketingType value
     * @return string|null
     */
    public function getTicketingType()
    {
        return $this->TicketingType;
    }
    /**
     * Set TicketingType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TicketingTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TicketingTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ticketingType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
     */
    public function setTicketingType($ticketingType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TicketingTypeEnum::valueIsValid($ticketingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ticketingType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TicketingTypeEnum::getValidValues())), __LINE__);
        }
        $this->TicketingType = $ticketingType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestData
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
