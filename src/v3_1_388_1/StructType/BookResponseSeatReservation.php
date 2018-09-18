<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookResponseSeatReservation StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BookResponseSeatReservation
 * @subpackage Structs
 */
class BookResponseSeatReservation extends AbstractStructBase
{
    /**
     * The SeatColumn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SeatColumn;
    /**
     * The SeatRow
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SeatRow;
    /**
     * The SegmentIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SegmentIndex;
    /**
     * Constructor method for BookResponseSeatReservation
     * @uses BookResponseSeatReservation::setSeatColumn()
     * @uses BookResponseSeatReservation::setSeatRow()
     * @uses BookResponseSeatReservation::setSegmentIndex()
     * @param string $seatColumn
     * @param int $seatRow
     * @param int $segmentIndex
     */
    public function __construct($seatColumn = null, $seatRow = null, $segmentIndex = null)
    {
        $this
            ->setSeatColumn($seatColumn)
            ->setSeatRow($seatRow)
            ->setSegmentIndex($segmentIndex);
    }
    /**
     * Get SeatColumn value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSeatColumn()
    {
        return isset($this->SeatColumn) ? $this->SeatColumn : null;
    }
    /**
     * Set SeatColumn value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $seatColumn
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation
     */
    public function setSeatColumn($seatColumn = null)
    {
        // validation for constraint: string
        if (!is_null($seatColumn) && !is_string($seatColumn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatColumn)), __LINE__);
        }
        if (is_null($seatColumn) || (is_array($seatColumn) && empty($seatColumn))) {
            unset($this->SeatColumn);
        } else {
            $this->SeatColumn = $seatColumn;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseSeatReservation
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
