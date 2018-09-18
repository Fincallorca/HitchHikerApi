<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRequestFare StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareRequestFare
 * @subpackage Structs
 */
class FareRequestFare extends AbstractStructBase
{
    /**
     * The Charter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCharter
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
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet
     */
    public $Net;
    /**
     * The Vayant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestVayant
     */
    public $Vayant;
    /**
     * The Web
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestWeb
     */
    public $Web;
    /**
     * Constructor method for FareRequestFare
     * @uses FareRequestFare::setCharter()
     * @uses FareRequestFare::setGDS()
     * @uses FareRequestFare::setGDSFares()
     * @uses FareRequestFare::setNet()
     * @uses FareRequestFare::setVayant()
     * @uses FareRequestFare::setWeb()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCharter $charter
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares $gDS
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestGDSData $gDSFares
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet $net
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestVayant $vayant
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestWeb $web
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCharter $charter = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GDSFares $gDS = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestGDSData $gDSFares = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet $net = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestVayant $vayant = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestWeb $web = null)
    {
        $this
            ->setCharter($charter)
            ->setGDS($gDS)
            ->setGDSFares($gDSFares)
            ->setNet($net)
            ->setVayant($vayant)
            ->setWeb($web);
    }
    /**
     * Get Charter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCharter|null
     */
    public function getCharter()
    {
        return isset($this->Charter) ? $this->Charter : null;
    }
    /**
     * Set Charter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCharter $charter
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestFare
     */
    public function setCharter(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCharter $charter = null)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestFare
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestFare
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet|null
     */
    public function getNet()
    {
        return isset($this->Net) ? $this->Net : null;
    }
    /**
     * Set Net value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet $net
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestFare
     */
    public function setNet(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestNet $net = null)
    {
        if (is_null($net) || (is_array($net) && empty($net))) {
            unset($this->Net);
        } else {
            $this->Net = $net;
        }
        return $this;
    }
    /**
     * Get Vayant value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestVayant|null
     */
    public function getVayant()
    {
        return isset($this->Vayant) ? $this->Vayant : null;
    }
    /**
     * Set Vayant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestVayant $vayant
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestFare
     */
    public function setVayant(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestVayant $vayant = null)
    {
        if (is_null($vayant) || (is_array($vayant) && empty($vayant))) {
            unset($this->Vayant);
        } else {
            $this->Vayant = $vayant;
        }
        return $this;
    }
    /**
     * Get Web value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestWeb|null
     */
    public function getWeb()
    {
        return isset($this->Web) ? $this->Web : null;
    }
    /**
     * Set Web value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestWeb $web
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestFare
     */
    public function setWeb(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestWeb $web = null)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestFare
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
