<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBoardingResponseDetail ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBoardingResponseDetail
 * @subpackage Arrays
 */
class ArrayOfBoardingResponseDetail extends AbstractStructArrayBase
{
    /**
     * The BoardingResponseDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail[]
     */
    public $BoardingResponseDetail;
    /**
     * Constructor method for ArrayOfBoardingResponseDetail
     * @uses ArrayOfBoardingResponseDetail::setBoardingResponseDetail()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail[] $boardingResponseDetail
     */
    public function __construct(array $boardingResponseDetail = array())
    {
        $this
            ->setBoardingResponseDetail($boardingResponseDetail);
    }
    /**
     * Get BoardingResponseDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail[]|null
     */
    public function getBoardingResponseDetail()
    {
        return isset($this->BoardingResponseDetail) ? $this->BoardingResponseDetail : null;
    }
    /**
     * Set BoardingResponseDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail[] $boardingResponseDetail
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseDetail
     */
    public function setBoardingResponseDetail(array $boardingResponseDetail = array())
    {
        foreach ($boardingResponseDetail as $arrayOfBoardingResponseDetailBoardingResponseDetailItem) {
            // validation for constraint: itemType
            if (!$arrayOfBoardingResponseDetailBoardingResponseDetailItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail) {
                throw new \InvalidArgumentException(sprintf('The BoardingResponseDetail property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail, "%s" given', is_object($arrayOfBoardingResponseDetailBoardingResponseDetailItem) ? get_class($arrayOfBoardingResponseDetailBoardingResponseDetailItem) : gettype($arrayOfBoardingResponseDetailBoardingResponseDetailItem)), __LINE__);
            }
        }
        if (is_null($boardingResponseDetail) || (is_array($boardingResponseDetail) && empty($boardingResponseDetail))) {
            unset($this->BoardingResponseDetail);
        } else {
            $this->BoardingResponseDetail = $boardingResponseDetail;
        }
        return $this;
    }
    /**
     * Add item to BoardingResponseDetail value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseDetail
     */
    public function addToBoardingResponseDetail(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail) {
            throw new \InvalidArgumentException(sprintf('The BoardingResponseDetail property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BoardingResponseDetail[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseDetail|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BoardingResponseDetail
     */
    public function getAttributeName()
    {
        return 'BoardingResponseDetail';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBoardingResponseDetail
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
