<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayRequestNet StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayRequestNet
 * @subpackage Structs
 */
class DisplayRequestNet extends AbstractStructBase
{
    /**
     * The AllowClassMix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowClassMix;
    /**
     * The AnticipatedBookingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AnticipatedBookingDate;
    /**
     * The CalcModel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CalcModel;
    /**
     * The CheckTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CheckTax;
    /**
     * The DeterminePointOfTurnaround
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DeterminePointOfTurnaround;
    /**
     * The IsQueryAddon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsQueryAddon;
    /**
     * The MatchCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $MatchCodes;
    /**
     * The NetFareCodes
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $NetFareCodes;
    /**
     * The NumberOfNetFares
     * @var int
     */
    public $NumberOfNetFares;
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
     * Constructor method for DisplayRequestNet
     * @uses DisplayRequestNet::setAllowClassMix()
     * @uses DisplayRequestNet::setAnticipatedBookingDate()
     * @uses DisplayRequestNet::setCalcModel()
     * @uses DisplayRequestNet::setCheckTax()
     * @uses DisplayRequestNet::setDeterminePointOfTurnaround()
     * @uses DisplayRequestNet::setIsQueryAddon()
     * @uses DisplayRequestNet::setMatchCodes()
     * @uses DisplayRequestNet::setNetFareCodes()
     * @uses DisplayRequestNet::setNumberOfNetFares()
     * @uses DisplayRequestNet::setTariffSubType()
     * @uses DisplayRequestNet::setTariffType()
     * @param bool $allowClassMix
     * @param string $anticipatedBookingDate
     * @param string $calcModel
     * @param string $checkTax
     * @param int $determinePointOfTurnaround
     * @param bool $isQueryAddon
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchCodes
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareCodes
     * @param int $numberOfNetFares
     * @param string $tariffSubType
     * @param string $tariffType
     */
    public function __construct($allowClassMix = null, $anticipatedBookingDate = null, $calcModel = null, $checkTax = null, $determinePointOfTurnaround = null, $isQueryAddon = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchCodes = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareCodes = null, $numberOfNetFares = null, $tariffSubType = null, $tariffType = null)
    {
        $this
            ->setAllowClassMix($allowClassMix)
            ->setAnticipatedBookingDate($anticipatedBookingDate)
            ->setCalcModel($calcModel)
            ->setCheckTax($checkTax)
            ->setDeterminePointOfTurnaround($determinePointOfTurnaround)
            ->setIsQueryAddon($isQueryAddon)
            ->setMatchCodes($matchCodes)
            ->setNetFareCodes($netFareCodes)
            ->setNumberOfNetFares($numberOfNetFares)
            ->setTariffSubType($tariffSubType)
            ->setTariffType($tariffType);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet
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
     * Get AnticipatedBookingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAnticipatedBookingDate()
    {
        return isset($this->AnticipatedBookingDate) ? $this->AnticipatedBookingDate : null;
    }
    /**
     * Set AnticipatedBookingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $anticipatedBookingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet
     */
    public function setAnticipatedBookingDate($anticipatedBookingDate = null)
    {
        // validation for constraint: string
        if (!is_null($anticipatedBookingDate) && !is_string($anticipatedBookingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($anticipatedBookingDate)), __LINE__);
        }
        if (is_null($anticipatedBookingDate) || (is_array($anticipatedBookingDate) && empty($anticipatedBookingDate))) {
            unset($this->AnticipatedBookingDate);
        } else {
            $this->AnticipatedBookingDate = $anticipatedBookingDate;
        }
        return $this;
    }
    /**
     * Get CalcModel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCalcModel()
    {
        return isset($this->CalcModel) ? $this->CalcModel : null;
    }
    /**
     * Set CalcModel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $calcModel
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet
     */
    public function setCalcModel($calcModel = null)
    {
        // validation for constraint: string
        if (!is_null($calcModel) && !is_string($calcModel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calcModel)), __LINE__);
        }
        if (is_null($calcModel) || (is_array($calcModel) && empty($calcModel))) {
            unset($this->CalcModel);
        } else {
            $this->CalcModel = $calcModel;
        }
        return $this;
    }
    /**
     * Get CheckTax value
     * @return string|null
     */
    public function getCheckTax()
    {
        return $this->CheckTax;
    }
    /**
     * Set CheckTax value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckTaxEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckTaxEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkTax
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet
     */
    public function setCheckTax($checkTax = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckTaxEnum::valueIsValid($checkTax)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $checkTax, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckTaxEnum::getValidValues())), __LINE__);
        }
        $this->CheckTax = $checkTax;
        return $this;
    }
    /**
     * Get DeterminePointOfTurnaround value
     * @return int|null
     */
    public function getDeterminePointOfTurnaround()
    {
        return $this->DeterminePointOfTurnaround;
    }
    /**
     * Set DeterminePointOfTurnaround value
     * @param int $determinePointOfTurnaround
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet
     */
    public function setDeterminePointOfTurnaround($determinePointOfTurnaround = null)
    {
        // validation for constraint: int
        if (!is_null($determinePointOfTurnaround) && !is_numeric($determinePointOfTurnaround)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($determinePointOfTurnaround)), __LINE__);
        }
        $this->DeterminePointOfTurnaround = $determinePointOfTurnaround;
        return $this;
    }
    /**
     * Get IsQueryAddon value
     * @return bool|null
     */
    public function getIsQueryAddon()
    {
        return $this->IsQueryAddon;
    }
    /**
     * Set IsQueryAddon value
     * @param bool $isQueryAddon
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet
     */
    public function setIsQueryAddon($isQueryAddon = null)
    {
        // validation for constraint: boolean
        if (!is_null($isQueryAddon) && !is_bool($isQueryAddon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isQueryAddon)), __LINE__);
        }
        $this->IsQueryAddon = $isQueryAddon;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet
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
     * Get NetFareCodes value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getNetFareCodes()
    {
        return $this->NetFareCodes;
    }
    /**
     * Set NetFareCodes value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareCodes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet
     */
    public function setNetFareCodes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $netFareCodes = null)
    {
        $this->NetFareCodes = $netFareCodes;
        return $this;
    }
    /**
     * Get NumberOfNetFares value
     * @return int|null
     */
    public function getNumberOfNetFares()
    {
        return $this->NumberOfNetFares;
    }
    /**
     * Set NumberOfNetFares value
     * @param int $numberOfNetFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet
     */
    public function setNumberOfNetFares($numberOfNetFares = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfNetFares) && !is_numeric($numberOfNetFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfNetFares)), __LINE__);
        }
        $this->NumberOfNetFares = $numberOfNetFares;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet
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
