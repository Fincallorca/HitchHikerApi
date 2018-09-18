<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookRequestSeatData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BookRequestSeatData
 * @subpackage Structs
 */
class BookRequestSeatData extends AbstractStructBase
{
    /**
     * The SeatNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $SeatNumber;
    /**
     * The SeatRow
     * @var int
     */
    public $SeatRow;
    /**
     * The SegmentIndex
     * @var int
     */
    public $SegmentIndex;
    /**
     * Constructor method for BookRequestSeatData
     * @uses BookRequestSeatData::setSeatNumber()
     * @uses BookRequestSeatData::setSeatRow()
     * @uses BookRequestSeatData::setSegmentIndex()
     * @param string $seatNumber
     * @param int $seatRow
     * @param int $segmentIndex
     */
    public function __construct($seatNumber = null, $seatRow = null, $segmentIndex = null)
    {
        $this
            ->setSeatNumber($seatNumber)
            ->setSeatRow($seatRow)
            ->setSegmentIndex($segmentIndex);
    }
    /**
     * Get SeatNumber value
     * @return string|null
     */
    public function getSeatNumber()
    {
        return $this->SeatNumber;
    }
    /**
     * Set SeatNumber value
     * @param string $seatNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSeatData
     */
    public function setSeatNumber($seatNumber = null)
    {
        // validation for constraint: string
        if (!is_null($seatNumber) && !is_string($seatNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatNumber)), __LINE__);
        }
        $this->SeatNumber = $seatNumber;
        return $this;
    }
    /**
     * Get SeatRow value
     * @return int|null
     */
    public function getSeatRow()
    {
        return $this->SeatRow;
    }
    /**
     * Set SeatRow value
     * @param int $seatRow
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSeatData
     */
    public function setSeatRow($seatRow = null)
    {
        // validation for constraint: int
        if (!is_null($seatRow) && !is_numeric($seatRow)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($seatRow)), __LINE__);
        }
        $this->SeatRow = $seatRow;
        return $this;
    }
    /**
     * Get SegmentIndex value
     * @return int|null
     */
    public function getSegmentIndex()
    {
        return $this->SegmentIndex;
    }
    /**
     * Set SegmentIndex value
     * @param int $segmentIndex
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSeatData
     */
    public function setSegmentIndex($segmentIndex = null)
    {
        // validation for constraint: int
        if (!is_null($segmentIndex) && !is_numeric($segmentIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($segmentIndex)), __LINE__);
        }
        $this->SegmentIndex = $segmentIndex;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestSeatData
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
