<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailabilityResponseAlternativeType StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AvailabilityResponseAlternativeType
 * @subpackage Structs
 */
class AvailabilityResponseAlternativeType extends AbstractStructBase
{
    /**
     * The AvailabilityString
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AvailabilityString;
    /**
     * The LegTravelTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true | true
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string
     */
    public $LegTravelTime;
    /**
     * The SegmentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseSegmentType
     */
    public $SegmentType;
    /**
     * Constructor method for AvailabilityResponseAlternativeType
     * @uses AvailabilityResponseAlternativeType::setAvailabilityString()
     * @uses AvailabilityResponseAlternativeType::setLegTravelTime()
     * @uses AvailabilityResponseAlternativeType::setSegmentType()
     * @param string $availabilityString
     * @param string $legTravelTime
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseSegmentType $segmentType
     */
    public function __construct($availabilityString = null, $legTravelTime = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseSegmentType $segmentType = null)
    {
        $this
            ->setAvailabilityString($availabilityString)
            ->setLegTravelTime($legTravelTime)
            ->setSegmentType($segmentType);
    }
    /**
     * Get AvailabilityString value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAvailabilityString()
    {
        return isset($this->AvailabilityString) ? $this->AvailabilityString : null;
    }
    /**
     * Set AvailabilityString value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $availabilityString
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType
     */
    public function setAvailabilityString($availabilityString = null)
    {
        // validation for constraint: string
        if (!is_null($availabilityString) && !is_string($availabilityString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($availabilityString)), __LINE__);
        }
        if (is_null($availabilityString) || (is_array($availabilityString) && empty($availabilityString))) {
            unset($this->AvailabilityString);
        } else {
            $this->AvailabilityString = $availabilityString;
        }
        return $this;
    }
    /**
     * Get LegTravelTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLegTravelTime()
    {
        return isset($this->LegTravelTime) ? $this->LegTravelTime : null;
    }
    /**
     * Set LegTravelTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $legTravelTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType
     */
    public function setLegTravelTime($legTravelTime = null)
    {
        // validation for constraint: maxInclusive
        if ($legTravelTime > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $legTravelTime), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($legTravelTime < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $legTravelTime), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($legTravelTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $legTravelTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($legTravelTime, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($legTravelTime) && !is_string($legTravelTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legTravelTime)), __LINE__);
        }
        if (is_null($legTravelTime) || (is_array($legTravelTime) && empty($legTravelTime))) {
            unset($this->LegTravelTime);
        } else {
            $this->LegTravelTime = $legTravelTime;
        }
        return $this;
    }
    /**
     * Get SegmentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseSegmentType|null
     */
    public function getSegmentType()
    {
        return isset($this->SegmentType) ? $this->SegmentType : null;
    }
    /**
     * Set SegmentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseSegmentType $segmentType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType
     */
    public function setSegmentType(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAvailabilityResponseSegmentType $segmentType = null)
    {
        if (is_null($segmentType) || (is_array($segmentType) && empty($segmentType))) {
            unset($this->SegmentType);
        } else {
            $this->SegmentType = $segmentType;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AvailabilityResponseAlternativeType
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
