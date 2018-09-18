<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatResSegmentData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SeatResSegmentData
 * @subpackage Structs
 */
class SeatResSegmentData extends AbstractStructBase
{
    /**
     * The OriginalSegmentNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $OriginalSegmentNumber;
    /**
     * The Seats
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatData
     */
    public $Seats;
    /**
     * Constructor method for SeatResSegmentData
     * @uses SeatResSegmentData::setOriginalSegmentNumber()
     * @uses SeatResSegmentData::setSeats()
     * @param string $originalSegmentNumber
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatData $seats
     */
    public function __construct($originalSegmentNumber = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatData $seats = null)
    {
        $this
            ->setOriginalSegmentNumber($originalSegmentNumber)
            ->setSeats($seats);
    }
    /**
     * Get OriginalSegmentNumber value
     * @return string|null
     */
    public function getOriginalSegmentNumber()
    {
        return $this->OriginalSegmentNumber;
    }
    /**
     * Set OriginalSegmentNumber value
     * @param string $originalSegmentNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData
     */
    public function setOriginalSegmentNumber($originalSegmentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($originalSegmentNumber) && !is_string($originalSegmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalSegmentNumber)), __LINE__);
        }
        $this->OriginalSegmentNumber = $originalSegmentNumber;
        return $this;
    }
    /**
     * Get Seats value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatData|null
     */
    public function getSeats()
    {
        return $this->Seats;
    }
    /**
     * Set Seats value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatData $seats
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData
     */
    public function setSeats(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatResSeatData $seats = null)
    {
        $this->Seats = $seats;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSegmentData
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
