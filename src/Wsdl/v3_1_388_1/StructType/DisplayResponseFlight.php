<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayResponseFlight StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayResponseFlight
 * @subpackage Structs
 */
class DisplayResponseFlight extends AbstractStructBase
{
    /**
     * The CharterSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CharterSource;
    /**
     * The Legs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseLeg
     */
    public $Legs;
    /**
     * The OriginalCurrency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OriginalCurrency;
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassenger
     */
    public $Passengers;
    /**
     * The Recordset
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Recordset;
    /**
     * The Supplier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair
     */
    public $Supplier;
    /**
     * Constructor method for DisplayResponseFlight
     * @uses DisplayResponseFlight::setCharterSource()
     * @uses DisplayResponseFlight::setLegs()
     * @uses DisplayResponseFlight::setOriginalCurrency()
     * @uses DisplayResponseFlight::setPassengers()
     * @uses DisplayResponseFlight::setRecordset()
     * @uses DisplayResponseFlight::setSupplier()
     * @param string $charterSource
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseLeg $legs
     * @param string $originalCurrency
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassenger $passengers
     * @param string $recordset
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $supplier
     */
    public function __construct($charterSource = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseLeg $legs = null, $originalCurrency = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassenger $passengers = null, $recordset = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $supplier = null)
    {
        $this
            ->setCharterSource($charterSource)
            ->setLegs($legs)
            ->setOriginalCurrency($originalCurrency)
            ->setPassengers($passengers)
            ->setRecordset($recordset)
            ->setSupplier($supplier);
    }
    /**
     * Get CharterSource value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCharterSource()
    {
        return isset($this->CharterSource) ? $this->CharterSource : null;
    }
    /**
     * Set CharterSource value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $charterSource
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFlight
     */
    public function setCharterSource($charterSource = null)
    {
        // validation for constraint: string
        if (!is_null($charterSource) && !is_string($charterSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($charterSource)), __LINE__);
        }
        if (is_null($charterSource) || (is_array($charterSource) && empty($charterSource))) {
            unset($this->CharterSource);
        } else {
            $this->CharterSource = $charterSource;
        }
        return $this;
    }
    /**
     * Get Legs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseLeg|null
     */
    public function getLegs()
    {
        return isset($this->Legs) ? $this->Legs : null;
    }
    /**
     * Set Legs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseLeg $legs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFlight
     */
    public function setLegs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseLeg $legs = null)
    {
        if (is_null($legs) || (is_array($legs) && empty($legs))) {
            unset($this->Legs);
        } else {
            $this->Legs = $legs;
        }
        return $this;
    }
    /**
     * Get OriginalCurrency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOriginalCurrency()
    {
        return isset($this->OriginalCurrency) ? $this->OriginalCurrency : null;
    }
    /**
     * Set OriginalCurrency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $originalCurrency
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFlight
     */
    public function setOriginalCurrency($originalCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($originalCurrency) && !is_string($originalCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalCurrency)), __LINE__);
        }
        if (is_null($originalCurrency) || (is_array($originalCurrency) && empty($originalCurrency))) {
            unset($this->OriginalCurrency);
        } else {
            $this->OriginalCurrency = $originalCurrency;
        }
        return $this;
    }
    /**
     * Get Passengers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassenger|null
     */
    public function getPassengers()
    {
        return isset($this->Passengers) ? $this->Passengers : null;
    }
    /**
     * Set Passengers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassenger $passengers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFlight
     */
    public function setPassengers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassenger $passengers = null)
    {
        if (is_null($passengers) || (is_array($passengers) && empty($passengers))) {
            unset($this->Passengers);
        } else {
            $this->Passengers = $passengers;
        }
        return $this;
    }
    /**
     * Get Recordset value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecordset()
    {
        return isset($this->Recordset) ? $this->Recordset : null;
    }
    /**
     * Set Recordset value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recordset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFlight
     */
    public function setRecordset($recordset = null)
    {
        // validation for constraint: string
        if (!is_null($recordset) && !is_string($recordset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordset)), __LINE__);
        }
        if (is_null($recordset) || (is_array($recordset) && empty($recordset))) {
            unset($this->Recordset);
        } else {
            $this->Recordset = $recordset;
        }
        return $this;
    }
    /**
     * Get Supplier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair|null
     */
    public function getSupplier()
    {
        return isset($this->Supplier) ? $this->Supplier : null;
    }
    /**
     * Set Supplier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $supplier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFlight
     */
    public function setSupplier(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $supplier = null)
    {
        if (is_null($supplier) || (is_array($supplier) && empty($supplier))) {
            unset($this->Supplier);
        } else {
            $this->Supplier = $supplier;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseFlight
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
