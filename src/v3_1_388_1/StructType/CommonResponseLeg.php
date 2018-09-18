<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommonResponseLeg StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CommonResponseLeg
 * @subpackage Structs
 */
class CommonResponseLeg extends AbstractStructBase
{
    /**
     * The SeatPreferences
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SeatPreferences;
    /**
     * The Segments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonSegmentData
     */
    public $Segments;
    /**
     * Constructor method for CommonResponseLeg
     * @uses CommonResponseLeg::setSeatPreferences()
     * @uses CommonResponseLeg::setSegments()
     * @param bool $seatPreferences
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonSegmentData $segments
     */
    public function __construct($seatPreferences = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonSegmentData $segments = null)
    {
        $this
            ->setSeatPreferences($seatPreferences)
            ->setSegments($segments);
    }
    /**
     * Get SeatPreferences value
     * @return bool|null
     */
    public function getSeatPreferences()
    {
        return $this->SeatPreferences;
    }
    /**
     * Set SeatPreferences value
     * @param bool $seatPreferences
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg
     */
    public function setSeatPreferences($seatPreferences = null)
    {
        // validation for constraint: boolean
        if (!is_null($seatPreferences) && !is_bool($seatPreferences)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($seatPreferences)), __LINE__);
        }
        $this->SeatPreferences = $seatPreferences;
        return $this;
    }
    /**
     * Get Segments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonSegmentData|null
     */
    public function getSegments()
    {
        return isset($this->Segments) ? $this->Segments : null;
    }
    /**
     * Set Segments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonSegmentData $segments
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg
     */
    public function setSegments(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonSegmentData $segments = null)
    {
        if (is_null($segments) || (is_array($segments) && empty($segments))) {
            unset($this->Segments);
        } else {
            $this->Segments = $segments;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg
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
