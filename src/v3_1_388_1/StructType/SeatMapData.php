<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatMapData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SeatMapData
 * @subpackage Structs
 */
class SeatMapData extends AbstractStructBase
{
    /**
     * The FlightSegment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData
     */
    public $FlightSegment;
    /**
     * The SeatMapDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapDetailData
     */
    public $SeatMapDetails;
    /**
     * The SeatMapSurcharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapSurchargeDetail
     */
    public $SeatMapSurcharges;
    /**
     * Constructor method for SeatMapData
     * @uses SeatMapData::setFlightSegment()
     * @uses SeatMapData::setSeatMapDetails()
     * @uses SeatMapData::setSeatMapSurcharges()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData $flightSegment
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapDetailData $seatMapDetails
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapSurchargeDetail $seatMapSurcharges
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData $flightSegment = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapDetailData $seatMapDetails = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapSurchargeDetail $seatMapSurcharges = null)
    {
        $this
            ->setFlightSegment($flightSegment)
            ->setSeatMapDetails($seatMapDetails)
            ->setSeatMapSurcharges($seatMapSurcharges);
    }
    /**
     * Get FlightSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData|null
     */
    public function getFlightSegment()
    {
        return isset($this->FlightSegment) ? $this->FlightSegment : null;
    }
    /**
     * Set FlightSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData $flightSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapData
     */
    public function setFlightSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSegmentData $flightSegment = null)
    {
        if (is_null($flightSegment) || (is_array($flightSegment) && empty($flightSegment))) {
            unset($this->FlightSegment);
        } else {
            $this->FlightSegment = $flightSegment;
        }
        return $this;
    }
    /**
     * Get SeatMapDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapDetailData|null
     */
    public function getSeatMapDetails()
    {
        return isset($this->SeatMapDetails) ? $this->SeatMapDetails : null;
    }
    /**
     * Set SeatMapDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapDetailData $seatMapDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapData
     */
    public function setSeatMapDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapDetailData $seatMapDetails = null)
    {
        if (is_null($seatMapDetails) || (is_array($seatMapDetails) && empty($seatMapDetails))) {
            unset($this->SeatMapDetails);
        } else {
            $this->SeatMapDetails = $seatMapDetails;
        }
        return $this;
    }
    /**
     * Get SeatMapSurcharges value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapSurchargeDetail|null
     */
    public function getSeatMapSurcharges()
    {
        return isset($this->SeatMapSurcharges) ? $this->SeatMapSurcharges : null;
    }
    /**
     * Set SeatMapSurcharges value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapSurchargeDetail $seatMapSurcharges
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapData
     */
    public function setSeatMapSurcharges(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapSurchargeDetail $seatMapSurcharges = null)
    {
        if (is_null($seatMapSurcharges) || (is_array($seatMapSurcharges) && empty($seatMapSurcharges))) {
            unset($this->SeatMapSurcharges);
        } else {
            $this->SeatMapSurcharges = $seatMapSurcharges;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapData
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
