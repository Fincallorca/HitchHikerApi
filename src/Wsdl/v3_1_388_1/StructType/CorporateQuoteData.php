<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CorporateQuoteData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CorporateQuoteData
 * @subpackage Structs
 */
class CorporateQuoteData extends AbstractStructBase
{
    /**
     * The CorporateCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CorporateCode;
    /**
     * The FareTypeCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareTypeCode;
    /**
     * The GDS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GDS;
    /**
     * The Identifier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Identifier;
    /**
     * The PassengerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerType;
    /**
     * The Special
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Special;
    /**
     * The TariffType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffType;
    /**
     * Constructor method for CorporateQuoteData
     * @uses CorporateQuoteData::setCorporateCode()
     * @uses CorporateQuoteData::setFareTypeCode()
     * @uses CorporateQuoteData::setGDS()
     * @uses CorporateQuoteData::setIdentifier()
     * @uses CorporateQuoteData::setPassengerType()
     * @uses CorporateQuoteData::setSpecial()
     * @uses CorporateQuoteData::setTariffType()
     * @param string $corporateCode
     * @param string $fareTypeCode
     * @param string $gDS
     * @param string $identifier
     * @param string $passengerType
     * @param bool $special
     * @param string $tariffType
     */
    public function __construct($corporateCode = null, $fareTypeCode = null, $gDS = null, $identifier = null, $passengerType = null, $special = null, $tariffType = null)
    {
        $this
            ->setCorporateCode($corporateCode)
            ->setFareTypeCode($fareTypeCode)
            ->setGDS($gDS)
            ->setIdentifier($identifier)
            ->setPassengerType($passengerType)
            ->setSpecial($special)
            ->setTariffType($tariffType);
    }
    /**
     * Get CorporateCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCorporateCode()
    {
        return isset($this->CorporateCode) ? $this->CorporateCode : null;
    }
    /**
     * Set CorporateCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $corporateCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData
     */
    public function setCorporateCode($corporateCode = null)
    {
        // validation for constraint: string
        if (!is_null($corporateCode) && !is_string($corporateCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($corporateCode)), __LINE__);
        }
        if (is_null($corporateCode) || (is_array($corporateCode) && empty($corporateCode))) {
            unset($this->CorporateCode);
        } else {
            $this->CorporateCode = $corporateCode;
        }
        return $this;
    }
    /**
     * Get FareTypeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareTypeCode()
    {
        return isset($this->FareTypeCode) ? $this->FareTypeCode : null;
    }
    /**
     * Set FareTypeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareTypeCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData
     */
    public function setFareTypeCode($fareTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($fareTypeCode) && !is_string($fareTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareTypeCode)), __LINE__);
        }
        if (is_null($fareTypeCode) || (is_array($fareTypeCode) && empty($fareTypeCode))) {
            unset($this->FareTypeCode);
        } else {
            $this->FareTypeCode = $fareTypeCode;
        }
        return $this;
    }
    /**
     * Get GDS value
     * @return string|null
     */
    public function getGDS()
    {
        return $this->GDS;
    }
    /**
     * Set GDS value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $gDS
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData
     */
    public function setGDS($gDS = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::valueIsValid($gDS)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $gDS, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::getValidValues())), __LINE__);
        }
        $this->GDS = $gDS;
        return $this;
    }
    /**
     * Get Identifier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIdentifier()
    {
        return isset($this->Identifier) ? $this->Identifier : null;
    }
    /**
     * Set Identifier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $identifier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData
     */
    public function setIdentifier($identifier = null)
    {
        // validation for constraint: string
        if (!is_null($identifier) && !is_string($identifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identifier)), __LINE__);
        }
        if (is_null($identifier) || (is_array($identifier) && empty($identifier))) {
            unset($this->Identifier);
        } else {
            $this->Identifier = $identifier;
        }
        return $this;
    }
    /**
     * Get PassengerType value
     * @return string|null
     */
    public function getPassengerType()
    {
        return $this->PassengerType;
    }
    /**
     * Set PassengerType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $passengerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData
     */
    public function setPassengerType($passengerType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($passengerType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $passengerType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
        }
        $this->PassengerType = $passengerType;
        return $this;
    }
    /**
     * Get Special value
     * @return bool|null
     */
    public function getSpecial()
    {
        return $this->Special;
    }
    /**
     * Set Special value
     * @param bool $special
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData
     */
    public function setSpecial($special = null)
    {
        // validation for constraint: boolean
        if (!is_null($special) && !is_bool($special)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($special)), __LINE__);
        }
        $this->Special = $special;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData
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
