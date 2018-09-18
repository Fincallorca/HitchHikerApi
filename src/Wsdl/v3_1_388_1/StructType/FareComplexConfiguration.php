<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareComplexConfiguration StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareComplexConfiguration
 * @subpackage Structs
 */
class FareComplexConfiguration extends FareRequestConfiguration
{
    /**
     * The ConfigurationID
     * @var int
     */
    public $ConfigurationID;
    /**
     * The ConfigurationName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ConfigurationName;
    /**
     * Constructor method for FareComplexConfiguration
     * @uses FareComplexConfiguration::setConfigurationID()
     * @uses FareComplexConfiguration::setConfigurationName()
     * @param int $configurationID
     * @param string $configurationName
     */
    public function __construct($configurationID = null, $configurationName = null)
    {
        $this
            ->setConfigurationID($configurationID)
            ->setConfigurationName($configurationName);
    }
    /**
     * Get ConfigurationID value
     * @return int|null
     */
    public function getConfigurationID()
    {
        return $this->ConfigurationID;
    }
    /**
     * Set ConfigurationID value
     * @param int $configurationID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration
     */
    public function setConfigurationID($configurationID = null)
    {
        // validation for constraint: int
        if (!is_null($configurationID) && !is_numeric($configurationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($configurationID)), __LINE__);
        }
        $this->ConfigurationID = $configurationID;
        return $this;
    }
    /**
     * Get ConfigurationName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getConfigurationName()
    {
        return isset($this->ConfigurationName) ? $this->ConfigurationName : null;
    }
    /**
     * Set ConfigurationName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $configurationName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration
     */
    public function setConfigurationName($configurationName = null)
    {
        // validation for constraint: string
        if (!is_null($configurationName) && !is_string($configurationName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($configurationName)), __LINE__);
        }
        if (is_null($configurationName) || (is_array($configurationName) && empty($configurationName))) {
            unset($this->ConfigurationName);
        } else {
            $this->ConfigurationName = $configurationName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration
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
