<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatMapSurchargeDetail StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SeatMapSurchargeDetail
 * @subpackage Structs
 */
class SeatMapSurchargeDetail extends AbstractStructBase
{
    /**
     * The PriceIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PriceIndex;
    /**
     * The SeatSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public $SeatSurcharge;
    /**
     * Constructor method for SeatMapSurchargeDetail
     * @uses SeatMapSurchargeDetail::setPriceIndex()
     * @uses SeatMapSurchargeDetail::setSeatSurcharge()
     * @param int $priceIndex
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $seatSurcharge
     */
    public function __construct($priceIndex = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $seatSurcharge = null)
    {
        $this
            ->setPriceIndex($priceIndex)
            ->setSeatSurcharge($seatSurcharge);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail
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
     * Get SeatSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData|null
     */
    public function getSeatSurcharge()
    {
        return isset($this->SeatSurcharge) ? $this->SeatSurcharge : null;
    }
    /**
     * Set SeatSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $seatSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail
     */
    public function setSeatSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $seatSurcharge = null)
    {
        if (is_null($seatSurcharge) || (is_array($seatSurcharge) && empty($seatSurcharge))) {
            unset($this->SeatSurcharge);
        } else {
            $this->SeatSurcharge = $seatSurcharge;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail
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
