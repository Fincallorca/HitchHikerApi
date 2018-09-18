<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatMapAirSeatData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SeatMapAirSeatData
 * @subpackage Structs
 */
class SeatMapAirSeatData extends AbstractStructBase
{
    /**
     * The AvailabilityData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAvailabilityData
     */
    public $AvailabilityData;
    /**
     * The Characteristics
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapCharacteristicData
     */
    public $Characteristics;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Number;
    /**
     * The PriceIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PriceIndex;
    /**
     * Constructor method for SeatMapAirSeatData
     * @uses SeatMapAirSeatData::setAvailabilityData()
     * @uses SeatMapAirSeatData::setCharacteristics()
     * @uses SeatMapAirSeatData::setNumber()
     * @uses SeatMapAirSeatData::setPriceIndex()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAvailabilityData $availabilityData
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapCharacteristicData $characteristics
     * @param string $number
     * @param int $priceIndex
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAvailabilityData $availabilityData = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapCharacteristicData $characteristics = null, $number = null, $priceIndex = null)
    {
        $this
            ->setAvailabilityData($availabilityData)
            ->setCharacteristics($characteristics)
            ->setNumber($number)
            ->setPriceIndex($priceIndex);
    }
    /**
     * Get AvailabilityData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAvailabilityData|null
     */
    public function getAvailabilityData()
    {
        return isset($this->AvailabilityData) ? $this->AvailabilityData : null;
    }
    /**
     * Set AvailabilityData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAvailabilityData $availabilityData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData
     */
    public function setAvailabilityData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAvailabilityData $availabilityData = null)
    {
        if (is_null($availabilityData) || (is_array($availabilityData) && empty($availabilityData))) {
            unset($this->AvailabilityData);
        } else {
            $this->AvailabilityData = $availabilityData;
        }
        return $this;
    }
    /**
     * Get Characteristics value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapCharacteristicData|null
     */
    public function getCharacteristics()
    {
        return isset($this->Characteristics) ? $this->Characteristics : null;
    }
    /**
     * Set Characteristics value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapCharacteristicData $characteristics
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData
     */
    public function setCharacteristics(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapCharacteristicData $characteristics = null)
    {
        if (is_null($characteristics) || (is_array($characteristics) && empty($characteristics))) {
            unset($this->Characteristics);
        } else {
            $this->Characteristics = $characteristics;
        }
        return $this;
    }
    /**
     * Get Number value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNumber()
    {
        return isset($this->Number) ? $this->Number : null;
    }
    /**
     * Set Number value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $number
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        if (is_null($number) || (is_array($number) && empty($number))) {
            unset($this->Number);
        } else {
            $this->Number = $number;
        }
        return $this;
    }
    /**
     * Get PriceIndex value
     * @return int|null
     */
    public function getPriceIndex()
    {
        return $this->PriceIndex;
    }
    /**
     * Set PriceIndex value
     * @param int $priceIndex
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData
     */
    public function setPriceIndex($priceIndex = null)
    {
        // validation for constraint: int
        if (!is_null($priceIndex) && !is_numeric($priceIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($priceIndex)), __LINE__);
        }
        $this->PriceIndex = $priceIndex;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirSeatData
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
