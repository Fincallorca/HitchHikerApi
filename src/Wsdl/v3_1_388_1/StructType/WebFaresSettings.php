<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebFaresSettings StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:WebFaresSettings
 * @subpackage Structs
 */
class WebFaresSettings extends AbstractStructBase
{
    /**
     * The AllowedCarriers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfWebCarrier
     */
    public $AllowedCarriers;
    /**
     * The MaxArrivalSearchRadius
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxArrivalSearchRadius;
    /**
     * The MaxDepartureSearchRadius
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxDepartureSearchRadius;
    /**
     * The MaxPaymentRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxPaymentRequests;
    /**
     * The MaxQueryWebFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxQueryWebFares;
    /**
     * The WebFarePort
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $WebFarePort;
    /**
     * The WebFareServer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WebFareServer;
    /**
     * Constructor method for WebFaresSettings
     * @uses WebFaresSettings::setAllowedCarriers()
     * @uses WebFaresSettings::setMaxArrivalSearchRadius()
     * @uses WebFaresSettings::setMaxDepartureSearchRadius()
     * @uses WebFaresSettings::setMaxPaymentRequests()
     * @uses WebFaresSettings::setMaxQueryWebFares()
     * @uses WebFaresSettings::setWebFarePort()
     * @uses WebFaresSettings::setWebFareServer()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfWebCarrier $allowedCarriers
     * @param int $maxArrivalSearchRadius
     * @param int $maxDepartureSearchRadius
     * @param int $maxPaymentRequests
     * @param int $maxQueryWebFares
     * @param int $webFarePort
     * @param string $webFareServer
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfWebCarrier $allowedCarriers = null, $maxArrivalSearchRadius = null, $maxDepartureSearchRadius = null, $maxPaymentRequests = null, $maxQueryWebFares = null, $webFarePort = null, $webFareServer = null)
    {
        $this
            ->setAllowedCarriers($allowedCarriers)
            ->setMaxArrivalSearchRadius($maxArrivalSearchRadius)
            ->setMaxDepartureSearchRadius($maxDepartureSearchRadius)
            ->setMaxPaymentRequests($maxPaymentRequests)
            ->setMaxQueryWebFares($maxQueryWebFares)
            ->setWebFarePort($webFarePort)
            ->setWebFareServer($webFareServer);
    }
    /**
     * Get AllowedCarriers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfWebCarrier|null
     */
    public function getAllowedCarriers()
    {
        return isset($this->AllowedCarriers) ? $this->AllowedCarriers : null;
    }
    /**
     * Set AllowedCarriers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfWebCarrier $allowedCarriers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebFaresSettings
     */
    public function setAllowedCarriers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfWebCarrier $allowedCarriers = null)
    {
        if (is_null($allowedCarriers) || (is_array($allowedCarriers) && empty($allowedCarriers))) {
            unset($this->AllowedCarriers);
        } else {
            $this->AllowedCarriers = $allowedCarriers;
        }
        return $this;
    }
    /**
     * Get MaxArrivalSearchRadius value
     * @return int|null
     */
    public function getMaxArrivalSearchRadius()
    {
        return $this->MaxArrivalSearchRadius;
    }
    /**
     * Set MaxArrivalSearchRadius value
     * @param int $maxArrivalSearchRadius
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebFaresSettings
     */
    public function setMaxArrivalSearchRadius($maxArrivalSearchRadius = null)
    {
        // validation for constraint: int
        if (!is_null($maxArrivalSearchRadius) && !is_numeric($maxArrivalSearchRadius)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxArrivalSearchRadius)), __LINE__);
        }
        $this->MaxArrivalSearchRadius = $maxArrivalSearchRadius;
        return $this;
    }
    /**
     * Get MaxDepartureSearchRadius value
     * @return int|null
     */
    public function getMaxDepartureSearchRadius()
    {
        return $this->MaxDepartureSearchRadius;
    }
    /**
     * Set MaxDepartureSearchRadius value
     * @param int $maxDepartureSearchRadius
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebFaresSettings
     */
    public function setMaxDepartureSearchRadius($maxDepartureSearchRadius = null)
    {
        // validation for constraint: int
        if (!is_null($maxDepartureSearchRadius) && !is_numeric($maxDepartureSearchRadius)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxDepartureSearchRadius)), __LINE__);
        }
        $this->MaxDepartureSearchRadius = $maxDepartureSearchRadius;
        return $this;
    }
    /**
     * Get MaxPaymentRequests value
     * @return int|null
     */
    public function getMaxPaymentRequests()
    {
        return $this->MaxPaymentRequests;
    }
    /**
     * Set MaxPaymentRequests value
     * @param int $maxPaymentRequests
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebFaresSettings
     */
    public function setMaxPaymentRequests($maxPaymentRequests = null)
    {
        // validation for constraint: int
        if (!is_null($maxPaymentRequests) && !is_numeric($maxPaymentRequests)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxPaymentRequests)), __LINE__);
        }
        $this->MaxPaymentRequests = $maxPaymentRequests;
        return $this;
    }
    /**
     * Get MaxQueryWebFares value
     * @return int|null
     */
    public function getMaxQueryWebFares()
    {
        return $this->MaxQueryWebFares;
    }
    /**
     * Set MaxQueryWebFares value
     * @param int $maxQueryWebFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebFaresSettings
     */
    public function setMaxQueryWebFares($maxQueryWebFares = null)
    {
        // validation for constraint: int
        if (!is_null($maxQueryWebFares) && !is_numeric($maxQueryWebFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxQueryWebFares)), __LINE__);
        }
        $this->MaxQueryWebFares = $maxQueryWebFares;
        return $this;
    }
    /**
     * Get WebFarePort value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getWebFarePort()
    {
        return isset($this->WebFarePort) ? $this->WebFarePort : null;
    }
    /**
     * Set WebFarePort value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $webFarePort
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebFaresSettings
     */
    public function setWebFarePort($webFarePort = null)
    {
        // validation for constraint: int
        if (!is_null($webFarePort) && !is_numeric($webFarePort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($webFarePort)), __LINE__);
        }
        if (is_null($webFarePort) || (is_array($webFarePort) && empty($webFarePort))) {
            unset($this->WebFarePort);
        } else {
            $this->WebFarePort = $webFarePort;
        }
        return $this;
    }
    /**
     * Get WebFareServer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWebFareServer()
    {
        return isset($this->WebFareServer) ? $this->WebFareServer : null;
    }
    /**
     * Set WebFareServer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $webFareServer
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebFaresSettings
     */
    public function setWebFareServer($webFareServer = null)
    {
        // validation for constraint: string
        if (!is_null($webFareServer) && !is_string($webFareServer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($webFareServer)), __LINE__);
        }
        if (is_null($webFareServer) || (is_array($webFareServer) && empty($webFareServer))) {
            unset($this->WebFareServer);
        } else {
            $this->WebFareServer = $webFareServer;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebFaresSettings
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
