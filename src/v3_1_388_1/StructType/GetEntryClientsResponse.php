<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEntryClientsResponse StructType
 * @subpackage Structs
 */
class GetEntryClientsResponse extends AbstractStructBase
{
    /**
     * The GetEntryClientsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfEntryClient
     */
    public $GetEntryClientsResult;
    /**
     * Constructor method for GetEntryClientsResponse
     * @uses GetEntryClientsResponse::setGetEntryClientsResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfEntryClient $getEntryClientsResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfEntryClient $getEntryClientsResult = null)
    {
        $this
            ->setGetEntryClientsResult($getEntryClientsResult);
    }
    /**
     * Get GetEntryClientsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfEntryClient|null
     */
    public function getGetEntryClientsResult()
    {
        return isset($this->GetEntryClientsResult) ? $this->GetEntryClientsResult : null;
    }
    /**
     * Set GetEntryClientsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfEntryClient $getEntryClientsResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetEntryClientsResponse
     */
    public function setGetEntryClientsResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfEntryClient $getEntryClientsResult = null)
    {
        if (is_null($getEntryClientsResult) || (is_array($getEntryClientsResult) && empty($getEntryClientsResult))) {
            unset($this->GetEntryClientsResult);
        } else {
            $this->GetEntryClientsResult = $getEntryClientsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetEntryClientsResponse
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
