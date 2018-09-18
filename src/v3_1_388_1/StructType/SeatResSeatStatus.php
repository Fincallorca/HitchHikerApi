<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatResSeatStatus StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SeatResSeatStatus
 * @subpackage Structs
 */
class SeatResSeatStatus extends AbstractStructBase
{
    /**
     * The OriginalPassengerNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OriginalPassengerNumber;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Status;
    /**
     * Constructor method for SeatResSeatStatus
     * @uses SeatResSeatStatus::setOriginalPassengerNumber()
     * @uses SeatResSeatStatus::setStatus()
     * @param string $originalPassengerNumber
     * @param string $status
     */
    public function __construct($originalPassengerNumber = null, $status = null)
    {
        $this
            ->setOriginalPassengerNumber($originalPassengerNumber)
            ->setStatus($status);
    }
    /**
     * Get OriginalPassengerNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOriginalPassengerNumber()
    {
        return isset($this->OriginalPassengerNumber) ? $this->OriginalPassengerNumber : null;
    }
    /**
     * Set OriginalPassengerNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $originalPassengerNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus
     */
    public function setOriginalPassengerNumber($originalPassengerNumber = null)
    {
        // validation for constraint: string
        if (!is_null($originalPassengerNumber) && !is_string($originalPassengerNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalPassengerNumber)), __LINE__);
        }
        if (is_null($originalPassengerNumber) || (is_array($originalPassengerNumber) && empty($originalPassengerNumber))) {
            unset($this->OriginalPassengerNumber);
        } else {
            $this->OriginalPassengerNumber = $originalPassengerNumber;
        }
        return $this;
    }
    /**
     * Get Status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatus()
    {
        return isset($this->Status) ? $this->Status : null;
    }
    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $status
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatStatus
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
