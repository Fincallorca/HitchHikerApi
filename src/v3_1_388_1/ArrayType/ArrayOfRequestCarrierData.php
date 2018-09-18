<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRequestCarrierData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRequestCarrierData
 * @subpackage Arrays
 */
class ArrayOfRequestCarrierData extends AbstractStructArrayBase
{
    /**
     * The RequestCarrierData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData[]
     */
    public $RequestCarrierData;
    /**
     * Constructor method for ArrayOfRequestCarrierData
     * @uses ArrayOfRequestCarrierData::setRequestCarrierData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData[] $requestCarrierData
     */
    public function __construct(array $requestCarrierData = array())
    {
        $this
            ->setRequestCarrierData($requestCarrierData);
    }
    /**
     * Get RequestCarrierData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData[]|null
     */
    public function getRequestCarrierData()
    {
        return isset($this->RequestCarrierData) ? $this->RequestCarrierData : null;
    }
    /**
     * Set RequestCarrierData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData[] $requestCarrierData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRequestCarrierData
     */
    public function setRequestCarrierData(array $requestCarrierData = array())
    {
        foreach ($requestCarrierData as $arrayOfRequestCarrierDataRequestCarrierDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfRequestCarrierDataRequestCarrierDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData) {
                throw new \InvalidArgumentException(sprintf('The RequestCarrierData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData, "%s" given', is_object($arrayOfRequestCarrierDataRequestCarrierDataItem) ? get_class($arrayOfRequestCarrierDataRequestCarrierDataItem) : gettype($arrayOfRequestCarrierDataRequestCarrierDataItem)), __LINE__);
            }
        }
        if (is_null($requestCarrierData) || (is_array($requestCarrierData) && empty($requestCarrierData))) {
            unset($this->RequestCarrierData);
        } else {
            $this->RequestCarrierData = $requestCarrierData;
        }
        return $this;
    }
    /**
     * Add item to RequestCarrierData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRequestCarrierData
     */
    public function addToRequestCarrierData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData) {
            throw new \InvalidArgumentException(sprintf('The RequestCarrierData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RequestCarrierData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCarrierData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RequestCarrierData
     */
    public function getAttributeName()
    {
        return 'RequestCarrierData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRequestCarrierData
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
