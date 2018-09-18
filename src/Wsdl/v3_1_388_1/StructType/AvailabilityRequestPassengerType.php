<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailabilityRequestPassengerType StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AvailabilityRequestPassengerType
 * @subpackage Structs
 */
class AvailabilityRequestPassengerType extends AbstractStructBase
{
    /**
     * The Number
     * @var int
     */
    public $Number;
    /**
     * The PassengerType
     * @var string
     */
    public $PassengerType;
    /**
     * Constructor method for AvailabilityRequestPassengerType
     * @uses AvailabilityRequestPassengerType::setNumber()
     * @uses AvailabilityRequestPassengerType::setPassengerType()
     * @param int $number
     * @param string $passengerType
     */
    public function __construct($number = null, $passengerType = null)
    {
        $this
            ->setNumber($number)
            ->setPassengerType($passengerType);
    }
    /**
     * Get Number value
     * @return int|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param int $number
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType
     */
    public function setNumber($number = null)
    {
        // validation for constraint: int
        if (!is_null($number) && !is_numeric($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityRequestPassengerType
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
