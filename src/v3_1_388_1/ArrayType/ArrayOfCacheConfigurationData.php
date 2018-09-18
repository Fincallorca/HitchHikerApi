<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCacheConfigurationData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCacheConfigurationData
 * @subpackage Arrays
 */
class ArrayOfCacheConfigurationData extends AbstractStructArrayBase
{
    /**
     * The CacheConfigurationData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData[]
     */
    public $CacheConfigurationData;
    /**
     * Constructor method for ArrayOfCacheConfigurationData
     * @uses ArrayOfCacheConfigurationData::setCacheConfigurationData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData[] $cacheConfigurationData
     */
    public function __construct(array $cacheConfigurationData = array())
    {
        $this
            ->setCacheConfigurationData($cacheConfigurationData);
    }
    /**
     * Get CacheConfigurationData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData[]|null
     */
    public function getCacheConfigurationData()
    {
        return isset($this->CacheConfigurationData) ? $this->CacheConfigurationData : null;
    }
    /**
     * Set CacheConfigurationData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData[] $cacheConfigurationData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheConfigurationData
     */
    public function setCacheConfigurationData(array $cacheConfigurationData = array())
    {
        foreach ($cacheConfigurationData as $arrayOfCacheConfigurationDataCacheConfigurationDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfCacheConfigurationDataCacheConfigurationDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData) {
                throw new \InvalidArgumentException(sprintf('The CacheConfigurationData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData, "%s" given', is_object($arrayOfCacheConfigurationDataCacheConfigurationDataItem) ? get_class($arrayOfCacheConfigurationDataCacheConfigurationDataItem) : gettype($arrayOfCacheConfigurationDataCacheConfigurationDataItem)), __LINE__);
            }
        }
        if (is_null($cacheConfigurationData) || (is_array($cacheConfigurationData) && empty($cacheConfigurationData))) {
            unset($this->CacheConfigurationData);
        } else {
            $this->CacheConfigurationData = $cacheConfigurationData;
        }
        return $this;
    }
    /**
     * Add item to CacheConfigurationData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheConfigurationData
     */
    public function addToCacheConfigurationData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData) {
            throw new \InvalidArgumentException(sprintf('The CacheConfigurationData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CacheConfigurationData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheConfigurationData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CacheConfigurationData
     */
    public function getAttributeName()
    {
        return 'CacheConfigurationData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheConfigurationData
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
