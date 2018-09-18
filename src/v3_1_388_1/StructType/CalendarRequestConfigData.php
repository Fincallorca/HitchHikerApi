<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalendarRequestConfigData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CalendarRequestConfigData
 * @subpackage Structs
 */
class CalendarRequestConfigData extends RequestConfigurationData
{
    /**
     * The FixedStay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FixedStay;
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LanguageCode;
    /**
     * The NumberOfFaresPerCell
     * @var int
     */
    public $NumberOfFaresPerCell;
    /**
     * The RestrictOvernight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RestrictOvernight;
    /**
     * The ReturnNonStopFlightsOnly
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReturnNonStopFlightsOnly;
    /**
     * Constructor method for CalendarRequestConfigData
     * @uses CalendarRequestConfigData::setFixedStay()
     * @uses CalendarRequestConfigData::setLanguageCode()
     * @uses CalendarRequestConfigData::setNumberOfFaresPerCell()
     * @uses CalendarRequestConfigData::setRestrictOvernight()
     * @uses CalendarRequestConfigData::setReturnNonStopFlightsOnly()
     * @param bool $fixedStay
     * @param string $languageCode
     * @param int $numberOfFaresPerCell
     * @param int $restrictOvernight
     * @param string $returnNonStopFlightsOnly
     */
    public function __construct($fixedStay = null, $languageCode = null, $numberOfFaresPerCell = null, $restrictOvernight = null, $returnNonStopFlightsOnly = null)
    {
        $this
            ->setFixedStay($fixedStay)
            ->setLanguageCode($languageCode)
            ->setNumberOfFaresPerCell($numberOfFaresPerCell)
            ->setRestrictOvernight($restrictOvernight)
            ->setReturnNonStopFlightsOnly($returnNonStopFlightsOnly);
    }
    /**
     * Get FixedStay value
     * @return bool|null
     */
    public function getFixedStay()
    {
        return $this->FixedStay;
    }
    /**
     * Set FixedStay value
     * @param bool $fixedStay
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarRequestConfigData
     */
    public function setFixedStay($fixedStay = null)
    {
        // validation for constraint: boolean
        if (!is_null($fixedStay) && !is_bool($fixedStay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fixedStay)), __LINE__);
        }
        $this->FixedStay = $fixedStay;
        return $this;
    }
    /**
     * Get LanguageCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLanguageCode()
    {
        return isset($this->LanguageCode) ? $this->LanguageCode : null;
    }
    /**
     * Set LanguageCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $languageCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarRequestConfigData
     */
    public function setLanguageCode($languageCode = null)
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($languageCode)), __LINE__);
        }
        if (is_null($languageCode) || (is_array($languageCode) && empty($languageCode))) {
            unset($this->LanguageCode);
        } else {
            $this->LanguageCode = $languageCode;
        }
        return $this;
    }
    /**
     * Get NumberOfFaresPerCell value
     * @return int|null
     */
    public function getNumberOfFaresPerCell()
    {
        return $this->NumberOfFaresPerCell;
    }
    /**
     * Set NumberOfFaresPerCell value
     * @param int $numberOfFaresPerCell
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarRequestConfigData
     */
    public function setNumberOfFaresPerCell($numberOfFaresPerCell = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfFaresPerCell) && !is_numeric($numberOfFaresPerCell)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfFaresPerCell)), __LINE__);
        }
        $this->NumberOfFaresPerCell = $numberOfFaresPerCell;
        return $this;
    }
    /**
     * Get RestrictOvernight value
     * @return int|null
     */
    public function getRestrictOvernight()
    {
        return $this->RestrictOvernight;
    }
    /**
     * Set RestrictOvernight value
     * @param int $restrictOvernight
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarRequestConfigData
     */
    public function setRestrictOvernight($restrictOvernight = null)
    {
        // validation for constraint: int
        if (!is_null($restrictOvernight) && !is_numeric($restrictOvernight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($restrictOvernight)), __LINE__);
        }
        $this->RestrictOvernight = $restrictOvernight;
        return $this;
    }
    /**
     * Get ReturnNonStopFlightsOnly value
     * @return string|null
     */
    public function getReturnNonStopFlightsOnly()
    {
        return $this->ReturnNonStopFlightsOnly;
    }
    /**
     * Set ReturnNonStopFlightsOnly value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\NonStopEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\NonStopEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $returnNonStopFlightsOnly
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarRequestConfigData
     */
    public function setReturnNonStopFlightsOnly($returnNonStopFlightsOnly = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\NonStopEnum::valueIsValid($returnNonStopFlightsOnly)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $returnNonStopFlightsOnly, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\NonStopEnum::getValidValues())), __LINE__);
        }
        $this->ReturnNonStopFlightsOnly = $returnNonStopFlightsOnly;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarRequestConfigData
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
