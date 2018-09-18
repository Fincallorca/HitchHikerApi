<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareSegmentData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareSegmentData
 * @subpackage Arrays
 */
class ArrayOfFareSegmentData extends AbstractStructArrayBase
{
    /**
     * The FareSegmentData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData[]
     */
    public $FareSegmentData;
    /**
     * Constructor method for ArrayOfFareSegmentData
     * @uses ArrayOfFareSegmentData::setFareSegmentData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData[] $fareSegmentData
     */
    public function __construct(array $fareSegmentData = array())
    {
        $this
            ->setFareSegmentData($fareSegmentData);
    }
    /**
     * Get FareSegmentData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData[]|null
     */
    public function getFareSegmentData()
    {
        return isset($this->FareSegmentData) ? $this->FareSegmentData : null;
    }
    /**
     * Set FareSegmentData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData[] $fareSegmentData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareSegmentData
     */
    public function setFareSegmentData(array $fareSegmentData = array())
    {
        foreach ($fareSegmentData as $arrayOfFareSegmentDataFareSegmentDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareSegmentDataFareSegmentDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData) {
                throw new \InvalidArgumentException(sprintf('The FareSegmentData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData, "%s" given', is_object($arrayOfFareSegmentDataFareSegmentDataItem) ? get_class($arrayOfFareSegmentDataFareSegmentDataItem) : gettype($arrayOfFareSegmentDataFareSegmentDataItem)), __LINE__);
            }
        }
        if (is_null($fareSegmentData) || (is_array($fareSegmentData) && empty($fareSegmentData))) {
            unset($this->FareSegmentData);
        } else {
            $this->FareSegmentData = $fareSegmentData;
        }
        return $this;
    }
    /**
     * Add item to FareSegmentData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareSegmentData
     */
    public function addToFareSegmentData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData) {
            throw new \InvalidArgumentException(sprintf('The FareSegmentData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareSegmentData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareSegmentData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FareSegmentData
     */
    public function getAttributeName()
    {
        return 'FareSegmentData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareSegmentData
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
