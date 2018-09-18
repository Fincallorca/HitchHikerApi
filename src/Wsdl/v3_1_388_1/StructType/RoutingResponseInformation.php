<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoutingResponseInformation StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RoutingResponseInformation
 * @subpackage Structs
 */
class RoutingResponseInformation extends AbstractStructBase
{
    /**
     * The EquivCurrencyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EquivCurrencyCode;
    /**
     * The RecordSet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RecordSet;
    /**
     * The Routing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseRouting
     */
    public $Routing;
    /**
     * Constructor method for RoutingResponseInformation
     * @uses RoutingResponseInformation::setEquivCurrencyCode()
     * @uses RoutingResponseInformation::setRecordSet()
     * @uses RoutingResponseInformation::setRouting()
     * @param string $equivCurrencyCode
     * @param string $recordSet
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseRouting $routing
     */
    public function __construct($equivCurrencyCode = null, $recordSet = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseRouting $routing = null)
    {
        $this
            ->setEquivCurrencyCode($equivCurrencyCode)
            ->setRecordSet($recordSet)
            ->setRouting($routing);
    }
    /**
     * Get EquivCurrencyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEquivCurrencyCode()
    {
        return isset($this->EquivCurrencyCode) ? $this->EquivCurrencyCode : null;
    }
    /**
     * Set EquivCurrencyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $equivCurrencyCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation
     */
    public function setEquivCurrencyCode($equivCurrencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($equivCurrencyCode) && !is_string($equivCurrencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($equivCurrencyCode)), __LINE__);
        }
        if (is_null($equivCurrencyCode) || (is_array($equivCurrencyCode) && empty($equivCurrencyCode))) {
            unset($this->EquivCurrencyCode);
        } else {
            $this->EquivCurrencyCode = $equivCurrencyCode;
        }
        return $this;
    }
    /**
     * Get RecordSet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecordSet()
    {
        return isset($this->RecordSet) ? $this->RecordSet : null;
    }
    /**
     * Set RecordSet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recordSet
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation
     */
    public function setRecordSet($recordSet = null)
    {
        // validation for constraint: string
        if (!is_null($recordSet) && !is_string($recordSet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordSet)), __LINE__);
        }
        if (is_null($recordSet) || (is_array($recordSet) && empty($recordSet))) {
            unset($this->RecordSet);
        } else {
            $this->RecordSet = $recordSet;
        }
        return $this;
    }
    /**
     * Get Routing value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseRouting|null
     */
    public function getRouting()
    {
        return isset($this->Routing) ? $this->Routing : null;
    }
    /**
     * Set Routing value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseRouting $routing
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation
     */
    public function setRouting(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRoutingResponseRouting $routing = null)
    {
        if (is_null($routing) || (is_array($routing) && empty($routing))) {
            unset($this->Routing);
        } else {
            $this->Routing = $routing;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RoutingResponseInformation
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
