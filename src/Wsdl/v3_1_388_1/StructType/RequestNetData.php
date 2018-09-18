<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestNetData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RequestNetData
 * @subpackage Structs
 */
class RequestNetData extends AbstractStructBase
{
    /**
     * The AllowClassMix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowClassMix;
    /**
     * The MatchCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $MatchCodes;
    /**
     * The NetFareDatabaseCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $NetFareDatabaseCodes;
    /**
     * The NumberOfFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfFares;
    /**
     * The TariffSubType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffSubType;
    /**
     * The TariffType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffType;
    /**
     * The UserDefinedFieldDetailLevel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UserDefinedFieldDetailLevel;
    /**
     * Constructor method for RequestNetData
     * @uses RequestNetData::setAllowClassMix()
     * @uses RequestNetData::setMatchCodes()
     * @uses RequestNetData::setNetFareDatabaseCodes()
     * @uses RequestNetData::setNumberOfFares()
     * @uses RequestNetData::setTariffSubType()
     * @uses RequestNetData::setTariffType()
     * @uses RequestNetData::setUserDefinedFieldDetailLevel()
     * @param bool $allowClassMix
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchCodes
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareDatabaseCodes
     * @param int $numberOfFares
     * @param string $tariffSubType
     * @param string $tariffType
     * @param string $userDefinedFieldDetailLevel
     */
    public function __construct($allowClassMix = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchCodes = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareDatabaseCodes = null, $numberOfFares = null, $tariffSubType = null, $tariffType = null, $userDefinedFieldDetailLevel = null)
    {
        $this
            ->setAllowClassMix($allowClassMix)
            ->setMatchCodes($matchCodes)
            ->setNetFareDatabaseCodes($netFareDatabaseCodes)
            ->setNumberOfFares($numberOfFares)
            ->setTariffSubType($tariffSubType)
            ->setTariffType($tariffType)
            ->setUserDefinedFieldDetailLevel($userDefinedFieldDetailLevel);
    }
    /**
     * Get AllowClassMix value
     * @return bool|null
     */
    public function getAllowClassMix()
    {
        return $this->AllowClassMix;
    }
    /**
     * Set AllowClassMix value
     * @param bool $allowClassMix
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestNetData
     */
    public function setAllowClassMix($allowClassMix = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowClassMix) && !is_bool($allowClassMix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowClassMix)), __LINE__);
        }
        $this->AllowClassMix = $allowClassMix;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestNetData
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
     * Get NetFareDatabaseCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getNetFareDatabaseCodes()
    {
        return isset($this->NetFareDatabaseCodes) ? $this->NetFareDatabaseCodes : null;
    }
    /**
     * Set NetFareDatabaseCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareDatabaseCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestNetData
     */
    public function setNetFareDatabaseCodes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareDatabaseCodes = null)
    {
        if (is_null($netFareDatabaseCodes) || (is_array($netFareDatabaseCodes) && empty($netFareDatabaseCodes))) {
            unset($this->NetFareDatabaseCodes);
        } else {
            $this->NetFareDatabaseCodes = $netFareDatabaseCodes;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestNetData
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
     * Get TariffSubType value
     * @return string|null
     */
    public function getTariffSubType()
    {
        return $this->TariffSubType;
    }
    /**
     * Set TariffSubType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffSubTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffSubTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tariffSubType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestNetData
     */
    public function setTariffSubType($tariffSubType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffSubTypeEnum::valueIsValid($tariffSubType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tariffSubType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffSubTypeEnum::getValidValues())), __LINE__);
        }
        $this->TariffSubType = $tariffSubType;
        return $this;
    }
    /**
     * Get TariffType value
     * @return string|null
     */
    public function getTariffType()
    {
        return $this->TariffType;
    }
    /**
     * Set TariffType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tariffType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestNetData
     */
    public function setTariffType($tariffType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::valueIsValid($tariffType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tariffType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TariffTypeEnum::getValidValues())), __LINE__);
        }
        $this->TariffType = $tariffType;
        return $this;
    }
    /**
     * Get UserDefinedFieldDetailLevel value
     * @return string|null
     */
    public function getUserDefinedFieldDetailLevel()
    {
        return $this->UserDefinedFieldDetailLevel;
    }
    /**
     * Set UserDefinedFieldDetailLevel value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\UserDefinedFieldDetailLevelEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\UserDefinedFieldDetailLevelEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $userDefinedFieldDetailLevel
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestNetData
     */
    public function setUserDefinedFieldDetailLevel($userDefinedFieldDetailLevel = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\UserDefinedFieldDetailLevelEnum::valueIsValid($userDefinedFieldDetailLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $userDefinedFieldDetailLevel, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\UserDefinedFieldDetailLevelEnum::getValidValues())), __LINE__);
        }
        $this->UserDefinedFieldDetailLevel = $userDefinedFieldDetailLevel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestNetData
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
