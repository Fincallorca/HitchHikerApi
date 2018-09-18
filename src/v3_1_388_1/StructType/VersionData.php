<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VersionData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VersionData
 * @subpackage Structs
 */
class VersionData extends AbstractStructBase
{
    /**
     * The ModuleName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ModuleName;
    /**
     * The ModuleVersion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Version
     */
    public $ModuleVersion;
    /**
     * Constructor method for VersionData
     * @uses VersionData::setModuleName()
     * @uses VersionData::setModuleVersion()
     * @param string $moduleName
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Version $moduleVersion
     */
    public function __construct($moduleName = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Version $moduleVersion = null)
    {
        $this
            ->setModuleName($moduleName)
            ->setModuleVersion($moduleVersion);
    }
    /**
     * Get ModuleName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModuleName()
    {
        return isset($this->ModuleName) ? $this->ModuleName : null;
    }
    /**
     * Set ModuleName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $moduleName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData
     */
    public function setModuleName($moduleName = null)
    {
        // validation for constraint: string
        if (!is_null($moduleName) && !is_string($moduleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moduleName)), __LINE__);
        }
        if (is_null($moduleName) || (is_array($moduleName) && empty($moduleName))) {
            unset($this->ModuleName);
        } else {
            $this->ModuleName = $moduleName;
        }
        return $this;
    }
    /**
     * Get ModuleVersion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Version|null
     */
    public function getModuleVersion()
    {
        return isset($this->ModuleVersion) ? $this->ModuleVersion : null;
    }
    /**
     * Set ModuleVersion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Version $moduleVersion
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData
     */
    public function setModuleVersion(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Version $moduleVersion = null)
    {
        if (is_null($moduleVersion) || (is_array($moduleVersion) && empty($moduleVersion))) {
            unset($this->ModuleVersion);
        } else {
            $this->ModuleVersion = $moduleVersion;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData
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
