<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferenceResponseData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PreferenceResponseData
 * @subpackage Structs
 */
class PreferenceResponseData extends AbstractStructBase
{
    /**
     * The IgnoredKeywordTables
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $IgnoredKeywordTables;
    /**
     * The IgnoredNetDBs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $IgnoredNetDBs;
    /**
     * The IgnoredPCCs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $IgnoredPCCs;
    /**
     * The ModuleInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData
     */
    public $ModuleInfo;
    /**
     * The PreferenceList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceResponseItem
     */
    public $PreferenceList;
    /**
     * The ResponseInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails
     */
    public $ResponseInfo;
    /**
     * Constructor method for PreferenceResponseData
     * @uses PreferenceResponseData::setIgnoredKeywordTables()
     * @uses PreferenceResponseData::setIgnoredNetDBs()
     * @uses PreferenceResponseData::setIgnoredPCCs()
     * @uses PreferenceResponseData::setModuleInfo()
     * @uses PreferenceResponseData::setPreferenceList()
     * @uses PreferenceResponseData::setResponseInfo()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ignoredKeywordTables
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ignoredNetDBs
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ignoredPCCs
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceResponseItem $preferenceList
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ignoredKeywordTables = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ignoredNetDBs = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ignoredPCCs = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceResponseItem $preferenceList = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo = null)
    {
        $this
            ->setIgnoredKeywordTables($ignoredKeywordTables)
            ->setIgnoredNetDBs($ignoredNetDBs)
            ->setIgnoredPCCs($ignoredPCCs)
            ->setModuleInfo($moduleInfo)
            ->setPreferenceList($preferenceList)
            ->setResponseInfo($responseInfo);
    }
    /**
     * Get IgnoredKeywordTables value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getIgnoredKeywordTables()
    {
        return isset($this->IgnoredKeywordTables) ? $this->IgnoredKeywordTables : null;
    }
    /**
     * Set IgnoredKeywordTables value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ignoredKeywordTables
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseData
     */
    public function setIgnoredKeywordTables(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ignoredKeywordTables = null)
    {
        if (is_null($ignoredKeywordTables) || (is_array($ignoredKeywordTables) && empty($ignoredKeywordTables))) {
            unset($this->IgnoredKeywordTables);
        } else {
            $this->IgnoredKeywordTables = $ignoredKeywordTables;
        }
        return $this;
    }
    /**
     * Get IgnoredNetDBs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getIgnoredNetDBs()
    {
        return isset($this->IgnoredNetDBs) ? $this->IgnoredNetDBs : null;
    }
    /**
     * Set IgnoredNetDBs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ignoredNetDBs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseData
     */
    public function setIgnoredNetDBs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ignoredNetDBs = null)
    {
        if (is_null($ignoredNetDBs) || (is_array($ignoredNetDBs) && empty($ignoredNetDBs))) {
            unset($this->IgnoredNetDBs);
        } else {
            $this->IgnoredNetDBs = $ignoredNetDBs;
        }
        return $this;
    }
    /**
     * Get IgnoredPCCs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getIgnoredPCCs()
    {
        return isset($this->IgnoredPCCs) ? $this->IgnoredPCCs : null;
    }
    /**
     * Set IgnoredPCCs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ignoredPCCs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseData
     */
    public function setIgnoredPCCs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $ignoredPCCs = null)
    {
        if (is_null($ignoredPCCs) || (is_array($ignoredPCCs) && empty($ignoredPCCs))) {
            unset($this->IgnoredPCCs);
        } else {
            $this->IgnoredPCCs = $ignoredPCCs;
        }
        return $this;
    }
    /**
     * Get ModuleInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData|null
     */
    public function getModuleInfo()
    {
        return isset($this->ModuleInfo) ? $this->ModuleInfo : null;
    }
    /**
     * Set ModuleInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseData
     */
    public function setModuleInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo = null)
    {
        if (is_null($moduleInfo) || (is_array($moduleInfo) && empty($moduleInfo))) {
            unset($this->ModuleInfo);
        } else {
            $this->ModuleInfo = $moduleInfo;
        }
        return $this;
    }
    /**
     * Get PreferenceList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceResponseItem|null
     */
    public function getPreferenceList()
    {
        return isset($this->PreferenceList) ? $this->PreferenceList : null;
    }
    /**
     * Set PreferenceList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceResponseItem $preferenceList
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseData
     */
    public function setPreferenceList(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceResponseItem $preferenceList = null)
    {
        if (is_null($preferenceList) || (is_array($preferenceList) && empty($preferenceList))) {
            unset($this->PreferenceList);
        } else {
            $this->PreferenceList = $preferenceList;
        }
        return $this;
    }
    /**
     * Get ResponseInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails|null
     */
    public function getResponseInfo()
    {
        return isset($this->ResponseInfo) ? $this->ResponseInfo : null;
    }
    /**
     * Set ResponseInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseData
     */
    public function setResponseInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo = null)
    {
        if (is_null($responseInfo) || (is_array($responseInfo) && empty($responseInfo))) {
            unset($this->ResponseInfo);
        } else {
            $this->ResponseInfo = $responseInfo;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceResponseData
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
