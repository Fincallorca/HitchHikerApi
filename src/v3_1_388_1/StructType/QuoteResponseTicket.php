<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuoteResponseTicket StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QuoteResponseTicket
 * @subpackage Structs
 */
class QuoteResponseTicket extends AbstractStructBase
{
    /**
     * The CCPaymentAllowed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CCPaymentAllowed;
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Commission;
    /**
     * The ETicket
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ETicket;
    /**
     * The Endorsement
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Endorsement;
    /**
     * The FareCalc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareCalc;
    /**
     * The FormOfPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FormOfPayment;
    /**
     * The IsSATA
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsSATA;
    /**
     * The IssuedBy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IssuedBy;
    /**
     * The LastTicketingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastTicketingDate;
    /**
     * The Legs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteTicketResponseLeg
     */
    public $Legs;
    /**
     * The NetRemit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $NetRemit;
    /**
     * The OSI
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OSI;
    /**
     * The OSIs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfOSIRequestData
     */
    public $OSIs;
    /**
     * The OverrideBaggage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $OverrideBaggage;
    /**
     * The OverrideEndorsement
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $OverrideEndorsement;
    /**
     * The OverrideFOP
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $OverrideFOP;
    /**
     * The SKs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSKRequestData
     */
    public $SKs;
    /**
     * The SSR
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SSR;
    /**
     * The SSRs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSSRRequestData
     */
    public $SSRs;
    /**
     * The TicketFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $TicketFare;
    /**
     * The TicketText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TicketText;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Title;
    /**
     * The Tourcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Tourcode;
    /**
     * Constructor method for QuoteResponseTicket
     * @uses QuoteResponseTicket::setCCPaymentAllowed()
     * @uses QuoteResponseTicket::setCommission()
     * @uses QuoteResponseTicket::setETicket()
     * @uses QuoteResponseTicket::setEndorsement()
     * @uses QuoteResponseTicket::setFareCalc()
     * @uses QuoteResponseTicket::setFormOfPayment()
     * @uses QuoteResponseTicket::setIsSATA()
     * @uses QuoteResponseTicket::setIssuedBy()
     * @uses QuoteResponseTicket::setLastTicketingDate()
     * @uses QuoteResponseTicket::setLegs()
     * @uses QuoteResponseTicket::setNetRemit()
     * @uses QuoteResponseTicket::setOSI()
     * @uses QuoteResponseTicket::setOSIs()
     * @uses QuoteResponseTicket::setOverrideBaggage()
     * @uses QuoteResponseTicket::setOverrideEndorsement()
     * @uses QuoteResponseTicket::setOverrideFOP()
     * @uses QuoteResponseTicket::setSKs()
     * @uses QuoteResponseTicket::setSSR()
     * @uses QuoteResponseTicket::setSSRs()
     * @uses QuoteResponseTicket::setTicketFare()
     * @uses QuoteResponseTicket::setTicketText()
     * @uses QuoteResponseTicket::setTitle()
     * @uses QuoteResponseTicket::setTourcode()
     * @param bool $cCPaymentAllowed
     * @param string $commission
     * @param bool $eTicket
     * @param string $endorsement
     * @param string $fareCalc
     * @param string $formOfPayment
     * @param bool $isSATA
     * @param string $issuedBy
     * @param string $lastTicketingDate
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteTicketResponseLeg $legs
     * @param bool $netRemit
     * @param string $oSI
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfOSIRequestData $oSIs
     * @param bool $overrideBaggage
     * @param bool $overrideEndorsement
     * @param bool $overrideFOP
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSKRequestData $sKs
     * @param string $sSR
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSSRRequestData $sSRs
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $ticketFare
     * @param string $ticketText
     * @param string $title
     * @param string $tourcode
     */
    public function __construct($cCPaymentAllowed = null, $commission = null, $eTicket = null, $endorsement = null, $fareCalc = null, $formOfPayment = null, $isSATA = null, $issuedBy = null, $lastTicketingDate = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteTicketResponseLeg $legs = null, $netRemit = null, $oSI = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfOSIRequestData $oSIs = null, $overrideBaggage = null, $overrideEndorsement = null, $overrideFOP = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSKRequestData $sKs = null, $sSR = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSSRRequestData $sSRs = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $ticketFare = null, $ticketText = null, $title = null, $tourcode = null)
    {
        $this
            ->setCCPaymentAllowed($cCPaymentAllowed)
            ->setCommission($commission)
            ->setETicket($eTicket)
            ->setEndorsement($endorsement)
            ->setFareCalc($fareCalc)
            ->setFormOfPayment($formOfPayment)
            ->setIsSATA($isSATA)
            ->setIssuedBy($issuedBy)
            ->setLastTicketingDate($lastTicketingDate)
            ->setLegs($legs)
            ->setNetRemit($netRemit)
            ->setOSI($oSI)
            ->setOSIs($oSIs)
            ->setOverrideBaggage($overrideBaggage)
            ->setOverrideEndorsement($overrideEndorsement)
            ->setOverrideFOP($overrideFOP)
            ->setSKs($sKs)
            ->setSSR($sSR)
            ->setSSRs($sSRs)
            ->setTicketFare($ticketFare)
            ->setTicketText($ticketText)
            ->setTitle($title)
            ->setTourcode($tourcode);
    }
    /**
     * Get CCPaymentAllowed value
     * @return bool|null
     */
    public function getCCPaymentAllowed()
    {
        return $this->CCPaymentAllowed;
    }
    /**
     * Set CCPaymentAllowed value
     * @param bool $cCPaymentAllowed
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setCCPaymentAllowed($cCPaymentAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($cCPaymentAllowed) && !is_bool($cCPaymentAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cCPaymentAllowed)), __LINE__);
        }
        $this->CCPaymentAllowed = $cCPaymentAllowed;
        return $this;
    }
    /**
     * Get Commission value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCommission()
    {
        return isset($this->Commission) ? $this->Commission : null;
    }
    /**
     * Set Commission value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $commission
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setCommission($commission = null)
    {
        // validation for constraint: string
        if (!is_null($commission) && !is_string($commission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commission)), __LINE__);
        }
        if (is_null($commission) || (is_array($commission) && empty($commission))) {
            unset($this->Commission);
        } else {
            $this->Commission = $commission;
        }
        return $this;
    }
    /**
     * Get ETicket value
     * @return bool|null
     */
    public function getETicket()
    {
        return $this->ETicket;
    }
    /**
     * Set ETicket value
     * @param bool $eTicket
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setETicket($eTicket = null)
    {
        // validation for constraint: boolean
        if (!is_null($eTicket) && !is_bool($eTicket)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eTicket)), __LINE__);
        }
        $this->ETicket = $eTicket;
        return $this;
    }
    /**
     * Get Endorsement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndorsement()
    {
        return isset($this->Endorsement) ? $this->Endorsement : null;
    }
    /**
     * Set Endorsement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endorsement
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setEndorsement($endorsement = null)
    {
        // validation for constraint: string
        if (!is_null($endorsement) && !is_string($endorsement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endorsement)), __LINE__);
        }
        if (is_null($endorsement) || (is_array($endorsement) && empty($endorsement))) {
            unset($this->Endorsement);
        } else {
            $this->Endorsement = $endorsement;
        }
        return $this;
    }
    /**
     * Get FareCalc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareCalc()
    {
        return isset($this->FareCalc) ? $this->FareCalc : null;
    }
    /**
     * Set FareCalc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareCalc
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setFareCalc($fareCalc = null)
    {
        // validation for constraint: string
        if (!is_null($fareCalc) && !is_string($fareCalc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareCalc)), __LINE__);
        }
        if (is_null($fareCalc) || (is_array($fareCalc) && empty($fareCalc))) {
            unset($this->FareCalc);
        } else {
            $this->FareCalc = $fareCalc;
        }
        return $this;
    }
    /**
     * Get FormOfPayment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFormOfPayment()
    {
        return isset($this->FormOfPayment) ? $this->FormOfPayment : null;
    }
    /**
     * Set FormOfPayment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $formOfPayment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setFormOfPayment($formOfPayment = null)
    {
        // validation for constraint: string
        if (!is_null($formOfPayment) && !is_string($formOfPayment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formOfPayment)), __LINE__);
        }
        if (is_null($formOfPayment) || (is_array($formOfPayment) && empty($formOfPayment))) {
            unset($this->FormOfPayment);
        } else {
            $this->FormOfPayment = $formOfPayment;
        }
        return $this;
    }
    /**
     * Get IsSATA value
     * @return bool|null
     */
    public function getIsSATA()
    {
        return $this->IsSATA;
    }
    /**
     * Set IsSATA value
     * @param bool $isSATA
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setIsSATA($isSATA = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSATA) && !is_bool($isSATA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSATA)), __LINE__);
        }
        $this->IsSATA = $isSATA;
        return $this;
    }
    /**
     * Get IssuedBy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIssuedBy()
    {
        return isset($this->IssuedBy) ? $this->IssuedBy : null;
    }
    /**
     * Set IssuedBy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $issuedBy
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setIssuedBy($issuedBy = null)
    {
        // validation for constraint: string
        if (!is_null($issuedBy) && !is_string($issuedBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issuedBy)), __LINE__);
        }
        if (is_null($issuedBy) || (is_array($issuedBy) && empty($issuedBy))) {
            unset($this->IssuedBy);
        } else {
            $this->IssuedBy = $issuedBy;
        }
        return $this;
    }
    /**
     * Get LastTicketingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastTicketingDate()
    {
        return isset($this->LastTicketingDate) ? $this->LastTicketingDate : null;
    }
    /**
     * Set LastTicketingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastTicketingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setLastTicketingDate($lastTicketingDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastTicketingDate) && !is_string($lastTicketingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastTicketingDate)), __LINE__);
        }
        if (is_null($lastTicketingDate) || (is_array($lastTicketingDate) && empty($lastTicketingDate))) {
            unset($this->LastTicketingDate);
        } else {
            $this->LastTicketingDate = $lastTicketingDate;
        }
        return $this;
    }
    /**
     * Get Legs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteTicketResponseLeg|null
     */
    public function getLegs()
    {
        return isset($this->Legs) ? $this->Legs : null;
    }
    /**
     * Set Legs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteTicketResponseLeg $legs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setLegs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteTicketResponseLeg $legs = null)
    {
        if (is_null($legs) || (is_array($legs) && empty($legs))) {
            unset($this->Legs);
        } else {
            $this->Legs = $legs;
        }
        return $this;
    }
    /**
     * Get NetRemit value
     * @return bool|null
     */
    public function getNetRemit()
    {
        return $this->NetRemit;
    }
    /**
     * Set NetRemit value
     * @param bool $netRemit
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setNetRemit($netRemit = null)
    {
        // validation for constraint: boolean
        if (!is_null($netRemit) && !is_bool($netRemit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($netRemit)), __LINE__);
        }
        $this->NetRemit = $netRemit;
        return $this;
    }
    /**
     * Get OSI value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOSI()
    {
        return isset($this->OSI) ? $this->OSI : null;
    }
    /**
     * Set OSI value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $oSI
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setOSI($oSI = null)
    {
        // validation for constraint: string
        if (!is_null($oSI) && !is_string($oSI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($oSI)), __LINE__);
        }
        if (is_null($oSI) || (is_array($oSI) && empty($oSI))) {
            unset($this->OSI);
        } else {
            $this->OSI = $oSI;
        }
        return $this;
    }
    /**
     * Get OSIs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfOSIRequestData|null
     */
    public function getOSIs()
    {
        return isset($this->OSIs) ? $this->OSIs : null;
    }
    /**
     * Set OSIs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfOSIRequestData $oSIs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setOSIs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfOSIRequestData $oSIs = null)
    {
        if (is_null($oSIs) || (is_array($oSIs) && empty($oSIs))) {
            unset($this->OSIs);
        } else {
            $this->OSIs = $oSIs;
        }
        return $this;
    }
    /**
     * Get OverrideBaggage value
     * @return bool|null
     */
    public function getOverrideBaggage()
    {
        return $this->OverrideBaggage;
    }
    /**
     * Set OverrideBaggage value
     * @param bool $overrideBaggage
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setOverrideBaggage($overrideBaggage = null)
    {
        // validation for constraint: boolean
        if (!is_null($overrideBaggage) && !is_bool($overrideBaggage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($overrideBaggage)), __LINE__);
        }
        $this->OverrideBaggage = $overrideBaggage;
        return $this;
    }
    /**
     * Get OverrideEndorsement value
     * @return bool|null
     */
    public function getOverrideEndorsement()
    {
        return $this->OverrideEndorsement;
    }
    /**
     * Set OverrideEndorsement value
     * @param bool $overrideEndorsement
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setOverrideEndorsement($overrideEndorsement = null)
    {
        // validation for constraint: boolean
        if (!is_null($overrideEndorsement) && !is_bool($overrideEndorsement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($overrideEndorsement)), __LINE__);
        }
        $this->OverrideEndorsement = $overrideEndorsement;
        return $this;
    }
    /**
     * Get OverrideFOP value
     * @return bool|null
     */
    public function getOverrideFOP()
    {
        return $this->OverrideFOP;
    }
    /**
     * Set OverrideFOP value
     * @param bool $overrideFOP
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setOverrideFOP($overrideFOP = null)
    {
        // validation for constraint: boolean
        if (!is_null($overrideFOP) && !is_bool($overrideFOP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($overrideFOP)), __LINE__);
        }
        $this->OverrideFOP = $overrideFOP;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
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
     * Get SSR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSSR()
    {
        return isset($this->SSR) ? $this->SSR : null;
    }
    /**
     * Set SSR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sSR
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setSSR($sSR = null)
    {
        // validation for constraint: string
        if (!is_null($sSR) && !is_string($sSR)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sSR)), __LINE__);
        }
        if (is_null($sSR) || (is_array($sSR) && empty($sSR))) {
            unset($this->SSR);
        } else {
            $this->SSR = $sSR;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
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
     * Get TicketFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getTicketFare()
    {
        return isset($this->TicketFare) ? $this->TicketFare : null;
    }
    /**
     * Set TicketFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $ticketFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setTicketFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $ticketFare = null)
    {
        if (is_null($ticketFare) || (is_array($ticketFare) && empty($ticketFare))) {
            unset($this->TicketFare);
        } else {
            $this->TicketFare = $ticketFare;
        }
        return $this;
    }
    /**
     * Get TicketText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTicketText()
    {
        return isset($this->TicketText) ? $this->TicketText : null;
    }
    /**
     * Set TicketText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ticketText
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setTicketText($ticketText = null)
    {
        // validation for constraint: string
        if (!is_null($ticketText) && !is_string($ticketText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketText)), __LINE__);
        }
        if (is_null($ticketText) || (is_array($ticketText) && empty($ticketText))) {
            unset($this->TicketText);
        } else {
            $this->TicketText = $ticketText;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
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
     * Get Tourcode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTourcode()
    {
        return isset($this->Tourcode) ? $this->Tourcode : null;
    }
    /**
     * Set Tourcode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tourcode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public function setTourcode($tourcode = null)
    {
        // validation for constraint: string
        if (!is_null($tourcode) && !is_string($tourcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tourcode)), __LINE__);
        }
        if (is_null($tourcode) || (is_array($tourcode) && empty($tourcode))) {
            unset($this->Tourcode);
        } else {
            $this->Tourcode = $tourcode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
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
