<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuoteRequestNetData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QuoteRequestNetData
 * @subpackage Structs
 */
class QuoteRequestNetData extends AbstractStructBase
{
    /**
     * The CalculationGroupNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CalculationGroupNo;
    /**
     * The ClientLink
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ClientLink;
    /**
     * The DBCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $DBCode;
    /**
     * The ExportTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExportTypes;
    /**
     * The MatchCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $MatchCodes;
    /**
     * The PercentageOverridesGDSFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $PercentageOverridesGDSFare;
    /**
     * The PrecentagOverridesGDSFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $PrecentagOverridesGDSFare;
    /**
     * The QuoteType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $QuoteType;
    /**
     * The SpecialConverterName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SpecialConverterName;
    /**
     * The UseDefaultTicketTemplate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $UseDefaultTicketTemplate;
    /**
     * Constructor method for QuoteRequestNetData
     * @uses QuoteRequestNetData::setCalculationGroupNo()
     * @uses QuoteRequestNetData::setClientLink()
     * @uses QuoteRequestNetData::setDBCode()
     * @uses QuoteRequestNetData::setExportTypes()
     * @uses QuoteRequestNetData::setMatchCodes()
     * @uses QuoteRequestNetData::setPercentageOverridesGDSFare()
     * @uses QuoteRequestNetData::setPrecentagOverridesGDSFare()
     * @uses QuoteRequestNetData::setQuoteType()
     * @uses QuoteRequestNetData::setSpecialConverterName()
     * @uses QuoteRequestNetData::setUseDefaultTicketTemplate()
     * @param int $calculationGroupNo
     * @param string $clientLink
     * @param string $dBCode
     * @param string $exportTypes
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchCodes
     * @param bool $percentageOverridesGDSFare
     * @param bool $precentagOverridesGDSFare
     * @param string $quoteType
     * @param string $specialConverterName
     * @param bool $useDefaultTicketTemplate
     */
    public function __construct($calculationGroupNo = null, $clientLink = null, $dBCode = null, $exportTypes = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchCodes = null, $percentageOverridesGDSFare = null, $precentagOverridesGDSFare = null, $quoteType = null, $specialConverterName = null, $useDefaultTicketTemplate = null)
    {
        $this
            ->setCalculationGroupNo($calculationGroupNo)
            ->setClientLink($clientLink)
            ->setDBCode($dBCode)
            ->setExportTypes($exportTypes)
            ->setMatchCodes($matchCodes)
            ->setPercentageOverridesGDSFare($percentageOverridesGDSFare)
            ->setPrecentagOverridesGDSFare($precentagOverridesGDSFare)
            ->setQuoteType($quoteType)
            ->setSpecialConverterName($specialConverterName)
            ->setUseDefaultTicketTemplate($useDefaultTicketTemplate);
    }
    /**
     * Get CalculationGroupNo value
     * @return int|null
     */
    public function getCalculationGroupNo()
    {
        return $this->CalculationGroupNo;
    }
    /**
     * Set CalculationGroupNo value
     * @param int $calculationGroupNo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestNetData
     */
    public function setCalculationGroupNo($calculationGroupNo = null)
    {
        // validation for constraint: int
        if (!is_null($calculationGroupNo) && !is_numeric($calculationGroupNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($calculationGroupNo)), __LINE__);
        }
        $this->CalculationGroupNo = $calculationGroupNo;
        return $this;
    }
    /**
     * Get ClientLink value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClientLink()
    {
        return isset($this->ClientLink) ? $this->ClientLink : null;
    }
    /**
     * Set ClientLink value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $clientLink
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestNetData
     */
    public function setClientLink($clientLink = null)
    {
        // validation for constraint: string
        if (!is_null($clientLink) && !is_string($clientLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientLink)), __LINE__);
        }
        if (is_null($clientLink) || (is_array($clientLink) && empty($clientLink))) {
            unset($this->ClientLink);
        } else {
            $this->ClientLink = $clientLink;
        }
        return $this;
    }
    /**
     * Get DBCode value
     * @return string|null
     */
    public function getDBCode()
    {
        return $this->DBCode;
    }
    /**
     * Set DBCode value
     * @param string $dBCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestNetData
     */
    public function setDBCode($dBCode = null)
    {
        // validation for constraint: string
        if (!is_null($dBCode) && !is_string($dBCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dBCode)), __LINE__);
        }
        $this->DBCode = $dBCode;
        return $this;
    }
    /**
     * Get ExportTypes value
     * @return string|null
     */
    public function getExportTypes()
    {
        return $this->ExportTypes;
    }
    /**
     * Set ExportTypes value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ExportTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ExportTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $exportTypes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestNetData
     */
    public function setExportTypes($exportTypes = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ExportTypeEnum::valueIsValid($exportTypes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $exportTypes, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ExportTypeEnum::getValidValues())), __LINE__);
        }
        $this->ExportTypes = $exportTypes;
        return $this;
    }
    /**
     * Get MatchCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getMatchCodes()
    {
        return isset($this->MatchCodes) ? $this->MatchCodes : null;
    }
    /**
     * Set MatchCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestNetData
     */
    public function setMatchCodes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchCodes = null)
    {
        if (is_null($matchCodes) || (is_array($matchCodes) && empty($matchCodes))) {
            unset($this->MatchCodes);
        } else {
            $this->MatchCodes = $matchCodes;
        }
        return $this;
    }
    /**
     * Get PercentageOverridesGDSFare value
     * @return bool|null
     */
    public function getPercentageOverridesGDSFare()
    {
        return $this->PercentageOverridesGDSFare;
    }
    /**
     * Set PercentageOverridesGDSFare value
     * @param bool $percentageOverridesGDSFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestNetData
     */
    public function setPercentageOverridesGDSFare($percentageOverridesGDSFare = null)
    {
        // validation for constraint: boolean
        if (!is_null($percentageOverridesGDSFare) && !is_bool($percentageOverridesGDSFare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($percentageOverridesGDSFare)), __LINE__);
        }
        $this->PercentageOverridesGDSFare = $percentageOverridesGDSFare;
        return $this;
    }
    /**
     * Get PrecentagOverridesGDSFare value
     * @return bool|null
     */
    public function getPrecentagOverridesGDSFare()
    {
        return $this->PrecentagOverridesGDSFare;
    }
    /**
     * Set PrecentagOverridesGDSFare value
     * @param bool $precentagOverridesGDSFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestNetData
     */
    public function setPrecentagOverridesGDSFare($precentagOverridesGDSFare = null)
    {
        // validation for constraint: boolean
        if (!is_null($precentagOverridesGDSFare) && !is_bool($precentagOverridesGDSFare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($precentagOverridesGDSFare)), __LINE__);
        }
        $this->PrecentagOverridesGDSFare = $precentagOverridesGDSFare;
        return $this;
    }
    /**
     * Get QuoteType value
     * @return string|null
     */
    public function getQuoteType()
    {
        return $this->QuoteType;
    }
    /**
     * Set QuoteType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\NFQETypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\NFQETypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $quoteType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestNetData
     */
    public function setQuoteType($quoteType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\NFQETypeEnum::valueIsValid($quoteType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $quoteType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\NFQETypeEnum::getValidValues())), __LINE__);
        }
        $this->QuoteType = $quoteType;
        return $this;
    }
    /**
     * Get SpecialConverterName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSpecialConverterName()
    {
        return isset($this->SpecialConverterName) ? $this->SpecialConverterName : null;
    }
    /**
     * Set SpecialConverterName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $specialConverterName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestNetData
     */
    public function setSpecialConverterName($specialConverterName = null)
    {
        // validation for constraint: string
        if (!is_null($specialConverterName) && !is_string($specialConverterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specialConverterName)), __LINE__);
        }
        if (is_null($specialConverterName) || (is_array($specialConverterName) && empty($specialConverterName))) {
            unset($this->SpecialConverterName);
        } else {
            $this->SpecialConverterName = $specialConverterName;
        }
        return $this;
    }
    /**
     * Get UseDefaultTicketTemplate value
     * @return bool|null
     */
    public function getUseDefaultTicketTemplate()
    {
        return $this->UseDefaultTicketTemplate;
    }
    /**
     * Set UseDefaultTicketTemplate value
     * @param bool $useDefaultTicketTemplate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestNetData
     */
    public function setUseDefaultTicketTemplate($useDefaultTicketTemplate = null)
    {
        // validation for constraint: boolean
        if (!is_null($useDefaultTicketTemplate) && !is_bool($useDefaultTicketTemplate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($useDefaultTicketTemplate)), __LINE__);
        }
        $this->UseDefaultTicketTemplate = $useDefaultTicketTemplate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestNetData
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
