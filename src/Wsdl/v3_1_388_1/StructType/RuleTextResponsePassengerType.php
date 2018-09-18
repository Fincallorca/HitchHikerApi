<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleTextResponsePassengerType StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RuleTextResponsePassengerType
 * @subpackage Structs
 */
class RuleTextResponsePassengerType extends AbstractStructBase
{
    /**
     * The PassengerTypeCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PassengerTypeCode;
    /**
     * The PassengerTypeName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerTypeName;
    /**
     * Constructor method for RuleTextResponsePassengerType
     * @uses RuleTextResponsePassengerType::setPassengerTypeCode()
     * @uses RuleTextResponsePassengerType::setPassengerTypeName()
     * @param string $passengerTypeCode
     * @param string $passengerTypeName
     */
    public function __construct($passengerTypeCode = null, $passengerTypeName = null)
    {
        $this
            ->setPassengerTypeCode($passengerTypeCode)
            ->setPassengerTypeName($passengerTypeName);
    }
    /**
     * Get PassengerTypeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassengerTypeCode()
    {
        return isset($this->PassengerTypeCode) ? $this->PassengerTypeCode : null;
    }
    /**
     * Set PassengerTypeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passengerTypeCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType
     */
    public function setPassengerTypeCode($passengerTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($passengerTypeCode) && !is_string($passengerTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerTypeCode)), __LINE__);
        }
        if (is_null($passengerTypeCode) || (is_array($passengerTypeCode) && empty($passengerTypeCode))) {
            unset($this->PassengerTypeCode);
        } else {
            $this->PassengerTypeCode = $passengerTypeCode;
        }
        return $this;
    }
    /**
     * Get PassengerTypeName value
     * @return string|null
     */
    public function getPassengerTypeName()
    {
        return $this->PassengerTypeName;
    }
    /**
     * Set PassengerTypeName value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $passengerTypeName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType
     */
    public function setPassengerTypeName($passengerTypeName = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($passengerTypeName)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $passengerTypeName, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
        }
        $this->PassengerTypeName = $passengerTypeName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleTextResponsePassengerType
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
