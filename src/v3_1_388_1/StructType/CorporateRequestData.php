<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CorporateRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CorporateRequestData
 * @subpackage Structs
 */
class CorporateRequestData extends AbstractStructBase
{
    /**
     * The CRSName
     * @var string
     */
    public $CRSName;
    /**
     * The Carrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Carrier;
    /**
     * The DatabaseCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $DatabaseCode;
    /**
     * The Destination
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Destination;
    /**
     * The MatchCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $MatchCodes;
    /**
     * The Origin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Origin;
    /**
     * The TariffType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffType;
    /**
     * Constructor method for CorporateRequestData
     * @uses CorporateRequestData::setCRSName()
     * @uses CorporateRequestData::setCarrier()
     * @uses CorporateRequestData::setDatabaseCode()
     * @uses CorporateRequestData::setDestination()
     * @uses CorporateRequestData::setMatchCodes()
     * @uses CorporateRequestData::setOrigin()
     * @uses CorporateRequestData::setTariffType()
     * @param string $cRSName
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carrier
     * @param string $databaseCode
     * @param string $destination
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchCodes
     * @param string $origin
     * @param string $tariffType
     */
    public function __construct($cRSName = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carrier = null, $databaseCode = null, $destination = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $matchCodes = null, $origin = null, $tariffType = null)
    {
        $this
            ->setCRSName($cRSName)
            ->setCarrier($carrier)
            ->setDatabaseCode($databaseCode)
            ->setDestination($destination)
            ->setMatchCodes($matchCodes)
            ->setOrigin($origin)
            ->setTariffType($tariffType);
    }
    /**
     * Get CRSName value
     * @return string|null
     */
    public function getCRSName()
    {
        return $this->CRSName;
    }
    /**
     * Set CRSName value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cRSName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateRequestData
     */
    public function setCRSName($cRSName = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::valueIsValid($cRSName)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cRSName, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::getValidValues())), __LINE__);
        }
        $this->CRSName = $cRSName;
        return $this;
    }
    /**
     * Get Carrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getCarrier()
    {
        return isset($this->Carrier) ? $this->Carrier : null;
    }
    /**
     * Set Carrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateRequestData
     */
    public function setCarrier(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carrier = null)
    {
        if (is_null($carrier) || (is_array($carrier) && empty($carrier))) {
            unset($this->Carrier);
        } else {
            $this->Carrier = $carrier;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateRequestData
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
     * Get Destination value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDestination()
    {
        return isset($this->Destination) ? $this->Destination : null;
    }
    /**
     * Set Destination value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $destination
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateRequestData
     */
    public function setDestination($destination = null)
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destination)), __LINE__);
        }
        if (is_null($destination) || (is_array($destination) && empty($destination))) {
            unset($this->Destination);
        } else {
            $this->Destination = $destination;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateRequestData
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
     * Get Origin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrigin()
    {
        return isset($this->Origin) ? $this->Origin : null;
    }
    /**
     * Set Origin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $origin
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateRequestData
     */
    public function setOrigin($origin = null)
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($origin)), __LINE__);
        }
        if (is_null($origin) || (is_array($origin) && empty($origin))) {
            unset($this->Origin);
        } else {
            $this->Origin = $origin;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateRequestData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateRequestData
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
