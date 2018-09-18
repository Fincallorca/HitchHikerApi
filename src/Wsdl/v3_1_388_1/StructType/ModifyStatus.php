<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyStatus StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyStatus
 * @subpackage Structs
 */
class ModifyStatus extends AbstractStructBase
{
    /**
     * The NewSegmentStatus
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $NewSegmentStatus;
    /**
     * The SegmentIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SegmentIndex;
    /**
     * Constructor method for ModifyStatus
     * @uses ModifyStatus::setNewSegmentStatus()
     * @uses ModifyStatus::setSegmentIndex()
     * @param string $newSegmentStatus
     * @param int $segmentIndex
     */
    public function __construct($newSegmentStatus = null, $segmentIndex = null)
    {
        $this
            ->setNewSegmentStatus($newSegmentStatus)
            ->setSegmentIndex($segmentIndex);
    }
    /**
     * Get NewSegmentStatus value
     * @return string|null
     */
    public function getNewSegmentStatus()
    {
        return $this->NewSegmentStatus;
    }
    /**
     * Set NewSegmentStatus value
     * @param string $newSegmentStatus
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyStatus
     */
    public function setNewSegmentStatus($newSegmentStatus = null)
    {
        // validation for constraint: string
        if (!is_null($newSegmentStatus) && !is_string($newSegmentStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($newSegmentStatus)), __LINE__);
        }
        $this->NewSegmentStatus = $newSegmentStatus;
        return $this;
    }
    /**
     * Get SegmentIndex value
     * @return int|null
     */
    public function getSegmentIndex()
    {
        return $this->SegmentIndex;
    }
    /**
     * Set SegmentIndex value
     * @param int $segmentIndex
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyStatus
     */
    public function setSegmentIndex($segmentIndex = null)
    {
        // validation for constraint: int
        if (!is_null($segmentIndex) && !is_numeric($segmentIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($segmentIndex)), __LINE__);
        }
        $this->SegmentIndex = $segmentIndex;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyStatus
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
