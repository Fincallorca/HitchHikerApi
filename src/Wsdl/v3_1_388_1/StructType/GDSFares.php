<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GDSFares StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GDSFares
 * @subpackage Structs
 */
class GDSFares extends AbstractStructBase
{
    /**
     * The CorporateCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $CorporateCodes;
    /**
     * The GDSTypes
     * @var string
     */
    public $GDSTypes;
    /**
     * The NumberOfFares
     * @var int
     */
    public $NumberOfFares;
    /**
     * The PercentageCalcGroupNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $PercentageCalcGroupNo;
    /**
     * The PercentageCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $PercentageCodes;
    /**
     * The PercentageOverridesGDSFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $PercentageOverridesGDSFare;
    /**
     * The PercentagesData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPercentageConfig
     */
    public $PercentagesData;
    /**
     * The PublishedTaxOverrideDBCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PublishedTaxOverrideDBCode;
    /**
     * The SplitCorporateRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SplitCorporateRequests;
    /**
     * Constructor method for GDSFares
     * @uses GDSFares::setCorporateCodes()
     * @uses GDSFares::setGDSTypes()
     * @uses GDSFares::setNumberOfFares()
     * @uses GDSFares::setPercentageCalcGroupNo()
     * @uses GDSFares::setPercentageCodes()
     * @uses GDSFares::setPercentageOverridesGDSFare()
     * @uses GDSFares::setPercentagesData()
     * @uses GDSFares::setPublishedTaxOverrideDBCode()
     * @uses GDSFares::setSplitCorporateRequests()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $corporateCodes
     * @param string $gDSTypes
     * @param int $numberOfFares
     * @param int $percentageCalcGroupNo
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $percentageCodes
     * @param bool $percentageOverridesGDSFare
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPercentageConfig $percentagesData
     * @param string $publishedTaxOverrideDBCode
     * @param bool $splitCorporateRequests
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $corporateCodes = null, $gDSTypes = null, $numberOfFares = null, $percentageCalcGroupNo = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $percentageCodes = null, $percentageOverridesGDSFare = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPercentageConfig $percentagesData = null, $publishedTaxOverrideDBCode = null, $splitCorporateRequests = null)
    {
        $this
            ->setCorporateCodes($corporateCodes)
            ->setGDSTypes($gDSTypes)
            ->setNumberOfFares($numberOfFares)
            ->setPercentageCalcGroupNo($percentageCalcGroupNo)
            ->setPercentageCodes($percentageCodes)
            ->setPercentageOverridesGDSFare($percentageOverridesGDSFare)
            ->setPercentagesData($percentagesData)
            ->setPublishedTaxOverrideDBCode($publishedTaxOverrideDBCode)
            ->setSplitCorporateRequests($splitCorporateRequests);
    }
    /**
     * Get CorporateCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getCorporateCodes()
    {
        return isset($this->CorporateCodes) ? $this->CorporateCodes : null;
    }
    /**
     * Set CorporateCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $corporateCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares
     */
    public function setCorporateCodes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $corporateCodes = null)
    {
        if (is_null($corporateCodes) || (is_array($corporateCodes) && empty($corporateCodes))) {
            unset($this->CorporateCodes);
        } else {
            $this->CorporateCodes = $corporateCodes;
        }
        return $this;
    }
    /**
     * Get GDSTypes value
     * @return string|null
     */
    public function getGDSTypes()
    {
        return $this->GDSTypes;
    }
    /**
     * Set GDSTypes value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $gDSTypes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares
     */
    public function setGDSTypes($gDSTypes = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSTypeEnum::valueIsValid($gDSTypes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $gDSTypes, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSTypeEnum::getValidValues())), __LINE__);
        }
        $this->GDSTypes = $gDSTypes;
        return $this;
    }
    /**
     * Get NumberOfFares value
     * @return int|null
     */
    public function getNumberOfFares()
    {
        return $this->NumberOfFares;
    }
    /**
     * Set NumberOfFares value
     * @param int $numberOfFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares
     */
    public function setNumberOfFares($numberOfFares = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfFares) && !is_numeric($numberOfFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfFares)), __LINE__);
        }
        $this->NumberOfFares = $numberOfFares;
        return $this;
    }
    /**
     * Get PercentageCalcGroupNo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPercentageCalcGroupNo()
    {
        return isset($this->PercentageCalcGroupNo) ? $this->PercentageCalcGroupNo : null;
    }
    /**
     * Set PercentageCalcGroupNo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $percentageCalcGroupNo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares
     */
    public function setPercentageCalcGroupNo($percentageCalcGroupNo = null)
    {
        // validation for constraint: int
        if (!is_null($percentageCalcGroupNo) && !is_numeric($percentageCalcGroupNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($percentageCalcGroupNo)), __LINE__);
        }
        if (is_null($percentageCalcGroupNo) || (is_array($percentageCalcGroupNo) && empty($percentageCalcGroupNo))) {
            unset($this->PercentageCalcGroupNo);
        } else {
            $this->PercentageCalcGroupNo = $percentageCalcGroupNo;
        }
        return $this;
    }
    /**
     * Get PercentageCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getPercentageCodes()
    {
        return isset($this->PercentageCodes) ? $this->PercentageCodes : null;
    }
    /**
     * Set PercentageCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $percentageCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares
     */
    public function setPercentageCodes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $percentageCodes = null)
    {
        if (is_null($percentageCodes) || (is_array($percentageCodes) && empty($percentageCodes))) {
            unset($this->PercentageCodes);
        } else {
            $this->PercentageCodes = $percentageCodes;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares
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
     * Get PercentagesData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPercentageConfig|null
     */
    public function getPercentagesData()
    {
        return isset($this->PercentagesData) ? $this->PercentagesData : null;
    }
    /**
     * Set PercentagesData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPercentageConfig $percentagesData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares
     */
    public function setPercentagesData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPercentageConfig $percentagesData = null)
    {
        if (is_null($percentagesData) || (is_array($percentagesData) && empty($percentagesData))) {
            unset($this->PercentagesData);
        } else {
            $this->PercentagesData = $percentagesData;
        }
        return $this;
    }
    /**
     * Get PublishedTaxOverrideDBCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPublishedTaxOverrideDBCode()
    {
        return isset($this->PublishedTaxOverrideDBCode) ? $this->PublishedTaxOverrideDBCode : null;
    }
    /**
     * Set PublishedTaxOverrideDBCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $publishedTaxOverrideDBCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares
     */
    public function setPublishedTaxOverrideDBCode($publishedTaxOverrideDBCode = null)
    {
        // validation for constraint: string
        if (!is_null($publishedTaxOverrideDBCode) && !is_string($publishedTaxOverrideDBCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($publishedTaxOverrideDBCode)), __LINE__);
        }
        if (is_null($publishedTaxOverrideDBCode) || (is_array($publishedTaxOverrideDBCode) && empty($publishedTaxOverrideDBCode))) {
            unset($this->PublishedTaxOverrideDBCode);
        } else {
            $this->PublishedTaxOverrideDBCode = $publishedTaxOverrideDBCode;
        }
        return $this;
    }
    /**
     * Get SplitCorporateRequests value
     * @return bool|null
     */
    public function getSplitCorporateRequests()
    {
        return $this->SplitCorporateRequests;
    }
    /**
     * Set SplitCorporateRequests value
     * @param bool $splitCorporateRequests
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares
     */
    public function setSplitCorporateRequests($splitCorporateRequests = null)
    {
        // validation for constraint: boolean
        if (!is_null($splitCorporateRequests) && !is_bool($splitCorporateRequests)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($splitCorporateRequests)), __LINE__);
        }
        $this->SplitCorporateRequests = $splitCorporateRequests;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares
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
