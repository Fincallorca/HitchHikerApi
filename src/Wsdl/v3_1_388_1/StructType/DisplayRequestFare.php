<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayRequestFare StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayRequestFare
 * @subpackage Structs
 */
class DisplayRequestFare extends AbstractStructBase
{
    /**
     * The Charter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCharter
     */
    public $Charter;
    /**
     * The GDS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestGDSFares
     */
    public $GDS;
    /**
     * The Net
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet
     */
    public $Net;
    /**
     * The Vayant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData
     */
    public $Vayant;
    /**
     * The Web
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestWeb
     */
    public $Web;
    /**
     * Constructor method for DisplayRequestFare
     * @uses DisplayRequestFare::setCharter()
     * @uses DisplayRequestFare::setGDS()
     * @uses DisplayRequestFare::setNet()
     * @uses DisplayRequestFare::setVayant()
     * @uses DisplayRequestFare::setWeb()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCharter $charter
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestGDSFares $gDS
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet $net
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData $vayant
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestWeb $web
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCharter $charter = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestGDSFares $gDS = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet $net = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData $vayant = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestWeb $web = null)
    {
        $this
            ->setCharter($charter)
            ->setGDS($gDS)
            ->setNet($net)
            ->setVayant($vayant)
            ->setWeb($web);
    }
    /**
     * Get Charter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCharter|null
     */
    public function getCharter()
    {
        return isset($this->Charter) ? $this->Charter : null;
    }
    /**
     * Set Charter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCharter $charter
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestFare
     */
    public function setCharter(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCharter $charter = null)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestGDSFares|null
     */
    public function getGDS()
    {
        return isset($this->GDS) ? $this->GDS : null;
    }
    /**
     * Set GDS value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestGDSFares $gDS
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestFare
     */
    public function setGDS(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestGDSFares $gDS = null)
    {
        if (is_null($gDS) || (is_array($gDS) && empty($gDS))) {
            unset($this->GDS);
        } else {
            $this->GDS = $gDS;
        }
        return $this;
    }
    /**
     * Get Net value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet|null
     */
    public function getNet()
    {
        return isset($this->Net) ? $this->Net : null;
    }
    /**
     * Set Net value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet $net
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestFare
     */
    public function setNet(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestNet $net = null)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData|null
     */
    public function getVayant()
    {
        return isset($this->Vayant) ? $this->Vayant : null;
    }
    /**
     * Set Vayant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData $vayant
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestFare
     */
    public function setVayant(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestVayantData $vayant = null)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestWeb|null
     */
    public function getWeb()
    {
        return isset($this->Web) ? $this->Web : null;
    }
    /**
     * Set Web value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestWeb $web
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestFare
     */
    public function setWeb(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestWeb $web = null)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestFare
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
