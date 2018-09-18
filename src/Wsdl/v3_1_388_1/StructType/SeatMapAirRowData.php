<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatMapAirRowData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SeatMapAirRowData
 * @subpackage Structs
 */
class SeatMapAirRowData extends AbstractStructBase
{
    /**
     * The AirSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapAirSeatData
     */
    public $AirSeats;
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
     * @var int
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
     * Constructor method for SeatMapAirRowData
     * @uses SeatMapAirRowData::setAirSeats()
     * @uses SeatMapAirRowData::setCharacteristics()
     * @uses SeatMapAirRowData::setNumber()
     * @uses SeatMapAirRowData::setPriceIndex()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapAirSeatData $airSeats
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapCharacteristicData $characteristics
     * @param int $number
     * @param int $priceIndex
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapAirSeatData $airSeats = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapCharacteristicData $characteristics = null, $number = null, $priceIndex = null)
    {
        $this
            ->setAirSeats($airSeats)
            ->setCharacteristics($characteristics)
            ->setNumber($number)
            ->setPriceIndex($priceIndex);
    }
    /**
     * Get AirSeats value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapAirSeatData|null
     */
    public function getAirSeats()
    {
        return isset($this->AirSeats) ? $this->AirSeats : null;
    }
    /**
     * Set AirSeats value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapAirSeatData $airSeats
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData
     */
    public function setAirSeats(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapAirSeatData $airSeats = null)
    {
        if (is_null($airSeats) || (is_array($airSeats) && empty($airSeats))) {
            unset($this->AirSeats);
        } else {
            $this->AirSeats = $airSeats;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData
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
     * @return int|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param int $number
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData
     */
    public function setNumber($number = null)
    {
        // validation for constraint: int
        if (!is_null($number) && !is_numeric($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapAirRowData
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
