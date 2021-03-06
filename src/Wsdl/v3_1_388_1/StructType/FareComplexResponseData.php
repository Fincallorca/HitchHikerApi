<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareComplexResponseData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareComplexResponseData
 * @subpackage Structs
 */
class FareComplexResponseData extends AbstractStructBase
{
    /**
     * The Fares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFare
     */
    public $Fares;
    /**
     * The MCT
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MCTData
     */
    public $MCT;
    /**
     * The NumberOfFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfFares;
    /**
     * The ResponseInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails
     */
    public $ResponseInfo;
    /**
     * Constructor method for FareComplexResponseData
     * @uses FareComplexResponseData::setFares()
     * @uses FareComplexResponseData::setMCT()
     * @uses FareComplexResponseData::setNumberOfFares()
     * @uses FareComplexResponseData::setResponseInfo()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFare $fares
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MCTData $mCT
     * @param int $numberOfFares
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFare $fares = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MCTData $mCT = null, $numberOfFares = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo = null)
    {
        $this
            ->setFares($fares)
            ->setMCT($mCT)
            ->setNumberOfFares($numberOfFares)
            ->setResponseInfo($responseInfo);
    }
    /**
     * Get Fares value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFare|null
     */
    public function getFares()
    {
        return isset($this->Fares) ? $this->Fares : null;
    }
    /**
     * Set Fares value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFare $fares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseData
     */
    public function setFares(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFare $fares = null)
    {
        if (is_null($fares) || (is_array($fares) && empty($fares))) {
            unset($this->Fares);
        } else {
            $this->Fares = $fares;
        }
        return $this;
    }
    /**
     * Get MCT value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MCTData|null
     */
    public function getMCT()
    {
        return isset($this->MCT) ? $this->MCT : null;
    }
    /**
     * Set MCT value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MCTData $mCT
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseData
     */
    public function setMCT(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MCTData $mCT = null)
    {
        if (is_null($mCT) || (is_array($mCT) && empty($mCT))) {
            unset($this->MCT);
        } else {
            $this->MCT = $mCT;
        }
        return $this;
    }
    /**
     * Get NumberOfFares value
     * @return int|null
     */
    public function getNumberOfFares()
    {
        return $this->NumberOfFares;
    }
    /**
     * Set NumberOfFares value
     * @param int $numberOfFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseData
     */
    public function setNumberOfFares($numberOfFares = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfFares) && !is_numeric($numberOfFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfFares)), __LINE__);
        }
        $this->NumberOfFares = $numberOfFares;
        return $this;
    }
    /**
     * Get ResponseInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails|null
     */
    public function getResponseInfo()
    {
        return isset($this->ResponseInfo) ? $this->ResponseInfo : null;
    }
    /**
     * Set ResponseInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseData
     */
    public function setResponseInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo = null)
    {
        if (is_null($responseInfo) || (is_array($responseInfo) && empty($responseInfo))) {
            unset($this->ResponseInfo);
        } else {
            $this->ResponseInfo = $responseInfo;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseData
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
