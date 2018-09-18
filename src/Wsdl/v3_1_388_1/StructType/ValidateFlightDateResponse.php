<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateFlightDateResponse StructType
 * @subpackage Structs
 */
class ValidateFlightDateResponse extends AbstractStructBase
{
    /**
     * The ValidateFlightDateResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ValidateFlightDateResponseData
     */
    public $ValidateFlightDateResult;
    /**
     * Constructor method for ValidateFlightDateResponse
     * @uses ValidateFlightDateResponse::setValidateFlightDateResult()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ValidateFlightDateResponseData $validateFlightDateResult
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ValidateFlightDateResponseData $validateFlightDateResult = null)
    {
        $this
            ->setValidateFlightDateResult($validateFlightDateResult);
    }
    /**
     * Get ValidateFlightDateResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ValidateFlightDateResponseData|null
     */
    public function getValidateFlightDateResult()
    {
        return isset($this->ValidateFlightDateResult) ? $this->ValidateFlightDateResult : null;
    }
    /**
     * Set ValidateFlightDateResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ValidateFlightDateResponseData $validateFlightDateResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ValidateFlightDateResponse
     */
    public function setValidateFlightDateResult(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ValidateFlightDateResponseData $validateFlightDateResult = null)
    {
        if (is_null($validateFlightDateResult) || (is_array($validateFlightDateResult) && empty($validateFlightDateResult))) {
            unset($this->ValidateFlightDateResult);
        } else {
            $this->ValidateFlightDateResult = $validateFlightDateResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ValidateFlightDateResponse
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
