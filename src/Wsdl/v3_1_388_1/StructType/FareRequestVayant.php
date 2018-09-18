<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRequestVayant StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareRequestVayant
 * @subpackage Structs
 */
class FareRequestVayant extends RequestVayantData
{
    /**
     * The CheckAvailability
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CheckAvailability;
    /**
     * Constructor method for FareRequestVayant
     * @uses FareRequestVayant::setCheckAvailability()
     * @param string $checkAvailability
     */
    public function __construct($checkAvailability = null)
    {
        $this
            ->setCheckAvailability($checkAvailability);
    }
    /**
     * Get CheckAvailability value
     * @return string|null
     */
    public function getCheckAvailability()
    {
        return $this->CheckAvailability;
    }
    /**
     * Set CheckAvailability value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckAvailabilityEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckAvailabilityEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkAvailability
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestVayant
     */
    public function setCheckAvailability($checkAvailability = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckAvailabilityEnum::valueIsValid($checkAvailability)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $checkAvailability, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckAvailabilityEnum::getValidValues())), __LINE__);
        }
        $this->CheckAvailability = $checkAvailability;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestVayant
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
