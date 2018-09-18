<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookRequestLeg StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BookRequestLeg
 * @subpackage Structs
 */
class BookRequestLeg extends AbstractStructBase
{
    /**
     * The AvailString
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $AvailString;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CarrierCode;
    /**
     * The Segments
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestSegment
     */
    public $Segments;
    /**
     * Constructor method for BookRequestLeg
     * @uses BookRequestLeg::setAvailString()
     * @uses BookRequestLeg::setCarrierCode()
     * @uses BookRequestLeg::setSegments()
     * @param string $availString
     * @param string $carrierCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestSegment $segments
     */
    public function __construct($availString = null, $carrierCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestSegment $segments = null)
    {
        $this
            ->setAvailString($availString)
            ->setCarrierCode($carrierCode)
            ->setSegments($segments);
    }
    /**
     * Get AvailString value
     * @return string|null
     */
    public function getAvailString()
    {
        return $this->AvailString;
    }
    /**
     * Set AvailString value
     * @param string $availString
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg
     */
    public function setAvailString($availString = null)
    {
        // validation for constraint: string
        if (!is_null($availString) && !is_string($availString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($availString)), __LINE__);
        }
        $this->AvailString = $availString;
        return $this;
    }
    /**
     * Get CarrierCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCarrierCode()
    {
        return isset($this->CarrierCode) ? $this->CarrierCode : null;
    }
    /**
     * Set CarrierCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $carrierCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierCode)), __LINE__);
        }
        if (is_null($carrierCode) || (is_array($carrierCode) && empty($carrierCode))) {
            unset($this->CarrierCode);
        } else {
            $this->CarrierCode = $carrierCode;
        }
        return $this;
    }
    /**
     * Get Segments value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestSegment|null
     */
    public function getSegments()
    {
        return $this->Segments;
    }
    /**
     * Set Segments value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestSegment $segments
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg
     */
    public function setSegments(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBookRequestSegment $segments = null)
    {
        $this->Segments = $segments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestLeg
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
