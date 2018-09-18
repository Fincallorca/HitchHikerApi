<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareResponseUserData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareResponseUserData
 * @subpackage Arrays
 */
class ArrayOfFareResponseUserData extends AbstractStructArrayBase
{
    /**
     * The FareResponseUserData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseUserData[]
     */
    public $FareResponseUserData;
    /**
     * Constructor method for ArrayOfFareResponseUserData
     * @uses ArrayOfFareResponseUserData::setFareResponseUserData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseUserData[] $fareResponseUserData
     */
    public function __construct(array $fareResponseUserData = array())
    {
        $this
            ->setFareResponseUserData($fareResponseUserData);
    }
    /**
     * Get FareResponseUserData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseUserData[]|null
     */
    public function getFareResponseUserData()
    {
        return isset($this->FareResponseUserData) ? $this->FareResponseUserData : null;
    }
    /**
     * Set FareResponseUserData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseUserData[] $fareResponseUserData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseUserData
     */
    public function setFareResponseUserData(array $fareResponseUserData = array())
    {
        foreach ($fareResponseUserData as $arrayOfFareResponseUserDataFareResponseUserDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareResponseUserDataFareResponseUserDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseUserData) {
                throw new \InvalidArgumentException(sprintf('The FareResponseUserData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseUserData, "%s" given', is_object($arrayOfFareResponseUserDataFareResponseUserDataItem) ? get_class($arrayOfFareResponseUserDataFareResponseUserDataItem) : gettype($arrayOfFareResponseUserDataFareResponseUserDataItem)), __LINE__);
            }
        }
        if (is_null($fareResponseUserData) || (is_array($fareResponseUserData) && empty($fareResponseUserData))) {
            unset($this->FareResponseUserData);
        } else {
            $this->FareResponseUserData = $fareResponseUserData;
        }
        return $this;
    }
    /**
     * Add item to FareResponseUserData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseUserData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseUserData
     */
    public function addToFareResponseUserData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseUserData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseUserData) {
            throw new \InvalidArgumentException(sprintf('The FareResponseUserData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseUserData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareResponseUserData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseUserData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseUserData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseUserData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseUserData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseUserData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FareResponseUserData
     */
    public function getAttributeName()
    {
        return 'FareResponseUserData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseUserData
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
