<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOSIRequestData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOSIRequestData
 * @subpackage Arrays
 */
class ArrayOfOSIRequestData extends AbstractStructArrayBase
{
    /**
     * The OSIRequestData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\OSIRequestData[]
     */
    public $OSIRequestData;
    /**
     * Constructor method for ArrayOfOSIRequestData
     * @uses ArrayOfOSIRequestData::setOSIRequestData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\OSIRequestData[] $oSIRequestData
     */
    public function __construct(array $oSIRequestData = array())
    {
        $this
            ->setOSIRequestData($oSIRequestData);
    }
    /**
     * Get OSIRequestData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\OSIRequestData[]|null
     */
    public function getOSIRequestData()
    {
        return isset($this->OSIRequestData) ? $this->OSIRequestData : null;
    }
    /**
     * Set OSIRequestData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\OSIRequestData[] $oSIRequestData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfOSIRequestData
     */
    public function setOSIRequestData(array $oSIRequestData = array())
    {
        foreach ($oSIRequestData as $arrayOfOSIRequestDataOSIRequestDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfOSIRequestDataOSIRequestDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\OSIRequestData) {
                throw new \InvalidArgumentException(sprintf('The OSIRequestData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\OSIRequestData, "%s" given', is_object($arrayOfOSIRequestDataOSIRequestDataItem) ? get_class($arrayOfOSIRequestDataOSIRequestDataItem) : gettype($arrayOfOSIRequestDataOSIRequestDataItem)), __LINE__);
            }
        }
        if (is_null($oSIRequestData) || (is_array($oSIRequestData) && empty($oSIRequestData))) {
            unset($this->OSIRequestData);
        } else {
            $this->OSIRequestData = $oSIRequestData;
        }
        return $this;
    }
    /**
     * Add item to OSIRequestData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\OSIRequestData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfOSIRequestData
     */
    public function addToOSIRequestData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\OSIRequestData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\OSIRequestData) {
            throw new \InvalidArgumentException(sprintf('The OSIRequestData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\OSIRequestData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OSIRequestData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\OSIRequestData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\OSIRequestData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\OSIRequestData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\OSIRequestData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\OSIRequestData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OSIRequestData
     */
    public function getAttributeName()
    {
        return 'OSIRequestData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfOSIRequestData
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
