<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestFareData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RequestFareData
 * @subpackage Structs
 */
class RequestFareData extends AbstractStructBase
{
    /**
     * The Charter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCharterData
     */
    public $Charter;
    /**
     * The GDS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares
     */
    public $GDS;
    /**
     * The GDSFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestGDSData
     */
    public $GDSFares;
    /**
     * The Net
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestNetData
     */
    public $Net;
    /**
     * The VayantFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData
     */
    public $VayantFares;
    /**
     * The Web
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestWebData
     */
    public $Web;
    /**
     * Constructor method for RequestFareData
     * @uses RequestFareData::setCharter()
     * @uses RequestFareData::setGDS()
     * @uses RequestFareData::setGDSFares()
     * @uses RequestFareData::setNet()
     * @uses RequestFareData::setVayantFares()
     * @uses RequestFareData::setWeb()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCharterData $charter
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares $gDS
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestGDSData $gDSFares
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestNetData $net
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData $vayantFares
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestWebData $web
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCharterData $charter = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares $gDS = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestGDSData $gDSFares = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestNetData $net = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData $vayantFares = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestWebData $web = null)
    {
        $this
            ->setCharter($charter)
            ->setGDS($gDS)
            ->setGDSFares($gDSFares)
            ->setNet($net)
            ->setVayantFares($vayantFares)
            ->setWeb($web);
    }
    /**
     * Get Charter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCharterData|null
     */
    public function getCharter()
    {
        return isset($this->Charter) ? $this->Charter : null;
    }
    /**
     * Set Charter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCharterData $charter
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareData
     */
    public function setCharter(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCharterData $charter = null)
    {
        if (is_null($charter) || (is_array($charter) && empty($charter))) {
            unset($this->Charter);
        } else {
            $this->Charter = $charter;
        }
        return $this;
    }
    /**
     * Get GDS value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares|null
     */
    public function getGDS()
    {
        return isset($this->GDS) ? $this->GDS : null;
    }
    /**
     * Set GDS value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares $gDS
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareData
     */
    public function setGDS(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares $gDS = null)
    {
        if (is_null($gDS) || (is_array($gDS) && empty($gDS))) {
            unset($this->GDS);
        } else {
            $this->GDS = $gDS;
        }
        return $this;
    }
    /**
     * Get GDSFares value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestGDSData|null
     */
    public function getGDSFares()
    {
        return isset($this->GDSFares) ? $this->GDSFares : null;
    }
    /**
     * Set GDSFares value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestGDSData $gDSFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareData
     */
    public function setGDSFares(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestGDSData $gDSFares = null)
    {
        if (is_null($gDSFares) || (is_array($gDSFares) && empty($gDSFares))) {
            unset($this->GDSFares);
        } else {
            $this->GDSFares = $gDSFares;
        }
        return $this;
    }
    /**
     * Get Net value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestNetData|null
     */
    public function getNet()
    {
        return isset($this->Net) ? $this->Net : null;
    }
    /**
     * Set Net value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestNetData $net
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareData
     */
    public function setNet(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestNetData $net = null)
    {
        if (is_null($net) || (is_array($net) && empty($net))) {
            unset($this->Net);
        } else {
            $this->Net = $net;
        }
        return $this;
    }
    /**
     * Get VayantFares value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData|null
     */
    public function getVayantFares()
    {
        return isset($this->VayantFares) ? $this->VayantFares : null;
    }
    /**
     * Set VayantFares value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData $vayantFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareData
     */
    public function setVayantFares(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData $vayantFares = null)
    {
        if (is_null($vayantFares) || (is_array($vayantFares) && empty($vayantFares))) {
            unset($this->VayantFares);
        } else {
            $this->VayantFares = $vayantFares;
        }
        return $this;
    }
    /**
     * Get Web value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestWebData|null
     */
    public function getWeb()
    {
        return isset($this->Web) ? $this->Web : null;
    }
    /**
     * Set Web value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestWebData $web
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareData
     */
    public function setWeb(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestWebData $web = null)
    {
        if (is_null($web) || (is_array($web) && empty($web))) {
            unset($this->Web);
        } else {
            $this->Web = $web;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareData
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
