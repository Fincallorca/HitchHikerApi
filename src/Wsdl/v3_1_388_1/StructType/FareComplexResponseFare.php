<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareComplexResponseFare StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareComplexResponseFare
 * @subpackage Structs
 */
class FareComplexResponseFare extends AbstractStructBase
{
    /**
     * The FareItems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFareItem
     */
    public $FareItems;
    /**
     * The TotalPriceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice
     */
    public $TotalPriceDetail;
    /**
     * Constructor method for FareComplexResponseFare
     * @uses FareComplexResponseFare::setFareItems()
     * @uses FareComplexResponseFare::setTotalPriceDetail()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFareItem $fareItems
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice $totalPriceDetail
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFareItem $fareItems = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice $totalPriceDetail = null)
    {
        $this
            ->setFareItems($fareItems)
            ->setTotalPriceDetail($totalPriceDetail);
    }
    /**
     * Get FareItems value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFareItem|null
     */
    public function getFareItems()
    {
        return isset($this->FareItems) ? $this->FareItems : null;
    }
    /**
     * Set FareItems value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFareItem $fareItems
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare
     */
    public function setFareItems(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexResponseFareItem $fareItems = null)
    {
        if (is_null($fareItems) || (is_array($fareItems) && empty($fareItems))) {
            unset($this->FareItems);
        } else {
            $this->FareItems = $fareItems;
        }
        return $this;
    }
    /**
     * Get TotalPriceDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice|null
     */
    public function getTotalPriceDetail()
    {
        return isset($this->TotalPriceDetail) ? $this->TotalPriceDetail : null;
    }
    /**
     * Set TotalPriceDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice $totalPriceDetail
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare
     */
    public function setTotalPriceDetail(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TotalPrice $totalPriceDetail = null)
    {
        if (is_null($totalPriceDetail) || (is_array($totalPriceDetail) && empty($totalPriceDetail))) {
            unset($this->TotalPriceDetail);
        } else {
            $this->TotalPriceDetail = $totalPriceDetail;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexResponseFare
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
