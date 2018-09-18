<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatResSeatData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SeatResSeatData
 * @subpackage Structs
 */
class SeatResSeatData extends AbstractStructBase
{
    /**
     * The OriginalPassengerNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $OriginalPassengerNumber;
    /**
     * The RowNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RowNumber;
    /**
     * The SeatNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SeatNumber;
    /**
     * The SeatPreference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SeatPreference;
    /**
     * Constructor method for SeatResSeatData
     * @uses SeatResSeatData::setOriginalPassengerNumber()
     * @uses SeatResSeatData::setRowNumber()
     * @uses SeatResSeatData::setSeatNumber()
     * @uses SeatResSeatData::setSeatPreference()
     * @param string $originalPassengerNumber
     * @param string $rowNumber
     * @param string $seatNumber
     * @param string $seatPreference
     */
    public function __construct($originalPassengerNumber = null, $rowNumber = null, $seatNumber = null, $seatPreference = null)
    {
        $this
            ->setOriginalPassengerNumber($originalPassengerNumber)
            ->setRowNumber($rowNumber)
            ->setSeatNumber($seatNumber)
            ->setSeatPreference($seatPreference);
    }
    /**
     * Get OriginalPassengerNumber value
     * @return string|null
     */
    public function getOriginalPassengerNumber()
    {
        return $this->OriginalPassengerNumber;
    }
    /**
     * Set OriginalPassengerNumber value
     * @param string $originalPassengerNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData
     */
    public function setOriginalPassengerNumber($originalPassengerNumber = null)
    {
        // validation for constraint: string
        if (!is_null($originalPassengerNumber) && !is_string($originalPassengerNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalPassengerNumber)), __LINE__);
        }
        $this->OriginalPassengerNumber = $originalPassengerNumber;
        return $this;
    }
    /**
     * Get RowNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRowNumber()
    {
        return isset($this->RowNumber) ? $this->RowNumber : null;
    }
    /**
     * Set RowNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $rowNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData
     */
    public function setRowNumber($rowNumber = null)
    {
        // validation for constraint: string
        if (!is_null($rowNumber) && !is_string($rowNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rowNumber)), __LINE__);
        }
        if (is_null($rowNumber) || (is_array($rowNumber) && empty($rowNumber))) {
            unset($this->RowNumber);
        } else {
            $this->RowNumber = $rowNumber;
        }
        return $this;
    }
    /**
     * Get SeatNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSeatNumber()
    {
        return isset($this->SeatNumber) ? $this->SeatNumber : null;
    }
    /**
     * Set SeatNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $seatNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData
     */
    public function setSeatNumber($seatNumber = null)
    {
        // validation for constraint: string
        if (!is_null($seatNumber) && !is_string($seatNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatNumber)), __LINE__);
        }
        if (is_null($seatNumber) || (is_array($seatNumber) && empty($seatNumber))) {
            unset($this->SeatNumber);
        } else {
            $this->SeatNumber = $seatNumber;
        }
        return $this;
    }
    /**
     * Get SeatPreference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSeatPreference()
    {
        return isset($this->SeatPreference) ? $this->SeatPreference : null;
    }
    /**
     * Set SeatPreference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $seatPreference
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData
     */
    public function setSeatPreference($seatPreference = null)
    {
        // validation for constraint: string
        if (!is_null($seatPreference) && !is_string($seatPreference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatPreference)), __LINE__);
        }
        if (is_null($seatPreference) || (is_array($seatPreference) && empty($seatPreference))) {
            unset($this->SeatPreference);
        } else {
            $this->SeatPreference = $seatPreference;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatResSeatData
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
