<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCommonSegmentData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCommonSegmentData
 * @subpackage Arrays
 */
class ArrayOfCommonSegmentData extends AbstractStructArrayBase
{
    /**
     * The CommonSegmentData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonSegmentData[]
     */
    public $CommonSegmentData;
    /**
     * Constructor method for ArrayOfCommonSegmentData
     * @uses ArrayOfCommonSegmentData::setCommonSegmentData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonSegmentData[] $commonSegmentData
     */
    public function __construct(array $commonSegmentData = array())
    {
        $this
            ->setCommonSegmentData($commonSegmentData);
    }
    /**
     * Get CommonSegmentData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonSegmentData[]|null
     */
    public function getCommonSegmentData()
    {
        return isset($this->CommonSegmentData) ? $this->CommonSegmentData : null;
    }
    /**
     * Set CommonSegmentData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonSegmentData[] $commonSegmentData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonSegmentData
     */
    public function setCommonSegmentData(array $commonSegmentData = array())
    {
        foreach ($commonSegmentData as $arrayOfCommonSegmentDataCommonSegmentDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfCommonSegmentDataCommonSegmentDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonSegmentData) {
                throw new \InvalidArgumentException(sprintf('The CommonSegmentData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonSegmentData, "%s" given', is_object($arrayOfCommonSegmentDataCommonSegmentDataItem) ? get_class($arrayOfCommonSegmentDataCommonSegmentDataItem) : gettype($arrayOfCommonSegmentDataCommonSegmentDataItem)), __LINE__);
            }
        }
        if (is_null($commonSegmentData) || (is_array($commonSegmentData) && empty($commonSegmentData))) {
            unset($this->CommonSegmentData);
        } else {
            $this->CommonSegmentData = $commonSegmentData;
        }
        return $this;
    }
    /**
     * Add item to CommonSegmentData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonSegmentData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonSegmentData
     */
    public function addToCommonSegmentData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonSegmentData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonSegmentData) {
            throw new \InvalidArgumentException(sprintf('The CommonSegmentData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonSegmentData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CommonSegmentData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonSegmentData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonSegmentData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonSegmentData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonSegmentData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonSegmentData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CommonSegmentData
     */
    public function getAttributeName()
    {
        return 'CommonSegmentData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonSegmentData
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
