<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NativeRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:NativeRequestData
 * @subpackage Structs
 */
class NativeRequestData extends AbstractStructBase
{
    /**
     * The CRSConfig
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public $CRSConfig;
    /**
     * The CloseSessionAfterProcessing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CloseSessionAfterProcessing;
    /**
     * The NativeRequest
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $NativeRequest;
    /**
     * The Session
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Session;
    /**
     * Constructor method for NativeRequestData
     * @uses NativeRequestData::setCRSConfig()
     * @uses NativeRequestData::setCloseSessionAfterProcessing()
     * @uses NativeRequestData::setNativeRequest()
     * @uses NativeRequestData::setSession()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @param bool $closeSessionAfterProcessing
     * @param string $nativeRequest
     * @param string $session
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null, $closeSessionAfterProcessing = null, $nativeRequest = null, $session = null)
    {
        $this
            ->setCRSConfig($cRSConfig)
            ->setCloseSessionAfterProcessing($closeSessionAfterProcessing)
            ->setNativeRequest($nativeRequest)
            ->setSession($session);
    }
    /**
     * Get CRSConfig value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS|null
     */
    public function getCRSConfig()
    {
        return $this->CRSConfig;
    }
    /**
     * Set CRSConfig value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\NativeRequestData
     */
    public function setCRSConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null)
    {
        $this->CRSConfig = $cRSConfig;
        return $this;
    }
    /**
     * Get CloseSessionAfterProcessing value
     * @return bool|null
     */
    public function getCloseSessionAfterProcessing()
    {
        return $this->CloseSessionAfterProcessing;
    }
    /**
     * Set CloseSessionAfterProcessing value
     * @param bool $closeSessionAfterProcessing
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\NativeRequestData
     */
    public function setCloseSessionAfterProcessing($closeSessionAfterProcessing = null)
    {
        // validation for constraint: boolean
        if (!is_null($closeSessionAfterProcessing) && !is_bool($closeSessionAfterProcessing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($closeSessionAfterProcessing)), __LINE__);
        }
        $this->CloseSessionAfterProcessing = $closeSessionAfterProcessing;
        return $this;
    }
    /**
     * Get NativeRequest value
     * @return string|null
     */
    public function getNativeRequest()
    {
        return $this->NativeRequest;
    }
    /**
     * Set NativeRequest value
     * @param string $nativeRequest
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\NativeRequestData
     */
    public function setNativeRequest($nativeRequest = null)
    {
        // validation for constraint: string
        if (!is_null($nativeRequest) && !is_string($nativeRequest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nativeRequest)), __LINE__);
        }
        $this->NativeRequest = $nativeRequest;
        return $this;
    }
    /**
     * Get Session value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSession()
    {
        return isset($this->Session) ? $this->Session : null;
    }
    /**
     * Set Session value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $session
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\NativeRequestData
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        if (is_null($session) || (is_array($session) && empty($session))) {
            unset($this->Session);
        } else {
            $this->Session = $session;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\NativeRequestData
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
