<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelTicketResponse StructType
 * @subpackage Structs
 */
class CancelTicketResponse extends AbstractStructBase
{
    /**
     * The CancelTicketResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseData
     */
    public $CancelTicketResult;
    /**
     * Constructor method for CancelTicketResponse
     * @uses CancelTicketResponse::setCancelTicketResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseData $cancelTicketResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseData $cancelTicketResult = null)
    {
        $this
            ->setCancelTicketResult($cancelTicketResult);
    }
    /**
     * Get CancelTicketResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseData|null
     */
    public function getCancelTicketResult()
    {
        return isset($this->CancelTicketResult) ? $this->CancelTicketResult : null;
    }
    /**
     * Set CancelTicketResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseData $cancelTicketResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponse
     */
    public function setCancelTicketResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseData $cancelTicketResult = null)
    {
        if (is_null($cancelTicketResult) || (is_array($cancelTicketResult) && empty($cancelTicketResult))) {
            unset($this->CancelTicketResult);
        } else {
            $this->CancelTicketResult = $cancelTicketResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponse
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
