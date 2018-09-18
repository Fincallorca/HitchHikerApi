<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRequestPassenger StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareRequestPassenger
 * @subpackage Structs
 */
class FareRequestPassenger extends AbstractStructBase
{
    /**
     * The DOB
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DOB;
    /**
     * The ForcePassengerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ForcePassengerType;
    /**
     * The Number
     * @var int
     */
    public $Number;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * Constructor method for FareRequestPassenger
     * @uses FareRequestPassenger::setDOB()
     * @uses FareRequestPassenger::setForcePassengerType()
     * @uses FareRequestPassenger::setNumber()
     * @uses FareRequestPassenger::setType()
     * @param string $dOB
     * @param bool $forcePassengerType
     * @param int $number
     * @param string $type
     */
    public function __construct($dOB = null, $forcePassengerType = null, $number = null, $type = null)
    {
        $this
            ->setDOB($dOB)
            ->setForcePassengerType($forcePassengerType)
            ->setNumber($number)
            ->setType($type);
    }
    /**
     * Get DOB value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDOB()
    {
        return isset($this->DOB) ? $this->DOB : null;
    }
    /**
     * Set DOB value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dOB
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger
     */
    public function setDOB($dOB = null)
    {
        // validation for constraint: string
        if (!is_null($dOB) && !is_string($dOB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dOB)), __LINE__);
        }
        if (is_null($dOB) || (is_array($dOB) && empty($dOB))) {
            unset($this->DOB);
        } else {
            $this->DOB = $dOB;
        }
        return $this;
    }
    /**
     * Get ForcePassengerType value
     * @return bool|null
     */
    public function getForcePassengerType()
    {
        return $this->ForcePassengerType;
    }
    /**
     * Set ForcePassengerType value
     * @param bool $forcePassengerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger
     */
    public function setForcePassengerType($forcePassengerType = null)
    {
        // validation for constraint: boolean
        if (!is_null($forcePassengerType) && !is_bool($forcePassengerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($forcePassengerType)), __LINE__);
        }
        $this->ForcePassengerType = $forcePassengerType;
        return $this;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger
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
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestPassenger
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
