<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestGDSData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RequestGDSData
 * @subpackage Structs
 */
class RequestGDSData extends GDSFares
{
    /**
     * The ExtendedFareGroups
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRequestFareGroup
     */
    public $ExtendedFareGroups;
    /**
     * The FareGroups
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $FareGroups;
    /**
     * The IncludeCorpCodeDBCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IncludeCorpCodeDBCode;
    /**
     * Constructor method for RequestGDSData
     * @uses RequestGDSData::setExtendedFareGroups()
     * @uses RequestGDSData::setFareGroups()
     * @uses RequestGDSData::setIncludeCorpCodeDBCode()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRequestFareGroup $extendedFareGroups
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups
     * @param string $includeCorpCodeDBCode
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRequestFareGroup $extendedFareGroups = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups = null, $includeCorpCodeDBCode = null)
    {
        $this
            ->setExtendedFareGroups($extendedFareGroups)
            ->setFareGroups($fareGroups)
            ->setIncludeCorpCodeDBCode($includeCorpCodeDBCode);
    }
    /**
     * Get ExtendedFareGroups value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRequestFareGroup|null
     */
    public function getExtendedFareGroups()
    {
        return isset($this->ExtendedFareGroups) ? $this->ExtendedFareGroups : null;
    }
    /**
     * Set ExtendedFareGroups value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRequestFareGroup $extendedFareGroups
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestGDSData
     */
    public function setExtendedFareGroups(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRequestFareGroup $extendedFareGroups = null)
    {
        if (is_null($extendedFareGroups) || (is_array($extendedFareGroups) && empty($extendedFareGroups))) {
            unset($this->ExtendedFareGroups);
        } else {
            $this->ExtendedFareGroups = $extendedFareGroups;
        }
        return $this;
    }
    /**
     * Get FareGroups value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getFareGroups()
    {
        return isset($this->FareGroups) ? $this->FareGroups : null;
    }
    /**
     * Set FareGroups value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestGDSData
     */
    public function setFareGroups(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups = null)
    {
        if (is_null($fareGroups) || (is_array($fareGroups) && empty($fareGroups))) {
            unset($this->FareGroups);
        } else {
            $this->FareGroups = $fareGroups;
        }
        return $this;
    }
    /**
     * Get IncludeCorpCodeDBCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIncludeCorpCodeDBCode()
    {
        return isset($this->IncludeCorpCodeDBCode) ? $this->IncludeCorpCodeDBCode : null;
    }
    /**
     * Set IncludeCorpCodeDBCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $includeCorpCodeDBCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestGDSData
     */
    public function setIncludeCorpCodeDBCode($includeCorpCodeDBCode = null)
    {
        // validation for constraint: string
        if (!is_null($includeCorpCodeDBCode) && !is_string($includeCorpCodeDBCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($includeCorpCodeDBCode)), __LINE__);
        }
        if (is_null($includeCorpCodeDBCode) || (is_array($includeCorpCodeDBCode) && empty($includeCorpCodeDBCode))) {
            unset($this->IncludeCorpCodeDBCode);
        } else {
            $this->IncludeCorpCodeDBCode = $includeCorpCodeDBCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestGDSData
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
