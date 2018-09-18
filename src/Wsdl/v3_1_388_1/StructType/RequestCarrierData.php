<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCarrierData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RequestCarrierData
 * @subpackage Structs
 */
class RequestCarrierData extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Code;
    /**
     * The Exclude
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude;
    /**
     * The FareType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FareType;
    /**
     * Constructor method for RequestCarrierData
     * @uses RequestCarrierData::setCode()
     * @uses RequestCarrierData::setExclude()
     * @uses RequestCarrierData::setFareType()
     * @param string $code
     * @param bool $exclude
     * @param string $fareType
     */
    public function __construct($code = null, $exclude = null, $fareType = null)
    {
        $this
            ->setCode($code)
            ->setExclude($exclude)
            ->setFareType($fareType);
    }
    /**
     * Get Code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCode()
    {
        return isset($this->Code) ? $this->Code : null;
    }
    /**
     * Set Code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $code
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        if (is_null($code) || (is_array($code) && empty($code))) {
            unset($this->Code);
        } else {
            $this->Code = $code;
        }
        return $this;
    }
    /**
     * Get Exclude value
     * @return bool|null
     */
    public function getExclude()
    {
        return $this->Exclude;
    }
    /**
     * Set Exclude value
     * @param bool $exclude
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData
     */
    public function setExclude($exclude = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude) && !is_bool($exclude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exclude)), __LINE__);
        }
        $this->Exclude = $exclude;
        return $this;
    }
    /**
     * Get FareType value
     * @return string|null
     */
    public function getFareType()
    {
        return $this->FareType;
    }
    /**
     * Set FareType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fareType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData
     */
    public function setFareType($fareType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::valueIsValid($fareType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fareType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::getValidValues())), __LINE__);
        }
        $this->FareType = $fareType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData
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
