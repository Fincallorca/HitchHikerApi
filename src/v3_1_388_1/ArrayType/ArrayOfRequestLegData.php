<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRequestLegData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRequestLegData
 * @subpackage Arrays
 */
class ArrayOfRequestLegData extends AbstractStructArrayBase
{
    /**
     * The RequestLegData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestLegData[]
     */
    public $RequestLegData;
    /**
     * Constructor method for ArrayOfRequestLegData
     * @uses ArrayOfRequestLegData::setRequestLegData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestLegData[] $requestLegData
     */
    public function __construct(array $requestLegData = array())
    {
        $this
            ->setRequestLegData($requestLegData);
    }
    /**
     * Get RequestLegData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestLegData[]|null
     */
    public function getRequestLegData()
    {
        return isset($this->RequestLegData) ? $this->RequestLegData : null;
    }
    /**
     * Set RequestLegData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestLegData[] $requestLegData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRequestLegData
     */
    public function setRequestLegData(array $requestLegData = array())
    {
        foreach ($requestLegData as $arrayOfRequestLegDataRequestLegDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfRequestLegDataRequestLegDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestLegData) {
                throw new \InvalidArgumentException(sprintf('The RequestLegData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestLegData, "%s" given', is_object($arrayOfRequestLegDataRequestLegDataItem) ? get_class($arrayOfRequestLegDataRequestLegDataItem) : gettype($arrayOfRequestLegDataRequestLegDataItem)), __LINE__);
            }
        }
        if (is_null($requestLegData) || (is_array($requestLegData) && empty($requestLegData))) {
            unset($this->RequestLegData);
        } else {
            $this->RequestLegData = $requestLegData;
        }
        return $this;
    }
    /**
     * Add item to RequestLegData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestLegData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRequestLegData
     */
    public function addToRequestLegData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestLegData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestLegData) {
            throw new \InvalidArgumentException(sprintf('The RequestLegData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestLegData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RequestLegData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestLegData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestLegData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestLegData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestLegData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestLegData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RequestLegData
     */
    public function getAttributeName()
    {
        return 'RequestLegData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRequestLegData
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
