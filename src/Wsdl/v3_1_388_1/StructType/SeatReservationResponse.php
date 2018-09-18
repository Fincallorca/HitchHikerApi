<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatReservationResponse StructType
 * @subpackage Structs
 */
class SeatReservationResponse extends AbstractStructBase
{
    /**
     * The SeatReservationResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseData
     */
    public $SeatReservationResult;
    /**
     * Constructor method for SeatReservationResponse
     * @uses SeatReservationResponse::setSeatReservationResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseData $seatReservationResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseData $seatReservationResult = null)
    {
        $this
            ->setSeatReservationResult($seatReservationResult);
    }
    /**
     * Get SeatReservationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseData|null
     */
    public function getSeatReservationResult()
    {
        return isset($this->SeatReservationResult) ? $this->SeatReservationResult : null;
    }
    /**
     * Set SeatReservationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseData $seatReservationResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatReservationResponse
     */
    public function setSeatReservationResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResResponseData $seatReservationResult = null)
    {
        if (is_null($seatReservationResult) || (is_array($seatReservationResult) && empty($seatReservationResult))) {
            unset($this->SeatReservationResult);
        } else {
            $this->SeatReservationResult = $seatReservationResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatReservationResponse
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
