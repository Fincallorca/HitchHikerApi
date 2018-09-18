<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSeasonDateData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSeasonDateData
 * @subpackage Arrays
 */
class ArrayOfSeasonDateData extends AbstractStructArrayBase
{
    /**
     * The SeasonDateData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData[]
     */
    public $SeasonDateData;
    /**
     * Constructor method for ArrayOfSeasonDateData
     * @uses ArrayOfSeasonDateData::setSeasonDateData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData[] $seasonDateData
     */
    public function __construct(array $seasonDateData = array())
    {
        $this
            ->setSeasonDateData($seasonDateData);
    }
    /**
     * Get SeasonDateData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData[]|null
     */
    public function getSeasonDateData()
    {
        return isset($this->SeasonDateData) ? $this->SeasonDateData : null;
    }
    /**
     * Set SeasonDateData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData[] $seasonDateData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeasonDateData
     */
    public function setSeasonDateData(array $seasonDateData = array())
    {
        foreach ($seasonDateData as $arrayOfSeasonDateDataSeasonDateDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfSeasonDateDataSeasonDateDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData) {
                throw new \InvalidArgumentException(sprintf('The SeasonDateData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData, "%s" given', is_object($arrayOfSeasonDateDataSeasonDateDataItem) ? get_class($arrayOfSeasonDateDataSeasonDateDataItem) : gettype($arrayOfSeasonDateDataSeasonDateDataItem)), __LINE__);
            }
        }
        if (is_null($seasonDateData) || (is_array($seasonDateData) && empty($seasonDateData))) {
            unset($this->SeasonDateData);
        } else {
            $this->SeasonDateData = $seasonDateData;
        }
        return $this;
    }
    /**
     * Add item to SeasonDateData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeasonDateData
     */
    public function addToSeasonDateData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData) {
            throw new \InvalidArgumentException(sprintf('The SeasonDateData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeasonDateData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SeasonDateData
     */
    public function getAttributeName()
    {
        return 'SeasonDateData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSeasonDateData
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
