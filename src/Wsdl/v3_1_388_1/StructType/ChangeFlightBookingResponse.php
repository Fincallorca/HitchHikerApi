<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeFlightBookingResponse StructType
 * @subpackage Structs
 */
class ChangeFlightBookingResponse extends AbstractStructBase
{
    /**
     * The ChangeFlightBookingResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData
     */
    public $ChangeFlightBookingResult;
    /**
     * Constructor method for ChangeFlightBookingResponse
     * @uses ChangeFlightBookingResponse::setChangeFlightBookingResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData $changeFlightBookingResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData $changeFlightBookingResult = null)
    {
        $this
            ->setChangeFlightBookingResult($changeFlightBookingResult);
    }
    /**
     * Get ChangeFlightBookingResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData|null
     */
    public function getChangeFlightBookingResult()
    {
        return isset($this->ChangeFlightBookingResult) ? $this->ChangeFlightBookingResult : null;
    }
    /**
     * Set ChangeFlightBookingResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData $changeFlightBookingResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightBookingResponse
     */
    public function setChangeFlightBookingResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookResponseData $changeFlightBookingResult = null)
    {
        if (is_null($changeFlightBookingResult) || (is_array($changeFlightBookingResult) && empty($changeFlightBookingResult))) {
            unset($this->ChangeFlightBookingResult);
        } else {
            $this->ChangeFlightBookingResult = $changeFlightBookingResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightBookingResponse
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
