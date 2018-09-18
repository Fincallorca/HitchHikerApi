<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModuleResponseData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ModuleResponseData
 * @subpackage Structs
 */
class ModuleResponseData extends AbstractStructBase
{
    /**
     * The ModuleListenPort
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ModuleListenPort;
    /**
     * The ModuleMachineName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ModuleMachineName;
    /**
     * The ModuleTransactionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ModuleTransactionID;
    /**
     * The ModuleVersion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ModuleVersion;
    /**
     * Constructor method for ModuleResponseData
     * @uses ModuleResponseData::setModuleListenPort()
     * @uses ModuleResponseData::setModuleMachineName()
     * @uses ModuleResponseData::setModuleTransactionID()
     * @uses ModuleResponseData::setModuleVersion()
     * @param int $moduleListenPort
     * @param string $moduleMachineName
     * @param string $moduleTransactionID
     * @param string $moduleVersion
     */
    public function __construct($moduleListenPort = null, $moduleMachineName = null, $moduleTransactionID = null, $moduleVersion = null)
    {
        $this
            ->setModuleListenPort($moduleListenPort)
            ->setModuleMachineName($moduleMachineName)
            ->setModuleTransactionID($moduleTransactionID)
            ->setModuleVersion($moduleVersion);
    }
    /**
     * Get ModuleListenPort value
     * @return int|null
     */
    public function getModuleListenPort()
    {
        return $this->ModuleListenPort;
    }
    /**
     * Set ModuleListenPort value
     * @param int $moduleListenPort
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData
     */
    public function setModuleListenPort($moduleListenPort = null)
    {
        // validation for constraint: int
        if (!is_null($moduleListenPort) && !is_numeric($moduleListenPort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($moduleListenPort)), __LINE__);
        }
        $this->ModuleListenPort = $moduleListenPort;
        return $this;
    }
    /**
     * Get ModuleMachineName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModuleMachineName()
    {
        return isset($this->ModuleMachineName) ? $this->ModuleMachineName : null;
    }
    /**
     * Set ModuleMachineName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $moduleMachineName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData
     */
    public function setModuleMachineName($moduleMachineName = null)
    {
        // validation for constraint: string
        if (!is_null($moduleMachineName) && !is_string($moduleMachineName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moduleMachineName)), __LINE__);
        }
        if (is_null($moduleMachineName) || (is_array($moduleMachineName) && empty($moduleMachineName))) {
            unset($this->ModuleMachineName);
        } else {
            $this->ModuleMachineName = $moduleMachineName;
        }
        return $this;
    }
    /**
     * Get ModuleTransactionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModuleTransactionID()
    {
        return isset($this->ModuleTransactionID) ? $this->ModuleTransactionID : null;
    }
    /**
     * Set ModuleTransactionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $moduleTransactionID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData
     */
    public function setModuleTransactionID($moduleTransactionID = null)
    {
        // validation for constraint: string
        if (!is_null($moduleTransactionID) && !is_string($moduleTransactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moduleTransactionID)), __LINE__);
        }
        if (is_null($moduleTransactionID) || (is_array($moduleTransactionID) && empty($moduleTransactionID))) {
            unset($this->ModuleTransactionID);
        } else {
            $this->ModuleTransactionID = $moduleTransactionID;
        }
        return $this;
    }
    /**
     * Get ModuleVersion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModuleVersion()
    {
        return isset($this->ModuleVersion) ? $this->ModuleVersion : null;
    }
    /**
     * Set ModuleVersion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $moduleVersion
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData
     */
    public function setModuleVersion($moduleVersion = null)
    {
        // validation for constraint: string
        if (!is_null($moduleVersion) && !is_string($moduleVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moduleVersion)), __LINE__);
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData
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
