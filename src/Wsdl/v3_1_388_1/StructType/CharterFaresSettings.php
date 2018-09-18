<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharterFaresSettings StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CharterFaresSettings
 * @subpackage Structs
 */
class CharterFaresSettings extends AbstractStructBase
{
    /**
     * The Hosts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Hosts;
    /**
     * The IP
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IP;
    /**
     * The MaxNumberAvailChecks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxNumberAvailChecks;
    /**
     * The MaxNumberOfAvailableFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxNumberOfAvailableFares;
    /**
     * The MaxNumberOfCharterFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxNumberOfCharterFares;
    /**
     * The MaxNumberOfConcurrentAvails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxNumberOfConcurrentAvails;
    /**
     * The Port
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Port;
    /**
     * Constructor method for CharterFaresSettings
     * @uses CharterFaresSettings::setHosts()
     * @uses CharterFaresSettings::setIP()
     * @uses CharterFaresSettings::setMaxNumberAvailChecks()
     * @uses CharterFaresSettings::setMaxNumberOfAvailableFares()
     * @uses CharterFaresSettings::setMaxNumberOfCharterFares()
     * @uses CharterFaresSettings::setMaxNumberOfConcurrentAvails()
     * @uses CharterFaresSettings::setPort()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $hosts
     * @param string $iP
     * @param int $maxNumberAvailChecks
     * @param int $maxNumberOfAvailableFares
     * @param int $maxNumberOfCharterFares
     * @param int $maxNumberOfConcurrentAvails
     * @param int $port
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $hosts = null, $iP = null, $maxNumberAvailChecks = null, $maxNumberOfAvailableFares = null, $maxNumberOfCharterFares = null, $maxNumberOfConcurrentAvails = null, $port = null)
    {
        $this
            ->setHosts($hosts)
            ->setIP($iP)
            ->setMaxNumberAvailChecks($maxNumberAvailChecks)
            ->setMaxNumberOfAvailableFares($maxNumberOfAvailableFares)
            ->setMaxNumberOfCharterFares($maxNumberOfCharterFares)
            ->setMaxNumberOfConcurrentAvails($maxNumberOfConcurrentAvails)
            ->setPort($port);
    }
    /**
     * Get Hosts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getHosts()
    {
        return isset($this->Hosts) ? $this->Hosts : null;
    }
    /**
     * Set Hosts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $hosts
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterFaresSettings
     */
    public function setHosts(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $hosts = null)
    {
        if (is_null($hosts) || (is_array($hosts) && empty($hosts))) {
            unset($this->Hosts);
        } else {
            $this->Hosts = $hosts;
        }
        return $this;
    }
    /**
     * Get IP value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIP()
    {
        return isset($this->IP) ? $this->IP : null;
    }
    /**
     * Set IP value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iP
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterFaresSettings
     */
    public function setIP($iP = null)
    {
        // validation for constraint: string
        if (!is_null($iP) && !is_string($iP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iP)), __LINE__);
        }
        if (is_null($iP) || (is_array($iP) && empty($iP))) {
            unset($this->IP);
        } else {
            $this->IP = $iP;
        }
        return $this;
    }
    /**
     * Get MaxNumberAvailChecks value
     * @return int|null
     */
    public function getMaxNumberAvailChecks()
    {
        return $this->MaxNumberAvailChecks;
    }
    /**
     * Set MaxNumberAvailChecks value
     * @param int $maxNumberAvailChecks
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterFaresSettings
     */
    public function setMaxNumberAvailChecks($maxNumberAvailChecks = null)
    {
        // validation for constraint: int
        if (!is_null($maxNumberAvailChecks) && !is_numeric($maxNumberAvailChecks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxNumberAvailChecks)), __LINE__);
        }
        $this->MaxNumberAvailChecks = $maxNumberAvailChecks;
        return $this;
    }
    /**
     * Get MaxNumberOfAvailableFares value
     * @return int|null
     */
    public function getMaxNumberOfAvailableFares()
    {
        return $this->MaxNumberOfAvailableFares;
    }
    /**
     * Set MaxNumberOfAvailableFares value
     * @param int $maxNumberOfAvailableFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterFaresSettings
     */
    public function setMaxNumberOfAvailableFares($maxNumberOfAvailableFares = null)
    {
        // validation for constraint: int
        if (!is_null($maxNumberOfAvailableFares) && !is_numeric($maxNumberOfAvailableFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxNumberOfAvailableFares)), __LINE__);
        }
        $this->MaxNumberOfAvailableFares = $maxNumberOfAvailableFares;
        return $this;
    }
    /**
     * Get MaxNumberOfCharterFares value
     * @return int|null
     */
    public function getMaxNumberOfCharterFares()
    {
        return $this->MaxNumberOfCharterFares;
    }
    /**
     * Set MaxNumberOfCharterFares value
     * @param int $maxNumberOfCharterFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterFaresSettings
     */
    public function setMaxNumberOfCharterFares($maxNumberOfCharterFares = null)
    {
        // validation for constraint: int
        if (!is_null($maxNumberOfCharterFares) && !is_numeric($maxNumberOfCharterFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxNumberOfCharterFares)), __LINE__);
        }
        $this->MaxNumberOfCharterFares = $maxNumberOfCharterFares;
        return $this;
    }
    /**
     * Get MaxNumberOfConcurrentAvails value
     * @return int|null
     */
    public function getMaxNumberOfConcurrentAvails()
    {
        return $this->MaxNumberOfConcurrentAvails;
    }
    /**
     * Set MaxNumberOfConcurrentAvails value
     * @param int $maxNumberOfConcurrentAvails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterFaresSettings
     */
    public function setMaxNumberOfConcurrentAvails($maxNumberOfConcurrentAvails = null)
    {
        // validation for constraint: int
        if (!is_null($maxNumberOfConcurrentAvails) && !is_numeric($maxNumberOfConcurrentAvails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxNumberOfConcurrentAvails)), __LINE__);
        }
        $this->MaxNumberOfConcurrentAvails = $maxNumberOfConcurrentAvails;
        return $this;
    }
    /**
     * Get Port value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPort()
    {
        return isset($this->Port) ? $this->Port : null;
    }
    /**
     * Set Port value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $port
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterFaresSettings
     */
    public function setPort($port = null)
    {
        // validation for constraint: int
        if (!is_null($port) && !is_numeric($port)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($port)), __LINE__);
        }
        if (is_null($port) || (is_array($port) && empty($port))) {
            unset($this->Port);
        } else {
            $this->Port = $port;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CharterFaresSettings
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
