<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessResponseSegmentDetails StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ProcessResponseSegmentDetails
 * @subpackage Structs
 */
class ProcessResponseSegmentDetails extends PNRResponseSegment
{
    /**
     * The GUID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GUID;
    /**
     * The PreviousArrivalDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PreviousArrivalDateTime;
    /**
     * The PreviousDepartureDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PreviousDepartureDateTime;
    /**
     * Constructor method for ProcessResponseSegmentDetails
     * @uses ProcessResponseSegmentDetails::setGUID()
     * @uses ProcessResponseSegmentDetails::setPreviousArrivalDateTime()
     * @uses ProcessResponseSegmentDetails::setPreviousDepartureDateTime()
     * @param string $gUID
     * @param string $previousArrivalDateTime
     * @param string $previousDepartureDateTime
     */
    public function __construct($gUID = null, $previousArrivalDateTime = null, $previousDepartureDateTime = null)
    {
        $this
            ->setGUID($gUID)
            ->setPreviousArrivalDateTime($previousArrivalDateTime)
            ->setPreviousDepartureDateTime($previousDepartureDateTime);
    }
    /**
     * Get GUID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGUID()
    {
        return isset($this->GUID) ? $this->GUID : null;
    }
    /**
     * Set GUID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $gUID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseSegmentDetails
     */
    public function setGUID($gUID = null)
    {
        // validation for constraint: string
        if (!is_null($gUID) && !is_string($gUID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gUID)), __LINE__);
        }
        if (is_null($gUID) || (is_array($gUID) && empty($gUID))) {
            unset($this->GUID);
        } else {
            $this->GUID = $gUID;
        }
        return $this;
    }
    /**
     * Get PreviousArrivalDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPreviousArrivalDateTime()
    {
        return isset($this->PreviousArrivalDateTime) ? $this->PreviousArrivalDateTime : null;
    }
    /**
     * Set PreviousArrivalDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $previousArrivalDateTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseSegmentDetails
     */
    public function setPreviousArrivalDateTime($previousArrivalDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($previousArrivalDateTime) && !is_string($previousArrivalDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($previousArrivalDateTime)), __LINE__);
        }
        if (is_null($previousArrivalDateTime) || (is_array($previousArrivalDateTime) && empty($previousArrivalDateTime))) {
            unset($this->PreviousArrivalDateTime);
        } else {
            $this->PreviousArrivalDateTime = $previousArrivalDateTime;
        }
        return $this;
    }
    /**
     * Get PreviousDepartureDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPreviousDepartureDateTime()
    {
        return isset($this->PreviousDepartureDateTime) ? $this->PreviousDepartureDateTime : null;
    }
    /**
     * Set PreviousDepartureDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $previousDepartureDateTime
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseSegmentDetails
     */
    public function setPreviousDepartureDateTime($previousDepartureDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($previousDepartureDateTime) && !is_string($previousDepartureDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($previousDepartureDateTime)), __LINE__);
        }
        if (is_null($previousDepartureDateTime) || (is_array($previousDepartureDateTime) && empty($previousDepartureDateTime))) {
            unset($this->PreviousDepartureDateTime);
        } else {
            $this->PreviousDepartureDateTime = $previousDepartureDateTime;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseSegmentDetails
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
