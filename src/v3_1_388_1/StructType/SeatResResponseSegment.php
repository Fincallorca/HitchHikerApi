<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatResResponseSegment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SeatResResponseSegment
 * @subpackage Structs
 */
class SeatResResponseSegment extends AbstractStructBase
{
    /**
     * The OriginalSegmentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OriginalSegmentNumber;
    /**
     * The SeatStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatStatus
     */
    public $SeatStatus;
    /**
     * Constructor method for SeatResResponseSegment
     * @uses SeatResResponseSegment::setOriginalSegmentNumber()
     * @uses SeatResResponseSegment::setSeatStatus()
     * @param string $originalSegmentNumber
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatStatus $seatStatus
     */
    public function __construct($originalSegmentNumber = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatStatus $seatStatus = null)
    {
        $this
            ->setOriginalSegmentNumber($originalSegmentNumber)
            ->setSeatStatus($seatStatus);
    }
    /**
     * Get OriginalSegmentNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOriginalSegmentNumber()
    {
        return isset($this->OriginalSegmentNumber) ? $this->OriginalSegmentNumber : null;
    }
    /**
     * Set OriginalSegmentNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $originalSegmentNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment
     */
    public function setOriginalSegmentNumber($originalSegmentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($originalSegmentNumber) && !is_string($originalSegmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalSegmentNumber)), __LINE__);
        }
        if (is_null($originalSegmentNumber) || (is_array($originalSegmentNumber) && empty($originalSegmentNumber))) {
            unset($this->OriginalSegmentNumber);
        } else {
            $this->OriginalSegmentNumber = $originalSegmentNumber;
        }
        return $this;
    }
    /**
     * Get SeatStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatStatus|null
     */
    public function getSeatStatus()
    {
        return isset($this->SeatStatus) ? $this->SeatStatus : null;
    }
    /**
     * Set SeatStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatStatus $seatStatus
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment
     */
    public function setSeatStatus(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatStatus $seatStatus = null)
    {
        if (is_null($seatStatus) || (is_array($seatStatus) && empty($seatStatus))) {
            unset($this->SeatStatus);
        } else {
            $this->SeatStatus = $seatStatus;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseSegment
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
