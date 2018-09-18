<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NativeCommandResponse StructType
 * @subpackage Structs
 */
class NativeCommandResponse extends AbstractStructBase
{
    /**
     * The NativeCommandResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\NativeResponseData
     */
    public $NativeCommandResult;
    /**
     * Constructor method for NativeCommandResponse
     * @uses NativeCommandResponse::setNativeCommandResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\NativeResponseData $nativeCommandResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\NativeResponseData $nativeCommandResult = null)
    {
        $this
            ->setNativeCommandResult($nativeCommandResult);
    }
    /**
     * Get NativeCommandResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\NativeResponseData|null
     */
    public function getNativeCommandResult()
    {
        return isset($this->NativeCommandResult) ? $this->NativeCommandResult : null;
    }
    /**
     * Set NativeCommandResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\NativeResponseData $nativeCommandResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\NativeCommandResponse
     */
    public function setNativeCommandResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\NativeResponseData $nativeCommandResult = null)
    {
        if (is_null($nativeCommandResult) || (is_array($nativeCommandResult) && empty($nativeCommandResult))) {
            unset($this->NativeCommandResult);
        } else {
            $this->NativeCommandResult = $nativeCommandResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\NativeCommandResponse
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
