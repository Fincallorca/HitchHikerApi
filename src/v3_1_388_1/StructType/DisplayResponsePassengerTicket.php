<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayResponsePassengerTicket StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayResponsePassengerTicket
 * @subpackage Structs
 */
class DisplayResponsePassengerTicket extends AbstractStructBase
{
    /**
     * The Baggage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Baggage;
    /**
     * The FareBase
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareBase;
    /**
     * The NVA
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NVA;
    /**
     * The NVALast
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NVALast;
    /**
     * The NVB
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NVB;
    /**
     * The NVBFirst
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NVBFirst;
    /**
     * The PassengerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerType;
    /**
     * The Tourcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Tourcode;
    /**
     * Constructor method for DisplayResponsePassengerTicket
     * @uses DisplayResponsePassengerTicket::setBaggage()
     * @uses DisplayResponsePassengerTicket::setFareBase()
     * @uses DisplayResponsePassengerTicket::setNVA()
     * @uses DisplayResponsePassengerTicket::setNVALast()
     * @uses DisplayResponsePassengerTicket::setNVB()
     * @uses DisplayResponsePassengerTicket::setNVBFirst()
     * @uses DisplayResponsePassengerTicket::setPassengerType()
     * @uses DisplayResponsePassengerTicket::setTourcode()
     * @param string $baggage
     * @param string $fareBase
     * @param string $nVA
     * @param string $nVALast
     * @param string $nVB
     * @param string $nVBFirst
     * @param string $passengerType
     * @param string $tourcode
     */
    public function __construct($baggage = null, $fareBase = null, $nVA = null, $nVALast = null, $nVB = null, $nVBFirst = null, $passengerType = null, $tourcode = null)
    {
        $this
            ->setBaggage($baggage)
            ->setFareBase($fareBase)
            ->setNVA($nVA)
            ->setNVALast($nVALast)
            ->setNVB($nVB)
            ->setNVBFirst($nVBFirst)
            ->setPassengerType($passengerType)
            ->setTourcode($tourcode);
    }
    /**
     * Get Baggage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBaggage()
    {
        return isset($this->Baggage) ? $this->Baggage : null;
    }
    /**
     * Set Baggage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $baggage
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket
     */
    public function setBaggage($baggage = null)
    {
        // validation for constraint: string
        if (!is_null($baggage) && !is_string($baggage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($baggage)), __LINE__);
        }
        if (is_null($baggage) || (is_array($baggage) && empty($baggage))) {
            unset($this->Baggage);
        } else {
            $this->Baggage = $baggage;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket
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
     * Get NVALast value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNVALast()
    {
        return isset($this->NVALast) ? $this->NVALast : null;
    }
    /**
     * Set NVALast value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nVALast
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket
     */
    public function setNVALast($nVALast = null)
    {
        // validation for constraint: string
        if (!is_null($nVALast) && !is_string($nVALast)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nVALast)), __LINE__);
        }
        if (is_null($nVALast) || (is_array($nVALast) && empty($nVALast))) {
            unset($this->NVALast);
        } else {
            $this->NVALast = $nVALast;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket
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
     * Get NVBFirst value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNVBFirst()
    {
        return isset($this->NVBFirst) ? $this->NVBFirst : null;
    }
    /**
     * Set NVBFirst value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nVBFirst
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket
     */
    public function setNVBFirst($nVBFirst = null)
    {
        // validation for constraint: string
        if (!is_null($nVBFirst) && !is_string($nVBFirst)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nVBFirst)), __LINE__);
        }
        if (is_null($nVBFirst) || (is_array($nVBFirst) && empty($nVBFirst))) {
            unset($this->NVBFirst);
        } else {
            $this->NVBFirst = $nVBFirst;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassengerTicket
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
