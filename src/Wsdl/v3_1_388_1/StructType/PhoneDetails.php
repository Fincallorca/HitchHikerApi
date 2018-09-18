<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneDetails StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PhoneDetails
 * @subpackage Structs
 */
class PhoneDetails extends AbstractStructBase
{
    /**
     * The Area
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Area;
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CountryCode;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Number;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * Constructor method for PhoneDetails
     * @uses PhoneDetails::setArea()
     * @uses PhoneDetails::setCountryCode()
     * @uses PhoneDetails::setNumber()
     * @uses PhoneDetails::setType()
     * @param string $area
     * @param string $countryCode
     * @param string $number
     * @param string $type
     */
    public function __construct($area = null, $countryCode = null, $number = null, $type = null)
    {
        $this
            ->setArea($area)
            ->setCountryCode($countryCode)
            ->setNumber($number)
            ->setType($type);
    }
    /**
     * Get Area value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getArea()
    {
        return isset($this->Area) ? $this->Area : null;
    }
    /**
     * Set Area value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $area
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails
     */
    public function setArea($area = null)
    {
        // validation for constraint: string
        if (!is_null($area) && !is_string($area)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($area)), __LINE__);
        }
        if (is_null($area) || (is_array($area) && empty($area))) {
            unset($this->Area);
        } else {
            $this->Area = $area;
        }
        return $this;
    }
    /**
     * Get CountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountryCode()
    {
        return isset($this->CountryCode) ? $this->CountryCode : null;
    }
    /**
     * Set CountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $countryCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        if (is_null($countryCode) || (is_array($countryCode) && empty($countryCode))) {
            unset($this->CountryCode);
        } else {
            $this->CountryCode = $countryCode;
        }
        return $this;
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ContactTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ContactTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ContactTypeEnum::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ContactTypeEnum::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails
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
