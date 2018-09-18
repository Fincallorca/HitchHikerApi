<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LegConnectionData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LegConnectionData
 * @subpackage Structs
 */
class LegConnectionData extends AbstractStructBase
{
    /**
     * The AvailString
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AvailString;
    /**
     * The FareGroups
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $FareGroups;
    /**
     * The IsCached
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCached;
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
     * The Segments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareSegmentData
     */
    public $Segments;
    /**
     * Constructor method for LegConnectionData
     * @uses LegConnectionData::setAvailString()
     * @uses LegConnectionData::setFareGroups()
     * @uses LegConnectionData::setIsCached()
     * @uses LegConnectionData::setLegTravelTime()
     * @uses LegConnectionData::setSegments()
     * @param string $availString
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups
     * @param bool $isCached
     * @param string $legTravelTime
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareSegmentData $segments
     */
    public function __construct($availString = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups = null, $isCached = null, $legTravelTime = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareSegmentData $segments = null)
    {
        $this
            ->setAvailString($availString)
            ->setFareGroups($fareGroups)
            ->setIsCached($isCached)
            ->setLegTravelTime($legTravelTime)
            ->setSegments($segments);
    }
    /**
     * Get AvailString value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAvailString()
    {
        return isset($this->AvailString) ? $this->AvailString : null;
    }
    /**
     * Set AvailString value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $availString
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData
     */
    public function setAvailString($availString = null)
    {
        // validation for constraint: string
        if (!is_null($availString) && !is_string($availString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($availString)), __LINE__);
        }
        if (is_null($availString) || (is_array($availString) && empty($availString))) {
            unset($this->AvailString);
        } else {
            $this->AvailString = $availString;
        }
        return $this;
    }
    /**
     * Get FareGroups value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getFareGroups()
    {
        return isset($this->FareGroups) ? $this->FareGroups : null;
    }
    /**
     * Set FareGroups value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData
     */
    public function setFareGroups(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $fareGroups = null)
    {
        if (is_null($fareGroups) || (is_array($fareGroups) && empty($fareGroups))) {
            unset($this->FareGroups);
        } else {
            $this->FareGroups = $fareGroups;
        }
        return $this;
    }
    /**
     * Get IsCached value
     * @return bool|null
     */
    public function getIsCached()
    {
        return $this->IsCached;
    }
    /**
     * Set IsCached value
     * @param bool $isCached
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData
     */
    public function setIsCached($isCached = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCached) && !is_bool($isCached)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCached)), __LINE__);
        }
        $this->IsCached = $isCached;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData
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
     * Get Segments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareSegmentData|null
     */
    public function getSegments()
    {
        return isset($this->Segments) ? $this->Segments : null;
    }
    /**
     * Set Segments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareSegmentData $segments
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData
     */
    public function setSegments(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareSegmentData $segments = null)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\LegConnectionData
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
