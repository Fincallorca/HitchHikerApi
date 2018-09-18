<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrowseQueueResponse StructType
 * @subpackage Structs
 */
class BrowseQueueResponse extends AbstractStructBase
{
    /**
     * The BrowseQueueResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseData
     */
    public $BrowseQueueResult;
    /**
     * Constructor method for BrowseQueueResponse
     * @uses BrowseQueueResponse::setBrowseQueueResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseData $browseQueueResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseData $browseQueueResult = null)
    {
        $this
            ->setBrowseQueueResult($browseQueueResult);
    }
    /**
     * Get BrowseQueueResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseData|null
     */
    public function getBrowseQueueResult()
    {
        return isset($this->BrowseQueueResult) ? $this->BrowseQueueResult : null;
    }
    /**
     * Set BrowseQueueResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseData $browseQueueResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseQueueResponse
     */
    public function setBrowseQueueResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseData $browseQueueResult = null)
    {
        if (is_null($browseQueueResult) || (is_array($browseQueueResult) && empty($browseQueueResult))) {
            unset($this->BrowseQueueResult);
        } else {
            $this->BrowseQueueResult = $browseQueueResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseQueueResponse
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
