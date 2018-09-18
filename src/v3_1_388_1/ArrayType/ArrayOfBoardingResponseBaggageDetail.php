<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBoardingResponseBaggageDetail ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBoardingResponseBaggageDetail
 * @subpackage Arrays
 */
class ArrayOfBoardingResponseBaggageDetail extends AbstractStructArrayBase
{
    /**
     * The BoardingResponseBaggageDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail[]
     */
    public $BoardingResponseBaggageDetail;
    /**
     * Constructor method for ArrayOfBoardingResponseBaggageDetail
     * @uses ArrayOfBoardingResponseBaggageDetail::setBoardingResponseBaggageDetail()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail[] $boardingResponseBaggageDetail
     */
    public function __construct(array $boardingResponseBaggageDetail = array())
    {
        $this
            ->setBoardingResponseBaggageDetail($boardingResponseBaggageDetail);
    }
    /**
     * Get BoardingResponseBaggageDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail[]|null
     */
    public function getBoardingResponseBaggageDetail()
    {
        return isset($this->BoardingResponseBaggageDetail) ? $this->BoardingResponseBaggageDetail : null;
    }
    /**
     * Set BoardingResponseBaggageDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail[] $boardingResponseBaggageDetail
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseBaggageDetail
     */
    public function setBoardingResponseBaggageDetail(array $boardingResponseBaggageDetail = array())
    {
        foreach ($boardingResponseBaggageDetail as $arrayOfBoardingResponseBaggageDetailBoardingResponseBaggageDetailItem) {
            // validation for constraint: itemType
            if (!$arrayOfBoardingResponseBaggageDetailBoardingResponseBaggageDetailItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail) {
                throw new \InvalidArgumentException(sprintf('The BoardingResponseBaggageDetail property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail, "%s" given', is_object($arrayOfBoardingResponseBaggageDetailBoardingResponseBaggageDetailItem) ? get_class($arrayOfBoardingResponseBaggageDetailBoardingResponseBaggageDetailItem) : gettype($arrayOfBoardingResponseBaggageDetailBoardingResponseBaggageDetailItem)), __LINE__);
            }
        }
        if (is_null($boardingResponseBaggageDetail) || (is_array($boardingResponseBaggageDetail) && empty($boardingResponseBaggageDetail))) {
            unset($this->BoardingResponseBaggageDetail);
        } else {
            $this->BoardingResponseBaggageDetail = $boardingResponseBaggageDetail;
        }
        return $this;
    }
    /**
     * Add item to BoardingResponseBaggageDetail value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseBaggageDetail
     */
    public function addToBoardingResponseBaggageDetail(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail) {
            throw new \InvalidArgumentException(sprintf('The BoardingResponseBaggageDetail property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BoardingResponseBaggageDetail[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BoardingResponseBaggageDetail
     */
    public function getAttributeName()
    {
        return 'BoardingResponseBaggageDetail';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseBaggageDetail
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
