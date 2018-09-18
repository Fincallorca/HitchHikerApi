<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRResponseSeatPreferrence StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PNRResponseSeatPreferrence
 * @subpackage Structs
 */
class PNRResponseSeatPreferrence extends AbstractStructBase
{
    /**
     * The Preference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Preference;
    /**
     * The Row
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Row;
    /**
     * The Seat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Seat;
    /**
     * The SegmentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $SegmentNumber;
    /**
     * Constructor method for PNRResponseSeatPreferrence
     * @uses PNRResponseSeatPreferrence::setPreference()
     * @uses PNRResponseSeatPreferrence::setRow()
     * @uses PNRResponseSeatPreferrence::setSeat()
     * @uses PNRResponseSeatPreferrence::setSegmentNumber()
     * @param string $preference
     * @param string $row
     * @param string $seat
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $segmentNumber
     */
    public function __construct($preference = null, $row = null, $seat = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $segmentNumber = null)
    {
        $this
            ->setPreference($preference)
            ->setRow($row)
            ->setSeat($seat)
            ->setSegmentNumber($segmentNumber);
    }
    /**
     * Get Preference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPreference()
    {
        return isset($this->Preference) ? $this->Preference : null;
    }
    /**
     * Set Preference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $preference
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence
     */
    public function setPreference($preference = null)
    {
        // validation for constraint: string
        if (!is_null($preference) && !is_string($preference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($preference)), __LINE__);
        }
        if (is_null($preference) || (is_array($preference) && empty($preference))) {
            unset($this->Preference);
        } else {
            $this->Preference = $preference;
        }
        return $this;
    }
    /**
     * Get Row value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRow()
    {
        return isset($this->Row) ? $this->Row : null;
    }
    /**
     * Set Row value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $row
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence
     */
    public function setRow($row = null)
    {
        // validation for constraint: string
        if (!is_null($row) && !is_string($row)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($row)), __LINE__);
        }
        if (is_null($row) || (is_array($row) && empty($row))) {
            unset($this->Row);
        } else {
            $this->Row = $row;
        }
        return $this;
    }
    /**
     * Get Seat value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSeat()
    {
        return isset($this->Seat) ? $this->Seat : null;
    }
    /**
     * Set Seat value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $seat
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence
     */
    public function setSeat($seat = null)
    {
        // validation for constraint: string
        if (!is_null($seat) && !is_string($seat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seat)), __LINE__);
        }
        if (is_null($seat) || (is_array($seat) && empty($seat))) {
            unset($this->Seat);
        } else {
            $this->Seat = $seat;
        }
        return $this;
    }
    /**
     * Get SegmentNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getSegmentNumber()
    {
        return isset($this->SegmentNumber) ? $this->SegmentNumber : null;
    }
    /**
     * Set SegmentNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $segmentNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence
     */
    public function setSegmentNumber(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $segmentNumber = null)
    {
        if (is_null($segmentNumber) || (is_array($segmentNumber) && empty($segmentNumber))) {
            unset($this->SegmentNumber);
        } else {
            $this->SegmentNumber = $segmentNumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence
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
