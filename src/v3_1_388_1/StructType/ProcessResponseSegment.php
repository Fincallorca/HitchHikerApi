<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessResponseSegment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ProcessResponseSegment
 * @subpackage Structs
 */
class ProcessResponseSegment extends AbstractStructBase
{
    /**
     * The Details
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseSegmentDetails
     */
    public $Details;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus
     */
    public $Status;
    /**
     * Constructor method for ProcessResponseSegment
     * @uses ProcessResponseSegment::setDetails()
     * @uses ProcessResponseSegment::setStatus()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseSegmentDetails $details
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus $status
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseSegmentDetails $details = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus $status = null)
    {
        $this
            ->setDetails($details)
            ->setStatus($status);
    }
    /**
     * Get Details value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseSegmentDetails|null
     */
    public function getDetails()
    {
        return isset($this->Details) ? $this->Details : null;
    }
    /**
     * Set Details value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseSegmentDetails $details
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseSegment
     */
    public function setDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseSegmentDetails $details = null)
    {
        if (is_null($details) || (is_array($details) && empty($details))) {
            unset($this->Details);
        } else {
            $this->Details = $details;
        }
        return $this;
    }
    /**
     * Get Status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus|null
     */
    public function getStatus()
    {
        return isset($this->Status) ? $this->Status : null;
    }
    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus $status
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseSegment
     */
    public function setStatus(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus $status = null)
    {
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseSegment
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
