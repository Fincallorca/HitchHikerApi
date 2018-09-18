<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTicketInformationResponse StructType
 * @subpackage Structs
 */
class GetTicketInformationResponse extends AbstractStructBase
{
    /**
     * The GetTicketInformationResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseData
     */
    public $GetTicketInformationResult;
    /**
     * Constructor method for GetTicketInformationResponse
     * @uses GetTicketInformationResponse::setGetTicketInformationResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseData $getTicketInformationResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseData $getTicketInformationResult = null)
    {
        $this
            ->setGetTicketInformationResult($getTicketInformationResult);
    }
    /**
     * Get GetTicketInformationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseData|null
     */
    public function getGetTicketInformationResult()
    {
        return isset($this->GetTicketInformationResult) ? $this->GetTicketInformationResult : null;
    }
    /**
     * Set GetTicketInformationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseData $getTicketInformationResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTicketInformationResponse
     */
    public function setGetTicketInformationResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketResponseData $getTicketInformationResult = null)
    {
        if (is_null($getTicketInformationResult) || (is_array($getTicketInformationResult) && empty($getTicketInformationResult))) {
            unset($this->GetTicketInformationResult);
        } else {
            $this->GetTicketInformationResult = $getTicketInformationResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTicketInformationResponse
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
