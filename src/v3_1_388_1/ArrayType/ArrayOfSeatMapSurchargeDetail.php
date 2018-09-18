<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSeatMapSurchargeDetail ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSeatMapSurchargeDetail
 * @subpackage Arrays
 */
class ArrayOfSeatMapSurchargeDetail extends AbstractStructArrayBase
{
    /**
     * The SeatMapSurchargeDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail[]
     */
    public $SeatMapSurchargeDetail;
    /**
     * Constructor method for ArrayOfSeatMapSurchargeDetail
     * @uses ArrayOfSeatMapSurchargeDetail::setSeatMapSurchargeDetail()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail[] $seatMapSurchargeDetail
     */
    public function __construct(array $seatMapSurchargeDetail = array())
    {
        $this
            ->setSeatMapSurchargeDetail($seatMapSurchargeDetail);
    }
    /**
     * Get SeatMapSurchargeDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail[]|null
     */
    public function getSeatMapSurchargeDetail()
    {
        return isset($this->SeatMapSurchargeDetail) ? $this->SeatMapSurchargeDetail : null;
    }
    /**
     * Set SeatMapSurchargeDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail[] $seatMapSurchargeDetail
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapSurchargeDetail
     */
    public function setSeatMapSurchargeDetail(array $seatMapSurchargeDetail = array())
    {
        foreach ($seatMapSurchargeDetail as $arrayOfSeatMapSurchargeDetailSeatMapSurchargeDetailItem) {
            // validation for constraint: itemType
            if (!$arrayOfSeatMapSurchargeDetailSeatMapSurchargeDetailItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail) {
                throw new \InvalidArgumentException(sprintf('The SeatMapSurchargeDetail property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail, "%s" given', is_object($arrayOfSeatMapSurchargeDetailSeatMapSurchargeDetailItem) ? get_class($arrayOfSeatMapSurchargeDetailSeatMapSurchargeDetailItem) : gettype($arrayOfSeatMapSurchargeDetailSeatMapSurchargeDetailItem)), __LINE__);
            }
        }
        if (is_null($seatMapSurchargeDetail) || (is_array($seatMapSurchargeDetail) && empty($seatMapSurchargeDetail))) {
            unset($this->SeatMapSurchargeDetail);
        } else {
            $this->SeatMapSurchargeDetail = $seatMapSurchargeDetail;
        }
        return $this;
    }
    /**
     * Add item to SeatMapSurchargeDetail value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapSurchargeDetail
     */
    public function addToSeatMapSurchargeDetail(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail) {
            throw new \InvalidArgumentException(sprintf('The SeatMapSurchargeDetail property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatMapSurchargeDetail[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapSurchargeDetail|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SeatMapSurchargeDetail
     */
    public function getAttributeName()
    {
        return 'SeatMapSurchargeDetail';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeatMapSurchargeDetail
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
