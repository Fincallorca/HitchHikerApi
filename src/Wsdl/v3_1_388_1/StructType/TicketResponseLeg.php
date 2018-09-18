<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketResponseLeg StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketResponseLeg
 * @subpackage Structs
 */
class TicketResponseLeg extends AbstractStructBase
{
    /**
     * The Direction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Direction;
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
     * The Passengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponsePassenger
     */
    public $Passengers;
    /**
     * Constructor method for TicketResponseLeg
     * @uses TicketResponseLeg::setDirection()
     * @uses TicketResponseLeg::setNVA()
     * @uses TicketResponseLeg::setNVALast()
     * @uses TicketResponseLeg::setNVB()
     * @uses TicketResponseLeg::setNVBFirst()
     * @uses TicketResponseLeg::setPassengers()
     * @param string $direction
     * @param string $nVA
     * @param string $nVALast
     * @param string $nVB
     * @param string $nVBFirst
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponsePassenger $passengers
     */
    public function __construct($direction = null, $nVA = null, $nVALast = null, $nVB = null, $nVBFirst = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponsePassenger $passengers = null)
    {
        $this
            ->setDirection($direction)
            ->setNVA($nVA)
            ->setNVALast($nVALast)
            ->setNVB($nVB)
            ->setNVBFirst($nVBFirst)
            ->setPassengers($passengers);
    }
    /**
     * Get Direction value
     * @return string|null
     */
    public function getDirection()
    {
        return $this->Direction;
    }
    /**
     * Set Direction value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DirectionEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DirectionEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $direction
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg
     */
    public function setDirection($direction = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DirectionEnum::valueIsValid($direction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $direction, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\DirectionEnum::getValidValues())), __LINE__);
        }
        $this->Direction = $direction;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg
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
     * Get Passengers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponsePassenger|null
     */
    public function getPassengers()
    {
        return isset($this->Passengers) ? $this->Passengers : null;
    }
    /**
     * Set Passengers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponsePassenger $passengers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg
     */
    public function setPassengers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTicketResponsePassenger $passengers = null)
    {
        if (is_null($passengers) || (is_array($passengers) && empty($passengers))) {
            unset($this->Passengers);
        } else {
            $this->Passengers = $passengers;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseLeg
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
