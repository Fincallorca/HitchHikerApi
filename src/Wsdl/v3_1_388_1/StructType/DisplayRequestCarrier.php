<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayRequestCarrier StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayRequestCarrier
 * @subpackage Structs
 */
class DisplayRequestCarrier extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
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
     * @var string
     */
    public $FareType;
    /**
     * Constructor method for DisplayRequestCarrier
     * @uses DisplayRequestCarrier::setCode()
     * @uses DisplayRequestCarrier::setExclude()
     * @uses DisplayRequestCarrier::setFareType()
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
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCarrier
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
