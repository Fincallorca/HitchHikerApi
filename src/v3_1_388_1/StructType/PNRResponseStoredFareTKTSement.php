<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRResponseStoredFareTKTSement StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PNRResponseStoredFareTKTSement
 * @subpackage Structs
 */
class PNRResponseStoredFareTKTSement extends AbstractStructBase
{
    /**
     * The Designator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Designator;
    /**
     * The FareBase
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareBase;
    /**
     * The FreeBaggageAllowance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FreeBaggageAllowance;
    /**
     * The NVA
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NVA;
    /**
     * The NVB
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NVB;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Number;
    /**
     * The OriginalNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OriginalNumber;
    /**
     * The StopIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StopIndicator;
    /**
     * The TicketStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TicketStatus;
    /**
     * Constructor method for PNRResponseStoredFareTKTSement
     * @uses PNRResponseStoredFareTKTSement::setDesignator()
     * @uses PNRResponseStoredFareTKTSement::setFareBase()
     * @uses PNRResponseStoredFareTKTSement::setFreeBaggageAllowance()
     * @uses PNRResponseStoredFareTKTSement::setNVA()
     * @uses PNRResponseStoredFareTKTSement::setNVB()
     * @uses PNRResponseStoredFareTKTSement::setNumber()
     * @uses PNRResponseStoredFareTKTSement::setOriginalNumber()
     * @uses PNRResponseStoredFareTKTSement::setStopIndicator()
     * @uses PNRResponseStoredFareTKTSement::setTicketStatus()
     * @param string $designator
     * @param string $fareBase
     * @param string $freeBaggageAllowance
     * @param string $nVA
     * @param string $nVB
     * @param int $number
     * @param int $originalNumber
     * @param string $stopIndicator
     * @param string $ticketStatus
     */
    public function __construct($designator = null, $fareBase = null, $freeBaggageAllowance = null, $nVA = null, $nVB = null, $number = null, $originalNumber = null, $stopIndicator = null, $ticketStatus = null)
    {
        $this
            ->setDesignator($designator)
            ->setFareBase($fareBase)
            ->setFreeBaggageAllowance($freeBaggageAllowance)
            ->setNVA($nVA)
            ->setNVB($nVB)
            ->setNumber($number)
            ->setOriginalNumber($originalNumber)
            ->setStopIndicator($stopIndicator)
            ->setTicketStatus($ticketStatus);
    }
    /**
     * Get Designator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDesignator()
    {
        return isset($this->Designator) ? $this->Designator : null;
    }
    /**
     * Set Designator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $designator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFareTKTSement
     */
    public function setDesignator($designator = null)
    {
        // validation for constraint: string
        if (!is_null($designator) && !is_string($designator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($designator)), __LINE__);
        }
        if (is_null($designator) || (is_array($designator) && empty($designator))) {
            unset($this->Designator);
        } else {
            $this->Designator = $designator;
        }
        return $this;
    }
    /**
     * Get FareBase value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareBase()
    {
        return isset($this->FareBase) ? $this->FareBase : null;
    }
    /**
     * Set FareBase value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareBase
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFareTKTSement
     */
    public function setFareBase($fareBase = null)
    {
        // validation for constraint: string
        if (!is_null($fareBase) && !is_string($fareBase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareBase)), __LINE__);
        }
        if (is_null($fareBase) || (is_array($fareBase) && empty($fareBase))) {
            unset($this->FareBase);
        } else {
            $this->FareBase = $fareBase;
        }
        return $this;
    }
    /**
     * Get FreeBaggageAllowance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFreeBaggageAllowance()
    {
        return isset($this->FreeBaggageAllowance) ? $this->FreeBaggageAllowance : null;
    }
    /**
     * Set FreeBaggageAllowance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $freeBaggageAllowance
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFareTKTSement
     */
    public function setFreeBaggageAllowance($freeBaggageAllowance = null)
    {
        // validation for constraint: string
        if (!is_null($freeBaggageAllowance) && !is_string($freeBaggageAllowance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeBaggageAllowance)), __LINE__);
        }
        if (is_null($freeBaggageAllowance) || (is_array($freeBaggageAllowance) && empty($freeBaggageAllowance))) {
            unset($this->FreeBaggageAllowance);
        } else {
            $this->FreeBaggageAllowance = $freeBaggageAllowance;
        }
        return $this;
    }
    /**
     * Get NVA value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNVA()
    {
        return isset($this->NVA) ? $this->NVA : null;
    }
    /**
     * Set NVA value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nVA
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFareTKTSement
     */
    public function setNVA($nVA = null)
    {
        // validation for constraint: string
        if (!is_null($nVA) && !is_string($nVA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nVA)), __LINE__);
        }
        if (is_null($nVA) || (is_array($nVA) && empty($nVA))) {
            unset($this->NVA);
        } else {
            $this->NVA = $nVA;
        }
        return $this;
    }
    /**
     * Get NVB value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNVB()
    {
        return isset($this->NVB) ? $this->NVB : null;
    }
    /**
     * Set NVB value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nVB
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFareTKTSement
     */
    public function setNVB($nVB = null)
    {
        // validation for constraint: string
        if (!is_null($nVB) && !is_string($nVB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nVB)), __LINE__);
        }
        if (is_null($nVB) || (is_array($nVB) && empty($nVB))) {
            unset($this->NVB);
        } else {
            $this->NVB = $nVB;
        }
        return $this;
    }
    /**
     * Get Number value
     * @return int|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param int $number
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFareTKTSement
     */
    public function setNumber($number = null)
    {
        // validation for constraint: int
        if (!is_null($number) && !is_numeric($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get OriginalNumber value
     * @return int|null
     */
    public function getOriginalNumber()
    {
        return $this->OriginalNumber;
    }
    /**
     * Set OriginalNumber value
     * @param int $originalNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFareTKTSement
     */
    public function setOriginalNumber($originalNumber = null)
    {
        // validation for constraint: int
        if (!is_null($originalNumber) && !is_numeric($originalNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($originalNumber)), __LINE__);
        }
        $this->OriginalNumber = $originalNumber;
        return $this;
    }
    /**
     * Get StopIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStopIndicator()
    {
        return isset($this->StopIndicator) ? $this->StopIndicator : null;
    }
    /**
     * Set StopIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $stopIndicator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFareTKTSement
     */
    public function setStopIndicator($stopIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($stopIndicator) && !is_string($stopIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stopIndicator)), __LINE__);
        }
        if (is_null($stopIndicator) || (is_array($stopIndicator) && empty($stopIndicator))) {
            unset($this->StopIndicator);
        } else {
            $this->StopIndicator = $stopIndicator;
        }
        return $this;
    }
    /**
     * Get TicketStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTicketStatus()
    {
        return isset($this->TicketStatus) ? $this->TicketStatus : null;
    }
    /**
     * Set TicketStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ticketStatus
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFareTKTSement
     */
    public function setTicketStatus($ticketStatus = null)
    {
        // validation for constraint: string
        if (!is_null($ticketStatus) && !is_string($ticketStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketStatus)), __LINE__);
        }
        if (is_null($ticketStatus) || (is_array($ticketStatus) && empty($ticketStatus))) {
            unset($this->TicketStatus);
        } else {
            $this->TicketStatus = $ticketStatus;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFareTKTSement
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
