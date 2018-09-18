<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCalendarDisplayResponse StructType
 * @subpackage Structs
 */
class GetCalendarDisplayResponse extends AbstractStructBase
{
    /**
     * The GetCalendarDisplayResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseData
     */
    public $GetCalendarDisplayResult;
    /**
     * Constructor method for GetCalendarDisplayResponse
     * @uses GetCalendarDisplayResponse::setGetCalendarDisplayResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseData $getCalendarDisplayResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseData $getCalendarDisplayResult = null)
    {
        $this
            ->setGetCalendarDisplayResult($getCalendarDisplayResult);
    }
    /**
     * Get GetCalendarDisplayResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseData|null
     */
    public function getGetCalendarDisplayResult()
    {
        return isset($this->GetCalendarDisplayResult) ? $this->GetCalendarDisplayResult : null;
    }
    /**
     * Set GetCalendarDisplayResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseData $getCalendarDisplayResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetCalendarDisplayResponse
     */
    public function setGetCalendarDisplayResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseData $getCalendarDisplayResult = null)
    {
        if (is_null($getCalendarDisplayResult) || (is_array($getCalendarDisplayResult) && empty($getCalendarDisplayResult))) {
            unset($this->GetCalendarDisplayResult);
        } else {
            $this->GetCalendarDisplayResult = $getCalendarDisplayResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetCalendarDisplayResponse
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
