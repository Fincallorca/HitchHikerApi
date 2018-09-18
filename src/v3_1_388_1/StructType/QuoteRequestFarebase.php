<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuoteRequestFarebase StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QuoteRequestFarebase
 * @subpackage Structs
 */
class QuoteRequestFarebase extends AbstractStructBase
{
    /**
     * The PassengerType
     * @var string
     */
    public $PassengerType;
    /**
     * The PublishedFareFarebase
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $PublishedFareFarebase;
    /**
     * Constructor method for QuoteRequestFarebase
     * @uses QuoteRequestFarebase::setPassengerType()
     * @uses QuoteRequestFarebase::setPublishedFareFarebase()
     * @param string $passengerType
     * @param string $publishedFareFarebase
     */
    public function __construct($passengerType = null, $publishedFareFarebase = null)
    {
        $this
            ->setPassengerType($passengerType)
            ->setPublishedFareFarebase($publishedFareFarebase);
    }
    /**
     * Get PassengerType value
     * @return string|null
     */
    public function getPassengerType()
    {
        return $this->PassengerType;
    }
    /**
     * Set PassengerType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $passengerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase
     */
    public function setPassengerType($passengerType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($passengerType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $passengerType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
        }
        $this->PassengerType = $passengerType;
        return $this;
    }
    /**
     * Get PublishedFareFarebase value
     * @return string|null
     */
    public function getPublishedFareFarebase()
    {
        return $this->PublishedFareFarebase;
    }
    /**
     * Set PublishedFareFarebase value
     * @param string $publishedFareFarebase
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase
     */
    public function setPublishedFareFarebase($publishedFareFarebase = null)
    {
        // validation for constraint: string
        if (!is_null($publishedFareFarebase) && !is_string($publishedFareFarebase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($publishedFareFarebase)), __LINE__);
        }
        $this->PublishedFareFarebase = $publishedFareFarebase;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase
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
