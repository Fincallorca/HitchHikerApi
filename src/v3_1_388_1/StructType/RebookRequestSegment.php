<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RebookRequestSegment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RebookRequestSegment
 * @subpackage Structs
 */
class RebookRequestSegment extends AbstractStructBase
{
    /**
     * The BookingClass
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $BookingClass;
    /**
     * The OriginalSegmentNumbers
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $OriginalSegmentNumbers;
    /**
     * Constructor method for RebookRequestSegment
     * @uses RebookRequestSegment::setBookingClass()
     * @uses RebookRequestSegment::setOriginalSegmentNumbers()
     * @param string $bookingClass
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $originalSegmentNumbers
     */
    public function __construct($bookingClass = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $originalSegmentNumbers = null)
    {
        $this
            ->setBookingClass($bookingClass)
            ->setOriginalSegmentNumbers($originalSegmentNumbers);
    }
    /**
     * Get BookingClass value
     * @return string|null
     */
    public function getBookingClass()
    {
        return $this->BookingClass;
    }
    /**
     * Set BookingClass value
     * @param string $bookingClass
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment
     */
    public function setBookingClass($bookingClass = null)
    {
        // validation for constraint: string
        if (!is_null($bookingClass) && !is_string($bookingClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingClass)), __LINE__);
        }
        $this->BookingClass = $bookingClass;
        return $this;
    }
    /**
     * Get OriginalSegmentNumbers value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getOriginalSegmentNumbers()
    {
        return $this->OriginalSegmentNumbers;
    }
    /**
     * Set OriginalSegmentNumbers value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $originalSegmentNumbers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment
     */
    public function setOriginalSegmentNumbers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $originalSegmentNumbers = null)
    {
        $this->OriginalSegmentNumbers = $originalSegmentNumbers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment
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
