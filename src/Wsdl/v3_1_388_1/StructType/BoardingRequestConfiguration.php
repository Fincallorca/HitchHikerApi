<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BoardingRequestConfiguration StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BoardingRequestConfiguration
 * @subpackage Structs
 */
class BoardingRequestConfiguration extends AbstractStructBase
{
    /**
     * The Charter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestCharterFare
     */
    public $Charter;
    /**
     * The WebFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestWebFare
     */
    public $WebFare;
    /**
     * Constructor method for BoardingRequestConfiguration
     * @uses BoardingRequestConfiguration::setCharter()
     * @uses BoardingRequestConfiguration::setWebFare()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestCharterFare $charter
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestWebFare $webFare
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestCharterFare $charter = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestWebFare $webFare = null)
    {
        $this
            ->setCharter($charter)
            ->setWebFare($webFare);
    }
    /**
     * Get Charter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestCharterFare|null
     */
    public function getCharter()
    {
        return isset($this->Charter) ? $this->Charter : null;
    }
    /**
     * Set Charter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestCharterFare $charter
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestConfiguration
     */
    public function setCharter(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestCharterFare $charter = null)
    {
        if (is_null($charter) || (is_array($charter) && empty($charter))) {
            unset($this->Charter);
        } else {
            $this->Charter = $charter;
        }
        return $this;
    }
    /**
     * Get WebFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestWebFare|null
     */
    public function getWebFare()
    {
        return isset($this->WebFare) ? $this->WebFare : null;
    }
    /**
     * Set WebFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestWebFare $webFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestConfiguration
     */
    public function setWebFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestWebFare $webFare = null)
    {
        if (is_null($webFare) || (is_array($webFare) && empty($webFare))) {
            unset($this->WebFare);
        } else {
            $this->WebFare = $webFare;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingRequestConfiguration
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
