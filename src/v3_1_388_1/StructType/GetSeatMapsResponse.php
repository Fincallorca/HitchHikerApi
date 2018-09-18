<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSeatMapsResponse StructType
 * @subpackage Structs
 */
class GetSeatMapsResponse extends AbstractStructBase
{
    /**
     * The GetSeatMapsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapResponseData
     */
    public $GetSeatMapsResult;
    /**
     * Constructor method for GetSeatMapsResponse
     * @uses GetSeatMapsResponse::setGetSeatMapsResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapResponseData $getSeatMapsResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapResponseData $getSeatMapsResult = null)
    {
        $this
            ->setGetSeatMapsResult($getSeatMapsResult);
    }
    /**
     * Get GetSeatMapsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapResponseData|null
     */
    public function getGetSeatMapsResult()
    {
        return isset($this->GetSeatMapsResult) ? $this->GetSeatMapsResult : null;
    }
    /**
     * Set GetSeatMapsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapResponseData $getSeatMapsResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetSeatMapsResponse
     */
    public function setGetSeatMapsResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapResponseData $getSeatMapsResult = null)
    {
        if (is_null($getSeatMapsResult) || (is_array($getSeatMapsResult) && empty($getSeatMapsResult))) {
            unset($this->GetSeatMapsResult);
        } else {
            $this->GetSeatMapsResult = $getSeatMapsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetSeatMapsResponse
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
