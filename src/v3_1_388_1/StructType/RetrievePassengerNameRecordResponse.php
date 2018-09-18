<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrievePassengerNameRecordResponse StructType
 * @subpackage Structs
 */
class RetrievePassengerNameRecordResponse extends AbstractStructBase
{
    /**
     * The RetrievePassengerNameRecordResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData
     */
    public $RetrievePassengerNameRecordResult;
    /**
     * Constructor method for RetrievePassengerNameRecordResponse
     * @uses RetrievePassengerNameRecordResponse::setRetrievePassengerNameRecordResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData $retrievePassengerNameRecordResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData $retrievePassengerNameRecordResult = null)
    {
        $this
            ->setRetrievePassengerNameRecordResult($retrievePassengerNameRecordResult);
    }
    /**
     * Get RetrievePassengerNameRecordResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData|null
     */
    public function getRetrievePassengerNameRecordResult()
    {
        return isset($this->RetrievePassengerNameRecordResult) ? $this->RetrievePassengerNameRecordResult : null;
    }
    /**
     * Set RetrievePassengerNameRecordResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData $retrievePassengerNameRecordResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RetrievePassengerNameRecordResponse
     */
    public function setRetrievePassengerNameRecordResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseData $retrievePassengerNameRecordResult = null)
    {
        if (is_null($retrievePassengerNameRecordResult) || (is_array($retrievePassengerNameRecordResult) && empty($retrievePassengerNameRecordResult))) {
            unset($this->RetrievePassengerNameRecordResult);
        } else {
            $this->RetrievePassengerNameRecordResult = $retrievePassengerNameRecordResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RetrievePassengerNameRecordResponse
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
