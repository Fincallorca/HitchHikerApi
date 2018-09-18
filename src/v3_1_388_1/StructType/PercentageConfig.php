<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PercentageConfig StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PercentageConfig
 * @subpackage Structs
 */
class PercentageConfig extends AbstractStructBase
{
    /**
     * The CalcGroupNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CalcGroupNo;
    /**
     * The ClientLink
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ClientLink;
    /**
     * The DatabaseCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $DatabaseCode;
    /**
     * The IncludeQuoteCorpCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IncludeQuoteCorpCodes;
    /**
     * The MatchCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $MatchCodes;
    /**
     * Constructor method for PercentageConfig
     * @uses PercentageConfig::setCalcGroupNo()
     * @uses PercentageConfig::setClientLink()
     * @uses PercentageConfig::setDatabaseCode()
     * @uses PercentageConfig::setIncludeQuoteCorpCodes()
     * @uses PercentageConfig::setMatchCodes()
     * @param int $calcGroupNo
     * @param string $clientLink
     * @param string $databaseCode
     * @param string $includeQuoteCorpCodes
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchCodes
     */
    public function __construct($calcGroupNo = null, $clientLink = null, $databaseCode = null, $includeQuoteCorpCodes = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchCodes = null)
    {
        $this
            ->setCalcGroupNo($calcGroupNo)
            ->setClientLink($clientLink)
            ->setDatabaseCode($databaseCode)
            ->setIncludeQuoteCorpCodes($includeQuoteCorpCodes)
            ->setMatchCodes($matchCodes);
    }
    /**
     * Get CalcGroupNo value
     * @return int|null
     */
    public function getCalcGroupNo()
    {
        return $this->CalcGroupNo;
    }
    /**
     * Set CalcGroupNo value
     * @param int $calcGroupNo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PercentageConfig
     */
    public function setCalcGroupNo($calcGroupNo = null)
    {
        // validation for constraint: int
        if (!is_null($calcGroupNo) && !is_numeric($calcGroupNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($calcGroupNo)), __LINE__);
        }
        $this->CalcGroupNo = $calcGroupNo;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PercentageConfig
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
     * Get DatabaseCode value
     * @return string|null
     */
    public function getDatabaseCode()
    {
        return $this->DatabaseCode;
    }
    /**
     * Set DatabaseCode value
     * @param string $databaseCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PercentageConfig
     */
    public function setDatabaseCode($databaseCode = null)
    {
        // validation for constraint: string
        if (!is_null($databaseCode) && !is_string($databaseCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($databaseCode)), __LINE__);
        }
        $this->DatabaseCode = $databaseCode;
        return $this;
    }
    /**
     * Get IncludeQuoteCorpCodes value
     * @return string|null
     */
    public function getIncludeQuoteCorpCodes()
    {
        return $this->IncludeQuoteCorpCodes;
    }
    /**
     * Set IncludeQuoteCorpCodes value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\IncludeOptions::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\IncludeOptions::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $includeQuoteCorpCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PercentageConfig
     */
    public function setIncludeQuoteCorpCodes($includeQuoteCorpCodes = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\IncludeOptions::valueIsValid($includeQuoteCorpCodes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $includeQuoteCorpCodes, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\IncludeOptions::getValidValues())), __LINE__);
        }
        $this->IncludeQuoteCorpCodes = $includeQuoteCorpCodes;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PercentageConfig
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PercentageConfig
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
